@extends('master.admin.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center font-weight-bolder">Add User</h4>
                    <p>{{ Session::get('message') }}</p>
                    <hr/>
                    <form action="{{ route('product.new') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Product Name</label>
                            <input type="text" name="product_name" class="form-control"  placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Category Name</label>
                            <input type="text" name="category_name" class="form-control"  placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Brand Name</label>
                            <input type="text" name="brand_name" class="form-control"  placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" id="" cols="" rows=""></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control-file"  placeholder="">
                        </div>


                        <button type="submit" class="btn btn-primary">Create Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
