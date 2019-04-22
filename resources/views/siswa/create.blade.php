<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pretest Prognet Kelompok 9</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{URL::asset('master/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{URL::asset('master/css/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{URL::asset('master/css/timeline.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{URL::asset('master/css/startmin.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="master/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="master/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
</body>
<div id="wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-10">
                    <h1 class="page-header">BIODATA SISWA</h1>
                </div>
            </div>
                @if(\Session::has('alert'))
                    <div class="alert alert-danger">
                        <div>{{Session::get('alert')}}</div>
                    </div>
                        @endif
                        @if(\Session::has('alert-success'))
                            <div class="alert alert-success">
                                <div>{{Session::get('alert-success')}}</div>
                            </div>
                        @endif
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Data diri Siswa
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST" action="/siswa" role="form">
                                    {{ csrf_field() }}
                                        <!-- <div class="form-group">
                                            <input class="form-control" name="nomer" placeholder="No. Anggota" />
                                        </div>
 -->                                    <div class="form-group">
                                            <input class="form-control" name="nis" placeholder="Masukkan NIS Siswa" />
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="nama" placeholder="Masukkan Nama Siswa"/>	
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="nisn" placeholder="Masukkan NISN Siswa" />
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="no_hp" placeholder="Masukkan No HP Siswa" />
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="alamat" placeholder="Masukkan alamat Siswa" />
                                        </div>
                                         
                                           <input hidden value="" />
                                        <div class="form-group">
                                           <button type="submit" class="btn btn-success btn-lg">SIMPAN</button>
                                        </div>
                                        </form>
                                  </div>
                              
                            </div>             
                        </div>
                    </div>
                </div>
                <!-- jQuery -->
<script src="{{URL::asset('master/js/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{URL::asset('master/js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{URL::asset('master/js/metisMenu.min.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{URL::asset('master/js/startmin.js') }}"></script>
   
   
</body>
</html>

