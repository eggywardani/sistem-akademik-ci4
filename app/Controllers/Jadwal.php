<?php

namespace App\Controllers;

use App\Models\GuruModel;
use App\Models\JadwalModel;
use App\Models\MapelModel;

class Jadwal extends BaseController
{

    protected $mapelModel;
    protected $guruModel;
    protected $jadwalModel;


    public function __construct()
    {
        $this->mapelModel = new MapelModel();
        $this->jadwalModel = new JadwalModel();
        $this->guruModel = new GuruModel();
    }


    public function create()
    {
        $data = [
            'title' => 'SIA | Tambah Jadwal',
            'guru' => $this->guruModel->getGuru(),
            'mapel' => $this->mapelModel->getMapel()

        ];
        echo view('pages/jadwal/create', $data);
    }
    public function save()
    {

        $this->jadwalModel->save([
            'id_guru' => $this->request->getVar('guru'),
            'id_mapel' => $this->request->getVar('mapel'),
            'kelas' => $this->request->getVar('kelas'),
            'tahun_ajaran' => $this->request->getVar('tahun_ajaran'),

            'semester' => $this->request->getVar('semester'),
            'hari' => $this->request->getVar('hari'),
            'jam_mulai' => $this->request->getVar('jam_mulai'),
            'jam_selesai' => $this->request->getVar('jam_selesai'),


        ]);
        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to('jadwal');
    }


    public function delete($id)
    {
        $this->jadwalModel->delete($id);
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to('jadwal');
    }

    public function edit($id)
    {

        $data = [
            'title' => 'SIA | Ubah Jadwal',
            'guru' => $this->guruModel->getGuru(),
            'mapel' => $this->mapelModel->getMapel(),
            'jadwal' => $this->jadwalModel->getJadwalById($id)

        ];
        echo view('pages/jadwal/edit', $data);
    }

    public function show($id)
    {

        $data = [
            'title' => 'SIA | Jadwal ' . $this->jadwalModel->getJadwalById($id)->nama_mapel,
            'jadwal' => $this->jadwalModel->getJadwalById($id)

        ];
        echo view('pages/jadwal/show', $data);
    }






    public function update($id)
    {

        $this->jadwalModel->save([
            'id' => $id,
            'id_guru' => $this->request->getVar('guru'),
            'id_mapel' => $this->request->getVar('mapel'),
            'kelas' => $this->request->getVar('kelas'),
            'tahun_ajaran' => $this->request->getVar('tahun_ajaran'),

            'semester' => $this->request->getVar('semester'),
            'hari' => $this->request->getVar('hari'),
            'jam_mulai' => $this->request->getVar('jam_mulai'),
            'jam_selesai' => $this->request->getVar('jam_selesai'),


        ]);
        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->to('jadwal');
    }
}
