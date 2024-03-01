<!DOCTYPE html>
<html lang="en">
<head>
  <title>design_22</title>
  <meta charset="utf-8">
  <meta title="">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <!--links-->

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900;1,9..40,1000&display=swap" rel="stylesheet">



<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">


<script>
setTimeout("CallButton()",2000)
function CallButton()
{
   document.getElementById("autopopupbutton").click();   
}
</script>

</head>
<style>

:root{
	--t22-bg-primary:#fff;
	--t22-bg-secondary:#000000;
	--t22-bg1:#024846;
	--t22-bg2:#C6FF96;
	--t22-bg3:#053C3A;
	--t22-bg4:#93A981;
	--t22-bg5:#F4FFE8;
	--t22-bg6:rgba(0, 0, 0, 0.50);
	--t22_bg7:#CEE6B9;
	--t22_bg8:rgba(0, 0, 0, 0.75);
	--t22_bg9:rgba(255, 255, 255, 0.25);
	
	
	
	
	--t22-txt-primary:#000000;
	--t22-txt-secondary:#fff;
	--t22-txt-tertiary:#024846;
	--t22-txt-clr1:#C6FF96;
	--t22-txt-clr2:#344E4D;
	--t22-txt-clr3:#93A981;
	
}




<?php require 'css_file.css'?>
<?php require 'cmn_file.css'?>
</style>
	 
<body>



<!--nav bar sec start-->


<nav class="navbar navbar-expand-lg fixed-top mt-0 pt-0 ">
  <div class="container t22_bg_1 t22_nav">
  
  <div class="navbar-toggler"  data-bs-toggle="collapse" data-bs-target="#navbarNav" style="border:none;outline:none">
      <span> <i class="fa fa-bars "></i></span>
    </div>
	
    <a class="navbar-brand" href="#">
		<img src="https://icons.proket.in/proket_image/t22_logo.svg" alt="t22_logo" class="t22_logo">
	</a>
	
	
	<div class="t22_phn_only">
	<button class="t22_nav_btn"  data-bs-toggle="modal" data-bs-target="#contact">Book Now</button>
	</div>
 
	
    <div class=" collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav ">
	  
        <li class="nav-item ">
          <a class="nav-link" href="#home" >Home</a>
        </li>
		<li class="nav-item ">
          <a class="nav-link" href="#about">About</a>
        </li>
		<li class="nav-item ">
          <a class="nav-link" href="#project">Project</a>
        </li>
		<li class="nav-item ">
          <a class="nav-link" href="#specifaction">Specification</a>
        </li>
		<li class="nav-item ">
          <a class="nav-link" href="#gallery">Gallery</a>
        </li>
		<li class="nav-item ">
          <a class="nav-link" href="#location">Location</a>
        </li>
		<li class="nav-item ">
          <a class="nav-link" href="#review">Review</a>
        </li>
	
      </ul>
	  
	 
	
    </div>
	<div class="justify-content-end text-end">
		<button class="t22_nav_btn t22_desk_only" data-bs-toggle="modal" data-bs-target="#contact">Book Now</button>
	</div>
	
	

  </div>
  
</nav>


<!--nav bar sec start-->






<!--ban sec start-->
<section>
<div class="container-fluid" id="home">
<div class="row ">
<div class="p-0 t22_slide_1">
	<div class="p-0" style="background:url('http://icons.proket.in/proket_image/t22_ban_image1.png');background-size:cover;height:690px">
		<div class="t22_ban_wrapper">
			<div class="col-sm-8">
								<h1 class="t22_ban_heading"> Housing for your luxury livings & the new way of living in cities.</h1>
								<p class="t22_ban_txt">
								  "Welcome to your new chapter: a home designed to redefine luxury and embrace timeless elegance. unlock a world of possibilities with this stunning home, where luxury meets location, and dreams become addressable."
								</p>
								<button id="autopopupbutton" class="t22_ban_btn"  data-bs-toggle="modal"
								data-bs-target="#contact">Get Exclusive Discount</button>
			</div>

		</div>
	</div>
</div>


<div class="p-0 t22_slide_1">
	<div class="p-0" style="background:url('http://icons.proket.in/proket_image/t22_ban_image2.png');background-size:cover;height:690px">
		<div class="t22_ban_wrapper">
			<div class="col-sm-8">
								<h1 class="t22_ban_heading"> Best homes for you & your family.</h1>
								<p class="t22_ban_txt">
								  "Welcome to your new chapter: a home designed to redefine luxury and embrace timeless elegance. unlock a world of possibilities with this stunning home, where luxury meets location, and dreams become addressable."
								</p>
								<button class="t22_ban_btn"  data-bs-toggle="modal" data-bs-target="#contact">Get Exclusive Discount</button>
			</div>
		</div>
	</div>
