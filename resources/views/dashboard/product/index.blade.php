@extends('layout.app')
@section('main-content')
    <main class="m-3">
        <div>
            <h3>Product List</h3>
        </div>
        <div class="card mt-4">
            <div class="card-header d-flex justify-content-between">
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <form action="{{ route('dashboard.product.create') }}">
                            <button>Add Product</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>No. </th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Photo</th>
                            <th>Is Active</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>183</td>
                            <td>John Doe</td>
                            <td>11-7-2014</td>
                            <td><span class="tag tag-success">Approved</span></td>
                            <td>Bacon ipsum dolor sit amet salami </td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </main>
@endsection
