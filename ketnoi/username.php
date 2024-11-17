<?php
function checkusername($username, $pass){
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM user WHERE username = :username AND pass = :pass");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':pass', $pass);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        return $result['role'];
    } else {
        return false; 
    }
}
?>