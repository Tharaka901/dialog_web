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
                                        Total Sales Summery
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
                                <th>No</th>
                                <th colspan="2">Name</th>
                                <th>Internet Card 49</th>
                                <th>Internet Card 99</th>
                                <th>KIT 50</th>
                                <th>KIT 100</th>
                                <th>One Wallet</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th rowspan="2">1</th>
                                <th rowspan="2">Chathuranga</th>
                                <td>Qty</td>
                                <td>50</td>
                                <td>50</td>
                                <td>50</td>
                                <td>50</td>
                                <td>100,000.00</td>
                                <td>100,200.00</td>
                            </tr>
                            <tr>
                                <td>Net VAL</td>
                                <td>50</td>
                                <td>50</td>
                                <td>50</td>
                                <td>50</td>
                                <td>100,000.00</td>
                                <td>100,200.00</td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th rowspan="2">2</th>
                                <th rowspan="2">Vidiganga</th>
                                <td>Qty</td>
                                <td>50</td>
                                <td>50</td>
                                <td>50</td>
                                <td>50</td>
                                <td>100,000.00</td>
                                <td>100,200.00</td>
                            </tr>
                            <tr>
                                <td>Net VAL</td>
                                <td>50</td>
                                <td>50</td>
                                <td>50</td>
                                <td>50</td>
                                <td>100,000.00</td>
                                <td>100,200.00</td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th rowspan="2">3</th>
                                <th rowspan="2">Shashika</th>
                                <td>Qty</td>
                                <td>50</td>
                                <td>50</td>
                                <td>50</td>
                                <td>50</td>
                                <td>100,000.00</td>
                                <td>100,200.00</td>
                            </tr>
                            <tr>
                                <td>Net VAL</td>
                                <td>50</td>
                                <td>50</td>
                                <td>50</td>
                                <td>50</td>
                                <td>100,000.00</td>
                                <td>100,200.00</td>
                            </tr>
                        </tbody>
                      <tfoot>
                          <tr>
                                <th colspan="3">Total QTY</th>
                                <th>150</th>
                                <th>150</th>
                                <th>150</th>
                                <th>150</th>
                                <th>300,000.00</th>
                                <th>300,600.00</th>
                          </tr>
                          <tr>
                                <th colspan="3">Total Net VAL</th>
                                <th>150</th>
                                <th>150</th>
                                <th>150</th>
                                <th>150</th>
                                <th>300,000.00</th>
                                <th>300,600.00</th>
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
