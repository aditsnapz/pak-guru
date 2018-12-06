@extends('master')
@section('content')
<div class="container-fluid">
	<div class="animate fadeIn">
		<div class="row">
			<div class="col">
				<div class="card border primary">
					<div class="card-header">
						<i class="fa fa-address-card-o"> Data Dokumen Awal</i>
					</div>
					<div class="card-body">
						<form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
							<div class="form-group row">
		                      <label class="col-md-2 col-form-label" for="select">Pilih Dokumen Upload</label>
		                      <div class="col-md-4">
		                        <select name="id_upload" class="form-control">
		                          <option value="0">--Pilih Dokumen--</option>
		                          <option value="1">SK CPNS</option>
		                          <option value="2">SK PNS</option>
		                        </select>
		                      </div>
		                    </div>
		                    <div class="form-group row">
		                    	<label class="col-md-2 col-form-label" for="select"></label>
		                    	<div class="col">
		                  			<button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
		                  			<button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
		            			</div>
		            		</div>
						</form>
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
@endsection