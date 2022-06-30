@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Item List</h3>
                <a href="{{ url('/item_registor') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Item</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Name</th>
                              <th>Purchasing Price</th>
                              <th>Selling Price</th>
                              <th>Balance Qty</th>
                              <th>Update</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>01</td>
                              <td>Internet Card 49</td>
                              <td>Rs.45.00</td>
                              <td>Rs.49.00</td>
                              <td>100</td>
                              <td><a href="{{ url('/item_update') }}" style="float: center;" class="btn btn-rounded btn-success mb-5"> Update </a></td>
                          </tr>
                          <tr>
                              <td>02</td>
                              <td>Internet Card 99</td>
                              <td>Rs.92.00</td>
                              <td>Rs.99.00</td>
                              <td>200</td>
                              <td><a href="{{ url('/item_update') }}" style="float: center;" class="btn btn-rounded btn-success mb-5"> Update </a></td>
                          </tr>
                          <tr>
                              <td>03</td>
                              <td>KIT 50</td>
                              <td>Rs.45.00</td>
                              <td>Rs.50.00</td>
                              <td>300</td>
                              <td><a href="{{ url('/item_update') }}" style="float: center;" class="btn btn-rounded btn-success mb-5"> Update </a></td>
                          </tr>
                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->

    </div>
</div>







@endsection
