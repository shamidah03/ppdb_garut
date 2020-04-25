@extends('layouts.home')

@section('content')
<div id="page-wrapper">
    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Data Siswa <small>Summary of your App</small>
                </h1>
                <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Data</li>
                </ol>
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                   
            
            <h3><a class="btn btn-success" href="{{url('siswa/create')}}" style="float: inherit;">Create New</a></h3>
           </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Nama Panggilan</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat</th>
                                <th>Tanggal Lahit</th>
                                <th>Agama</th>
                                <th>Cita-cita</th>
                                <th>Hobi</th>
                                <th>Anak ke</th>
                                <th>saudara Kandung</th>
                                <th>Saudara Tiri</th>
                                <th>Saudara Angkat</th>
                                <th>Berat Badan</th>
                                <th>Tinggi Badan</th>
                                <th>Gol-Darah</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                              $i=1;
                              foreach($siswa as $data){
                            ?>
                            <tr class="odd gradeX">
                                <td>{{ $i++}}</td>
                                <td>{{$data['nama_lengkap']}}</td>
                                <td>{{$data['nama_panggilan']}}</td>
                                <td>{{$data['jk']}}</td>
                                <td>{{$data['tempat']}}</td>
                                <td>{{$data['tanggal_lahir']}}</td>
                                <td>{{$data['agama']}}</td>
                                <td>{{$data['cita']}}</td>
                                <td>{{$data['hobi']}}</td>
                                <td>{{$data['anak']}}</td>
                                <td>{{$data['kandung']}}</td>
                                <td>{{$data['tiri']}}</td>
                                <td>{{$data['angkat']}}</td>
                                <td>{{$data['bb']}}</td>
                                <td>{{$data['tb']}}</td>
                                <td>{{$data['gd']}}</td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
</div>
</div>
            <script src="{{asset('assets/js/jquery-1.10.2.js')}}"></script>
      <!-- Bootstrap Js -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Metis Menu Js -->
    <script src="{{asset('assets/js/jquery.metisMenu.js')}}"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="{{asset('assets/js/dataTables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/js/dataTables/dataTables.bootstrap.js')}}"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="{{asset('assets/js/custom-scripts.js')}}"></script>
@endsection