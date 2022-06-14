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
            <a class="navbar-brand">
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
                            <a href="#" class="nav-link text-black" >Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-black" >About</a>
                        </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link text-black ">Review</a>
                        </li>
                         <li class="nav-item">
                            <a href="#" class="nav-link text-black ">Catalog</a>
                        </li>
                        <li>
                            <p class="nav-link text-black ">Login</p>
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 nav-link text-black">Home</a>
                                    @else
                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline nav-link text-black">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
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

    <div class="row d-flex flex-row justify-content-center">
    <div class="col-md-4 d-flex t-1 b-1">
        <section>
            <form>
                <div class="form-group">
                    <label for="InputUsername">Username</label>
                    <input type="username" class="form-control" id="InputUsername" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="InputEmail">Email address</label>
                    <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="InputContact">Enter Telephone Number</label>
                    <input type="contact" class="form-control" id="InputContact" placeholder="Contact">
                </div>
                <div class="form-group">
                    <label for="InputPassword">Password</label>
                    <input type="password" class="form-control" id="InputPassword" aria-describedby="passwordHelp" placeholder="Password">
                    <small id="passwordHelp" class="form-text text-muted">Password needs to consist of at least 8 number or character.</small>
                </div>
                <br></br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>
    </div>
</div>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/site.js"></script>

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>
