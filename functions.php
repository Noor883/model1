<?php
function tik_redirect($path){
    header("location: $path");
    exit();
}


function connect()
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "clients";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // var_dump($conn);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;

   function creat_user($email,$passward,$display_name)
  $sql= "INSERT INTO users(email,passward,display_name)ValUES ('$email,$password','$display_name')
  $result = mysqli_query($connection, $sql);
  return  $connection->insert_id;

  function get_clients()
{
    $sql = "SELECT * FROM clients";
    $result = mysqli_query(connect(), $sql);
    // $first_row = mysqli_fetch_assoc($result);
    // $second_row = mysqli_fetch_assoc($result);
    // $third_row = mysqli_fetch_assoc($result);
    $customers = array();
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $clients[] = $row;
        }
    }
    return $clients;
}
function get_user($id)
{
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query(connect(), $sql);

    return mysqli_fetch_assoc($result);
}

function create_client($firstname, $lastname, $email, $phone, $sales)
{
    $connection = connect();
    $sales = !empty($sales) ? (int) $sales : 0;
    $sql = "INSERT INTO Customers  users(email,passward,display_name)ValUES('$email,$password','$display_name)
    $result = mysqli_query($connection, $sql);
    $id = $connection->insert_id;
    return $id;
}

