<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }
    </style>

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
        <div class="container-wrapper">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header d-flex flex-row justify-content-between"></div>
                        <div class="card-body">
                            @include('layouts.notification')
                            <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div style="padding:15px;">
                                    <label for="">Doctor Name</label>
                                    <input type="text" style="color:black;" name="name" placeholder="Write the name" required="">
                                </div>
                                <div style="padding:15px;">
                                    <label for="">Speciality</label>
                                    <input type='number' name='speciality_id' id='speciality_id' class="" style="color:black;" placeholder="Write the speciality Doctor">
                                </div>
                                <div style="padding:15px;">
                                    <label for="">Phone </label>
                                    <input type="number" style="color:black;" name="phone" placeholder="Write the number" required="">
                                </div>
                                <div style="padding:15px;">
                                    <label for="">Room No</label>
                                    <input type="text" style="color:black;" name="room" placeholder="Write the room number" required="">
                                </div>
                                <div style="padding:15px;">
                                    <label for="">Doctor Image</label>
                                    <input type="file" name="file" required="">
                                </div>
                                <div style="padding:15px;">
                                    <a type="submit" href="/showdoctor" class="btn btn-danger">Cancel</a>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
            <div class="container" align="" style="padding:50px;">
            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    setTimeout(() => {
        $(".alert").slideUp();
    }, 2500);
</script>

</html>
