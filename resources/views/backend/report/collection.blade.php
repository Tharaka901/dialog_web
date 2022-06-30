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
            <form class="">
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-5">
                            <div class="box-header">
                                <h3 class="box-title align-items-start flex-column">
                                    Total Collection Report
                                </h3>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="position-relative form-group"><label
                                    for="fromdate" class="">From</label><input
                                    name="fromdate" id="fromdate" placeholder="Date"
                                    type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="position-relative form-group"><label
                                    for="todate" class="">To</label><input
                                    name="todate" id="todate" placeholder="Date"
                                    type="date" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th style="min-width: 10px">No</th>
                              <th style="min-width: 100px">Name</th>
                              <th style="min-width: 100px">Cach</th>
                              <th style="min-width: 100px">Cheque</th>
                              <th style="min-width: 100px">Credit Collection</th>
                              <th style="min-width: 100px">Banking - Sampath</th>
                              <th style="min-width: 100px">Banking - Peoples</th>
                              <th style="min-width: 100px">Banking - Cargils</th>
                              <th style="min-width: 100px">Direct Banking - Sampath</th>
                              <th style="min-width: 100px">Direct Banking - Peoples</th>
                              <th style="min-width: 100px">Direct Banking - Cargils</th>
                              <th style="min-width: 100px">Balance</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>01</td>
                              <td>Chathuranga</td>
                              <td>Rs.50,000.00</td>
                              <td>Rs.15,000.00</td>
                              <td>Rs.5,000.00</td>
                              <td>Rs.25,000.00</td>
                              <td>Rs.10,000.00</td>
                              <td>Rs.10,000.00</td>
                              <td>Rs.5,000.00</td>
                              <td>Rs.10,000.00</td>
                              <td>Rs.15,000.00</td>
                              <td>Rs.     0.00</td>
                          </tr>
                          <tr>
                              <td>02</td>
                              <td>Viduranga</td>
                              <td>Rs.50,000.00</td>
                              <td>Rs.15,000.00</td>
                              <td>Rs.5,000.00</td>
                              <td>Rs.25,000.00</td>
                              <td>Rs.10,000.00</td>
                              <td>Rs.10,000.00</td>
                              <td>Rs.5,000.00</td>
                              <td>Rs.10,000.00</td>
                              <td>Rs.15,000.00</td>
                              <td>Rs.     0.00</td>
                          </tr>
                          <tr>
                            <td>03</td>
                            <td>Tharaka</td>
                            <td>Rs.50,000.00</td>
                            <td>Rs.15,000.00</td>
                            <td>Rs.5,000.00</td>
                            <td>Rs.25,000.00</td>
                            <td>Rs.10,000.00</td>
                            <td>Rs.10,000.00</td>
                            <td>Rs.5,000.00</td>
                            <td>Rs.10,000.00</td>
                            <td>Rs.15,000.00</td>
                            <td>Rs.     0.00</td>
                          </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                  <th colspan="2">Total</th>
                                  <th>Rs.150,000.00</th>
                                  <th>Rs. 45,000.00</th>
                                  <th>Rs. 15,000.00</th>
                                  <th>Rs. 75,000.00</th>
                                  <th>Rs. 30,000.00</th>
                                  <th>Rs. 30,000.00</th>
                                  <th>Rs. 15,000.00</th>
                                  <th>Rs. 30,000.00</th>
                                  <th>Rs. 45,000.00</th>
                                  <td>Rs.     0.00</td>
                            </tr>
                        </tfoot>
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
