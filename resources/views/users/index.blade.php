@extends('layout')
@section('content')

    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

      

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>emial</th>
                                <th>control</th>
                                
                            </tr>
                        </thead>
                      
                        <tbody>
                            @foreach($user as $users)
                            <tr>
                                <td>{{$users->name}}</td>
                                <td>{{$users->emial}}</td>
                               
                            </tr>
                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection