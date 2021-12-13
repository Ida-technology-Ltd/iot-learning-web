<?php 
  session_start();
  include 'dbconnect.php';
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>Welcome to IOT web learning</title>
        
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <!-- php synthax -->
   

    <body class="font-sans md:font-mono lg:font-sans xl:font-serif">
     <div class="max-w-xl bg-green-200 mx-auto mt-24 
     rounded-3xl shadow-xl">
        <p class="p-4">
            Welcome to <span class="text-4xl text-gray-900 font-bold">Ida technology</span>
     </p>
     <?php
     if(isset($_POST['login'])){
        //  fetching data from input
         $email = $_POST['email'];
         $password= $_POST['password'];
         
        //  select
        $selectUser = $conn->query("SELECT * FROM users WHERE email='$email' and password='$password' order by id desc limit 1 ");
        while($rows=mysqli_fetch_array($selectUser)){
           $fetchEmail=$rows['email'];  
           echo $fetchEmail;
        }
        if($fetchEmail != ''){
            $_SESSION['email']= $fetchEmail;
          echo "<script>
           window.location.replace('welcome.php')
          </script>";
        }else{
            echo "<p class='px-3 text-wite bg-red-300 py-2 rounded-3xl' >
            Email or password incorrect
            </p>";
        }

     }
     ?>
      <form method="POST"  class="px-4">
          <label>Username</label>
          <input type="email" name="email" placeholder="@" class="w-full px-4 py-3 rounded-lg mb-4"/>
          
          <label>Password</label>
          <input type="password" name="password"  placeholder="************" class="w-full px-4 py-3 rounded-lg mb-4"/>
         
          <input type="submit" name="login" value="Login" class="bg-gray-900 text-white font-bold px-4 py-3 rounded-3xl"/>
      </form>
     </div>
    </body>
    </html>