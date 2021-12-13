
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>Welcome to IOT web learning</title>
        
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <!-- php synthax -->
    <?php
    echo "welcome";

    $firstname="<p class='text-center text-green-600 text-4xl'>Ida technology</p><br>";
    echo $firstname;

    $fnumber=45;
    $snumber=100;
    $sum= $fnumber+$snumber;
    echo  "The sum is : $sum";
    echo  "The sum is :".$sum."";
    // if condition 
     if($fnumber>$snumber){
         echo" The firstnumber is greater than second number";
     }
     else if($fnumber==$snumber){
         echo "value for both numbers are equal";
     }
     else{
         echo "The second number is greater than fits number";
     }
    //  looping 
    $x=0;
    // while($x<$fnumber){
        
    //     echo "$x<br>";$x++;
    // }
    for($x=0;$x<$fnumber; $x++){
        echo "$x";
    }

    ?>

    <body class="font-sans md:font-mono lg:font-sans xl:font-serif">
     <div class="max-w-xl bg-green-200 mx-auto mt-24 
     rounded-3xl shadow-xl">
        <p class="p-4">
            Welcome to <span class="text-4xl text-gray-900 font-bold">Ida technology</span>
     </p>
      <form class="px-4">
          <label>Username</label>
          <input type="email" placeholder="@" class="w-full px-4 py-3 rounded-lg mb-4"/>
          
          <label>Password</label>
          <input type="password"  placeholder="************" class="w-full px-4 py-3 rounded-lg mb-4"/>
         
          <input type="submit" value="Login" class="bg-gray-900 text-white font-bold px-4 py-3 rounded-3xl"/>
      </form>
     </div>
    </body>
    </html>