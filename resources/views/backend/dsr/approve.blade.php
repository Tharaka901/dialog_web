@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Main content-->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-12">
                    <div class="box">
                        <div class="box-header with-border">
                          <h4 class="box-title">Approve Form</h4>
                        </div>
                          <form class="form">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Sales Amount</label>
                                    <input type="text" class="form-control" placeholder="500,000.00">
                                </div>

                                <div class="form-group">
                                    <label>Inhand</label>
                                    <input type="text" class="form-control" placeholder="100,000.00">
                                </div>

                                <div class="form-group">
                                    <label>Banking</label>
                                    <input type="text" class="form-control" placeholder="200,000.00">
                                </div>
                                <div class="form-group">
                                    <label>Direct Banking</label>
                                    <input type="text" class="form-control" placeholder="100,000.00">
                                </div>
                                <div class="form-group">
                                    <label>Credit</label>
                                    <input type="text" class="form-control" placeholder="100,000.00">
                                </div>
                                <div class="form-group">
                                    <label>Credit Collection</label>
                                    <input type="text" class="form-control" placeholder="100,000.00">
                                </div>
                                <div class="form-group">
                                    <label>Variance</label>
                                    <input type="text" class="form-control" placeholder="0.00">
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="button" class="btn btn-rounded btn-warning btn-outline mr-1">
                                <i class="ti-trash"></i> Reject
                                </button>
                                <button type="submit" class="btn btn-rounded btn-primary btn-outline">
                                <i class="ti-save-alt"></i> Approve
                                </button>
                            </div>
                          </form>
                  </div>
                  <!-- /.box -->
        </div>
      <!-- /.content -->
    </div>
</div>

@endsection
