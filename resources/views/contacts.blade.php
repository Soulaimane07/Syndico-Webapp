@extends('layouts.app')

@section('title', __('lang.contacts') )

@section('content')

  <div class="container-fluid">
          
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="title">
                        <h4 class="card-title"> {{__('lang.contacts')}} ( {{$contacts->count()}} )</h4>
                    </div>
                    
                    @if($contacts->count() > 0) 

                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered display no-wrap"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{__('lang.fname')}}</th>
                                    <th>{{__('lang.lname')}}</th>
                                    <th>{{__('lang.email')}}</th>
                                    <th>{{__('lang.phone')}}</th>
                                    <th>{{__('lang.message')}}</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{$contact['id']}}</td>
                                    <td>{{$contact['first_name']}}</td>
                                    <td>{{$contact['last_name']}}</td>
                                    <td>{{$contact['email']}}</td>
                                    <td>{{$contact['phone']}}</td>
                                    <td>
                                        @if(strlen($contact['message']) > 25)
                                            {{ Str::limit($contact['message'], 25) }}
                                        @else
                                            {{$contact['message']}}
                                        @endif  
                                    </td>
                                    <td>

                                        @if(Auth::user()->is_admin == 1 )

                                        <a href={{'/edit-contact/'.$contact['id']}}> <button class="edit"> <i class=" icon-pencil"></i> </button> </a>
        
                                        <form action="{{url('/delete-contact/'.$contact['id'])}}" method="post">
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
    
  </div>          

@endsection
