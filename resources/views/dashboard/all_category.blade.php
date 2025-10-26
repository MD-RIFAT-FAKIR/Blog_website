@extends('dashboard.dashboardLayout.layout')

@section('content')
<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">
          All Category
        </div>
        @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table mb-5 text-center">
          <thead>
              <td>ID</td>
              <td>Category Name</td>
              <td>Actions</td>
          </thead>
          <tbody>
            @foreach($categories as $category)
            <tr>
              <td># {{ $category->id }}</td>
              <td>{{ $category->category }}</td>
              <td>
                <a href="{{ url('edit-category', $category->id) }}" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
              </td>
            </tr> 
            @endforeach        
          </tbody>        
        </table>      
      </div>
      <a href="{{ route('add-category') }}" class="btn btn-primary mt-3">Back</a> 
    </div>
  </div>
</div>

@endsection