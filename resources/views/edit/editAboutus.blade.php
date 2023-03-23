@extends('layouts.app')

@section('title',__('lang.edit') .' '. __('lang.aboutus'))

@section('content')

    <div class="container-fluid">
        <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"> {{__('lang.edit')}} {{__('lang.aboutus')}} </h2>
        <form method="POST" action="{{url('/edit-aboutus/'.$data['id'])}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title_Fr" class="form-label">{{__('lang.title')}} {{__('lang.fr')}}</label>
                <input type="text" name="title_Fr" value="{{$data['title_Fr']}}" class="form-control">
                <span class="text-danger"> @error('title_Fr') {{$message}} @enderror </span>
            </div>
            <div class="mb-3">
                <label for="title_An" class="form-label">{{__('lang.title')}} {{__('lang.an')}}</label>
                <input type="text" name="title_An" value="{{$data['title_An']}}" class="form-control">
                <span class="text-danger"> @error('title_An') {{$message}} @enderror </span>
            </div>
            <div class="mb-3">
                <label for="title_Ar" class="form-label">{{__('lang.title')}} {{__('lang.ar')}}</label>
                <input type="text" name="title_Ar" value="{{$data['title_Ar']}}" class="form-control">
                <span class="text-danger"> @error('title_Ar') {{$message}} @enderror </span>
            </div>
            <div class="mb-3">
                <label for="para_Fr" class="form-label">{{__('lang.para')}} {{__('lang.fr')}}</label>
                <input type="text" name="para_Fr" value="{{$data['para_Fr']}}" class="form-control">
                <span class="text-danger"> @error('para_Fr') {{$message}} @enderror </span>
            </div>
            <div class="mb-3">
                <label for="para_An" class="form-label">{{__('lang.para')}} {{__('lang.an')}}</label>
                <input type="text" name="para_An" value="{{$data['para_An']}}" class="form-control">
                <span class="text-danger"> @error('para_An') {{$message}} @enderror </span>
            </div>
            <div class="mb-3">
                <label for="para_Ar" class="form-label">{{__('lang.para')}} {{__('lang.ar')}}</label>
                <input type="text" name="para_Ar" value="{{$data['para_Ar']}}" class="form-control">
                <span class="text-danger"> @error('para_Ar') {{$message}} @enderror </span>
            </div>
            <div class="form-group mb-3">
                <label for="" class="form-label"> Image </label>
                <input type="file" value="{{$data['image']}}" name="image" class="form-control" >
                <span class="text-danger"> @error('image') {{$message}} @enderror </span>
            </div>
            


            <div class="modal-footer d-flex justify-content-between ">
                <button type="submit" class="btn btn-primary"> {{__('lang.edit')}} </button>
                <a href="/aboutus" type="button" class="btn btn-danger" data-bs-dismiss="modal"> {{__('lang.cancel')}} </a>
            </div>
        </form>


        </div>
    </div>
          
@endsection

