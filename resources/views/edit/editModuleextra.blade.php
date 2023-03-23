@extends('layouts.app')

@section('title', __('lang.editextraModules'))

@section('content')

    <div class="container-fluid">
        <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"> {{__('lang.editextraModules')}}</h2>
        <form method="POST" action="{{url('/edit-moduleextra/'.$data['id'])}}" enctype="multipart/form-data">
            @csrf

            <h2 class="title">{{__('lang.french')}}</h2>
            <div>
                <div class="mb-3">
                    <label for="title_Fr" class="form-label">{{__('lang.title')}}</label>
                    <input type="text" name="title_Fr" value="{{$data['title_Fr']}}" class="form-control">
                    <span class="text-danger"> @error('title_Fr') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                    <label for="para_Fr" class="form-label">{{__('lang.para')}} 1</label>
                    <input type="text" name="para1_Fr" value="{{$data['para1_Fr']}}" class="form-control">
                    <span class="text-danger"> @error('para1_Fr') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                    <label for="para_Fr" class="form-label">{{__('lang.para')}} 2</label>
                    <input type="text" name="para2_Fr" value="{{$data['para2_Fr']}}" class="form-control">
                    <span class="text-danger"> @error('para2_Fr') {{$message}} @enderror </span>
                </div>
            </div>

            <hr>
            <h2 class="title">{{__('lang.english')}}</h2>
            <div>
                <div class="mb-3">
                    <label for="title_An" class="form-label">{{__('lang.title')}}</label>
                    <input type="text" name="title_An" value="{{$data['title_An']}}" class="form-control">
                    <span class="text-danger"> @error('title_An') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                    <label for="para_An" class="form-label">{{__('lang.para')}} 1 </label>
                    <input type="text" name="para1_An" value="{{$data['para1_An']}}" class="form-control">
                    <span class="text-danger"> @error('para1_An') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                    <label for="para_An" class="form-label">{{__('lang.para')}} 2 </label>
                    <input type="text" name="para2_An" value="{{$data['para2_An']}}" class="form-control">
                    <span class="text-danger"> @error('para2_An') {{$message}} @enderror </span>
                </div>
            </div>

            <hr>
            <h2 class="title">{{__('lang.arabic')}}</h2>
            <div>
                <div class="mb-3">
                    <label for="title_Ar" class="form-label">{{__('lang.title')}}</label>
                    <input type="text" name="title_Ar" value="{{$data['title_Ar']}}" class="form-control">
                    <span class="text-danger"> @error('title_Ar') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                    <label for="para_Ar" class="form-label">{{__('lang.para')}} 1</label>
                    <input type="text" name="para1_Ar" value="{{$data['para1_Ar']}}" class="form-control">
                    <span class="text-danger"> @error('para1_Ar') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                    <label for="para_Ar" class="form-label">{{__('lang.para')}} 2</label>
                    <input type="text" name="para2_Ar" value="{{$data['para2_Ar']}}" class="form-control">
                    <span class="text-danger"> @error('para2_Ar') {{$message}} @enderror </span>
                </div>
            </div>
            
            <div class="modal-footer d-flex justify-content-between ">
                <button type="submit" class="btn btn-primary">{{__('lang.edit')}}</button>
                <a href="/modules" type="button" class="btn btn-danger" data-bs-dismiss="modal">{{__('lang.cancel')}}</a>
            </div>
        </form>


        </div>
    </div>

@endsection

