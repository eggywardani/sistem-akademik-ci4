<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table      = 'siswa';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'nis',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'no_kk',
        'nik',
        'jekel',
        'agama',
        'no_hp',
        'password',
        'foto',
        'kelas'
    ];


    public function getSiswa()
    {
        return $this->findAll();
    }
    public function getSiswaById($id)
    {
        return
            $this->where(['id' => $id])->first();
    }
    public function getSiswaByKelas($kelas)
    {
        return $this->db->query("SELECT * FROM siswa WHERE kelas = $kelas")->getResultArray();
    }


    public function naikKelas()
    {
        return $this->db->table('siswa');
    }

    public function getJumlahSiswa()
    {
        $builder = $this->db->table('siswa');
        $rows = $builder->select('*')->countAll();
        return $rows;
    }
}
