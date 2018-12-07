@extends('master')
@section('content')
<div class="container-fluid">
	<div class="animate fadeIn">
		<form method="POST" action="{{ route('login.attempt') }}">
            {{ csrf_field() }}
            <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="nama" id="nama" value="{{ $data->nama }}" class="form-control" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="nip" id="nip" value="{{ $data->nip }}" class="form-control" >
            </div>
            <div class="input-group mb-4">
                <span class="input-group-addon"><i class="icon-lock"></i></span>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password"
                       >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="status" id="status" value="{{ $data->status }}" class="form-control">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="nomor_karpeg" id="nomor_karpeg" value="{{ $data->nomor_karpeg }}" class="form-control">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="nuptk" id="nuptk" value="{{ $data->nuptk }}" class="form-control" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="nrg" id="nrg" value="{{ $data->nrg }}" class="form-control" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{ $data->tempat_lahir }}" class="form-control" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ $data->tanggal_lahir }}" class="form-control" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="gender" id="gender" value="{{ $data->gender }}" class="form-control" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="alamat_rumah" id="alamat_rumah" value="{{ $data->alamat_rumah }}" class="form-control" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="pendidikan_jenjang" id="pendidikan_jenjang" value="{{ $data->pendidikan_jenjang }}" class="form-control" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="pendidikan_progdi" id="pendidikan_progdi" value="{{ $data->pendidikan_progdi }}" class="form-control" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="mkg_baru_tahun" id="mkg_baru_tahun" value="{{ $data->mkg_baru_tahun }}" class="form-control" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="mkg_baru_bulan" id="mkg_baru_bulan" value="{{ $data->mkg_baru_bulan }}" class="form-control" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="mkg_lama_tahun" id="mkg_lama_tahun" value="{{ $data->mkg_lama_tahun }}" class="form-control" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="mkg_lama_bulan" id="mkg_lama_bulan" value="{{ $data->mkg_lama_bulan }}" class="form-control" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="golongan" id="golongan" value="{{ $data->golongan }}" class="form-control" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="pangkat" id="pangkat" value="{{ $data->pangkat }}" class="form-control" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="jabatan" id="jabatan" value="{{ $data->jabatan }}" class="form-control" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="date" name="tmt_pangkat" id="tmt_pangkat" value="{{ $data->tmt_pangkat }}" class="form-control" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="date" name="tmt_jabatan" id="tmt_jabatan" value="{{ $data->tmt_jabatan }}" class="form-control" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="jenis_guru" id="jenis_guru" value="{{ $data->jenis_guru }}" class="form-control" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="tugas_sebagai" id="tugas_sebagai" value="{{ $data->tugas_sebagai }}" class="form-control" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="no_peserta_sertifikasi" id="no_peserta_sertifikasi" value="{{ $data->no_peserta_sertifikasi }}" class="form-control" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="mapel_sertifikasi" id="mapel_sertifikasi" value="{{ $data->mapel_sertifikasi }}" class="form-control" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="lokasi_kerja" id="lokasi_kerja" value="{{ $data->lokasi_kerja }}" class="form-control" >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="lokasi_kerja_alamat" id="lokasi_kerja_alamat" value="{{ $data->lokasi_kerja_alamat }}" class="form-control" >
            </div>
            <div class="row">
                <div class="col-6">
                    <button type="submit" class="btn btn-primary px-4">Ok</button>
                </div>
                <div class="col-6 text-right">
                    <button type="button" class="btn btn-link px-0">Forgot password?</button>
                </div>
            </div>
        </form>
	</div>
</div>
@endsection