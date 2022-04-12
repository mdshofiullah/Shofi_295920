@extends('master.admin.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center font-weight-bolder">Add User</h4>
                    <p>{{ Session::get('message') }}</p>
                    <hr/>
                    <form action="{{ route('product.update',['id' => $product->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Product Name</label>
                            <input type="text" name="product_name" value="{{ $product->product_name }}" class="form-control"  placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Category Name</label>
                            <input type="text" name="category_name" value="{{ $product->category_name }}" class="form-control"  placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Brand Name</label>
                            <input type="text" name="brand_name" value="{{ $product->brand_name }}" class="form-control"  placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" id="" value="" cols="" rows="">{{ $product->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control-file"  placeholder=""><img src="{{ asset($product->image) }}" alt="" height="100" width="100" />
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <div>
                                <label for=""><input type="radio" {{ $product->status == 1 ? 'checked' : '' }} name="status" value="1" />Publish</label>
                                <label for=""><input type="radio" {{ $product->status == 0 ? 'checked' : '' }} name="status" value="0" />Unpublished</label>
                            </div>

                        </div>


                        <button type="submit" class="btn btn-primary">Create Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
