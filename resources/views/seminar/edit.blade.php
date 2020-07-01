{{-- @extends('layout.master')
@section('title', 'Edit Data Peserta')  
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
    
   <div class="container pt-4 bg-white">
       <div class="row">
            <div class="col-md-12">
               <h1>Edit Data Peserta</h1>
               <hr>
                <form action="{{ route('seminars.update', ['seminar' => $seminar->id]) }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') ?? $seminar->nama_lengkap }}" >
                @error('nama_lengkap')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" id="laki-laki" value="L" {{ (old('jenis_kelamin') ?? $seminar->jenis_kelamin)== 'L' ?
                        'checked' : ''}}>
                        <label for="jenis_kelamin" class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" id="perempuan" value="P" {{ (old('jenis_kelamin') ?? $seminar->jenis_kelamin) == 'P' ?
                        'checked' : ''}}>
                        <label for="jenis_kelamin" class="form-check-label">Perempuan</label>
                    </div>
                    @error('jenis_kelamin')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pendidikan">Pendidikan</label>
                    <select name="pendidikan" id="pendidikan" class="form-control">
                        <option value="SMA/SMK" {{ (old('pendidikan') ?? $seminar->pendidikan) == 'SMA/SMK' ? 'selected' : '' }}>
                            SMA/SMK
                        </option>
                        <option value="S1" {{ (old('pendidikan') ?? $seminar->pendidikan) == 'S1' ? 'selected' : '' }}>
                            S1
                        </option>
                        <option value="S2" {{ (old('pendidikan') ?? $seminar->pendidikan) == 'S2' ? 'selected' : '' }}>
                            S2
                        </option>
                    </select>
                    @error('pendidikan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="motivasi">Motivasi</label>
                    <textarea name="motivasi" id="motivasi" rows="3" class="form-control">{{ old('motivasi') ?? $seminar->motivasi }}</textarea>
                </div>
                <button type="submit" class="btn btn-warning nb-2">Update</button>
            </form>
            </div>
       </div>
   </div>

<script src={{ asset('/js/jquery-3.5.1.min.js') }}></script>    
<script src={{ asset('/js/bootstrap.min.js') }}></script>
<script src={{ asset('/js/script.js') }}></script>
</body>
</html>