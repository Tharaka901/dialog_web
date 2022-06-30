@extends('admin.admin_master')
@section('admin')

    <div class="content-wrapper">
        <div class="container-full">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
            <section class="content">

                <div class="row">

                    <div class="col-12">

                    <!-- /.box -->
                    <div class="box box-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-black">
                        <h3 class="widget-user-username">User Name: Chathuranga</h3>
                        <h6 class="widget-user-desc">Email: chathuranga@gmail.com</h6>

                        <a href="" style="float: right;" class="btn btn-rounded btn-success mb-5">Edit Profile</a>
                        </div>
                        <div class="widget-user-image">
                        <img class="rounded-circle" src="backend/images/user3-128x128.jpg" alt="User Avatar">
                        </div>
                        <div class="box-footer">
                        <div class="row">
                            <div class="col-sm-4">
                            <div class="description-block">
                                <h5 class="description-header">Mobile</h5>
                                <span class="description-text">076 5478952</span>
                            </div>
                            <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 br-1 bl-1">
                            <div class="description-block">
                                <h5 class="description-header">Address</h5>
                                <span class="description-text">Galle</span>
                            </div>
                            <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                            <div class="description-block">
                                <h5 class="description-header">Route</h5>
                                <span class="description-text">Malabe</span>
                            </div>
                            <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        </div>
                    </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
