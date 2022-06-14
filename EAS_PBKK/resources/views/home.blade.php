<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/site.css"/>
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm bg-white border-bottom box-shadow mb-3">
            <a href="{{ route('main') }}" class="navbar-brand">
                <img src="css/images/logo.png" class="logo h-75 w-75" alt="logo">
            </a>
            <div class="container-fluid ">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between text-black">
                    <ul class="navbar-nav flex-grow-1 d-flex justify-content-end">
                        <li class="nav-item">
                            <a href="{{route('main')}}" class="nav-link" >Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('about')}}" class="nav-link" >About</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link text-black ">Catalog</a>
                        </li>
                        <li>
                            <a href="{{ route('login') }}" class="nav-link">Log in</a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        </li>
                    </ul>
                    

                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <main role="main" class="pb-3">
           
        </main>
    </div>

    <section id="main">
        <div id="Carousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#Carousel" data-slide-to="0" class="active"></li>
            <li data-target="#Carousel" data-slide-to="1"></li>
            <li data-target="#Carousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item carousel-image-1 active">
              <div class="container">
                <div class="carousel-caption d-none d-sm-block mb-5">
                    <h1 class="display-3 h-color">Melayani Booking</h1>
                    <p class="lead">Kini booking hotel dan gedung lebih mudah dengan Simple Booking</p>
                    
                    <a href="" class="btn btn-color slide-btn btn-lg">Sewa Sekarang</a>
                    
                </div>
              </div>
            </div>
    
            <div class="carousel-item carousel-image-2">
              <div class="container">
                <div class="carousel-caption d-none d-sm-block mb-5">
                    <h1 class="display-3 h-color">Jaringan Yang Luas</h1>
                    <p class="lead">Memiliki jangkauan ke seluruh Indonesia</p>
                    <a href="" class="btn btn-color slide-btn btn-lg">Lihat Katalog</a>
                    

                </div>
              </div>
            </div>
    
            <div class="carousel-item carousel-image-3">
              <div class="container">
                <div class="carousel-caption d-none d-sm-block  mb-5">
                    <h1 class="display-3 h-color">Punya pertanyaan?</h1>
                    <p class="lead">Tanyakan kepada admin kami</p>
                    <a href="" class="btn btn-color slide-btn btn-lg">Bantuan</a>
                    
                </div>
              </div>
            </div>
        </div>
        
    
        <a href="#Carousel" data-slide="prev" class="carousel-control-prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
    
        <a href="#Carousel" data-slide="next" class="carousel-control-next">
            <span class="carousel-control-next-icon"></span>
        </a>
      </section>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/site.js"></script>

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>
