@extends('admin.master')
@section('content')
<div class="container-fluid">
	<div class="animate fadeIn">
		<div class="row">
		 	<div class="col-sm-6 col-lg-3">
			    <div class="card text-white bg-primary">
			      <div class="card-body pb-0">
			        <div class="btn-group float-right">
			          <button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			            <i class="icon-settings"></i>
			          </button>
			          <div class="dropdown-menu dropdown-menu-right">
			            <a class="dropdown-item" href="#">Action</a>
			            <a class="dropdown-item" href="#">Another action</a>
			            <a class="dropdown-item" href="#">Something else here</a>
			          </div>
			        </div>
			        <h4 class="mb-0">9.823</h4>
			        <p>Members online</p>
			      </div>
			      <div class="chart-wrapper px-3" style="height:70px;">
			        <canvas id="card-chart1" class="chart" height="70"></canvas>
			      </div>
			    </div>
		  	</div>
		  <!--/.col-->

		  <div class="col-sm-6 col-lg-3">
		    <div class="card text-white bg-info">
		      <div class="card-body pb-0">
		        <button type="button" class="btn btn-transparent p-0 float-right">
		          <i class="icon-location-pin"></i>
		        </button>
		        <h4 class="mb-0">9.823</h4>
		        <p>Members online</p>
		      </div>
		      <div class="chart-wrapper px-3" style="height:70px;">
		        <canvas id="card-chart2" class="chart" height="70"></canvas>
		      </div>
		    </div>
		  </div>
		  <!--/.col-->

		  <div class="col-sm-6 col-lg-3">
		    <div class="card text-white bg-warning">
		      <div class="card-body pb-0">
		        <div class="btn-group float-right">
		          <button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		            <i class="icon-settings"></i>
		          </button>
		          <div class="dropdown-menu dropdown-menu-right">
		            <a class="dropdown-item" href="#">Action</a>
		            <a class="dropdown-item" href="#">Another action</a>
		            <a class="dropdown-item" href="#">Something else here</a>
		          </div>
		        </div>
		        <h4 class="mb-0">9.823</h4>
		        <p>Members online</p>
		      </div>
		      <div class="chart-wrapper" style="height:70px;">
		        <canvas id="card-chart3" class="chart" height="70"></canvas>
		      </div>
		    </div>
		  </div>
		  <!--/.col-->

		  <div class="col-sm-6 col-lg-3">
		    <div class="card text-white bg-danger">
		      <div class="card-body pb-0">
		        <div class="btn-group float-right">
		          <button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		            <i class="icon-settings"></i>
		          </button>
		          <div class="dropdown-menu dropdown-menu-right">
		            <a class="dropdown-item" href="#">Action</a>
		            <a class="dropdown-item" href="#">Another action</a>
		            <a class="dropdown-item" href="#">Something else here</a>
		          </div>
		        </div>
		        <h4 class="mb-0">9.823</h4>
		        <p>Members online</p>
		      </div>
		      <div class="chart-wrapper px-3" style="height:70px;">
		        <canvas id="card-chart4" class="chart" height="70"></canvas>
		      </div>
		    </div>
		  </div>
		  <!--/.col-->
		</div>
    <!--/.row-->
    <div class="row justify-content-center p-3">
    	<div class="col-sm-12 col-lg-6">
    		<div class="card">
					<img class="image-dashboard" src="{{url('img/dashboard/alur.png')}}">
				</div>
			</div>
		</div>
			<!--/.col-->
    </div>
    <!--/.row-->
	</div>
</div>
@endsection