</div>



</div>
</div>

</section>
<!--ban sec end-->











<!--pricing sec start-->
<section style="margin-top:100px">
	<div class="container">
		<div class="row justify-content-center">
		
		   <div class="col-sm-11">
		   <div class="row">
		
		    <div class="col-sm-3 col-6 text-center t22_phd_20">
				<div class="t22_pr_box">
					<img src="https://icons.proket.in/proket_image/t22_home_icon.svg" alt="t22_home_icon" class="t22_pr_icon"/>
							<h4 class="t22_pr_txt">₹ 90 lakh</h4>
					<p class="t22_pr_txt2">1 Bhk</p>
				</div>
			</div>
			
			 <div class="col-sm-3  col-6 text-center t22_phd_20">
				<div class="t22_pr_box">
					<img src="https://icons.proket.in/proket_image/t22_home_icon.svg" alt="t22_home_icon" class="t22_pr_icon" />
							<h4 class="t22_pr_txt">₹ 1.20 Cr</h4>
					<p class="t22_pr_txt2">2 Bhk</p>
				</div>
			</div>
			
			 <div class="col-sm-3 col-6 text-center t22_phd_20">
				<div class="t22_pr_box">
					<img src="https://icons.proket.in/proket_image/t22_home_icon.svg" alt="t22_home_icon" class="t22_pr_icon"/>
							<h4 class="t22_pr_txt">₹ 1.80 Cr</h4>
					<p class="t22_pr_txt2">3 Bhk</p>
				</div>
			</div>
			
			 <div class="col-sm-3 col-6 text-center t22_phd_20">
				<div class="t22_pr_box">
					<img src="https://icons.proket.in/proket_image/t22_home_icon.svg" alt="t22_home_icon" class="t22_pr_icon"/>
							<h4 class="t22_pr_txt">₹ 2.20 Cr</h4>
					<p class="t22_pr_txt2">4 Bhk</p>
				</div>
			</div>
			
			 </div>
			 </div>
		</div>
		
		
		<div class="row justify-content-center text-center">
			   <h4 class="t22_txt">For More Information of Pricing & Other details..</h4>
				   <div>
					   <button class="t22_brochure_btn">
						Download Brochure
					   </button>
				   </div>
		</div>
		
		
		
	</div>
</section>


<!--pricing sec end-->





<!--about sec start-->

<section class="t22_pt_150">
	<div class="container" id="about">
		<div class="row t22_phd_25">
		   <div class="col-sm-6 p-0">
			   <h2 class="t22_heading">
				 About Armoured <br> Peace
			   </h2>
		   </div>
		   
		   <div class="col-sm-6 p-0">
		      <p class="t22_bdy_txt t22_pt_30">
			   "Welcome to your new chapter: a home designed to redefine luxury and embrace timeless elegance. unlock a world of possibilities with this stunning home, where luxury meets location, and dreams become addressable."
			  </p>
		   </div>
		   
		   
		 <div class="t22_line" >
		</div>
		
		
		   
		</div>
		
		
		<div class="row justify-content-center text-center">
		  
				<div class="col-sm-4 col-6">
					<h3 class="t22_txt1"> 100 Acre</h3>
					<p class="t22_txt2"> Project area</p>
				</div>
				
				<div class="col-sm-4 col-6">
					<h3 class="t22_txt1"> 300 +</h3>
					<p class="t22_txt2"> Units</p>
				</div>
				
				<div class="col-sm-4">
					<h3 class="t22_txt1"> Dec. 2023</h3>
					<p class="t22_txt2"> Possession Date</p>
				</div>
		</div>
		
		
		
		
	</div>
</section>


<!--about sec end-->




<!--form sec start-->
<section>
	<div class="container">
		<div class="row justify-content-center t22_phd_15">
		  <div class="col-sm-11 t22_fm_bg t22_fm_phd">
		  
		  <div class="row ">
		       <div class="col-sm-5">
					   <h2 class="t22_fm_heading" style="text-align:start">Get in</h2>
					  
					   <h2 class="t22_fm_heading t22_pl_20" style="text-align:end">Touch</h2>
					   <h2 class="t22_fm_heading t22_pt_40" style="text-align:center;">With us</h2>
					   
					   <p class="t22_fm_txt">Pre-booking is open now</p>
				  
			   </div>
			   
			   <div class="col-sm-1"></div>
			   
			   <div class="col-sm-6 t22_fm_clr">
			    
				  <form action="thank_you_page.php" method="post">
				      
					  <div>
						  <label for="name">Name</label>
						  <input type="text" name="name" placeholder="Enter your name" required  pattern="[a-zA-Z ]{3,35}">
				      </div>
					  
					   <div>
						  <label for="phone">Phone</label>
						  <input type="tel" name="phone" placeholder="Enter your phone" required pattern="[6789][0-9]{9}">
				      </div>
					  
					  
					    <div>
						  <label for="email">Email</label>
						  <input type="email" name="email" placeholder="Enter your email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
				      </div>
					  
					  <div class="text-center">
					    <button class="t22_submit_btn">Submit</button>
					  </div>
					  
					  
				  </form>
				
			   </div>
			   
			   
		  </div>
		  
		  </div>
		   
		</div>
	</div>
