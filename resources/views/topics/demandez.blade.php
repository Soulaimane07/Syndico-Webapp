@extends('layouts.app')

@section('title', __('lang.demandez') )

@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
  
                    <div class="title">
                      <h4 class="card-title"> {{__('lang.demandez')}} </h4>
  
                      @if($demandes->count() == 0)
                      <button type="button" class="create btn btn-primary" data-bs-toggle="modal" data-bs-target="#create"> 
                        <i class="icon-plus"></i> 
                        {{__('lang.createitem')}}
                      </button>
                      @endif
                    </div>
                    
                    @if($demandes->count() > 0) 
  
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
                      
                      @foreach($demandes as $demande)
                      <tbody>
  
                          <h4 class="title text-white bg-secondary rounded p-2 m-3"> {{__('lang.title')}} </h4>
  
                          <div class="row p-3 border-bottom">
                            <div class="col">
                              {{__('lang.title')}} {{__('lang.fr')}}
                            </div>
                            <div class="col">
                              {{ $demande->title_Fr }}
                            </div>
                          </div>
                          <div class="row p-3 border-bottom">
                            <div class="col">
                              {{__('lang.title')}} {{__('lang.an')}}
                            </div>
                            <div class="col">
                              {{$demande->title_An}}
                            </div>
                          </div>
                          <div class="row p-3 border-bottom">
                            <div class="col">
                              {{__('lang.title')}} {{__('lang.ar')}}
                            </div>
                            <div class="col">
                              {{$demande->title_Ar}}
                            </div>
                          </div>
  
                          <h4 class="title text-white bg-secondary rounded p-2 m-3"> {{__('lang.label')}} 1 </h4>
                          
                          <div class="row p-3 border-bottom">
                            <div class="col">
                              {{__('lang.label')}} {{__('lang.fr')}}
                            </div>
                            <div class="col">
                              {{$demande->label1_Fr}}
                            </div>
                          </div>
                          <div class="row p-3 border-bottom">
                            <div class="col">
                              {{__('lang.label')}} {{__('lang.an')}}
                            </div>
                            <div class="col">
                              {{$demande->label1_An}}
                            </div>
                          </div>
                          <div class="row p-3 border-bottom">
                            <div class="col">
                               {{__('lang.label')}} {{__('lang.ar')}}
                            </div>
                            <div class="col">
                              {{$demande->label1_Ar}}
                            </div>
                          </div>
  
                          <h4 class="title text-white bg-secondary rounded p-2 m-3"> {{__('lang.label')}} 2 </h4>
  
                          <div class="row p-3 border-bottom">
                            <div class="col">
                              {{__('lang.label')}} {{__('lang.fr')}}
                            </div>
                            <div class="col">
                              {{$demande->label2_Fr}}
                            </div>
                          </div>
                          <div class="row p-3 border-bottom">
                            <div class="col">
                              {{__('lang.label')}} {{__('lang.an')}}
                            </div>
                            <div class="col">
                              {{$demande->label2_An}}
                            </div>
                          </div>
                          <div class="row p-3 border-bottom">
                            <div class="col">
                               {{__('lang.label')}} {{__('lang.ar')}}
                            </div>
                            <div class="col">
                              {{$demande->label2_Ar}}
                            </div>
                          </div>
  
                          <h4 class="title text-white bg-secondary rounded p-2 m-3"> {{__('lang.label')}} 3 </h4>
  
                          <div class="row p-3 border-bottom">
                            <div class="col">
                              {{__('lang.label')}} {{__('lang.fr')}}
                            </div>
                            <div class="col">
                              {{$demande->label3_Fr}}
                            </div>
                          </div>
                          <div class="row p-3 border-bottom">
                            <div class="col">
                              {{__('lang.label')}} {{__('lang.an')}}
                            </div>
                            <div class="col">
                              {{$demande->label3_An}}
                            </div>
                          </div>
                          <div class="row p-3 border-bottom">
                            <div class="col">
                               {{__('lang.label')}} {{__('lang.ar')}}
                            </div>
                            <div class="col">
                              {{$demande->label3_Ar}}
                            </div>
                          </div>
  
                          <h4 class="title text-white bg-secondary rounded p-2 m-3"> {{__('lang.label')}} 4 </h4>
  
                          <div class="row p-3 border-bottom">
                            <div class="col">
                              {{__('lang.label')}} {{__('lang.fr')}}
                            </div>
                            <div class="col">
                              {{$demande->label4_Fr}}
                            </div>
                          </div>
                          <div class="row p-3 border-bottom">
                            <div class="col">
                              {{__('lang.label')}} {{__('lang.an')}}
                            </div>
                            <div class="col">
                              {{$demande->label4_An}}
                            </div>
                          </div>
                          <div class="row p-3 border-bottom">
                            <div class="col">
                               {{__('lang.label')}} {{__('lang.ar')}}
                            </div>
                            <div class="col">
                              {{$demande->label4_Ar}}
                            </div>
                          </div>
  
                          <h4 class="title text-white bg-secondary rounded p-2 m-3"> {{__('lang.label')}} 5 </h4>
  
                          <div class="row p-3 border-bottom">
                            <div class="col">
                              {{__('lang.label')}} {{__('lang.fr')}}
                            </div>
                            <div class="col">
                              {{$demande->label5_Fr}}
                            </div>
                          </div>
                          <div class="row p-3 border-bottom">
                            <div class="col">
                              {{__('lang.label')}} {{__('lang.an')}}
                            </div>
                            <div class="col">
                              {{$demande->label5_An}}
                            </div>
                          </div>
                          <div class="row p-3 border-bottom">
                            <div class="col">
                              {{__('lang.label')}} {{__('lang.ar')}}
                            </div>
                            <div class="col">
                              {{$demande->label5_Ar}}
                            </div>
                          </div>

                          <h4 class="title text-white bg-secondary rounded p-2 m-3"> {{__('lang.label')}} 6 </h4>

                          <div class="row p-3 border-bottom">
                            <div class="col">
                               {{__('lang.label')}} {{__('lang.fr')}}
                            </div>
                            <div class="col">
                              {{$demande->label6_Fr}}
                            </div>
                          </div>
                          <div class="row p-3 border-bottom">
                            <div class="col">
                              {{__('lang.label')}} {{__('lang.an')}}
                            </div>
                            <div class="col">
                              {{$demande->label6_An}}
                            </div>
                          </div>
                          <div class="row p-3 border-bottom">
                            <div class="col">
                               {{__('lang.label')}} {{__('lang.ar')}}
                            </div>
                            <div class="col">
                              {{$demande->label6_Ar}}
                            </div>
                          </div>
  
                          <h4 class="title text-white bg-secondary rounded p-2 m-3"> {{__('lang.button')}} 1 </h4>
  
                          <div class="row p-3 border-bottom">
                            <div class="col">
                              {{__('lang.button')}} {{__('lang.fr')}}
                            </div>
                            <div class="col">
                              {{$demande->button1_Fr}}
                            </div>
                          </div>
                          <div class="row p-3 border-bottom">
                            <div class="col">
                              {{__('lang.button')}} {{__('lang.an')}}
                            </div>
                            <div class="col">
                              {{$demande->button1_An}}
                            </div>
                          </div>
                          <div class="row p-3 border-bottom">
                            <div class="col">
                               {{__('lang.button')}} {{__('lang.ar')}}
                            </div>
                            <div class="col">
                              {{$demande->button1_Ar}}
                            </div>
                          </div>

                          <h4 class="title text-white bg-secondary rounded p-2 m-3"> {{__('lang.button')}} 2 </h4>
  
                          <div class="row p-3 border-bottom">
                            <div class="col">
                              {{__('lang.button')}} {{__('lang.fr')}}
                            </div>
                            <div class="col">
                              {{$demande->button2_Fr}}
                            </div>
                          </div>
                          <div class="row p-3 border-bottom">
                            <div class="col">
                              {{__('lang.button')}} {{__('lang.an')}}
                            </div>
                            <div class="col">
                              {{$demande->button2_An}}
                            </div>
                          </div>
                          <div class="row p-3 border-bottom">
                            <div class="col">
                               {{__('lang.button')}} {{__('lang.ar')}}
                            </div>
                            <div class="col">
                              {{$demande->button2_Ar}}
                            </div>
                          </div>
  
                      </tbody>
                      <div class="text-white demande ">
                        <div class="row p-2">
                          <div class="col">
                            <a href={{'/edit-demandez/'.$demande['id']}}> <button class="edit"> <i class=" icon-pencil"></i> {{__('lang.edit')}} </button> </a>
                          </div>
                          <div class="col">
                            <form action="{{url('/delete-demandez/'.$demande['id'])}}" method="post">
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
            <h5 class="modal-title" id="exampleModalLabel"> {{__('lang.createitem')}}</h5>
          </div>
          <div class="modal-body">
              <form method="POST" action="create-demandez">
                  @csrf
  
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

                  <h4 class="title"> {{__('lang.label')}} 6</h4>
                  <div class="mb-3">
                    <label for="name" class="form-label"> {{__('lang.label')}} {{__('lang.fr')}}</label>
                    <input type="text" name="label6_Fr" value="{{old('label6_Fr')}}" class="form-control" id="name" >
                    <span class="text-danger"> @error('label6_Fr') {{$message}} @enderror </span>
                  </div>
                  <div class="mb-3">
                    <label for="name" class="form-label"> {{__('lang.label')}} {{__('lang.an')}}</label>
                    <input type="text" name="label6_An" value="{{old('label6_An')}}" class="form-control" id="name" >
                    <span class="text-danger"> @error('label6_An') {{$message}} @enderror </span>
                  </div>
                  <div class="mb-3">
                    <label for="name" class="form-label"> {{__('lang.label')}} {{__('lang.ar')}}</label>
                    <input type="text" name="label6_Ar" value="{{old('label6_Ar')}}" class="form-control" id="name" >
                    <span class="text-danger"> @error('label6_Ar') {{$message}} @enderror </span>
                  </div>
  
                  <h4 class="title"> {{__('lang.button')}} 1</h4>
                  <div class="mb-3">
                    <label for="name" class="form-label"> {{__('lang.button')}} {{__('lang.fr')}}</label>
                    <input type="text" name="button1_Fr" value="{{old('button1_Fr')}}" class="form-control" id="name" >
                    <span class="text-danger"> @error('button1_Fr') {{$message}} @enderror </span>
                  </div>
                  <div class="mb-3">
                    <label for="name" class="form-label"> {{__('lang.button')}} {{__('lang.an')}}</label>
                    <input type="text" name="button1_An" value="{{old('button1_An')}}" class="form-control" id="name" >
                    <span class="text-danger"> @error('button1_An') {{$message}} @enderror </span>
                  </div>
                  <div class="mb-3">
                    <label for="name" class="form-label"> {{__('lang.button')}} {{__('lang.ar')}}</label>
                    <input type="text" name="button1_Ar" value="{{old('button1_Ar')}}" class="form-control" id="name" >
                    <span class="text-danger"> @error('button1_Ar') {{$message}} @enderror </span>
                  </div>

                  <h4 class="title"> {{__('lang.button')}} 2</h4>
                  <div class="mb-3">
                    <label for="name" class="form-label"> {{__('lang.button')}} {{__('lang.fr')}}</label>
                    <input type="text" name="button2_Fr" value="{{old('button2_Fr')}}" class="form-control" id="name" >
                    <span class="text-danger"> @error('button2_Fr') {{$message}} @enderror </span>
                  </div>
                  <div class="mb-3">
                    <label for="name" class="form-label"> {{__('lang.button')}} {{__('lang.an')}}</label>
                    <input type="text" name="button2_An" value="{{old('button2_An')}}" class="form-control" id="name" >
                    <span class="text-danger"> @error('button2_An') {{$message}} @enderror </span>
                  </div>
                  <div class="mb-3">
                    <label for="name" class="form-label"> {{__('lang.button')}} {{__('lang.ar')}}</label>
                    <input type="text" name="button2_Ar" value="{{old('button2_Ar')}}" class="form-control" id="name" >
                    <span class="text-danger"> @error('button2_Ar') {{$message}} @enderror </span>
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
