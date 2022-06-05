<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $table      = 'jadwal';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'id_guru',
        'id_mapel',
        'kelas',
        'tahun_ajaran',
        'semester',
        'hari',
        'jam_mulai',
        'jam_selesai'
    ];


    public function getJadwal()
    {
        return $this->db->query("SELECT jadwal.*, guru.id as guru_id, guru.nama, mapel.id as mapel_id, mapel.nama_mapel  FROM jadwal JOIN mapel ON mapel.id = jadwal.id_mapel JOIN guru ON guru.id = jadwal.id_guru")->getResult();
    }
    public function getJadwalById($id)
    {
        return $this->db->query("SELECT jadwal.*, guru.id as guru_id, guru.nama, mapel.id as mapel_id, mapel.nama_mapel  FROM jadwal JOIN mapel ON mapel.id = jadwal.id_mapel JOIN guru ON guru.id = jadwal.id_guru WHERE jadwal.id = $id")->getFirstRow();
    }
}
