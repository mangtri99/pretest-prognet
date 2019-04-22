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
                <div class="col-lg-12">
                    <h1 class="page-header">EDIT DATA SISWA</h1>
                </div>
            </div>
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Edit Siswa
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                @foreach ($siswa as $user)
                                    <form method="post" action="/siswa/{{$user->id}}" role="form">
                                        {{ method_field('PUT') }}
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <input class="form-control" name="nis" placeholder="NIK Pegawai" value="{{$user->nis}}" />
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="nama" placeholder="Nama Pegawai" value="{{$user->nama}}" />
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="nisn" placeholder="Username Pegawai" value="{{$user->nisn}}" />
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="no_hp" placeholder="Password Telepon" value="{{$user->no_hp}}" />
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="alamat" placeholder="Password Telepon" value="{{$user->alamat}}" />
                                        </div>
                                           <input hidden value="" />
                                        @endforeach
                                        <div class="form-group">
                                           <button type="submit" class="btn btn-success btn-lg">SIMPAN</button>
                                        </div>
                                    </form>
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
