@extends('layout.app')
@section('title','Category')
@section('content')
<div class="py-4">
  <div class="d-flex justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <div class="card-title mb-4 text-right">
              <a href="{{ route('product.index') }}" class="btn btn-primary">Product</a>
              <a href="{{ route('category.index') }}" class="btn btn-primary">Category</a>
            </div>
          <div>
            <table class="table table-bordered text-center">
              <thead>
                <th>ID</th>
                <th>Product</th>
                <th>Category</th>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Samsung</td>
                  <td>Phone</td>
                </tr>
              </tbody>
            </table>
          </div>
          </div>
        </div>
      </div>
  </div>
</div>
@endsection