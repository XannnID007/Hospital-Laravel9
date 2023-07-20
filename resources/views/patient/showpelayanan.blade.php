<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card corona-gradient-card">
                            <div class="card-body py-0 px-0 px-sm-3">
                                <div class="row align-items-center">
                                    <div class="col-4 col-sm-3 col-xl-2">
                                        <img src="admin/assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                                    </div>
                                    <div class="col-5 col-sm-7 col-xl-8 p-0">
                                        <h4 class="mb-1 mb-sm-0"></h4>
                                        <p class="mb-0 font-weight-normal d-none d-sm-block"></p>
                                    </div>
                                    <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                                        <span>
                                            <a href="https://www.bootstrapdash.com/product/corona-admin-template/" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn"></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-row justify-content-between">
                                        <h4 class="card-title">Data {{ ucwords($doctors->name) }}</h4>
                                        <a href="/cekpelayanan" class="btn btn-default">Back</a>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-4 text-center">
                                                    <img src="{{ asset('public/doctorimage/1656480817.jpg') }}" alt="" class="img-fluid" style="max-height: 150px">
                                                </div>
                                                <div class="col-8">
                                                    <p>{{ $doctors }}</p>
                                                    <p>{{ $doctors }}</p>
                                                    <p>{{ $doctors }}</p>
                                                </div>
                                                <div class="col-12">
                                                    <table class="table table-sm" id="">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Month</th>
                                                                <th>Jumlah Konsultan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($data as $index => $item)
                                                            <tr>
                                                                <td>{{ $index + 1 }}</td>
                                                                <td>{{ $item->month }}</td>
                                                                <td>{{ $item->allPatient }}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div id="chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
</body>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

@push('js')
<script>
  var options = {
      chart: {
      type: 'bar'
      },
      series: [{
      name: 'sales',
      data: @json($allPatient)
      }],
      xaxis: {
      categories: @json($month)
      }
      }
      
      var chart = new ApexCharts(document.querySelector("#chart"), options);
      
      chart.render();
</script>
@endpush

</html>