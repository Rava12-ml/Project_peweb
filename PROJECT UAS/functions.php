<?php
$conn = mysqli_connect("localhost:3309","root","kweis2+#81hdjG","uas");
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }

    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah_profil($data) {
    global $conn;

    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $telepon = htmlspecialchars($data['telepon']);
    $alamat = htmlspecialchars($data['alamat']);

    // Handle file upload
    $foto_profil = upload_gambar();
    if (!$foto_profil) {
        return false; // Stop if upload fails
    }

    $query = "INSERT INTO profil (nama, email, telepon, alamat, foto_profil)
              VALUES ('$nama', '$email', '$telepon', '$alamat', '$foto_profil')";

    mysqli_query($conn, $query);

    // Return the ID of the new row to store in the session
    return mysqli_insert_id($conn);
}
function ubah_profil($data) {
    global $conn;

    $id = $data['id'];
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $telepon = htmlspecialchars($data['telepon']);
    $alamat = htmlspecialchars($data['alamat']);
    $gambarLama = htmlspecialchars($data['gambarLama']);

    // Check if user selected a new image
    if ($_FILES['foto_profil']['error'] === 4) { // 4 means no file was uploaded
        $foto_profil = $gambarLama;
    } else {
        $foto_profil = upload_gambar();
        if (!$foto_profil) {
            return false;
        }
    }

    $query = "UPDATE profil SET
                nama = '$nama',
                email = '$email',
                telepon = '$telepon',
                alamat = '$alamat',
                foto_profil = '$foto_profil'
              WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function upload_gambar() {
    $namaFile = $_FILES['foto_profil']['name'];
    $ukuranFile = $_FILES['foto_profil']['size'];
    $error = $_FILES['foto_profil']['error'];
    $tmpName = $_FILES['foto_profil']['tmp_name'];

    // Check if an image was uploaded
    if ($error === 4) {
        echo "<script>alert('Pilih gambar terlebih dahulu!');</script>";
        return false;
    }

    // Check for valid image extensions
    $ekstensiValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiValid)) {
        echo "<script>alert('Yang Anda upload bukan gambar!');</script>";
        return false;
    }

    // Generate a new unique filename
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    // Move the file to the 'img' directory
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}
function regristasi($data){
    global $conn;

    $username = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["confirm_password"]);

    #cek user harus email atau nomor 
    if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
    } elseif (preg_match('/^[0-9]{10,13}$/', $username)) {
    } else {
        echo "<script>
              alert('Harap masukkan email atau nomor telepon yang valid')
              </script>";
        return false;
    }
    # cek duplikasi 
    $stmt_check = mysqli_prepare($conn, "SELECT email FROM register WHERE email = ?");
    mysqli_stmt_bind_param($stmt_check, "s", $username);
    mysqli_stmt_execute($stmt_check);
    mysqli_stmt_store_result($stmt_check);

    if(mysqli_stmt_num_rows($stmt_check) > 0){
        echo "<script>
              alert('Email atau nomor telepon ini sudah terdaftar!');
              </script>";
        mysqli_stmt_close($stmt_check);
        return false;
    }
    mysqli_stmt_close($stmt_check);
    #cek konfirmasi pw
    if ($password !== $password2){
        echo  "<script>
        alert('Konfirmasi Password tidak sesuai!');
        </script>";
        return false;
    }
    #enskripsi pasword 
    $password = password_hash($password, PASSWORD_DEFAULT);
    #tambah data
    mysqli_query($conn,"INSERT INTO register (email,password) VALUES ('$username','$password')");
    if(mysqli_affected_rows($conn) <= 0){
        echo "<script>
        alert('Registrasi gagal!');
        </script>";
        return false;
    }
    return mysqli_affected_rows($conn);
}
?>