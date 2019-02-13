<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ureckon | Workshops</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('scss/3-Modules/hover.css')}}">
    <link rel="shortcut icon" href="{{ asset('images/Asset 14.png')}}" type="image/x-icon">
</head>
<body>
    
    <nav class="top-right open navbar__links">
        <a href="{{ asset('views/aboutus.html')}}" class="disc l1">
          <div>About Us</div>
        </a>
        <a href="{{ asset('views/talks.html')}}" class="disc l2">
          <div>Talks</div>
        </a>
        <a href="{{ asset('views/workshops.html')}}" class="disc l3">
          <div>Workshop</div>
        </a>
        <a href="{{ asset('views/events.html')}}" class="disc l4">
          <div>Events</div>
        </a>
        <a class="disc l5 toggle">
          Menu
        </a>
</nav>

	<div  class="background__image-workshops"></div>
	<div data-tilt class="hero">
		<h2 class="hero__title ">Workshop Information Page!</h2>
		<p class="hero__subtitle lead">Learn a thing or two at the Workshops of URECKON.</p>
        <a data-scroll href="#workshops-page">
            <i class="hero__arrow fas fa-angle-down"></i>
        </a>
        <!-- <div class="hero__workshops">
                <a data-scroll href="#workshops-page__content">
                    <i class="fas fa-robot"></i>
                    <span class="tooltiptext">content</span>
                </a>

                <a data-scroll href="#workshops-page__coding">
                        <i class="fas fa-code"></i>
                        <span class="tooltiptext">Coding</span>
                    </a>
                
                <a data-scroll href="#workshops-page__gaming">
                    <i class="fas fa-gamepad"></i>
                    <span class="tooltiptext">Gaming</span>
                </a>
                
        </div> -->
    </div>

     <div class="container">
        <div id="workshops-page" class="workshops-page">
            <section id="workshops-page__content" class="workshops-page__content">
                <h3 class="workshops-page__content-title display-4">
			<center>Kaam se saath Certificate Paaye!</center>
                </h3>
                <div class="workshops-page__content-cards">
                    <div class="card">
                            <img src="{{ asset('images/uion.png')}}" class="card-img-top workshops-page__content-cards-image" alt="workshops pictures">
                            <div class="card-body">
                                <h4 class="card-title">Uni On'19<div  class="float-right workshops-page__content-badge badge badge-secondary">Workshops</div></h4>
                                <p class="card-text lead">2 Day Unity Game Development Workshop <br> <strong>Date : 2nd - 3rd Feb</strong></p>
                             
                                <a href="#" class="btn btn-primary float-right hvr-buzz">Register</a>
                            </div>
                    </div>
                    <div class="card">
                            <img src="{{ asset('images/iot.jpg')}}" class="card-img-top workshops-page__content-cards-image" alt="workshops pictures">
                            <div class="card-body">
                                <h4 class="card-title">Industry 4.0<div  class="float-right workshops-page__content-badge badge badge-secondary">Workshops</div></h4>
                                <p class="card-text lead">One Day Workshop on IOT & Home Automation by Skubotics <br><strong>Date : 16th Feb</strong></p>
                                
                                <a href="http://ureckon.org/skubotics" class="btn btn-primary float-right hvr-buzz">Register</a>
                            </div>
                    </div>
                </div> 
                <hr class="line-break">
            </section>
        </div>
    </div>
        
    <footer class="footer footer__workshop">
        <div class="container">
            <div class="footer__aboutus-links">
                <div>
                  <h6 >
                    <a href="/aboutus">About</a>
                  </h6>
                </div>
                <div >
                  <h6 >
                    <a href="/partners">Partners</a>
                  </h6>
                </div>
                <div >
                  <h6 >
                    <a href="/teams">Team</a>
                  </h6>
                </div>
                <div >
                  <h6 >
                    <a href="/web]">Dev</a>
                  </h6>
                </div>
                <div >
                  <h6 >
                    <a href="http://uosc.ureckon.org/">UOSC</a>
                  </h6>
                </div>
              </div>
          <hr class="footer__workshop-line">
          <div>
          <div class="footer__workshop-text">
              <p style="line-height: 1.7rem">Ureckon-The Annual TechnoManagement Festival of University of Engineering & Management, Kolkata.</p>
            </div>
          </div>
            <div >
              <div class="footer__workshop-socials">
                <!-- Facebook -->
                <a href="https://facebook.com/ureckon.uemk" class="fb-ic">
                  <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
                </a>
                <!-- Twitter -->
                <a href="https://twitter.com/Ureckon_Uemk" class="tw-ic">
                  <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
                </a>
                <!--Linkedin -->
                <a href="https://linkedin.com/company/ureckon" class="li-ic">
                  <i class="fab fa-linkedin-in fa-lg white-text mr-4"> </i>
                </a>
                <!--Instagram-->
                <a href="https://instagram.com/ureckon.uemk" class="ins-ic">
                  <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
                </a>
                <!--Youtube-->
                <a href="https://youtube.com/c/UreckonUEMKolkata" class="you-ic">
                  <i class="fab fa-youtube fa-lg white-text"> </i>
                </a>
              </div>
            </div>
           </div>
        </div>
        <div class="footer__workshop-copyright">© 2019 Copyright:
          <a href="https://ureckon.org">Ureckon.org</a>
        </div>
      </footer>



    
    


    
    
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.1/lodash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.js" charset="utf-8"></script>
    <script src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script>
    <script src="{{ asset('js/Modules/smooth-scroll.js')}}"></script>
    <script src="{{ asset('js/workshops.js')}}"></script> 
    <script src="{{ asset('js/footer.js')}}"></script>
    <script src="{{ asset('js/Modules/header.js')}}"></script>
    
</body>
</html>
