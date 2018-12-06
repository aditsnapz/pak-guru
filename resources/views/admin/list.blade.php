@extends('admin.master')
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
                        <div class="container">
                            <table class="table table-hover table-bordered" style="overflow-x: scroll">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>NAMA</th>
                                        <th>GOLONGAN</th>
                                        <th>PANGKAT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>A11.2016.09670</td>
                                        <td>ADITYA DWI PRATAMA</td>
                                        <td>III-A</td>
                                        <td>MHS</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>A11.2016.09459</td>
                                        <td>AHMAD KHAISAR ASTRAPUTRA</td>
                                        <td>III-A</td>
                                        <td>MHS</td>
                                    </tr>
                                </tbody>
                            </table>
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