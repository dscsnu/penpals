<?php

$conn = \global_db\db_conn();
 
$user = $_SESSION['userId'];

//check if in a conversation
$sql1 = 'SELECT * FROM  conversations where (user1 = "' . $user .'" OR user2 = "' . $user . '" ) AND status ="1"';
$res = $conn->query($sql1);
if(mysqli_num_rows($res)<1){
    echo "none";
}
else{
    echo "block";
}

?>