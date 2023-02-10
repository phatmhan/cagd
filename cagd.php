<!DOCTYPE html>
<html lang="en">
  <head>
   <title>CAGD CALCULATOR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>

html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: Arial, Helvetica, sans-serif;
  background: linear-gradient(#141e30, #243b55);
}

.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
  font-family: Arial, Helvetica, sans-serif;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}

.login-box form  {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #03e9f4;
  font-size: 10px;
  text-decoration: none;
  
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}







@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}



@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}



@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}



@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}

#off, h2 {
  color: #03e9f4;
  font-weight: bold
}
  </style>
  </head>
<body>
<div class="login-box">
  <h2>CAGD CALCULATOR</h2>
  <form method="POST" action="cagd.php">
    <div class="user-box">
      <input type="text" name="principal" required="">
      <label>Principal</label>
    </div>
    <div class="user-box">
      <input type="text" name="months" required="">
      <label>Months</label>
    </div>
  
    <button type="submit" class="btn btn-info btn-xs" name="submit">Submit</button>
    <a href="cagd.php"><button type="button" name="refresh"><i class="fa fa-refresh" style="font-size:14px;color:red"></i></button></a>

  </form>


<?php
 try{
  if(ISSET($_POST['submit'])){

    $principal= $_POST['principal'];
    $month= $_POST['months'];

    if ($month<=12){
      $a = 3 * $month;
      // $a = 36/12 = 3 ie. monthly interest
  $insurance = ($a+5+0.5)/100;
  $interest = $insurance * $principal;
  $TotalDue = $interest + $principal;
  $Repayment = $TotalDue / $month;
  echo '<br>';
  echo'<lable id="off"><span>Principal: </span>GH<span>&#8373; </span>'.number_format($principal, 2, '.', ',').'</label><br>';
  echo'<lable id="off"><span>Months: '.number_format($month).'</label><br>';
  echo'<lable id="off"><span>Interest: </span> GH<span>&#8373; </span>'.number_format($interest, 2, '.', ',').'</label><br>';
  echo'<lable id="off"><span>Total Amount Due: </span>GH<span>&#8373; </span>'.number_format($TotalDue, 2, '.', ',').'</label><br>';
  echo'<lable id="off"><span>Repayment: </span>GH<span>&#8373; </span>'.number_format($Repayment, 2, '.', ',').'/month</label>';

} elseif ($month>=12 && $month<=24){
  $a = 3 * $month;
      // $a = 36/12 = 3 ie. monthly interest
  $insurance = ($a+5+0.8)/100;
  $interest = $insurance * $principal;
  $TotalDue = $interest + $principal;
  $Repayment = $TotalDue / $month;
  echo '<br>';
  echo'<lable id="off"><span>Principal: </span>GH<span>&#8373; </span>'.number_format($principal, 2, '.', ',').'</label><br>';
  echo'<lable id="off"><span>Months: '.number_format($month).'</label><br>';
  echo'<lable id="off"><span>Interest: </span> GH<span>&#8373; </span>'.number_format($interest, 2, '.', ',').'</label><br>';
  echo'<lable id="off"><span>Total Amount Due: </span>GH<span>&#8373; </span>'.number_format($TotalDue, 2, '.', ',').'</label><br>';
  echo'<lable id="off"><span>Repayment: </span>GH<span>&#8373; </span>'.number_format($Repayment, 2, '.', ',').'/month</label>';
}
elseif($month>24||$month<=60){
     $a = 3.1667 * $month;
     // $a = 38/12 = 3.1667 ie. monthly interest
  $insurance = ($a+5+0.8)/100;
  $interest = $insurance * $principal;
  $TotalDue = $interest + $principal;
  $Repayment = $TotalDue / $month;
  echo '<br>';
  echo'<lable id="off"><span>Principal: </span>GH<span>&#8373; </span>'.number_format($principal, 2, '.', ',').'</label><br>';
  echo'<lable id="off"><span>Months: '.number_format($month).'</label><br>';
  echo'<lable id="off"><span>Interest: </span> GH<span>&#8373; </span>'.number_format($interest, 2, '.', ',').'</label><br>';
  echo'<lable id="off"><span>Total Amount Due: </span>GH<span>&#8373; </span>'.number_format($TotalDue, 2, '.', ',').'</label><br>';
  echo'<lable id="off"><span>Repayment: </span>GH<span>&#8373; </span>'.number_format($Repayment, 2, '.', ',').'</label>';
}
  
}} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();

}


?>

</div>


</body>
</html>