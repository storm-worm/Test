
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
       


</style>
</head>
<body>


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
    <body >
<div class="card-body">
    
</div>
</div>
</div><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>


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
