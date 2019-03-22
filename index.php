<!DOCTYPE HTML>
<HEAD>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css" crossorigin="anonymous">
</HEAD>
<body></body>

<form action="./minesweeper.php" method="POST">

<div class="col-md-12 user-form">


   <h1>MINE SWEEPER</h1>

<div class="center-box">

<div class="name-box">
  Enter Your Name : <input type="text" name="username" id="username" placeholder="User Name" required>

</div>

<div class="size-box">
       Matrix Size :<select id="matrix" name="matrix">
				         <option id="2">2X2</option>
				         <option id="3">3X3</option> 
				         <option id="4">4X4</option> 
				         <option id="5">5X5</option> 
				         <option id="6">6X6</option> 
				         <option id="7">7X7</option> 
				         <option id="8">8X8</option>         
				         <option id="9">9X9</option> 
				         <option id="10">10X10</option> 
				         <option id="11">11X11</option> 
				         <option id="12">12X12</option> 
				         <option id="13">13X13</option> 
				         <option id="14">14X14</option> 
				         <option id="15">15X15</option> 
						 <option id="16">16X16</option> 
				         <option id="17">17X17</option> 
				         <option id="18">18X18</option> 
				         <option id="19">19X19</option> 
				         <option id="20">20X20</option> 
				    </select>  

</div>

<div>
   <input type="submit" value="Play" class="play-button">

</div>

</div>


</div>

</form>


</HTML>