</section>


<!--form sec end-->




<!--highlight sec start-->

<section>
	<div class="container t22_pt_150" id="project">
	   <div class="row">
	         <div class="col-sm-8">
					 <h2 class="t22_heading">
						Projects Highlights
					 </h2>
					 <p class="t22_bdy_txt t22_pt_8">
						"Welcome to your new chapter: a home designed to redefine luxury and embrace timeless elegance. unlock a world of possibilities with this stunning home, where luxury meets location, and dreams become addressable."
					 </p>
			 </div>
	   </div>
	   
	   
	   <div class="row t22_phd_15">
			  <div class="col-sm-7 t22_high_img" 
				style="background:url('http://icons.proket.in/proket_image/t22_sec_image.png');background-size:cover">
			  </div>
			  
			
			  
			  <div class="col-sm-5 t22_mt_48">
			     <ul style="list-style:none;">
				     <li class="t22_mt_48">
						 <div class="row">
							<div class="col-sm-2 col-1 text-end">
									<img src="http://icons.proket.in/proket_image/t22_right_icon.svg" alt="right_icon" class="t22_icon"/>
							 </div>
							 
							 <div class="col-sm-8 col-10">
									<h4 class="t22_list">Gym</h4>
									<p class="t22_list_txt">Fully-equipped gym with latest equipment.</p>
							 </div>
						</div>
					</li>
					
					
					  <li class="t22_mt_48">
						 <div class="row">
							<div class="col-sm-2 col-1 text-end">
									<img src="http://icons.proket.in/proket_image/t22_right_icon.svg" alt="right_icon" class="t22_icon"/>
							 </div>
							 
							 <div class="col-sm-8 col-10">
									<h4 class="t22_list">Park</h4>
									<p class="t22_list_txt">Beautiful park for residents to enjoy.</p>
							 </div>
						</div>
					</li>
					
					
					  <li class="t22_mt_48">
						 <div class="row">
							<div class="col-sm-2   col-1 text-end">
									<img src="http://icons.proket.in/proket_image/t22_right_icon.svg" alt="right_icon" class="t22_icon"/>
							 </div>
							 
							 <div class="col-sm-8 col-10">
									<h4 class="t22_list">Pool</h4>
									<p class="t22_list_txt">Sparkling pool for residents to cool off.</p>
							 </div>
						</div>
					</li>
					
					
					
					  <li class="t22_mt_48">
						 <div class="row">
							<div class="col-sm-2 text-end col-1">
									<img src="http://icons.proket.in/proket_image/t22_right_icon.svg" alt="right_icon" class="t22_icon"/>
							 </div>
							 
							 <div class="col-sm-8 col-10">
									<h4 class="t22_list">Playground</h4>
									<p class="t22_list_txt">Playground for children to play.</p>
							 </div>
						</div>
					</li>
				 </ul>
				 
			  </div>
			  
		 </div>
	   
	   
	</div>
</section>




<!--highlight sec end-->



<!--floor sec start-->

