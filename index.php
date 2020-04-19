<!DOCTYPE html>
<html>
<head>
	<title>Currency Converter</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="custom.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&display=swap" rel="stylesheet">



</head>
<body>
	<!-- Image and text -->
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="https://img.icons8.com/officel/80/000000/currency-exchange.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Welcome to Currency Converter!
  </a>
  <a href="register.php"><button class="btn btn-success" value="Sign Up" style="width: 100px; height: 40px;">Sign Up</button></a>
</nav>
<div class="container col-md-6 col-sm-4">
<div id="box">
	<h2>Currency Converter</h2>

		<div class="row">
		<span style="margin-right: 10px;">From:</span>
		<input class="form-control col-md-3" type="text" name="" id="fromAmount" placeholder="Amount" onkeyup="convertCurrency();">

			
	
				<select class="btn btn-secondary dropdown-toggle col-md-6" id="from" onchange="convertCurrency();">
					<option value=""></option>					
				</select>
		<small style="margin-left: 42px;">Please enter Numeric Values Only.</small>
		</div>
		
		<div class="row">
		<span style="margin-right: 30px;">To:</span>
			
				<input class="form-control col-md-3" name="" id="toAmount" disabled>
			
				<select class="btn btn-secondary dropdown-toggle col-md-6" id="to" onchange="convertCurrency();">
					<option value=""></option>
				</select>
			
		</div>
	
</div>
</div>
<footer >
	<div class="footer-copyright text-center py-3 bg-dark">© 2020 Copyright:
    <a href="#https://www.linkedin.com/in/nikhil-gyanchandani-191160184"> Nikhil Gyanchandani</a><br>
    <a href="https://icons8.com/icon/hbgFszybFZv9/currency-exchange">Currency Exchange icon by Icons8</a>
  </div>
</footer>
</body>
<script type="text/javascript">
	function convertCurrency()
{
	var from = document.getElementById("from").value;
	var to = document.getElementById("to").value;

	var xmlhttp = new XMLHttpRequest();

	var url = "http://data.fixer.io/api/latest?access_key=ed753c576ae6590c60a38cc5a3d55d75&symbols=" + from + ","	+ to; 
	xmlhttp.open("GET",url,true);
	xmlhttp.send();

	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			var result = xmlhttp.responseText;

			var jsResult = JSON.parse(result);

			var oneUnit = jsResult.rates[to]/jsResult.rates[from] ;

			var amount = document.getElementById("fromAmount").value;

			document.getElementById("toAmount").value = (oneUnit*amount).toFixed(2);
		}
	}
}
</script>
</html>