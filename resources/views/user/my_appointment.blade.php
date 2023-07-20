@include('layouts.navbaruser')
<div class="container">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-sm table-striped" id="table_id">
                <thead>
                    <tr>
                        <th>Doctor Name</th>
                        <th>Patient Name</th>
                        <th>Date</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Cancel Appointment</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appoint as $data => $appoints)
                    <tr>
                        <td>{{ $appoints->doctor }}</td>
                        <td>{{ ucwords($appoints->name) }}</td>
                        <td>{{ $appoints->date }}</td>
                        <td>{{ $appoints->message }}</td>
                        <td>{{ $appoints->status }}</td>
                        <td>
                            <a class="btn-sm btn-danger" onclick="return confirm('Are you sure to delete this ?')" href="{{url('cancel_appoint',$appoints->id)}}">Cancel</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
        
        <script>
            $(document).ready( function () {
                $('#table_id').DataTable();
            } );
        </script>
    