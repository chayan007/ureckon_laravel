<!doctype html>
<html lang="en">

<head>
    <title>Ureckon 2019 | Profile</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">

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
                <a href="/user/events" class="disc l4">
                  <div>Events</div>
                </a>
                <a class="disc l5 toggle">
                  Menu
                </a>
        </nav>

    <div class="container container__profile">
        <div id="profile" class="card card-body bg-light">
            <div class="row">
                <div class="col-md-4">
                        <img src="{{ Storage::url(\Illuminate\Support\Facades\Auth::user()->img_url) }}" alt="profilepic" class="img__profile img-thumbnail img-fluid">
                        <div class="input-group mt-3">
                        <div class="custom-file">
                            <form action="/user/uploadDP/{{ \Illuminate\Support\Facades\Auth::id() }}" method="POST" enctype="multipart/form-data" style="display: flex;">
                                @csrf
                            <input type="file" class="custom-file-input" id="inputGroupFile04" name="image" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" style="color:#000;width: 70%;" for="inputGroupFile04">Upload Profile Picture</label>
                                <div class="input-group-append">
                                    <button class="btn btn-info" type="submit" id="inputGroupFileAddon04" style="margin-left: 20px;">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- <div class="input-group-append">
                            <button class="btn btn-primary" type="button" id="inputGroupFileAddon04">Button</button>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-8">
                    <h2 id="name">{{ \Illuminate\Support\Facades\Auth::user()->name }}</h2>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Username: </strong>{{ \Illuminate\Support\Facades\Auth::user()->username }}</li>
                        <li class="list-group-item"><strong>Institute name: </strong>{{ \Illuminate\Support\Facades\Auth::user()->institute }}</li>
                        <li class="list-group-item"><strong>Year: </strong>{{ \Illuminate\Support\Facades\Auth::user()->year }}</li>
                        <li class="list-group-item"><strong>Phone Number: </strong>{{ \Illuminate\Support\Facades\Auth::user()->phone }}</li>
                        <li class="list-group-item"><strong>Email: </strong>{{ \Illuminate\Support\Facades\Auth::user()->email }}</li>
                        <li class="list-group-item eventsselect"><strong>Events Registered: </strong>
                            <select id="eventSelector" class="custom-select custom-select-sm mb-3" onchange="getMembers(this)">
                                <option value="ps">Select Team</option>
                                @foreach($participants as $participant)
                                    <option value="ps">{{ $participant->team }}</option>
                                @endforeach
                                <!-- <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option> -->
                            </select>

                        </li>
                        <span id="memberSection">
                            <li id="member1-list" class="list-group-item"><strong>Member 1: </strong><span id="member1"></span></li>
                            <li id="member2-list" class="list-group-item"><strong>Member 2: </strong><span id="member2"></span></li>
                            <li id="member3-list" class="list-group-item"><strong>Member 3: </strong><span id="member3"></span></li>
                            <li id="member4-list" class="list-group-item"><strong>Member 4: </strong><span id="member4"></span></li>
                            <li id="member5-list" class="list-group-item"><strong>Member 5: </strong><span id="member5"></span></li>
                        </span>
                    </ul>
                </div>
                <a name="" id="" class="btn btn-info btn-block" href="/user/events" role="button">Events Page</a>
                <a name="" id="" class="btn btn-info btn-block" href="/user/logout" role="button">Logout</a>
            </div>

        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <script src="{{ asset('js/profile.js')}}"></script>
    <script src="{{ asset('js/Modules/header.js')}}"></script>
</body>

</html>
