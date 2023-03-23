@extends('layouts.app')

@section('title', __('lang.footer') )

@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
  
                    <div class="title">
                      <h4 class="card-title"> {{__('lang.footer')}} ( {{$footer->count()}} )</h4>
  
                      {{-- @if($contacts->count() == 0) --}}
                      <button type="button" class="create btn btn-primary" data-bs-toggle="modal" data-bs-target="#create"> 
                        <i class="icon-plus"></i> 
                        {{__('lang.createitem')}}
                      </button>
                      {{-- @endif --}}
                    </div>
                    
                    @if($footer->count() > 0) 
  
                    <div class="table-responsive">
                    
                        <table id="zero_config" class="table table-striped table-bordered display no-wrap"
                          style="width:100%">
                            <thead>
                                <tr>
                                  <th>#</th>
                                  <th>{{__('lang.title')}} </th>
                                  <th>{{__('lang.logo')}} </th>
                                  <th> {{__('lang.link')}} </th>
                                  <th> {{__('lang.para')}} {{__('lang.fr')}} </th>
                                  <th> {{__('lang.para')}} {{__('lang.an')}} </th>
                                  <th> {{__('lang.para')}} {{__('lang.ar')}} </th>
                                  <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($footer as $item)
                                <tr>
                                  <td>{{$item['id']}}</td>
                                  <td>
                                    @if(strlen($item['title']) > 10)
                                        {{ Str::limit($item['title'], 10) }}
                                    @else
                                        {{$item['title']}}
                                    @endif  
                                  </td>
                                  <td>
                                
                                    @if(strlen($item['logo']) > 10)
                                        {{ Str::limit($item['logo'], 10) }}
                                    @else
                                        {{$item['logo']}}
                                    @endif  
                                    
                                    </td>
                                  <td>
                                    @if(strlen($item['link']) > 20)
                                        {{ Str::limit($item['link'], 20) }}
                                    @else
                                        {{$item['link']}}
                                    @endif  </td>
                                    <td>
                                        @if(strlen($item['para_Fr']) > 20)
                                            {{ Str::limit($item['para_Fr'], 20) }}
                                        @else
                                            {{$item['para_Fr']}}
                                        @endif  </td>
                                    <td>
                                        @if(strlen($item['para_An']) > 20)
                                            {{ Str::limit($item['para_An'], 20) }}
                                        @else
                                            {{$item['para_An']}}
                                        @endif  </td>
                                    <td>
                                        @if(strlen($item['para_Ar']) > 20)
                                            {{ Str::limit($item['para_Ar'], 20) }}
                                        @else
                                            {{$item['para_Ar']}}
                                        @endif  
                                    </td>
                                    <td>
                                        <a href={{'/edit-item/'.$item['id']}}> <button class="edit"> <i class=" icon-pencil"></i> </button> </a>
            
                                        <form action="{{url('/delete-footer/'.$item['id'])}}" method="post">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                            <button id="delete" class='delete'><i class=" icon-trash" ></i></button> 
                                        </form> 
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
              <h5 class="modal-title" id="exampleModalLabel"> {{__('lang.createitem')}}</h5>
            </div>
            <div class="modal-body">
                <form method="POST" action="create-footer">
                    @csrf
    
                    <div class="mb-3">
                      <label for="name" class="form-label"> {{__('lang.title')}}</label>
                      <input type="text" name="title" value="{{old('title')}}" class="form-control" id="name" >
                      <span class="text-danger"> @error('title') {{$message}} @enderror </span>
                    </div>
                    <div class="mb-3">
                      <label for="name" class="form-label"> {{__('lang.logo')}}</label>
                      <input type="text" name="logo" value="{{old('logo')}}" class="form-control" id="name" >
                      <span class="text-danger"> @error('logo') {{$message}} @enderror </span>
                    </div>
                    <div class="mb-3">
                      <label for="name" class="form-label"> {{__('lang.link')}}</label>
                      <input type="text" name="link" value="{{old('link')}}" class="form-control" id="name" >
                      <span class="text-danger"> @error('link') {{$message}} @enderror </span>
                    </div>
                    
                    <h4 class="title"> {{__('lang.para')}} </h4>
                    <div class="mb-3">
                        <label for="name" class="form-label"> {{__('lang.para')}} {{__('lang.fr')}}</label>
                        <input type="text" name="para_Fr" value="{{old('para_Fr')}}" class="form-control" id="name" >
                        <span class="text-danger"> @error('para_Fr') {{$message}} @enderror </span>
                      </div>
                      <div class="mb-3">
                        <label for="name" class="form-label"> {{__('lang.para')}} {{__('lang.an')}}</label>
                        <input type="text" name="para_An" value="{{old('para_An')}}" class="form-control" id="name" >
                        <span class="text-danger"> @error('para_An') {{$message}} @enderror </span>
                      </div>
                      <div class="mb-3">
                        <label for="name" class="form-label"> {{__('lang.para')}} {{__('lang.ar')}}</label>
                        <input type="text" name="para_Ar" value="{{old('para_Ar')}}" class="form-control" id="name" >
                        <span class="text-danger"> @error('para_Ar') {{$message}} @enderror </span>
                      </div>
                    
                    
                    <div class="modal-footer d-flex justify-content-between ">
                        <button type="submit" class="btn btn-primary"> {{__('lang.create')}} </button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"> {{__('lang.cancel')}} </button>
                    </div>
                  </form>
            </div>
          </div>
        </div>
    </div>

</div>          

@endsection
