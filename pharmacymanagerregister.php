<?php
if(isset($_SESSION['user']))
{
	echo "<script>
	window.location='admin';
	</script>";
}
 include_once('header.php');
  ?>
<script src="jquery-2.1.3.min.js" type="text/javascript"></script>

<script src="jquery.bvalidator.js" type="text/javascript"></script>
<link href="bvalidator.css" type="text/css" rel="stylesheet" />
<script type="text/javascript"> 
    $(document).ready(function () {
	
        $('#form1').bValidator();
    });
	</script> 
<script> 
function validate()  // function name
{
	// take variable now if we take <form name="" than use document.forms["myform"]["ufn"].value;
	
	// if we use <form id="" than we use var img=document.getElementById("img");
	
	var firstname=document.forms["myform"]["firstname"].value;  
	if(firstname=="" || firstname==null)  // for null condition
	{
		alert('Please Fill Out The User First Name');  // alert msg
		return false;   //return false means msg show and again on same page with value not refresh page
	}
	
	var cont_no=document.forms["myform"]["cont_no"].value;  
	if(cont_no=="" || cont_no==null)  // for null condition
	{
		alert('Please Fill Out The Contact Number');  // alert msg
		return false;   //return false means msg show and again on same page with value not refresh page
	}
}
// now fore direct validation from above file u take data-bvalidator="" from the file "jquery.bvalidator.js"

// allways take <form id=""  in jquery with #name
</script>



   

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;"> Register</h5>
                <h1>Register Page</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                    <form name="myform" action="" method="post" onsubmit="return validate()">
                            <div class="control-group">
							<label><b> Medicine Name: </b></label>
                                <input type="text" class="form-control p-4" name="medicinename" data-bvalidator="required,alpha" placeholder="Medicine Name" >
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                             <label><b> Qty: </b></label>
                                <input type="number" class="form-control p-4" name="qty" placeholder="Medicine Qty">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
							<label><b> Added Date: </b></label>
                                <input type="date" class="form-control p-4"  name="added_date" data-bvalidator="required,number" placeholder="Medicine Added Date" >
                                <p class="help-block text-danger"></p>
                            </div>
							<div class="control-group">
							<label><b> Added By: </b></label>
                                <input type="date" class="form-control p-4"  name="added_by" data-bvalidator="required,number" placeholder="Medicine Added By" >
                                <p class="help-block text-danger"></p>
                            </div>
							<div class="control-group">
							<label><b> Price: </b></label>
                                <input type="number" class="form-control p-4"  name="price" data-bvalidator="required,number" placeholder="Medicine Price" >
                                <p class="help-block text-danger"></p>
                            </div>
                            
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-5" type="submit" name="submit" id="sendMessageButton">Register</button>
                            </div>
                        
						
						
						
						
						</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    