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
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Xan Hospital Is A Good Choice For Health
                            </p>
                            <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo"
                                target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
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
                                        <img src="admin/assets/images/dashboard/Group126@2x.png"
                                            class="gradient-corona-img img-fluid" alt="">
                                    </div>
                                    <div class="col-5 col-sm-7 col-xl-8 p-0">
                                        <h4 class="mb-1 mb-sm-0"></h4>
                                        <p class="mb-0 font-weight-normal d-none d-sm-block"></p>
                                    </div>
                                    <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                                        <span>
                                            <a href="https://www.bootstrapdash.com/product/corona-admin-template/"
                                                target="_blank"
                                                class="btn btn-outline-light btn-rounded get-started-btn"></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header d-flex flex-row justify-content-between">
                                        <h4 class="card-title" style="font-family:algerian; font-size: 16pt">Patient
                                            Name</h4>
                                    </div>
                                    <table class="table" id="table_id">
                                        <thead>
                                            <tr>
                                                <th style="color: white;">Customer Name</th>
                                                <th style="color: white;">Email</th>
                                                <th style="color: white;">Phone</th>
                                                <th style="color: white;">Doctor Name</th>
                                                <th style="color: white;">Date</th>
                                                <th style="color: white;">Message</th>
                                                <th style="color: white;">Status</th>
                                                <th style="color: white;">Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $appoint)
                                                <tr>
                                                    <td style="color: white;">{{ $appoint->name }}</td>
                                                    <td style="color: white;">{{ $appoint->email }}</td>
                                                    <td style="color: white;">{{ $appoint->phone }}</td>
                                                    <td style="color: white;">{{ $appoint->doctor }}</td>
                                                    <td style="color: white;">{{ $appoint->date }}</td>
                                                    <td style="color: white;">{{ $appoint->message }}</td>
                                                    <td style="color: white;">{{ $appoint->status }}</td>
                                                    <td>
                                                        <a class="btn btn-success btn-sm"
                                                            href="{{ url('approved', $appoint->id) }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-check2-square" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z" />
                                                                <path
                                                                    d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
                                                            </svg>
                                                        </a>
                                                        {{-- <a class="btn-sm btn-danger" href="{{url('canceled',$appoint->id)}}">Canceled</a> --}}
                                                        <a class="btn btn-danger btn-sm"
                                                            href="{{ url('canceled', $appoint->id) }}"
                                                            onclick="return confirm('Are you sure to delete this Patient name ?')">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                            </svg>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- container-scroller -->
                <!-- plugins:js -->
                @include('admin.script')
                <!-- End custom js for this page -->
                <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

                <script>
                    $(document).ready(function() {
                        $('#table_id').DataTable();
                    });
                </script>
</body>

</html>
