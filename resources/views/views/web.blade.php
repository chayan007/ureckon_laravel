<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ureckon | Team Web</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('scss/3-Modules/hover.css')}}">
    <link rel="shortcut icon" href="{{ asset('images/Asset 14.png')}}" type="image/x-icon">
</head>
<body>

    <nav class="top-right open navbar__links">
        <a href="views/aboutus.html" class="disc l1">
          <div>About Us</div>
        </a>
        <a href="views/talks.html" class="disc l2">
          <div>Talks</div>
        </a>
        <a href="views/workshops.html" class="disc l3">
          <div>Workshop</div>
        </a>
        <a href="views/events.html" class="disc l4">
          <div>Events</div>
        </a>
        <a class="disc l5 toggle">
          Menu
        </a>
</nav>

    <div class="web">
        <div class="container">
            <div  class="web__backdrop">
                    <div data-tilt class="display-4 web__backdrop-title">Karyakarta!</div>
                    <div class="web__backdrop-subtitle"></div>
            </div>
            <div class="grid">
                <figure class="effect-apollo">
                    <img src="https://source.unsplash.com/random" alt="img18" />
                    <figcaption>
                        <h2>Hrithik<span> Naha</span></h2>
                        <p>Front End</p>
                        <a href="https://instagram.com/hrithiknaha">View more</a>
                    </figcaption>
                </figure>
                <figure class="effect-apollo">
                    <img src="https://source.unsplash.com/random" alt="img22" />
                    <figcaption>
                        <h2>Sayan <span>Das</span></h2>
                        <p>Front End</p>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
                <figure class="effect-apollo">
                    <img src="https://source.unsplash.com/random" alt="img18" />
                    <figcaption>
                        <h2>Somsubhra <span>Das</span></h2>
                        <p>Front End</p>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
                <figure class="effect-apollo">
                    <img src="https://source.unsplash.com/random" alt="img22" />
                    <figcaption>
                        <h2>Abhishek <span>Madhu</span></h2>
                        <p>Back End</p>
                        <a href="#">View more</a>
                    </figcaption>
                </figure>
                <figure class="effect-apollo">
                  <img src="https://source.unsplash.com/random" alt="img22" />
                  <figcaption>
                      <h2>Chayan <span>Dutta</span></h2>
                      <p>Back End</p>
                      <a href="#">View more</a>
                  </figcaption>
              </figure>
            </div>
        </div>
    </div>

    <footer class="footer footer__web">
        <div class="container">
            <div class="footer__aboutus-links">
                <div>
                  <h6 >
                    <a href="./aboutus.html">About us</a>
                  </h6>
                </div>
                <div >
                  <h6 >
                    <a href="./partners.html">Partners</a>
                  </h6>
                </div>
                <div >
                  <h6 >
                    <a href="./teams.html">Team</a>
                  </h6>
                </div>
                <div >
                  <h6 >
                    <a href="./web.html">Dev</a>
                  </h6>
                </div>
                <div >
                  <h6 >
                    <a href="http://uosc.ureckon.org/">UOSC</a>
                  </h6>
                </div>
              </div>
          <hr class="footer__web-line">
          <div>
          <div class="footer__web-text">
              <p style="line-height: 1.7rem">URECKON is the technical fest of UEM, Kolkata.</p>
            </div>
          </div>
            <div >
              <div class="footer__web-socials">
                <!-- Facebook -->
                <a href="#" class="fb-ic">
                  <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
                </a>
                <!-- Twitter -->
                <a href="#" class="tw-ic">
                  <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
                </a>
                <!-- Google +-->
                <a href="#" class="gplus-ic">
                  <i class="fab fa-google-plus-g fa-lg white-text mr-4"> </i>
                </a>
                <!--Linkedin -->
                <a href="#" class="li-ic">
                  <i class="fab fa-linkedin-in fa-lg white-text mr-4"> </i>
                </a>
                <!--Instagram-->
                <a href="#" class="ins-ic">
                  <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
                </a>
                <!--Pinterest-->
                <a href="#" class="pin-ic">
                  <i class="fab fa-pinterest fa-lg white-text"> </i>
                </a>
              </div>
            </div>
           </div>
        </div>
        <div class="footer__web-copyright">© 2019 Copyright:
          <a href="https://mdbootstrap.com/education/bootstrap/">Ureckon.org</a>
        </div>
      </footer>


    <script>
        // For Demo purposes only (show hover effect on mobile devices)
        [].slice.call(document.querySelectorAll('a[href="#"')).forEach(function (el) {
            el.addEventListener('click', function (ev) { ev.preventDefault(); });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.1/lodash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.js" charset="utf-8"></script>
    <script src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script>
    <script src="{{ asset('js/Modules/smooth-scroll.js')}}"></script>
    <script src="{{ asset('js/web.js')}}"></script>
    <script src="{{ asset('js/Modules/header.js')}}"></script>

</body>
</html>
