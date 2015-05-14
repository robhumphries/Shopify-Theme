<!doctype html>
<html class="no-js" lang="en">
  <head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Jotly</title>
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/custom.css" />
	<link rel="stylesheet" href="css/animate.css" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="js/vendor/modernizr.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
  </head>
   <body>
		<div id="container">
			<header>
				<h1>jot.ly</h1>
				<div id="cart">CART <span id="items">1</span></div>
			</header>
			<section id="hero" class="row">
			<span class="hero-overlay"></span>
				<div id="title">
				<h2  class="wow animatedFirst fadeInDown">Beautifully Designed Notebooks</h2>
				<p class="titleParagraph wow animatedSecond fadeInUp" >Pristine is a responsive, feature rich, social enabled single product theme based upon the robust <a href="http://http://foundation.zurb.com" targt="_blamk">Foundation framework</a> by Zurb.</p>
				<p class="wow animatedThird fadeInUp"><a href="#purchase" class="btn">Buy Now</a></p>
				</div>
			</section>
			<section id="intro" class="row" data-equalizer>
				<div class="large-5 medium-6 large-offset-1 columns" data-equalizer-watch>
					<article>
						<div class="wow animatedFirst fadeInLeft">
							<h3>Simple and clean</h3>
							<hr class="short" />
						</div>
						<div class="wow animatedSecond fadeInLeft">
							<p>Pristine is a fully responsive, optimised Shopify theme. Loaded with fonts from google and Font Awesome, 4 'seasonal' colour schemes and a simple and iuntuative interface, you can easily tailor your shop with typography, imagery and colour to meet your brand.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis iaculis sollicitudin mi, in pretium erat pharetra ut. Aenean congue at magna in cursus.</p>
						</div>
					</article>
				</div>
				<div class="large-6 medium-6 columns" data-equalizer-watch style="background-image: url(img/notebook.png);" id="productImg">
				</div>
			</section>
			<section class="row" id="productOptions">
				<div class="small-12 large-12 small-centered columns">
				<article>
						<h3>Scribbler, doodler or note taker?</h3>
						<hr class="short centered" />
						<p>As well as plain paper, there is also the choice of lined, dotted, grid and isometric. So there's something to suite everyone.</p>
					   </article>
						<article class="row">
							<div class="small-12 medium-6 large-3 columns options wow animatedFirst fadeInUp">
								<img src="img/paper-icon-05@2x.png" alt="icon for lined paper" />
								<h4>Lined</h4>
								<p>for those times when all you want to do is write</p>
							</div>
							<div class="small-12 medium-6 large-3 columns options wow animatedSecond fadeInUp">
								<img src="img/paper-icon-02@2x.png" alt="icon for dotted paper" />
								<h4>Dotted</h4>
								<p>Because we like dots. Dots make us happy.</p>
							</div>
							<div class="small-12 medium-6 large-3 columns options wow animatedThird fadeInUp">
								<img src="img/paper-icon-04@2x.png" alt="icon for grid paper" />
								<h4>Grid</h4>
								<p>And when we're not using dots we like to prototype.</p>
							</div>
							<div class="small-12 medium-6 large-3 columns options wow animatedFourth fadeInUp">
								<img src="img/paper-icon-03@2x.png" width="118px" alt="icon for isometric paper" />
								<h4>Isometric</h4>
								<p>Ooh did someone say 'isometric'. The fun begins...</p> 
							</div>
					</article>
					<article>
						<a href="#purchase" class="btn">Buy Now</a>
					</article>
				</div>
				
			</section>
			<section class="row" id="productInfo" data-equalizer>
				<div class="large-6 medium-6 columns" data-equalizer-watch style="background-image: url(img/product-image.png);" id="productImg">
					</div>
				<div class="large-5 medium-6 columns end" data-equalizer-watch>
					<article>
						<div class="wow animatedFirst fadeInRight">
							<h3>Scribbler, doodler or note taker?</h3>
							<hr class="short" />
						</div>
						<div class="wow animatedSecond fadeInRight">
							<p>We've created Jotly to lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis iaculis sollicitudin mi, in pretium erat pharetra ut. Aenean congue at magna in cursus.</p>
							<p>Cras diam nunc, lacinia vel tempus id, accumsan sit amet purus. Nullam dignissim ultricies leo, et porttitor lectus sodales id  </p>
						</div>
					</article>
				</div>
				
			</section>
			<section id="purchase" class="row">

				<article>                    
					<h1 class="centered">Buy Jotly now for just £14.99</h1>
					<hr class="short centered" />
				</article>

				<div class="large-6 medium-12 columns">
					<div class="slider">
						<img src="img/options-image-natural.png" alt="product image" name="image-swap"/>
					</div>	
				</div>
				<div class="large-5 medium-12 columns end">
					<article>
						<form>
							<h4>Options</h4>
							<select class="radius">
								<option value="" disabled selected>Choose a paper style</option>
								<option value="1">Lined</option>
								<option value="2">Grid</option>
								<option value="3">Dotted</option>
								<option value="4">Isometric</option>
								<option value="5">Plain</option>
							</select>
							<select class="radius">
								<option value="" disabled selected>Choose a paper weight</option>
								<option value="1">80gsm</option>
								<option value="2">150gsm</option>
								<option value="3">250gsm</option>
							</select>
							<select class="radius" name="cover" id="cover">
								<option value="" disabled selected>Choose a cover colour</option>
								<option value="/img/options-image-natural.png">Natural</option>
								<option value="/img/options-image-sage.png">Sage</option>
								<option value="/img/options-image-charcoal.png">Charcoal</option>
								<option value="/img/options-image-sunrise.png">Sunrise</option>
								<option value="/img/options-image-wine.png">Wine</option>
								<option value="/img/options-image-powder.png">Powder</option>
							</select>
							<!-- <hr />
							<div class="single-12 medium-6 large-6 columns nopadding">
								<span class="priceText">only</span><span class="price">&pound;14.99<sup>*</sup></span> 
							</div>
							<div class="single-12 medium-6 large-6 columns nopadding">
								<button id="customButton" class="btn">Buy Now</button>
							</div> -->
						<button id="customButton" class="btn">Buy Now</button>
						</form>
						<hr />

						<p class="smallText">*All prices include VAT. Free UK shipping on all order. For those not fortunate enough to live in the UK please see our <a href="#">international shipping rates</a> for international orders.</p>
					</article>
				</div>

			</section>
			<section id="about" class="row">
				<div class="large-2 medium-3 small-4 large-offset-2 medium-offset-1 small-offset-4 columns centered">
					<article>
						<img class="avatar" src="img/avatar.png" alt="creator avatar" />
					</article>
				</div>
				<div class="large-6 medium-7 small-12 columns end">
					<article>
						<h3>About the creator</h3>
						<hr class="short" />
						<p>We like to know who makes cool stuff and so do other people so we've added this section</p>
						<p>I've always had a guilty please. I love note books and I have far too many of them. That's because great ideas come at the most inopportune times, and the most simplest of ways to retain that idea is to jot it down.  It's why I created a note book that, not only does it look good and feel great to write in but also without the guilt of harming the enviroment. The papar is recycled, the ink is 100% solvent free. Even the printers who manufacture and bind the notebooks operate at 100% environmentally friendly.</p>
						<p>So it now seems, even the simplest of pleasure can be guilt free. I hope you enjoy it too.</p>
					</article>
				</div>
			</section>
			<section id="reviews" class="row">
				<div class="large-5 medium-12 large-offset-1 columns">
					<article>
						<blockquote class="testimonial">Everyone likes a testimonial don't they? Your potential customers do too so we've added the section to allow you to add some and glowing reviews about you and your product. But don't make them up, that's just silly.</blockquote>
						<span class="testimonialName">Stephen Jobs, Cupertino, USA</span>
					</article>
				</div>
				<div class="large-5 medium-12 columns end">
					<article>
						<blockquote class="testimonial">I bought the grid notepad as a gift but loved it so much I kept it. So I quickly ordered another a few more.</blockquote>
						<span class="testimonialName">Ann Tompkins, Oxford, UK</span>
					</article>
				</div>
			</section>
			<section id="contact" class="row">
				<div class="large-3 medium-3 large-offset-1 columns">
					<article>
						<h4>Contact</h4>
						<hr class="short" />
						<p>123 High Street, New Town, Devonshire<br />
						EX12 3YZ<p/>
						<p>Tel: 01234 567890</p>
						<p>Email: <a href="mailto:hello@craftedbyrobots.co.uk">name@jot.ly</a></p>
					</article>
				</div>
				<div class="large-2 medium-2 columns">
					<article>
						<h4>Ordering</h4>
						<hr class="short" />
						<ul>
							<li><a href="#">Delivery Information</a></li>
							<li><a href="#">Returns Policy</a></li>
							<li><a href="#">International Orders</a></li>
						</ul>
					</article>
				</div>
				<div class="large-2 medium-2 columns">
					<article>
						<h4>Legal</h4>
						<hr class="short" />
						<ul>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Terms &amp; Conditions</a></li>
							<li><a href="#">Cookie Policy</a></li>
						</ul>
					</article>
				</div>
				<div class="large-3 medium-3 columns end">
				   <article class="social">
					<h4>Social</h4>
					<hr class="short" />
					<ul>
						<li><a href="#" target="_blank" class="fa fa-twitter"></a></li>
						<li><a href="#" target="_blank" class="fa fa-facebook"></a></li>
						<li><a href="#" target="_blank" class="fa fa-pinterest"></a></li>
						<li><a href="#" target="_blank" class="fa fa-instagram"></a></li>
						<li><a href="#" target="_blank" class="fa fa-google-plus"></a></li>
						<li><a href="#" target="_blank" class="fa fa-linkedin"></a></li>
					</ul>


				   </article>
				</div>
			</section>
			<section class="row" id="newsletter">
					<div class="large-12 columns">
						<article class="newsletter">
						<h3>Stay in touch</h3>
						<hr class="short centered" />
						<form>
						<input type="text" class="newsletter" placeholder="youremail@address.com" />
						<button class="btn">Add me!</button>   
						</form>
					</article>
					</div>
			</section>
			<footer>
				<section class="row">
					<div class="large-6 medium-6 columns">
						<article class="copywrite">
							<span>&copy; 2015 jot.ly</span> 
						</article> 
					</div>
					
					 <div class="large-6 medium-6 columns">
						<article class="links">
							<span>Powered by <a href="http://www.shopify.com" target="_blank">Shopify</a>
						<article>
					</div>
				</section>
			</footer>
		</div>

	<script src="https://checkout.stripe.com/v2/checkout.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
	<script src="js/wow.min.js"></script>
	
	<script>

		$(document).ready(function() {
			function setHeight() {
	    		windowHeight = $(window).innerHeight();
	    			$('#hero, .hero-overlay').css('min-height', windowHeight);
	  			};
	  		setHeight();
  
	  		$(window).resize(function() {
	    		setHeight();
	  		});

	  		$("#cover").change(function(){
     		$("img[name=image-swap]").attr("src",$(this).val());

		   });
		});


		new WOW().init();
		
		$(function() {
			$('a[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					if (target.length) {
						$('html,body').animate({
							scrollTop: target.offset().top
						}, 1000);
					return false;
					}
				}
			});
		});

		$(window).scroll(function() {
			$('.animated').each(function(){
				var imagePos = $(this).offset().top;

				var topOfWindow = $(window).scrollTop();
				if (imagePos < topOfWindow+400) {
					$(this).addClass("animate");
				}
			});
		});

		$('#customButton').click(function(){
		  var token = function(res){
			var $input = $('<input type=hidden name=stripeToken />').val(res.id);
			$('form').append($input).submit();
		  };

		  StripeCheckout.open({
			key:         'pk_test_6pRNASCoBOKtIshFeQd4XMUh',
			address:     true,
			amount:      2499,
			currency:    'gbp',
			name:        'Jotly',
			description: 'The best notebook. Ever.', 
			panelLabel:  'Checkout',
			token:       token
		  });

		  return false;
		});
	</script> 

	
	<script src="js/foundation.min.js"></script>
	<script src="js/foundation/foundation.equalizer.js"></script>
	<script>
		$(document).foundation();		
	</script>
  </body>
</html>
