@extends('layouts.app')

@section('title', 'Loan List')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Loan List</h1>
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
                <th>User Name</th>
                <th>Book Title</th>
                <th>Date Emprunt</th>
                <th>Date Retour</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($emprunts as $emprunt)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $emprunt->user->Name }} {{ $emprunt->user->FirstName }}</td>
                    <td class="align-middle">{{ $emprunt->book->Title }} {{ $emprunt->book->Author }}</td>
                    <td class="align-middle">{{ $emprunt->DateEmprunt }}</td>
                    <td class="align-middle">{{ $emprunt->DateRetour }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <form action="{{ route('borrower.destroyemprunt', $emprunt->id) }}" method="POST">
                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
