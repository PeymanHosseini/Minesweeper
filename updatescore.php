<?php



function updatescore($scoretosend, $user_name, $matrix){
	require_once 'config.php';

	$query = "INSERT INTO `minesweeper` (`id`, `user`, `time`, `score`, `matrix`) VALUES (NULL, '".$user_name."', CURRENT_TIMESTAMP, '".$scoretosend."', '".$matrix."')";

	mysqli_query($conn, $query);

	$current_id = mysqli_insert_id($conn);

	$query ="SELECT  `user`, `time`, `score` FROM `minesweeper` WHERE matrix= ".$matrix." ORDER BY score DESC LIMIT 10";

    $results = mysqli_query($conn, $query);

     $arrayofscore=array();

    while ($row = mysqli_fetch_assoc($results)) {
        // echo $row["user"];
        // echo $row["time"];
        // echo $row["score"];
         $arrayofrow = array( 
            'user'=> $row[ 'user' ],
            'time'=> $row[ 'time' ],
            'score'=> $row[ 'score' ]
        );
         array_push($arrayofscore, $arrayofrow);
    }

  	echo json_encode(  $arrayofscore ); 

	//return $current_id;
 
 }





$scoretosend=$_POST['scoretosend'];
$user_name=$_POST['user_name'];
$matrix=$_POST['matrix'];

updatescore($scoretosend, $user_name, $matrix);




?>