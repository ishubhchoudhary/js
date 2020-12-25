<!DOCTYPE html>
<html>
<head>
	<title>BMI CALCULATOR</title>
	<style type="text/css">
		body {
			  background: #f2f2f2;
			  font-family: 'Montserrat', sans-serif;
			}
			.container {
			  background: #EEEEEE;
			  width: 450px;
			  height: 400px;
			  border-radius: .5em;
			  box-shadow: 10px 10px 10px 10px rgba(0,0,2,.3);
			  margin: 120px auto;
			  padding: 32px 16px;
			  display: flex;
			  flex-direction: column;
			  justify-content: space-between;
			}
			.heading{
				text-align: center;
				text-shadow: 10px;
				color: orange;
				background-color: lightgray;
			}
			form{
				border-radius: 5px;
 				background-color: #f2f2f2;
 				padding: 10px;
 				text-align: center;
 				font-size: 30px;
			}
			form input{
				font-size: 20px
			}
			.calculateBtn{
				margin-left: 100px;
				font-family: cursive;
				font-size: 15px;
				width: 115px;
				height: 46px;
				text-align: center;
				color: white;
				background-color: green;
				border-radius: 10px;
			}
			.resetBtn{
				margin-left: 25px;
				font-family: cursive;
				font-size: 15px;
				width: 115px;
				height: 46px;
				text-align: center;
				color: white;
				background-color: orange;
				border-radius: 10px;
			}
			p{
				/*text-align: center;*/
				margin-left: 40px;
				font-size: 40px;
			}
	</style>
</head>
<body>
	<div class="container">
		<div class="heading">
			<h1>BMI Calculator</h1><hr>
		</div>
		<div>
			<form>
			    <label for="height">Height</label>
			    <input type="text" id="height" name="height" placeholder="Your Height (CM)...">
			</form> 
			<form>
			    <label for="whight">Whight</label>
			    <input type="text" id="whight" name="whight" placeholder="Your Whight (KG)..."><br>
			</form>    
		</div>
		<div>
			<button class="calculateBtn" id="calculateBtn">CALCULATE</button>
			<button class="resetBtn" id="resetBtn">Reset</button>
		</div>
		<p>Result = <span id="result"></span></p>
	</div>
</body>
</html>
<script type="text/javascript">
	var height = document.getElementById('height');
	var whight = document.getElementById('whight');
	var calculateBtn = document.getElementById('calculateBtn');
	var resetBtn = document.getElementById('resetBtn');
	var result = document.getElementById('result');
	calculateBtn.addEventListener('click', function(){
		// alert();
	var finalresult =  Number(whight.value) / parseFloat(height.value/100 * height.value/100);
	result.innerHTML = finalresult.toFixed(2);
	})

	resetBtn.addEventListener('click', function(){
		height.value = ""
		whight.value = ""
		result.innerHTML = ""
	})

</script>
