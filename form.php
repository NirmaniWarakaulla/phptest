<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("school.jpg");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: left;
}
</style>
</head>
<body>
  
<div class="bg-image"></div>

<div class="bg-text">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   
   <form action="final.php" method="post">

       <div class="form-group">
           <label class="control-label col-sm-2" for="name">First Name:</label>
           <div class="col-sm-10">
             <input type="text" class="form-control" name="name" id="name" placeholder="Enter First Name">
           </div>
         </div>
       
         <div class="form-group">
         <label class="control-label col-sm-2" for="lname">Last Name:</label>
         <div class="col-sm-10">
           <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter Last Name">
         </div>
       </div>

       <div class="form-group">
         <label class="control-label col-sm-2" for="lname">Password:</label>
         <div class="col-sm-10">
           <input type="text" class="form-control" name="pwd" id="pwd" placeholder="Enter Your Password">
         </div>
       </div>
       
       <div class="form-group">
         <label class="control-label col-sm-2" for="lname">Confirm-Password:</label>
         <div class="col-sm-10">
           <input type="text" class="form-control" name="pwd1" id="pwd1" placeholder="Re-Enter Your Password">
         </div>
       </div>

       
       <input type="submit" class="btn btn-info" value="Submit Button">
     

   </form>
</div>



</body>
</html>