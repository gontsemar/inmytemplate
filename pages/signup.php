<?php
    include 'header.php';
    include '../functions/signupfunc.php';
?>

<!-- Sign up form -->
<section>
<div class="signup-details">
        <div class="page-covers">
        </div>
        <div class="container">
            <div class="signup-form">
                <div class="row">
                    <h1 class="small-row">Sign up</h1>
                </div>
                <form method="POST" action="signup.php">
                    <div class="row">                      
                        <div class="col-1">
                            <div class="row">
                                <div class="col-1">
                                    <label class="stacked-label" for="firstname">First Name</label>
                                    <input class="sdnumber-input" type="text" name="firstname" id="firstname" required/>
                                </div>
                                <div class="col-1">
                                    <label class="stacked-label-right" for="lastname">Last Name</label>
                                    <input class="phone-input" type="text" name="lastname" id="lastname" required/>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="row">                      
                        <div class="col-1">
                            <div>
                                <label for="email">Email</label>
                                <input class="input2" type="email" name="email" id="email" required/>
                            </div>
                        </div> 
                    </div>
                    <div class="row">                      
                        <div class="col-1">
                            <div class="row">
                                <div class="col-1">
                                    <label class="stacked-label" for="sdnum">SD Number</label>
                                    <input class="sdnumber-input" type="text" name="sdnum" id="sdnumber" required/>
                                </div>
                                <div class="col-1">
                                    <label class="stacked-label-right" for="phone">Phone Number</label>
                                    <input class="phone-input" type="tel" name="phone" id="telnumber" required pattern="[0-9]{10}"/>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="row">                      
                        <div class="col-1">
                            <div>
                                <label for="input-provice">Please select your province:</label>
                                <select class="input2"  name="input-provice" id="provice">
                                    <option value="">--Select a province--</option>
                                    <option value="Eastern Cape">Eastern Cape</option>
                                    <option value="Free State">Free State</option>
                                    <option value="Gauteng">Gauteng</option>
                                    <option value="KwaZulu-Natal">KwaZulu-Natal</option>
                                    <option value="Limpopo">Limpopo</option>
                                    <option value="Mpumalanga">Mpumalanga</option>
                                    <option value="North West">North West</option>
                                    <option value="Northern Cape">Northern Cape</option>
                                    <option value="Western Cape">Western Cape</option>
                                </select>
                            </div>
                        </div> 
                    </div>
                    <div class="row">                      
                        <div class="col-1">
                            <div class="form-button">
                                <button class="btn click-btn">Register</button>
                            </div>
                        </div> 
                    </div>
                </form>
            </div>            
            <div class="row">             
                <div class="col-1">
                    <div class="signup-image">
                        <a href="https://api.whatsapp.com/send?phone=27815386450&fbclid=IwAR3MZpsRTSFICAz-kMlX8YxOVEt_dSKkyss6PCOb1DAkXN_eycP5ivEWuvk" class="signup-image-link">I already have an SD or SM number</a>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  

<?php
    include 'footer.php';
?>