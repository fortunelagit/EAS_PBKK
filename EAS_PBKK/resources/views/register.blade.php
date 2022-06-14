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
            <a href="{{ route('main') }}" lass="navbar-brand">
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
                            <a href="{{ route('main') }}" class="nav-link" >Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="nav-link" >About</a>
                        </li>
                          <li class="nav-item">
                            <a class="nav-link text-black">Review</a>
                        </li>
                         <li class="nav-item">
                            <a href="#" class="nav-link  text-black ">Catalog</a>
                        </li>
                        <li>   
                            <a href="{{ route('login') }}" class="nav-link">Log in</a>
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
                </div> <br>
                <div class="form-group">
                    <label for="InputEmail">Email address</label>
                    <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                </div> <br>
                <div class="form-group">
                    <label for="InputContact">Contact Number</label>
                    <input type="contact" class="form-control" id="InputContact" placeholder="Enter Contact Number">
                </div> <br>
                <div class="form-group">
                    <label for="InputPassword">Password</label>
                    <input type="password" class="form-control" id="InputPassword" aria-describedby="passwordHelp" placeholder="Enter Password">
                    <small id="passwordHelp" class="form-text text-muted">Password needs to consist of at least 8 number or character.</small>
                </div> 
                <br>
                <button type="submit " class="btn btn-primary">Submit</button> <br>
                <small id="noAccountHelp" class="form-text text-muted">Already have an account?</small>
                <small> <a href="{{ url('/login') }}" class="text-decoration-none">Login here.</a> </small>
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
