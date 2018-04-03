<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }

/****************************************************

*

* @File:      template.php

* @Package:   GetSimple

* @Action:    Twitter Bootstrap for GetSimple CMS

*

*****************************************************/

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The High Street Barber Shop is a friendly professional shop that caters for the haircutting needs of boys and men of all ages. The owner has been working on the High Street since 2008 and endeavours to give complete satisfaction to each and every customer providing haircuts in a friendly, relaxing environment.">
    <meta name="google-site-verification" content="I8aryfqBTYRJi-o7U_EJ2x38hvP_ndfROGZukcRheE0" />
    <meta name="author" content="">
    <link rel="alternate" href="http://thehighstreetbarbershop.co.uk/" hreflang="en" />

    <title>The High Street Barber Shop</title>

    <!-- Bootstrap Core CSS -->
    <link href="theme/High Street Hair Dresser/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="theme/High Street Hair Dresser/css/highStreet.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="theme/High Street Hair Dresser/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>	

	<style>
      #map-container { height: 300px }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" class="index">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                </button>

                <a class="navbar-brand page-scroll" href="#page-top">THE HIGH STREET BARBER SHOP</a>

            </div>



            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">

                    <li class="hidden">

                        <a href="#page-top"></a>

                    </li>

                    <li>

                        <a class="page-scroll" href="#about">About</a>

                    </li>

                    <li>

                        <a class="page-scroll" href="#prices">Prices</a>

                    </li>

                    <li>

                        <a class="page-scroll" href="#findandcontact">Find & Contact us</a>

                    </li>

                </ul>

            </div>

            <!-- /.navbar-collapse -->

        </div>

        <!-- /.container-fluid -->

    </nav>



    <!-- Header -->

    <header>		

        <div class="container">

                <div class="col-lg-12 text-center">

					<div Style="padding: 100px; text-shadow: 1px 1px #000000;">

                    	<h4 class="section-heading">Opening Times</h4>

                    	<h3 class="section-subheading">Monday Closed</h3>

						<h3 class="section-subheading">Tuesday 09:30AM - 06:00PM</h3>

						<h3 class="section-subheading">Wednesday 09:30AM - 06:00PM</h3>

						<h3 class="section-subheading">Thursday 10:30AM - 07:00PM</h3>

						<h3 class="section-subheading">Friday 10:30AM - 07:00PM</h3>

						<h3 class="section-subheading">Saturday 09:00AM - 03:00PM</h3>

						<h3 class="section-subheading">Sunday Closed</h3>
						<p>(Last admittance for haircut is 15 minutes before closing time)</p>
					</div>			

                </div>

            </div>

        </div>

    </header>

    <?php if(get_slogan('Announcement') != "") { ?>

    <div class="container" Style="padding: 10px;">

        <div class="row">

                <div class="alert alert-danger alert-dismissible" role="alert">

                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                   <?php echo get_slogan('Announcement'); ?> 

                </div>
        </div>
    </div>

    <?php } ?>

    <!-- About Section -->

    <section id="about" class="bg-light-gray">

        <div class="container">

            <div class="row">


                <div class="col-lg-12 text-center">

                    <h2 class="section-heading">About</h2>

                </div>

            </div>

            <div class="row">

                <div class="col-md-1"></div>
                <div class="col-md-10">

                    <center><p>The High Street Barber Shop is a friendly professional shop that caters for the haircutting needs of boys and men of all ages. The owner has been working on the High Street since 2008 and endeavours to give complete satisfaction to each and every customer providing haircuts in a friendly, relaxing environment. The shop has two late opening evenings on Thursday and Friday (till 7pm) with street parking and a small car park off Mercer Street.<br>

<strong>A no appointments service is offered, so please feel free to come along for a visit.</strong><br>

The barber shop sells products from American Crew, Tigi Bed Head for Men and The Mens Room Grooming range.<br>

Check on Facebook for any announcements in any changes to shop times etc.</p></center>

                </div>
                <div class="col-md-1"></div>

            </div>

        </div>

    </section>

    <!-- Services Section -->

    <section id="prices">

        <div class="container">

            <div class="row">			

            <div class="col-lg-12 text-center">

                <h2 class="section-heading">Prices</h2>

            </div>

            </div>

            <div class="row text-center">

                <div class="col-md-6">

                    <h3>Gents Cuts & Finish : £9.50</h3><br>

			<h3>Gents Restyle : £11.50</h3><br>

					<h3>Child(Under 14 Years) : £7.40</h3><br>

					<h3>Child(Saturday) : £9.50</h3><br>

					<h3>Clipper(One Grade) : £6.75</h3><br>

					<h3>Clipper(Assorted Grades) : £7.40</h3><br>
                    

                </div>

                <div class="col-md-6">

                    <h3>Over 65's(Tues/Weds Til 1PM) : £5.75</h3><br>

					<h3>Over 65's(All other Times) : £7.00</h3><br>

					<h3>Beard Trim : £3.00</h3><br>

					<h3>Beard Trim(With Haircut) : £1.75</h3><br>

					<h3>Neck & Sideburn Tidy : £2.75</h3><br>
					
					<h3>Wash, Cut & Finish : £11.50</h3><br>

                </div>

            </div>

        </div>

    </section>



    <!-- Contact Section -->

    <section id="findandcontact">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 text-center">

                    <h2 class="section-heading">Find & Contact Us</h2>

                </div>

            </div>

            <div class="row">

				<div style="color: #000000" class="col-md-4"><h1>Address</h1><h3>

    <div itemscope itemtype="http://schema.org/LocalBusiness">
		<p itemprop="name">The High Street Barber Shop</p>
		<p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
		<p itemprop="streetAddress">63 High Street, Newton-le-Willows</p>
		<p itemprop="addressLocality">St Helens</p>
		<p itemprop="addressRegion">Merseyside</p>
		<p itemprop="postalCode">WA12 9SL</p>
		<p itemprop="telephone">01925 296135</p>
		<meta itemprop="latitude" content="53.456952" />
		<meta itemprop="longitude" content="-2.618474" />
	</div></h3></div><div id="map-container" class="col-md-8"></div>

            </div>

        </div>

    </section>



    <footer>

        <div class="container">

            <div class="row">

                <div class="col-md-4">

                    <span class="copyright">Copyright &copy; High Street Barber Shop 2016</span>

                </div>

                <div class="col-md-4">

                    <ul class="list-inline social-buttons">

                        <li><a href="https://www.facebook.com/The-High-Street-Barber-Shop-137912592941831/?fref=ts"><i class="fa fa-facebook"></i></a>

                    </ul>

                </div>

                <div class="col-md-4">

                    <ul class="list-inline quicklinks">

                        <li><a href="http://www.insidific.com">Website by Insidific</a></li>

                    </ul>

                </div>

            </div>

        </div>

    </footer>



    <!-- jQuery -->

    <script src="theme/High Street Hair Dresser/js/jquery.js"></script>



    <!-- Bootstrap Core JavaScript -->

    <script src="theme/High Street Hair Dresser/js/bootstrap.min.js"></script>



    <!-- Plugin JavaScript -->

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <script src="theme/High Street Hair Dresser/js/classie.js"></script>

    <script src="theme/High Street Hair Dresser/js/cbpAnimatedHeader.js"></script>



    <!-- Contact Form JavaScript -->

    <script src="theme/High Street Hair Dresser/js/jqBootstrapValidation.js"></script>

    <script src="theme/High Street Hair Dresser/js/contact_me.js"></script>



    <!-- Custom Theme JavaScript -->

    <script src="theme/High Street Hair Dresser/js/agency.js"></script>

    <script>	

      var map;
      function initMap() {

        map = new google.maps.Map(document.getElementById('map-container'), {
          center: {lat: 53.456952, lng: -2.618474},
          zoom: 16
        });

        var marker = new google.maps.Marker({
          position: {lat: 53.456952, lng: -2.618474},
          map: map,
          title: 'THE HIGH STREET BARBER SHOP'
        });
      }

 

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmBl09BOB0rYSbRd_2Jgf7hx-OUlE3jX8&callback=initMap"    async defer></script>



</body>



</html>
