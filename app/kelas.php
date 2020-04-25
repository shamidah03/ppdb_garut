<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table = 'tb_kelas';
    protected $primaryKey = 'id_kelas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_kelas','kelas',
    ];
    public function getKelas(){
        return $this->select('*')->get();
    }

}
