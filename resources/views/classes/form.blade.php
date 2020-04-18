@extends('template/header')
@section('content')

	<div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">
                {{empty($result) ? 'Add' : 'Edit'}}
                Class</h1>
              </div>
              <form class="user" action="{{empty($result) ? url('admin/classes/add') : url("admin/classes/$result->id_classes/edit")}}" method="POST">
              	{{ csrf_field() }}

                @if (!empty($result))
                  {{method_field('patch')}}
                @endif
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="grade" id="grade" placeholder="Grade" value="{{ @$result->grade }}">                
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="class" id="class" placeholder="Class" value="{{ @$result->class }}">                
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="price" id="price" placeholder="Price" value="{{ @$result->price }}">                
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Save</button>
                <!-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                  Tambah 
                </a> -->
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection