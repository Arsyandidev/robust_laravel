@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-body">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Category Page</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a href="{{ route('category.create') }}" class="btn btn-success btn-sm mb-3">+ Tambah</a>
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default">Action</button>
                                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu" style="">
                                            <a class="dropdown-item"
                                                href="{{ route('category.show', $category->id) }}">Detail</a>
                                            <a class="dropdown-item"
                                                href="{{ route('category.edit', $category->id) }}">Edit</a>

                                            <form action="{{ route('category.destroy', $category->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
              </div>
          </section>
    </div>
</div>


@stop
