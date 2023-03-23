@extends('layouts.app')

@section('title', __('lang.modules'))

@section('content')

<div class="container-fluid">
          
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">

                  <div class="title">
                      <h4 class="card-title"> {{__('lang.modules')}} ( {{$modules->count()}} ) </h4>
                      <button type="button" class="create btn btn-primary" data-bs-toggle="modal" data-bs-target="#create"> 
                        <i class="icon-plus"></i> 
                        {{__('lang.createmodule')}}
                    </button>
                  </div>
                  
                  @if($modules->count() > 0) 

                  <div class="table-responsive">
                    
                    <h2 class="table-title"> {{__('lang.french')}} </h2> 
                    <table id="" class="table table-striped table-bordered display no-wrap"
                      style="width:100%">
                        <thead>
                            <tr>
                              <th>#</th>
                              <th> {{__('lang.title')}} </th>
                              <th> {{__('lang.para')}} </th>
                              <th> {{__('lang.button')}} </th>
                              <th> {{__('lang.color')}} </th>
                              <th> {{__('lang.image')}} </th>
                              <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($modules as $header)
                            <tr>
                              <td>{{$header['id']}}</td>
                              <td>
                                @if(strlen($header['title_Fr']) > 10)
                                    {{ Str::limit($header['title_Fr'], 10) }}
                                @else
                                    {{$header['title_Fr']}}
                                @endif  
                              </td>
                              <td>
                                @if(strlen($header['para_Fr']) > 10)
                                    {{ Str::limit($header['para_Fr'], 10) }}
                                @else
                                    {{$header['para_Fr']}}
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
                                @if(strlen($header['color']) > 10)
                                    {{ Str::limit($header['color'], 10) }}
                                @else
                                    {{$header['color']}}
                                @endif  
                              </td>
                              <td>
                                @if(strlen($header['image']) > 10)
                                    {{ Str::limit($header['image'], 10) }}
                                @else
                                    {{$header['image']}}
                                @endif  
                              </td>
                              <td>
                                <a href={{'/edit-module/'.$header['id']}}> <button class="edit"> <i class=" icon-pencil"></i> </button> </a>
      
                                <form action="{{url('/delete-module/'.$header['id'])}}" method="post">
                                    {{method_field('DELETE')}}
                                    {{csrf_field()}}
                                    <button id="delete" class='delete'><i class=" icon-trash" ></i></button> 
                                </form> 
                              </td>
                          </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <h2 class="table-title">{{__('lang.english')}}</h2>
                    <table id="" class="table table-striped table-bordered display no-wrap"
                      style="width:100%">
                        <thead>
                            <tr>
                              <th>#</th>
                              <th> {{__('lang.title')}} </th>
                              <th> {{__('lang.para')}} </th>
                              <th> {{__('lang.button')}} </th>
                              <th> {{__('lang.color')}} </th>
                              <th> {{__('lang.image')}} </th>
                              <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($modules as $header)
                            <tr>
                              <td>{{$header['id']}}</td>
                              <td>
                                @if(strlen($header['title_An']) > 10)
                                    {{ Str::limit($header['title_An'], 10) }}
                                @else
                                    {{$header['title_An']}}
                                @endif  
                              </td>
                              <td>
                                @if(strlen($header['para_An']) > 10)
                                    {{ Str::limit($header['para_An'], 10) }}
                                @else
                                    {{$header['para_An']}}
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
                                @if(strlen($header['color']) > 10)
                                    {{ Str::limit($header['color'], 10) }}
                                @else
                                    {{$header['color']}}
                                @endif  
                              </td>
                              <td>
                                @if(strlen($header['image']) > 10)
                                    {{ Str::limit($header['image'], 10) }}
                                @else
                                    {{$header['image']}}
                                @endif  
                              </td>
                              <td>
                                <a href={{'/edit-module/'.$header['id']}}> <button class="edit"> <i class=" icon-pencil"></i> </button> </a>
      
                                <form action="{{url('/delete-module/'.$header['id'])}}" method="post">
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
                              <th> {{__('lang.title')}} </th>
                              <th> {{__('lang.para')}} </th>
                              <th> {{__('lang.button')}} </th>
                              <th> {{__('lang.color')}} </th>
                              <th> {{__('lang.image')}} </th>
                              <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($modules as $header)
                            <tr>
                              <td>{{$header['id']}}</td>
                              <td>
                                @if(strlen($header['title_Ar']) > 10)
                                    {{ Str::limit($header['title_Ar'], 10) }}
                                @else
                                    {{$header['title_Ar']}}
                                @endif  
                              </td>
                              <td>
                                @if(strlen($header['para_Ar']) > 10)
                                    {{ Str::limit($header['para_Ar'], 10) }}
                                @else
                                    {{$header['para_Ar']}}
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
                                @if(strlen($header['color']) > 10)
                                    {{ Str::limit($header['color'], 10) }}
                                @else
                                    {{$header['color']}}
                                @endif  
                              </td>
                              <td>
                                @if(strlen($header['image']) > 10)
                                    {{ Str::limit($header['image'], 10) }}
                                @else
                                    {{$header['image']}}
                                @endif  
                              </td>
                              <td>
                                <a href={{'/edit-module/'.$header['id']}}> <button class="edit"> <i class=" icon-pencil"></i> </button> </a>
      
                                <form action="{{url('/delete-module/'.$header['id'])}}" method="post">
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

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="title">
                  <h4 class="card-title"> {{__('lang.extraModules')}} </h4>

                  @if($modulesextra->count() == 0)
                  <button type="button" class="create btn btn-primary" data-bs-toggle="modal" data-bs-target="#createex"> 
                    <i class="icon-plus"></i> 
                    {{__('lang.createitem')}}
                  </button>
                  @endif
                </div>
                
                @if($modulesextra->count() > 0) 

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
                  @foreach($modulesextra as $aboutus)
                  <tbody>
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

                      <h4 class="title text-white bg-secondary rounded p-2 m-3"> {{__('lang.para')}} 1 </h4>
                      
                      <div class="row p-3 border-bottom">
                        <div class="col">
                          {{__('lang.para')}} {{__('lang.fr')}}
                        </div>
                        <div class="col">
                          {{$aboutus->para1_Fr}}
                        </div>
                      </div>
                      <div class="row p-3 border-bottom">
                        <div class="col">
                          {{__('lang.para')}} {{__('lang.an')}}
                        </div>
                        <div class="col">
                          {{$aboutus->para1_An}}
                        </div>
                      </div>
                      <div class="row p-3 border-bottom">
                        <div class="col">
                           {{__('lang.para')}} {{__('lang.ar')}}
                        </div>
                        <div class="col">
                          {{$aboutus->para1_Ar}}
                        </div>
                      </div>

                      <h4 class="title text-white bg-secondary rounded p-2 m-3"> {{__('lang.para')}} 2 </h4>

                      <div class="row p-3 border-bottom">
                        <div class="col">
                          {{__('lang.para')}} {{__('lang.fr')}}
                        </div>
                        <div class="col">
                          {{$aboutus->para2_Fr}}
                        </div>
                      </div>
                      <div class="row p-3 border-bottom">
                        <div class="col">
                          {{__('lang.para')}} {{__('lang.an')}}
                        </div>
                        <div class="col">
                          {{$aboutus->para2_An}}
                        </div>
                      </div>
                      <div class="row p-3 border-bottom">
                        <div class="col">
                           {{__('lang.para')}} {{__('lang.ar')}}
                        </div>
                        <div class="col">
                          {{$aboutus->para2_Ar}}
                        </div>
                      </div>
                  </tbody>
                  <div class="text-white aboutus ">
                    <div class="row p-2">
                      <div class="col">
                        <a href={{'/edit-moduleextra/'.$aboutus['id']}}> <button class="edit"> <i class=" icon-pencil"></i> {{__('lang.edit')}} </button> </a>
                      </div>
                      <div class="col">
                        <form action="{{url('/delete-modulesextra/'.$aboutus['id'])}}" method="post">
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
          <h5 class="modal-title" id="exampleModalLabel"> {{__('lang.createmodule')}} </h5>
        </div>
        <div class="modal-body">
            <form method="POST" action="create-module" enctype="multipart/form-data">
                @csrf

                <h2>{{__('lang.french')}}</h2>

                <div class="mb-3">
                    <label for="name" class="form-label">{{__('lang.title')}}</label>
                    <input type="text" name="title_Fr" value="{{old('title_Fr')}}" class="form-control" id="name" aria-describedby="emailHelp">
                    <span class="text-danger"> @error('title_Fr') {{$message}} @enderror </span>
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
                    <label for="name" class="form-label">{{__('lang.title')}}</label>
                    <input type="text" name="title_An" value="{{old('title_An')}}" class="form-control" id="name" aria-describedby="emailHelp">
                    <span class="text-danger"> @error('title_An') {{$message}} @enderror </span>
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
                    <label for="name" class="form-label">{{__('lang.title')}}</label>
                    <input type="text" name="title_Ar" value="{{old('title_Ar')}}" class="form-control" id="name" aria-describedby="emailHelp">
                    <span class="text-danger"> @error('title_Ar') {{$message}} @enderror </span>
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

                <div class="mb-3">
                  <label for="color" class="form-label"> {{__('lang.color')}} </label>
                  <input type="text" name="color" value="{{old('color')}}" class="form-control" id="number" aria-describedby="emailHelp">
                  <span class="text-danger"> @error('color') {{$message}} @enderror </span>
                </div>

                <div class="form-group mb-3">
                  <label for="" class="form-label">  {{__('lang.image')}}  </label>
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

  <div class="modal fade" id="createex" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> {{__('lang.extraModules')}} </h5>
        </div>
        <div class="modal-body">
            <form method="POST" action="create-modulesextra">
                @csrf

                <h2>{{__('lang.french')}}</h2>

                <div class="mb-3">
                    <label for="name" class="form-label">{{__('lang.title')}}</label>
                    <input type="text" name="title_Fr" value="{{old('title_Fr')}}" class="form-control" id="name" aria-describedby="emailHelp">
                    <span class="text-danger"> @error('title_Fr') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label"> {{__('lang.para')}} 1 </label>
                    <input type="text" name="para1_Fr" value="{{old('para1_Fr')}}" class="form-control" id="para1_Fr" aria-describedby="emailHelp">
                    <span class="text-danger"> @error('para1_Fr') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label"> {{__('lang.para')}} 2 </label>
                  <input type="text" name="para2_Fr" value="{{old('para2_Fr')}}" class="form-control" id="para2_Fr" aria-describedby="emailHelp">
                  <span class="text-danger"> @error('para2_Fr') {{$message}} @enderror </span>
              </div>
                
                  
                <h2>{{__('lang.english')}}</h2>

                <div class="mb-3">
                    <label for="name" class="form-label">{{__('lang.title')}}</label>
                    <input type="text" name="title_An" value="{{old('title_An')}}" class="form-control" id="name" aria-describedby="emailHelp">
                    <span class="text-danger"> @error('title_An') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label"> {{__('lang.para')}} 1 </label>
                  <input type="text" name="para1_An" value="{{old('para1_An')}}" class="form-control" id="para1_An" aria-describedby="emailHelp">
                  <span class="text-danger"> @error('para1_An') {{$message}} @enderror </span>
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label"> {{__('lang.para')}} 2 </label>
                <input type="text" name="para2_An" value="{{old('para2_An')}}" class="form-control" id="para2_An" aria-describedby="emailHelp">
                <span class="text-danger"> @error('para2_An') {{$message}} @enderror </span>
            </div>
                
                <h2>{{__('lang.arabic')}}</h2>

                <div class="mb-3">
                    <label for="name" class="form-label">{{__('lang.title')}}</label>
                    <input type="text" name="title_Ar" value="{{old('title_Ar')}}" class="form-control" id="name" aria-describedby="emailHelp">
                    <span class="text-danger"> @error('title_Ar') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label"> {{__('lang.para')}} 1  </label>
                  <input type="text" name="para1_Ar" value="{{old('para1_Ar')}}" class="form-control" id="para1_Ar" aria-describedby="emailHelp">
                  <span class="text-danger"> @error('para1_Ar') {{$message}} @enderror </span>
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label"> {{__('lang.para')}} 2 </label>
                <input type="text" name="para2_Ar" value="{{old('para2_Ar')}}" class="form-control" id="para2_Ar" aria-describedby="emailHelp">
                <span class="text-danger"> @error('para2_Ar') {{$message}} @enderror </span>
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