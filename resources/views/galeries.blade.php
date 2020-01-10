@extends('layout')

@section('content')

<div class="row">
 
 <div class="col-sm-12 col-md-8 col-lg-8">
                
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Gallery</h4>
                                
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if(session()->has('error'))
                                            <div class="alert alert-danger"> {{session()->get('error')}} </div> 
                                    @endif
                                    @foreach($galleries as $gallery)
                                        <tr>
                                        
                                            <th scope="row">{{ $gallery->id }}</th>
                                            <td>{{ $gallery->name }}</td>
                                            <td>
                                            <div class="text-left">
                                        
                                            <a href="{{ route('pictures.index', $gallery->id) }}" class="btn btn-info">Edit</a>
                                            
                                            <form action="{{ route('gallery.delete', $gallery->id) }}" method="POST" style="display: inline" class="delete-gallery">
                                            @csrf
                                            <input type="hidden" name="_method" value="delete">
                                            <button type="button" value="Delete" class="btn btn-dark btn-delete-gallery">Delete</button>
                                            </form>

                                            </div>
                                           
                                            </td> 
                                           
                                           
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
    </div> 
    
<div class="col-sm-12 col-md-4 col-lg-4">
@if(session()->has('success'))
                <div class="alert alert-success"> {{session()->get('success')}} </div> 
@endif
                        <div class="card">
                        @include('partials.errors')
                            <div class="card-body">
                              
                                <h4 class="card-title">Create gallery</h4>
                                <h6 class="card-subtitle">
                                <form class="mt-3" _lpchecked="1" action="{{ route('gallery.store') }}" method="POST">
                                    {!! csrf_field() !!}
                                    <label class="form-control-label" for="inputSuccess1">Name</label>
                                    <input type="text" name="name" class="form-control is-valid" id="inputSuccess1">

                                   
                                        <div class="text-right" style="margin-top:20px">                                         
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </div>
                                   
                                </form>
                             
                              
                               
                            </div>
                        </div>
</div> 
                    
                                 

 </div>

@endsection