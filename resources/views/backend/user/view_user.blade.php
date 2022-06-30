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
                <h3 class="box-title">User List</h3>
                <a href="{{ url('/register') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add User</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>Name</th>
                              <th>Route</th>
                              <th>ID Number</th>
                              <th>Contact Number</th>
                              <th>Email</th>
                              <th>Update</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>Chathuranga</td>
                              <td>Colombo</td>
                              <td>884585216V</td>
                              <td>0772586486</td>
                              <td>chathuranga@gmail.com</td>
                              <td><a href="{{ url('/editUser') }}" style="float: center;" class="btn btn-rounded btn-success mb-5"> Update </a></td>
                          </tr>
                          <tr>
                              <td>Viduranga</td>
                              <td>Malabe</td>
                              <td>872546891V</td>
                              <td>0768246985</td>
                              <td>viduranga@gmail.com</td>
                              <td><a href="{{ url('/editUser') }}" style="float: center;" class="btn btn-rounded btn-success mb-5"> Update </a></td>
                          </tr>
                          <tr>
                              <td>Tharaka</td>
                              <td>Kaduwela</td>
                              <td>903620579V</td>
                              <td>0763593506</td>
                              <td>tharaka@gmail.com</td>
                              <td><a href="{{ url('/editUser') }}" style="float: center;" class="btn btn-rounded btn-success mb-5"> Update </a></td>
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
