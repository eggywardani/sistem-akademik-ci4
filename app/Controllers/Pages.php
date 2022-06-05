<?php

namespace App\Controllers;

use App\Models\MapelModel;
use App\Models\GuruModel;
use App\Models\JadwalModel;
use App\Models\SiswaModel;

class Pages extends BaseController
{
    protected $mapelModel;
    protected $guruModel;
    protected $siswaModel;
    protected $jadwalModel;


    public function __construct()
    {
        $this->mapelModel = new MapelModel();
        $this->guruModel = new GuruModel();
        $this->siswaModel = new SiswaModel();
        $this->jadwalModel = new JadwalModel();
    }
    public function index()
    {

        $data = [
            'title' => 'Sistem Informasi Akademik',
            'guru' => $this->guruModel->getJumlahGuru(),
            'siswa' => $this->siswaModel->getJumlahSiswa(),
            'mapel' => $this->mapelModel->getJumlahMapel()

        ];
        echo view('pages/dashboard-tu', $data);
    }


    public function mapel()
    {
        $data = [
            'title' => 'SIA | Daftar Mapel',
            'mapel' => $this->mapelModel->getMapel()
        ];
        echo view('pages/mapel/index', $data);
    }

    public function guru()
    {
        $data = [
            'title' => 'SIA | Daftar Guru',
            'guru' => $this->guruModel->getGuru()
        ];
        echo view('pages/guru/index', $data);
    }

    public function siswa()
    {
        $data = [
            'title' => 'SIA | Daftar Siswa',
            'siswa' => $this->siswaModel->getSiswa()
        ];
        echo view('pages/siswa/index', $data);
    }

    public function jadwal()
    {
        $data = [
            'title' => 'SIA | Daftar Jadwal',
            'jadwal' => $this->jadwalModel->getJadwal()
        ];
        echo view('pages/jadwal/index', $data);
    }


    public function kelassiswa()
    {
        $data = [
            'title' => 'SIA | Daftar Kelas Siswa',
            'siswa' => $this->siswaModel->getSiswa()
        ];
        echo view('pages/kelassiswa/index', $data);
    }
}
