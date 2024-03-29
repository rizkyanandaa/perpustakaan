<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Models\ModelRole;
use Image;

class OperatorController extends Controller
{
	public function index(){
    	$title = 'List Operator';
    	$data = User::where('role', 2)->get();

    	return view('operator.operator_index', compact('title', 'data'));
    }

    public function add(){
        $title = 'Tambah Operator Perpustakaan';

        return view('operator.operator_add', compact('title'));
    }

    public function store(Request $request){
        if ($request->file('foto')) {
            $foto = $request->file('foto');

            $foto_name = time().'.'.$foto->getClientOriginalExtension();
            $request->file('foto')->move("profil/", $foto_name);
            $image = Image::make('profil/'. $foto_name)->orientate();
            $image->resize(200, 200);
            $image->save('profil/'. $foto_name);
        }

        User::insert([
            'role' => 2,
            'name' => $request->name,
            'email' => $request->email,
            'foto' => $foto->getClientOriginalName(),
            'password' => Hash::make($request['password']),
            'remember_token' => str_random(60),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        toastr()->success('Operator baru telah ditambahkan!');
        return redirect('master/operator');
    }

    public function edit($id){
        $title = 'Edit Operator';
        $dt = User::where('id', $id)->first();

        return view('operator.operator_edit', compact('title', 'dt'));
    }

    public function update(Request $request, $id){
        if ($request->file('foto')) {
            $foto = $request->file('foto');

            $foto_name = time().'.'.$foto->getClientOriginalExtension();
            $request->file('foto')->move("profil/", $foto_name);
            $image = Image::make('profil/'. $foto_name)->orientate();
            $image->resize(200, 200);
            $image->save('profil/'. $foto_name);

            User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'foto' => $foto_name,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }else{
            User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
        toastr()->success('Operator berhasil diupdate!');
        return redirect('master/operator');
    }

    public function delete($id){
        User::where('id', $id)->delete();
        toastr()->success('Operator berhasil dihapus!');
        return redirect('master/operator');
    }

    public function profil($id){
        $title = 'Profil';
        $user = User::where('id', $id)->get();

        return view('profil.profil', compact('title', 'user'));
    }

    public function updateprofil(Request $request, $id){
        $name = $request->name;
        $email = $request->email;

        User::where('id', $id)->update([
            'name' => $name,
            'email' => $email,
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        toastr()->success('Data profil berhasil di Update!');
        return redirect('master/profil/'.$id);
    }

    public function editfoto(Request $request, $id){
        $user = User::findOrFail($id);
        
        if ($request->file('foto')) {
            $foto = $request->file('foto');

            $foto_name = time().'.'.$foto->getClientOriginalExtension();
            $request->file('foto')->move("profil/", $foto_name);
            $image = Image::make('profil/'. $foto_name)->orientate();
            $image->resize(200, 200);
            $image->save('profil/'. $foto_name);
        }

        $user->foto = $foto_name;
        $user->updated_at = date('Y-m-d H:i:s');
        $user->save();
    
        toastr()->success('Foto profil berhasil diupdate!');
        return redirect('master/profil/'.$id);
    }

    public function editpass(Request $request, $id){
        $password = $request->password;

        User::where('id', $id)->update([
            'password' => Hash::make($request['password']),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        toastr()->success('Password berhasil di Update!');
        return redirect('master/profil/'.$id);
    }
}
