@extends('layout')

@section('content')


@if(session()->has('success'))
                 <div class="alert alert-success"> {{session()->get('success')}} </div> 
@endif
<div class="row">
  
                
                
<div class="col-sm-12 col-md-8 col-lg-8">
                                <h4 class="card-title">News</h4>
                               
                           
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Text</th>
                                            <th scope="col">Created at</th>
                                            <th scope="col">Updated at</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($news as $new)
                                        <tr>
                                           
                                            <th scope="row">{{ $new->id }}</th>
                                            <td>{{ Str::limit( $new->title, 40)  }}</td>
                                            <td>{{ Str::limit( $new->text, 220) }}</td>
                                            <td>{{ $new->created_at }}</td>
                                            <td>{{ $new->updated_at }}</td>
                                            <td>
                                            <div class="text-left">
                                        
                                        <a href="{{ route('news.edit', $new->id) }}" class="btn btn-info"  style="margin-bottom:6px ">Edit</a>
                                        
                                        <form action="{{ route('news.delete', $new->id) }}" method="POST" style="display: inline" class="delete">
                                            @csrf
                                            <input type="hidden" name="_method" value="delete">
                                            <button type="button" class="btn btn-dark btn-delete">Delete</button>
                                        </form>

                                        </div>
                                            </td>

                                       
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        
                  
                   
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card">
                        @include('partials.errors')
                            <div class="card-body">
                            @if(request()->is("news-edit*"))
                           
                            <div class="card">
                            <h4 class="card-title">Edit News</h4>
                                <h6 class="card-subtitle">
                               
                                <form class="mt-3" _lpchecked="1" action="{{ route('news.update', $new->id ) }}" method="POST">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="_method" value="PUT">
                                    <label class="form-control-label" for="inputSuccess1">Title</label>                            
                                    <input type="text" name="title" class="form-control is-valid" value="{{ $new->title }}" id="inputSuccess1">

                                    <label class="form-control-label" style="margin-top: 15px" for="inputSuccess2">Text</label>                            
                                    <textarea name="text" class="form-control is-valid"  id="inputSuccess2" rows="5">{{ $new->text }}</textarea>
                                   
                                        <div class="text-right" style="margin-top:20px">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </div>                               
                            </form>  
                          </div>
                          @endif                        
                            <div class="card">
                            <h4 class="card-title">Create news</h4>
                                <h6 class="card-subtitle">
                               
                                <form class="mt-3" _lpchecked="1" action="{{ route('news.store') }}" method="POST">
                                    {!! csrf_field() !!}
                                   
                                    <label class="form-control-label" for="inputSuccess1">Title</label>                            
                                    <input type="text" name="title" class="form-control is-valid" value="" id="inputSuccess1">

                                    <label class="form-control-label" style="margin-top: 15px" for="inputSuccess2">Text</label>                            
                                    <textarea name="text" class="form-control is-valid" id="inputSuccess2" rows="5"></textarea>
                                   
                                        <div class="text-right" style="margin-top:20px">
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </div>                               
                            </form>  
                          </div>
                        </div>
             </div>
           </div>

           <div class="pagination-container mb-3 text-center">
                              {!! $news->render() !!}
           </div> 

        </div>

@endsection