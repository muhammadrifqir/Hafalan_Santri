<?php
$nama = $_POST[ 'nama'];
$user = $_POST[ 'user'];
$email = $_POST[ 'email'];
$password = $_POST[ 'password'];
$nohp = $_POST[ 'nohp'];

if (!empty($nama) || !empty($user) || !empty($email) || !empty($password) || !empty($nohp)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "dataguru";
    
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
        $SELECT = "SELECT email From register Where email = ? Limit 1";
        $INSERT = "INSERT Into register (nama, user, email, password, nohp) values(?, ?, ?, ?, ?)";
        
        
        //Prepare Statement
        $stmt = $conn->prepare($SELECT);
        $smmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        
        if ($rnum==0) {
            $stmt->close();
            
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssssii", $nama, $user, $email, $password, $nohp);
            $stmt->execute();
            echo "Data telah berhasil dimasukkan";
        } else {
            echo "Seseorang telah terdaftar dengan email ini";
        } 
        $stmt->close();
        $conn->close();
    }
} else {
    echo "Semua form harus diisi";
    die();
}
?>