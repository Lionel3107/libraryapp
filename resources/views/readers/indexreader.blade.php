@extends('layouts.app')

@section('title', 'Home Products')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Readers List</h1>
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
                <th>Name</th>
                <th>FirstName</th>
                <th>Email</th>
                <th>Password</th>
                <th>Function</th>
                <th>Action</th>
            </tr>

        </thead>

        <tbody>
            @if($lecteur->count() > 0)
                @foreach($lecteur as $sr)
                    <tr>
                        <td class="align-middle">{{$loop->iteration}}</td>
                        <td class="align-middle">{{$sr->Name}}</td>
                        <td class="align-middle">{{$sr->FirstName}}</td>
                        <td class="align-middle">{{$sr->Email}}</td>
                        <td class="align-middle">{{$sr->Password}}</td>
                        <td class="align-middle">{{$sr->Function}}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="basic example">
                                <a href="{{route('readers.showr', $sr->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <form action="{{route('readers.destroyr', $sr->id) }}" method="POST" type="button" class="btn btn-danger">
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