@extends('master')

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            All Brand Information
                        </div>

                        <div class="card-body">
                            <h2 class="text-center text-success">{{Session::get('message')}}</h2>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <th>SL NO</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                @foreach($brands as $brand)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$brand->name}}</td>
                                        <td>{{$brand->description}}</td>
                                        <td>
                                            <img src="{{asset($brand->image)}}" alt="" height="100" width="100">
                                        </td>
                                        <td>
                                            <a href="{{route('brand.edit', ['id' => $brand->id])}}" class="btn btn-success btn-sm">Edit</a>
                                            <a href="{{route('brand.delete', ['id' => $brand->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete')">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
