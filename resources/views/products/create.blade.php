@extends('layouts.app')

@section('title', 'Create Books')

@section('contents')
    <h1 class="mb-0">Add Books</h1>
    <hr />

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">Title: <input type="text" name="Title" placeholder="The book title..." ><br><br></div>
            <div class="col">Author: <input type="text" name="Author" placeholder="The author..." ><br><br></div>
            <div class="col">Page_Number: <input type="number" name="Page_Number" placeholder="Page number..." ><br><br></div>
            <div class="col">Book_Quality: <select name="Book_Quality" id="etat">
            <option value="good">Good</option>
            <option value="moyen">Moderately Good</option>
            <option value="bad">Bad</option>
            </select><br><br></div>
            <div class="col">Edition: <input type="text" name="Edition" placeholder="The book edition..." ><br><br></div>
            <div class="col mt-3">Type: <select name="Type" id="type">
            <option value="BD">BD</option>
            <option value="novel">Novel</option>
            <option value="mangas">Mangas</Main></option>
            </select><br><br></div>
            <div class="col">Book_State: <input type="text" name="Book_State"><br><br></div>
        </div>
        <div class=" text-center"><button type="submit" class="btn btn-danger">Submit</button></div>
        
    </form>
@endsection