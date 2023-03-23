@extends('layouts.app')

@section('title', __('lang.editcontact') .' '.$data['id'])

@section('content')

    <div class="container-fluid">
        <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"> {{__('lang.editcontact')}} {{$data['id']}}  </h2>
        <form method="POST" action="{{url('/edit-contact/'.$data['id'])}}">
            @csrf
            <div class="mb-3">
                <label for="first_name" class="form-label">{{__('lang.fname')}}</label>
                <input type="text" name="first_name" value="{{$data['first_name']}}" placeholder="Enter First Name" class="form-control">
                <span class="text-danger"> @error('first_name') {{$message}} @enderror </span>
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">{{__('lang.lname')}}</label>
                <input type="text" name="last_name" value="{{$data['last_name']}}" placeholder="Enter Last Name" class="form-control">
                <span class="text-danger"> @error('last_name') {{$message}} @enderror </span>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">{{__('lang.email')}}</label>
                <input type="email" name="email" value="{{$data['email']}}" placeholder="Enter email" class="form-control">
                <span class="text-danger"> @error('email') {{$message}} @enderror </span>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">{{__('lang.phone')}}</label>
                <input type="number" name="phone" value="{{$data['phone']}}" placeholder="Phone number" class="form-control">
                <span class="text-danger"> @error('phone') {{$phone}} @enderror </span>
            </div>
            <div class="mb-3 disabled" >
                <label for="message" class="form-label">{{__('lang.message')}}</label>
                <input type="text" disabled name="message" value="{{$data['message']}}" placeholder="the Message" class="form-control">
                <span class="text-danger"> @error('message') {{$message}} @enderror </span>
            </div>
            <div class="modal-footer d-flex justify-content-between ">
                <button type="submit" class="btn btn-primary">{{__('lang.edit')}}</button>
                <a href="/contacts" type="button" class="btn btn-danger" data-bs-dismiss="modal">{{__('lang.cancel')}}</a>
            </div>
        </form>


        </div>
    </div>
          
@endsection

