@if(auth()->user()->is_admin == 1)

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>admin dashbord</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed" style="background-color:#ddf3f7;">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/home"> HOME</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            Deconnexion
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link collapsed" href="/niveaux"  data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns" style='font-size:30px;color:rgb(78, 143, 241)'></i></div>
                              <strong>  Niveaux</strong>
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            <a class="nav-link collapsed" href="/periodes"  data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"  style='font-size:28px;color:rgb(78, 143, 241)'></i></div>
                                <strong>  periodes</strong>
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            <a class="nav-link collapsed" href="/matieres"  data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns" style='font-size:30px;color:rgb(78, 143, 241)'></i></div>
                              <strong>  matieres</strong>
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            <a class="nav-link collapsed" href="/groupes"  data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class='fas fa-users' style='font-size:24px;color:rgb(78, 143, 241)'></i></div>
                              <strong>  groupes</strong>
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            <a class="nav-link collapsed" href="/etudiants"  data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class='fas fa-book-reader' style='font-size:28px;color:rgb(78, 143, 241)'></i></div>
                              <strong>  etudiants</strong>
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            <a class="nav-link collapsed" href="/formateurs"  data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class='fas fa-user-graduate' style='font-size:28px;color:rgb(78, 143, 241)'></i></div>
                              <strong>  formateurs</strong>
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            <a class="nav-link collapsed" href="/paiments"  data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class='fas fa-wallet' style='font-size:28px;color:rgb(78, 143, 241)'></i></div>
                              <strong>  paiments</strong>
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            <a class="nav-link collapsed" href="/salaires"  data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class='fas fa-wallet' style='font-size:28px;color:rgb(78, 143, 241)'></i></div>
                              <strong>  salaires</strong>
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            <a class="nav-link collapsed" href="/historiques"  data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class='fas fa-file-signature' style='font-size:29px;color:rgb(78, 143, 241)'></i></div>
                              <strong>  historiques</strong>
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                                 </div>
                    </div>
                   
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main > <font size="+5" style="position: relative;">&nbsp;&nbsp;ADMIN DASHBORD</font>
                    <div class="row">
                        <div class="col-xl-3 col-md-6 offset-lg-1">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">les taches</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="lesdates">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">formateurs</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="/lesdetaillesfor">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Success Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
<br>
                    <font size="+1" class="offset-lg-0.5">Voici la liste des utilisateurs de notre application, le nombre 1 dans la colonne 'is_admin' concerne l'administrateur et qui ont une case vide se sont des normaux utilisateurs </font>
                    @extends('template') 
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>emil</th>
                                    <th></th>
                            <th></th>
                            <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td><strong>{{ $user->name }}</strong></td>
                                    <td><strong>{{ $user->email }}</strong></td>
                                <td><a class="button is-primary" href="{{ route('users.show', $user->id) }}">Voir</a></td>
                                <td><a class="button is-warning" href="{{ route('users.edit', $user->id) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button is-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
                </main>
                
            
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>


                    @else
                    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/user1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Gestion centre de formation</title>
</head>
<body>
    
    


        <header>
        <a href="https://webcinq.com/" class="logo">Centre webcinq </a>
         @if (Route::has('login'))
                <nav class="navigation">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Accueil</a>
                        </header> @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Connexion</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">S'inscrire</a>
                        @endif
                        
                    @endauth
                
            @endif
           &nbsp;
 
            
         
            </nav>
        
       
    </header>

    

    <section class="main">
        <div>
            <h2>Salut à tous <br><span>Bienvenu à notre plateforme</span> </h2>
            <h3>l'étude est la mère de la connaissance</h3>
            <a href="https://webcinq.com/" class="main-btn">Visitez notre société</a>
            <div class="social-icons">
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.youtube.com/c/zakariatalebessalama"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/webcinqmarrakech"><i class="fab fa-facebook"></i></a>

            </div>
        </div>

    </section>

    <section class="cards" id="services">
        <h2 class="title">Serivce</h2>
        <div class="content">
            <div class="card">
                <div class="icon">
                <i class="fas fa-phone"></i>

                </div>
                <div class="info">
                    <h3>Phone</h3>
                    <P>+212674717471</P>
            </div>

          
            </div>

            <div class="card">
                <div class="icon">
                <i class="far fa-calendar"></i>

                </div>
                <div class="info">
                    <h3>Email</h3>
                    <a href=/niveaux>contact@webcinq.com</a>
                    
            </div>

          
            </div>

            <div class="card">
                <div class="icon">

                <i class="fas fa-location-arrow"></i>
                
                </div>
                <div class="info">
                    <h3>Localisation</h3>
                    <a href="https://www.bing.com/maps?&ty=18&q=webcinq%20&ss=ypid.YN8111x14525492401939045372&ppois=31.65468978881836_-8.002904891967773_webcinq%20_YN8111x14525492401939045372~&cp=31.65469~-8.002905&lvl=16&v=2&sV=1&FORM=SNAPST">Marrakech , Avenue allal el Fassi  Lot RATMA n90 app2</a>
                    
            </div>

          
            </div>


        </div>
    </section>
</body>
</html>

                    
                    @endif
