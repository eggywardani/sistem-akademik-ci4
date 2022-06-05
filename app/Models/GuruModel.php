<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
    protected $table      = 'guru';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'nip',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'pangkat_golongan',
        'tmt',
        'jekel',
        'pendidikan_terakhir',
        'no_hp',
        'password',
        'foto',
    ];


    public function getGuru()
    {
        return $this->findAll();
    }
    public function getGuruById($id)
    {
        return
            $this->where(['id' => $id])->first();
    }

    public function getJumlahGuru()
    {
        $builder = $this->db->table('guru');
        $rows = $builder->select('*')->countAll();
        return $rows;
    }
}
