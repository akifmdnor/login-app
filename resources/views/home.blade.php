@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{-- <div class="card">
                    <div class="card-header">User</div>
                      <div class="card-body"> 
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> --}}
                <div class="card">
                    <div class="card-header">Product</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Product Description</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- users ada lebih dr satu kita perlu dptkan 1 value je 
                            how?
                            loop users utk dapatkan user --}}
                                @foreach ($products as $product)
                                    <tr>
                                        <th scope="row">{{ $product->id }}</th>
                                        <td>{{ $product->product_name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->product_description }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td> <a type="button" class="btn btn-primary" href="{{ route('product-edit', $product->id) }}">
                                                Update
                                            </a>
                                        </td>
                                        {{-- <td><a href="{{ route('admin.bookings.edit',$booking->id)}}" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Update</a></td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Add New Product
                    </button>
                </div>
            </div>
        </div>
    </div>
    @include('components.product-form')

@endsection
