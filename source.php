<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $source = $_GET['fsource'];
        $db = new mysqli("localhost", "root", "", "test");
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
          }
        $sql = "UPDATE `source` SET `device`='$source' WHERE 1";
        if ($db->query($sql) === TRUE) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
          } else {
            echo "Error: " . $sql . "<br>" . $db->error;
          }
          
          $db->close();
    }
?>