<section>
	<div class="container t22_pt_150" id="specification">
	    <div class="row">
		    <div class="col-sm-8">
					<h2 class="t22_heading">
						Sites & Floors Plan
					 </h2>
					 <p class="t22_bdy_txt t22_pt_8">
						"Welcome to your new chapter: a home designed to redefine luxury and embrace timeless elegance. unlock a world of possibilities with this stunning home, where luxury meets location, and dreams become addressable."
					 </p>
			</div>
		</div>
		
		
		<div class="row">
		     <div class="col-sm-4 t22_phd_26"  data-bs-toggle="modal" data-bs-target="#contact">
				<div class="t22_border">
					<div  class="t22_floor_img"
						style="background:url('http://icons.proket.in/proket_image/t22_floor_img.png');background-size:cover">
					</div>
				</div>
				<p class="t22_floor_txt">Master Plan &nbsp; <i class="fa fa-arrow-up t22_arrow"></i></p>
			 </div>
			 
			<div class="col-sm-4 t22_phd_26"  data-bs-toggle="modal" data-bs-target="#contact">
				<div class="t22_border">
					<div  class="t22_floor_img"
						style="background:url('http://icons.proket.in/proket_image/t22_floor_img.png');background-size:cover">
					</div>
				</div>
				<p class="t22_floor_txt">Site Plan &nbsp; <i class="fa fa-arrow-up t22_arrow"></i></p>
			 </div>
			 
			 <div class="col-sm-4 t22_phd_26"  data-bs-toggle="modal" data-bs-target="#contact">
				<div class="t22_border">
					<div  class="t22_floor_img"
						style="background:url('http://icons.proket.in/proket_image/t22_floor_img.png');background-size:cover">
					</div>
				</div>
				<p class="t22_floor_txt">01 BHK &nbsp; <i class="fa fa-arrow-up t22_arrow"></i></p>
			 </div>
			 
			 <div class="col-sm-4 t22_phd_26"  data-bs-toggle="modal" data-bs-target="#contact">
				<div class="t22_border">
					<div  class="t22_floor_img"
						style="background:url('http://icons.proket.in/proket_image/t22_floor_img.png');background-size:cover">
					</div>
				</div>
				<p class="t22_floor_txt">02 BHK &nbsp; <i class="fa fa-arrow-up t22_arrow"></i></p>
			 </div>
			 
			 <div class="col-sm-4 t22_phd_26"  data-bs-toggle="modal" data-bs-target="#contact">
				<div class="t22_border">
					<div  class="t22_floor_img"
						style="background:url('http://icons.proket.in/proket_image/t22_floor_img.png');background-size:cover">
					</div>
				</div>
				<p class="t22_floor_txt">03 BHK &nbsp; <i class="fa fa-arrow-up t22_arrow"></i></p>
			 </div>
			 
			 <div class="col-sm-4 t22_phd_26"  data-bs-toggle="modal" data-bs-target="#contact">
				<div class="t22_border">
					<div  class="t22_floor_img"
						style="background:url('http://icons.proket.in/proket_image/t22_floor_img.png');background-size:cover">
					</div>
				</div>
				<p class="t22_floor_txt">04 BHK &nbsp; <i class="fa fa-arrow-up t22_arrow"></i></p>
			 </div>
		</div>
		
		
		
		<div class="row t22_phn_only">
		   <div class="swiper t22_floor_slide" style="--swiper-pagination-color:var(--t22-txt-tertiary);">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div  data-bs-toggle="modal" data-bs-target="#contact">
							<div class="t22_border">
								<div class="t22_floor_img"
									style="background:url('http://icons.proket.in/proket_image/t22_floor_img.png');
									background-size:cover">
								</div>
							</div>
							<p class="t22_floor_txt">Master Plan &nbsp; <i class="fa fa-arrow-up t22_arrow"></i></p>
						</div>
					</div>
					
					<div class="swiper-slide">
						<div  data-bs-toggle="modal" data-bs-target="#contact">
							<div class="t22_border">
								<div class="t22_floor_img"
									style="background:url('http://icons.proket.in/proket_image/t22_floor_img.png');
									background-size:cover">
								</div>
							</div>
							<p class="t22_floor_txt">Site Plan &nbsp; <i class="fa fa-arrow-up t22_arrow"></i></p>
						</div>
					</div>
					
					<div class="swiper-slide">
						<div  data-bs-toggle="modal" data-bs-target="#contact">
							<div class="t22_border">
								<div class="t22_floor_img"
									style="background:url('http://icons.proket.in/proket_image/t22_floor_img.png');
									background-size:cover">
								</div>
							</div>
							<p class="t22_floor_txt">01 BHK &nbsp; <i class="fa fa-arrow-up t22_arrow"></i></p>
						</div>
					</div>
					
					<div class="swiper-slide">
						<div  data-bs-toggle="modal" data-bs-target="#contact">
							<div class="t22_border">
								<div class="t22_floor_img"
									style="background:url('http://icons.proket.in/proket_image/t22_floor_img.png');
									background-size:cover">
								</div>
							</div>
							<p class="t22_floor_txt">02 BHK &nbsp; <i class="fa fa-arrow-up t22_arrow"></i></p>
						</div>
					</div>
					
					<div class="swiper-slide">
						<div  data-bs-toggle="modal" data-bs-target="#contact">
							<div class="t22_border">
								<div class="t22_floor_img"
									style="background:url('http://icons.proket.in/proket_image/t22_floor_img.png');
									background-size:cover">
								</div>
							</div>
							<p class="t22_floor_txt">03 BHK &nbsp; <i class="fa fa-arrow-up t22_arrow"></i></p>
						</div>
					</div>
					
					<div class="swiper-slide">
						<div  data-bs-toggle="modal" data-bs-target="#contact">
							<div class="t22_border">
								<div class="t22_floor_img"
									style="background:url('http://icons.proket.in/proket_image/t22_floor_img.png');
									background-size:cover">
								</div>
							</div>
							<p class="t22_floor_txt">04 BHK &nbsp; <i class="fa fa-arrow-up t22_arrow"></i></p>
						</div>
					</div>
				  
				  
				</div>
				<div class="swiper-pagination t22_btn"></div>
			  </div>
		</div>
		
	</div>
