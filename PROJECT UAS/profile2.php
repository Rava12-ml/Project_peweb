<?php
require 'functions.php';

// Cek apakah ada profile_id yang dikirim via POST
if (!isset($_POST['profile_id'])) {
    // Jika tidak ada ID, kembali ke halaman awal pembuatan profil
    header("Location: profile.php");
    exit;
}

$id = $_POST['profile_id'];
$profil = query("SELECT * FROM profil WHERE id = $id")[0];

require_once 'header.php';
?>

<title>Profil Saya</title>

<style>
    .profile-view-card { max-width: 700px; margin: auto; border-radius: 1rem; box-shadow: 0 8px 25px rgba(0,0,0,0.1); border: none; }
    .profile-view-img { width: 150px; height: 150px; object-fit: cover; border-radius: 50%; border: 5px solid #fff; margin-top: -75px; box-shadow: 0 5px 15px rgba(0,0,0,0.2); }
    .profile-view-header { height: 150px; background: linear-gradient(to right, #8e2de2, #4a00e0); border-top-left-radius: 1rem; border-top-right-radius: 1rem; }
    .btn-profile-edit { background-color: #ffc107; color: #333; font-weight: 500; border-radius: 50px; padding: 0.5rem 1.5rem; transition: all 0.3s ease; border: none;}
    .btn-profile-edit:hover { background-color: #ffca2c; transform: translateY(-2px); }
</style>

<div class="container">
    <div class="card profile-view-card text-center">
        <div class="profile-view-header"></div>
        <div class="card-body" style="margin-top: -75px;">
            <img src="img/<?= htmlspecialchars($profil['foto_profil']); ?>" alt="Foto Profil" class="profile-view-img mb-3">
            <h2 class="card-title mt-3"><?= htmlspecialchars($profil['nama']); ?></h2>
            
            <ul class="list-group list-group-flush text-start mt-4">
                <li class="list-group-item border-0"><i class="bi bi-envelope-fill me-3 text-muted"></i><?= htmlspecialchars($profil['email']); ?></li>
                <li class="list-group-item border-0"><i class="bi bi-telephone-fill me-3 text-muted"></i><?= htmlspecialchars($profil['telepon']); ?></li>
                <li class="list-group-item border-0"><i class="bi bi-geo-alt-fill me-3 text-muted"></i><?= htmlspecialchars($profil['alamat']); ?></li>
            </ul>

            <form action="profile3.php" method="post" class="mt-4">
                <input type="hidden" name="profile_id" value="<?= $profil['id']; ?>">
                <button type="submit" class="btn btn-profile-edit">
                    <i class="bi bi-pencil-square me-2"></i> Edit Profil
                </button>
            </form>
        </div>
    </div>
</div>

<?php
require_once 'footer.php';
?>