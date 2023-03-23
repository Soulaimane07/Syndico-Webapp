@extends('layouts.app')

@section('title', __('lang.profile') )

@section('content')

    <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
        <div class="profile col-md-4">
            <img src="
                @if(Auth::user()->image)
                    {{asset('uploads/users/'.Auth::user()->image)}}
                @else
                    {{asset('uploads/users/default.jpg')}}
                @endif
            " alt="">
        </div>
        <div class="col-md-8">
            <div class="card-body">
            <h2 class="card-title">{{ Auth::user()->name }}</h2>
            <h5 class="card-title">{{ Auth::user()->email }}</h5>
            <h5 class="card-title">
                @if(Auth::user()->is_admin == 1 )
                    <span class="text-success"> {{__('lang.admin')}} </span>
                @else
                    <span class="text-danger"> {{__('lang.user')}} </span>
                @endif
            </h5>
            <br>

            <div class="">
                <a href="locale/fr"> {{__('lang.french')}} </a> |
                <a href="locale/en">{{__('lang.english')}}</a> |
                <a href="locale/ar">{{__('lang.arabic')}}</a>
            </div>

            <div class="d-flex mt-4">
                <button class="delete bg-primary"> 
                    <a 
                        class="sidebar-link sidebar-link"
                        href="{{ route('logout') }}" 
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                    >
                        <i data-feather="log-out" class="text-white feather-icon"></i>
                        <span class="text-white"> {{ __('lang.logout') }} </span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </button>

                <a href={{'/edit-user/'.Auth::user()->id}}> <button class="mx-4 edit"> <i class=" icon-pencil"></i> {{__('lang.edit')}} </button> </a>

                <form action="{{url('/delete-profile/'. Auth::user()->id )}}" method="post">
                    {{method_field('DELETE')}}
                    {{csrf_field()}}
                    <button id="delete" class='delete'><i class=" icon-trash"></i> {{__('lang.delete')}} </button> 
                </form> 
            </div>
        </div>
        </div>
    </div>

@endsection
