<?php
/**
 * simple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * simple.php provides a typical feedback form for a website
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

#EDIT THE FOLLOWING:
$toAddress = "moosefester@hotmail.com";  //place your/your client's email address here
$toName = "Johanna Heald"; //place your client's name here
$website = "Good Human Travel";  //place NAME of your client's website here
#--------------END CONFIG AREA ------------------------#
$sendEmail = TRUE; //if true, will send an email, otherwise just show user data.
$dateFeedback = true; //if true will show date/time with reCAPTCHA error - style a div with class of dateFeedback
include_once 'config.php'; #site keys go inside your config.php file
include 'contact-lib/contact_include.php'; #complex unsightly code moved here
$response = null;
$reCaptcha = new ReCaptcha($secretKey);
if (isset($_POST["g-recaptcha-response"]))
{// if submitted check response
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
if ($response != null && $response->success)
    {#reCAPTCHA agrees data is valid (PROCESS FORM & SEND EMAIL)
        handle_POST($skipFields,$sendEmail,$toName,$fromAddress,$toAddress,$website,$fromDomain);             #Here we can enter the data sent into a database in a later version of this file
    ?>
    <!-- START HTML FEEDBACK -->
    <div class="contact-feedback">
        <h3 class="feedback">Thank you for signing up for this trip!</h3>
        <h3 class="feedback">We'll respond to your application within 48 hours.</h3>
    </div>    
    <!-- END HTML FEEDBACK -->        
    <?php
}else{#show form, either for first time, or if data not valid per reCAPTCHA 
    if($response != null && !$response->success)
    {
        $feedback = dateFeedback($dateFeedback);
        send_POSTtoJS($skipFields); #function for sending POST data to JS array to reload form elements
    }//end failure feedback
 
?>
	<!-- START HTML FORM -->
	<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
	<div>
		<label>
			Full Name (as shown on passport):<br /><input class="form-field" type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="38" autofocus />
		</label>
	</div>
    <div>	
		<fieldset>
			<legend>Tour Option:</legend>
			<input type="radio" name="Tour Option" value="Kenya Spring 2017" 
			required="required" title="Tour Option is required" tabindex="50"  
			/> Kenya Spring 2017 <br />
			<input type="radio" name="Tour Option" value="Canada Summer 2017" /> Canada Summer 2017 <br />
            <input type="radio" name="Tour Option" value="Nepal Fall 2017" /> Nepal Fall 2017 <br />
            <input type="radio" name="Tour Option" value="Costa Rica Winter 2018" /> Costa Rica Winter 2018 <br />
		</fieldset>
	</div>
	<div>	
		<label>
			Email:<br /><input class="form-field" type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="38" />
		</label>
	</div>
    <div>	
		<label>
			Phone:<br /><input class="form-field" type="tel" name="Phone" placeholder="Phone" title="Best Phone Number To Reach You" tabindex="20" size="38" />
		</label>
	</div>
    <div>	
		<label>
			Birthdate:<br /><input class="form-field" id="birthdate" type="text" name="Birthdate" required="required" placeholder="Birthdate (required)" title="Birthdate is required" tabindex="20" size="38" />
		</label>
	</div>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div>	
		<label>
			Questions/Comments:<br /><textarea class="form-field" name="Questions/Comments" cols="36" rows="4" placeholder="Do you have any questions regarding your upcoming trip?" tabindex="30"></textarea>
		</label>
	</div>	
	<div><?=$feedback?></div>
    <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div> 
	<div>
		<input type="submit" value="submit" />
	</div>
    </form>
	<!-- END HTML FORM -->
    <script type="text/javascript"
        src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>
<?php
}
?>