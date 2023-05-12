<?php 
$conn = mysqli_connect("localhost", "root", "", "blogIrwan");

if(!$conn) {
    die("Database Gagal Terhubung");
}

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data) {
    global $conn;

    $username = stripslashes(strtolower($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $confirm = mysqli_real_escape_string($conn, $data["confirm"]);

    // check
    if( $password !== $confirm ) {
        echo "
        <script>
            alert('konfirmasi password kamu salah');
        </script>
        ";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user
    mysqli_query($conn, "INSERT INTO users values('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}

?>