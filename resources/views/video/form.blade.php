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
              <form class="user" action="{{empty($result) ? url('admin/video/add') : url("admin/video/$result->id_vid/edit")}}" method="POST" enctype=”multipart/form-data”>
              	{{ csrf_field() }}

                @if (!empty($result))
                  {{method_field('patch')}}
                @endif
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="id_class" id="id_class" placeholder="Class" value="{{ @$result->id_class }}">                
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="desc" id="desc" placeholder="Description" value="{{ @$result->desc }}">                
                </div>
                <label for="">Video</label>
                <div class="form-group">
                    <input type="file" class="" name="video" id="video" placeholder="Video" value="{{ @$result->video }}">                
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