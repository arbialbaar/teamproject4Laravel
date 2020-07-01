{{-- @extends('layout.master')
@section('title', 'Data Peserta')  
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
            <div class="col-12">
                <div class="pt-3 d-flex justify-content-end align-items-center">
                    <h1 class="h2 mr-auto"> Data Peserta {{$seminar->nama_lengkap}}</h1>
                </div>
                <hr>
                @if (session()->has('pesan'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('pesan') }}
                    </div>
                @endif
                <ul>
                    <li>Nama Lengkap: {{$seminar->nama_lengkap}}</li>
                    <li>Jenis Kelamin: {{$seminar->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki'}}</li>
                    <li>Pendidikan: {{$seminar->pendidikan}}</li>
                    <li>Motivasi: {{$seminar->motivasi == '' ? 'N/A' : $seminar->motivasi}}</li>
                </ul>
                <div class="pt-3 d-flex align-items-center">
                    <a href="{{ route('seminars.edit',['seminar' => $seminar->id]) }}" class="btn btn-primary" id="biru">
                        Edit
                    </a>
        
                    <form action="{{ route('seminars.destroy', ['seminar'=>$seminar->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger mt-3">Hapus</button>
                    </form>
                </div>
            </div>
            
        </div>

   </div>
<script src={{ asset('/js/jquery-3.5.1.min.js') }}></script>    
<script src={{ asset('/js/bootstrap.min.js') }}></script>
<script src={{ asset('/js/script.js') }}></script>
</body>
</html>
