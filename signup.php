<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>AGRO KRISHI</title>
   
    <link href="css/bootstrap.css" rel="stylesheet" />
    
    <link href="css/font-awesome.css" rel="stylesheet" />

    <link href="css/style.css" rel="stylesheet" />
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />  

    <script type="text/javascript" src='farmer_validation.js'></script>    

    
</head>
<body>

<?php include('includes/header.php');?>
         <div class="container">
             <h4 class="header-line"><h3>FARMER'S SIGNUP FORM</h3></h4>
        </div>
     <div class="form-area1"> 
             <div class="row">
    <div class="col-md-9 col-md-offset-1">
        <h3 align="center">SIGNUP FORM</h3>
                        </div>
                        <div class="panel-body">
                            <form name="signup" method="post" action="farmer_entry.php" onsubmit ='return valid()'>
<div class="form-group">
    <br/>
    <br/>
    <label><p>Name</p></label>
<input class="form-control" type="text" name="name"  id="name" required/>
</div>
    <div class="form-group">
    <label><p>KCC</p></label>
<input class="form-control" type="int" name="kcc"  id="kcc" required/>
</div>
    <div class="form-group">
    <label><p>City</p></label>
<input class="form-control" type="text" name="city"  id="city" required/>
</div>

<div class="form-group">
    <label><p>Pincode</p></label>
<input class="form-control" type="text" name="pincode" id="pin" required/>
</div>

<div class="form-group">
    <label><p>State</p></label>
<input class="form-control" type="text" name="state"  id="state" required/>
</div>
<div class="form-group">
    <label><p>Password</p></label>
<input class="form-control" type="password" name="password"  id="pp" required/>
</div>
    <div class="form-group">
    <label><p>Confirm Password</p> </label>
<input class="form-control"  type="password" name="confirmpassword" autocomplete="off" id="pp1" required />
</div>
    <div class="form-group">
    <label><p> Security question </p> </label>
    <br>
    <select name='ques' class="form-control">
  <option default>Select Your security questions</option>
  <option value="ques1">your favorite crop</option>
  <option value="ques2">your favorite dinner </option>
  <option value="ques3">your childhood name</option>
  <option value="ques4">your best friend</option>
</select> 
</div>
    <div class="form-group">
    <label><p>Answers</p></label>
<input class="form-control" type="text" name="ans"/>
</div>
                      
<input  type="submit" name="submit" value="SIGNUP" class="btn btn-danger"/>
                                    </form>
                            </div>
                        </div>
    </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
   
    <script src="assets/js/bootstrap.js"></script>

    <script src="assets/js/custom.js"></script>
</body>
</html>
