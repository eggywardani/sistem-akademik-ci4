<?php

namespace App\Models;

use CodeIgniter\Model;

class MapelModel extends Model
{
    protected $table      = 'mapel';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_mapel', 'kkm', 'kelas', 'id_guru'];


    public function getMapel()
    {
        return $this->db->query("SELECT mapel.* , guru.id as guru_id, guru.nama as nama_guru FROM guru JOIN mapel ON mapel.id_guru = guru.id")->getResult();
    }
    public function getMapelById($id)
    {
        return $this->db->query("SELECT mapel.* , guru.id as guru_id, guru.nama as nama_guru FROM guru JOIN mapel ON mapel.id_guru = guru.id WHERE mapel.id = $id")->getFirstRow();
    }

    public function getJumlahMapel()
    {
        $builder = $this->db->table('siswa');
        $rows = $builder->select('*')->countAll();
        return $rows;
    }
}
