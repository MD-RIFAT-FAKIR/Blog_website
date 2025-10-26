@extends('dashboard.dashboardLayout.layout')

@section('content')

<div class="container mt-4">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
          <div class="card-header">
            Category
          </div>
          <div class="card-body">
            <form action="{{ route('store-category') }}" method="post">
              @csrf
            <h6 class="card-title">Edit Category</h6>
            @if(session('success'))
              <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <input type="text" class="form-control" name="category" value="{{ $category->category }}">
            @error('category')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary mt-2">Update</button>
            </form>
          </div>
        </div>
    </div>
  </div>
</div>

@endsection