<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ureckon 2019 | Sign Up</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('images/Asset 14.png')}}" type="image/x-icon">
</head>
<body>

        <nav class="top-right open navbar__links">
                <a href="/about" class="disc l1">
                  <div>About Us</div>
                </a>
                <a href="/talks" class="disc l2">
                  <div>Talks</div>
                </a>
                <a href="/workshop" class="disc l3">
                  <div>Workshop</div>
                </a>
                <a href="/events" class="disc l4">
                  <div>Events</div>
                </a>
                <a class="disc l5 toggle">
                  Menu
                </a>
        </nav>

        <div class="back"></div>
        <form action="/register" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" class="form-control" name="username" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Password Again</label>
                <input type="text" class="form-control" name="password_confirmation" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" class="form-control" name="" id="phone" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Institute</label>
                <input type="text" class="form-control" name="" id="institute" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Year</label>
                <input type="text" class="form-control" name="" id="year" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Course</label>
                <input type="text" class="form-control" name="" id="course" aria-describedby="helpId" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

<div class="progress">
        <div class="bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
</div>







    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="{{ asset('js/signup.js')}}"></script>
    <script src="{{ asset('js/Modules/header.js')}}"></script>
</body>
</html>
