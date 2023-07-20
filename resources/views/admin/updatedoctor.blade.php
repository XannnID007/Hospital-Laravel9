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

    <base href="/public">
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
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="" style="padding-top:50px;">
                @include('layouts.notification')
                <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding:15px;">
                        <label for="">Doctor Name</label>
                        <input type="text" style="color:black;" name="name" value="{{$data->name}}" required="">
                    </div>
                    <div style="padding:15px;">
                        <label for="">Speciality</label>
                        <input type='number' name='speciality_id' id='speciality_id' class="" style="color:black;" value='{{ $data->speciality_id }}'>
                    </div>
                    <div style="padding:15px;">
                        <label for="">Phone </label>
                        <input type="number" style="color:black;" name="phone" value="{{$data->phone}}" required="">
                    </div>
                    <div style="padding:15px;">
                        <label for="">Room No</label>
                        <input type="text" style="color:black;" name="room" value="{{$data->room}}" required="">
                    </div>
                    <div style="padding:15px;">
                        <label for="">Old Image</label>
                        <img height="150" width="150" src="doctorimage/{{$data->image}}" alt="">
                    </div>
                    <div style="padding:15px;">
                        <label for="">Change Image</label>

                        <input type="file" name="file">
                    </div>
                    <div style="padding:15px;">
                        <a type="submit" href="/showdoctor" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
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