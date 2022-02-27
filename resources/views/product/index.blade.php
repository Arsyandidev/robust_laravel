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
                      <h3 class="card-title">Product Page</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a href="{{ route('product.create') }}" class="btn btn-success btn-sm mb-3">+ Tambah</a>
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>Unit</th>
                            <th>Category</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->brand }}</td>
                                <td>{{ $product->unit }}</td>
                                <td>{{ $product->getCategory->name }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default">Action</button>
                                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu" style="">
                                            <a class="dropdown-item"
                                                href="{{ route('product.show', $product->id) }}">Detail</a>
                                            <a class="dropdown-item"
                                                href="{{ route('product.edit', $product->id) }}">Edit</a>

                                            <form action="{{ route('product.destroy', $product->id) }}"
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