</section>



<!--floor sec end-->



<!--cta sec start-->

<section class="t22_phd_15">
	<div class="container ">
		   <div class="row justify-content-center t22_cta_img" style="background:url('https://icons.proket.in/proket_image/t22_cta_img.png');background-size:cover;">
		      
			  <div class=" t22_cta_wrapper justify-content-center text-center">
			    
						<p class="t22_cta_txt">Free cab facility for you and your family.</p>
							<h1 class="t22_cta_heading">Book Your Site Visit Now</h1>
					 <div class="t22_pt_50">
						 <a href="" class="t22_cl_txt">Call: +91 74398764xx </a>
					 </div>
					 
					 <button class="t22_cta_btn"  data-bs-toggle="modal" data-bs-target="#contact">Schedule Now</button>
				 
			  </div>
			  
		   </div>
	</div>
</section>

<!--cta sec end-->



<!--gallery sec start-->
<section>
	<div class="container-fluid t22_pt_150" id="gallery">
		<div class="row justify-content-center text-center">
		      <div class="col-sm-11">
					<h2 class="t22_heading">
						Proket Gallery
					 </h2>
					 <p class="t22_bdy_txt t22_pt_8">
						"Welcome to your new chapter: a home designed to redefine luxury and embrace timeless elegance. unlock a world of possibilities with this stunning home, where luxury meets location, and dreams become addressable."
					 </p>
			</div>
		</div>
		
		
		<div class="row">
		    
			  <div class="swiper t22_gallery">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
					   <div class="t22_gallery_img"
							style="background:url('http://icons.proket.in/proket_image/t22_gal_1.png');background-size:cover">
					   </div>
					</div>
					
					<div class="swiper-slide">
					   <div class="t22_gallery_img"
							style="background:url('http://icons.proket.in/proket_image/t22_gal_2.png');background-size:cover">
					   </div>
					</div>
					
					
					<div class="swiper-slide">
					   <div class="t22_gallery_img"
							style="background:url('http://icons.proket.in/proket_image/t22_gal_3.png');background-size:cover">
					   </div>
					</div>
					
					<div class="swiper-slide">
					   <div class="t22_gallery_img"
							style="background:url('http://icons.proket.in/proket_image/t22_gal_4.png');background-size:cover">
					   </div>
					</div>
					
					<div class="swiper-slide">
					   <div class="t22_gallery_img"
							style="background:url('http://icons.proket.in/proket_image/t22_gal_1.png');background-size:cover">
					   </div>
					</div>
					
					
					<div class="swiper-slide">
					   <div class="t22_gallery_img"
							style="background:url('http://icons.proket.in/proket_image/t22_gal_2.png');background-size:cover">
					   </div>
					</div>
					
					
					<div class="swiper-slide">
					   <div class="t22_gallery_img"
							style="background:url('http://icons.proket.in/proket_image/t22_gal_3.png');background-size:cover">
					   </div>
					</div>
					
					<div class="swiper-slide">
					   <div class="t22_gallery_img"
							style="background:url('http://icons.proket.in/proket_image/t22_gal_4.png');background-size:cover">
					   </div>
					</div>
					
					
				</div>
			</div>	
		   
		</div>
		
		
	</div>
</section>

<!--gallery sec end-->




