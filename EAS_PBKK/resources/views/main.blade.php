<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/site.css"/>
    <link rel="stylesheet" href="js/site.js"/>
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a href="{{ route('home') }}" class="navbar-brand">
                <img src="css/images/logo.png" class="logo h-75 w-75" alt="logo">
            </a>
            <div class="container-fluid ">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between text-black">
                    <ul class="navbar-nav flex-grow-1 d-flex justify-content-end mr-auto">
                        <li class="nav-item">
                            <a class="nav-link active" >Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('about')}}" class="nav-link" >About</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Log in</a>
                        </li>
                        <li class="nav-item">
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

    
    <br><br>
    <form action="" class="dp-10">
        <h4 class="form-row container d-flex flex-column col-md-5">Formulir Booking</h4><br>
        <div class="form-row container d-flex flex-column col-md-5">
            <div class="form-group">
                <label for="subjectInput">Jenis Acara</label>
                <input type="text" class="form-control" id="subject">
            </div>
        </div><br>

        <div class="container parent form-row d-flex flex-column col-md-5">
            <label for="subjectInput">Jenis Ruang</label><br>
            <div class="row">
                <div class='col text-center'>
                    <input type="radio" name="imgbackground" id="img1" class="d-none imgbgchk" value="">
                    <label for="img1">
                        <img src="https://c8.alamy.com/comp/CF6GC9/interior-and-open-front-entrance-in-conference-room-front-view-CF6GC9.jpg" alt="Image 1">
                        <div class="tick_container">
                            <div class="tick"><i class="fa fa-check"></i></div>
                        </div>
                    </label>
                    <label for="img1">Conference Room</label>
                </div>
                <div class='col text-center'>
                    <input type="radio" name="imgbackground" id="img2" class="d-none imgbgchk" value="">
                    <label for="img2">
                        <img src="https://whatsnewindonesia.com/jakarta/wp-content/uploads/sites/2/2018/07/ballroom-westin1-1280x720.jpg" alt="Image 2">
                        <div class="tick_container">
                            <div class="tick"><i class="fa fa-check"></i></div>
                        </div>
                    </label>
                    <label for="img2">Ballroom</label>
                </div>
                <div class='col text-center'>
                    <input type="radio" name="imgbackground" id="img3" class="d-none imgbgchk" value="">
                    <label for="img3">
                        <img src="https://img.inews.co.id/files/inews_new/2021/11/22/Omah_Pakem.jpg" alt="Image 3">
                        <div class="tick_container">
                            <div class="tick"><i class="fa fa-check"></i></div>
                        </div>
                    </label>
                    <label for="img3">Outdoor Venue</label>
                </div>
            </div>
        </div>
        <br>
        <div class="form-row container d-flex flex-column col-md-5">
            <div class="col-md-5 d-flex flex-column">
                <div class="form-group">
                    <label for="startdateInput">Tanggal Mulai</label>
                    <div class="input-group date" id="datetimepicker1">
                        <input type="date" class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div><br>
            <div class="col-md-5 d-flex flex-column">
                <div class="form-group">
                    <label for="finishdateInput">Tanggal Berakhir</label>
                    <div class="input-group date" id='datetimepicker2'>
                        <input type="date" class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div><br>
        
        <div class="form-row container d-flex flex-column col-md-5">
            <div class="form-group">
                <label for="durationInput">Durasi</label>
                <input type="text" class="form-control" id="duration">
            </div>
        </div><br>
        <div class="form-row container d-flex flex-column col-md-5">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Keterangan Tambahan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div><br>
        <div class="form-row container d-flex flex-column col-md-5">
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </div>
    </form>
    
    <script>
        $(function () {
            $('#datetimepicker1').datetimepicker();
            $('#datetimepicker2').datetimepicker({useCurrent: false});
            $("#datetimepicker1").on("dp.change", function (e) {
                $('#datetimepicker2').data("DateTimePicker").minDate(e.date);
            });
            $("#datetimepicker2").on("dp.change", function (e) {
                $('#datetimepicker1').data("DateTimePicker").maxDate(e.date);
            });
        });
    </script>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/site.js"></script>

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
</body>
</html>
