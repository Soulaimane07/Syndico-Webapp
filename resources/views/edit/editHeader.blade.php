@extends('layouts.app')

@section('title', __('lang.editheader') .' '.$data['id'])

@section('content')

    <div class="container-fluid">
        <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"> {{__('lang.editheader')}} {{$data['id']}}  </h2>
        <form method="POST" action="{{url('/edit-header/'.$data['id'])}}" enctype="multipart/form-data">
            @csrf

            <h2 class="title">{{__('lang.french')}}</h2>
            <div>
                <div class="mb-3">
                    <label for="title1_Fr" class="form-label">{{__('lang.title')}} 1</label>
                    <input type="text" name="title1_Fr" value="{{$data['title1_Fr']}}" class="form-control">
                    <span class="text-danger"> @error('title1_Fr') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                    <label for="title2_Fr" class="form-label">{{__('lang.title')}} 2</label>
                    <input type="text" name="title2_Fr" value="{{$data['title2_Fr']}}" class="form-control">
                    <span class="text-danger"> @error('title2_Fr') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                    <label for="para_Fr" class="form-label">{{__('lang.para')}}</label>
                    <input type="text" name="para_Fr" value="{{$data['para_Fr']}}" class="form-control">
                    <span class="text-danger"> @error('para_Fr') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                    <label for="button_Fr" class="form-label">{{__('lang.button')}}</label>
                    <input type="text" name="button_Fr" value="{{$data['button_Fr']}}"  class="form-control">
                    <span class="text-danger"> @error('button_Fr') {{$message}} @enderror </span>
                </div>
            </div>

            <hr>
            <h2 class="title">{{__('lang.english')}}</h2>
            <div>
                <div class="mb-3">
                    <label for="title1_An" class="form-label">{{__('lang.title')}} 1</label>
                    <input type="text" name="title1_An" value="{{$data['title1_An']}}" class="form-control">
                    <span class="text-danger"> @error('title1_An') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                    <label for="title2_An" class="form-label">{{__('lang.title')}} 2</label>
                    <input type="text" name="title2_An" value="{{$data['title2_An']}}" class="form-control">
                    <span class="text-danger"> @error('title2_An') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                    <label for="para_An" class="form-label">{{__('lang.para')}}</label>
                    <input type="text" name="para_An" value="{{$data['para_An']}}" class="form-control">
                    <span class="text-danger"> @error('para_An') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                    <label for="button_An" class="form-label">{{__('lang.button')}}</label>
                    <input type="text" name="button_An" value="{{$data['button_An']}}"  class="form-control">
                    <span class="text-danger"> @error('button_An') {{$message}} @enderror </span>
                </div>
            </div>

            <hr>
            <h2 class="title">{{__('lang.arabic')}}</h2>
            <div>
                <div class="mb-3">
                    <label for="title1_Ar" class="form-label">{{__('lang.title')}} 1</label>
                    <input type="text" name="title1_Ar" value="{{$data['title1_Ar']}}" class="form-control">
                    <span class="text-danger"> @error('title1_Ar') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                    <label for="title2_Ar" class="form-label">{{__('lang.title')}} 2</label>
                    <input type="text" name="title2_Ar" value="{{$data['title2_Ar']}}" class="form-control">
                    <span class="text-danger"> @error('title2_Ar') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                    <label for="para_Ar" class="form-label">{{__('lang.para')}}</label>
                    <input type="text" name="para_Ar" value="{{$data['para_Ar']}}" class="form-control">
                    <span class="text-danger"> @error('para_Ar') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                    <label for="button_Ar" class="form-label">{{__('lang.button')}}</label>
                    <input type="text" name="button_Ar" value="{{$data['button_Ar']}}"  class="form-control">
                    <span class="text-danger"> @error('button_Ar') {{$message}} @enderror </span>
                </div>
            </div>
            
            <hr>
            <div class="form-group mb-3">
                <label for="" class="form-label"> Image </label>
                <input type="file" value="{{$data['image']}}" name="image" class="form-control" >
                <span class="text-danger"> @error('image') {{$message}} @enderror </span>
              </div>
            <div class="modal-footer d-flex justify-content-between ">
                <button type="submit" class="btn btn-primary">{{__('lang.edit')}}</button>
                <a href="/header" type="button" class="btn btn-danger" data-bs-dismiss="modal">{{__('lang.cancel')}}</a>
            </div>
        </form>


        </div>
    </div>

@endsection

