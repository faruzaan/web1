@extends('template/header')

@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Content</h1>
          <p class="mb-4">Create Something Great.</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <div class="box">
                <div class="box-header with-border">
                  <a href="{{url('user/add')}}" class="btn btn-primary btn-user btn-block mt-2">Add Content</a>
                </div>
              </div>
            </div>
            <div class="card-body">
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

@endsection