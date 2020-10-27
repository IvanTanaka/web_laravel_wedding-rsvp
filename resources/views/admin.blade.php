@extends('layouts.app')
@section('header')
    <style>
        .attend, .vege{
            color:green;
        }
        .not_attend, .non_vege{
            color:red;
        }
    </style>   
@endsection

@section('content')
        <div class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12" style="margin-bottom:20px;">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Total RSVP = {{$total_data}}</h5>
                                    <h5>Attend RSVP = {{$attend_rsvp}}</h5>
                                    <h5>Not Attend RSVP = {{$not_attend_rsvp}}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>
                                    Total Guest = {{$guest}}
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>
                                    Total Non-Vege = {{$non_vege}}
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>
                                    Total Vege = {{$vege}}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h1 class="m-0 text-dark">RSVP List</h1>
                    </div>
                    <div class="card-body">
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="card">
                                  <div class="card-body table-responsive p-2">
                                      <table class="table table-bordered data-table" id="rsvp_table">
                                          <thead>
                                              <tr>
                                                  <th>No</th>
                                                  <th>Name</th>
                                                  <th>Attend</th>
                                                  <th>Number of attending</th>
                                                  <th>Vegetarian</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                          </tbody>
                                      </table>
                                  </div>
                                  <!-- /.card-body -->
                              </div>
                              <!-- /.card -->
                          </div>
                          
                      </div>
                      <!-- /.row -->
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </div>
@endsection

@section('script')
    

<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>
<script type="text/javascript">
    $(function () {
        var table = $('#rsvp_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{url('admin')}}",
            columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'attend_bool', name: 'attend_bool'},
            {data: 'attending', name: 'attending'},
            {data: 'vege_bool', name: 'vege_bool'},
            ]
        });
        
    });

</script>
@endsection