<!--amenities sec start-->
<section>
	<div class="container-fluid t22_pt_150">
		<div class="row justify-content-center text-center">
		      <div class="col-sm-11">
					<h2 class="t22_heading">
						Amenities
					 </h2>
					 <p class="t22_bdy_txt t22_pt_8">
						"Welcome to your new chapter: a home designed to redefine luxury and embrace timeless elegance. unlock a world of possibilities with this stunning home, where luxury meets location, and dreams become addressable."
					 </p>
			</div>
		</div>
		
		
		<div class="row justify-content-center text-center ">
		  <div class="col-sm-8">
			   <div class="row text-start">
			      <div class="col-sm-4 t22_phd_22 col-6">
						<div class="t22_am_bg">
							 <img src="http://icons.proket.in/proket_image/t22_am_1.svg"
								class="t22_am_icon" alt="t22_water_icon"/>
							 <p class="t22_am_txt">24 Hrs Running water</p>
						 </div>
				  </div>
				  
				    <div class="col-sm-4 t22_phd_22 col-6">
						<div class="t22_am_bg">
							 <img src="http://icons.proket.in/proket_image/t22_am_2.svg"
								class="t22_am_icon" alt="t22_security_icon"/>
							 <p class="t22_am_txt">24/7 Security</p>
						 </div>
				  </div>
				  
				    <div class="col-sm-4 t22_phd_22 col-6">
						<div class="t22_am_bg">
							 <img src="http://icons.proket.in/proket_image/t22_am_3.svg" 
								class="t22_am_icon" alt="t22_basketball_icon"/>
							 <p class="t22_am_txt">Basketball Court</p>
						 </div>
				  </div>
				  
				  
				    <div class="col-sm-4 t22_phd_22 col-6">
						<div class="t22_am_bg">
							 <img src="http://icons.proket.in/proket_image/t22_am_4.svg"
									class="t22_am_icon" alt="t22_bike_icon"/>
							 <p class="t22_am_txt">Bike Track</p>
						 </div>
				  </div>
				  
				 <div class="col-sm-4 t22_phd_22 col-6">
						<div class="t22_am_bg">
							 <img src="http://icons.proket.in/proket_image/t22_am_5.svg" 
								class="t22_am_icon" alt="t22_cctv_icon"/>
							 <p class="t22_am_txt">CCTV Camera</p>
						 </div>
				  </div>
				  
				  <div class="col-sm-4 t22_phd_22 col-6">
						<div class="t22_am_bg">
							 <img src="http://icons.proket.in/proket_image/t22_am_6.svg"
								class="t22_am_icon" alt="t22_garden_icon"/>
							 <p class="t22_am_txt">Community Garden</p>
						 </div>
				  </div>
				  
				   <div class="col-sm-4 t22_phd_22 col-6">
						<div class="t22_am_bg">
							 <img src="http://icons.proket.in/proket_image/t22_am_7.svg"
								class="t22_am_icon" alt="t22_gym_icon"/>
							 <p class="t22_am_txt">GYM</p>
						 </div>
				  </div>
				  
				   <div class="col-sm-4 t22_phd_22 col-6">
						<div class="t22_am_bg">
							 <img src="http://icons.proket.in/proket_image/t22_am_8.svg"
								class="t22_am_icon" alt="t22_games_icon"/>
							 <p class="t22_am_txt">Indoor Games</p>
						 </div>
				  </div>
				  
				  
				   <div class="col-sm-4 t22_phd_22 col-6">
						<div class="t22_am_bg">
							 <img src="http://icons.proket.in/proket_image/t22_am_9.svg" 
								class="t22_am_icon" alt="t22_track_icon"/>
							 <p class="t22_am_txt">Jogging Track</p>
						 </div>
				  </div>
				  
				   <div class="col-sm-4 t22_phd_22 col-6">
						<div class="t22_am_bg">
							 <img src="http://icons.proket.in/proket_image/t22_am_10.svg" 
								class="t22_am_icon" alt="t22_library_icon"/>
							 <p class="t22_am_txt">Library</p>
						 </div>
				  </div>
				  
				   <div class="col-sm-4 t22_phd_22 col-6">
						<div class="t22_am_bg">
							 <img src="http://icons.proket.in/proket_image/t22_am_11.svg" 
								class="t22_am_icon" alt="t22_staff_icon"/>
							 <p class="t22_am_txt">Maintenance Staff</p>
						 </div>
				  </div>
				  
				   <div class="col-sm-4 t22_phd_22 col-6">
						<div class="t22_am_bg">
							 <img src="http://icons.proket.in/proket_image/t22_am_12.svg" 
								class="t22_am_icon" alt="t22_sports_icon"/>
							 <p class="t22_am_txt">Outdoor Sports Facilities</p>
						 </div>
				  </div>
				  
				   <div class="col-sm-4 t22_phd_22 col-6">
						<div class="t22_am_bg">
							 <img src="http://icons.proket.in/proket_image/t22_am_13.svg" 
							 class="t22_am_icon" alt="t22_party_icon"/>
							 <p class="t22_am_txt">Party Hall</p>
						 </div>
				  </div>
				  
				   <div class="col-sm-4 t22_phd_22 col-6">
						<div class="t22_am_bg">
							 <img src="http://icons.proket.in/proket_image/t22_am_14.svg" 
							 class="t22_am_icon" alt="t22_power_icon"/>
							 <p class="t22_am_txt">Power Backup</p>
						 </div>
				  </div>
				  
				  
				   <div class="col-sm-4 t22_phd_22 col-6">
						<div class="t22_am_bg">
							 <img src="http://icons.proket.in/proket_image/t22_am_15_icon.svg" 
							   class="t22_am_icon" alt="t22_rain_icon"/>
							 <p class="t22_am_txt">Rain Water Harvesting</p>
						 </div>
				  </div>
				  
				   <div class="col-sm-4 t22_phd_22 col-6">
						<div class="t22_am_bg">
							 <img src="http://icons.proket.in/proket_image/t22_am_16.svg" 
								class="t22_am_icon" alt="t22_sewage_icon"/>
							 <p class="t22_am_txt">Sewage Treatment</p>
						 </div>
				  </div>
				  
				   <div class="col-sm-4 t22_phd_22 col-6">
						<div class="t22_am_bg">
							 <img src="http://icons.proket.in/proket_image/t22_am_17.svg" 
							   class="t22_am_icon" alt="t22_parking_icon"/>
							 <p class="t22_am_txt">Surface Car Park</p>
						 </div>
				  </div>
				  
				   <div class="col-sm-4 t22_phd_22 col-6">
						<div class="t22_am_bg">
							 <img src="http://icons.proket.in/proket_image/t22_am_18.svg" 
							  class="t22_am_icon" alt="t22_pool_icon"/>
							 <p class="t22_am_txt">Swimming Pool</p>
						 </div>
				  </div>
				  
			   </div>
		   </div>
		</div>
		
		
	</div>
