<!doctype html>
<html lang="en">
    
    <head>
        <?php
        require 'pages/head.php';
        ?>
       

       <style>
       
        .accordion li.active .accordion__title {
    background: #3d9386;
    border-bottom: 1px solid #3d9386;
}
     

       </style>
    </head>
    <body class=" " style="font-family: 'Quicksand', sans-serif;">
        <?php
        require 'pages/nav2.php';
        ?>
        <div class="main-container">
        	 <section class="imagebg image--dark cover cover-blocks bg--secondary" data-overlay="6">
                <div class="background-image-holder">
                    <img alt="background" src="images/faq.jpg" />
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-5 ">
                            <div>
                                <h2>FAQ</h2>
                                <p class="lead">
                                  Frequently Asked Questions
                                </p>
                                <hr class="short">
                                
                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
             <section id="about" class="space--sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                           
                        <ul class="accordion accordion-1 accordion--oneopen customaccording" >
	<li class="active">
		<div class="accordion__title">
			<span class="h5">How do I apply</span>
		</div>
		<div class="accordion__content">
		We have a custom application portal that opens every 1 month. Click on the Apply Button above and complete the application.
		</div>
	</li>
	<li>
		<div class="accordion__title">
			<span class="h5">Do I need a pc for this program</span>
		</div>
		<div class="accordion__content">
			Yes, a pc is highly needed to take our classes. Most of the softwares we use here can only run on pc's
		</div>

	</li>




	<li>
		<div class="accordion__title">
			<span class="h5">How much is your tuition</span>
		</div>
		<div class="accordion__content">
			Our lectures are completely for free! Just apply.
		</div>

	</li>


	<li>
		<div class="accordion__title">
			<span class="h5">Do you run offline classes</span>
		</div>
		<div class="accordion__content">
			Our classes are all online, but we hold offline meetups.
		</div>

	</li>


	<li>
		<div class="accordion__title">
			<span class="h5">How much time should I commit to learning</span>
		</div>
		<div class="accordion__content">
			We recommend about 10-15 hours per week. Learning here is self paced, but commit as much time as you can.
		</div>

	</li>


</ul>
	
                           
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>




            


              
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
    
       
             

           

            <section class="text-center bg--secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                            <h3>Collaborate | Code | Ship | Innovate</h3>
                           
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
         
            
            <?php
            require 'pages/footer.php';
            ?>
        </div>
        
        <?php
        require 'pages/scripts.php';
        ?>
    </body>
    
</html>