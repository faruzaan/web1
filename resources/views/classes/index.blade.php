@extends('template/header')

@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Class Table</h1>
          <p class="mb-4">Information of Class</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <div class="box">
                <div class="box-header with-border">
                  <a href="{{url('admin/classes/add')}}" class="btn btn-primary btn-user btn-block mt-2">Add Class</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="data_Table" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>   
                      <th>Class</th>
                      <th>Subject</th>
                      <th>Price</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($result as $row)
                    <tr>
                      <td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
                      <td>{{ $row->class }}th</td>
                      <td>{{ $row->subject }}</td>
                      <td>₹ {{ $row->price }}</td>
                      <td><a title="Edit" href="{{url("admin/classes/$row->id_class/edit")}}" class="btn btn-sm btn-warning"><i class="fas fa-pen-square"></i></a>
                        <form action="{{url("admin/classes/$row->id_class/delete")}}" method="POST" style="display: inline;">
                          {{csrf_field()}}
                          {{method_field('DELETE')}}

                          <button class="btn btn-sm btn-danger">
                            <i title="Delete" class="fas fa-minus-square"></i>
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