@extends('layout')

@section('content')
@include('partials.errors')
<h4 class="card-title" style="margin-bottom: 20px"><b> {{ $gallery->name }} </b></h4>
<div class="row">

<div class="col-sm-12 col-md-6">

                        <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">Edit gallery name</h4>
                                <h6 class="card-subtitle">
                               
                                <form class="mt-3" _lpchecked="1" action="{{ route('gallery.update', $gallery->id ) }}" method="POST">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="_method" value="PUT">
                                    <label class="form-control-label" for="inputSuccess1"></label>
                              
                                <input type="text" name="name" class="form-control is-valid" value="{{ $gallery->name }}" id="inputSuccess1">

                                   
                                        <div class="text-right" style="margin-top:20px">                                            
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </div>
                                   
                                </form>  
</div>
</div>
</div>

<div class="col-sm-12 col-md-6">
                        <div class="card">
                       
                            <div class="card-body">
                                <h4 class="card-title">Picture Upload</h4>
                                
                                <form action="{{ route('picture.store') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                    <fieldset class="form-group">
                                        <input type="file" name="url" class="form-control-file" id="exampleInputFile">
                                    </fieldset>
                                    <input type="hidden" name="gallery_id" value="{{ $gallery->id }}">
                                    <div class="text-right" style="margin-top:32px" style="margin-bottom:0px">                                         
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                    </div>
                                </form>                             
                            </div>
                        </div>
</div>
<div class="col-12">

           @foreach($pictures as $picture)
                                <div class="card" style="display:inline-block; max-width:19%">
                                    <div class="card-body">
                                 
                                        <ul class="list-unstyled">
                                           
                                            <li class="media">
                                                <img class="mr-3" src="{{'/storage/' .$picture->url }}" style="max-width: 100%" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-1">{{ $picture->name }}</h5> 
                                                   
                                                </div>                                  
                                            </li>                                                                          
                                        </ul>

                                        <a href="{{ route('picture.delete', $picture->id) }}" class="btn btn-dark delete" style="width:100%; display:block">Delete</a>
                                    </div>
                                </div>
                        @endforeach      
                            </div>
                            <div class="pagination-container mb-3 text-center">
                              {!! $pictures->render() !!}
                            </div>      
</div>
@endsection