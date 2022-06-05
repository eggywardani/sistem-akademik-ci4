<?php

namespace App\Controllers;

use App\Models\GuruModel;
use App\Models\MapelModel;

class Guru extends BaseController
{

    protected $guruModel;
    public function __construct()
    {
        $this->guruModel = new GuruModel();
    }

    public function create()
    {
        $data = [
            'title' => 'SIA | Tambah Guru'
        ];
        echo view('pages/guru/create', $data);
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


        $this->guruModel->save([
            'nip' => $this->request->getVar('nip'),
            'nama' => $this->request->getVar('nama'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'alamat' => $this->request->getVar('alamat'),
            'pangkat_golongan' => $this->request->getVar('pangkat'),
            'tmt' => $this->request->getVar('tmt'),
            'jekel' => $this->request->getVar('jekel'),
            'pendidikan_terakhir' => $this->request->getVar('pend_terakhir'),
            'no_hp' => $this->request->getVar('no_hp'),
            'password' => $this->request->getVar('password'),
            'foto' => $namaFoto,

        ]);
        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to('guru');
    }


    public function delete($id)
    {
        $guru = $this->guruModel->find($id);

        if ($guru['foto'] != 'img.png') {
            unlink('img/' . $guru['foto']);
        }

        $this->guruModel->delete($id);
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to('guru');
    }

    public function show($id)
    {

        $dataGuru = $this->guruModel->getGuruById($id);
        $data = [
            'title' => 'SIA | ' . $dataGuru['nama'],
            'guru' => $dataGuru
        ];
        echo view('pages/guru/show', $data);
    }
    public function edit($id)
    {

        $data = [
            'title' => 'SIA | Ubah Data Guru',
            'guru' => $this->guruModel->getGuruById($id)
        ];
        echo view('pages/guru/edit', $data);
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


        $this->guruModel->save([
            'id' => $id,
            'nip' => $this->request->getVar('nip'),
            'nama' => $this->request->getVar('nama'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'alamat' => $this->request->getVar('alamat'),
            'pangkat_golongan' => $this->request->getVar('pangkat'),
            'tmt' => $this->request->getVar('tmt'),
            'jekel' => $this->request->getVar('jekel'),
            'pendidikan_terakhir' => $this->request->getVar('pend_terakhir'),
            'no_hp' => $this->request->getVar('no_hp'),
            'password' => $this->request->getVar('password'),
            'foto' => $namaFoto,

        ]);
        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->to('guru');
    }
}
