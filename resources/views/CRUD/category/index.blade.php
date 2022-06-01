@extends('layout.app')
@section('title','Category')
@section('content')
<div class="py-4">
  <div class="d-flex justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <div class="card-title mb-4">
              @if (session()->has('message'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
              <form action="{{ route('category.search') }}" method="GET">
                @csrf
                <a href="{{ route('category.create') }}" class="btn btn-primary">Create</a>
                <input type="text" name="free_search" class="py-1">
                <button class="btn btn-primary mb-1">Search</button>
              </form>
            </div>
            <table class="table table-bordered text-center">
              <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
              </thead>
              <tbody>
                  @foreach ($categories as $category)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $category->name }}</td>
                      <td>    
                        <form action="{{ route('category.destroy' , $category->id) }}" method="POST">
                          @csrf @method('DELETE')
                          <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
          <div class="card-footer">
            {!! $categories->links() !!}
          </div>
        </div>
      </div>
  </div>
</div>
@endsection