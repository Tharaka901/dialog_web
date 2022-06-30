@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
    <div class="container-full">

      <!-- Main content-->
            <div class="col-12">
                <div class="box">
                    <form class="">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-md-5">
                                    <div class="box-header">
                                        <h4 class="box-title align-items-start flex-column">
                                            Complete DSR
                                        </h4>
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
                      <div class="box-body">
                          <div class="table-responsive">
                              <table class="table no-border">
                                  <thead>
                                      <tr class="text-uppercase bg-lightest">
                                          <th style="min-width: 80px"><span class="text-white">Date</span></th>
                                          <th style="min-width: 110px"><span class="text-white">Name</span></th>
                                          <th style="min-width: 80px"><span class="text-fade">Sales</span></th>
                                          <th style="min-width: 80px"><span class="text-fade">Inhand</span></th>
                                          <th style="min-width: 80px"><span class="text-fade">Banking</span></th>
                                          <th style="min-width: 80px"><span class="text-fade">Direct Banking</span></th>
                                          <th style="min-width: 80px"><span class="text-fade">Credit</span></th>
                                          <th style="min-width: 80px"><span class="text-fade">Retailer Return</span></th>
                                          <th style="min-width: 80px"><span class="text-fade">Credit Collection</span></th>
                                          <th style="min-width: 80px"><span class="text-fade">Status</span></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  29/06/2022
                                              </span>
                                          </td>
                                          <td class="pl-0 py-8">
                                              <div class="d-flex align-items-center">
                                                  <div class="flex-shrink-0 mr-20">
                                                      <div class="bg-img h-50 w-50" style="background-image: url(backend/images/gallery/creative/img-1.jpg)"></div>
                                                  </div>
                                                  <div>
                                                      <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Shashika</a>
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  Rs.45,800
                                              </span>
                                          </td>
                                          <td>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  Rs.40,000
                                              </span>
                                          </td>
                                          <td>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                Rs.5,800
                                              </span>
                                          </td>
                                          <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                Rs.100
                                            </span>
                                          </td>
                                          <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                Rs.40,000
                                            </span>
                                          </td>
                                          <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                               0
                                            </span>
                                          </td>
                                          <td>
                                          <span class="text-white font-weight-600 d-block font-size-16">
                                              Rs.100
                                          </span>
                                          </td>
                                          <td>
                                              <span class="badge badge-pill badge-success">Approved</span>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  29/06/2022
                                              </span>
                                          </td>
                                          <td class="pl-0 py-8">
                                              <div class="d-flex align-items-center">
                                                  <div class="flex-shrink-0 mr-20">
                                                      <div class="bg-img h-50 w-50" style="background-image: url(backend/images/gallery/creative/img-2.jpg)"></div>
                                                  </div>

                                                  <div>
                                                      <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Viduranga</a>
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                Rs.45,800
                                            </span>
                                          </td>
                                          <td>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  Rs.40,000
                                              </span>
                                          </td>
                                          <td>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                 Rs.5,800
                                              </span>
                                          </td>
                                          <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                Rs.0
                                            </span>
                                          </td>
                                          <td>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  Rs.40,000
                                              </span>
                                          </td>
                                          <td>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                 0
                                              </span>
                                          </td>
                                          <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                Rs.100
                                            </span>
                                          </td>
                                          <td>
                                              <span class="badge badge-pill badge-success">Approved</span>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  29/06/2022
                                              </span>
                                          </td>
                                          <td class="pl-0 py-8">
                                              <div class="d-flex align-items-center">
                                                  <div class="flex-shrink-0 mr-20">
                                                      <div class="bg-img h-50 w-50" style="background-image: url(backend/images/gallery/creative/img-3.jpg)"></div>
                                                  </div>

                                                  <div>
                                                      <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Chathuranga</a>
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                Rs.45,800
                                            </span>
                                          </td>
                                          <td>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                Rs.40,000
                                              </span>
                                          </td>
                                          <td>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                               Rs.5,800
                                              </span>
                                          </td>
                                          <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                              Rs.0
                                            </span>
                                          </td>
                                          <td>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                Rs.40,000
                                              </span>
                                          </td>
                                          <td>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                               0
                                              </span>
                                          </td>
                                          <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                              Rs.100
                                            </span>
                                          </td>
                                          <td>
                                              <span class="badge badge-pill badge-success">Approved</span>
                                          </td>
                                        </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                </div>
            </div>
      <!-- /.content -->
    </div>
</div>

@endsection
