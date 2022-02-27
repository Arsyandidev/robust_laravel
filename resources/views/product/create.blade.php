@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create New</h3>
                </div>
                <form action="{{ route('product.store') }}" method="POST">
                    @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label>Brand</label>
                            <input type="text" name="brand" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label>Unit</label>
                            <input type="number" name="unit" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-select" name="category_id">
                                <option selected>Select Category</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                              </select>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@stop
