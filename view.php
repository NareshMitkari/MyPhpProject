<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>This is My Website</title>
	
  <link href="public/css/bootstrap.min.css" rel="stylesheet">
  <script src="public/js/bootstrap.min.js"></script>
  <script src="public/js/jquery.min.js"></script>

  <script src="public/js/crud.js"></script>

</head>

<body>
   
<head>
  
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Website</a>
</nav>

</head> 



  <div class="container"> 
   <form>
   	 
   	 <h5>This is Registration Form</h5>

     <hr>
   	 
   	 <label>First Name :</label> <input type="text" name="firstName" id="firstName">

     <hr>
   	 <label>Last Name :</label> <input type="text" name="lastName" id="lastName">

     <hr>

   	  <label>Phone Number :</label> <input type="text" name="phoneNumber" id="phoneNumber">


      <hr>

      <label>Email:</label>

      <input type="text" name="email" id="email">

      <hr>
     

      <label>Password :  </label>

      <input type="password" name="password" id="password">

      <hr>

       <label>Confirm Password :  </label>
       <input type="Password" name="confirmpassword" id="confirmpassword">

       <hr>




   	  <label>

   	  	Gender : Male <input type="radio" name="gender" value="male">
   	  	         Female<input type="radio"name="gender" value="female">


   	  </label>

       <hr>

        <label> Accept Termes & Conditions</label>

       <input type="checkbox" name="termsCondition" id="termsCondition">
<hr>
    <input type="button" name="submitBtn" id="submitBtn" value="submit" class="btn btn-primary" onclick="saveData();">

   </form>
 </div>

<hr>
 <footer> This is Footer </footer>


</body>
</html>