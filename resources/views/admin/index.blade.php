@extends('layout')

@section('content')

<div class="row">
  <div class="col-sm-12 col-md-8 col-lg-8">
    <a href="{{ route('admin.create') }}" class="btn btn-success" style="width: 190px; display: inline-block; margin-bottom: 40px;">Create Admin</a>
    <div class="card">
        <h4 class="card-title m-4">Adminstrators</h4>

        <div class="table-responsive">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                       
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($admins as $admin)
                    <tr>
                        
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>{{ $admin->created_at->format('d.m.Y') }}</td>
                        
                        <td style="width: 200px">
                            <div class="text-left">
                                <a href="{{ route('admin.edit', $admin->id) }}" class="btn btn-info" style="width: 90px">Edit</a>

                                <form action="{{ route('admin.delete', $admin->id) }}" method="POST" style="display: inline" class="delete">
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

  </div>
</div>
@endsection