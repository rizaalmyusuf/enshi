<?php

namespace App\Models;

use CodeIgniter\Model;

class KamusModel extends Model
{
    protected $table = 'dictionary';

    public function cariIstilah($table, $whichColumn, $value)
    {
        return $this->query("SELECT * FROM $table WHERE $whichColumn LIKE '%$value%'");
    }
}
