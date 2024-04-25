@extends('layouts.app')

@section('title', 'Show Books')

@section('contents')
    <h1 class="mb-0">Book Detail</h1>

    <hr />
        <div class="row mb-3">
            <div class="col">Title: <input type="text" name="Title" placeholder="The book title..." value="{{$livre->Title}}" readonly><br><br></div>
            <div class="col">Author: <input type="text" name="Author" placeholder="The author..." value="{{$livre->Author}}" readonly><br><br></div>
            <div class="col">Page_Number: <input type="number" name="Page_Number" placeholder="Page number..." value="{{$livre->Page_Number}}" readonly><br><br></div>
            <div class="col">Book_Quality: <select name="Book_Quality" id="etat" value="{{$livre->Book_Quality}}" readonly>
            <option value="good">Good</option>
            <option value="moyen">Moderately Good</option>
            <option value="bad">Bad</option>
            </select><br><br></div>
            <div class="col">Edition: <input type="text" name="Edition" placeholder="The book edition..." value="{{$livre->Edition}}" readonly><br><br></div>
            <div class="col mt-3">Type: <select name="Type" id="type" value="{{$livre->Type}}" readonly>
            <option value="BD">BD</option>
            <option value="novel">Novel</option>
            <option value="mangas">Mangas</Main></option>
            </select><br><br></div>
            <div class="col">Book_State: <input type="text" name="Book_State" value="{{$livre->Book_State}}" readonly><br><br></div>
            
            <div class="row">
                <div class="col mb-3">Created_At: <input type="text" name="created_at" value="{{$livre->created_at}}" readonly><br><br></div>
            </div>
            <div class="row">
                <div class="col mb-3">Updated_At: <input type="text" name="updated_at" value="{{$livre->updated_at}}" readonly><br><br></div>
            </div>
        </div>
        <div class=" text-center"><button type="submit" class="btn btn-danger">Submit</button></div>
        
    </form>
@endsection