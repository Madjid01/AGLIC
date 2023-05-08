<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="view/style.css">
 
</head>
<body>

<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 col-lg-4">
				<div class="card">
					<div class="card-body">
                        <h2><i class="fa-solid fa-user"></i> LOGIN </h2>
					<form action="gestionnaire.php" method="POST">


							<div class="form-group">
                            <label > Username :</label> 
                            <input type="text" name="username"  class="form-control" required></input> 
                             </div>


                            <div class="form-group">
                            <label > password :</label> 
                            <input type="password" id="input" name="password"  class="form-control" required></input> 
                            <input type="checkbox" name="checkbox" onclick="show_password()"></input> <label > show password </label> <br> 
                            </div>


                            <div class="form-group">
                            <input type="submit" value="Login" class="btn btn-primary btn-block" onclick="validate()">   
                            </form>   
                            </div>        
                            <form action="view/sign_up.php" method="POST">   
                            <div class="form-group">    
                            <input type="submit" value="sign-up" class="btn btn-secondary btn-block" onclick="validate()">
                            </div>

                        </form>

                      </div>

                    </div>
               </div>
         </div>
  </div>
                                    




  <script src="script.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>