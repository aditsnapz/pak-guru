@extends('admin.master')
@section('content')
<div class="container-fluid">
	<div class="animate fadeIn">
		<div class="row">
			<div class="col">
				<div class="card border primary">
					<div class="card-header">
						<i class="fa fa-address-card-o"> Detail Guru</i>
					</div>
					<div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="container text-center">
                                        <img src="{{url('img/foto/user/A11.2016.09670.jpg')}}" alt="">
                                        <form action="" class="form-horizontal text-left">
                                            <div class="form-group row">
                                                <label for="" class="col-md-5 col-form-label">NAMA</label>
                                                <input type="text" readonly class="form-control-plaintext col-md-7" value="ADITYA DWI PRATAMA">
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-md-5 col-form-label">NIP</label>
                                                <input type="text" readonly class="form-control-plaintext col-md-7" value="A11.2016.09670">
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-md-5 col-form-label">PANGKAT</label>
                                                <input type="text" readonly class="form-control-plaintext col-md-7" value="III-A">
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-md-5 col-form-label">GOLONGAN</label>
                                                <input type="text" readonly class="form-control-plaintext col-md-7" value="MHS">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-8 container">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a href="#home" class="nav-link" data-toggle="tab" role="tab">PROFILE</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#awal" class="nav-link" data-toggle="tab" role="tab">DOC AWAL</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#penilaian" class="nav-link" data-toggle="tab" role="tab">DOC PENILAIAN</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="home" class="tab-pane fade show active" role="tabpanel">
                                            <form action="" class="form-horizontal text-left">
                                                <div class="form-group row">
                                                    <label for="" class="col-md-5 col-form-label">NAMA</label>
                                                    <input type="text" readonly class="form-control-plaintext col-md-7" value="ADITYA DWI PRATAMA">
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-md-5 col-form-label">NIP</label>
                                                    <input type="text" readonly class="form-control-plaintext col-md-7" value="A11.2016.09670">
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-md-5 col-form-label">NAMA</label>
                                                    <input type="text" readonly class="form-control-plaintext col-md-7" value="ADITYA DWI PRATAMA">
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-md-5 col-form-label">PANGKAT</label>
                                                    <input type="text" readonly class="form-control-plaintext col-md-7" value="III-A">
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-md-5 col-form-label">GOLONGAN</label>
                                                    <input type="text" readonly class="form-control-plaintext col-md-7" value="MHS">
                                                </div>
                                            </form>
                                        </div>
                                        <div id="awal" class="tab-pane fade" role="tabpanel">
                                          <table class="table table-responsive-sm table-bordered">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>SK CPNS</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>SK PNS</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>KARPEG</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>SK NIP BARU</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>PAK PENYESUAIAN</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>PAK SEBELUMNYA</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>SK JABATAN FUNGSIONAL</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>SK KENAIKAN PANGKAT TERAKHIR</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>IJASAH TERAKHIR</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>AKTA-IV</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>TRANSKRIP NILAI</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>IZIN BELAJAR</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td>IZIN PENGGUNAAN GELAR</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td>KARTU PEGAWAI ELEKTRONIK</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>15</td>
                                                        <td>PENILAIAN PRESTASI PNS</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>16</td>
                                                        <td>SK MUTASI</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                </tbody>                                        
                                            </table>
                                        </div>
                                        <div id="penilaian" class="tab-pane fade" role="tabpanel">
                                            <table class="table table-responsive-sm table-bordered">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>SK CPNS</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>SK PNS</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>KARPEG</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>SK NIP BARU</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>PAK PENYESUAIAN</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>PAK SEBELUMNYA</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>SK JABATAN FUNGSIONAL</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>SK KENAIKAN PANGKAT TERAKHIR</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>IJASAH TERAKHIR</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>AKTA-IV</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>TRANSKRIP NILAI</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>IZIN BELAJAR</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td>IZIN PENGGUNAAN GELAR</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td>KARTU PEGAWAI ELEKTRONIK</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>15</td>
                                                        <td>PENILAIAN PRESTASI PNS</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>16</td>
                                                        <td>SK MUTASI</td>
                                                        <td>Belum Upload</td>
                                                        <td>
                                                            1
                                                        </td>
                                                    </tr>
                                                </tbody>                                        
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="card-footer">
		            </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection