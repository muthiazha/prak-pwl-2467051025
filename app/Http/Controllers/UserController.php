<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    public function create() {
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }
    
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

 public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'npm' => 'required',
        'kelas_id' => 'required|exists:kelas,id',
    ], [
        'nama.required' => 'Nama wajib diisi.',
        'npm.required' => 'NPM wajib diisi.',
        'kelas_id.required' => 'Kelas wajib dipilih.',
        'kelas_id.exists' => 'Kelas yang dipilih tidak valid.',
    ]);

    $this->userModel->create([
        'nama' => $request->input('nama'),
        'npm' => $request->input('npm'),
        'kelas_id' => $request->input('kelas_id'),
    ]);

    return redirect()->to('/user')->with('success', 'Data berhasil ditambahkan!');
}

public function index()
{
    
    $data = [
        'title' => 'List User',
        'users' => $this->userModel->getUser(),
    ];

    return view('list_user', $data);
    }
    public function edit($id)
{
    $user = UserModel::findOrFail($id);
    $kelas = $this->kelasModel->getKelas();

    return view('edit_user', [
        'title' => 'Edit User',
        'user' => $user,
        'kelas' => $kelas,
    ]);
}

public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required',
        'npm' => 'required',
        'kelas_id' => 'required|exists:kelas,id',
    ], [
        'nama.required' => 'Nama wajib diisi.',
        'npm.required' => 'NPM wajib diisi.',
        'kelas_id.required' => 'Kelas wajib dipilih.',
        'kelas_id.exists' => 'Kelas yang dipilih tidak valid.',
    ]);

    $user = UserModel::findOrFail($id);
    $user->update([
        'nama' => $request->input('nama'),
        'npm' => $request->input('npm'),
        'kelas_id' => $request->input('kelas_id'),
    ]);

    return redirect()->to('/user')->with('success', 'Data berhasil diperbarui!');
}

public function destroy($id)
{
    $user = UserModel::findOrFail($id);
    $user->delete();

    return redirect()->to('/user')->with('success', 'Data berhasil dihapus!');
    }
}


    