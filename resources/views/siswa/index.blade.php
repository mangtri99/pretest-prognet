@extends('layouts.master')
@section('content')
<div class="container-fluid">

            <div class="row">
                <div class="col-lg-10">
                    <h1 class="page-header">DAFTAR MAHASISWA</h1>
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
                        <a class="btn btn-danger" href="siswa/create">Register Siswa</a>
                    </br>
                </br>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>NISN</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr class="odd gradeX">
                @for ($i = 0; $i < count($data); $i++)
                <td>{{$i+1	}}</td>
                <td>{{$data[$i]->nis}}</td>   
                <td>{{$data[$i]->nama}}</td>
                <td>{{$data[$i]->nisn}}</td>
                <td>{{$data[$i]->no_hp}}</td>
                <td>{{$data[$i]->alamat}}</td>
                <td style="width: 12%">
                <form style="float:left;" action="/siswa/{{$data[$i]->id}}/edit" method="GET">
                    {{ csrf_field() }}
                    <button class="btn btn-primary" type="submit" name="edit"><i class="fa fa-edit fa-fw"></i></button>
                </form>
                <form style="float:right;" action="/siswa/{{$data[$i]->id}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-danger" type="submit" name="delete"><i class="fa fa-trash-o fa-fw" onclick="return confirm('Yakin ingin menghapus data?')"></i></button>
                </form>
                </td>
            </tr>
            @endfor
        </tbody>
    </table>

@endsection