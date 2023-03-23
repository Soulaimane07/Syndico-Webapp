@extends('layouts.app')

@section('title', __('lang.editfooter') .' ' .$data['id'])

@section('content')

<div class="container-fluid">
    <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"> 
        {{__('lang.editfooter')}} {{$data['id']}}  
    </h2><br>
    <form method="POST" action="{{url('/edit-footer/'.$data['id'])}}">
        @csrf
        <div class="mb-3">
            <label for="full_name" class="form-label">{{__('lang.title')}}</label>
            <input type="text" name="title" value="{{$data['title']}}" class="form-control">
            <span class="text-danger"> @error('title') {{$message}} @enderror </span>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">{{__('lang.logo')}}</label>
            <input type="text" name="logo" value="{{$data['logo']}}"class="form-control">
            <span class="text-danger"> @error('logo') {{$message}} @enderror </span>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">{{__('lang.link')}}</label>
            <input type="text" name="link" value="{{$data['link']}}" class="form-control">
            <span class="text-danger"> @error('link') {{$message}} @enderror </span>
        </div>

        <br>
        <h2> {{__('lang.para')}} </h2>
        <br>

        <div class="mb-3">
            <label for="city" class="form-label">{{__('lang.para')}} {{__('lang.fr')}}</label>
            <input type="text" name="para_Fr" value="{{$data['para_Fr']}}" class="form-control">
            <span class="text-danger"> @error('para_Fr') {{$message}} @enderror </span>
        </div>
        <div class="mb-3">
            <label for="n_imm" class="form-label">{{__('lang.para')}} {{__('lang.an')}}</label>
            <input type="text" name="para_An" value="{{$data['para_An']}}" class="form-control">
            <span class="text-danger"> @error('para_An') {{$message}} @enderror </span>
        </div>
        <div class="mb-3">
            <label for="n_app" class="form-label">{{__('lang.para')}} {{__('lang.ar')}}</label>
            <input type="text" name="para_Ar" value="{{$data['para_Ar']}}" class="form-control">
            <span class="text-danger"> @error('para_Ar') {{$message}} @enderror </span>
        </div>
        <div class="modal-footer d-flex justify-content-between ">
            <button type="submit" class="btn btn-primary">{{__('lang.edit')}}</button>
            <a href="/footer" type="button" class="btn btn-danger" data-bs-dismiss="modal">{{__('lang.cancel')}}</a>
        </div>
    </form>


    </div>
</div>

@endsection
