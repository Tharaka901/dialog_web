@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->
      <section class="content">
          <div class="row">
              <div class="col-xl-2 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">
                          <div class="icon bg-primary-light rounded w-60 h-60">
                              <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                          </div>
                          <div>
                              <p class="text-mute mt-20 mb-0 font-size-16">Total Sales</p>
                              <h3 class="text-white mb-0 font-weight-500">3400 <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-2 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">
                          <div class="icon bg-info-light rounded w-60 h-60">
                              <i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
                          </div>
                          <div>
                              <p class="text-mute mt-20 mb-0 font-size-16">Inhand</p>
                              <h3 class="text-white mb-0 font-weight-500">Rs.1,250 <small class="text-danger"><i class="fa fa-caret-down"></i> -0.5%</small></h3>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-2 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">
                          <div class="icon bg-light rounded w-60 h-60">
                              <i class="text-white mr-0 font-size-24 mdi mdi-chart-line"></i>
                          </div>
                          <div>
                              <p class="text-mute mt-20 mb-0 font-size-16">Banking</p>
                              <h3 class="text-white mb-0 font-weight-500">Rs.4,500k <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-2 col-6">
                <div class="box overflow-hidden pull-up">
                    <div class="box-body">
                        <div class="icon bg-danger-light rounded w-60 h-60">
                            <i class="text-white mr-0 font-size-24 mdi mdi-chart-line"></i>
                        </div>
                        <div>
                            <p class="text-mute mt-20 mb-0 font-size-16">Credit</p>
                            <h3 class="text-white mb-0 font-weight-500">Rs.4,500k <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-6">
                <div class="box overflow-hidden pull-up">
                    <div class="box-body">
                        <div class="icon bg-success-light rounded w-60 h-60">
                            <i class="text-success mr-0 font-size-24 mdi mdi-phone-outgoing"></i>
                        </div>
                        <div>
                            <p class="text-mute mt-20 mb-0 font-size-16">Retailer Return</p>
                            <h3 class="text-white mb-0 font-weight-500">1,700 <small class="text-success"><i class="fa fa-caret-up"></i> +0.5%</small></h3>
                        </div>
                    </div>
                </div>
            </div><div class="col-xl-2 col-6">
                <div class="box overflow-hidden pull-up">
                    <div class="box-body">
                        <div class="icon bg-light rounded w-60 h-60">
                            <i class="text-white mr-0 font-size-24 mdi mdi-chart-line"></i>
                        </div>
                        <div>
                            <p class="text-mute mt-20 mb-0 font-size-16">Credit Collection</p>
                            <h3 class="text-white mb-0 font-weight-500">Rs.4,500k <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
                        </div>
                    </div>
                </div>
            </div>
              <div class="col-12">
                  <div class="box">
                      <div class="box-header">
                          <h4 class="box-title align-items-start flex-column">
                              DSR Current Status
                          </h4>
                      </div>
                      <div class="box-body">
                          <div class="table-responsive">
                              <table class="table no-border">
                                  <thead>
                                      <tr class="text-uppercase bg-lightest">
                                          <th style="min-width: 150px"><span class="text-white">Name</span></th>
                                          <th style="min-width: 120px"><span class="text-fade">Sales</span></th>
                                          <th style="min-width: 120px"><span class="text-fade">Inhand</span></th>
                                          <th style="min-width: 120px"><span class="text-fade">Banking</span></th>
                                          <th style="min-width: 120px"><span class="text-fade">Direct Banking</span></th>
                                          <th style="min-width: 120px"><span class="text-fade">Credit</span></th>
                                          <th style="min-width: 120px"><span class="text-fade">Retailer Return</span></th>
                                          <th style="min-width: 120px"><span class="text-fade">Credit Collection</span></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td class="pl-0 py-8">
                                              <div class="d-flex align-items-center">
                                                  <div class="flex-shrink-0 mr-20">
                                                      <div class="bg-img h-50 w-50" style="background-image: url({{ asset('backend/images/gallery/creative/img-1.jpg') }})"></div>
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
                                                Rs.5,800
                                            </span>
                                          </td>
                                          <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                Rs.5,800
                                            </span>
                                          </td>
                                          <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                0
                                            </span>
                                          </td>
                                          <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                Rs.5,800
                                            </span>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td class="pl-0 py-8">
                                              <div class="d-flex align-items-center">
                                                  <div class="flex-shrink-0 mr-20">
                                                      <div class="bg-img h-50 w-50" style="background-image: url({{ asset('backend/images/gallery/creative/img-2.jpg') }})"></div>
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
                                              Rs.5,800
                                          </span>
                                        </td>
                                        <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                Rs.5,800
                                            </span>
                                          </td>
                                          <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                0
                                            </span>
                                          </td>
                                          <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                               Rs.5,800
                                            </span>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td class="pl-0 py-8">
                                              <div class="d-flex align-items-center">
                                                  <div class="flex-shrink-0 mr-20">
                                                      <div class="bg-img h-50 w-50" style="background-image: url({{ asset('backend/images/gallery/creative/img-3.jpg') }})"></div>
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
                                              Rs.5,800
                                          </span>
                                        </td>
                                        <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                Rs.5,800
                                            </span>
                                          </td>
                                          <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                0
                                            </span>
                                          </td>
                                          <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                Rs.5,800
                                            </span>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td class="pl-0 py-8">
                                              <div class="d-flex align-items-center">
                                                  <div class="flex-shrink-0 mr-20">
                                                      <div class="bg-img h-50 w-50" style="background-image: url({{ asset('backend/images/gallery/creative/img-4.jpg') }})"></div>
                                                  </div>

                                                  <div>
                                                      <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Ranuka</a>
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
                                               Rs.2,800
                                            </span>
                                        </td>
                                        <td>
                                          <span class="text-white font-weight-600 d-block font-size-16">
                                              Rs.3,000
                                          </span>
                                        </td>
                                        <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                Rs.5,800
                                            </span>
                                          </td>
                                          <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                0
                                            </span>
                                          </td>
                                          <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                Rs.5,800
                                            </span>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td class="pl-0 py-8">
                                              <div class="d-flex align-items-center">
                                                  <div class="flex-shrink-0 mr-20">
                                                      <div class="bg-img h-50 w-50" style="background-image: url({{ asset('backend/images/gallery/creative/img-5.jpg') }})"></div>
                                                  </div>

                                                  <div>
                                                      <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Tharaka</a>
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
                                              Rs.5,800
                                          </span>
                                        </td>
                                        <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                Rs.5,800
                                            </span>
                                          </td>
                                          <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                0
                                            </span>
                                          </td>
                                          <td>
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                Rs.5,800
                                            </span>
                                          </td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- /.content -->
    </div>
</div>

@endsection
