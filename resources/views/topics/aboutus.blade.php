@extends('layouts.app')

@section('title', __('lang.aboutus') )

@section('content')

<div class="container-fluid">
          
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">

                  <div class="title">
                      <h4 class="card-title"> {{__('lang.aboutus')}} </h4>

                      @if($aboutus->count()==0)
                      <button type="button" class="create btn btn-primary" data-bs-toggle="modal" data-bs-target="#create"> 
                        <i class="icon-plus"></i> 
                        {{__('lang.createitem')}}
                    </button>
                    @endif

                  </div>
                  
                  @if($aboutus->count() > 0) 

                  <div>
                    <div class="text-white aboutus bg-primary rounded">
                      <div class="row p-2 px-4">
                        <div class="col">
                          Key
                        </div>
                        <div class="col">
                          Value
                        </div>
                      </div>
                    </div>
                    @foreach($aboutus as $aboutus)
                    <tbody>
                        <div class="row p-3 border-bottom">
                          <div class="col">
                            {{__('lang.title')}} {{__('lang.fr')}}
                          </div>
                          <div class="col">
                            {{ $aboutus->title_Fr }}
                          </div>
                        </div>
                        <div class="row p-3 border-bottom">
                          <div class="col">
                            {{__('lang.title')}} {{__('lang.an')}}
                          </div>
                          <div class="col">
                            {{$aboutus->title_An}}
                          </div>
                        </div>
                        <div class="row p-3 border-bottom">
                          <div class="col">
                            {{__('lang.title')}} {{__('lang.ar')}}
                          </div>
                          <div class="col">
                            {{$aboutus->title_Ar}}
                          </div>
                        </div>
                        <div class="row p-3 border-bottom">
                          <div class="col">
                            {{__('lang.para')}} {{__('lang.fr')}}
                          </div>
                          <div class="col">
                            {{$aboutus->para_Fr}}
                          </div>
                        </div>
                        <div class="row p-3 border-bottom">
                          <div class="col">
                            {{__('lang.para')}} {{__('lang.an')}}
                          </div>
                          <div class="col">
                            {{$aboutus->para_An}}
                          </div>
                        </div>
                        <div class="row p-3 border-bottom">
                          <div class="col">
                            {{__('lang.para')}} {{__('lang.ar')}}
                          </div>
                          <div class="col">
                            {{$aboutus->para_Ar}}
                          </div>
                        </div>
                        <div class="row p-3 border-bottom">
                          <div class="col">
                            {{__('lang.image')}}
                          </div>
                          <div class="col">
                            {{$aboutus->image}}
                          </div>
                        </div>
                    </tbody>
                    <div class="text-white aboutus ">
                      <div class="row p-2">
                        <div class="col">
                          <a href={{'/edit-aboutus/'.$aboutus['id']}}> <button class="edit"> <i class=" icon-pencil"></i> {{__('lang.edit')}} </button> </a>
                        </div>
                        <div class="col">
                          <form action="{{url('/delete-aboutus/'.$aboutus['id'])}}" method="post">
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                            <button id="delete" class='delete'><i class=" icon-trash" ></i> {{__('lang.delete')}} </button> 
                          </form> 
                        </div>
                      </div>
                    </div>
                    @endforeach
                    
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
          <h5 class="modal-title" id="exampleModalLabel"> {{__('lang.create')}} {{__('lang.aboutus')}} </h5>
        </div>
        <div class="modal-body">
            <form method="POST" action="create-aboutus-item" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label"> {{__('lang.title')}} {{__('lang.fr')}}</label>
                  <input type="text" name="title_Fr" value="{{old('title_Fr')}}" class="form-control" id="name" >
                  <span class="text-danger"> @error('title_Fr') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label"> {{__('lang.title')}} {{__('lang.an')}}</label>
                  <input type="text" name="title_An" value="{{old('title_An')}}" class="form-control" id="name" >
                  <span class="text-danger"> @error('title_An') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label"> {{__('lang.title')}} {{__('lang.ar')}}</label>
                  <input type="text" name="title_Ar" value="{{old('title_Ar')}}" class="form-control" id="name" >
                  <span class="text-danger"> @error('title_Ar') {{$message}} @enderror </span>
                </div>
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
                <div class="form-group mb-3">
                  <label for="" class="form-label"> Image </label>
                  <input type="file" value="{{old('image')}}" name="image" class="form-control" >
                  <span class="text-danger"> @error('image') {{$message}} @enderror </span>
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