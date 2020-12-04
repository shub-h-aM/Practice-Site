<!DOCTYPE html>
<html>
<head>
	<title> Form </title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" href="images\download.png">
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<style>
		.shubham{
			background-color: blue; 
			color:white ; 
			padding-left: 10%;

		}

		.shubham h1{
			font-size: 80px !important;
			color:red !important;
		}
blink {
  -webkit-animation: 2s linear infinite condemned_blink_effect; // for Android
  animation: 2s linear infinite condemned_blink_effect;
}
@-webkit-keyframes condemned_blink_effect { // for Android
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}
@keyframes condemned_blink_effect {
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}

	</style>
</head>

<body>
	<marquee>Hello World !</marquee>
	<blink>Hello World !</blink>
	<div class="container" class="shubham" >
		<h1 style="text-align:center;text-shadow: 15px 15px 15px black;font-family: Italic"> Registration Form  </h1>
	</div>
	<div class="container-fluid">
			
		<div class="col-md-12">
			<p style="font-size: 30px" >This application form for only those student who were not getting fee waviour,and whose parent's are in government sector.
			</p>
		</div>
			
		
		<div class="col-md-8">
			<form method="post" action="getData.php">
				<div class="form-group ">
      				<div class="col-md-4 col-xs-5">
						<label> Name: </label>
	    				<input type="text" name="name" placeholder="Enter Name" required="required" class="form-control">
					</div>

					<div class="col-md-4 col-xs-4">
		    			<label> Age: </label>
	        			<input type="Number" name="age" min="0" max="100" class="form-control"> 

    				</div>
    				

    				<div class="col-xs-3 col-md-4">
	        			<label> Category: </label>
	        			<select  name="Category" required="required"class="form-control">
	        				<option value="General">General</option>
	        				<option value="OBC">OBC</option>
	        				<option value="SC" >SC</option>
	        				<option value="ST">ST</option>
	    				</select>
					</div>
					<div class="clearfix"></div>
				</div>

				

				<div class="form-group">
					<div class="col-md-6">
						<label> Email: </label>
	        			<input type="Email" name="Email" placeholder="Enter Email Address" class="form-control">
	        		</div>

	        	
	        		<div class="col-md-6">
	        			<label> Contact: </label>
	        			<input type="Tel" name="Contact" placeholder="Contact No." minlength="10" maxlength="13"class="form-control">
	        		</div>
	        		<div class="clearfix"></div>
	        	</div>

	        	<div class="form-group">
					<div class="col-xs-2 col-md-6">
						<label> Language: </label>
    					<label class="form-control">
    					 	<span class="col-md-6"><input type="checkbox" name="lang" value="Hindi"> Hindi</span>
							<span class="col-md-6"><input type="checkbox" name="lang" value="English"> English</span>
						</label>
						<div class="clearfix"></div>
					</div>

					<div class="col-xs-2 col-md-6">
						<label> Gender: </label>
						<label class="form-control">
							<span class="col-md-6"><input type="radio" name="Gender" value="male"> Male</span>
							<span class="col-md-6"><input type="radio" name="Gender" value="female"> Female</span>
						</label>
					</div>		

				</div> 

				<div class="form-group">
					<div class="col-md-12">
						<div class="col-md-3">

							<label> District: </label>
							<input type="text" name="District" required="required" class="form-control">
						</div>
						
						<div class="col-md-3">
							<label> State:</label>
							<input type="text" name="State" required="required" class="form-control">
						</div>

						<div class="col-md-3">
							<label> Country </label>
							<input type="text" name="Country" required="required" class="form-control">
						</div>	

						<div class="col-md-3">
							<label> Pincode </label>
							<input type="number" name="" required="required" min="111111" max="9999999" class="form-control">
						</div>
					</div>

				</div>	
	        		
	        	
	        	<div class="form-group">

	        		<div class="col-md-6">
	        			<label> Address: </label>
	        			<textarea name="Address" placeholder="Enter Address...!" required="required"class="form-control"></textarea>
	        		</div>
	        		<div class="clearfix"></div>
	        	</div>
	        		

	        	<div class="form-group">

	        		
	        		<div class="col-md-6">
	        			<label style="font-family: sans-serif"> School/College Name: </label>
	        			<textarea name="co" placeholder="Enter your school/college name" required="required"class="form-control"></textarea>
	        		</div>
	        		<div class="clearfix"></div>
	        	</div>

	        	<!--<div class="form-group">

	        			<label> Instruction1: </label>
	        		<ul type="circle"> 

     					<li>hjaxsbcjsfwdck</li>
     					<li>nhfdrtkhjhr</li>
     			
     				
    				</ul>

    					<label> Instruction2: </label>
    				<ol type="a">

     					<li>hjaxsbcjsfwdck</li>
     					<li>nhfdrtkhjhr</li>
     				</ol>	
    				<div class="clearfix"></div>
    			</div>-->
    				

    			

        		<div class="col-md-6">

        			<input type="Submit" name="data_submit1" value="save" class="btn btn-primary ">
        			<input type="Reset" name="data_Reset" value="Reset" class="btn btn-danger">
    		
        		</div>
        		<div class="clearfix"></div>
        		<div class="clearfix"></div>

        	</form>
        </div>	
        	<!--<div class="col-md-3 col-xs-4">
        		<img style="border-radius: 10px;border: 2px solid black;" class="img-responsive" src="images\download.png" width="200cm" height="400cm" />
        		<div class="clearfix"></div>
       		</div>-->
       	</div>
    
    </div>	
    <footer>
    	<div class="col-md-12">
    		<p>A&nbsp;B</p>
    		<p>A&amp;B</p>
    		<div class="shubham">
    			<p>Copyright &copy; 2019-20 | Design By - SHUBHAM | Powered By - Thetechnomind Solutions Pvt. Ltd.</p>
    		</div>
    	</div>
    </footer>
 </body>
</html>