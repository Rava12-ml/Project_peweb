<?php
require 'functions.php';

$id = null;

// Logika untuk menangani saat form perubahan DISIMPAN
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    if (ubah_profil($_POST) >= 0) {
        // Jika berhasil, siapkan form auto-submit kembali ke profile2.php
        echo "
        <body onload=\"document.getElementById('redirectForm').submit();\">
            <p style=\"font-family: Poppins, sans-serif; text-align:center; padding-top: 50px;\">
                Profil berhasil diubah! Mengalihkan...
            </p>
            <form id=\"redirectForm\" action=\"profile2.php\" method=\"post\" style=\"display:none;\">
                <input type=\"hidden\" name=\"profile_id\" value=\"{$_POST['id']}\">
            </form>
        </body>
        ";
        exit();
    } else {
        echo "<script>
                alert('Gagal mengubah profil!');
              </script>";
        $id = $_POST['id']; // Simpan ID agar form bisa ditampilkan kembali
    }
}

// Logika untuk MENAMPILKAN form edit saat pertama kali datang
if (isset($_POST['profile_id'])) {
    $id = $_POST['profile_id'];
}

// Jika tidak ada ID sama sekali, kembali ke halaman awal
if ($id === null) {
    header("Location: profile.php");
    exit;
}

$profil = query("SELECT * FROM profil WHERE id = $id")[0];

require_once 'header.php';
?>

<title>Ubah Profil</title>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-9">
            <div class="card profile-form-card">
                <div class="card-header text-center">
                    <h3>Ubah Profil Diri</h3>
                </div>
                <div class="card-body p-4 p-md-5">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $profil['id']; ?>">
                        <input type="hidden" name="gambarLama" value="<?= $profil['foto_profil']; ?>">

                        <div class="text-center mb-4">
                            <img src="img/<?= htmlspecialchars($profil['foto_profil']); ?>" width="120" class="rounded-circle img-thumbnail">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" id="nama" class="form-control" value="<?= htmlspecialchars($profil['nama']); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="<?= htmlspecialchars($profil['email']); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label">Nomor Telepon</label>
                            <input type="text" name="telepon" id="telepon" class="form-control" value="<?= htmlspecialchars($profil['telepon']); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control" required><?= htmlspecialchars($profil['alamat']); ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="foto_profil" class="form-label">Ganti Foto Profil (Opsional)</label>
                            <input type="file" name="foto_profil" id="foto_profil" class="form-control">
                        </div>
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-profile-save">Simpan Perubahan</button>
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