{{-- @extends('layout.master')
@section('title', 'Home')  
@section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="py-4">
                    <h2>Tabel Data Peserta</h2>
                    <a href="{{ url('/seminars/create') }}" class="btn btn-warning">
                        Tambah Data Peserta
                    </a>
                </div>

                @if (session()->has('pesan'))
                    <div class="alert alert-success">
                        {{ session()->get('pesan') }}
                    </div>
                @endif

                <table class="table table-striped">
                    <thead class="table-dark">
                        <th>#</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Pendidikan</th>
                        <th>Motivasi</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </thead>
                    <tbody>
                        @forelse ($seminars as $seminar)
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <td> <a href="{{ url('/seminars/'.$seminar->id) }}">
                                {{$seminar->nama_lengkap}}</a>
                            </td>
                            <td>{{$seminar->jenis_kelamin == 'P'?'Perempuan':'Laki-laki'}}</td>
                            <td>{{$seminar->pendidikan}}</td>
                            <td>{{$seminar->motivasi == '' ? 'N/A' : $seminar->motivasi}}</td>
                            <td>
                                <a href="{{ route('seminars.edit',['seminar' => $seminar->id]) }}" class="btn btn-success" >
                                    Edit
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('seminars.destroy', ['seminar'=>$seminar->id]) }}" method="POST" id="formasi">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger mt-3" id="red">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <td colspan="6" class="text-center">Data Kosong</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
<script src={{ asset('/js/jquery-3.5.1.min.js') }}></script>    
<script src={{ asset('/js/bootstrap.min.js') }}></script>
<script src={{ asset('/js/script.js') }}></script>
</body>
</html>