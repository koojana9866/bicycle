<html>

   <style>
   

::selection {
	background:#5285e2;
	
	color:#fdfdfa;
    }
	
    ::-moz-selection {
	background:#5285e2;
	
	color:#fdfdfa;
    }
	

	
    .container    { 
		position:relative;
		width:300px; 
		margin:110px auto;
		padding:30px;
		background:#f9f9f9;
        -webkit-border-radius: 4px;
           -moz-border-radius: 4px;
		        border-radius: 4px;				 
    }

    .header  { 
	    display:block; 
	    margin:0; 
	}
	
	.header p { 
	    text-align:left; 
	    font-style:normal; 
	    font-weight:normal; 
	    font-family:"PT Sans"; 
	    font-size:12px; 
	    color:#aaaaaa; 
	    margin:0; 
	}
	
	.header h4 { 
	    text-align:left; 
	    font-style:normal; 
	    font-weight:normal; 
	    font-family:"PT Sans"; 
	    font-size:18px; 
	    color:#5285e2; 
	    margin:0; 
	}
	

	
    .footer  { 
	    display:block; 
	    margin:35px 0 0 0;
	}
	
	.footer p { 
	    text-align:left; 
	    font-style:normal; 
	    font-weight:normal; 
	    font-family:"PT Sans"; 
	    font-size:12px; 
	    color:#aaaaaa;
        margin:0;		
	}	
	
	.footer a { 
	    text-align:left; 
	    font-style:normal; 
	    font-weight:normal; 
	    font-family:"PT Sans"; 
	    font-size:12px; 
	    color:#5285e2;
        text-decoration:none;		
	    margin:0; 
	}


    .facebook-button  { 
	    border:1px solid #dddddd; 
	    width:70px; 
	    padding:5px 10px; 
	    margin:10px 0 10px 0; 
	    display:inline-block; 
	    cursor:pointer; 
	    -webkit-border-radius:3px; 
	    -moz-border-radius:3px; 
	    border-radius:3px; 
	    background:#fbfbfb; 
		background-image:-webkit-gradient(linear, 0 0, 0 100%, from(#fbfbfb), to(#f3f3f3)); 
		background-image:-webkit-linear-gradient(top, #fbfbfb, #f3f3f3); 
		background-image:-o-linear-gradient(top, #fbfbfb, #f3f3f3); 
		background-image:linear-gradient(to bottom, #fbfbfb, #f3f3f3);
		background-image:-moz-linear-gradient(top, #fbfbfb, #f3f3f3);
	}
	
	 .facebook-button:hover  { 
	    border:1px solid #dddddd; 
	    width:70px; 
	    padding:5px 10px;  
	    -webkit-border-radius:3px; 
	    -moz-border-radius:3px; 
	    border-radius:3px; 
	    background:#f3f3f3; 
		background-image:-webkit-gradient(linear, 0 0, 0 100%, from(#f3f3f3), to(#fbfbfb)); 
		background-image:-webkit-linear-gradient(top, #f3f3f3, #fbfbfb); 
		background-image:-o-linear-gradient(top, #f3f3f3, #fbfbfb); 
		background-image:linear-gradient(to bottom, #f3f3f3, #fbfbfb);
		background-image:-moz-linear-gradient(top, #f3f3f3, #fbfbfb);
	}
	
	.facebook-button  .facebook-text { 
	    text-align:left; 
	    font-style:normal;  
	    margin-left:22px; 
	    font-weight:normal; 
	    font-family:"PT Sans"; 
	    font-size:12px; 
	    color:#aaaaaa;
        text-decoration:none;
	}
	
	.facebook-img { 
	    background-image:url(../Images/Blue-Icons/Facebook.png); 
	    background-repeat:no-repeat;
		width:16px;
		height:16px;
	    float:left; 
	    display:inline-block; 
		border:none;
	}
	
    a.facebook-button{ 
	    text-decoration:none; 
	}


    .twitter-button  { 
	    border:1px solid #dddddd; 
	    width:70px; 
	    padding:5px 10px; 
	    margin:10px 0 10px 8px; 
	    display:inline-block; 
	    cursor:pointer; 
	    -webkit-border-radius:3px; 
	    -moz-border-radius:3px; 
	    border-radius:3px; 
	    background:#fbfbfb; 
		background-image:-webkit-gradient(linear, 0 0, 0 100%, from(#fbfbfb), to(#f3f3f3)); 
		background-image:-webkit-linear-gradient(top, #fbfbfb, #f3f3f3); 
		background-image:-o-linear-gradient(top, #fbfbfb, #f3f3f3); 
		background-image:linear-gradient(to bottom, #fbfbfb, #f3f3f3);
		background-image:-moz-linear-gradient(top, #fbfbfb, #f3f3f3);
	}
	
	 .twitter-button:hover  { 
	    border:1px solid #dddddd; 
	    width:70px; 
	    padding:5px 10px;  
	    -webkit-border-radius:3px; 
	    -moz-border-radius:3px; 
	    border-radius:3px; 
	    background:#f3f3f3; 
		background-image:-webkit-gradient(linear, 0 0, 0 100%, from(#f3f3f3), to(#fbfbfb)); 
		background-image:-webkit-linear-gradient(top, #f3f3f3, #fbfbfb); 
		background-image:-o-linear-gradient(top, #f3f3f3, #fbfbfb); 
		background-image:linear-gradient(to bottom, #f3f3f3, #fbfbfb);
		background-image:-moz-linear-gradient(top, #f3f3f3, #fbfbfb);
	}
	
	.twitter-button  .twitter-text { 
	    text-align:left; 
	    font-style:normal;  
	    margin-left:22px; 
	    font-weight:normal; 
	    font-family:"PT Sans"; 
	    font-size:12px; 
	    color:#aaaaaa;
        text-decoration:none;
	}
	
	.twitter-img { 
	    background-image:url(../Images/Blue-Icons/Twitter.png); 
	    background-repeat:no-repeat;
		width:16px;
		height:16px;
	    float:left; 
	    display:inline-block; 
		border:none;
	}
	
    a.twitter-button{ 
	    text-decoration:none; 
	}



    .google-button  { 
	    border:1px solid #dddddd; 
	    width:70px; 
	    padding:5px 10px; 
	    margin:10px 0 10px 8px; 
	    display:inline-block; 
	    cursor:pointer; 
	    -webkit-border-radius:3px; 
	    -moz-border-radius:3px; 
	    border-radius:3px; 
	    background:#fbfbfb; 
		background-image:-webkit-gradient(linear, 0 0, 0 100%, from(#fbfbfb), to(#f3f3f3)); 
		background-image:-webkit-linear-gradient(top, #fbfbfb, #f3f3f3); 
		background-image:-o-linear-gradient(top, #fbfbfb, #f3f3f3); 
		background-image:linear-gradient(to bottom, #fbfbfb, #f3f3f3);
		background-image:-moz-linear-gradient(top, #fbfbfb, #f3f3f3);
	}
	
	 .google-button:hover  { 
	    border:1px solid #dddddd; 
	    width:70px; 
	    padding:5px 10px;  
	    -webkit-border-radius:3px; 
	    -moz-border-radius:3px; 
	    border-radius:3px; 
	    background:#f3f3f3; 
		background-image:-webkit-gradient(linear, 0 0, 0 100%, from(#f3f3f3), to(#fbfbfb)); 
		background-image:-webkit-linear-gradient(top, #f3f3f3, #fbfbfb); 
		background-image:-o-linear-gradient(top, #f3f3f3, #fbfbfb); 
		background-image:linear-gradient(to bottom, #f3f3f3, #fbfbfb);
		background-image:-moz-linear-gradient(top, #f3f3f3, #fbfbfb);
	}
	
	.google-button  .google-text { 
	    text-align:left; 
	    font-style:normal;  
	    margin-left:22px; 
	    font-weight:normal; 
	    font-family:"PT Sans"; 
	    font-size:12px; 
	    color:#aaaaaa;
        text-decoration:none;
	}
	
	.google-img { 
	    background-image:url(../Images/Blue-Icons/Google.png); 
	    background-repeat:no-repeat;
		width:16px;
		height:16px;
	    float:left; 
	    display:inline-block; 
		border:none;
	}
	
    a.google-button{ 
	    text-decoration:none; 
	}
	

	
	input[type="text"], 
	input[type="password"] { 
	    border:1px solid #dddddd; 
	    padding:8px 10px 8px 10px; 
		width:278px; 
	    margin:0 0 10px 0;
	    outline:none;  
	    font-family:"PT Sans"; 
	    font-size:14px; 
	    color:#aaaaaa; 
	    display:block;
	    background:#ffffff; 
	}
	
	input[type="text"]:focus, 
	input[type="password"]:focus { 
	    border:1px solid #cccccc; 
	}
	
	fieldset { 
	    border:none; 
	    padding:0; 
	    margin:0; 
	}
	
	.login-form button{ 
	    margin:-29px 0 0 0; 
		float:right;
	}
	
	.login-form a{ 
	    display:block;  
	    text-align:right; 
	    text-decoration:none; 
	    font-style:normal; 
	    font-weight:normal; 
	    font-family:"PT Sans"; 
	    font-size:12px; 
	    color:#aaaaaa; 
	}
	
    .button-blue  { 
	    border:none; 
		text-decoration:none; 
		text-shadow: 0 1px 1px #434343; 
		font-style:normal; 
		font-weight:normal; 
		font-family:"PT Sans"; 
		font-size:12px; 
		color:#ffffff; 
		width:90px; 
		height:25px;
		padding:0 10px; 
		cursor:pointer;
		outline:none;
		display:inline-block; 
		-webkit-border-radius:3px; 
		-moz-border-radius:3px; 
		border-radius:3px;  
		background:#5285e2; 
		background-image:-webkit-gradient(linear, 0 0, 0 100%, from(#5285e2), to(#4575cb)); 
		background-image:-webkit-linear-gradient(top, #5285e2, #4575cb); 
		background-image:-o-linear-gradient(top, #5285e2, #4575cb); 
		background-image:linear-gradient(to bottom, #5285e2, #4575cb);
		background-image:-moz-linear-gradient(top, #5285e2, #4575cb);
		
		-webkit-border-radius: 3px;
           -moz-border-radius: 3px;
		        border-radius: 3px;
				
		-webkit-box-shadow: 0 2px 0 0 #6090e8;
	       -moz-box-shadow: 0 2px 0 0 #6090e8;
	         -o-box-shadow: 0 2px 0 0 #6090e8;
	            box-shadow: 0 2px 0 0 #6090e8;
	}
	
	.button-blue:hover  { 
	    border:none; 
		text-decoration:none; 
		font-style:normal; 
		font-weight:normal; 
		font-family:"PT Sans"; 
		font-size:12px; 
		color:#ffffff; 
		width:90px; 
		height:25px;
		padding:0 10px; 
		cursor:pointer; 
		outline:none;
		-webkit-border-radius:3px; 
		-moz-border-radius:3px; 
		border-radius:3px;
	    background:#4575cb; 
		background-image:-webkit-gradient(linear, 0 0, 0 100%, from(#4575cb), to(#5285e2)); 
		background-image:-webkit-linear-gradient(top, #4575cb, #5285e2); 
		background-image:-o-linear-gradient(top, #4575cb, #5285e2); 
		background-image:linear-gradient(to bottom, #4575cb, #5285e2);
		background-image:-moz-linear-gradient(top, #4575cb, #5285e2);
		
		-webkit-border-radius: 3px;
           -moz-border-radius: 3px;
		        border-radius: 3px;

        -webkit-box-shadow: 0 2px 0 0 #6090e8;
	       -moz-box-shadow: 0 2px 0 0 #6090e8;
	         -o-box-shadow: 0 2px 0 0 #6090e8;
	            box-shadow: 0 2px 0 0 #6090e8;
	}
	

    .checkbox  input[type="checkbox"] + p::before{
	    background-image: url("../Images/Blue-Icons/Checkbox.png");
    }

   </style>
    <head>

        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="CSS3 login form for you web projects.">
	    <meta name="author" content="Business Lab - Designer Studio and Front-end Web Developer.">
	    <meta name="keywords" content="login form, html5 login form, modern login form">
	    
        <title>Login Form - Blue</title>
		
		
        <link rel="shortcut icon" type="image/ico" href="Images/Favicon.ico">
		
	
		
		<link rel="stylesheet" type="text/css" href="Css/login-form-blue.css"/>
		
    </head>
	
    <body>
		
	
		
	    <div class="container">
				
		 
		
		    <aside>
		        <header class="header">
				    <h4>Sign up your Account</h4>
		            <p>Sign up using your favourite Social Networks</p>
					<a href="#" class="facebook-button">
				        <div class="facebook-img"></div>
			            <div class="facebook-text">Facebook</div>
		            </a>
		            <a href="#" class="twitter-button">
				        <div class="twitter-img"></div>
			            <div class="twitter-text">Twitter</div>
		            </a>
		            <a href="#" class="google-button">
				        <div class="google-img"></div>
			            <div class="google-text">Google</div>
		            </a>
		        </header>
		        <section>
                    <form class="login-form" method="post" action="#">
                        <fieldset>
                            <input type="text" placeholder="Username">
                            <input type="password" placeholder="Password">
                            <input type="password" placeholder="Re-Password">
					        <div class="checkbox">
					            <label>
						            <input type="checkbox"/>
			                        <p>Keep me Logged in</p>
			                    </label>
				            </div>
						    <div class="checkbox">
					            <label>
						            <input type="checkbox"/>
			                        <p>Remember my Password</p>
			                    </label>
				            </div>
                            
					        <button type="submit" class="button-blue">Sign Up</button>
                        </fieldset>
                    </form>			
		        </section>
		        
	        </aside>	
			
		
						
		</div>
		
		
		
    </body>
	
</html>