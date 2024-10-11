<section class=" w3l-header-4 header-sticky">
	<!--header-->


<header id="site-header" class="fixed-top">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark stroke">
				<h1><a class="navbar-brand" href="index.html">
					<span class="fa fa-map-signs"></span> Xplore!
				</a></h1>
				<!-- if logo is image enable this   
			<a class="navbar-brand" href="#index.html">
				<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
			</a> -->
				<button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
					<span class="navbar-toggler-icon fa icon-close fa-times"></span>
					
				</button>
	  
				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav ml-lg-5">
						<li class="nav-item active">
							<a class="nav-link" href="index.php?">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item @@about__active">
							<a class="nav-link" href="index.php?home=about">About</a>
						</li>
						<li class="nav-item @@services__active">
							<a class="nav-link" href="index.php?home=explore">Explore</a>
						</li>
						<li class="nav-item @@contact__active">
							<a class="nav-link" href="index.php?home=contact">Contact</a>
						</li>
					</ul>
				<ul class="navbar-nav ml-auto">
						<li class="nav-item ml-4">
							<a class="nav-link phone" href="tel:+(21)-234-9999"><span class="fa fa-phone"></span> +62 0921 2900</a>
						</li>
						 <li class="nav-item" title="Search"><a href="#search" class="search-search nav-link"><span class="fa fa-search mr-2" aria-hidden="true"></span></a></li>
				<!-- search -->
						 <div class="search-right">
					<!-- search popup -->
					<div id="search" class="pop-overlay">
						<div class="popup">
							<form action="#" method="GET" class="d-flex">
								<input type="search" placeholder="Search.." name="search" required="required" autofocus>
								<button type="submit">Search</button>
							</form>

							<a class="close" href="#close">&times;</a>
						</div>
					</div>
					<!-- /search popup -->
				</div>
					<!--/ search -->
					</ul>
				</div>
				        <!-- toggle switch for light and dark theme -->
						<div class="mobile-position">
							<label class="theme-selector">
							  <input type="checkbox" id="themeToggle">
							  <i class="gg-sun"></i>
							  <i class="gg-moon"></i>
							</label>
						  </div>
						  <!-- //toggle switch for light and dark theme -->
			</nav>
		</div>
	  </header>
	<!--/header-->
</section>
<script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src="assets/js/bootstrap.min.js"></script>
<!--bootstrap working//-->
<!--/MENU-JS-->
<script>
	$(window).on("scroll", function () {
	  var scroll = $(window).scrollTop();
  
	  if (scroll >= 80) {
		$("#site-header").addClass("nav-fixed");
	  } else {
		$("#site-header").removeClass("nav-fixed");
	  }
	});
  
	//Main navigation Active Class Add Remove
	$(".navbar-toggler").on("click", function () {
	  $("header").toggleClass("active");
	});
	$(document).on("ready", function () {
	  if ($(window).width() > 991) {
		$("header").removeClass("active");
	  }
	  $(window).on("resize", function () {
		if ($(window).width() > 991) {
		  $("header").removeClass("active");
		}
	  });
	});
  </script>
  <!--//MENU-JS-->
<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>
<!-- disable body scroll which navbar is in active -->
<!--theme switcher dark and light mode script-->
<script>
	const bodyElement = document.querySelector('body');
	const themeToggle = document.querySelector('#themeToggle');
	const darkModeMql = window.matchMedia('(prefers-color-scheme: dark)');
  
	const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : userPreference(darkModeMql);
  
	if (currentTheme) {
	  bodyElement.classList.add(currentTheme);
  
	  if (currentTheme === 'dark') {
		themeToggle.checked = true;
	  }
	}
  
	function userPreference(e) {
	  if (e.matches) {
		bodyElement.classList.add("dark");
		return "dark"
	  } else {
		bodyElement.classList.remove("dark");
		return ""
	  }
	}
  
	darkModeMql.addListener(userPreference);
  
	function themeSwitcher(e) {
	  if (e.target.checked) {
		bodyElement.classList.add('dark');
		localStorage.setItem('theme', 'dark');
	  } else {
		bodyElement.classList.remove('dark');
		localStorage.setItem('theme', '');
	  }
	}
  
	themeToggle.addEventListener('change', themeSwitcher);
  </script>
  <!--theme switcher dark and light mode script//-->


<section class="w3l-main-slider" id="home">
  <!-- main-slider -->
  <div class="companies20-content">
    
    <div class="owl-one owl-carousel owl-theme">
      <div class="item text-center">
        <li>
          <div class="slider-info banner-view bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mr-auto">
                  <h5>Welcome<br>
                    To Let’s Xplore!</h5>
                  <p>Temukan dunia melalui perjalanan yang tak terlupakan bersama kami! Di Xplore, kami percaya bahwa setiap petualangan adalah kesempatan untuk menjelajahi keindahan, budaya, dan keajaiban alam yang ditawarkan oleh berbagai destinasi di seluruh dunia.</p>
                  <a class="btn btn-theme2 mt-lg-5 mt-4" href="contact.html">Book Your Travel</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item text-center">
        <li>
          <div class="slider-info  banner-view banner-top1 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mr-auto">
                  <h5>Welcome <br>
                    To Let’s Xplore </h5>
                  <p>Conse ctetur Lorem ipsum dolor sit amet adipi sicing elit. Quae, velit recu sandae eum necessi tatibus bland itiis adipisci Mollitia placeat modi explicabo voluptatum corporis.</p>
                   <a class="btn btn-theme2 mt-lg-5 mt-4" href="contact.html">Book Your Travel</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item text-center">
        <li>
          <div class="slider-info  banner-view banner-top2 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mr-auto">
                  <h5>Welcome<br>
                  To Let’s Xplore!</h5>
                  <p>Jelajahi Dunia Bersama Xplore!
				  Temukan keindahan setiap sudut dunia dengan layanan travel terpercaya dari Xplore! Dari petualangan menantang hingga liburan santai, kami siap membawa Anda ke tempat yang Anda impikan..</p>
                   <a class="btn btn-theme2 mt-lg-5 mt-4" href="contact.html">Book Your Travel</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
    </div>
  </div>
  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for -->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script -->
</section>
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
	<span class="fa fa-chevron-up"></span>
</button>
<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function () {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("movetop").style.display = "block";
		} else {
			document.getElementById("movetop").style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>
<!-- /move top -->