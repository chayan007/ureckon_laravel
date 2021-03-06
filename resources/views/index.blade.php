<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ureckon | 2019</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('scss/3-Modules/hover.css')}}">
    <link rel="shortcut icon" href="{{ asset('images/Asset 14.png')}}" type="image/x-icon">
    <script>document.documentElement.className = 'js';</script>
</head>
<body>



      <main class="body">
        <div class="logo">
          <div class="logo__UEM">
              <img class="logo__UEM" src="{{asset('images/UEM-IEM/UEM_03.png')}}" alt="">
          </div>
          <div class="logo__ureckon">
              <img  class="logo__ureckon" src="{{asset('images/Asset 67.png')}}"  alt="">
              <h6>In association with</h6>
              <img style="width:50%; height: auto;" class="logo__UEM" src="{{asset('images/telegraph.png')}}" alt="">
          </div>
          <div class="logo__IEM">
              <img  class="logo__IEM" src="{{asset('images/UEM-IEM/IEM_03.png')}}"  alt="">
          </div>
        </div>

        <div class="home__logo-link">
            <div class="home__login">
                <a href="/signin" style="text-decoration: none; color: #fff;"><i class="fas fa-user"></i>Login</a>
            </div> 
            <div class="home-btn">
                <i class="fas fa-flag home-icon">Notifications</i>
           
            </div>  
        </div>
         
          <div class="home-drawer home-drawer-right"> 
            <span class="notification__header">Notifications</span>
            <div class="close-btn">
              <i class="fas fa-times close-icon"></i>
            </div>
            <p class="notification__text">Regsitration is Live!!!</p>
</div>

<div class="title home__hero">
            <h3>23rd - 24th February</h3>
            <h1 data-text="2019" class=" glitch glitch--v1">ureckon</h1>
            <h3 class="home__hero-subtext">The Annual TechnoManagement Festival
                <a class="home__hero-subtext-arrow" data-scroll href="#home__hide"><span></span></a>
            </h3>
        </div>
 
        <div class="home__hide" id="home__hide">
          <section class="content">
            <div class="grid grid--effect-pollux">
                <a href="/events" class="grid__item grid__item--c1">
                    <div class="stack">
                        <div class="stack__deco"></div>
                        <div class="stack__deco"></div>
                        <div class="stack__deco"></div>
                        <div class="stack__deco"></div>
                        <div class="stack__figure">
                            <img class="stack__img" src="{{ asset('/images/events.jpeg')}}" alt="Image" />
                        </div>
                    </div>
                    <div class="grid__item-caption">
                        <h3 class="grid__item-title">Events</h3>
                        <div class="column column--left">
                  
                        </div>
                        <div class="column column--right">
                          
                        </div>
                    </div>
                </a>
                <a href="/workshops" class="grid__item grid__item--c2">
                    <div class="stack">
                        <div class="stack__deco"></div>
                        <div class="stack__deco"></div>
                        <div class="stack__deco"></div>
                        <div class="stack__deco"></div>
                        <div class="stack__figure">
                            <img class="stack__img" src="{{ asset('/images/workshops.png')}}" alt="Image" />
                        </div>
                    </div>
                    <div class="grid__item-caption">
                        <h3 class="grid__item-title">Workshops</h3>
                        <div class="column column--left">
                           
                        </div>
                        <div class="column column--right">
                           
                        </div>
                    </div>
                </a>
                <a href="/talks" class="grid__item grid__item--c3">
                    <div class="stack">
                        <div class="stack__deco"></div>
                        <div class="stack__deco"></div>
                        <div class="stack__deco"></div>
                        <div class="stack__deco"></div>
                        <div class="stack__figure">
                            <img class="stack__img" src="{{ asset('/images/talks.jpeg')}}" alt="Image" />
                        </div>
                    </div>
                    <div class="grid__item-caption">
                        <h3 class="grid__item-title">Talks</h3>
                        <div class="column column--left">
                          
                        </div>
                        <div class="column column--right">
                          
                        </div>
                    </div>
                </a>
            </div>
</section>



                <div class="footer__home">
                  <a class="footer__home-aboutus" href="/about">ABOUT US</a>
                  <a class="footer__home-partners" href="/partners">PARTNERS</a>
                  <a class="footer__home-team" href="/team">TEAM</a>
                  <a class="footer__home-dev" href="/web">DEV</a>
                  <a class="footer__home-UOSC" href="http://uosc.ureckon.org/">UOSC</a>
                  <a class="footer__home-others" href="/gallery">GALLERY</a>
              </div>

      </main>













      <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.1/lodash.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.js" charset="utf-8"></script>
      <script src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
      <script src="https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/EasePack.min.js"></script>
      <script src="https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/rAF.js"></script>
      <script src="https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/TweenLite.min.js"></script>
      <script src="{{ asset('js/anime.min.js')}}"></script>
      <script src="{{ asset('js/Modules/smooth-scroll.js')}}"></script>
      <script src="{{ asset('js/Modules/particles.js')}}"></script>
      <script src="{{ asset('js/home.js')}}"></script>
        <script>
            (function () {
                [].slice.call(document.querySelectorAll('.grid--effect-vega > .grid__item')).forEach(function (stackEl) {
                    new VegaFx(stackEl);
                });
                [].slice.call(document.querySelectorAll('.grid--effect-castor > .grid__item')).forEach(function (stackEl) {
                    new CastorFx(stackEl);
                });
                [].slice.call(document.querySelectorAll('.grid--effect-hamal > .grid__item')).forEach(function (stackEl) {
                    new HamalFx(stackEl);
                });
                [].slice.call(document.querySelectorAll('.grid--effect-polaris > .grid__item')).forEach(function (stackEl) {
                    new PolarisFx(stackEl);
                });
                [].slice.call(document.querySelectorAll('.grid--effect-alphard > .grid__item')).forEach(function (stackEl) {
                    new AlphardFx(stackEl);
                });
                [].slice.call(document.querySelectorAll('.grid--effect-altair > .grid__item')).forEach(function (stackEl) {
                    new AltairFx(stackEl);
                });
                [].slice.call(document.querySelectorAll('.grid--effect-rigel > .grid__item')).forEach(function (stackEl) {
                    new RigelFx(stackEl);
                });
                [].slice.call(document.querySelectorAll('.grid--effect-canopus > .grid__item')).forEach(function (stackEl) {
                    new CanopusFx(stackEl);
                });
                [].slice.call(document.querySelectorAll('.grid--effect-pollux > .grid__item')).forEach(function (stackEl) {
                    new PolluxFx(stackEl);
                });
                [].slice.call(document.querySelectorAll('.grid--effect-deneb > .grid__item')).forEach(function (stackEl) {
                    new DenebFx(stackEl);
                });
            })();
        </script>
</body>
</html>
