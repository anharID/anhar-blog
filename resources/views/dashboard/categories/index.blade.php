@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Posts Categories</h1>
  </div>

  @if (session()->has('success'))
  <div class="alert alert-success col-lg-6" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <div class="table-responsive col-lg-6">

    <form class="col-lg-12" action="/dashboard/categories" method="POST">
        @csrf
          <div class="input-group mb-3">
              <input type="text" name="name" class="form-control" placeholder="Tambah kategori baru">
              <button class="btn btn-primary" type="submit">Create Category</button>
          </div>
      </form>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($categories as $category)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
            <td>
                <a href="#" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline" >
                  @method('DELETE')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                </form>
            </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
@endsection