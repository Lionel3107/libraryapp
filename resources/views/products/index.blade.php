@extends('layouts.app')

@section('title', 'Home Products')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Books List</h1>
        <a href="{{ route('products.create') }}" class="btn btn-danger">Add Books</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Author</th>
                <th>Page_Number</th>
                <th>Book_Quality</th>
                <th>Edition</th>
                <th>Type</th>
                <th>Book_State</th>
                <th>Action</th>
            </tr>

        </thead>

        <tbody>
            @if($livre->count() > 0)
                @foreach($livre as $rs)
                    <tr>
                        <td class="align-middle">{{$loop->iteration}}</td>
                        <td class="align-middle">{{$rs->Title}}</td>
                        <td class="align-middle">{{$rs->Author}}</td>
                        <td class="align-middle">{{$rs->Page_Number}}</td>
                        <td class="align-middle">{{$rs->Book_Quality}}</td>
                        <td class="align-middle">{{$rs->Edition}}</td>
                        <td class="align-middle">{{$rs->Type}}</td>
                        <td class="align-middle">{{$rs->Book_State}}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="basic example">
                                <a href="{{route('products.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{route('products.edit', $rs->id) }}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{route('products.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger">
                                    @csrf
                                    @method('DELETE')
                                    <button  class="btn btn-danger m-0">Delete</button>
                                </form>

                            </div>
                        </td>
                    </tr>
                    @endforeach
                    @else
                        <tr>
                            <td class="text-center" colspan="5">Product not found</td>
                        </tr>
                    @endif
        </tbody>
    </table>
@endsection