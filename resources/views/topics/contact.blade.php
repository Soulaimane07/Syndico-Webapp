@extends('layouts.app')

@section('title', __('lang.contact') )

@section('content')

<div class="container-fluid">
          
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">

                  <div class="title">
                    <h4 class="card-title"> {{__('lang.contact')}} </h4>

                    @if($contacts->count() == 0)
                    <button type="button" class="create btn btn-primary" data-bs-toggle="modal" data-bs-target="#create"> 
                      <i class="icon-plus"></i> 
                      {{__('lang.createitem')}}
                    </button>
                    @endif
                  </div>
                  
                  @if($contacts->count() > 0) 

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
                    @foreach($contacts as $aboutus)
                    <tbody>
                        <div class="row p-3 border-bottom ">
                          <div class="col">
                            {{__('lang.image')}}
                          </div>
                          <div class="col">
                            {{$aboutus->image}}
                          </div>
                        </div>

                        <h4 class="title text-white bg-secondary rounded p-2 m-3"> {{__('lang.title')}} </h4>

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

                        <h4 class="title text-white bg-secondary rounded p-2 m-3"> {{__('lang.label')}} 1 </h4>
                        
                        <div class="row p-3 border-bottom">
                          <div class="col">
                            {{__('lang.label')}} {{__('lang.fr')}}
                          </div>
                          <div class="col">
                            {{$aboutus->label1_Fr}}
                          </div>
                        </div>
                        <div class="row p-3 border-bottom">
                          <div class="col">
                            {{__('lang.label')}} {{__('lang.an')}}
                          </div>
                          <div class="col">
                            {{$aboutus->label1_An}}
                          </div>
                        </div>
                        <div class="row p-3 border-bottom">
                          <div class="col">
                             {{__('lang.label')}} {{__('lang.ar')}}
                          </div>
                          <div class="col">
                            {{$aboutus->label1_Ar}}
                          </div>
                        </div>

                        <h4 class="title text-white bg-secondary rounded p-2 m-3"> {{__('lang.label')}} 2 </h4>

                        <div class="row p-3 border-bottom">
                          <div class="col">
                            {{__('lang.label')}} {{__('lang.fr')}}
                          </div>
                          <div class="col">
                            {{$aboutus->label2_Fr}}
                          </div>
                        </div>
                        <div class="row p-3 border-bottom">
                          <div class="col">
                            {{__('lang.label')}} {{__('lang.an')}}
                          </div>
                          <div class="col">
                            {{$aboutus->label2_An}}
                          </div>
                        </div>
                        <div class="row p-3 border-bottom">
                          <div class="col">
                             {{__('lang.label')}} {{__('lang.ar')}}
                          </div>
                          <div class="col">
                            {{$aboutus->label2_Ar}}
                          </div>
                        </div>

                        <h4 class="title text-white bg-secondary rounded p-2 m-3"> {{__('lang.label')}} 3 </h4>

                        <div class="row p-3 border-bottom">
                          <div class="col">
                            {{__('lang.label')}} {{__('lang.fr')}}
                          </div>
                          <div class="col">
                            {{$aboutus->label3_Fr}}
                          </div>
                        </div>
                        <div class="row p-3 border-bottom">
                          <div class="col">
                            {{__('lang.label')}} {{__('lang.an')}}
                          </div>
                          <div class="col">
                            {{$aboutus->label3_An}}
                          </div>
                        </div>
                        <div class="row p-3 border-bottom">
                          <div class="col">
                             {{__('lang.label')}} {{__('lang.ar')}}
                          </div>
                          <div class="col">
                            {{$aboutus->label3_Ar}}
                          </div>
                        </div>

                        <h4 class="title text-white bg-secondary rounded p-2 m-3"> {{__('lang.label')}} 4 </h4>

                        <div class="row p-3 border-bottom">
                          <div class="col">
                            {{__('lang.label')}} {{__('lang.fr')}}
                          </div>
                          <div class="col">
                            {{$aboutus->label4_Fr}}
                          </div>
                        </div>
                        <div class="row p-3 border-bottom">
                          <div class="col">
                            {{__('lang.label')}} {{__('lang.an')}}
                          </div>
                          <div class="col">
                            {{$aboutus->label4_An}}
                          </div>
                        </div>
                        <div class="row p-3 border-bottom">
                          <div class="col">
                             {{__('lang.label')}} {{__('lang.ar')}}
                          </div>
                          <div class="col">
                            {{$aboutus->label4_Ar}}
                          </div>
                        </div>

                        <h4 class="title text-white bg-secondary rounded p-2 m-3"> {{__('lang.label')}} 5 </h4>

                        <div class="row p-3 border-bottom">
                          <div class="col">
                            {{__('lang.label')}} {{__('lang.fr')}}
                          </div>
                          <div class="col">
                            {{$aboutus->label5_Fr}}
                          </div>
                        </div>
                        <div class="row p-3 border-bottom">
                          <div class="col">
                            {{__('lang.label')}} {{__('lang.an')}}
                          </div>
                          <div class="col">
                            {{$aboutus->label5_An}}
                          </div>
                        </div>
                        <div class="row p-3 border-bottom">
                          <div class="col">
                             {{__('lang.label')}} {{__('lang.ar')}}
                          </div>
                          <div class="col">
                            {{$aboutus->label5_Ar}}
                          </div>
                        </div>

                        <h4 class="title text-white bg-secondary rounded p-2 m-3"> {{__('lang.button')}} </h4>

                        <div class="row p-3 border-bottom">
                          <div class="col">
                            {{__('lang.button')}} {{__('lang.fr')}}
                          </div>
                          <div class="col">
                            {{$aboutus->button_Fr}}
                          </div>
                        </div>
                        <div class="row p-3 border-bottom">
                          <div class="col">
                            {{__('lang.button')}} {{__('lang.an')}}
                          </div>
                          <div class="col">
                            {{$aboutus->button_An}}
                          </div>
                        </div>
                        <div class="row p-3 border-bottom">
                          <div class="col">
                             {{__('lang.button')}} {{__('lang.ar')}}
                          </div>
                          <div class="col">
                            {{$aboutus->button_Ar}}
                          </div>
                        </div>

                    </tbody>
                    <div class="text-white aboutus ">
                      <div class="row p-2">
                        <div class="col">
                          <a href={{'/edit-connect/'.$aboutus['id']}}> <button class="edit"> <i class=" icon-pencil"></i> {{__('lang.edit')}} </button> </a>
                        </div>
                        <div class="col">
                          <form action="{{url('/delete-connect/'.$aboutus['id'])}}" method="post">
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
          <h5 class="modal-title" id="exampleModalLabel"> {{__('lang.create')}} {{__('lang.contact')}} </h5>
        </div>
        <div class="modal-body">
            <form method="POST" action="create-contact" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-3">
                  <label for="" class="form-label"> Image </label>
                  <input type="file" value="{{old('image')}}" name="image" class="form-control" >
                  <span class="text-danger"> @error('image') {{$message}} @enderror </span>
                </div>

                <h4 class="title"> {{__('lang.title')}} </h4>
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
                
                <h4 class="title"> {{__('lang.label')}} 1</h4>
                <div class="mb-3">
                  <label for="name" class="form-label"> {{__('lang.label')}} {{__('lang.fr')}}</label>
                  <input type="text" name="label1_Fr" value="{{old('label1_Fr')}}" class="form-control" id="name" >
                  <span class="text-danger"> @error('label1_Fr') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label"> {{__('lang.label')}} {{__('lang.an')}}</label>
                  <input type="text" name="label1_An" value="{{old('label1_An')}}" class="form-control" id="name" >
                  <span class="text-danger"> @error('label1_An') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label"> {{__('lang.label')}} {{__('lang.ar')}}</label>
                  <input type="text" name="label1_Ar" value="{{old('label1_Ar')}}" class="form-control" id="name" >
                  <span class="text-danger"> @error('label1_Ar') {{$message}} @enderror </span>
                </div>

                <h4 class="title"> {{__('lang.label')}} 2</h4>
                <div class="mb-3">
                  <label for="name" class="form-label"> {{__('lang.label')}} {{__('lang.fr')}}</label>
                  <input type="text" name="label2_Fr" value="{{old('label2_Fr')}}" class="form-control" id="name" >
                  <span class="text-danger"> @error('label2_Fr') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label"> {{__('lang.label')}} {{__('lang.an')}}</label>
                  <input type="text" name="label2_An" value="{{old('label2_An')}}" class="form-control" id="name" >
                  <span class="text-danger"> @error('label2_An') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label"> {{__('lang.label')}} {{__('lang.ar')}}</label>
                  <input type="text" name="label2_Ar" value="{{old('label2_Ar')}}" class="form-control" id="name" >
                  <span class="text-danger"> @error('label2_Ar') {{$message}} @enderror </span>
                </div>

                <h4 class="title"> {{__('lang.label')}} 3</h4>
                <div class="mb-3">
                  <label for="name" class="form-label"> {{__('lang.label')}} {{__('lang.fr')}}</label>
                  <input type="text" name="label3_Fr" value="{{old('label3_Fr')}}" class="form-control" id="name" >
                  <span class="text-danger"> @error('label3_Fr') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label"> {{__('lang.label')}} {{__('lang.an')}}</label>
                  <input type="text" name="label3_An" value="{{old('label3_An')}}" class="form-control" id="name" >
                  <span class="text-danger"> @error('label3_An') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label"> {{__('lang.label')}} {{__('lang.ar')}}</label>
                  <input type="text" name="label3_Ar" value="{{old('label3_Ar')}}" class="form-control" id="name" >
                  <span class="text-danger"> @error('label3_Ar') {{$message}} @enderror </span>
                </div>

                <h4 class="title"> {{__('lang.label')}} 4</h4>
                <div class="mb-3">
                  <label for="name" class="form-label"> {{__('lang.label')}} {{__('lang.fr')}}</label>
                  <input type="text" name="label4_Fr" value="{{old('label4_Fr')}}" class="form-control" id="name" >
                  <span class="text-danger"> @error('label4_Fr') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label"> {{__('lang.label')}} {{__('lang.an')}}</label>
                  <input type="text" name="label4_An" value="{{old('label4_An')}}" class="form-control" id="name" >
                  <span class="text-danger"> @error('label4_An') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label"> {{__('lang.label')}} {{__('lang.ar')}}</label>
                  <input type="text" name="label4_Ar" value="{{old('label4_Ar')}}" class="form-control" id="name" >
                  <span class="text-danger"> @error('label4_Ar') {{$message}} @enderror </span>
                </div>

                <h4 class="title"> {{__('lang.label')}} 5</h4>
                <div class="mb-3">
                  <label for="name" class="form-label"> {{__('lang.label')}} {{__('lang.fr')}}</label>
                  <input type="text" name="label5_Fr" value="{{old('label5_Fr')}}" class="form-control" id="name" >
                  <span class="text-danger"> @error('label5_Fr') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label"> {{__('lang.label')}} {{__('lang.an')}}</label>
                  <input type="text" name="label5_An" value="{{old('label5_An')}}" class="form-control" id="name" >
                  <span class="text-danger"> @error('label5_An') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label"> {{__('lang.label')}} {{__('lang.ar')}}</label>
                  <input type="text" name="label5_Ar" value="{{old('label5_Ar')}}" class="form-control" id="name" >
                  <span class="text-danger"> @error('label5_Ar') {{$message}} @enderror </span>
                </div>

                <h4 class="title"> {{__('lang.button')}}</h4>
                <div class="mb-3">
                  <label for="name" class="form-label"> {{__('lang.button')}} {{__('lang.fr')}}</label>
                  <input type="text" name="button_Fr" value="{{old('button_Fr')}}" class="form-control" id="name" >
                  <span class="text-danger"> @error('button_Fr') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label"> {{__('lang.button')}} {{__('lang.an')}}</label>
                  <input type="text" name="button_An" value="{{old('button_An')}}" class="form-control" id="name" >
                  <span class="text-danger"> @error('button_An') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label"> {{__('lang.button')}} {{__('lang.ar')}}</label>
                  <input type="text" name="button_Ar" value="{{old('button_Ar')}}" class="form-control" id="name" >
                  <span class="text-danger"> @error('button_Ar') {{$message}} @enderror </span>
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