</section>

<!--amenities sec end-->




<!--location sec start-->
<section>
	<div class="container t22_pt_150" id="location">
		<div class="row justify-content-center text-center">
		      <div class="col-sm-11">
					<h2 class="t22_heading">
						Location Advantages
					 </h2>
					 <p class="t22_bdy_txt t22_pt_8">
						"Welcome to your new chapter: a home designed to redefine luxury and embrace timeless elegance. unlock a world of possibilities with this stunning home, where luxury meets location, and dreams become addressable."
					 </p>
			</div>
		</div>
		
		
		<div class="row justify-content-center text-center">
		     <div class="col-sm-10">
			    <div class="row justify-content-center text-center">
				    <div class="col-sm-3 t22_pt_35 col-6">
					   <img src="http://icons.proket.in/proket_image/t22_loc_1.svg" alt="t22_airport_icon" class="t22_loc_icon">
					   <h6 class="t22_loc_txt">Reva University </h6>
					   <span class="t22_dis_txt">1.23 km</span>
					</div>
					
					 <div class="col-sm-3 t22_pt_35 col-6">
					   <img src="http://icons.proket.in/proket_image/t22_loc_2.svg" alt="t22_airport_icon" class="t22_loc_icon">
					     <h6 class="t22_loc_txt">Metro Station </h6>
						<span class="t22_dis_txt">11 km</span>
					</div>
					
					 <div class="col-sm-3 t22_pt_35 col-6">
					   <img src="http://icons.proket.in/proket_image/t22_loc_3.svg" alt="t22_airport_icon" class="t22_loc_icon">
					     <h6 class="t22_loc_txt">Elements Mall</h6>
						<span class="t22_dis_txt">1.23 km</span>
					</div>
					
					 <div class="col-sm-3 t22_pt_35 col-6">
					   <img src="http://icons.proket.in/proket_image/t22_loc_4.svg" alt="t22_airport_icon" class="t22_loc_icon">
					    <h6 class="t22_loc_txt">Reva University </h6>
						<span class="t22_dis_txt">1.23 km</span>
					</div>
					
					 <div class="col-sm-3 t22_pt_35 col-6">
					   <img src="http://icons.proket.in/proket_image/t22_loc_5.svg" alt="t22_airport_icon" class="t22_loc_icon">
					     <h6 class="t22_loc_txt">Royal Orchid Resort </h6>
						<span class="t22_dis_txt">12 km</span>
					</div>
					
					 <div class="col-sm-3 t22_pt_35 col-6">
					   <img src="http://icons.proket.in/proket_image/t22_loc_6.svg" alt="t22_airport_icon" class="t22_loc_icon">
					      <h6 class="t22_loc_txt">Relive Hospital</h6>
						<span class="t22_dis_txt">11 km</span>
					</div>
					
					 <div class="col-sm-3 t22_pt_35 col-6">
					   <img src="http://icons.proket.in/proket_image/t22_loc_8.svg" alt="t22_airport_icon" class="t22_loc_icon">
					       <h6 class="t22_loc_txt">Tommy Gym </h6>
						<span class="t22_dis_txt">15 Km</span>
					</div>
					
					 <div class="col-sm-3 t22_pt_35 col-6">
					   <img src="http://icons.proket.in/proket_image/t22_loc_7.svg" alt="t22_airport_icon" class="t22_loc_icon">
					      <h6 class="t22_loc_txt">IFCI Financial City </h6>
						<span class="t22_dis_txt">1.23 km</span>
					</div>
					
					
				</div>
			 </div>
		</div>
		
		
		<div class="row">
		  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497700.1123402562!2d77.30126234835662!3d12.953790193476914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1692402221278!5m2!1sen!2sin"  class="t22_map" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		
	</div>
