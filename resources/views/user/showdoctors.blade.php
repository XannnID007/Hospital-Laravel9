@include('layouts.navbaruser')
<br><br>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header d-flex flex-row justify-content-between">
                        <h4 class="card-title" style="font-family:times new roman; font-size:16pt">List Doctor</h4>
                    </div>
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Doctor Name</th>
                                <th>Phone</th>
                                <th>Speciality</th>
                                <th>Room</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($doctor as $doctors)
                            <tr>
                                <td>{{ $doctors->name }}</td>
                                <td>{{ $doctors->phone }}</td>
                                <td>{{ $doctors->speciality->specialityName }}</td>
                                <td>{{ $doctors->room }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
