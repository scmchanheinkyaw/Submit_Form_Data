@extends('layout.app')
@section('title','Category')
@section('content')
<div class="py-4">
  <div class="d-flex justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="card-title mb-4">
              <h3>Create Category</h3>
            </div>
              <form action="{{ route('category.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                  @csrf
                  <div class="md-form">
                      <label for="">Name</label>
                      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                      @error('name')
                      <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>
        
                  <div class="d-flex text-right mt-5 mb-3">
                      <div class="col-md-12">
                        <a href="{{ route('category.index') }}" class="btn btn-primary">Back</a>
                        <button type="submit" class="btn btn-primary">Confirm</button>
                      </div>
                  </div>
              </form>
          </div>
        </div>
      </div>
  </div>
</div>
@endsection