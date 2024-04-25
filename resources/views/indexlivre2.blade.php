<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotheque</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="..." crossorigin="anonymous">
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <svg xmlns="http://www.w3.org/2000/svg" width="46" height="56" fill="red" class="bi bi-book mx-2" viewBox="0 0 16 16">
                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
            </svg>
            <a href="#home" class="navbar-brand">BIBLIOTHEQUE</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mynavbar" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a href="/home" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Sign Up</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="/livres_empruntes" class="nav-link">Loan Book</a></li>
                    
                    
                </ul>
            </div>
            <form class="d-flex" action="{{ url('/indexlivre2') }}" method="GET">
                    <input type="search" class="form-control me-2" name="searchlivre2" id="searchlivre2" placeholder="Search"  >
                    <input type="submit" class="btn btn-danger" value="Go" onclick=searchlivre2()>
            </form>
        </div>
    </nav>

    <div class="container" id="home">
    
        <h1 class="mt-5 text-center">LIBRARY BOOKS</h1>
        <hr>
        <div class="text-center">
        @if (session('status'))
        <div class="alert alert-success">
        {{session('status')}}
        </div>
        @endif
        <ul>
            @foreach ($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
        </ul>
        </div>

        <div class="table-responsive mt-3">
            <table class="table">
                <thead>
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
                <tbody id="recharger" class="alldata">
                    @php
                        $ide = 1;
                    @endphp
                    @foreach($livre as $rs)
                    <tr>
                        <td>{{ $ide }}</td>
                        <td>{{$rs -> Title}}</td>
                        <td>{{$rs -> Author}}</td>
                        <td>{{$rs -> Page_Number}}</td>
                        <td>{{$rs -> Book_Quality}}</td>
                        <td>{{$rs -> Edition}}</td>
                        <td>{{$rs -> Type}}</td>
                        <td>{{$rs -> Book_State}}</td>
                        <td>
                            <div>
                            <a href="/emprunt" class="btn btn-success">Emprunt</a>
                            </div>
                        </td>
                    </tr>
                    @php
                        $ide += 1;
                    @endphp
                    @endforeach
                </tbody>

                <tbody id="Content" class="searchdata"></tbody>
            </table>
    
            <!-- Rendre la pagination possible -->
            {{$livre->links() }}
        </div>

        <div class="table-responsive mt-3">
    @if ($livre->isEmpty())
        <div class="alert alert-info">Aucun livre disponible pour le moment.</div>
    @else
        <table class="table">
            <!-- Votre code pour afficher la liste des livres -->
        </table>
    @endif
</div>
    </div>

    
    <script type="text/javascript">
    $('#searchlivre2').on('keyup', function() {
        var value = $(this).val();

        if (value) {
            $('.alldata').hide();
            $('.searchlivre2data').show();
        } else {
            $('.alldata').show();
            $('.searchlivre2data').hide();
        }

        $.ajax({
            type: 'get',
            url: '{{URL::to('searchlivre2')}}',
            data: { 'searchlivre2': value },

            success: function(data) {
                console.log(data);
                $('#Content').html(data);
            }
        });
    });
</script>

</body>
</html>