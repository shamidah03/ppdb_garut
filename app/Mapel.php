<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'tb_pelajaran';
    protected $primaryKey = 'id_mapel';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_mapel','kelas','mapel','semester',
    ];
    public function getMapel(){
        return $this->select('*')->get();
    }

}
