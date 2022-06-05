<?php

namespace App\Controllers;

use App\Models\GuruModel;
use App\Models\MapelModel;

class Mapel extends BaseController
{

    protected $mapelModel;
    protected $guruModel;

    public function __construct()
    {
        $this->mapelModel = new MapelModel();
        $this->guruModel = new GuruModel();
    }


    public function create()
    {
        $data = [
            'title' => 'SIA | Tambah Mata Pelajaran',
            'guru' => $this->guruModel->getGuru()
        ];
        echo view('pages/mapel/create', $data);
    }
    public function save()
    {
        $this->mapelModel->save([
            'nama_mapel' => $this->request->getVar('mapel'),
            'kkm' => $this->request->getVar('kkm'),
            'kelas' => $this->request->getVar('kelas'),
            'id_guru' => $this->request->getVar('guru')
        ]);
        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to('mapel');
    }


    public function delete($id)
    {
        $this->mapelModel->delete($id);
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to('mapel');
    }

    public function edit($id)
    {

        $data = [
            'title' => 'SIA | Ubah Data Mata Pelajaran',
            'mapel' => $this->mapelModel->getMapelById($id),
            'guru' => $this->guruModel->getGuru()
        ];
        echo view('pages/mapel/edit', $data);
    }

    public function show($id)
    {

        $data = [
            'title' => 'SIA | ' . $this->mapelModel->getMapelById($id)->nama_mapel,
            'mapel' => $this->mapelModel->getMapelById($id)
        ];
        echo view('pages/mapel/show', $data);
    }


    public function update($id)
    {

        $this->mapelModel->save([
            'id' => $id,
            'nama_mapel' => $this->request->getVar('mapel'),
            'kkm' => $this->request->getVar('kkm'),
            'kelas' => $this->request->getVar('kelas'),
        ]);
        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->to('mapel');
    }
}
