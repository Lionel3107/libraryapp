@extends('layouts.app')

@section('title', 'Show Readers')

@section('contents')
    <h1 class="mb-0">Reader Detail</h1>

    <hr />
        <div class="row mb-3">
            <div class="col">Name: <input type="text" name="Name" placeholder="Your name..." value="{{$lecteur->Name}}" readonly><br><br></div>
            <div class="col">FirstName: <input type="text" name="FirstName" placeholder="Your firstname..." value="{{$lecteur->FirstName}}" readonly><br><br></div>
            <div class="col">Email: <input type="email" name="Email" placeholder="Your email..." value="{{$lecteur->Email}}" readonly><br><br></div>
            <div class="col">Password: <input type="password" name="Password" placeholder="Your password..." value="{{$lecteur->Password}}" readonly><br><br></div>
            <div class="col">Function: <select type="function" name="Function" id="etat" value="{{$lecteur->Function}}" readonly>
            <option value="good">Student</option>
            <option value="moyen">Teacher</option>
            <option value="bad">Other</option>
            </select><br><br></div>
            <div class="row">
                <div class="col mb-3">Created_At: <input type="text" name="created_at" value="{{$lecteur->created_at}}" readonly><br><br></div>
            </div>
            <div class="row">
                <div class="col mb-3">Updated_At: <input type="text" name="updated_at" value="{{$lecteur->updated_at}}" readonly><br><br></div>
            </div>
        </div>
        <div class=" text-center"><button type="submit" class="btn btn-danger">Submit</button></div>
        
    </form>
@endsection