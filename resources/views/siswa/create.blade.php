@extends('layouts.home')

@section('content')
<div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            FORMULIR PENDAFTARAN PESERTA DIDIK BARU TAHUN 2020-2021 <small>.</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
              @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(session('sukses'))
                <div class="alert alert-success" role="alert">
                    Data Berhasil Ditambah
                </div>
                @endif    
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                    <form role="form" action="{{ url('siswa/store')}}" method="POST">
                                    {{csrf_field()}}
                                    <div class="panel-heading" style="margin-bottom: 5%;">
                                            <h3 style="margin-left: 35%;margin-bottom: %;">Data Murid Baru</h3>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Nama Lengkap</label>
                                            <input class="form-control" type="text" name="nama_lengkap"required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Nama Panggilan</label>
                                            <input class="form-control" type="text" name="nama_panggilan" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleFormControlSelect1" >Jenis Kelamin</label>
                                            <select name="jk"class="form-control" id="exampleFormControlSelect1" required>
                                            <option value="Laki-laki">laki-laki</option>
                                            <option value="perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="date" name="tanggal_lahir" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleFormControlSelect1" >Agama</label>
                                            <select name="agama"class="form-control" id="exampleFormControlSelect1" required>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Khonghucu">Khonghuchu</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Cita-cita</label>
                                            <input class="form-control" type="text" name="cita" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Hobi</label>
                                            <input class="form-control" type="text" name="hobi" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                           
                                            <label>anak - Ke</label>
                                            <input class="form-control" type="number" name="anak" required>
                                        </div>
                                        <div class="panel-heading" style="margin-bottom: 3%;margin-left: 20%;">
                                            <h3>Saudara</h3>
                                        </div>
                                        <div class="form-group col-md-2">
                                       
                                            <label style="margin-left: 25%;">kandung</label>
                                            <input class="form-control"type="number" name="kandung" required>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label style="margin-left: 40%;" >Tiri</label>
                                            <input class="form-control" type="number" name="tiri" required>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label style="margin-left: 25%;">Angkat</label>
                                            <input class="form-control" type="number" name="angkat" required>
                                        </div>
                                        
                                        <div class="form-group col-md-2">
                                            <label>Berat Badan</label>
                                            <input class="form-control" type="number" name="bb" required>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Tinggi Badan</label>
                                            <input class="form-control" type="number" name="tb" required>
                                        </div>
                                        <div class="form-group col-md-2" style="margin-bottom: 10%;">
                                            <label for="exampleFormControlSelect1" >Gol-darah</label>
                                            <select name="gd"class="form-control" id="exampleFormControlSelect1" required>
                                            <option value="A">A</option>
                                            <option value="AB">AB</option>
                                            <option value="B">B</option>
                                            <option value="O">O</option>
                                            </select>
                                        </div>
                                        <div class="panel-heading" style="margin-bottom: 5%;">
                                            <h3 style="margin-left: 35%;margin-bottom: %;">Keterangan Tempat Tinggal</h3>
                                        </div>
                                        <div class="form-group col-md-6" style="margin-left: 25%;">
                                            <label style="margin-left: 40%;">Alamat Rumah</label>
                                            <textarea class="form-control" rows=""  name="alamat_rumah" required></textarea>
                                        </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Keluarahan</label>
                                            <input class="form-control" type="text" name="kelurahan" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Kecamatan</label>
                                            <input class="form-control" type="text" name="kecamatan" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Kabupaten</label>
                                            <input class="form-control" type="text" name="kabupaten" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Provinsi</label>
                                            <input class="form-control" type="text" name="provinsi" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>No.Telp Rumah</label>
                                            <input class="form-control" type="number" name="telp_rumah" required>
                                        </div>
                                        <div class="form-group col-md-6" >
                                            <label>E-mail</label>
                                            <input class="form-control" type="email" name="e_mail" required>
                                        </div>
                                        <div class="form-group col-md-6" style="margin-bottom: 5%;">
                                            <label for="exampleFormControlSelect1" >Tinggal Dengan</label>
                                            <select name="tinggal_dengan"class="form-control" id="exampleFormControlSelect1" required>
                                            <option >--pilih--</option>
                                            <option value="ortu">Orang Tua</option>
                                            <option value="asrama">Asrama</option>
                                            <option value="asrama">saudara</option>
                                            </select>
                                        </div>
                                        <div class="panel-heading form-group col-md-12" style="margin-bottom: 5%">
                                            <h3 style="margin-left: 38%;margin-bottom: 5%;">Keterangan Kesehatan</h3>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Penyakit derita</label>
                                            <textarea class="form-control" rows="3"  name="penyakit_derita" required></textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Kelainan Jasmani</label>
                                            <textarea class="form-control" rows="3"  name="kelainan_jasmani" required></textarea>
                                        </div>
                                        <div class="panel-heading form-group col-md-12" style="margin-bottom: 5%">
                                            <h3 style="margin-left: 38%;margin-bottom: 3%;">Nilai Raport</h3>
                                        </div>
                                        <h2 class="col-md-12" style="margin-left: 40%;margin-bottom: 2%;margin-left: 40;">Kelas 7</h2>
                                        <h3 class="col-md-12" style="margin-bottom: 1%;">Semester 1</h3>
                                        <?php
                                            $i=0;
                                            
                                        ?>
                                        @foreach($mapel as $key)
                                        @if($key['kelas'] == 'Kelas 7')
                                            @if($key['semester']=='Semester 1')                                        
                                        
                                        <div class="form-group col-md-2" style="margin-left:3%;">
                                            <label> {{ $key['mapel']}}</label>
                                            <input class="form-control" type="number"  required>
                                        </div>
                                       <br>
                                       @endif
                                    @endif
                                    @endforeach
                                   
                                   <h3 class="col-md-12"  style="margin-bottom: 1%;">Semester 2</h3>
                                        @foreach($mapel as $key)
                                        @if($key['kelas'] == 'Kelas 7')
                                            @if($key['semester']=='Semester 2')                                        
                                        
                                        <div class="form-group col-md-2"  style="margin-bottom: 2%;margin-left:3%;">
                                            <label> {{ $key['mapel']}}</label>
                                            <input class="form-control" type="number"  required>
                                        </div>
                                       <br>
                                       @endif
                                    @endif
                                    @endforeach
                                    <h2 class="col-md-12"  style="margin-left: 40%;margin-bottom: 2%;margin-left: 40;">Kelas 8</h2>
                                        <h3 class="col-md-12" style="margin-bottom: 2%;">Semester 1
                                        </h3>
                                       
                                        @foreach($mapel as $key)
                                        @if($key['kelas'] == 'Kelas 8')
                                            @if($key['semester']=='Semester 1')                                        
                                        
                                        <div class="form-group col-md-2" style="margin-left:3%;">
                                            <label> {{ $key['mapel']}}</label>
                                            <input class="form-control" type="number"  required>
                                        </div>
                                       <br>
                                       @endif
                                    @endif
                                    @endforeach
                                   
                                   <h3 class="col-md-12"  style="margin-bottom: 1%;">Semester 2</h3>
                                        @foreach($mapel as $key)
                                        @if($key['kelas'] == 'Kelas 8')
                                            @if($key['semester']=='Semester 2')                                        
                                        
                                        <div class="form-group col-md-2" style="margin-left:3%;">
                                            <label> {{ $key['mapel']}}</label>
                                            <input class="form-control" type="number"  required>
                                        </div>
                                       <br>
                                       @endif
                                    @endif
                                    @endforeach
                                    <h2 class="col-md-12"  style="margin-left: 40%;margin-bottom: 2%;margin-left: 40;">Kelas 9</h2>
                                        <h3 class="col-md-12"  style="margin-bottom: 1%;">Semester 1
                                        </h3>
                                       
                                        @foreach($mapel as $key)
                                        @if($key['kelas'] == 'Kelas 9')
                                            @if($key['semester']=='Semester 1')                                        
                                        
                                        <div class="form-group col-md-2"  style="margin-bottom: 1%;margin-left:3%;">
                                            <label> {{ $key['mapel']}}</label>
                                            <input class="form-control" type="number" name="value <?= $i-1?> " required>
                                        </div>
                                       <br>
                                       @endif
                                    @endif
                                    @endforeach
                                   
                                   <h3 class="col-md-12"  style="margin-bottom: 2%;">Semester 2</h3>
                                        @foreach($mapel as $key)
                                        @if($key['kelas'] == 'Kelas 9')
                                            @if($key['semester']=='Semester 2')                                        
                                        
                                        <div class="form-group col-md-2" style="margin-left:3%;">
                                            <label> {{ $key['mapel']}}</label>
                                            <input class="form-control" type="number"  required>
                                        </div>
                                       <br>
                                       @endif
                                    @endif
                                    @endforeach
                                        

                                    <div>
                                        
                                    </div>
                                        <div class="modal-foote form-group col-md-6" style="margin-left: 20%;">
                                        <button class="btn btn-success " onclick="myFunction()" id="button"  style="margin-left: 30%;">Print</button>
                                            <button type="submit" class="btn btn-primary col-md-6">Simpan</button>
                                        <div>
                                    </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
@endsection
<script>
    function myFunction(){
    var x = document.getElementById("button");
    if(x.style.display === "none"){
    x.style.display="block";
    }else{
    x.style.display="none";
    }
    window.print();
    x.style.display="block";
    x.style.float="right";
    x.style.marginBottom="10px";
    }
</script>