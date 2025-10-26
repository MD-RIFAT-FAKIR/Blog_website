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
            <form action="">
            <h5 class="card-title">Add Category</h5>
            <input type="text" class="form-control" name="category" placeholder="Enter Category Name">
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
          </div>
        </div>
    </div>
  </div>
</div>

@endsection