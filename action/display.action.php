<?php

$conn = \global_db\db_conn();

session_start();
$user = $_SESSION['userId'];

//check if in a conversation
$sql1 = 'SELECT * FROM  conversations where (user1 = "' . $user .'" OR user2 = "' . $user . '" ) AND status ="1"';
$res = $conn->query($sql1);
if(mysqli_num_rows($res)<1){
    echo "{}";
    die();
    
}

$res = mysqli_fetch_assoc($res);
$id = $res['id'];

$sql = 'SELECT * from messages where conversation = "'. $id .'";';
$temp = $conn->query($sql);
$result = mysqli_fetch_all($temp,MYSQLI_ASSOC);

exit(json_encode($result));

?>