</section>

<!--location sec end-->



<!--footer sec start-->
<section>
	<div class="container">
		<div class="row justify-content-center text-center t22_phd_15">
		    <p class="t22_footer_txt">Copyright- All rights & reserved- by Proket</p>
		</div>
	</div>
</section>

<!--footer sec end-->




<script src="https://kit.fontawesome.com/189b816080.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".t22_floor_slide", {
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
  
<script>
var slide_imges_1 = 0;
carousel_1();

function carousel_1() {
  var i;
  var x = document.getElementsByClassName("t22_slide_1");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  slide_imges_1++;
  if (slide_imges_1 > x.length) {slide_imges_1 = 1}    
  x[slide_imges_1-1].style.display = "block";  
  setTimeout(carousel_1, 2000); 
}
</script>
  
   <script>
	  function swiper(x){
		if(x.matches){
			 var swiper = new Swiper(".t22_gallery", {
      slidesPerView: 2,
      spaceBetween: 0,
    });
			
		}
		else{
			 var swiper = new Swiper(".t22_gallery", {
      slidesPerView: 3,
      spaceBetween: 0,
      
     
    });
		}
	}
	var x = window.matchMedia("(max-width: 600px)")
swiper(x) 
x.addListener(swiper)
	
	
	
</script>


</body>
</html>




<!---cl/whatsapp btn sec start-->
<section>
		<span>

		<button class="t22_proket_btn"> <img src="https://cloud3.proket.in/proket-images/gallery-990801-37680661675927995.jpg" alt="prk_img" style="width:20px">  Made With Proket</button>

		
		
		<img class="t22_proket_cl_btn_2" src="http://icons.proket.in/proket_image/t22_btn.svg" alt="whtasapp_btn"style="width:40px">
		
		<img class="t22_proket_cl_btn_1 cl_btn" src="https://cloud3.proket.in/proket-images/gallery-706373-37680661675927995.jpg" 
		alt="cl_btn" style="width:40px">

		</span>

</section>

<!---cl/whatsapp btn sec end-->




<!--modal sec start-->

<div class="modal  fade  modal-xl t22_modal" id="contact"  tabindex="-1" role="dialog"
 aria-labelledby="contactModalLabel" aria-hidden="true">
  <div class="modal-dialog">
		<div class="modal-content t22_fm_bg t22_modal_shadow">
		    <div class="container ">
		
		  
		  
		  <div class="row ">
		       <div class="col-sm-5">
					   <h2 class="t22_fm_heading" style="text-align:start">Get in</h2>
					  
					   <h2 class="t22_fm_heading t22_pl_20" style="text-align:end">Touch</h2>
					   <h2 class="t22_fm_heading t22_pt_40" style="text-align:center;">With us</h2>
					   
					   <p class="t22_fm_txt">Pre-booking is open now</p>
				  
			   </div>
			   
			   <div class="col-sm-1"></div>
			   
			   <div class="col-sm-6 t22_fm_clr">
			    
				  <form action="thank_you_page.php" method="post">
				      
					  <div>
						  <label for="name">Name</label>
						  <input type="text" name="name" placeholder="Enter your name" required  pattern="[a-zA-Z ]{3,35}">
				      </div>
					  
					   <div>
						  <label for="phone">Phone</label>
						  <input type="tel" name="phone" placeholder="Enter your phone" required  pattern="[6789][0-9]{9}">
				      </div>
					  
					  
					    <div>
						  <label for="email">Email</label>
						  <input type="email" name="email" placeholder="Enter your email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
				      </div>
					  
					  <div class="text-center">
					    <button class="t22_submit_btn">Submit</button>
					  </div>
					  
					  
				  </form>
				
			   </div>
			   
			   
		 
		   
		</div>
	</div>
		
		</div>
	</div>
</div>

<!--modal sec end-->


















