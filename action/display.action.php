<?php

$conn = \global_db\db_conn();

$user = $_SESSION['userId'];

//check if in a conversation
$sql1 = 'SELECT * FROM  conversations where (user1 = "' . $user .'" OR user2 = "' . $user . '" ) AND status ="1"';
$res = $conn->query($sql1);
if(mysqli_num_rows($res)<1){
    echo "{}";
    die();
}

$res =mysqli_fetch_assoc($res);
$id = $res['id'];
if($_SESSION['userId']==$res['user1']){
    $nickname = $res['nick2'];
}
else{
    $nickname = $res['nick1'];
}

$sql = 'SELECT * from messages where conversation = "'. $id .'";';
$result = array();
$temp = $conn->query($sql);

while($a = mysqli_fetch_assoc($temp)){
    if($a["sender"]==$_SESSION['userId']){
        $a["sender"] = "You";
    }
    else{
        if($nickname == ""){
            $a["sender"] = "Friend";
        }
        else{
            $a["sender"] = $nickname;
        }
    }
    $result[] = $a;
}

exit(json_encode($result));

?>