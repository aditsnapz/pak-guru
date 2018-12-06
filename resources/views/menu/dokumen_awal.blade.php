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
								<tr>
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
									<td>Status</td>
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