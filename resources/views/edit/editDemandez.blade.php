@extends('layouts.app')

@section('title', __('lang.editdemande'))

@section('content')

<div class="container-fluid">
    <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"> {{__('lang.editdemande')}}</h2>
    <form method="POST" action="{{url('/edit-demandez/'.$data['id'])}}">
        @csrf

        <h4 class="title"> {{__('lang.title')}} </h4>
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

        <h4 class="title"> {{__('lang.label')}} 1 </h4>
        <div class="mb-3">
            <label for="label1_Fr" class="form-label">{{__('lang.label')}} {{__('lang.fr')}}</label>
            <input type="text" name="label1_Fr" value="{{$data['label1_Fr']}}" class="form-control">
            <span class="text-danger"> @error('label1_Fr') {{$message}} @enderror </span>
        </div>
        <div class="mb-3">
            <label for="label1_An" class="form-label">{{__('lang.label')}} {{__('lang.an')}}</label>
            <input type="text" name="label1_An" value="{{$data['label1_An']}}" class="form-control">
            <span class="text-danger"> @error('label1_An') {{$message}} @enderror </span>
        </div>
        <div class="mb-3">
            <label for="label1_Ar" class="form-label">{{__('lang.label')}} {{__('lang.ar')}}</label>
            <input type="text" name="label1_Ar" value="{{$data['label1_Ar']}}" class="form-control">
            <span class="text-danger"> @error('label1_Ar') {{$message}} @enderror </span>
        </div>
        
        <h4 class="title"> {{__('lang.label')}} 2 </h4>
        <div class="mb-3">
            <label for="label2_Fr" class="form-label">{{__('lang.label')}} {{__('lang.fr')}}</label>
            <input type="text" name="label2_Fr" value="{{$data['label2_Fr']}}" class="form-control">
            <span class="text-danger"> @error('label2_Fr') {{$message}} @enderror </span>
        </div>
        <div class="mb-3">
            <label for="label2_An" class="form-label">{{__('lang.label')}} {{__('lang.an')}}</label>
            <input type="text" name="label2_An" value="{{$data['label2_An']}}" class="form-control">
            <span class="text-danger"> @error('label2_An') {{$message}} @enderror </span>
        </div>
        <div class="mb-3">
            <label for="label2_Ar" class="form-label">{{__('lang.label')}} {{__('lang.ar')}}</label>
            <input type="text" name="label2_Ar" value="{{$data['label2_Ar']}}" class="form-control">
            <span class="text-danger"> @error('label2_Ar') {{$message}} @enderror </span>
        </div>

        <h4 class="title"> {{__('lang.label')}} 3 </h4>
        <div class="mb-3">
            <label for="label3_Fr" class="form-label">{{__('lang.label')}} {{__('lang.fr')}}</label>
            <input type="text" name="label3_Fr" value="{{$data['label3_Fr']}}" class="form-control">
            <span class="text-danger"> @error('label3_Fr') {{$message}} @enderror </span>
        </div>
        <div class="mb-3">
            <label for="label3_An" class="form-label">{{__('lang.label')}} {{__('lang.an')}}</label>
            <input type="text" name="label3_An" value="{{$data['label3_An']}}" class="form-control">
            <span class="text-danger"> @error('label3_An') {{$message}} @enderror </span>
        </div>
        <div class="mb-3">
            <label for="label3_Ar" class="form-label">{{__('lang.label')}} {{__('lang.ar')}}</label>
            <input type="text" name="label3_Ar" value="{{$data['label3_Ar']}}" class="form-control">
            <span class="text-danger"> @error('label3_Ar') {{$message}} @enderror </span>
        </div>

        <h4 class="title"> {{__('lang.label')}} 4 </h4>
        <div class="mb-3">
            <label for="label4_Fr" class="form-label">{{__('lang.label')}} {{__('lang.fr')}}</label>
            <input type="text" name="label4_Fr" value="{{$data['label4_Fr']}}" class="form-control">
            <span class="text-danger"> @error('label4_Fr') {{$message}} @enderror </span>
        </div>
        <div class="mb-3">
            <label for="label4_An" class="form-label">{{__('lang.label')}} {{__('lang.an')}}</label>
            <input type="text" name="label4_An" value="{{$data['label4_An']}}" class="form-control">
            <span class="text-danger"> @error('label4_An') {{$message}} @enderror </span>
        </div>
        <div class="mb-3">
            <label for="label4_Ar" class="form-label">{{__('lang.label')}} {{__('lang.ar')}}</label>
            <input type="text" name="label4_Ar" value="{{$data['label4_Ar']}}" class="form-control">
            <span class="text-danger"> @error('label4_Ar') {{$message}} @enderror </span>
        </div>

        <h4 class="title"> {{__('lang.label')}} 5 </h4>
        <div class="mb-3">
            <label for="label5_Fr" class="form-label">{{__('lang.label')}} {{__('lang.fr')}}</label>
            <input type="text" name="label5_Fr" value="{{$data['label5_Fr']}}" class="form-control">
            <span class="text-danger"> @error('label5_Fr') {{$message}} @enderror </span>
        </div>
        <div class="mb-3">
            <label for="label5_An" class="form-label">{{__('lang.label')}} {{__('lang.an')}}</label>
            <input type="text" name="label5_An" value="{{$data['label5_An']}}" class="form-control">
            <span class="text-danger"> @error('label5_An') {{$message}} @enderror </span>
        </div>
        <div class="mb-3">
            <label for="label5_Ar" class="form-label">{{__('lang.label')}} {{__('lang.ar')}}</label>
            <input type="text" name="label5_Ar" value="{{$data['label5_Ar']}}" class="form-control">
            <span class="text-danger"> @error('label5_Ar') {{$message}} @enderror </span>
        </div>

        <h4 class="title"> {{__('lang.label')}} 6 </h4>
        <div class="mb-3">
            <label for="label6_Fr" class="form-label">{{__('lang.label')}} {{__('lang.fr')}}</label>
            <input type="text" name="label6_Fr" value="{{$data['label6_Fr']}}" class="form-control">
            <span class="text-danger"> @error('label6_Fr') {{$message}} @enderror </span>
        </div>
        <div class="mb-3">
            <label for="label6_An" class="form-label">{{__('lang.label')}} {{__('lang.an')}}</label>
            <input type="text" name="label6_An" value="{{$data['label6_An']}}" class="form-control">
            <span class="text-danger"> @error('label6_An') {{$message}} @enderror </span>
        </div>
        <div class="mb-3">
            <label for="label6_Ar" class="form-label">{{__('lang.label')}} {{__('lang.ar')}}</label>
            <input type="text" name="label6_Ar" value="{{$data['label6_Ar']}}" class="form-control">
            <span class="text-danger"> @error('label6_Ar') {{$message}} @enderror </span>
        </div>

        <h4 class="title"> {{__('lang.button')}} 1 </h4>
        <div class="mb-3">
            <label for="button1_Fr" class="form-label">{{__('lang.button')}} {{__('lang.fr')}}</label>
            <input type="text" name="button1_Fr" value="{{$data['button1_Fr']}}" class="form-control">
            <span class="text-danger"> @error('button1_Fr') {{$message}} @enderror </span>
        </div>
        <div class="mb-3">
            <label for="button1_An" class="form-label">{{__('lang.button')}} {{__('lang.an')}}</label>
            <input type="text" name="button1_An" value="{{$data['button1_An']}}" class="form-control">
            <span class="text-danger"> @error('button1_An') {{$message}} @enderror </span>
        </div>
        <div class="mb-3">
            <label for="button1_Ar" class="form-label">{{__('lang.button')}} {{__('lang.ar')}}</label>
            <input type="text" name="button1_Ar" value="{{$data['button1_Ar']}}" class="form-control">
            <span class="text-danger"> @error('button1_Ar') {{$message}} @enderror </span>
        </div>


        <h4 class="title"> {{__('lang.button')}} 2 </h4>
        <div class="mb-3">
            <label for="button2_Fr" class="form-label">{{__('lang.button')}} {{__('lang.fr')}}</label>
            <input type="text" name="button2_Fr" value="{{$data['button2_Fr']}}" class="form-control">
            <span class="text-danger"> @error('button2_Fr') {{$message}} @enderror </span>
        </div>
        <div class="mb-3">
            <label for="button2_An" class="form-label">{{__('lang.button')}} {{__('lang.an')}}</label>
            <input type="text" name="button2_An" value="{{$data['button2_An']}}" class="form-control">
            <span class="text-danger"> @error('button2_An') {{$message}} @enderror </span>
        </div>
        <div class="mb-3">
            <label for="button2_Ar" class="form-label">{{__('lang.button')}} {{__('lang.ar')}}</label>
            <input type="text" name="button2_Ar" value="{{$data['button2_Ar']}}" class="form-control">
            <span class="text-danger"> @error('button2_Ar') {{$message}} @enderror </span>
        </div>
        
        <div class="modal-footer d-flex justify-content-between ">
            <button type="submit" class="btn btn-primary"> {{__('lang.edit')}} </button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"> {{__('lang.cancel')}} </button>
        </div>
    </form>


    </div>
</div>

@endsection
