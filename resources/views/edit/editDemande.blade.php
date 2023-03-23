@extends('layouts.app')

@section('title', __('lang.editdemande') .' ' .$data['id'])

@section('content')

    <div class="container-fluid">
        <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"> {{__('lang.editdemande')}} {{$data['id']}}  </h2>
        <form method="POST" action="{{url('/edit-demande/'.$data['id'])}}">
            @csrf
            <div class="mb-3">
                <label for="full_name" class="form-label">{{__('lang.name')}}</label>
                <input type="text" name="full_name" value="{{$data['full_name']}}" placeholder="Enter Full Name" class="form-control">
                <span class="text-danger"> @error('full_name') {{$message}} @enderror </span>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">{{__('lang.email')}}</label>
                <input type="email" name="email" value="{{$data['email']}}" placeholder="Enter email" class="form-control">
                <span class="text-danger"> @error('email') {{$message}} @enderror </span>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">{{__('lang.phone')}}</label>
                <input type="number" name="phone" value="{{$data['phone']}}" placeholder="Phone number" class="form-control">
                <span class="text-danger"> @error('phone') {{$message}} @enderror </span>
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">{{__('lang.city')}}</label>
                <input type="text" name="city" value="{{$data['city']}}" placeholder="the City" class="form-control">
                <span class="text-danger"> @error('city') {{$message}} @enderror </span>
            </div>
            <div class="mb-3">
                <label for="n_imm" class="form-label">{{__('lang.imm')}}</label>
                <input type="number" name="n_imm" value="{{$data['n_imm']}}" placeholder="Number of Immeuble" class="form-control">
                <span class="text-danger"> @error('n_imm') {{$message}} @enderror </span>
            </div>
            <div class="mb-3">
                <label for="n_app" class="form-label">{{__('lang.app')}}</label>
                <input type="number" name="n_app" value="{{$data['n_app']}}" placeholder="Number of Appartements" class="form-control">
                <span class="text-danger"> @error('n_app') {{$message}} @enderror </span>
            </div>
            <div class="modal-footer d-flex justify-content-between ">
                <button type="submit" class="btn btn-primary">{{__('lang.edit')}}</button>
                <a href="/demandes" type="button" class="btn btn-danger" data-bs-dismiss="modal">{{__('lang.cancel')}}</a>
            </div>
        </form>


        </div>
    </div>

@endsection

