<?php
session_start();

include_once('connection.php');  //database connection
include_once('../functions/data.php');  //database connection

// if(isset($_POST['qText'])){
//
//   $q = "INSERT INTO draft (user, title, description, question) VALUES('$_SESSION[username]', 'kk', 'jj', 1)";
//   $r = mysqli_query($dbc, $q);
//   echo json_encode(mysqli_insert_id($dbc));
// }
//
// if(isset($_POST['qText'])){
//
//   $q = "UPDATE draft SET user = '$_SESSION[username]' , title =  '$_POST[qTitle]' , description = '$_POST[qText]') WHERE id = 143";
//   $r = mysqli_query($dbc, $q);
//   echo "ok";
// }

if(isset($_POST['course']) && isset($_POST['comment'])){

  $q = "INSERT INTO comments (user_id, comment, course_id) VALUES('$_SESSION[username]', '$_POST[comment]', '$_POST[course]')";
  $r = mysqli_query($dbc, $q);
}

if(isset($_POST['comment']) && isset($_POST['reply'])){

  $q = "INSERT INTO replies (user_id, reply, comment_id) VALUES('$_SESSION[username]', '$_POST[reply]', '$_POST[comment]')";
  $r = mysqli_query($dbc, $q);

  $replier =  mysqli_fetch_assoc(any_table_data($dbc, 'users', 'username', $_SESSION['username']));

  echo   '<hr />
    <div class="media">
      <div class="media-left">
        <img src="'.$replier['pp_url'].'" class="media-object" style="width:45px">
      </div>
      <div class="media-body">
        <h4 class="media-heading"><a href="'.$_SESSION['username'].'">'.$replier['fullname'].'</a> <small><i>Posted on '.$_POST['time'].'</i></small></h4>
        <p>'.$_POST['reply'].'</p>
      </div>
    </div>';


}

?>
