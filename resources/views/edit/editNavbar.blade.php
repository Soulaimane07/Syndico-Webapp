@extends('layouts.app')

@section('title', __('lang.edititem') .' '.$data['id'])

@section('content')
    
    <div class="container-fluid">
        <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"> {{__('lang.edititem')}} {{$data['id']}}  </h2>
        <form method="POST" action="{{url('/edit-navbar/'.$data['id'])}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title_Fr" class="form-label">{{__('lang.title')}} {{__('lang.fr')}}</label>
                <input type="text" name="title_Fr" value="{{$data['title_Fr']}}" placeholder="Enter Title FR" class="form-control">
                <span class="text-danger"> @error('title_Fr') {{$message}} @enderror </span>
            </div>
            <div class="mb-3">
                <label for="title_An" class="form-label">{{__('lang.title')}} {{__('lang.an')}}</label>
                <input type="title_An" name="title_An" value="{{$data['title_An']}}" placeholder="Enter Title AN" class="form-control">
                <span class="text-danger"> @error('title_An') {{$message}} @enderror </span>
            </div>
            <div class="mb-3">
                <label for="title_Ar" class="form-label">{{__('lang.title')}} {{__('lang.ar')}}</label>
                <input type="text" name="title_Ar" value="{{$data['title_Ar']}}" placeholder="Enter Title AR" class="form-control">
                <span class="text-danger"> @error('title_Ar') {{$message}} @enderror </span>
            </div>
            <div class="form-group mb-3">
                <label for="" class="form-label"> Image </label>
                <input type="file" value="{{$data['image']}}" name="image" class="form-control" >
                <span class="text-danger"> @error('image') {{$message}} @enderror </span>
            </div>
            <div class="mb-3">
                <label for="logo" class="form-label">{{__('lang.logo')}}</label>
                <input type="text" name="logo" value="{{$data['logo']}}" class="form-control">
                <span class="text-danger"> @error('logo') {{$message}} @enderror </span>
            </div>
            <div class="mb-3">
                <label for="link" class="form-label">{{__('lang.link')}}</label>
                <input type="text" name="link" value="{{$data['link']}}" class="form-control">
                <span class="text-danger"> @error('link') {{$message}} @enderror </span>
            </div>
            <div class="modal-footer d-flex justify-content-between ">
                <button type="submit" class="btn btn-primary">{{__('lang.edit')}}</button>
                <a href="/navbar" type="button" class="btn btn-danger" data-bs-dismiss="modal">{{__('lang.cancel')}}</a>
            </div>
        </form>


        </div>
    </div>
          
@endsection

