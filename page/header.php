<style type="text/css">
	/*Di động*/
	.logo{
		width: 70px;
	}
	.nav__moblie {
		left: 75%;
	}	
	/*Tablet*/
	@media (min-width: 768px){
	.logo{
		width: 120px;
	}		
	.nav__moblie {
		left: 50%;
	}		
	}
	/*PC*/
	@media (min-width: 1400px){

	}
</style>	
<div class="position-absolute top-0 end-0 bottom-0 bg-dark p-4 d-none nav__mobile" style="z-index: 1000;">
		<div class="text-end hidden__nav"><i class="bi bi-x-lg fs-1 text-white"></i></div>
		<ul class="d-flex flex-column align-items-center m-0 list-unstyled">
				<li class="fw-bold m-2 px-4 py-2 bg-primary text-white text-center rounded-pill w-100 fst-italic">CONTACT</li>
				<li class="fw-bold m-2 px-4 py-2 bg-primary text-white text-center rounded-pill w-100 fst-italic">WARRANTY FORM</li>
				<li class="fw-bold m-2 px-4 py-2 bg-primary text-white text-center rounded-pill w-100 fst-italic">TRAINING</li>
				<li class="fw-bold m-2 px-4 py-2 bg-danger text-white text-center rounded-pill w-100 fst-italic">SHOP ONLINE</li>
				<li class="fw-bold m-2 px-4 py-2 bg-secondary text-white text-center rounded-pill w-100 fst-italic">INSTALLER SEARCH</li>
		</ul>		
</div>
<!-- ------------------------------------------------ START HEADER ------------------------------------------------------ -->
<div class="header row position-fixed top-0 start-0 end-0 ps-md-5 ps-3" style="z-index: 999;">
	<div class="d-flex align-items-center justify-content-between py-lg-3 py-0">
		<div>
			<img src="img/GSWF-WHITE-Logo.svg" alt="" class="logo" style="transform: scale(1.2);">
		</div>
		<div>
			<ul class="d-lg-flex align-items-center m-0 list-unstyled d-none">
				<li class="fw-bold mx-2 px-4 py-2 bg-white text-primary rounded-pill fst-italic">CONTACT</li>
				<li class="fw-bold mx-2 px-4 py-2 bg-white text-primary rounded-pill fst-italic">WARRANTY FORM</li>
				<li class="fw-bold mx-2 px-4 py-2 bg-white text-primary rounded-pill fst-italic">TRAINING</li>
				<li class="fw-bold mx-2 px-4 py-2 bg-danger text-white rounded-pill fst-italic">SHOP ONLINE</li>
				<li class="fw-bold mx-2 px-4 py-2 bg-dark text-white rounded-pill fst-italic">INSTALLER SEARCH</li>
				<li class="fw-bold mx-2 pe-3"><img src="img/Vietnam.svg" alt="" style="width: 36px;"></li>
			</ul>
			<ul class="d-flex align-items-center m-0 list-unstyled d-lg-none">
				<li class="fw-bold mx-2 px-4 py-md-2 py-1 bg-danger text-white rounded-pill fst-italic">SHOP ONLINE</li>
				<li class="fw-bold mx-1 pe-2"><img src="img/Vietnam.svg" alt="" style="width: 36px;"></li>				
				<li class="fw-bold mx-1 pe-3 py-2 text-white fst-italic display__nav"><i class="bi bi-justify fs-1"></i></li>
			</ul>			
		</div>
	</div>
</div>
<!-- ------------------------------------------------ END HEADER ------------------------------------------------------ -->


<script>
	const header = document.querySelector('.header')
	const logo = document.querySelector('.logo')
	window.addEventListener('scroll', (e) => {
		
		if(window.scrollY > 50){
			header.classList.remove("bg-transparent");
			header.classList.add("bg-primary");
			logo.style.transform = 'scale(1)'
		} else if(window.scrollY < 50) {
			header.classList.add("bg-transparent");
			header.classList.remove("bg-primary");
			logo.style.transform = 'scale(1.3)'
		}
	})

		const nav__mobile = document.querySelector('.nav__mobile')	
		const display__nav = document.querySelector('.display__nav')	
		const hidden__nav = document.querySelector('.hidden__nav')

display__nav.addEventListener('click', ()=> {
	nav__mobile.classList.add('d-block')
	nav__mobile.classList.remove('d-none')
})
hidden__nav.addEventListener('click',()=> {
	nav__mobile.classList.add('d-none')
	nav__mobile.classList.remove('d-block')

})
</script>