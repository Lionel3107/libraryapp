<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIBLIOTHEQUE</title>
    <link rel="stylesheet" href="livreform.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="..." crossorigin="anonymous">
</head>
<style>
  /* Styles CSS pour rendre l'image de fond légèrement plus sombre */
  #first-e::after {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.2); /* Couleur noire semi-transparente */
  }
  #fifth-e::after {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.2); /* Couleur noire semi-transparente */
  }
  .cadre-rond img {
      width: 75px; /* Changer la taille de l'image selon vos besoins */
      height: 75px; /* Changer la taille de l'image selon vos besoins */
      object-fit: cover; /* Ajustement de l'image pour couvrir le cadre */
      border-radius: 50%; /* Création du cadre rond */
    }
</style>
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
                    <li class="nav-item"><a href="/home" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ route('lecteur') }}" class="nav-link">Sign Up</a></li>
                    <li class="nav-item"><a href="/indexlivre2" class="nav-link">Book List</a></li>
                    <li class="nav-item"><a href="/livres_empruntes" class="nav-link">Loan Book</a></li>
                </ul>
            </div>
            <form class="d-flex" action="{{ url('/indexlivre2') }}" method="GET">
                    <input type="search" class="form-control me-2" name="searchlivre2" id="searchlivre2" placeholder="Search"  >
                    <input type="submit" class="btn btn-danger" value="Go" onclick=searchlivre2()>
            </form>
        </div>
    </nav>
    <div id="second-e" class="container-fluid d-flex justify-content-center text-center bg-light">
        <div class="row d-flex justify-content-center">
            <div class="col mt-5 me-0 pe-0 px-5">
                <img src="{{asset('images/library1.jpg')}}" class="img-thumbnail h-50 me-0 pe-0 img-fluid mt-5" alt="">
            </div>
            <div class="col mt-5 ps-0">
                <div class="text-start mt-5 text-dark">
                    <h2>ABOUT</h2>
                    <h2>BIBLIOTHEQUE</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, unde voluptatum harum iusto temporibus fugit assumenda doloremque enim. Ipsa hic aut ipsam sequi corporis. Error iure excepturi impedit quas aliquid, ea a totam quia neque sapiente, ipsa quaerat temporibus consequuntur quis. Alias tenetur laboriosam molestias distinctio ipsa veniam, numquam provident.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab a praesentium veniam nemo, facere quibusdam? Tenetur quos officia aliquid nihil cumque esse, recusandae, soluta, neque nisi saepe quaerat quo voluptatibus dolores dolore! Accusamus amet voluptatibus cum ea aliquam, enim eligendi nihil est labore nulla. Voluptatibus explicabo ab dolorem quas eaque rem sapiente libero unde fuga, nam alias earum dolorum est ad incidunt vel molestias officia? Ratione nostrum reiciendis nam magnam!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique iusto fugiat qui quia numquam voluptatum voluptate, et optio harum iure ratione, sit, cupiditate libero illum.</p>

                    <div class="row mt-5 text-danger">
                        <div class="col mt-5">
                            <p class="text-danger" style="font-weight: bold; color: black;">50+</p>
                            <p class="text-dark" style="font-size: smaller; font-weight: bold;">Author's</p>
                        </div>

                        <div class="col mt-5">
                            <p class="text-danger" style="font-weight: bold; color: black;">1k+</p>
                            <p class="text-dark" style="font-size: smaller; font-weight: bold;">Books</p>
                        </div>

                        <div class="col mt-5">
                            <p class="text-danger"style="font-weight: bold; color: black;">100+</p>
                            <p class="text-dark" style="font-size: smaller; font-weight: bold;">Category</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="d-block justify-content-center">
        <div class="text-center mt-5">
            <div class="d-flex justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="50" fill="red" class="bi bi-book mx-2" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
                </svg>
                <a href="#home" class="fs-3 mt-1 link-dark link-underline-opacity-0">BIBLIOTHEQUE</a>
            </div>
            <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, corrupti.</p>
        </div>
        <div class="d-block justify-content-center">
            <div class="d-flex justify-content-center mt-5 ">
                    <div class="mx-3"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-facebook img-fluid" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg></a></div>
                    <div class="mx-3"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="green" class="bi bi-whatsapp img-fluid" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                    </svg></a></div>
                    <div class="mx-3"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-twitter img-fluid" viewBox="0 0 16 16">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                    </svg></a></div>
                    <div class="mx-3"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="red" class="bi bi-youtube" viewBox="0 0 16 16">
                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                    </svg></a></div>
                    <div class="mx-3"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                    </svg></a></div>
            </div>
            <div class="d-flex justify-content-center mt-5">
                    <a href="index.php" class="link-dark link-underline-opacity-0  link-offset-3-hover link-underline-opacity-75-hover text-dark mx-5">Home</a>
                    <a href="signup.html" class="link-dark link-underline-opacity-0  link-offset-3-hover link-underline-opacity-75-hover text-dark mx-5">Sign Up</a>
                    <a href="login.html" class="link-dark link-underline-opacity-0  link-offset-3-hover link-underline-opacity-75-hover text-dark mx-5">Login</a>
                    <a href="/indexlecteur" class="link-dark link-underline-opacity-0  link-offset-3-hover link-underline-opacity-75-hover text-dark mx-5">Reader List</a>
            </div>
            <hr>
            <p class="text-center">Copyright&copy;All Right Reserved</p>
        </div>
    </footer>
</body>