<style type="text/css">
	.fw-900 {
		font-weight: 900;
	}
	.band__text{
		font-size: 1.8rem;
	}
	.country__text{
		font-size: 2.2rem;
	}
	.country__desc{
		font-size: 1.3rem;
	}	
	.about__card {
		border-radius: 17px; 
		width: 98%; 
		transform: translateX(0);
	}	
	.ppf__text{
		font-size: 2.8rem;
	}	
	.ppf__para{
		font-size: 1rem;	
	}
	.ppf{
		background-color: #000;
		background-image: url('img/product-quality-background.webp');
		background-repeat: no-repeat;
		height: 130vh;
		background-position: bottom;
		background-size: contain;
	}
	.product{
		background: url('img/Prodcut-Splash-Block.webp') no-repeat;
		background-size: contain;
		height: 105vh;
		background-position: center 100%;
		background-color: rgb(0, 0, 0);
		scale: 1.01;
	}
	.brand{
		margin: 0;
		position: relative;
		width: 100vw;
		height: 30vh;
		background: url('img/DEFENDER-Background-Tall.svg') no-repeat;
		background-size: 100% auto;
		background-position: top center;
	}
	.color::before {
		content: '';
		position: absolute;
		top: 0;
		left: calc(50% - (80px / 2));
  		width:0px;
  		height:0px;
  		border-left:40px solid transparent;
  		border-right:40px solid transparent;
  		border-top:40px solid rgb(0, 116, 232);
	}
	.smoke{
		border-top: 10px solid rgb(0, 116, 232); 
		background-image: url('img/white-bently-rear-WEB-e1624016302428.jpg');
		background-repeat: no-repeat;
		background-position: center;		
	}
	.smoke::before {
		content: '';
		position: absolute;
		top: 0;
		left: calc(50% - (80px / 2));
  		width:0px;
  		height:0px;
  		border-left:40px solid transparent;
  		border-right:40px solid transparent;
  		border-top:40px solid rgb(0, 116, 232);
  		z-index: 9;
	}
	.protect{
		border-top: 10px solid rgb(0, 116, 232); 
		background-image: url('img/SPF-background-YELLOW-LAMBO-e1624056745445.jpg');
		background-repeat: no-repeat;
		background-position: center;		
	}
	.protect::before {
		content: '';
		position: absolute;
		top: 0;
		left: calc(50% - (80px / 2));
  		width:0px;
  		height:0px;
  		border-left:40px solid transparent;
  		border-right:40px solid transparent;
  		border-top:40px solid rgb(0, 116, 232);
  		z-index: 9;
	}	
	.partner{
		background-image: url('img/social-grid-section2.webp');
		background-repeat: no-repeat;
		background-position: bottom right;	
		background-color: #fff;
		background-size: 62% auto;
		height: 120vh;	
		padding: 2rem;
	}
	.training{
		padding: 2rem;		
		background-size: auto;
		background-position: center;
		background-image: url('img/BENTLY-FRONT-BLUE.webp');
	}	
	.training__gold{
		width: 25%;
	}
	.training__silver{
		width: 22%;
	}	
	.training__text {
		font-size: 2.5rem;
	}
    .training__width{
    	width: 100%;
    }		
	.tips__title{
		font-size: 2rem;
	}
	.ins__img{
		height: 355px;
		max-height: 24rem;
		width: 99%;
	}
	.established{
		height: 130vh !important;
	}
	.established__text{
		font-size: 2rem;
	}	
	.partner__width {
		width: 100%;
	}

	.tips__height {
		height: 50%;
	}
    .tips__mobile{
    	margin-bottom: -80%;
    }
    .service__title{
    	font-size: 1.7rem;
    }    
    .service__text{
    	font-size: 0.9rem;
    }
    .video__middle-width{
    	width: 100%;
    }
    .gallery__img{
    	width: 28%;
    }
/*    DESKTOP	*/
	@media(min-width: 768px){	
	.brand{
		height: 70vh;
	}
	.established{
		height: 100vh !important;
	}
	.ins__img{
		height: 370px;
		max-height: 24rem;
		width: 49%;
	}	
	.band__text{
		font-size: 3rem;
	}
	.product{
		height: 145vh;
	}		
	.country__text{
		font-size: 2.7rem;
	}
	.country__desc{
		font-size: 2.3rem;
	}		
	.ppf__text{
		font-size: 5rem;
	}	
	.ppf__para{
		font-size: 1.3rem;	
	}	
	.ppf{
		background-color: #000;
		background-image: url('img/product-quality-background.webp');
		background-repeat: no-repeat;
		height: 105vh;
		background-position: center;
		background-size: cover;
	}	
	.established__text{
		font-size: 3rem;
	}
	.about__card {
		border-radius: 17px; 
		width: 90%; 
		transform: translateX(-20%);
	}
	.partner__width {
		width: 60%;
	}
	.partner{
		height: 90vh;	
		padding: 6rem 4rem;
	}	
	.training{
		padding: 6rem 4rem;
	}
	.training__text {
		font-size: 4rem;
	}	
	.training__gold{
		width: 15.5%;
	}
	.training__silver{
		width: 12.5%;
	}	
    .training__width{
    	width: 75%;
    }		
	.tips__title{
		font-size: 4rem;
	} 
	.tips__height {
		height: 100%;
	}	
    .tips__mobile{
    	margin-bottom: 0;
    }	 
    .service__title{
    	font-size: 2.4rem;
    }    
    .service__text{
    	font-size: 1.3rem;
    } 
    .video__middle-width{
    	width: 60%;
    }   
    .gallery__img{
    	width: 22%;
    }          
}

/* PC	*/
	@media(min-width: 1200px){
		.brand{
			height: 100vh;
		}
		.established{
			height: 110vh !important;
		}
		.band__text{
			font-size: 5rem;
		}
		.country__text{
			font-size: 3.3rem;
		}
		.country__desc{
			font-size: 3.3rem;
		}	
		.ppf{
			background-color: #000;
			background-image: url('img/product-quality-background.webp');
			background-repeat: no-repeat;
			height: 155vh;
			background-position: center;
			background-size: cover;
		}				
		.ppf__text{
			font-size: 8.5rem;
		}	
		.ppf__para{
			font-size: 1.5rem;	
		}		
		.tips__title{
			font-size: 6rem;
		}
		.ins__img{
			height: 240px;
			max-height: 24rem;
			width: 19%;
		}
		.established__text{
			font-size: 3.3rem;
		}	
    	.service__title{
    		font-size: 3rem;
    	}    
    	.gallery__img{
    		width: 10%;
    	}    			
	}
</style>


