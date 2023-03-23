@extends('layouts.app')

@section('title', __('lang.users') )

@section('content')

  <div class="container-fluid">
  
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="title">
                        <h4 class="card-title"> {{__('lang.users')}} ( {{$users->count()}} )</h4>
                        
                        @if(Auth::user()->is_admin == 1 )
                            
                        <button type="button" class="create btn btn-primary" data-bs-toggle="modal" data-bs-target="#create"> 
                          <i class="icon-plus"></i> 
                          {{__('lang.createuser')}}
                        </button>
                        
                        @endif

                    </div>
                    
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered display no-wrap"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{__('lang.name')}}</th>
                                    <th>{{__('lang.email')}}</th>
                                    <th>{{__('lang.stat')}}</th>
                                    <th>{{__('lang.pass')}}</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{$user['id']}}</td>
                                    <td>{{$user['name']}}</td>
                                    <td>{{$user['email']}}</td>
                                    <td>
                                      @if($user['is_admin'] == 1 )
                                        <span class="bg-success text-white"> {{__('lang.admin')}} </span>
                                      @else
                                        <span class="bg-danger text-white"> {{__('lang.user')}} </span>
                                      @endif
                                    </td>
                                    <td>
                                      @if(strlen($user['password']) > 25)
                                        {{ Str::limit($user['password'], 25) }}
                                      @else
                                        {{$user['password']}}
                                      @endif  
                                    </td>
                                    <td>
                                      @if(Auth::user()->is_admin == 1)

                                        <a href={{'/edit-user/'.$user['id']}}> <button class="edit"> <i class=" icon-pencil"></i> </button> </a>
        
                                        <form action="{{url('/delete-user/'.$user['id'])}}" method="post">
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
                </div>
            </div>
        </div>
    </div>
    
  </div>
  
  <div class="modal" id="create">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">{{__('lang.createuser')}}</h4>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form method="POST" action="/create-user">
            @csrf
            <div class="mb-3">
              <label for="full_name" class="form-label">{{__('lang.name')}}</label>
              <input id="name" type="text" name="name" value="{{old('name')}}" placeholder="Enter Full Name" class="form-control">
              <span class="text-danger"> @error('name') {{$message}} @enderror </span>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">{{__('lang.email')}}</label>
              <input type="email" name="email" value="{{old('email')}}" placeholder="Enter email" class="form-control">
              <span class="text-danger"> @error('email') {{$message}} @enderror </span>
            </div>


            <div class="mb-3">
              <label for="stat" class="form-label">{{__('lang.stat')}}</label>
              <select name="stat" class="form-control" aria-label="Default select example">
                <option value="1">{{__('lang.admin')}}</option>
                <option value="0">{{__('lang.user')}}</option>
              </select>
            </div>
            

            <div class="mb-3">
              <label for="password" class="form-label"> {{__('lang.pass')}} </label>
              <input id="password" type="password" class="form-control "name="password" required autocomplete="new-password">
              <span class="text-danger"> @error('password') {{$message}} @enderror </span>
            </div>
            <div class="mb-3">
              <label for="city" class="form-label"> {{__('lang.conpass')}}</label>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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

@endsection

