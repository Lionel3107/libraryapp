<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
    <link rel="stylesheet" href="modifierlecteur.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="..." crossorigin="anonymous">
</head>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    h2{
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }

    form {
        max-width: 400px;
        margin: 20px auto;
        border: 2px solid #ddd;
        border-radius: 5px;
        background-color: #fff;
        padding: 20px;
        box-sizing: border-box;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

        input[type="text"],
        input[type="password"] {
        width: 100%;
        box-sizing: border-box;
        border: 1px solid #ccc;
        padding: 12px;
        margin-bottom: 15px;
        border-radius: 4px;
        }

    button[type="login"] {
        width: 100%;
        box-sizing: border-box;
        border: none;
        background-color: #e44d26;
        color: #fff;
        padding: 12px;
        cursor: pointer;
        border-radius: 4px;
        transition: background-color 0.3s;
    }

    button[type="login"]:hover {
        background-color: #d7391e;
    }



</style>
<body>
<h2>READER REGISTRATION</h2>
    <form action="/lecteur/traitement " method="post" >
        @csrf
        Name: <input type="text" name="Name" placeholder="Your Name..." ><br><br>
        FirstName: <input type="text" name="FirstName" placeholder="Your FirstName..." ><br><br>
        Email: <input type="text" name="Email" placeholder="Your Email..." ><br><br>
        Password: <input type="text" name="Password" placeholder="Your Password..." ><br><br>
        Function: <select name="Function" id="Function">
            <option value="Student">Student</option>
            <option value="Teacher">Teacher</option>
            <option value="Other">Other</option>
        </select><br><br>
        <button type="login" value="login" name="login" style="background-color:red;">Sign Up</button>
    </form>  
</body>
</html> 