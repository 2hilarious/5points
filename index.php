<!DOCTYPE html>
<html lang="en">
    <head>
        <title> TrendiSoft - Technical Support </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/modernforms.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/themes/theme-blue.css">
    </head>
    <body class="mdn-bg">
        <div class="modern-forms">
        	<div align="center">
        		<!--TRENDISOFT<br><br>--><br>
                <a href="http://www.trendisoft.com"><img src="http://trendisoft.com/sketches/trendisoft/images/logo.png" width="358" height="100" alt="TRENDISOFT"></a>
        	</div>
        	<div class="modern-container mc2">
            	<form action="index.php" method="post" name="trendiform">
                    <fieldset>
                        <div class="field-group prepend-icon">
                            <input type="text" class="mdn-input" placeholder="Enter name">
                            <label class="mdn-label">Name</label>
                            <span class="mdn-icon"><i class="fa fa-male"></i></span>
                            <span class="mdn-bar"></span>
                        </div>
                        <div class="field-group prepend-icon">
                            <input type="email" class="mdn-input" placeholder="Enter email address">
                            <label class="mdn-label">Email Address</label>
                            <span class="mdn-icon"><i class="fa fa-envelope"></i></span>
                            <span class="mdn-bar"></span>
                        </div>
                        <div class="field-group prepend-icon">
                            <input type="url" class="mdn-input" placeholder="Enter website url">
                            <label class="mdn-label">Website</label>
                            <span class="mdn-icon"><i class="fa fa-globe"></i></span>
                            <span class="mdn-bar"></span>
                        </div>                      
                        <div class="field-group">
                            <textarea class="mdn-textarea" placeholder="Please enter comments"></textarea>
                            <label class="mdn-label">Your Comments</label>
                            <span class="mdn-msg right">400 characters maximum </span>
                            <span class="mdn-bar"></span>
                        </div><!-- end mdn-group -->
                        <img src="captcha/captcha7.png" alt="anti spam" height="30" width="102" />
                        <!--<div class="field-group">-->
                                    <!--<input type="text" class="mdn-input" placeholder="Copy the code up here" name="antispam">-->
                                    <!--<label class="mdn-label">Text Input</label>-->
                                    <span class="mdn-bar"></span>
                        <!--</div>-->
                    </fieldset>
                    <div class="mdn-footer">
                        <button type="submit" class="mdn-button btn-primary">Submit</button>
                        <button type="reset" class="mdn-button btn-flat">Cancel</button>
                    </div>
                </form>   
            </div><!-- modern-container -->
            <div align="center">
            	Copyright &copy; 2016 TrendiSoft
            </div>
        </div><!-- modern-forms -->
        
        <!-- Scripts -->
        <script language="javascript" type="text/javascript">

		/*function submitbutton_reg() {
			var form = document.trendiform;
			var r = new RegExp("[\<|\>|\"|\'|\%|\;|\(|\)|\&|\+|\-]", "i");

			// do field validation
			if (form.subject.value == "") {
				alert( "Veuillez indiquez l'objet de votre message s'il vous plaît." );
			}
              else if (form.lastname.value == "") {
				alert( "Veuillez indiquez votre nom s'il vous plaît." );
			} else if (r.exec(form.lastname.value) || form.lastname.value.length < 3) {
				alert( "Veuillez indiquez un nom valide:  Plus de 2 caractères" );
			}
              else if (form.firstname.value == "") {
				alert( "Veuillez indiquez votre prénom s'il vous plaît." );
			} else if (r.exec(form.firstname.value) || form.firstname.value.length < 3) {
				alert( "Veuillez indiquez un prénom valide:  Plus de 2 caractères" );
			} else if (form.email.value == "") {

				if ( form.email.value == "")
                alert( "Veuillez indiquez une adresse email valide s'il vous plaît." );

			} 
	
		else if (form.message.value == "") {
				alert( "Veuillez rédiger votre message s'il vous plaît." );
			}
            else if ((form.antispam.value != "TR1F67") || (form.antispam.value == "")) {
				alert( "Prove that you are not a robot" );
			}
              else {
				form.submit();
			}
		}
		
		*/
		
		</script>
    </body>
</html>