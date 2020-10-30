<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Спорт за развој</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/pages.css">
	<link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/contact.css">

</head>
<body>
    
    <?php $page="contact"; include "./menu.php" ?>   
        <div class="container">
            <div class="row" style="height: 58vh;"> 
                <div class="col-md-12 col-sm-12 head_image coaches_image">
                    <span class="l1"></span> 
                    <span class="l2"></span> 
                    <span class="l3"></span>
                </div>
            </div>
           
          
            <div class="row context align-items-center p-5">     
             
                <div class="form col-lg-12 col-md-12 col-sm-12">			
				
						
						<!-- Contact Form -->
						<div class="contact-form wow">
							
							<!--Contact Form-->
							<form method="post" action="sendemail.php" id="contact-form">
								<div class="row clearfix">
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="firstname" placeholder="Име" required>
									</div>
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="lastname" placeholder="Презиме" required>
									</div>
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="email" name="email" placeholder="E-mail" required>
									</div>
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="phone" placeholder="Телефон" required>
									</div>
									
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<textarea class="message" name="message" placeholder="Вашиот текст:"></textarea>
									</div>
									
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
										<button class="btn-style-one" type="submit" name="submit-form">Испрати</button>
									</div>
									
								</div>
							</form>
								
				
						
					</div>
				</div>
            
              
            </div>
           <?php include "./footer.php" ?>
        </div>
         
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>
</html>