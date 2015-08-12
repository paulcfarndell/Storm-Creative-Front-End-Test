<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Storm Creative Test</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<style>
/* Default */
*{
	margin:0;
	padding:0;
	outline:none;
	border:none;
}
/* Clearfix - apply cf class to container to clear floats inside */
.cf:after {
	content: "";
	display: table;
	clear: both;
}

/* Template */

body {
	background: #364a5e;
	min-width: 320px;
	font-family: 'Montserrat', sans-serif;
	font-size: 13px;
	color: #fff;
}

.container {
	width: 95%;
	max-width: 1200px;
	margin: 0 auto;
}

.content_inner {
	padding:25px;
}

main {
	display: block;
	background: #fff;
}

h1 {
	font-size:30px;
}

/* Header */

header {
	padding:10% 0;
	background: url(bg-stormtest.jpg) no-repeat center;
	background-size:cover;	
}

.header_main {
	background:#e44c40;
}

/* Footer */

footer {
	display:block;
	background:#364a5e;
	padding:20px 0;
	color:#fff;
}

/* Overlay */

.olay {
	background:#f7fbfb;
	max-width:480px;
	width:94%;
	margin:20px auto;
	position:relative;
}

.olay_close {
	position:absolute;
	top:0;
	right:0;
	background: url(close_img.png) no-repeat;
	width:20px;
	height:20px;
	cursor:pointer;	
}

.olay_inner {
	padding:40px 20px;
}

.text_input {
	display:block;
	max-width:280px;
	width:90%;
	padding:8px;
	border:1px solid #f0817d;
	border-radius:3px;
	margin:0 auto 10px auto;	
}

/* Buttons */

.btn_contact {
	margin-top:10px;
	display:inline-block;
	padding:10px 20px;
	background:#fff;
	color:#e44c40;	
	border:1px solid #e44c40;	
}

.btn_contact:hover {
	background:#d0453a;
	color:#fff;	
	border:1px solid #fff;	
}

.btn_submit {
	font-family: 'Montserrat', sans-serif;
	display:block;
	padding:10px 20px;
	margin:0 auto;
	background:#72caf0;
	color:#fff;
}

.btn_submit:hover {
	background:#364a5e;
}

.btn_contact, .btn_submit {
	text-transform:uppercase;
	-o-transition: background .3s ease, color .3s ease, border-color .3s ease;
	-moz-transition: background .3s ease, color .3s ease, border-color .3s ease;
	-webkit-transition: background .3s ease, color .3s ease, border-color .3s ease;
	transition: background .3s ease, color .3s ease, border-color .3s ease;
	cursor:pointer;
}

@media screen and (max-width: 480px) {
	
	h1{
		font-size:20px;
	}
	
}

</style>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


</head>

<body>
<header>
	<div class="header_main container">
    	<div class="content_inner cf">
            <h1>Storm Front-End test</h1>
            <div class="btn_contact">Contact Us</div>
        </div>
    </div>
    <div class="olay" style="display:none;">
    	<div class="olay_close"></div>
    	<div class="olay_inner">
        	<input type="text" class="text_input" placeholder="Name" />
            <input type="text" class="text_input" placeholder="Email" />
            <input type="submit" class="btn_submit" value="Submit" />
        </div>
    </div>
</header>
<main>
</main>
<footer>
	<div class="container">
    	<p>Storm Creative Code Test 12/8/15</p>
    </div>
</footer>
<script type="text/javascript">
	var olay_btn = $('.btn_contact');
	var olay = $('.olay');
	var olay_close = $('.olay_close');
	
	$(document).ready(function() {
		olay_btn.click(function() {
			olay.stop().slideToggle();							
		});
		olay_close.click(function() {
			olay.slideUp();							
		});		
	});	
</script>
</body>
</html>