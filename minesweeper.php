<!DOCTYPE html>
<html>
<head>
    <title>MineSweeper</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="css/style.css" crossorigin="anonymous">
<style type="text/css">
    
table{
    border: 2px solid;
    padding: 5px;
}
td{
    border: 1px solid;
    padding: 5px;

}

</style>

</head>
<body>
    <h1>MINES SWEEPER</h1>

<div class="col-md-12">

<div class="col-md-8 MineSweeper-div"> 

<h2>Your Score: <span id="score">0</span></h2>
<TABLE id="MineSweeper" >

<?php

session_start();


if (isset($_POST['username'])) {
$_SESSION['user'] =$_POST['username'];
}

if (isset($_POST['matrix'])) {
$matrix_raw=$_POST['matrix'];
$_SESSION['matrix'] = explode("X",$matrix_raw)[0];
}


$user=$_SESSION['user'];
$matrix = $_SESSION['matrix'];


echo "<h2>User Name: <span id='username'>".$user."</span></h2>";

$start=1;
$end=$matrix*$matrix; // 25

$matrixArray = [];
        // 26 <= 25
for ($b=1; $b<=$end; $b++){

array_push($matrixArray, $b);

}


$pomb_position= selectBombPos($matrixArray, $matrix);
//selectBombPos($matrixArray, $matrix);
//print_r($pomb_position);

for($i=1; $i<=$matrix; $i++){

    echo "<tr>";

  for($j=1; $j<=$matrix; $j++){
   
        if (in_array($start, $pomb_position)){
            echo "<td id=block-bomb".$start." class='block-bomb' onclick='clickDiv(this.id)'></td>";
        } else {
            echo "<td id=block".$start." onclick='clickDiv(this.id)'> <span id='numbers'>".$start."</span></td>";
        }

    

    $start=$start+1;

   }  

    echo "</tr>";
}

function selectBombPos($matrixArray, $matrix) {
    $a=$matrixArray;
    $random_keys=array_rand($a, $matrix);
    for($k=0; $k<count($random_keys);$k++){
       
      $random_keys[$k]=$random_keys[$k]+1 ; 
    }

    return  $random_keys;
}



        




?>

</TABLE>
<button id="restart" onclick="restart()" hidden>Restart</button>
</div> 


<div id="topscore" class="col-md-4">
<h1>TOP SCORE</h1>

    <table>
        <tr><td> User </td><td> Score </td><td> Time </td></tr>
<?php


    require_once 'config.php';

    $query ="SELECT  `user`, `time`, `score` FROM `minesweeper` WHERE matrix= ".$matrix." ORDER BY score DESC LIMIT 10";

    $results = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($results)) {
        // echo $row["user"];
        // echo $row["time"];
        // echo $row["score"];
        echo '<tr><td>'. $row["user"].'</td><td>'.$row["score"].'</td><td> '.$row["time"].'</td></tr>';
    }
?>

    </table>
    

</div>

<div id="gameOver" class="gameOver" hidden>Game Over</div>
<div id="youWin" class="gameOver" hidden>You Win</div>
</div>

</body>



<script type="text/javascript">
// (function() {
//    alert('test');
// })(); 
var counter = (function (){
    var score = 0;
    return function(){
        return score = score + 1;
    }
})();

function clickDiv(id){
    var bomb = id.includes('bomb');
    var td = document.getElementById(id);
    var tds = document.getElementsByTagName('td');

    if(bomb){
        for (var i = 0; i < tds.length; i++) {
            tds[i].pseudoStyle("after","background","transparent !important");
            tds[i].removeAttribute('onclick', null);

        }
        td.removeAttribute('onclick', null);
        document.getElementById('gameOver').removeAttribute('hidden', null);
        document.getElementById('restart').removeAttribute('hidden', null);


        var scoretosend = document.getElementById('score').innerHTML;
        var user_name = document.getElementById('username').innerHTML;
        var matrix = <?php echo $matrix; ?>;
                
        $.post('./updatescore.php', {scoretosend:scoretosend, user_name:user_name, matrix:matrix },
        function(data)
          {

                console.log(data);
        });





    } else {
        var scoreValue = counter();
        document.getElementById('score').innerHTML = scoreValue;
        td.pseudoStyle("after","background","transparent !important");
        var bomb_count="<?php echo $matrix; ?>";
        var tds_length="<?php echo $end; ?>";

        console.log(bomb_count);
        console.log(tds_length);

        if(scoreValue == tds_length - bomb_count){
            document.getElementById('youWin').removeAttribute('hidden', null);
            document.getElementById('restart').removeAttribute('hidden', null);
            // alert('You Win !!!');

            var scoretosend = document.getElementById('score').innerHTML;
            var user_name = document.getElementById('username').innerHTML;
            var matrix =bomb_count;
                    
            $.post('./updatescore.php', {scoretosend:scoretosend, user_name:user_name, matrix:matrix },
            function(data)
              {
                    console.log(data);

            });
            return;
        }
    }
} 

function restart(){
    document.location.reload(true);
}

var UID = {
    _current: 0,
    getNew: function(){
        this._current++;
        return this._current;
    }
};

HTMLElement.prototype.pseudoStyle = function(element,prop,value){
    var _this = this;
    var _sheetId = "pseudoStyles";
    var _head = document.head || document.getElementsByTagName('head')[0];
    var _sheet = document.getElementById(_sheetId) || document.createElement('style');
    _sheet.id = _sheetId;
    var className = "pseudoStyle" + UID.getNew();
    
    _this.className +=  " "+className; 
    
    _sheet.innerHTML += " ."+className+":"+element+"{"+prop+":"+value+"}";
    _head.appendChild(_sheet);
    return this;
};

</script>

</body>
</html>





