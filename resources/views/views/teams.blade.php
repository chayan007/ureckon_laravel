<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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


	<div  class="background__image-teams"></div>
	<div data-tilt class="hero">
		<h2 class="hero__title ">Our Ecstatic Team</h2>
		<p class="hero__subtitle lead"></p>
        <a data-scroll href="#teams-page">
            <i class="hero__arrow fas fa-angle-down"></i>
        </a>
    </div>

     <div class="container">
        <div id="teams-page" class="teams-page">
            <section id="teams-page__head-teacher" class="teams-page__head-teacher">
                <h3 class="teams-page__head-teacher-title display-4">
			<center>Faculty Heads</center>
                </h3>
                <div class="teams-page__head-teacher-cards">
                    <div class="card card__teams">
                        <img src="{{ asset('images/teams/Faculty/Susmita Mukherjee.jpeg')}}" class="rounded__images card-img-top teams-page__head-teacher-cards-image" alt="teams pictures">
                        <div class="teams-page__head-teacher-cards-body">
                            <h4 class="card-title teams-page__head-teacher-cards-body-name">Prof. Susmita Mukherjee</h4>
                            <p class="card-text lead teams-page__head-teacher-cards-body-title">Chief Faculty Co-ordinator</p>
                        </div>
                        <div class="teams-page__head-teacher-cards-social">
                            <a href="#">susmita.mukherjee@uem.edu.in</a>
                        </div>
                    </div>
                    <div class="card card__teams">
                        <img src="{{ asset('images/teams/Faculty/Bipasha Mukhopadhyay.jpeg')}}" class="rounded__images card-img-top teams-page__head-teacher-cards-image" alt="teams pictures">
                        <div class="teams-page__head-teacher-cards-body">
                            <h4 class="card-title teams-page__head-teacher-cards-body-name">Prof. Bipasha Mukhopadhyay</h4>
                            <p class="card-text lead teams-page__head-teacher-cards-body-title">Faculty Co-ordinator</p>
                        </div>
                        <div class="teams-page__head-teacher-cards-social">
                            <a href="#">bipasha.mukherjee@uem.edu.in</a>
                        </div>
                    </div>
                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__head-teacher-cards-image" alt="teams pictures">
                        <div class="teams-page__head-teacher-cards-body">
                            <h4 class="card-title teams-page__head-teacher-cards-body-name">Prof. Sohini Mukherjee</h4>
                            <p class="card-text lead teams-page__head-teacher-cards-body-title">Faculty Co-ordinator</p>
                        </div>
                        <div class="teams-page__head-teacher-cards-social">
                            <a href="#">sohini.mukherjee@uem.edu.in</a>
                        </div>
                    </div>
                    <div class="card card__teams">
                        <img src="{{ asset('images/teams/Faculty/Prabir Kumar Das.jpeg')}}" class="rounded__images card-img-top teams-page__head-teacher-cards-image" alt="teams pictures">
                        <div class="teams-page__head-teacher-cards-body">
                            <h4 class="card-title teams-page__head-teacher-cards-body-name">Prof. Prabir Kumar Das</h4>
                            <p class="card-text lead teams-page__head-teacher-cards-body-title">Faculty Co-ordinator</p>
                        </div>
                        <div class="teams-page__head-teacher-cards-social">
                            <a href="#">prabir.das@iemcal.com</a>
                        </div>
                    </div>
                    <div class="card card__teams">
                        <img src="{{ asset('images/teams/Faculty/Avijit Bose.jpeg')}}" class="rounded__images card-img-top teams-page__head-teacher-cards-image" alt="teams pictures">
                        <div class="teams-page__head-teacher-cards-body">
                            <h4 class="card-title teams-page__head-teacher-cards-body-name">Prof. Avijit Bose</h4>
                            <p class="card-text lead teams-page__head-teacher-cards-body-title">Faculty Co-ordinator</p>
                        </div>
                        <div class="teams-page__head-teacher-cards-social">
                            <a href="#">avijit.bose@iemcal.com</a>
                        </div>
                    </div>
                </div>
                <hr class="line-break">
            </section>

            <section id="teams-page__core-member" class="teams-page__core-member">
                <h3 class="teams-page__core-member-title display-4">
			<center>Event Core-Members</center>
                </h3>
                <div class="teams-page__core-member-cards">
                    <div class="card card__teams">
                            <img src="https://source.unsplash.com/random" class=" rounded__images card-img-top teams-page__core-member-cards-image" alt="teams pictures">
                            <div class="teams-page__core-member-cards-body">
                                <h4 class="card-title teams-page__core-member-cards-body-name">Sayak Dhar</h4>
                                <p class="card-text lead teams-page__core-member-cards-body-title">Core Member</p>
                            </div>
                            <div class="teams-page__core-member-cards-social">
                                <a href="#">sayak@ureckon.org</a>
				    <a href="#"><i class="fa fa-phone">+91 8013951139</i></a>
				    <br><a href="https://www.linkedin.com/in/sayakdhar"><i class="fab fa-linkedin-in"></i></a>
				    <a href="https://www.facebook.com/sayakd.skid"><i class="fab fa-facebook-f"></i></a>
                            </div>
                    </div>
		             <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class=" rounded__images card-img-top teams-page__core-member-cards-image" alt="teams pictures">
                        <div class="teams-page__core-member-cards-body">
                            <h4 class="card-title teams-page__core-member-cards-body-name">Gourav Chakraborty</h4>
                            <p class="card-text lead teams-page__core-member-cards-body-title">Core Member</p>
                        </div>
                        <div class="teams-page__core-member-cards-social">
                            <a href="#">gourav@ureckon.org</a>
				<a href="#"><i class="fa fa-phone">+91 8777084295</i></a>
                <br><a href="https://www.linkedin.com/in/gourav006/"><i class="fab fa-linkedin-in"></i></a>
				    <a href="https://www.facebook.com/gourav.chakraborty.75641"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
			<div class="card card__teams">
                        <img src="{{ asset('images/teams/Core Team/Debarghya Mukherjee/20181204141035_IMG_2228-01.jpeg')}}" class=" rounded__images card-img-top teams-page__core-member-cards-image" alt="teams pictures">
                        <div class="teams-page__core-member-cards-body">
                            <h4 class="card-title teams-page__core-member-cards-body-name">Debarghya Mukherjee</h4>
                            <p class="card-text lead teams-page__core-member-cards-body-title">Core Member</p>
                        </div>
                        <div class="teams-page__core-member-cards-social">
                            <a href="#">debarghya@ureckon.org</a>
			<a href="#"><i class="fa fa-phone">+91 8961241670</i></a>
            <br><a href="https://www.linkedin.com/in/debarghya-mukherjee-11575912a/"><i class="fab fa-linkedin-in"></i></a>
				    <a href="https://www.facebook.com/debarghya.mukherjee.33"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="{{ asset('images/teams/Core Team/Subhadeep Kundu/FB_IMG_1548432227253.jpg')}}" class=" rounded__images card-img-top teams-page__core-member-cards-image" alt="teams pictures">
                        <div class="teams-page__core-member-cards-body">
                            <h4 class="card-title teams-page__core-member-cards-body-name">Subhadeep Kundu</h4>
                            <p class="card-text lead teams-page__core-member-cards-body-title">Core Member</p>
                        </div>
                        <div class="teams-page__core-member-cards-social">
                            <a href="#">subhadeep@ureckon.org</a>
				<a href="#"><i class="fa fa-phone">+91 7278707250</i></a>
                <br><a href="https://www.linkedin.com/in/subhadeep-kundu-780335148/"><i class="fab fa-linkedin-in"></i></a>
				    <a href="https://www.facebook.com/subho.kundu.37"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>

		<div class="card card__teams">
                        <img src="{{ asset('images/teams/Core Team/Pooja Surana/IMG_20190129_001118.jpg')}}" class=" rounded__images card-img-top teams-page__core-member-cards-image" alt="teams pictures">
                        <div class="teams-page__core-member-cards-body">
                            <h4 class="card-title teams-page__core-member-cards-body-name">Pooja Suruna</h4>
                            <p class="card-text lead teams-page__core-member-cards-body-title">Core Member</p>
                        </div>
                        <div class="teams-page__core-member-cards-social">
                            <a href="#">pooja@ureckon.org</a>
				<a href="#"><i class="fa fa-phone">+91 9508072682</i></a>
                <br><a href="https://www.linkedin.com/in/pooja-surana-3ba114139/"><i class="fab fa-linkedin-in"></i></a>
				    <a href="https://www.facebook.com/pooja.surana.1029"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>


		<div class="card card__teams">
                        <img src="{{ asset('images/teams/Core Team/Souradeep ganguli.jpg')}}" class=" rounded__images card-img-top teams-page__core-member-cards-image" alt="teams pictures">
                        <div class="teams-page__core-member-cards-body">
                            <h4 class="card-title teams-page__core-member-cards-body-name">Souradeep Ganguli</h4>
                            <p class="card-text lead teams-page__core-member-cards-body-title">Core Member</p>
                        </div>
                        <div class="teams-page__core-member-cards-social">
                            <a href="#">souradeep@ureckon.org</a>
				<a href="#"><i class="fa fa-phone">+91 9903891285</i></a>
                <br><a href="https://www.linkedin.com/in/souradeep-ganguli-3b941913b/"><i class="fab fa-linkedin-in"></i></a>
				    <a href="https://www.facebook.com/souradeepg1"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>

                    <div class="card card__teams">
                            <img src="{{ asset('images/teams/Core Team/Ashish/FB_IMG_1539242170334.jpg')}}" class=" rounded__images card-img-top teams-page__core-member-cards-image" alt="teams pictures">
                            <div class="teams-page__core-member-cards-body">
                                <h4 class="card-title teams-page__core-member-cards-body-name">Ashish Gupta</h4>
                                <p class="card-text lead teams-page__core-member-cards-body-title">Core Member</p>
                            </div>
                            <div class="teams-page__core-member-cards-social">
                                <a href="#">ashish@ureckon.org</a>
				<a href="#"><i class="fa fa-phone">+91 9674974638</i></a>
                <br><a href="https://www.linkedin.com/in/ashish-gupta-876883117/"><i class="fab fa-linkedin-in"></i></a>
				    <a href="https://www.facebook.com/ashish.gupta6269?ref=br_rs"><i class="fab fa-facebook-f"></i></a>
                            </div>
                    </div>


                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class=" rounded__images card-img-top teams-page__core-member-cards-image" alt="teams pictures">
                        <div class="teams-page__core-member-cards-body">
                            <h4 class="card-title teams-page__core-member-cards-body-name">Souvik Nandi</h4>
                            <p class="card-text lead teams-page__core-member-cards-body-title">Core Member</p>
                        </div>
                        <div class="teams-page__core-member-cards-social">
                            <a href="#">souvik@ureckon.org</a>
				<a href="#"><i class="fa fa-phone">+91 7407357457</i></a>
                <br><a href="https://www.linkedin.com/in/souviknandi97/"><i class="fab fa-linkedin-in"></i></a>
				    <a href="https://www.facebook.com/souviknandi97"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>


                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class=" rounded__images card-img-top teams-page__core-member-cards-image" alt="teams pictures">
                        <div class="teams-page__core-member-cards-body">
                            <h4 class="card-title teams-page__core-member-cards-body-name">Rajarshi Saha</h4>
                            <p class="card-text lead teams-page__core-member-cards-body-title">Core Member</p>
                        </div>
                        <div class="teams-page__core-member-cards-social">
                            <a href="#">rajarshi@ureckon.org</a>
				<a href="#"><i class="fa fa-phone">+91 8582914271</i></a>
                <br><a href="https://www.linkedin.com/in/rajarshi-saha/"><i class="fab fa-linkedin-in"></i></a>
				    <a href="https://www.facebook.com/rajarshi.saha.50"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>

		<div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class=" rounded__images card-img-top teams-page__core-member-cards-image" alt="teams pictures">
                        <div class="teams-page__core-member-cards-body">
                            <h4 class="card-title teams-page__core-member-cards-body-name">Suruchi Jha</h4>
                            <p class="card-text lead teams-page__core-member-cards-body-title">Core Member</p>
                        </div>
                        <div class="teams-page__core-member-cards-social">
                            <a href="#">suruchi@ureckon.org</a>
				<a href="#"><i class="fa fa-phone">+91 9748612360</i></a>
				<br><a href="https://www.linkedin.com/in/suruchi-jha-0151b7140/"><i class="fab fa-linkedin-in"></i></a>
				<a href="https://www.facebook.com/profile.php?id=100006447307342"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>

		<div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class=" rounded__images card-img-top teams-page__core-member-cards-image" alt="teams pictures">
                        <div class="teams-page__core-member-cards-body">
                            <h4 class="card-title teams-page__core-member-cards-body-name">Srijani Chatterjee</h4>
                            <p class="card-text lead teams-page__core-member-cards-body-title">Core Member</p>
                        </div>
                        <div class="teams-page__core-member-cards-social">
                            <a href="#">srijani.chatterjee@ureckon.org</a>
				<a href="#"><i class="fa fa-phone">+91 9007522975</i></a>
                <br><a href="https://www.linkedin.com/in/srijani-uem-8571b1138/"><i class="fab fa-linkedin-in"></i></a>
				    <a href="https://www.facebook.com/inajirs97"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class=" rounded__images card-img-top teams-page__core-member-cards-image" alt="teams pictures">
                        <div class="teams-page__core-member-cards-body">
                            <h4 class="card-title teams-page__core-member-cards-body-name">Kainat Anjum</h4>
                            <p class="card-text lead teams-page__core-member-cards-body-title">Core Member</p>
                        </div>

                        <div class="teams-page__core-member-cards-social">
                            <a href="#">kainat.anjum@ureckon.org</a>
			        <a href="#"><i class="fa fa-phone">+91 8017297207</i></a>
				    <br><a href="#"><i class="fab fa-linkedin-in"></i></a>
				    <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>





                </div>
                <hr class="line-break">
            </section>

            <section id="teams-page__coordinator" class="teams-page__coordinator">
                <h3 class="teams-page__coordinator-title display-4">
                    Event Co-Ordinators
                </h3>
                <div class="teams-page__coordinator-cards">

                    <div class="card card__teams">
                        <img src="{{ asset('images/teams/Event Coordinator/Sourav Nandy/sourav_nandy.jpg')}}" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Sourav Nandy</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Ureck-A-Thon</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="{{ asset('images/teams/Event Coordinator/Hrihtik Naha Urek-A-Thon/Hrithik Naha.JPG')}}" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Hrithik Naha</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Ureck-A-Thon</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Pritam Dutta</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Ureckon Innovation Challenge- UIC</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Gourav Chakraborty</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Robo League</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Jiten Sinha</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Dirrecion</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Adarsh Kumar Singh</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Dirrecion</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Tathagata Bannerjee</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Dirrecion</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Debarup Sadhukan</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Need For Torque-NFT</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Hemant Kumar Pandit</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Need For Torque-NFT</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="{{ asset('images/teams/Event Coordinator/Saamir Robo Dangal/Saamir.jpeg')}}" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Saamir Haque Molla</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Robo Dangal</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="{{ asset('images/teams/Event Coordinator/Anurag Singh Robo Dangal/Anurag Singh.jpg')}}" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Anurag Singh</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Robo Dangal</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="{{ asset('images/teams/Event Coordinator/')}}" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Souradeep Ganguli</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Robo Dangal</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Pritam Dutta</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Robo Rumble</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="{{ asset('images/teams/Event Coordinator/Shivangam Mookherjee, ECE ( Robo Rumble)/DSC_0231.jpg')}}" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Shivangam Mookherjee</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Robo Rumble</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Bipasha Roy</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Arm Of Hercules</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Somipon Mondal</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Arm Of Hercules</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Riddhiman</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">AeroStorm</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Anushree Roy</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">AeroStorm</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Sovan Polley</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Bridge-O-Nics</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="{{ asset('images/teams/Event Coordinator/Sambit Chakraborty CE3-3/DSC_0017.JPG')}}" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Sambit Chakraborty</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Bridge-O-Nics</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="{{ asset('images/teams/Event Coordinator/Sattwik Das CSE 2D  get set sell/IMG-20190125-WA0015.jpg')}}" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Sattwik Das</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Get Set Sell</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="{{ asset('images/teams/Event Coordinator/Deboleena Das/IMG-20190125-WA0013.jpg')}}" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Deboleena Das</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Get Set Sell</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="{{ asset('images/teams/Event Coordinator/Saptarshi De CSE4A-02/Saptarshi De.jpg')}}" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Saptarshi De</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Spyder</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="{{ asset('images/teams/Event Coordinator/Shalini Guha CSE4A-03/PicsArt_07-24-04.46.06.jpg')}}" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Shalini Guha</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Spyder</a>

                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Shobhan Das</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Code Ranch</a>

                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Sagnik Sengupta</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Code Ranch</a>

                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Sagnik Bhattacharya</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Debugger</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Pratik Goel</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Debugger</a>

                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="{{ asset('images/teams/Event Coordinator/Pushpak Chakraborty 4B/FB_IMG_1548428589168.jpg')}}" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Pushpak Chakraborty</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Counter Strike: GO / 1.6</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="{{ asset('images/teams/Event Coordinator/Rohit Chakraborty /IMG_20190126_150520.jpg')}}" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Rohit Chakraborty</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Counter Strike: GO / 1.6</a>

                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Rounak Adhikary</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">PUBG</a>

                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Abhinaba Bannerjee</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">PUBG</a>

                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="{{ asset('images/teams/Event Coordinator/Soumyadeep Saha (PUBG)/me.jpg')}}" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Soumyadeep Saha</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">PUBG</a>

                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="{{ asset('images/teams/Core Team/Debarghya Mukherjee/20181204141035_IMG_2228-01.jpeg')}}" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Debarghya Roy</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">NFS: Most Wanted</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Subhrodip Mohanto</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">NFS: Most Wanted</a>

                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Richik Gangopadhyay</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">FIFA 11 /19</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Aditya Dalmia</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">FIFA 11 /19</a>

                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Antara Ghosh</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">VR EXHIBITION</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Saswata Dutta</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">VR EXHIBITION</a>

                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="{{ asset('images/teams/Event Coordinator/Swapnendu Amboli/FB_IMG_1503858400502.jpg')}}" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Swapnendu Amboli</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="#"><i class="fas fa-location-arrow"></i></a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Ayan Saha</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Display of Innovation</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Subhrajit Dutta</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Display of Innovation</a>

                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="{{ asset('images/teams/Event Coordinator/Sabyasachi Ganguly - CSE 2B - Think Tech and Urecquiz/9190237.jpg')}}" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Sabyasachi Ganguly</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="#">UreckQuiz</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="{{ asset('images/teams/Event Coordinator/Bhaskarjyaa Chatterjee (Think Tech)/IMG-20170825-WA0037.jpg')}}" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Bhaskarjyaa Chatterjee</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="#">UreckQuiz</a>

                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Arijit Jalui</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="#"><i class="fas fa-location-arrow"></i></a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Tridip Halder</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">Solvero</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Pathikrit Sarkar</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="#"></a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="{{ asset('images/teams/Event Coordinator/Abarna Chatterjee BT2/SquareFit_20181230_14070297.jpg')}}" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Abarna Chatterjee</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">BioteXpression</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="{{ asset('images/teams/Event Coordinator/Ronit Ray CSE4A-19/Ronit Ray.jpg')}}" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Ronit Ray</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">CLUEX</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="{{ asset('images/teams/Event Coordinator/Saptarshi De CSE4A-02/Saptarshi De.jpg')}}" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Saptershi De</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="./events.html">CLUEX</a>

                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Sanjana Sinha</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="#">REGISTRATION DESK</a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Atreyee Chakraborty</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="#">REGISTRATION DESK</a>

                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Avik Roy</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="#">REGISTRATION DESK</a>

                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Arnab Das</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="#"><i class="fas fa-location-arrow"></i></a>
                        </div>
                    </div>

                    <div class="card card__teams">
                        <img src="https://source.unsplash.com/random" class="rounded__images card-img-top teams-page__coordinator-cards-image" alt="teams pictures">
                        <div class="teams-page__coordinator-cards-body">
                            <h4 class="card-title teams-page__coordinator-cards-body-name">Kankana Majumder</h4>
                            <p class="card-text lead teams-page__coordinator-cards-body-title"></p>
                        </div>
                        <div class="teams-page__coordinator-cards-social">
                            <a href="#">REGISTRATION DESK</a>

                        </div>
                    </div>

                </div>
                <hr class="line-break">
            </section>
        </div>
    </div>


    <footer class="footer footer__teams">
        <div class="container">
                <div class="footer__aboutus-links">
                        <div>
                          <h6 >
                            <a href="/about">About us</a>
                          </h6>
                        </div>
                        <div >
                          <h6 >
                            <a href="/partners">Partners</a>
                          </h6>
                        </div>
                        <div >
                          <h6 >
                            <a href="/team">Team</a>
                          </h6>
                        </div>
                        <div >
                          <h6 >
                            <a href="/web">Dev</a>
                          </h6>
                        </div>
                        <div >
                          <h6 >
                            <a href="http://uosc.ureckon.org/">UOSC</a>
                          </h6>
                        </div>
                      </div>
          <hr class="footer__teams-line">
          <div>
          <div class="footer__teams-text">
              <p style="line-height: 1.7rem">URECKON is the technical fest of UEM, Kolkata.</p>
            </div>
          </div>
            <div >
              <div class="footer__teams-socials">
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
        <div class="footer__teams-copyright">© 2019 Copyright:
          <a href="https://mdbootstrap.com/education/bootstrap/">Ureckon.org</a>
        </div>
      </footer>









    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.1/lodash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.js" charset="utf-8"></script>
    <script src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script>
    <script src="{{ asset('js/Modules/smooth-scroll.js')}}"></script>
    <script src="{{ asset('js/teams.js')}}"></script>
    <script src="{{ asset('js/footer.js')}}"></script>
    <script src="{{ asset('js/Modules/header.js')}}"></script>

</body>
</html>
