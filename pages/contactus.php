
<?php
    include 'header.php';
    include '../functions/contactusfunc.php';
?>

<section>
<!------------ Featured Categories ------------>
    <div class="contact-details">
        <div class="page-covers">
        </div>
        <div class="contacts-container">
            <div class="row">
                <h1 class="small-row">Contact Us</h1> 
            </div>
            <div class="row">             
                <div class="col-4">             
                    <i class="fas fa-map-marker-alt fa-5x"></i>
                    <h2>Address</h2>
                    <div class="rating">
                        <p>2 Ncondo Place, Umhlanga</p>
                        <p>Durban, South Africa</p>
                        <p>4320</p>
                    </div>
                </div>               
                <div class="col-4">             
                    <i class="fas fa-phone-alt fa-5x"></i>
                    <h2>Hours</h2>
                    <div class="rating">
                        <p><strong>Monday - Friday:</strong> 9am - 5pm</p>
                        <p><strong>Saturday - Sunday:</strong> Closed</p>
                        <p><a href="tel:+27115246065"><b>+27 11 524 6065</b></a></p>
                    </div>
                </div>               
                <div class="col-4">               
                    <i class="fas fa-at fa-5x"></i>
                    <h2>Email</h2>
                    <div class="rating">
                        <p>Please fill out the form below or email using the below: </p>
                        <p>info@wecurelife.co.za</p>
                    </div>
                </div> 
            </div>
        </div>        
    </div> 
    <?php if($messageSent) {?>
    <div class="row">                      
        <div class="col-2">
            <div>
                <h3>Thanks for sending a message, we will be in touch soon!</h3>                      
            </div>
        </div> 
    </div>       
    <?php } else {?>
    <div class="contact-details">
        <div class="container">
            <div class="contact-form">
                <form method="POST" action="contactus.php">
                    <div class="row">                      
                        <div class="col-1">
                            <div>
                                <label for="fname">Name</label> 
                                <input class="input2" id="fname" type="text" name="name" required>                               
                            </div>
                        </div> 
                    </div>
                    <div class="row">                                              
                        <div class="col-1">
                            <div>
                                <label for="emailname">Email</label>
                                <input class="input2" id="emailname" type="email" name="email" required>
                            </div>
                        </div>
                    </div>  
                    <div class="row"> 
                        <div class="col-1">
                            <label for="subjectname">Subject</label>
                            <input class="input2" id="subjectname" type="text" name="subject" required>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-1">
                            <label for="messagename">Message</label>
                            <textarea class="input3" id="messagename" name="message"></textarea>
                        </div>
					</div>

					<div class="row">
                        <div class="col-1">
						    <button class="btn click-btn">Send Your Message</button>		
                        </div>
					</div>
				</form>
            </div>
        </div>
    </div>
    
    <?php } ?>
</section>    

<?php
    include 'footer.php';
?>