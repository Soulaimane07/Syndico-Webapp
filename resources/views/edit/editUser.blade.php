@extends('layouts.app')

@section('title', __('lang.editdeuser') .' '.$data['id'])

@section('content')

    <div class="container-fluid">
        <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"> {{__('lang.editdeuser')}} {{$data['id']}}  </h2>
        <form method="POST" action="{{url('/edit-user/'.$data['id'])}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="full_name" class="form-label">{{__('lang.name')}}</label>
                <input id="name" type="text" name="name" value="{{$data['name']}}" placeholder="Enter Full Name" class="form-control">
                <span class="text-danger"> @error('name') {{$message}} @enderror </span>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">{{__('lang.email')}}</label>
                <input type="email" name="email" value="{{$data['email']}}" placeholder="Enter email" class="form-control">
                <span class="text-danger"> @error('email') {{$message}} @enderror </span>
            </div>
            <div class="mb-3">
                <label for="stat" class="form-label">{{__('lang.stat')}}</label>
                <select name="stat" value="{{$data['stat']}}" aria-label="Default select example" class="form-control">
                    <option value="1">{{__('lang.admin')}}</option>
                    <option value="0">{{__('lang.user')}}</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="" class="form-label"> Image </label>
                <input type="file" value="{{$data['image']}}" name="image" class="form-control" >
            </div>

            <div class="mb-3">
                <label for="password" class="form-label"> {{__('lang.pass')}} </label>
                <input id="password" value="{{$data['password']}}" type="text" class="form-control "name="password" required autocomplete="new-password">
                <span class="text-danger"> @error('password') {{$message}} @enderror </span>
            </div>
            <div class="mb-3">
                <label for="city" class="form-label"> {{__('lang.conpass')}}</label>
                <input id="password-confirm"  value="{{$data['password']}}" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
            
            <div class="modal-footer d-flex justify-content-between ">
                <button type="submit" class="btn btn-primary">{{__('lang.edit')}}</button>
                <a href="/users" type="button" class="btn btn-danger" data-bs-dismiss="modal">{{__('lang.cancel')}}</a>
            </div>
        </form>


    </div>

@endsection

