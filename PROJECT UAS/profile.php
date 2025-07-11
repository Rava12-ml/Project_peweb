<?php
require 'functions.php';

// Cek jika form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nama'])) {
    // Panggil fungsi untuk menambah data profil
    $newProfileId = tambah_profil($_POST);

    if ($newProfileId > 0) {
        // Jika berhasil, siapkan form auto-submit ke profile2.php
        echo "
        <body onload=\"document.getElementById('redirectForm').submit();\">
            <form id=\"redirectForm\" action=\"profile2.php\" method=\"post\" style=\"display:none;\">
                <input type=\"hidden\" name=\"profile_id\" value=\"{$newProfileId}\">
            </form>
            <p style=\"font-family: Poppins, sans-serif; text-align:center; padding-top: 50px;\">
                Profil berhasil dibuat! Mengalihkan...
            </p>
        </body>
        ";
        exit(); // Hentikan eksekusi skrip utama
    } else {
        echo "<script>
                alert('Gagal membuat profil!');
                document.location.href = 'profile.php';
              </script>";
    }
}

require_once 'header.php';
?>

<title>Buat Profil Anda</title>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-9">
            <div class="card profile-form-card">
                <div class="card-header text-center">
                    <h3>Buat Profil Diri</h3>
                </div>
                <div class="card-body p-4 p-md-5">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" id="nama" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label">Nomor Telepon</label>
                            <input type="text" name="telepon" id="telepon" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="foto_profil" class="form-label">Foto Profil</label>
                            <input type="file" name="foto_profil" id="foto_profil" class="form-control" required>
                        </div>
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-profile-save">Simpan Profil</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'footer.php';
?>