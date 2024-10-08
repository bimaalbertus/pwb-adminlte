<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::get();

        return view('admin.siswa.index', compact('siswas'));
    }

    public function indexFE()
    {
        $siswas = Siswa::get();

        return view('index', compact('siswas'));
    }

    public function createView()
    {
        return view('admin.siswa.create');
    }

    public function updateView($id)
    {
        $siswa = Siswa::findOrFail($id);

        return view('admin.siswa.update', compact('siswa'));
    }

    public function create()
    {
        Siswa::create([
            "nama" => request("nama"),
            "kelas" => request("kelas"),
            "jurusan" => request("jurusan"),
        ]);

        return redirect("/admin/siswa")->with("berhasil", "Kamu berhasil");
    }

    public function delete($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect("/admin/siswa")->with("berhasil", "Kamu berhasil");
    }

    public function deleteAll()
    {
        Siswa::truncate();

        return redirect("/admin/siswa")->with("berhasil", "Kamu berhasil, data siswa dihapus semua");
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string',
            'kelas' => 'required|string',
            'jurusan' => 'required|string'
        ]);

        $siswa = Siswa::findOrFail($id);

        $siswa->update([
            'nama' => request('nama'),
            'kelas' => request('kelas'),
            'jurusan' => request('jurusan'),
        ]);

        return redirect("/admin/siswa")->with("berhasil", "Kamu berhasil");
    }
}
