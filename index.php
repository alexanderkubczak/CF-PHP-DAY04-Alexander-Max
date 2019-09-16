<!DOCTYPE html>
<html>
<head>
	<title>Aleximil</title>
</head>
<body>
	<?php

	class HelloWorldOOP
	{
		public function displayMessage()
		{
			$myMsg = "Hello Allla";
			print $myMsg;
		}
	}
	$myHelloWorldOOP = new HelloWorldOOP();
	$myHelloWorldOOP->displayMessage();

	  ?>
	
            <input type ="text"  name="name"  class ="form-control"  placeholder ="Enter Name"  maxlength ="50"   value = "<?php echo $name ?>"/>
      
               <span class = "text-danger"> <?php echo $nameError; ?> </span>
          
    

            <input type = "email"   name = "email"   class = "form-control"   placeholder = "Enter Your Email"   maxlength = "40"   value = "<?php echo $email ?>"/>
    
               <span class = "text-danger" > <?php   echo  $emailError; ?> </span>
      
          
      
            
        
            <input type = "password"   name = "pass"   class = "form-control"   placeholder = "Enter Password"   maxlength = "15"  />
            
               <span class = "text-danger" > <?php   echo  $passError; ?> </span>
      
            <hr/>

          
            <button type = "submit"   class = "btn btn-block btn-primary"   name = "btn-signup" >Sign Up</ button >
            <hr/>
          
            <a href = "index.php" >Sign in Here...</a>
    
  
   </form >
</body>
</html>