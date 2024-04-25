<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIBLIOTHEQUE</title>
    <link rel="stylesheet" href="livreform.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="..." crossorigin="anonymous">
</head>
<body >
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
                    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ route('lecteur') }}" class="nav-link">Sign Up</a></li>
                    <li class="nav-item"><a href="/indexlivre2" class="nav-link">Book List</a></li>
                    <li class="nav-item"><a href="/livres_empruntes" class="nav-link">Loan Book</a></li>
                </ul>
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right link-light link-underline-opacity-0  link-offset-3-hover link-underline-opacity-75-hover text-light mx-5 d-flex">
                <a href="{{ route('login') }}" class="nav-link mx-3">Log in</a>
                <a href="{{ route('register') }}" class="nav-link">Register</a>
                </div>   
            </div>
        </div>
    </nav>

    <div id="second-e" class="container d-flex justify-content-center text-center bg-light mb-5 mt-5 mb-5">
        <div class="row d-flex justify-content-center" style="background-color:whitesmoke" >
            <div class="col-5 mt-5 me-0 pe-0 px-5" >
                <img src="{{asset('images/livre.jpg')}}" class="img-thumbnail h-65 w-50 me-0 pe-0 img-fluid mt-5" alt="">
                <div class="d-grid gap-2 col-6 mx-auto mt-3">
                    <button  onclick="window.location.href='/emprunt'" class="btn btn-success" type="button">Emprunt</button>
                </div>
                <div class=" d-flex justify-content-center mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" class="bi bi-star" viewBox="0 0 16 16">
                        <path d="M8 0l2.47 5.75h6.53l-4.98 4.53 1.87 6.88-6.12-3.68-6.12 3.68 1.87-6.88L0 5.75h6.53z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" class="bi bi-star" viewBox="0 0 16 16">
                        <path d="M8 0l2.47 5.75h6.53l-4.98 4.53 1.87 6.88-6.12-3.68-6.12 3.68 1.87-6.88L0 5.75h6.53z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" class="bi bi-star" viewBox="0 0 16 16">
                        <path d="M8 0l2.47 5.75h6.53l-4.98 4.53 1.87 6.88-6.12-3.68-6.12 3.68 1.87-6.88L0 5.75h6.53z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" class="bi bi-star" viewBox="0 0 16 16">
                        <path d="M8 0l2.47 5.75h6.53l-4.98 4.53 1.87 6.88-6.12-3.68-6.12 3.68 1.87-6.88L0 5.75h6.53z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" class="bi bi-star" viewBox="0 0 16 16">
                        <path d="M8 0l2.47 5.75h6.53l-4.98 4.53 1.87 6.88-6.12-3.68-6.12 3.68 1.87-6.88L0 5.75h6.53z"/>
                    </svg>
                </div>
                <hr class="w-75 mx-auto">

                <div class="row d-flex justify-content-center m-0">
                    <div class="col-auto">
                        <div class="d-block justify-content-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                                    <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                                </svg>
                                <p>Reviews</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="d-block justify-content-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                                    <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
                                </svg>
                                <p>Notes</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="d-block justify-content-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                                    <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.5 2.5 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5m-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3"/>
                                </svg>
                                <p>Share</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-7 mt-5 pt-4">
                <div class="text-start mt-5 text-dark">
                    <h2 class="text-secondary fs-6">Une édition de {{ $livre->Edition }} (1996)</h2>
                    <h2>{{ $livre->Title }}</h2>
                    <p class="text-secondary fs-6">Ecrit par <span class="text-danger"><a href=""> {{ $livre->Author }}</a></span></p>
                    
                    <div class=" d-flex justify-content-start">
                        <div class=" text-center d-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star" viewBox="0 0 16 16">
                                <path d="M8 0l2.47 5.75h6.53l-4.98 4.53 1.87 6.88-6.12-3.68-6.12 3.68 1.87-6.88L0 5.75h6.53z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star" viewBox="0 0 16 16">
                                <path d="M8 0l2.47 5.75h6.53l-4.98 4.53 1.87 6.88-6.12-3.68-6.12 3.68 1.87-6.88L0 5.75h6.53z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star" viewBox="0 0 16 16">
                                <path d="M8 0l2.47 5.75h6.53l-4.98 4.53 1.87 6.88-6.12-3.68-6.12 3.68 1.87-6.88L0 5.75h6.53z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star" viewBox="0 0 16 16">
                                <path d="M8 0l2.47 5.75h6.53l-4.98 4.53 1.87 6.88-6.12-3.68-6.12 3.68 1.87-6.88L0 5.75h6.53z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star" viewBox="0 0 16 16">
                                <path d="M8 0l2.47 5.75h6.53l-4.98 4.53 1.87 6.88-6.12-3.68-6.12 3.68 1.87-6.88L0 5.75h6.53z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" class="bi bi-star" viewBox="0 0 16 16">
                                <path d="M8 0l2.47 5.75h6.53l-4.98 4.53 1.87 6.88-6.12-3.68-6.12 3.68 1.87-6.88L0 5.75h6.53z"/>
                            </svg>
                            <div class="mx-2">
                                <p class="mx-2 ">5.23 . 587 Ratings . 657 A lu</p>
                            </div>
                        </div>
                        
                    </div>
                    <div>
                        <p><u><strong>Description:</strong></u></p>
                        <p >
                            In a world where magic and technology collide, an ancient prophecy awakens, calling for an unexpected hero. "Shazam: The Awakening of Lost Echoes" immerses us in a fantastical universe where ancient mysteries and future secrets intertwine.
                            <p id="description" style="display: none;">
                                At the heart of this tale lies Alex, an ordinary teenager whose life is turned upside down when he discovers a strange object during an archaeological expedition with his family. This ancient artifact, known as Shazam, holds the power to awaken echoes of the past, setting off an epic and perilous quest.
                                Guided by unlikely allies and confronted by formidable enemies, Alex must master the mystical powers of Shazam to save his world from imminent destruction. But as he delves deeper into the mysteries surrounding this ancestral artifact, he realizes that his destiny is intimately linked to a battle that has spanned the ages.
                                Between ancient magic and futuristic technology, "Shazam: The Awakening of Lost Echoes" is a captivating tale of adventure, courage, and self-discovery. Through thrilling twists and dazzling landscapes, this book transports readers on an unforgettable journey where power lies in the ability to believe in the impossible.
                            </p>
                        </p>
                        <button onclick="toggleDescription()" class="btn btn-link text-decoration-none">
                                <div class="d-flex">
                                    <p>Read more</p>
                                    <div class="mx-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="27" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                        </svg>
                                    </div>
                                    
                                </div>
                        </button>
                            
                        <script>
                            function toggleDescription() {
                                var description = document.getElementById("description");
                                if (description.style.display === "block") {
                                    description.style.display = "none";
                                } else {
                                    description.style.display = "block";
                                }
                            }
                        </script>
                        <div class="row d-flex justify-content-start mt-3">
                            <div class="col-3">
                                <button type="button" class="btn btn-light border border-dark" style="height: 60px;">
                                    <p class="small"><span class="text-secondary">Publication Date </span> <br>May 28, 2002</p>
                                </button>
                            </div>
                            <div class="col-3">
                                <button type="button" class="btn btn-light border border-dark" style="height: 60px;">
                                    <p class="small"><span class="text-secondary">Edition </span> <br> {{ $livre->Edition }}</p>
                                </button>
                            </div>
                            <div class="col-3">
                                <button type="button" class="btn btn-light border border-dark" style="height: 60px;">
                                    <p class="small"><span class="text-secondary">Language </span>  <br>English</p>
                                </button>
                            </div>
                            <div class="col-3">
                                <button type="button" class="btn btn-light border border-dark" style="height: 60px;">
                                    <p class="small"><span class="text-secondary">Page </span>  <br>45</p>
                                </button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>