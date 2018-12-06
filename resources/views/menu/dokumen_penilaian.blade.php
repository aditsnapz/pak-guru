@extends('master')
@section('content')
<div class="container-fluid">
	<div class="animate fadeIn">
		<div class="row">
			<div class="col">
				<div class="card border primary">
					<div class="card-header">
						<i class="fa fa-address-card-o"> Data Dokumen Penilaian</i>
					</div>
					<div class="card-body">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#sk" role="tab" aria-controls="home">SK Pembagian Tugas</a>
								
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#penilaian_kinerja" role="tab" aria-controls="home">Laporan Penilaian Kinerja</a>
								
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#pengembangan_diri" role="tab" aria-controls="home">Laporan Pengembangan Diri</a>
								
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#karya_ilmiah" role="tab" aria-controls="home">Laporan Karya Ilmiah</a>
								
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#karya_inovatif" role="tab" aria-controls="home">Laporan Karya Inovatif</a>
								
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#bukti_kegiatan" role="tab" aria-controls="home">Bukti Fisik Kegiatan</a>
								
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="sk" role="tabpanel">
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
											<td class="text-center">1</td>
											<td>SK CPNS</td>
											<td>Status</td>
											<td>
												1
											</td>
										</tr>
										<tr>
											<td class="text-center">2</td>
											<td>SK PNS</td>
											<td>Status</td>
											<td>1</td>
										</tr>
									</tbody>
								</table>
							</div>
							
							<div class="tab-pane" id="penilaian_kinerja" role="tabpanel">
								<form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
									<div class="form-group row">
				                      <label class="col-md-2 col-form-label" for="select">Pilih Dokumen Upload</label>
				                      <div class="col-md-4">
				                        <select name="id_upload" class="form-control">
				                          <option value="0">PKG</option>
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
											<td class="text-center">1</td>
											<td>PENILAIAN KINERJA GURU</td>
											<td>Status</td>
											<td>1</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="tab-pane" id="pengembangan_diri" role="tabpanel">
								<form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
									<div class="form-group row">
				                      <label class="col-md-2 col-form-label" for="select">Pilih Dokumen Upload</label>
				                      <div class="col-md-4">
				                        <select name="id_upload" class="form-control">
				                          <option value="0">--Pilih Dokumen--</option>
				                          <option value="1">SURAT TUGAS</option>
				                          <option value="2">SERTIFIKAT</option>
				                          <option value="3">JADWAL</option>
				                          <option value="4">LAPORAN</option>
				                          <option value="5">DOKUMENTASI</option>
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
											<td class="text-center">1</td>
											<td>SURAT TUGAS</td>
											<td>Status</td>
											<td>1</td>
										</tr>
										<tr>
											<td class="text-center">2</td>
											<td>SERTIFIKAT</td>
											<td>Status</td>
											<td>1</td>
										</tr>
										<tr>
											<td class="text-center">3</td>
											<td>JADWAL</td>
											<td>Status</td>
											<td>1</td>
										</tr>
										<tr>
											<td class="text-center">4</td>
											<td>LAPORAN</td>
											<td>Status</td>
											<td>1</td>
										</tr>
										<tr>
											<td class="text-center">5</td>
											<td>DOUMENTASI</td>
											<td>Status</td>
											<td>1</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="tab-pane" id="karya_ilmiah" role="tabpanel">
								<form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
									<div class="form-group row">
				                      <label class="col-md-2 col-form-label" for="select">Pilih Dokumen Upload</label>
				                      <div class="col-md-4">
				                        <select name="id_upload" class="form-control">
				                          <option value="0">--Pilih Dokumen--</option>
				                          <option value="1">DOKUMEN KARYA ILMIAH</option>
				                          <option value="2">BUKTI PUBLIKASI</option>
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
											<td class="text-center">1</td>
											<td>DOKUMEN KARYA ILMIAH</td>
											<td>Status</td>
											<td>1</td>
										</tr>
										<tr>
											<td class="text-center">2</td>
											<td>BUKTI PUBLIKASI</td>
											<td>Status</td>
											<td>1</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="tab-pane" id="karya_inovatif" role="tabpanel">
								<form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
									<div class="form-group row">
				                      <label class="col-md-2 col-form-label" for="select">Pilih Dokumen Upload</label>
				                      <div class="col-md-4">
				                        <select name="id_upload" class="form-control">
				                          <option value="0">--Pilih Dokumen--</option>
				                          <option value="1">DOKUMEN KARYA INOVATIF</option>
				                          <option value="2">BUKTI DOKUMENTASI KARYA INOVATIF</option>
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
											<td class="text-center">1</td>
											<td>DOKUMEN KARYA INOVATIF</td>
											<td>Status</td>
											<td>1</td>
										</tr>
										<tr>
											<td class="text-center">2</td>
											<td>BUKTI DOKUMENTASI KARYA INOVATIF</td>
											<td>Status</td>
											<td>1</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="tab-pane" id="bukti_kegiatan" role="tabpanel">
								<form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
									<div class="form-group row">
				                      <label class="col-md-2 col-form-label" for="select">Pilih Dokumen Upload</label>
				                      <div class="col-md-4">
				                        <select name="id_upload" class="form-control">
				                          <option value="0">BUKTI FISIK KEGIATAN</option>
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
											<td class="text-center">1</td>
											<td>BUKTI FISIK KEGIATAN</td>
											<td>Status</td>
											<td>1</td>
										</tr>
									</tbody>
								</table>
							</div>
							
						</div>
						
						
					</div>					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection