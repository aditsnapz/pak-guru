@extends('master')
@section('content')
<div class="container-fluid">
	<div class="animate fadeIn">
		<div class="row">
			<div class="col">
				<div class="card border primary">
					<div class="card-header">
						<i class="fa fa-address-card-o"> Data Pribadi</i>
					</div>
					<div class="card-body">
						<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
		                    <div class="form-group row">
		                      <label class="col-md-2 col-form-label" for="text-input">Nama</label>
		                      <div class="col-md-6">
		                        <input type="text" name="nama" class="form-control" placeholder="Nama" disabled>
		                      </div>
		                    </div>
		                    <div class="form-group row">
		                      <label class="col-md-2 col-form-label" for="text-input">NIP</label>
		                      <div class="col-md-6">
		                        <input type="text" name="nip" class="form-control" placeholder="NIP" disabled>
		                      </div>
		                    </div>
		                    <div class="form-group row">
		                      <label class="col-md-2 col-form-label" for="text-input">NO KARPEG</label>
		                      <div class="col-md-6">
		                        <input type="text" name="nomor_karpeg" class="form-control" placeholder="NO KARTU PEGAWAI" disabled>
		                      </div>
		                    </div>
		                    <div class="form-group row">
		                      <label class="col-md-2 col-form-label" for="text-input">NUPTK</label>
		                      <div class="col-md-6">
		                        <input type="text" name="nuptk" class="form-control" placeholder="NUPTK" >
		                      </div>
		                    </div>
		                    <div class="form-group row">
		                      <label class="col-md-2 col-form-label" for="text-input">NRG</label>
		                      <div class="col-md-6">
		                        <input type="text" name="nrg" class="form-control" placeholder="NRG" >
		                      </div>
		                    </div>
		                    <div class="form-group row">
		                      <label class="col-md-2 col-form-label" for="text-input">Tempat Lahir</label>
		                      <div class="col-md-6">
		                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" disabled>
		                      </div>
		                    </div>
		                    <div class="form-group row">
		                      <label class="col-md-2 col-form-label" for="text-input">Tanggal Lahir</label>
		                      <div class="col-md-6">
		                        <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" disabled>
		                      </div>
		                    </div>
		                    
		                    <div class="form-group row">
		                      <label class="col-md-2 col-form-label" for="select">Gender</label>
		                      <div class="col-md-6">
		                        <select name="gender" class="form-control" disabled>
		                          <option value="laki-laki">Laki-laki</option>
		                          <option value="perempuan">Perempuan</option>
		                        </select>
		                      </div>
		                    </div>
		                    <div class="form-group row">
		                      <label class="col-md-2 col-form-label" for="text-input">Alamat Rumah</label>
		                      <div class="col-md-6">
		                        <input type="textarea" name="alamat_rumah" class="form-control" placeholder="Alamat Rumah" >
		                      </div>
		                    </div>
		                    <div class="form-group row">
		                      <label class="col-md-2 col-form-label" for="select">Jenjang Pendidikan</label>
		                      <div class="col-md-6">
		                        <select name="pendidikan_jenjang" class="form-control" >
		                          <option value="diploma-1">Diploma 1</option>
		                          <option value="diploma-2">Diploma 2</option>
		                          <option value="diploma-3">Diploma 3</option>
		                          <option value="sarjana">Sarjana</option>
		                        </select>
		                      </div>
		                    </div>
		                    <div class="form-group row">
		                      <label class="col-md-2 col-form-label" for="select">Progdi Pendidikan</label>
		                      <div class="col-md-6">
		                        <select name="pendidikan_progdi" class="form-control" disabled>
		                          <option value="teknik_informatika">Teknik Informatika</option>
		                          <option value="hukum">Hukum</option>
		                        </select>
		                      </div>
		                    </div>
		                    <div class="form-group row">
		                      <label class="col-md-2 col-form-label" for="select">Golongan</label>
		                      <div class="col-md-6">
		                        <select name="golongan" class="form-control" disabled>
		                          <option value="2D - II/D">2D - II/D</option>
		                          <option value="3A - III/A">3A - III/A</option>
		                          <option value="3B - III/B">3B - III/B</option>
		                          <option value="3C - III/C">3C - III/C</option>
		                          <option value="3D - III/D">3D - III/D</option>
		                          <option value="4A - IV/A">4A - IV/A</option>
		                        </select>
		                      </div>
		                    </div>
		                     <div class="form-group row">
		                      <label class="col-md-2 col-form-label" for="select">Pangkat</label>
		                      <div class="col-md-6">
		                        <select name="pangkat" class="form-control" disabled>
		                          <option value="Penata">Penata</option>
		                          <option value="Penata Tk.I">Penata Tk.I</option>
		                          <option value="Penata Muda">Penata Muda</option>
		                          <option value="Penata Muda Tk.I">Penata Muda Tk.I</option>
		                          <option value="Pembina">Pembina</option>
		                          <option value="Pembina Tk.I">Pembina Tk.I</option>
		                        </select>
		                      </div>
		                    </div>
		                    <div class="form-group row">
		                      <label class="col-md-2 col-form-label" for="text-input">TMT PANGKAT</label>
		                      <div class="col-md-6">
		                        <input type="date" name="tmt_pangkat" class="form-control" placeholder="TMT PANGKAT" disabled>
		                      </div>
		                    </div>
		                    <div class="form-group row">
		                      <label class="col-md-2 col-form-label" for="text-input">TMT JABATAN</label>
		                      <div class="col-md-6">
		                        <input type="text" name="tmt_jabatan" class="form-control" placeholder="TMT JABATAN" disabled>
		                      </div>
		                    </div>
		                    <div class="form-group row">
		                      <label class="col-md-2 col-form-label" for="text-input">MKG LAMA</label>
		                      <div class="col-md-4">
		                      	<div class="row">
		                      		<div class="col-md-2">
		                      			<input type="text" name="mk_lama_tahun" class="form-control" >
		                      		</div>
		                      		<div class="col-md-2">
		                      			<input type="text" name="mk_lama_bulan " class="form-control" >
		                      		</div>
		                      	</div>
		                      </div>
		                    </div>
		                     <div class="form-group row">
		                      <label class="col-md-2 col-form-label" for="text-input">MKG BARU</label>
		                      <div class="col-md-4">
		                      	<div class="row">
		                      		<div class="col-md-2">
		                      			<input type="text" name="mk_baru_tahun" class="form-control" >
		                      		</div>
		                      		<div class="col-md-2">
		                      			<input type="text" name="mk_baru_bulan " class="form-control" >
		                      		</div>
		                      	</div>
		                      </div>
		                    </div>
		                    <div class="form-group row">
		                      <label class="col-md-2 col-form-label" for="select">Jenis Guru</label>
		                      <div class="col-md-6">
		                        <select name="jenis_guru" class="form-control">
		                          <option value="Guru Kelas">Guru Kelas</option>
		                          <option value="Guru BK">Guru BK</option>
		                          <option value="Guru MAPEL">Guru MAPEL</option>
		                          <option value="Guru TIK">Guru TIK</option>
		                        </select>
		                      </div>
		                    </div>
		                    <div class="form-group row">
		                      <label class="col-md-2 col-form-label" for="select">Tugas Sebagai</label>
		                      <div class="col-md-6">
		                        <select name="tugas_sebagai" class="form-control">
		                          <option value="Mengajar Bahasa Indonesia">Mengajar Bahasa Indonesia</option>
		                        </select>
		                      </div>
		                    </div>
		                    <div class="form-group row">
		                      <label class="col-md-2 col-form-label" for="text-input">No Peserta Sertifikasi</label>
		                      <div class="col-md-6">
		                        <input type="text" name="no_peserta_sertifikasi" class="form-control" placeholder="" >
		                      </div>
		                    </div>
		                    <div class="form-group row">
		                      <label class="col-md-2 col-form-label" for="text-input">Mapel Sertifikasi</label>
		                      <div class="col-md-6">
		                        <input type="text" name="mapel_sertifikasi" class="form-control" placeholder="Mapel Sertifikasi" >
		                      </div>
		                    </div>
		                    <div class="form-group row">
		                      <label class="col-md-2 col-form-label" for="text-input">Unit Kerja</label>
		                      <div class="col-md-6">
		                        <input type="text" name="unit_kerja" class="form-control" placeholder="Unit Kerja" disabled>
		                      </div>
		                    </div>
		                    <div class="form-group row">
		                      <label class="col-md-2 col-form-label" for="text-input">Alamat Unit Kerja</label>
		                      <div class="col-md-6">
		                        <input type="text" name="alamat_unit_kerja" class="form-control" placeholder="Alamat Unit Kerja" disabled>
		                      </div>
		                    </div>
		                    
                  		</form>

					</div>
					<div class="card-footer">
		                  <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
		                  <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
		            </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection