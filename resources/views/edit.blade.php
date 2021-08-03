@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form id="product-form" method="post" action="{{ route('product-update', $product->id) }}">
                @csrf
                @method('patch')
                    <div class="modal-body">

                        {{-- Name --}}
                        <label for="product_name">Name</label>
                        <input id="product_name" class="form-control" type="text" placeholder="Eg: Computer"
                            name="product_name" value="{{ $product->product_name }}">

                        {{-- Price --}}
                        <label for="price">Price (RM)</label>
                        <input id="price" class="form-control" type="number" placeholder="Eg: 2.00" name="price"
                            value="{{ $product->price }}">

                        {{-- Description --}}
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" rows="3"
                            name="product_description">{{ $product->product_description }}</textarea>

                        {{-- Quantity --}}
                        <label for="quantity">Quantity</label>
                        <input id="quantity" class="form-control" type="number" placeholder="Eg: 10" name="quantity"
                            value="{{ $product->quantity }}">

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
