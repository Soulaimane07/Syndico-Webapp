@extends('layouts.app')

@section('title', __('lang.navbar') )

@section('content')

<div class="container-fluid">
          
    <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">

                  <div class="title">
                      <h4 class="card-title"> {{__('lang.navitems')}} ( {{$navbar->count()}} )</h4>
                      
                      @if($navbar->count() < 6)
                      <button type="button" class="create btn btn-primary" data-bs-toggle="modal" data-bs-target="#create"> 
                        <i class="icon-plus"></i> 
                        {{__('lang.createitem')}}
                      </button>
                      @endif
                  </div>
                  
                  @if($navbar->count() > 0) 

                  <div class="table-responsive">
                      <table id="zero_config" class="table table-striped table-bordered display no-wrap"
                          style="width:100%">
                          <thead>
                              <tr>
                                <th>#</th>
                                <th>{{__('lang.title')}} {{__('lang.fr')}} </th>
                                <th>{{__('lang.title')}} {{__('lang.an')}}</th>
                                <th>{{__('lang.title')}} {{__('lang.ar')}}</th>
                                <th>{{__('lang.image')}}</th>
                                <th>{{__('lang.logo')}}</th>
                                <th>{{__('lang.link')}}</th>
                                <th></th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($navbar as $navbar)
                              <tr>
                                <td>{{$navbar['id']}}</td>
                                <td>
                                  @if(strlen($navbar['title_Fr']) > 10)
                                      {{ Str::limit($navbar['title_Fr'], 10) }}
                                  @else
                                      {{$navbar['title_Fr']}}
                                  @endif  
                                  
                                  </td>
                                <td>
                              
                                  @if(strlen($navbar['title_An']) > 10)
                                      {{ Str::limit($navbar['title_An'], 10) }}
                                  @else
                                      {{$navbar['title_An']}}
                                  @endif  
                                  
                                  </td>
                                <td>
                                  @if(strlen($navbar['title_Ar']) > 10)
                                      {{ Str::limit($navbar['title_Ar'], 10) }}
                                  @else
                                      {{$navbar['title_Ar']}}
                                  @endif  </td>
                                <td>
                                  @if(strlen($navbar['image']) > 10)
                                      {{ Str::limit($navbar['image'], 10) }}
                                  @else
                                      {{$navbar['image']}}
                                  @endif  
                                </td>
                                <td>
                              
                                  @if(strlen($navbar['logo']) > 10)
                                      {{ Str::limit($navbar['logo'], 10) }}
                                  @else
                                      {{$navbar['logo']}}
                                  @endif  
                              </td>
                                <td>
                                  @if(strlen($navbar['link']) > 10)
                                      {{ Str::limit($navbar['link'], 10) }}
                                  @else
                                      {{$navbar['link']}}
                                  @endif 
                              </td>
                                <td>
                                  <a href={{'/edit-navbar/'.$navbar['id']}}> <button class="edit"> <i class=" icon-pencil"></i> </button> </a>
        
                                  <form action="{{url('/delete-navbar-item/'.$navbar['id'])}}" method="post">
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
            <h5 class="modal-title" id="exampleModalLabel">{{__('lang.createitem')}}</h5>
          </div>
          <div class="modal-body">
              <form method="POST" action="create-navbar-item" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                      <label for="name" class="form-label">{{__('lang.title')}} {{__('lang.fr')}}</label>
                      <input type="text" name="title_Fr" value="{{old('title_Fr')}}" class="form-control" id="name" aria-describedby="emailHelp">
                      <span class="text-danger"> @error('title_Fr') {{$message}} @enderror </span>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">{{__('lang.title')}} {{__('lang.an')}}</label>
                    <input type="text" name="title_An" value="{{old('title_An')}}" class="form-control" id="title_An" aria-describedby="emailHelp">
                    <span class="text-danger"> @error('title_An') {{$message}} @enderror </span>
                  </div>
                  <div class="mb-3">
                      <label for="phone" class="form-label"> {{__('lang.title')}} {{__('lang.ar')}} </label>
                      <input type="text" name="title_Ar" value="{{old('title_Ar')}}" class="form-control" id="title_Ar" aria-describedby="emailHelp">
                      <span class="text-danger"> @error('title_Ar') {{$message}} @enderror </span>
                  </div>
                  <div class="form-group mb-3">
                    <label for="" class="form-label"> Image </label>
                    <input type="file" value="{{old('image')}}" name="image" class="form-control" >
                    <span class="text-danger"> @error('image') {{$message}} @enderror </span>
                  </div>
                    <div class="mb-3">
                      <label for="imm" class="form-label"> {{__('lang.logo')}} </label>
                      <input type="text" name="logo" value="{{old('logo')}}" class="form-control" id="number" aria-describedby="emailHelp">
                      <span class="text-danger"> @error('logo') {{$message}} @enderror </span>
                  </div>
                    <div class="mb-3">
                      <label for="app" class="form-label">{{__('lang.link')}}</label>
                      <input type="text" name="link" value="{{old('link')}}" class="form-control" id="app" aria-describedby="emailHelp">
                      <span class="text-danger"> @error('link') {{$message}} @enderror </span>
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