
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hello There!</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
       <div class="jumbotron text-center">
       <div class="container">
       <h1> Welcome! <?php echo $_POST["user"]?><h1> </div>
            

       <h2> Welcome <?php echo $_POST["user"]; ?>.<br />
        You are <?php echo $_POST["umur"]; ?> years old!
        You Born At <?php echo $_POST["tgllhr"]?>!<br>
        You Live At <?php echo $_POST["alamat"]?> !<h2>
       </div>
       </div>
       <div class="text-center">
        <h2>Thanks for Visiting :D</h2>
        </div>
     <div class="container"
     <div class="mx-auto" style="width: 200px;">
        <form action="Gede.php" method="POST">
         <button type="submit" class="btn btn-primary">To the main Page</button>
        </form>
     </div>
     </div>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
