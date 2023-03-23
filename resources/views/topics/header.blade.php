@extends('layouts.app')

@section('title', __('lang.header') )

@section('content')

<div class="container-fluid">
          
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">

                  <div class="title">
                      <h4 class="card-title"> {{__('lang.headeritems')}}  ( {{$header->count()}} )</h4>
                      <button type="button" class="create btn btn-primary" data-bs-toggle="modal" data-bs-target="#create"> 
                        <i class="icon-plus"></i> 
                        {{__('lang.createitem')}}
                    </button>
                  </div>
                  
                  @if($header->count() > 0) 

                  <div class="table-responsive">
                    
                      <h2 class="table-title">{{(__('lang.french'))}}</h2> 
                      <table id="" class="table table-striped table-bordered display no-wrap"
                        style="width:100%">
                          <thead>
                              <tr>
                                <th>#</th>
                                <th>{{__('lang.title')}} 1</th>
                                <th>{{__('lang.title')}} 2</th>
                                <th> {{__('lang.para')}} </th>
                                <th>{{__('lang.image')}}</th>
                                <th> {{__('lang.button')}} </th>
                                <th></th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($header as $header)
                              <tr>
                                <td>{{$header['id']}}</td>
                                <td>
                                  @if(strlen($header['title1_Fr']) > 10)
                                      {{ Str::limit($header['title1_Fr'], 10) }}
                                  @else
                                      {{$header['title1_Fr']}}
                                  @endif  
                                </td>
                                <td>
                              
                                  @if(strlen($header['title2_Fr']) > 10)
                                      {{ Str::limit($header['title2_Fr'], 10) }}
                                  @else
                                      {{$header['title2_Fr']}}
                                  @endif  
                                  
                                  </td>
                                <td>
                                  @if(strlen($header['para_Fr']) > 10)
                                      {{ Str::limit($header['para_Fr'], 10) }}
                                  @else
                                      {{$header['para_Fr']}}
                                  @endif  </td>
                                <td>
                                  @if(strlen($header['image']) > 10)
                                      {{ Str::limit($header['image'], 10) }}
                                  @else
                                      {{$header['image']}}
                                  @endif  
                                </td>
                                <td>
                              
                                  @if(strlen($header['button_Fr']) > 10)
                                      {{ Str::limit($header['button_Fr'], 10) }}
                                  @else
                                      {{$header['button_Fr']}}
                                  @endif  
                              </td>
                                <td>
                                  <a href={{'/edit-header/'.$header['id']}}> <button class="edit"> <i class=" icon-pencil"></i> </button> </a>
        
                                  <form action="{{url('/delete-header-item/'.$header['id'])}}" method="post">
                                      {{method_field('DELETE')}}
                                      {{csrf_field()}}
                                      <button id="delete" class='delete'><i class=" icon-trash" ></i></button> 
                                  </form> 
                                </td>
                            </tr>
                              @endforeach
                          </tbody>
                      </table>

                      <h2 class="table-title"> {{__('lang.english')}} </h2>
                      <table id="" class="table table-striped table-bordered display no-wrap"
                          style="width:100%">
                          <thead>
                              <tr>
                                <th>#</th>
                                <th>{{__('lang.title')}} 1</th>
                                <th>{{__('lang.title')}} 2</th>
                                <th> {{__('lang.para')}} </th>
                                <th>{{__('lang.image')}}</th>
                                <th> {{__('lang.button')}} </th>
                                <th></th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($headers as $header)
                              <tr>
                                <td>{{$header['id']}}</td>
                                <td>
                                  @if(strlen($header['title1_An']) > 10)
                                      {{ Str::limit($header['title1_An'], 10) }}
                                  @else
                                      {{$header['title1_An']}}
                                  @endif  
                                </td>
                                <td>
                              
                                  @if(strlen($header['title2_An']) > 10)
                                      {{ Str::limit($header['title2_An'], 10) }}
                                  @else
                                      {{$header['title2_An']}}
                                  @endif  
                                  
                                  </td>
                                <td>
                                  @if(strlen($header['para_An']) > 10)
                                      {{ Str::limit($header['para_An'], 10) }}
                                  @else
                                      {{$header['para_An']}}
                                  @endif  </td>
                                <td>
                                  @if(strlen($header['image']) > 10)
                                      {{ Str::limit($header['image'], 10) }}
                                  @else
                                      {{$header['image']}}
                                  @endif  
                                </td>
                                <td>
                              
                                  @if(strlen($header['button_An']) > 10)
                                      {{ Str::limit($header['button_An'], 10) }}
                                  @else
                                      {{$header['button_An']}}
                                  @endif  
                              </td>
                                <td>
                                  <a href={{'/edit-header/'.$header['id']}}> <button class="edit"> <i class=" icon-pencil"></i> </button> </a>
        
                                  <form action="{{url('/delete-header-item/'.$header['id'])}}" method="post">
                                      {{method_field('DELETE')}}
                                      {{csrf_field()}}
                                      <button id="delete" class='delete'><i class=" icon-trash" ></i></button> 
                                  </form> 
                                </td>
                            </tr>
                              @endforeach
                          </tbody>
                      </table>

                      <h2 class="table-title">{{__('lang.arabic')}}</h2>
                      <table id="" class="table table-striped table-bordered display no-wrap"
                          style="width:100%">
                          <thead>
                              <tr>
                                <th>#</th>
                                <th>{{__('lang.title')}} 1</th>
                                <th>{{__('lang.title')}} 2</th>
                                <th> {{__('lang.para')}} </th>
                                <th>{{__('lang.image')}}</th>
                                <th> {{__('lang.button')}} </th>
                                <th></th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($headerss as $header)
                              <tr>
                                <td>{{$header['id']}}</td>
                                <td>
                                  @if(strlen($header['title1_Ar']) > 10)
                                      {{ Str::limit($header['title1_Ar'], 10) }}
                                  @else
                                      {{$header['title1_Ar']}}
                                  @endif  
                                </td>
                                <td>
                              
                                  @if(strlen($header['title2_Ar']) > 10)
                                      {{ Str::limit($header['title2_Ar'], 10) }}
                                  @else
                                      {{$header['title2_Ar']}}
                                  @endif  
                                  
                                  </td>
                                <td>
                                  @if(strlen($header['para_Ar']) > 10)
                                      {{ Str::limit($header['para_Ar'], 10) }}
                                  @else
                                      {{$header['para_Ar']}}
                                  @endif  </td>
                                <td>
                                  @if(strlen($header['image']) > 10)
                                      {{ Str::limit($header['image'], 10) }}
                                  @else
                                      {{$header['image']}}
                                  @endif  
                                </td>
                                <td>
                              
                                  @if(strlen($header['button_Ar']) > 10)
                                      {{ Str::limit($header['button_Ar'], 10) }}
                                  @else
                                      {{$header['button_Ar']}}
                                  @endif  
                              </td>
                                <td>
                                  <a href={{'/edit-header/'.$header['id']}}> <button class="edit"> <i class=" icon-pencil"></i> </button> </a>
        
                                  <form action="{{url('/delete-header-item/'.$header['id'])}}" method="post">
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
          <h5 class="modal-title" id="exampleModalLabel"> {{__('lang.createheaderitem')}} </h5>
        </div>
        <div class="modal-body">
            <form method="POST" action="create-header-bloc" enctype="multipart/form-data">
                @csrf

                <h2>{{__('lang.french')}}</h2>

                <div class="mb-3">
                    <label for="name" class="form-label">{{__('lang.title')}} 1</label>
                    <input type="text" name="title1_Fr" value="{{old('title1_Fr')}}" class="form-control" id="name" aria-describedby="emailHelp">
                    <span class="text-danger"> @error('title1_Fr') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">{{__('lang.title')}} 2</label>
                  <input type="text" name="title2_Fr" value="{{old('title2_Fr')}}" class="form-control" id="title2_Fr" aria-describedby="emailHelp">
                  <span class="text-danger"> @error('title2_Fr') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label"> {{__('lang.para')}} </label>
                    <input type="text" name="para_Fr" value="{{old('para_Fr')}}" class="form-control" id="para_Fr" aria-describedby="emailHelp">
                    <span class="text-danger"> @error('para_Fr') {{$message}} @enderror </span>
                </div>
                  <div class="mb-3">
                    <label for="imm" class="form-label"> {{__('lang.button')}} </label>
                    <input type="text" name="button_Fr" value="{{old('button_Fr')}}" class="form-control" id="number" aria-describedby="emailHelp">
                    <span class="text-danger"> @error('button_Fr') {{$message}} @enderror </span>
                </div>
                  
                <h2>{{__('lang.english')}}</h2>

                <div class="mb-3">
                    <label for="name" class="form-label">{{__('lang.title')}} 1</label>
                    <input type="text" name="title1_An" value="{{old('title1_An')}}" class="form-control" id="name" aria-describedby="emailHelp">
                    <span class="text-danger"> @error('title1_An') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">{{__('lang.title')}} 2</label>
                  <input type="text" name="title2_An" value="{{old('title2_An')}}" class="form-control" id="title2_An" aria-describedby="emailHelp">
                  <span class="text-danger"> @error('title2_An') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label"> {{__('lang.para')}} </label>
                    <input type="text" name="para_An" value="{{old('para_An')}}" class="form-control" id="para_An" aria-describedby="emailHelp">
                    <span class="text-danger"> @error('para_An') {{$message}} @enderror </span>
                </div>
                  <div class="mb-3">
                    <label for="imm" class="form-label"> {{__('lang.button')}} </label>
                    <input type="text" name="button_An" value="{{old('button_An')}}" class="form-control" id="number" aria-describedby="emailHelp">
                    <span class="text-danger"> @error('button_An') {{$message}} @enderror </span>
                </div>
                
                <h2>{{__('lang.arabic')}}</h2>

                <div class="mb-3">
                    <label for="name" class="form-label">{{__('lang.title')}} 1</label>
                    <input type="text" name="title1_Ar" value="{{old('title1_Ar')}}" class="form-control" id="name" aria-describedby="emailHelp">
                    <span class="text-danger"> @error('title1_Ar') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">{{__('lang.title')}} 2</label>
                  <input type="text" name="title2_Ar" value="{{old('title2_Ar')}}" class="form-control" id="title2_Ar" aria-describedby="emailHelp">
                  <span class="text-danger"> @error('title2_Ar') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label"> {{__('lang.para')}} </label>
                    <input type="text" name="para_Ar" value="{{old('para_Ar')}}" class="form-control" id="para_Ar" aria-describedby="emailHelp">
                    <span class="text-danger"> @error('para_Ar') {{$message}} @enderror </span>
                </div>
                  <div class="mb-3">
                    <label for="imm" class="form-label"> {{__('lang.button')}} </label>
                    <input type="text" name="button_Ar" value="{{old('button_Ar')}}" class="form-control" id="number" aria-describedby="emailHelp">
                    <span class="text-danger"> @error('button_Ar') {{$message}} @enderror </span>
                </div>

                <hr>

                <div class="form-group mb-3">
                  <label for="" class="form-label"> Image </label>
                  <input type="file" value="{{old('image')}}" name="image" class="form-control" >
                  <span class="text-danger"> @error('image') {{$message}} @enderror </span>
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
