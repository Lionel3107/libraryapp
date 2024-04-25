@extends('layouts.app')

@section('title', 'User List')

@section('contents')
    <h1>User List</h1>
    <hr />

    @if($users->count() > 0)
        <table class="table table-hover">
            <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Password</th>
                    <th>Address</th>
                    <th>Level</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$user->fname}}</td>
                        <td>{{$user->lname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{ strlen($user->password) > 1 ? substr($user->password, 0, 1) . '...' : $user->password }}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->level}}</td>
        
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="basic example">
                                <a href="{{ route('users.edit', $user->id) }}" type="button" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#passwordModal{{$user->id}}">
                                    View Password
                                </button>
                            </div>
                        </td>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="passwordModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="passwordModalLabel{{$user->id}}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="passwordModalLabel{{$user->id}}">Password for {{$user->email}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            {{$user->password}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No users found.</p>
    @endif
@endsection
