<html>
<head>
<title>Welcome to Impactface</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

 <link href="{{ asset('/css/atg.css') }}" rel="stylesheet"> 


</head>
<body class="body">



<div class="login-page">
  <div class="form">
    
    <form method="POST" action="{{ URL::to('/atg') }}" accept-charset="UTF-8">
      @csrf
	  <h4 align="center">Register</h4>
      <input type="text" placeholder=" Name" name="name" pattern="[A-Za-z]{1,26}" value=""/>
	 
	  <input type="email" placeholder="email" name="email" value=""/>
	  
	  <input type="password" name="pincode" placeholder="pincode" pattern="[0-9]{6}">
    <a href="king">   <button>register</button> </a>    
    </form>
  </div>
</div>
</body>
</html>