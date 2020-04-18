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
                User</h1>
              </div>
              <form class="user" action="{{empty($result) ? url('admin/user/add') : url("admin/user/user/$result->id_user/edit")}}" method="POST">
              	{{ csrf_field() }}

                @if (!empty($result))
                  {{method_field('patch')}}
                @endif
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="first_name" id="first_name" placeholder="First Name" value="{{ @$result->first_name }}">                
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="last_name" id="last_name" placeholder="Last Name" value="{{ @$result->last_name }}">                
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="email" id="email" placeholder="Email" value="{{ @$result->email }}">                
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password" value="{{ @$result->password }}">                
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="payment" id="payment" placeholder="Payment" value="{{ @$result->payment }}">                
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