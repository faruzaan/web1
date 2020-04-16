@extends('template/header')

@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">User Table</h1>
          <p class="mb-4">Information of User</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <div class="box">
                <div class="box-header with-border">
                  <a href="{{url('user/add')}}" class="btn btn-primary btn-user btn-block mt-2">Add User</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="data_Table" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>   
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Payment</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($result as $row)
                    <tr>
                      <td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
                      <td>{{ $row->first_name }}</td>
                      <td>{{ $row->last_name }}</td>
                      <td>{{ $row->email }}</td>
                      <td>{{ $row->password }}</td>
                      <td>{{ $row->payment }}</td>
                      <td><a title="Edit" href="{{url("user/$row->id_user/edit")}}" class="btn btn-sm btn-warning"><i class="fas fa-pen-square"></i></a>
                        <form action="{{url("user/$row->id_user/delete")}}" method="POST" style="display: inline;">
                          {{csrf_field()}}
                          {{method_field('DELETE')}}

                          <button class="btn btn-sm btn-danger">
                            <i title="Hapus" class="fas fa-minus-square"></i>
                          </button>
                        </form>

                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

@endsection