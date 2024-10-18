<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;
    
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index(){
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];

        return view('list_user', $data );
    }

    public function profile($nama = '', $kelas = '', $npm = '')
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm
        ];

        return view('profile', $data);
    }

    public function create(){

        $kelasModel = new Kelas();

        $kelas = $kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data );
    }

    public function update(Request $request, $id){
        $user = UserModel::findOrFail($id);

        $user->nama = $request->nama;
        $user->npm = $request->npm;
        $user->kelas_id = $request->kelas_id;

        if ($request->hasFile('foto')) {
            $oldFilename = $user->foto;
            if ($oldFilename) {
                $oldFilePath = public_path('assets/upload/img/' . $oldFilename);
                // Cek apakah file lama ada dan hapus
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath); // Hapus foto lama dari folder
                }
            }

            $foto = $request->file('foto');
            $fotoName = time() . '_' . $foto->getClientOriginalName();
            $fotoPath = $foto->move(public_path('assets/upload/img'), $fotoName);
            $user->foto = $fotoName;
        }

        $user->save();

        return redirect()->to('/user')->with('success', 'User updated successfully');
    }
    
    public function store(Request $request)
    {
        $request->validate([
        'nama' => 'required|string|max:255',
        'npm' => 'required|string|max:255',
        'kelas_id' => 'required|integer',
        'foto' => 'image|file|max:2048',
        ]);
    
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '_' . $foto->getClientOriginalName();
            $fotoPath = $foto->move(public_path('assets/upload/img'), $fotoName);
        } else {
            $fotoPath = null; // Jika tidak ada foto yang diupload
        }

            $this->userModel->create([
                'nama' => $request->input('nama'),
                'npm' => $request->input('npm'),
                'kelas_id' => $request->input('kelas_id'),
                'foto' => $fotoPath ? $fotoName : null, 
            ]);
        
        return redirect()->to('/user')->with('success', 'User berhasil ditambahkan');
        }

    public function show($id){
        $user = $this->userModel->getUser($id);
    
        $data = [
            'title' => 'Profile',
            'user'  => $user,
        ];
    
        return view ('profile',$data);
    }

    public function edit($id){
        $user = UserModel::findOrFail($id);
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();
        $title = 'Edit User';
        return view ('edit_user', compact('user', 'kelas', 'title'));
    }

    public function destroy($id){
        $user = UserModel::findOrFail($id);
        $user->delete();

        return redirect()->to('/user')->with('success', 'User berhasil dihapus');
    }
}