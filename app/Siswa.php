<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    protected $table = 'siswa_new';
    protected $primaryKey = 'id_siswa';
    
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_siswa', 'nama_lengkap', 'nama_panggilan','jk','tempat','tanggal_lahir','agama',
        'cita','hobi','anak','kandung','tiri','angkat','bb','tb','gd','alamat_rumah','kelurahan',
        'kecamatan','kabupaten','provinsi','telp_rumah','e_mail','tinggal_dengan','penyakit_derita',
        'kelainan_jasmani','id_mapel',
    ];

    public function getAll(){
        return $this->select('*')->get();
    }

    public function getById($id){
        return $this->select('*')
                ->where('id_siswa', $id)
                ->get();
    }
    public function getJoinMapel(){
        return $this->select('*')
        ->join('tb_siswa','tb_pelajaran.id_siswa','=','tb_siswa.id_mapel')
        ->join('tb_siswa','tb_kelas.id_siswa','=','tb_siswa.id_kelas')
        ->get();
    }
}
