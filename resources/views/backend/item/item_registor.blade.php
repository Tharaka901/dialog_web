@extends('admin.admin_master')
@section('admin')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
        <!-- Content Header (Page header) -->


		<!-- Main content -->
		<section class="content">



		  <div class="row">
			<div class="col-lg-6 col-12">
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Item Registation</h4>
					</div>
					<!-- /.box-header -->
					<form class="form">
						<div class="box-body">

							<div class="form-group">
							  <label>Date</label>
							  <input type="date" class="form-control" placeholder="Company Name">
							</div>
                            <div class="form-group">
                                <label>Item Code</label>
                                <input type="text" class="form-control" placeholder="Item Code">
                            </div>
                            <div class="form-group">
                                <label>Item Name</label>
                                <input type="text" class="form-control" placeholder="Item Name">
                            </div>
                            <div class="form-group">
                                <label>Purchasing Price</label>
                                <input type="text" class="form-control" placeholder="Purchasing Price">
                            </div>
                            <div class="form-group">
                                <label>Sales Price</label>
                                <input type="text" class="form-control" placeholder="Sales Price">
                            </div>
                            <div class="form-group">
                                <label>Openning Balance</label>
                                <input type="text" class="form-control" placeholder="Openning Balance">
                            </div>

						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<button type="button" class="btn btn-rounded btn-warning btn-outline mr-1">
							  <i class="ti-trash"></i> Cancel
							</button>
							<button type="submit" class="btn btn-rounded btn-primary btn-outline">
							  <i class="ti-save-alt"></i> Submit
							</button>
						</div>
					</form>
				  </div>
				  <!-- /.box -->
			</div>
		  </div>
		</section>
		<!-- /.content -->
        </div>
    </div>


@endsection
