

<!DOCTYPE html>

<html lang="">

    <head>
        <style>
        #under {
                padding-bottom: 100px;
        }
        .disclaimer {
    visibility: hidden;
            
        }
        
          button {
            background-color: white;
  border: 2px solid #4CAF50;
  color: green;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;

}
button:hover {
  background-color: #4CAF50; /* Green */
  color: white;
}


        </style>
        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome!</title>

        <script src="<?php echo base_url()?>/js/math.js" type="text/javascript"></script>

        <!-- Bootstrap CSS -->

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">



        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

        <!--[if lt IE 9]>

            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>

            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

        <![endif]-->
        <link rel="stylesheet" href="<?php echo base_url()?>/css/menu.css">
    </head>

    <body style="background-color: rgb(25, 27, 25);">
<script>
  function cal() {
   a = document.getElementById('a').value;
   b = document.getElementById('b').value;
   c = document.getElementById('c').value;
   var x = -b/2*a;
   var d =  b**2-(4*a*c);
   var y = -d/4*a;
   console.log(x);
   console.log(y);
   fy(0);
   fx();
   c = document.getElementById('out').innerHTML = '(' + x + "," + y + ")";
   return 0;
   
  
  }
  function fy(x) {
   a = document.getElementById('a').value;
   b = document.getElementById('b').value;
   c = document.getElementById('c').value;
   g = math.evaluate(a*x**2 + b*x + c)
   console.log(g)
   c = document.getElementById('tipy').innerHTML = '(' + 0 + "," + c + ")";
    return 0;
  }

  function fx() {
   a = document.getElementById('a').value;
   b = document.getElementById('b').value;
   c = document.getElementById('c').value;
  
   let root1, root2;

   let discriminant = b * b - 4 * a * c;


if (discriminant > 0) {
    root1 = (-b + Math.sqrt(discriminant)) / (2 * a);
    root2 = (-b - Math.sqrt(discriminant)) / (2 * a);
    console.log(discriminant);
    document.getElementById('tipx').innerHTML =  "(" + root1 +"," + "0" + ") " + " OR " +"(" + root2 +","+ "0"+")";
    return 0;
}
  else if (discriminant == 0) {
    root1 = root2 = -b / (2 * a);
    document.getElementById('tipx').innerHTML = 'X = ' + root1;
    console.log(discriminant);
    return 0;
  }
  else {
    document.getElementById('tipx').innerHTML = 'Doesnt Intersect with X-Axis';
    console.log(discriminant);
  }
  function drop() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
    


  }
  /*function tipotx(v) {
    c = document.getElementById('c').value;
    let a = 0
  xx =  = a**2 +  + c 
  console.log(xx);
  }

 function tipoty(x)*/

</script>

<script>
      function warn() {
        alert("Not implemented yet - Kertya")
      }
    </script>
<div class="topnav" id="myTopnav">
  <a href="" class="active" onclick=>Home</a>
  <a onclick=warn() style="color: #555;">About</a>
  <a onclick=warn() style="color: #555;">Contact</a>
  <a href="dd">Download</a>
  </div>
  
</div>


     <div id="bigtron" class="jumbotron text-center" style="
    margin-bottom: 0px;
    background-color: #3c763d;">

        <h1 class="text-center">Welcome To My First Website!</h1>

         <p Class="text-primary">Created By Kertya</P>

     </div>

    

     <div id="main1" Class="container">

     <div id="welcome" class="container" style="
    height: 60px;
    padding-left: 0px;
    padding-right: 0px;
    "><h2 style=" margin-bottom: 0px;"> <?php

$t = date("H") + 13;

if ($t < "10") {

    echo "Have a Good morning!";

} elseif ($t < "18") {

    echo "Have a Good day!";

} else {

    echo "Have a Good night!";

}



  ?>

  <h2>

</div>
 
        <p>Thanks for visiting my website!</p>

        <Blockquote>

        "Iya"

         <Footer>Gede Kertya Pramana</Footer> </Blockquote>



         <h4> Tips :</h4> <p Class="text-danger">use <kbd>ctrl + r</kbd> to refresh the page <strong>QUICKLY</strong></p>
       

       <div class="jumbotron" style="background-color: #3c763d;">
       <p class="text-danger text-center" id="calcu">Quadratic Function Calculator</p>
       <p class="text-danger text-center" id="calcu"><strong>ax2 + bx + c</strong></p>
       <form>
  <label for="fname">A : </label><br>
  <input type="text" id="a" name="fname"><br>
  <label for="lname">B : </label><br>
  <input type="text" id="b" name="lname"><br>
  <label for="lname">C : </label><br>
  <input type="text" id="c" name="lname"><br><br>
  
</form>
<button type="button" onclick="cal()">Calculate</button>
<h4> X-Axis Intersection (Y = 0) :</h4> <p Class="text-safe"><kbd id="tipx">...</kbd></p>
<h4> Y-Axis Intersection (X = 0) :</h4> <p Class="text-success"><kbd id="tipy">...</kbd></p>
<h4> Extreme Point :</h4> <p Class="text-danger"><kbd id="out">...</kbd></p>
     </div>
       

      

<div id="under" class="container well-lg">

<img src="<?php echo base_url()?>/img/GR.png" class="img-rounded center" width="100" 
     height="150" 
  style="  
  margin-left: 20px;
  margin-right: auto;">
     <br>
     <strong style="  
  margin-left: auto;
  margin-right: auto;
  width: 10%;"><?php

echo "by Gede kertya Pramana";

?></strong>

</div>



        <!-- jQuery -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Bootstrap JavaScript -->

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>

</html>



