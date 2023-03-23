@extends('layouts.app')

@section('title', __('lang.demandes') )

<?php 
    $x = 0 ;
    $y = 0 ;
    foreach($demandes as $demande){
        $x = $demande['n_imm'] + $x;
        $y = $demande['n_app'] + $y; 
    }
?>

@section('content')

    <div class="container-fluid">
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="title">
                            <h4 class="card-title">{{__('lang.demandes')}} ( {{$demandes->count()}} )</h4>
                            <button type="button" class="create btn btn-primary" data-bs-toggle="modal" data-bs-target="#create"> 
                                <i class="icon-plus"></i> 
                                {{__('lang.createdemande')}}
                            </button>
                        </div>

                        <div class="row">
                            <!-- Column -->
                            <div class="col-md-6 col-xlg-3">
                                <div class="card card-hover">
                                    <div class="p-2 bg-primary text-center rounded">
                                        <h1 class="font-light text-white">
                                            {{ $x }}
                                        </h1>
                                        <h6 class="text-white"> {{__('lang.totalimm')}} </h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xlg-3">
                                <div class="card card-hover">
                                    <div class="p-2 bg-danger text-center rounded">
                                        <h1 class="font-light text-white">
                                            {{ $y }}
                                        </h1>
                                        <h6 class="text-white"> {{__('lang.totalapp')}} </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        @if($demandes->count() > 0)
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered display no-wrap"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th> {{__('lang.name')}} </th>
                                        <th>{{__('lang.email')}}</th>
                                        <th>{{__('lang.phone')}}</th>
                                        <th>{{__('lang.city')}}</th>
                                        <th>{{__('lang.imm')}}</th>
                                        <th>{{__('lang.app')}}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($demandes as $demande)
                                    <tr>
                                        <td>{{$demande['id']}}</td>
                                        <td>{{$demande['full_name']}}</td>
                                        <td>{{$demande['email']}}</td>
                                        <td>{{$demande['phone']}}</td>
                                        <td>{{$demande['city']}}</td>
                                        <td>{{$demande['n_imm']}}</td>
                                        <td>{{$demande['n_app']}}</td>
                                        <td>

                                          @if(Auth::user()->is_admin == 1 )

                                            <a href={{'/edit-demande/'.$demande['id']}}> <button class="edit"> <i class=" icon-pencil"></i> </button> </a>
            
                                            <form action="{{url('/delete-demande/'.$demande['id'])}}" method="post">
                                                {{method_field('DELETE')}}
                                                {{csrf_field()}}
                                                <button id="delete" class='delete'><i class=" icon-trash" ></i></button> 
                                            </form> 

                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        @else
                        <div class='nodata'>
                            <div class='video'>
                            <video autoplay muted loop src="assets/videos/nodata.mp4"></video>
                            </div>
                            <h2> {{__('lang.nodata')}} </h2> 
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
        

        <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"> {{__('lang.createdemande')}} </h5>
                </div>
                <div class="modal-body">
                    <form method="POST" action="create-demandes">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">{{__('lang.name')}}</label>
                            <input type="text" name="full_name" value="{{old('full_name')}}" class="form-control" id="name" aria-describedby="emailHelp">
                            <span class="text-danger"> @error('full_name') {{$message}} @enderror </span>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">{{__('lang.email')}}</label>
                          <input type="email" name="email" value="{{old('email')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <span class="text-danger"> @error('email') {{$message}} @enderror </span>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label"> {{__('lang.phone')}}</label>
                            <input type="number" name="phone" value="{{old('phone')}}" class="form-control" id="phone" aria-describedby="emailHelp">
                            <span class="text-danger"> @error('phone') {{$message}} @enderror </span>
                        </div>
                          <div class="mb-3">
                            <label for="city" class="form-label">{{__('lang.city')}}</label>
                            <input type="text" name="city" value="{{old('city')}}" class="form-control" id="city" aria-describedby="emailHelp">
                            <span class="text-danger"> @error('city') {{$message}} @enderror </span>
                        </div>
                          <div class="mb-3">
                            <label for="imm" class="form-label">{{__('lang.imm')}}</label>
                            <input type="number" name="n_imm" value="{{old('n_imm')}}" class="form-control" id="number" aria-describedby="emailHelp">
                            <span class="text-danger"> @error('n_imm') {{$message}} @enderror </span>
                        </div>
                          <div class="mb-3">
                            <label for="app" class="form-label">{{__('lang.app')}}</label>
                            <input type="number" name="n_app" value="{{old('n_app')}}" class="form-control" id="app" aria-describedby="emailHelp">
                            <span class="text-danger"> @error('n_app') {{$message}} @enderror </span>
                        </div>
                        
                        <div class="modal-footer d-flex justify-content-between ">
                            <button type="submit" class="btn btn-primary">{{__('lang.create')}}</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">{{__('lang.cancel')}}</button>
                        </div>
                      </form>
                </div>
              </div>
            </div>
        </div>

    </div>

@endsection