<div class="main">
	<!-- ---------------------------------------------------------- START IMG FIXED --------------------------------------- -->
	<img src="img/PPF-install.webp" alt="" class="position-fixed top-0 start-0 end-0 bottom-0" style="height: 100vh; width: 100vw; z-index: -1;">
	<!-- ---------------------------------------------------------- END IMG FIXED --------------------------------------- -->


	<!-- ----------------------------------------------------------- START HERO --------------------------------------------------- -->
	<div class="hero row">
		<div class="d-flex justify-content-center overflow-hidden">
			<iframe style="width: 100%; height: 60vh; transform: scale(2.5);" allowfullscreen 
	      		src="https://www.youtube.com/embed/0AOtkCM6RBY?autoplay=1&mute=1">
	      	</iframe>
		</div>		
	</div>
	<!-- ----------------------------------------------------------- END HERO ---------------------------------------------------------- -->


	<!-- --------------------------------------------------------- START BAND --------------------------------------------------------------- -->
	<div class="band row py-5" style="background-image: linear-gradient(98deg, #0d6efd 50%, #000000 50%);">

		<div class="d-flex align-items-center justify-content-center fst-italic text-light py-4 ps-5 ps-md-0" style="padding-right: 5rem;">

			<div class="d-flex flex-column align-items-end me-md-5 me-1">
				<h2 class="band__text m-0 lh-1 fw-900">GLOBAL</h2>
				<span class="band__text lh-1">Manufacturer</span>
			</div>

			<div class="d-flex flex-column align-items-start ms-md-5 ms-3">
				<span class="band__text lh-1">Innovative</span>
				<h2 class="m-0 lh-1 fw-900 band__text">BRAND</h2>
			</div>		

		</div>
	</div>
	<!-- --------------------------------------------------------- END BAND --------------------------------------------------------------- -->


	<!-- --------------------------------------------------------- START COUNTRY --------------------------------------------------------------- -->
	<div class="country row" style="background-color: rgb(0, 32, 65);">
		<div class="text-light">
			
			<div class="text-center fst-italic p-lg-5 p-md-4 p-3 py-5">
				<h2 class="fw-900 country__text">AVAILABLE EVERYWHERE</h2>
				<h3 class="fw-900 country__desc text-primary">LOCAL DISTRIBUTION IN OVER 44 COUNTRIES & REGIONS</h3>
			</div>

			<div class="d-flex justify-content-center gap-3 flex-wrap">

				<div class="col-lg-2 col-5 text-center bg-white text-primary overflow-hidden" style="border-radius: 15px;">
					<img src="img/Vietnam.svg" alt="">
					<h4 class="fw-bold m-0 pt-2 pb-1 fs-3">VIETNAM</h4>
				</div>	
				<div class="col-lg-2 col-5 text-center bg-white text-primary overflow-hidden" style="border-radius: 15px;">
					<img src="img/Vietnam.svg" alt="">
					<h4 class="fw-bold m-0 pt-2 pb-1 fs-3">VIETNAM</h4>
					<span class="text-secondary">Hanoi, TPHCM, Hue</span>
				</div>
				<div class="col-lg-2 col-5 text-center bg-white text-primary overflow-hidden" style="border-radius: 15px;">
					<img src="img/Vietnam.svg" alt="">
					<h4 class="fw-bold m-0 pt-2 pb-1 fs-3">VIETNAM</h4>
				</div>	
				<div class="col-lg-2 col-5 text-center bg-white text-primary overflow-hidden" style="border-radius: 15px;">
					<img src="img/Vietnam.svg" alt="">
					<h4 class="fw-bold m-0 pt-2 pb-1 fs-3">VIETNAM</h4>
					<span class="text-secondary">Hanoi, TPHCM, Hue</span>
				</div>				
				<div class="col-lg-2 col-5 text-center bg-white text-primary overflow-hidden" style="border-radius: 15px;">
					<img src="img/Vietnam.svg" alt="">
					<h4 class="fw-bold m-0 pt-2 pb-1 fs-3">VIETNAM</h4>
				</div>
				<div class="col-lg-2 col-5 text-center bg-white text-primary overflow-hidden" style="border-radius: 15px;">
					<img src="img/Vietnam.svg" alt="">
					<h4 class="fw-bold m-0 pt-2 pb-1 fs-3">VIETNAM</h4>
				</div>	
				<div class="col-lg-2 col-5 text-center bg-white text-primary overflow-hidden" style="border-radius: 15px;">
					<img src="img/Vietnam.svg" alt="">
					<h4 class="fw-bold m-0 pt-2 pb-1 fs-3">VIETNAM</h4>
					<span class="text-secondary">Hanoi, TPHCM, Hue</span>
				</div>
				<div class="col-lg-2 col-5 text-center bg-white text-primary overflow-hidden" style="border-radius: 15px;">
					<img src="img/Vietnam.svg" alt="">
					<h4 class="fw-bold m-0 pt-2 pb-1 fs-3">VIETNAM</h4>
				</div>	
				<div class="col-lg-2 col-5 text-center bg-white text-primary overflow-hidden" style="border-radius: 15px;">
					<img src="img/Vietnam.svg" alt="">
					<h4 class="fw-bold m-0 pt-2 pb-1 fs-3">VIETNAM</h4>
					<span class="text-secondary">Hanoi, TPHCM, Hue</span>
				</div>				
				<div class="col-lg-2 col-5 text-center bg-white text-primary overflow-hidden" style="border-radius: 15px;">
					<img src="img/Vietnam.svg" alt="">
					<h4 class="fw-bold m-0 pt-2 pb-1 fs-3">VIETNAM</h4>
				</div>	
				<div class="col-lg-2 col-5 text-center bg-white text-primary overflow-hidden" style="border-radius: 15px;">
					<img src="img/Vietnam.svg" alt="">
					<h4 class="fw-bold m-0 pt-2 pb-1 fs-3">VIETNAM</h4>
					<span class="text-secondary">Hanoi, TPHCM, Hue</span>
				</div>				
				<div class="col-lg-2 col-5 text-center bg-white text-primary overflow-hidden" style="border-radius: 15px;">
					<img src="img/Vietnam.svg" alt="">
					<h4 class="fw-bold m-0 pt-2 pb-1 fs-3">VIETNAM</h4>
				</div>	
				<div class="col-lg-2 col-5 text-center bg-white text-primary overflow-hidden" style="border-radius: 15px;">
					<img src="img/Vietnam.svg" alt="">
					<h4 class="fw-bold m-0 pt-2 pb-1 fs-3">VIETNAM</h4>
					<span class="text-secondary">Hanoi, TPHCM, Hue</span>
				</div>				
				<div class="col-lg-2 col-5 text-center bg-white text-primary overflow-hidden" style="border-radius: 15px;">
					<img src="img/Vietnam.svg" alt="">
					<h4 class="fw-bold m-0 pt-2 pb-1 fs-3">VIETNAM</h4>
				</div>	
				<div class="col-lg-2 col-5 text-center bg-white text-primary overflow-hidden" style="border-radius: 15px;">
					<img src="img/Vietnam.svg" alt="">
					<h4 class="fw-bold m-0 pt-2 pb-1 fs-3">VIETNAM</h4>
					<span class="text-secondary">Hanoi, TPHCM, Hue</span>
				</div>				
				<div class="col-lg-2 col-5 text-center bg-white text-primary overflow-hidden" style="border-radius: 15px;">
					<img src="img/Vietnam.svg" alt="">
					<h4 class="fw-bold m-0 pt-2 pb-1 fs-3">VIETNAM</h4>
				</div>	
				<div class="col-lg-2 col-5 text-center bg-white text-primary overflow-hidden" style="border-radius: 15px;">
					<img src="img/Vietnam.svg" alt="">
					<h4 class="fw-bold m-0 pt-2 pb-1 fs-3">VIETNAM</h4>
					<span class="text-secondary">Hanoi, TPHCM, Hue</span>
				</div>				
				<div class="col-lg-2 col-5 text-center bg-white text-primary overflow-hidden" style="border-radius: 15px;">
					<img src="img/Vietnam.svg" alt="">
					<h4 class="fw-bold m-0 pt-2 pb-1 fs-3">VIETNAM</h4>
				</div>	
				<div class="col-lg-2 col-5 text-center bg-white text-primary overflow-hidden" style="border-radius: 15px;">
					<img src="img/Vietnam.svg" alt="">
					<h4 class="fw-bold m-0 pt-2 pb-1 fs-3">VIETNAM</h4>
					<span class="text-secondary">Hanoi, TPHCM, Hue</span>
				</div>
				<div class="col-lg-2 col-5 text-center bg-white text-primary overflow-hidden" style="border-radius: 15px;">
					<img src="img/Vietnam.svg" alt="">
					<h4 class="fw-bold m-0 pt-2 pb-1 fs-3">VIETNAM</h4>
				</div>
			</div>

			<div class="text-center p-lg-5 p-md-4 p-3">
				<h2 class="fw-bold py-3 fst-italic country__text">Don't see your country listed here?</h1>
				<button class="btn btn-lg bg-primary text-white fw-bold rounded-pill">BUY DIRECTLY FROM GSWF GLOBAL</button>
			</div>

		</div>
	</div>
	<!-- --------------------------------------------------------- END COUNTRY --------------------------------------------------------------- -->


	<!-- --------------------------------------------------------- START PPF --------------------------------------------------------------- -->
	<div class="ppf row text-white pt-4">

		<div class="pt-5">

			<div class="text-center py-5">
				<h5 class="fs-2 fw-900 fst-italic text-primary">SUPERIOR QUALITY, END TO END</h5>
				<h1 class="fw-900 fst-italic ppf__text">WE KNOW PPF</h1>
			</div>

			<div class="d-flex flex-md-nowrap flex-wrap justify-content-around justify-content-md-center">
				<div class="col-md-3 col-5 px-md-3 px-1 text-center">
					<h2 class="fw-bold fst-italic">CLARITY</h2>
					<p class="ppf__para">Our PPF products have the best clairty on the market , with no orange peeling and the highest level of smooth gloss.</p>
				</div>
				<div class="col-md-3 col-5 px-md-3 px-1 text-center">
					<h2 class="fw-bold fst-italic">STRETCH</h2>
					<p class="ppf__para">Pull our PPF to it’s very limits withought leaving nasty stretch lines behind. Our product performs best-in-class.</p>
				</div>				
				<div class="col-md-3 col-5 px-md-3 px-1 text-center">
					<h2 class="fw-bold fst-italic">ADHESIVE</h2>
					<p class="ppf__para">No touch ups a week later! Top-coat technology that doesn’t retreat after being stretched, even around corners. Installers save cost and have peace of mind.</p>
				</div>				
				<div class="col-md-3 col-5 px-md-3 px-1 text-center">
					<h2 class="fw-bold fst-italic">WARRANTY</h2>
					<p class="ppf__para">Best warranty and customer service on the market. Online Warranty application and Platinum Film means we’ve got your back. No matter what.</p>
				</div>				
			</div>

		</div>
	</div>
	<!-- --------------------------------------------------------- END PPF --------------------------------------------------------------- -->


	<!-- ---------------------------------------------------- START ESTABLISHED ------------------------------------------------------------ -->
	<div class="established row py-5 bg-white">
		<div class="d-flex flex-wrap justify-content-center align-items-md-center align-items-end">
			<div class="text-primary col-md-6 col-12 p-md-5 p-3 order-2 order-md-1">
				<h2 class="fw-light fst-italic established__text">We are an 
					<span class="fw-bold">established </span> and 
					<span class="fw-bold">reliable </span>manufacturer.
				</h2>
				<div class="pt-md-5 pt-0">
					<div class="fs-5">
						<i class="bi bi-check-lg text-primary"></i> 
						<span class="text-dark fw-900 fst-italic text-uppercase">200 Employees</span>
					</div>
					<div class="fs-5">
						<i class="bi bi-check-lg text-primary"></i> 
						<span class="text-dark fw-900 fst-italic text-uppercase">96 million USD in annual sales</span>
					</div>
					<div class="fs-5">
						<i class="bi bi-check-lg text-primary"></i>
						<span class="text-dark fw-900 fst-italic text-uppercase">Production Capacity of 100K  rolls a month</span>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-12 py-md-5 ms-5 ps-4 ps-md-0 ms-md-0 position-relative d-flex align-items-center order-1 order-md-2">
				<div class="position-absolute text-center">					
					<img 
						src="img/GSWF-Manufacturer-2-1024x683.webp" alt="" class="shadow-lg" 
						style="border-radius: 30px; width: 70%; transform: translateY(30%);">					
					<img
						src="img/GSWF-Manufacturer-3-1024x683.webp" alt="" class="shadow-lg" 
						style="border-radius: 30px; width: 45%; transform: translate(30%, 100%);"
					>
					<img 
						src="img/GSWF-Manufacturer-1-1024x510.webp" alt="" class="shadow-lg" 
						style="border-radius: 30px; width: 73%; transform: translate(-30%, -80%);">					
				</div>

			</div>
		</div>
	</div>
	<!-- --------------------------------------------------- END ESTABLISHED --------------------------------------------------------------- -->


	<!-- ------------------------------------------------------- START ABOUT --------------------------------------------------------------- -->
	<div class="about row bg-primary py-md-5 py-0">
		<div class="d-md-none d-block">
			<img src="img/Section-2-back.webp" alt="" class="w-100">
		</div>
		<div class="d-flex justify-content-center">
			<div class="col-5 position-relative overflow-hidden d-none d-md-block" style="border-top-right-radius: 20px; border-bottom-right-radius: 20px;">
				<img src="img/Section-2-back.webp" alt="" class="position-absolute h-100" style=" right: -50%; transform: scaleY(1.5);">
			</div>
			<div class="col-md-7 col-11 d-flex flex-column align-content-around py-5 my-5 gap-5">

				<div class="bg-white p-4 about__card">
					<div class="d-flex align-items-center justify-content-between">
						<div class="text-primary text-uppercase">
							<h2 class="fw-900 fs-1 fst-italic">International</h2>
							<h4 class="fs-5 fst-italic">Research and Development</h4>
						</div>
						<i class="bi bi-globe2  d-none d-md-block" style="font-size: 3.5rem;"></i>
					</div>
					<p class="fs-5">GSWF knows that the very best protective films are the result of a painstakingly rigorous research and development process. We have laboratories in Zhejiang, Shanghai, Germany and Singapore who are in constant pursuit of quality. Our products not only look flawless but come backed by highly advanced performance.</p>
				</div>

				<div class="bg-white p-4 about__card">
					<div class="d-flex align-items-center justify-content-between">
						<div class="text-primary text-uppercase">
							<h2 class="fw-900 fs-1 fst-italic">International</h2>
							<h4 class="fs-5 fst-italic">Research and Development</h4>
						</div>
						<i class="bi bi-globe2  d-none d-md-block" style="font-size: 3.5rem;"></i>
					</div>
					<p class="fs-5">GSWF knows that the very best protective films are the result of a painstakingly rigorous research and development process. We have laboratories in Zhejiang, Shanghai, Germany and Singapore who are in constant pursuit of quality. Our products not only look flawless but come backed by highly advanced performance.</p>
				</div>

				<div class="bg-white p-4 about__card">
					<div class="d-flex align-items-center justify-content-between">
						<div class="text-primary text-uppercase">
							<h2 class="fw-900 fs-1 fst-italic">International</h2>
							<h4 class="fs-5 fst-italic">Research and Development</h4>
						</div>
						<i class="bi bi-globe2  d-none d-md-block" style="font-size: 3.5rem;"></i>
					</div>
					<p class="fs-5">GSWF knows that the very best protective films are the result of a painstakingly rigorous research and development process. We have laboratories in Zhejiang, Shanghai, Germany and Singapore who are in constant pursuit of quality. Our products not only look flawless but come backed by highly advanced performance.</p>
				</div>				

			</div>
		</div>
	</div>
	<!-- --------------------------------------------------------- END ABOUT --------------------------------------------------------------- -->


	<!-- ------------------------------------------------------ START CERTIFICATION --------------------------------------------------------- -->
	<div class="certification row bg-primary pb-5 pb-md-0">
		<div class="d-flex flex-wrap align-items-center">
			<div class="col-md-6 col-12 p-md-5 pb-4  pt-0">
				<h2 class="text-light fw-light fst-italic country__text text-center">
					We keep the <b>highest</b> manufacturing standards for protection film you can <b>trust</b>
				</h2>
			</div>
			<div class="col-md-6 col-12 p-lg-5 ps-lg-2 pe-md-5 px-3">
				<img src="img/ICONS-certification.svg" alt="">
			</div>
		</div>
	</div>
	<!-- ----------------------------------------------------- END CERTIFICATION --------------------------------------------------------------- -->


	<!-- ------------------------------------------------------- START PRODUCT --------------------------------------------------------------- -->
	<div class="product row py-5">

		<div class="d-flex justify-content-center text-center">
			<div class="w-75 text-white">
				<h2 style="font-size: 4rem;" class="fst-italic fw-900">38 PPF OPTIONS</h2>
				<h4 class="fs-4 text-primary">THE LARGEST LINE OF PPF IN THE WORLD</h4>
				<hr style="padding: 1px;" class="my-4">
				<h3 class="fw-900 fst-italic fs-2">
					<span class="text-primary">26 </span>COLORS • <span class="text-primary">5 </span>CLEAR GLOSS <br>
					<span class="text-primary">1 </span>CLEAR SATIN • <span class="text-primary">1 </span>CLEAR MATTE <br>
					<span class="text-primary">3 </span>SHADES HEADLIGHT <br>
					<span class="text-primary">1 </span>SUNROOF PPF
				</h3>
				<div class="my-5">
					<button class="btn btn-lg bg-danger text-white fw-bold rounded-pill px-4">SHOP ONLINE</button>
				</div>
				<div>
					<button class="btn btn-lg bg-danger text-white fw-bold rounded-pill px-4">SHOP.SPANDEX.COM</button>
				</div>
				
			</div>
		</div>
	</div>
	<!-- ------------------------------------------------------- END PRODUCT --------------------------------------------------------------- -->


	<!-- --------------------------------------------------------- START BRAND --------------------------------------------------------------- -->
	<div class="brand row">
		<div class="d-flex align-items-end justify-content-center">
			<img src="img/Defender-Logo-Sting-2.svg" alt="" style="width: 90%;">
		</div>		
	</div>
	<!-- --------------------------------------------------------- END BRAND --------------------------------------------------------------- -->


	<!-- ------------------------------------------------------ START SERVICE --------------------------------------------------------------- -->
	<div class="service row bg-dark text-white px-md-5 px-3">
		<hr class="my-5" style="padding: 1px;">
		<div class="d-flex px-4 flex-md-nowrap flex-wrap">
			<div class="col-md-3 col-12  px-2">
				<h2 class="fw-bold fst-italic text-uppercase service__title">Our clear ppf line hits all the marks</h2>
				<div class="my-4">
					<button class="btn btn-lg btn-danger fw-bold fst-italic rounded-pill">SHOP ONLINE</button>
				</div>
				<div>
					<button class="btn btn-lg btn-danger fw-bold fst-italic rounded-pill">SHOP ONLINE</button>
				</div>				
			</div>
			<div class="col-md-3 col-12 px-2">
				<div>
					<i class="bi bi-check-circle-fill text-primary fs-3"></i>
					<span class="fw-bold fst-italic text-uppercase service__text">Non-Yellowing</span>
				</div>
				<div>
					<i class="bi bi-check-circle-fill text-primary fs-3"></i>
					<span class="fw-bold fst-italic text-uppercase service__text">Flawlessly Smooth Satin and Matte</span>
				</div>	
				<div>
					<i class="bi bi-check-circle-fill text-primary fs-3"></i>
					<span class="fw-bold fst-italic text-uppercase service__text">Non-Yellowing</span>
				</div>
				<div>
					<i class="bi bi-check-circle-fill text-primary fs-3"></i>
					<span class="fw-bold fst-italic text-uppercase service__text">Flawlessly Smooth Satin and Matte</span>
				</div>	
				<div>
					<i class="bi bi-check-circle-fill text-primary fs-3"></i>
					<span class="fw-bold fst-italic text-uppercase service__text">Non-Yellowing</span>
				</div>											
			</div>
			<div class="col-md-3 col-12  px-2 fs-5">
				<div>
					<i class="bi bi-check-circle-fill text-primary fs-3"></i>
					<span class="fw-bold fst-italic text-uppercase service__text">Non-Yellowing</span>
				</div>
				<div>
					<i class="bi bi-check-circle-fill text-primary fs-3"></i>
					<span class="fw-bold fst-italic text-uppercase service__text">Flawlessly Smooth Satin and Matte</span>
				</div>	
				<div>
					<i class="bi bi-check-circle-fill text-primary fs-3"></i>
					<span class="fw-bold fst-italic text-uppercase service__text">Non-Yellowing</span>
				</div>
				<div>
					<i class="bi bi-check-circle-fill text-primary fs-3"></i>
					<span class="fw-bold fst-italic text-uppercase service__text">Flawlessly Smooth Satin and Matte</span>
				</div>	
				<div>
					<i class="bi bi-check-circle-fill text-primary fs-3"></i>
					<span class="fw-bold fst-italic text-uppercase service__text">Non-Yellowing</span>
				</div>									
			</div>
			<div class="col-md-3 col-12  px-2 fs-5">
				<div>
					<i class="bi bi-check-circle-fill text-primary fs-3"></i>
					<span class="fw-bold fst-italic text-uppercase service__text">Non-Yellowing</span>
				</div>
				<div>
					<i class="bi bi-check-circle-fill text-primary fs-3"></i>
					<span class="fw-bold fst-italic text-uppercase service__text">Flawlessly Smooth Satin and Matte</span>
				</div>	
				<div>
					<i class="bi bi-check-circle-fill text-primary fs-3"></i>
					<span class="fw-bold fst-italic text-uppercase service__text">Non-Yellowing</span>
				</div>
				<div>
					<i class="bi bi-check-circle-fill text-primary fs-3"></i>
					<span class="fw-bold fst-italic text-uppercase service__text">Flawlessly Smooth Satin and Matte</span>
				</div>	
				<div>
					<i class="bi bi-check-circle-fill text-primary fs-3"></i>
					<span class="fw-bold fst-italic text-uppercase service__text">Non-Yellowing</span>
				</div>									
			</div>
		</div>
		<hr class="my-5" style="padding: 1px;">	
	</div>
	<!-- ------------------------------------------------------ END SERVICE --------------------------------------------------------------- -->


	<!-- --------------------------------------------------------- START VIDEO --------------------------------------------------------------- -->
	<div class="video__middle row">
		<div class="d-flex overflow-hidden align-items-center position-relative py-lg-5 py-3">
			<div class="position-absolute p-md-5 px-2 py-3 video__middle-width" style="z-index: 3;">
				<h2 class="fw-bold fst-italic text-white country__text">
					Incredible One-Piece Full Hood on a Rolls Royce
				<h2>
				<div class="my-4">
					<button class="btn btn-md-lg btn-sm btn-primary fw-bold fst-italic rounded-pill">SHOP DEFENDER</button>
				</div>
				<div>
					<button class="btn btn-md-lg btn-sm btn-primary fw-bold fst-italic rounded-pill">SHOP DEFENDER</button>
				</div>	
			</div>
			<iframe style="width: 100%; height: 60vh; transform: scale(2.5);" allowfullscreen 
	      		src="https://www.youtube.com/embed/IPBX09yB7VY?autoplay=1&mute=1">
	      	</iframe>
		</div>		
	</div>
	<!-- --------------------------------------------------------- END VIDEO --------------------------------------------------------------- -->


	<!-- --------------------------------------------------------- START COLOR --------------------------------------------------------------- -->
	<div class="color row bg-dark text-white position-relative" style="border-top: 10px solid rgb(0, 116, 232); padding: 5rem 0;">
		
		<div class="d-flex flex-md-nowrap flex-wrap p-5">

			<div class="col-md-9 col-12 p-lg-5 p-3">
				<img src="img/CHROMA-GUARD-FADE-Dark.svg" alt="">
			</div>

			<div class="col-md-3 col-12 text-center">
				<h2 class="fw-bold fst-italic text-uppercase fs-1">The ORIGINAL <br> color PPF</h2>
				<h5 class="fs-5 fw-normal">Our extensive line is constantly growing.  lead the color ppf revolution by offering the industry’s best.</h5>
				<div class="my-4">
					<button class="btn btn-lg btn-primary fw-bold fst-italic rounded-pill">SHOP COLOR PPF</button>
				</div>
				<div>
					<button class="btn btn-lg btn-primary fw-bold fst-italic rounded-pill">SHOP COLOR PPF</button>
				</div>
			</div>

		</div>
	</div>
	<!-- --------------------------------------------------------- END COLOR --------------------------------------------------------------- -->


	<!-- --------------------------------------------------------- START FEATURE --------------------------------------------------------------- -->
	<div class="featured row bg-dark text-white">
		<div class="d-flex align-items-center  flex-md-nowrap flex-wrap p-md-5 p-4">
			<div class="col-md-7 col-12 p-lg-5 p-3 order-2 order-md-1">
				<video style="border-radius: 20px;transform: scaleY(1.2);" class="w-100" controls>
  					<source src="" type="video/mp4">
  					<source src="" type="video/ogg">
				</video>
			</div>
			<div class="col-md-5 col-12 p-md-5 p-0 pt-4 text-center text-md-start order-1 order-md-2">
				<img src="img/24.-Satin-Military-Olive-Green-300x300.webp" alt="" class="" style="width: 45%;">
				<h3 class="fw-bold fst-italic text-uppercase pt-2 fs-1">Featured Color...</h3>
				<h5 class="text-success fw-bold fst-italic fs-3">SATIN MILITARY OLIVE GREEN</h5>
			</div>
		</div>
	</div>
	<!-- --------------------------------------------------------- END FEATURE --------------------------------------------------------------- -->


	<!-- --------------------------------------------------------- START GALLERY --------------------------------------------------------------- -->
	<div class="gallery row bg-dark px-lg-5 px-md-3 px-2">
		<div class="d-flex flex-wrap justify-content-center align-items-center px-lg-4 px-md-3 px-1">
			<div class="text-center">
				<div id="animated-thumbnails">
					    <a class="text-decoration-none text-light" href="img/12.-Bright-Bubblegum-Gloss-300x300.webp">
					        <img class="gallery__img py-1" style="border-radius: 20px;" src="img/12.-Bright-Bubblegum-Gloss-300x300.webp" />
					    </a>
		    			<a class="text-decoration-none text-light" href="img/18.-Grass-Green-Gloss-300x300.webp">
		        			<img class="gallery__img py-1" style="border-radius: 20px;" src="img/18.-Grass-Green-Gloss-300x300.webp" />
		   				</a>
		    			<a class="text-decoration-none text-light" href="img/24.-Satin-Military-Olive-Green-300x300.webp">
		        			<img class="gallery__img py-1" style="border-radius: 20px;" src="img/24.-Satin-Military-Olive-Green-300x300.webp" />
		   				</a>
					    <a class="text-decoration-none text-light" href="img/12.-Bright-Bubblegum-Gloss-300x300.webp">
					        <img class="gallery__img py-1" style="border-radius: 20px;" src="img/12.-Bright-Bubblegum-Gloss-300x300.webp" />
					    </a>
		    			<a class="text-decoration-none text-light" href="img/18.-Grass-Green-Gloss-300x300.webp">
		        			<img class="gallery__img py-1" style="border-radius: 20px;" src="img/18.-Grass-Green-Gloss-300x300.webp" />
		   				</a>
		    			<a class="text-decoration-none text-light" href="img/24.-Satin-Military-Olive-Green-300x300.webp">
		        			<img class="gallery__img py-1" style="border-radius: 20px;" src="img/24.-Satin-Military-Olive-Green-300x300.webp" />
		   				</a> 	
					    <a class="text-decoration-none text-light" href="img/12.-Bright-Bubblegum-Gloss-300x300.webp">
					        <img class="gallery__img py-1" style="border-radius: 20px;" src="img/12.-Bright-Bubblegum-Gloss-300x300.webp" />
					    </a>
		    			<a class="text-decoration-none text-light" href="img/18.-Grass-Green-Gloss-300x300.webp">
		        			<img class="gallery__img py-1" style="border-radius: 20px;" src="img/18.-Grass-Green-Gloss-300x300.webp" />
		   				</a>
		    			<a class="text-decoration-none text-light" href="img/24.-Satin-Military-Olive-Green-300x300.webp">
		        			<img class="gallery__img py-1" style="border-radius: 20px;" src="img/24.-Satin-Military-Olive-Green-300x300.webp" />
		   				</a> 	
					    <a class="text-decoration-none text-light" href="img/12.-Bright-Bubblegum-Gloss-300x300.webp">
					        <img class="gallery__img py-1" style="border-radius: 20px;" src="img/12.-Bright-Bubblegum-Gloss-300x300.webp" />
					    </a>
		    			<a class="text-decoration-none text-light" href="img/18.-Grass-Green-Gloss-300x300.webp">
		        			<img class="gallery__img py-1" style="border-radius: 20px;" src="img/18.-Grass-Green-Gloss-300x300.webp" />
		   				</a>
		    			<a class="text-decoration-none text-light" href="img/24.-Satin-Military-Olive-Green-300x300.webp">
		        			<img class="gallery__img py-1" style="border-radius: 20px;" src="img/24.-Satin-Military-Olive-Green-300x300.webp" />
		   				</a> 	
					    <a class="text-decoration-none text-light" href="img/12.-Bright-Bubblegum-Gloss-300x300.webp">
					        <img class="gallery__img py-1" style="border-radius: 20px;" src="img/12.-Bright-Bubblegum-Gloss-300x300.webp" />
					    </a>
		    			<a class="text-decoration-none text-light" href="img/18.-Grass-Green-Gloss-300x300.webp">
		        			<img class="gallery__img py-1" style="border-radius: 20px;" src="img/18.-Grass-Green-Gloss-300x300.webp" />
		   				</a>
		    			<a class="text-decoration-none text-light" href="img/24.-Satin-Military-Olive-Green-300x300.webp">
		        			<img class="gallery__img py-1" style="border-radius: 20px;" src="img/24.-Satin-Military-Olive-Green-300x300.webp" />
		   				</a> 	
					    <a class="text-decoration-none text-light" href="img/12.-Bright-Bubblegum-Gloss-300x300.webp">
					        <img class="gallery__img py-1" style="border-radius: 20px;" src="img/12.-Bright-Bubblegum-Gloss-300x300.webp" />
					    </a>
		    			<a class="text-decoration-none text-light" href="img/18.-Grass-Green-Gloss-300x300.webp">
		        			<img class="gallery__img py-1" style="border-radius: 20px;" src="img/18.-Grass-Green-Gloss-300x300.webp" />
		   				</a>
		    			<a class="text-decoration-none text-light" href="img/24.-Satin-Military-Olive-Green-300x300.webp">
		        			<img class="gallery__img py-1" style="border-radius: 20px;" src="img/24.-Satin-Military-Olive-Green-300x300.webp" />
		   				</a> 	
					    <a class="text-decoration-none text-light" href="img/12.-Bright-Bubblegum-Gloss-300x300.webp">
					        <img class="gallery__img py-1" style="border-radius: 20px;" src="img/12.-Bright-Bubblegum-Gloss-300x300.webp" />
					    </a>
		    			<a class="text-decoration-none text-light" href="img/18.-Grass-Green-Gloss-300x300.webp">
		        			<img class="gallery__img py-1" style="border-radius: 20px;" src="img/18.-Grass-Green-Gloss-300x300.webp" />
		   				</a>
		    			<a class="text-decoration-none text-light" href="img/24.-Satin-Military-Olive-Green-300x300.webp">
		        			<img class="gallery__img py-1" style="border-radius: 20px;" src="img/24.-Satin-Military-Olive-Green-300x300.webp" />
		   				</a> 						   				   				   				   				   				 			  				
				</div>				
			</div>

		</div>
	</div>
	<!-- --------------------------------------------------------- END GALLERY --------------------------------------------------------------- -->


	<!-- --------------------------------------------------------- START CHANGER --------------------------------------------------------------- -->
	<div class="changer row bg-dark text-white py-5">
		<div class="d-flex align-items-center flex-md-nowrap flex-wrap"> 
			<div class="col-md-6 col-12 text-center">
				<img src="img/3D-Changer.webp" class="w-75" alt="">
				<h5 class="fs-5 fw-normal w-50 mx-auto">To subscribe to 3D Changer and access GSWF Color Preview…</h5>
				<div class="my-4">
					<button class="btn btn-lg btn-primary fw-bold fst-italic rounded-pill">CLICK HERE</button>
				</div>
			</div>
			<div class="col-md-6 col-12 overflow-hidden px-lg-5 ps-md-4 pe-md-5 px-4">
				<video style="border-radius: 20px;" class="w-100 h-75" controls>
  					<source src="img/GSWF_Touch_V2-B.mp4" type="video/mp4">
  					<source src="img/GSWF_Touch_V2-B.mp4" type="video/ogg">
				</video>				
			</div>
		</div>
	</div>
	<!-- --------------------------------------------------------- END CHANGER --------------------------------------------------------------- -->


	<!-- --------------------------------------------------------- START SMOKE --------------------------------------------------------------- -->
	<div class="smoke row bg-dark text-white position-relative py-5">

		<div class="d-flex align-items-center  flex-md-nowrap flex-wrap p-lg-5 p-3" style="z-index: 3;">
			<div class="col-md-6 col-12 p-5">
				<img src="img/Logo-SMOKE.svg" alt="">
				<h3 class="fw-bold fst-italic text-uppercase pt-2 d-flex justify-content-between" style="font-size: 3.3rem;">
					<span>30%</span>
					<span>50%</span>
					<span>70%</span>
				</h3>
				<h5 class="fst-italic fs-5">TPU based headlight Protection Film Gives Head/Tail lights & Fog Lights a Smoked Visual Look.</h5>
				<div class="my-4">
					<button class="btn btn-lg btn-danger fw-bold fst-italic rounded-pill">SHOP ONLINE</button>
				</div>
				<div>
					<button class="btn btn-lg btn-danger fw-bold fst-italic rounded-pill">SHOP ONLINE</button>
				</div>	
			</div>
			<div class="col-md-6 col-12 px-md-5 px-3">
				<video style="border-radius: 20px;transform: scaleY(1.2);" class="w-100" controls>
  					<source src="" type="video/mp4">
  					<source src="" type="video/ogg">
				</video>
			</div>
		</div>		
		<div style="background-color: rgba(0, 0, 0, 0.8); z-index: 1;" class="position-absolute top-0 start-0 end-0 bottom-0">
			
		</div>
	</div>
	<!-- --------------------------------------------------------- END SMOKE --------------------------------------------------------------- -->


	<!-- --------------------------------------------------------- START PROTECT --------------------------------------------------------------- -->
	<div class="protect row bg-dark text-white position-relative">

		<div class="d-flex align-items-center flex-md-nowrap flex-wrap" style="z-index: 3;">

			<div class="col-md-6 col-0 px-5">

			</div>
			<div class="col-md-6 col-12 p-5">				
				<div>
					<button class="btn btn-lg btn-danger fw-bold fst-italic rounded-pill">SHOP ONLINE</button>
				</div>
				<div class="my-4">
					<button class="btn btn-lg btn-danger fw-bold fst-italic rounded-pill">SHOP ONLINE</button>
				</div>	
				<img src="img/SPF-70.svg" alt="">
				<h3 class="fw-bold fst-italic text-uppercase pt-2 d-flex justify-content-between" style="font-size: 3.3rem;">
					Sunroof protection
				</h3>
				<h5 class="fst-italic fs-5">A unique offering to keep cool and protected.</h5>

			</div>			
		</div>		
	</div>
	<!-- --------------------------------------------------------- END PROTECT --------------------------------------------------------------- -->


	<!-- --------------------------------------------------------- START PARTNER --------------------------------------------------------------- -->
	<div class="partner row">
		<div>
			<div class="pe-lg-5 pe-0 partner__width">
				<h2 class="text-primary fst-italic fw-light py-5 country__text">Partner resources and the 
					perks of the <br> <span class="fw-bold">faster growing</span>  PPF network.
				</h2>
				<span class="text-dark text-uppercase fs-5 fw-bold fst-italic">
					<i class="text-primary bi bi-check-lg"></i>
					Marketing Materials
				</span>
				<div class="d-flex flex-column">
					<span class="text-dark text-uppercase fs-5 fw-bold fst-italic">
						<i class="text-primary bi bi-check-lg"></i>Knowledgable Support
					</span>
					<span class="text-dark text-uppercase fs-5 fw-bold fst-italic">
						<i class="text-primary bi bi-check-lg"></i>New Client Leads
					</span>
				</div>
				<span class="text-dark text-uppercase fs-5 fw-bold fst-italic">
					<i class="text-primary bi bi-check-lg"></i>Wholesale Discount
				</span>
				<div class="my-5">
					<button class="btn px-4 fw-bold btn-primary fst-italic text-uppercase rounded-pill">Become a Partner</button>
					<button class="btn px-4 fw-bold btn-danger fst-italic text-uppercase rounded-pill my-2">Upload Your Work</button>
				</div>
			</div>
		</div>
	</div>
	<!-- --------------------------------------------------------- END PARTNER --------------------------------------------------------------- -->


	<!-- --------------------------------------------------------- START TRAINING --------------------------------------------------------------- -->
	<div class="training row position-relative bg-dark text-white">
		<div class="d-flex flex-column align-items-center justify-content-center" style="z-index: 3;">
			<div class="text-center">
				<img src="img/Silver-Patch-2.webp" alt="" class="training__silver" >
				<img src="img/Gold-Patch-2.webp" alt="" class="mx-4 training__gold">
				<img src="img/Bronze-Patch-2.webp" alt="" class="training__silver">
			</div>
			<div class="training__width text-center">
				<h2 class="fw-bold fst-italic pt-5 pb-4 training__text">Training & Certification</h2>
				<h5 class="fw-normal training__width mx-auto">
					Interested in our rigorous certification process? Sign up 
					below to be first in the know about our next available sessions.
				</h5>
				<form class="form-group px-lg-5 px-0 mx-auto my-5 training__width">
					<input style="padding: 0.7rem 0;" class="form-control rounded-pill px-3" placeholder="name" type="text">
					<input style="padding: 0.7rem 0;" class="form-control rounded-pill px-3 my-2" placeholder="email" type="email">
					<button class="form-control btn btn-lg btn-primary rounded-pill fw-bold fst-italic">SUBSCRIBE</button>
				</form>
			</div>
		</div>
		<div style="background-color: rgba(0, 0, 0, 0.8); z-index: 1;" class="position-absolute top-0 start-0 end-0 bottom-0">
			
		</div>
	</div>
	<!-- --------------------------------------------------------- END TRAINING --------------------------------------------------------------- -->


	<!-- --------------------------------------------------------- START TIPS --------------------------------------------------------------- -->
	<div class="tips row bg-dark text-primary p-lg-5 p-3">
		<div class="tips__mobile">
			<h2 class="tips__title fw-900 fst-italic text-center py-5">TIPS & TRICKS</h2>
			<div class="d-flex flex-md-nowrap flex-wrap" style="height: 53%;">
				<div class="col-md-8 col-12 pe-md-3 ps-md-0 px-0">
					<video class="w-100 h-100" controls>
  						<source src="" type="video/mp4">
  						<source src="" type="video/ogg">
					</video>
				</div>
				<div class="col-md-4 col-12 overflow-hidden tips__height" style="background-color: #262626;" >
					<div class="d-flex align-items-center justify-content-between p-3">
						<h6 class="fw-bold m-0 fst-italic">GSWF Training Playlist</h6>
						<span class="text-white">8 videos</span>
					</div>						
					<hr class="m-0">
					<div class="h-100">
						<div class="overflow-auto h-100">
							<div class="d-flex align-items-center justify-content-between my-2 px-2">
								<div class="d-flex align-items-center">
									<img src="img/Vietnam.svg" alt="" style="width: 75px;">
									<span class="fw-bold ps-1 fst-italic"> How to Install PPF on a Mirror </span>							
								</div>
								<span class="text-white">5:07</span>
							</div>
							<div class="d-flex align-items-center justify-content-between my-2 px-2">
								<div class="d-flex align-items-center">
									<img src="img/Vietnam.svg" alt="" style="width: 75px;">
									<span class="fw-bold ps-1 fst-italic"> How to Install PPF on a Mirror </span>							
								</div>
								<span class="text-white">5:07</span>
							</div>
							<div class="d-flex align-items-center justify-content-between my-2 px-2">
								<div class="d-flex align-items-center">
									<img src="img/Vietnam.svg" alt="" style="width: 75px;">
									<span class="fw-bold ps-1 fst-italic"> How to Install PPF on a Mirror </span>							
								</div>
								<span class="text-white">5:07</span>
							</div>														
							<div class="d-flex align-items-center justify-content-between my-2 px-2">
								<div class="d-flex align-items-center">
									<img src="img/Vietnam.svg" alt="" style="width: 75px;">
									<span class="fw-bold ps-1 fst-italic"> How to Install PPF on a Mirror </span>							
								</div>
								<span class="text-white">5:07</span>
							</div>
							<div class="d-flex align-items-center justify-content-between my-2 px-2">
								<div class="d-flex align-items-center">
									<img src="img/Vietnam.svg" alt="" style="width: 75px;">
									<span class="fw-bold ps-1 fst-italic"> How to Install PPF on a Mirror </span>							
								</div>
								<span class="text-white">5:07</span>
							</div>
							<div class="d-flex align-items-center justify-content-between my-2 px-2">
								<div class="d-flex align-items-center">
									<img src="img/Vietnam.svg" alt="" style="width: 75px;">
									<span class="fw-bold ps-1 fst-italic"> How to Install PPF on a Mirror </span>							
								</div>
								<span class="text-white">5:07</span>
							</div>
							<div class="d-flex align-items-center justify-content-between my-2 px-2">
								<div class="d-flex align-items-center">
									<img src="img/Vietnam.svg" alt="" style="width: 75px;">
									<span class="fw-bold ps-1 fst-italic"> How to Install PPF on a Mirror </span>							
								</div>
								<span class="text-white">5:07</span>
							</div>
							<div class="d-flex align-items-center justify-content-between my-2 px-2">
								<div class="d-flex align-items-center">
									<img src="img/Vietnam.svg" alt="" style="width: 75px;">
									<span class="fw-bold ps-1 fst-italic"> How to Install PPF on a Mirror </span>							
								</div>
								<span class="text-white">5:07</span>
							</div>
							<div class="d-flex align-items-center justify-content-between my-2 px-2">
								<div class="d-flex align-items-center">
									<img src="img/Vietnam.svg" alt="" style="width: 75px;">
									<span class="fw-bold ps-1 fst-italic"> How to Install PPF on a Mirror </span>							
								</div>
								<span class="text-white">5:07</span>
							</div>
							<div class="d-flex align-items-center justify-content-between my-2 px-2">
								<div class="d-flex align-items-center">
									<img src="img/Vietnam.svg" alt="" style="width: 75px;">
									<span class="fw-bold ps-1 fst-italic"> How to Install PPF on a Mirror </span>							
								</div>
								<span class="text-white">5:07</span>
							</div>							
						</div>



					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- --------------------------------------------------------- END TIPS --------------------------------------------------------------- -->


	<!-- --------------------------------------------------------- START INSTAGRAM --------------------------------------------------------------- -->
	<div class="instagram row bg-dark text-white">
		<div class="text-center">
			<h2 class="fw-900 fst-italic py-5 country__text">
				<i class="bi bi-instagram px-2"></i>
				<span>GSWF.GOLBAL</span>
			</h2>
			<div class="d-flex flex-lg-nowrap flex-wrap justify-content-around">
				<div class="ins__img my-1"
				 style="background: url('img/340807834_766746941564290_511911098254908373_nfull.jpg') no-repeat; 
				 background-size: cover; background-position: center;"
				 ></div>		
				<div class="ins__img my-1" 
				style="background: url('img/341014685_743699807458560_6310643153219053005_nfull.jpg') no-repeat; 
				background-size: cover;background-position: center;"></div>	
				<div class="ins__img my-1"
				 style="background: url('img/340807834_766746941564290_511911098254908373_nfull.jpg') no-repeat; 
				 background-size: cover; background-position: center;"
				 ></div>		
				<div class="ins__img my-1" 
				style="background: url('img/341014685_743699807458560_6310643153219053005_nfull.jpg') no-repeat; 
				background-size: cover;background-position: center;"></div>	
				<div class="ins__img my-1"
				 style="background: url('img/340807834_766746941564290_511911098254908373_nfull.jpg') no-repeat; 
				 background-size: cover; background-position: center;"
				 ></div>										
			</div>
		</div>
	</div>
	<!-- --------------------------------------------------------- END INSTAGRAM --------------------------------------------------------------- -->
</div>

<script type="text/javascript">

lightGallery(document.getElementById('animated-thumbnails'), {
    thumbnail: true,
});


</script>