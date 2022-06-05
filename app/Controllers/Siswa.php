<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class Siswa extends BaseController
{

    protected $siswaModel;
    public function __construct()
    {
        $this->siswaModel = new SiswaModel();
    }

    public function create()
    {
        $data = [
            'title' => 'SIA | Tambah Siswa'
        ];
        echo view('pages/siswa/create', $data);
    }

    public function save()
    {

        $foto = $this->request->getFile('foto');

        if (!is_uploaded_file($_FILES['foto']['tmp_name'])) {
            $namaFoto = 'img.png';
        } else {
            $namaFoto = $foto->getRandomName();
            $foto->move('img', $namaFoto);
        }


        $this->siswaModel->save([
            'nis' => $this->request->getVar('nis'),
            'nama' => $this->request->getVar('nama'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'alamat' => $this->request->getVar('alamat'),
            'no_kk' => $this->request->getVar('no_kk'),
            'nik' => $this->request->getVar('nik'),
            'jekel' => $this->request->getVar('jekel'),
            'agama' => $this->request->getVar('agama'),
            'no_hp' => $this->request->getVar('no_hp'),
            'password' => $this->request->getVar('password'),
            'foto' => $namaFoto,
            'kelas' => $this->request->getVar('kelas'),

        ]);
        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to('siswa');
    }


    public function delete($id)
    {
        $siswa = $this->siswaModel->find($id);

        if ($siswa['foto'] != 'img.png') {
            unlink('img/' . $siswa['foto']);
        }

        $this->siswaModel->delete($id);
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to('siswa');
    }

    public function edit($id)
    {

        $data = [
            'title' => 'SIA | Ubah Data Siswa',
            'siswa' => $this->siswaModel->getSiswaById($id)
        ];
        echo view('pages/siswa/edit', $data);
    }



    public function show($id)
    {

        $dataSiswa = $this->siswaModel->getSiswaById($id);
        $data = [
            'title' => 'SIA | ' . $dataSiswa['nama'],
            'siswa' => $dataSiswa
        ];
        echo view('pages/siswa/show', $data);
    }

    public function update($id)
    {

        $foto = $this->request->getFile('foto');

        if (!is_uploaded_file($_FILES['foto']['tmp_name'])) {
            $namaFoto = $this->request->getVar('old-foto');
        } else {
            $namaFoto = $foto->getRandomName();
            $foto->move('img', $namaFoto);
            unlink('img/' . $this->request->getVar('old-foto'));
        }


        $this->siswaModel->save([
            'id' => $id,
            'nis' => $this->request->getVar('nis'),
            'nama' => $this->request->getVar('nama'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'alamat' => $this->request->getVar('alamat'),
            'no_kk' => $this->request->getVar('no_kk'),
            'nik' => $this->request->getVar('nik'),
            'jekel' => $this->request->getVar('jekel'),
            'agama' => $this->request->getVar('agama'),
            'no_hp' => $this->request->getVar('no_hp'),
            'password' => $this->request->getVar('password'),
            'foto' => $namaFoto,
            'kelas' => $this->request->getVar('kelas'),

        ]);
        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->to('siswa');
    }



    public function cari()
    {
        $kelas = $this->request->getVar('kelas');
        $builder = $this->siswaModel->naikKelas()->set(['kelas' => $kelas + 1])->where('kelas', $kelas);
        if ($kelas != 0) {
            $builder->update();
            session()->setFlashdata('success', "Berhasil");
            return redirect()->to('kelassiswa');
        } else if ($kelas == 0) {
            session()->setFlashdata('failed', "Pilih Kelas Terlebih dahulu");
            return redirect()->to('kelassiswa');
        }
    }
}
