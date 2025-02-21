<h1 class="mt-4 text-center">To Do List</h1> 

<?php
$user = [
    'name' => 'Dinashty',
    'email' => 'dinashty@gmail.com',
    'photo' => 'profile.png',
];
?>

<div class="container mt-5">
        <div class="card mx-auto" style="max-width: 400px;">
            <div class="card-body text-center">
                <div class="card-body text-center">
                    <h3>Profil Pengguna</h3>
                    <img src="<?= $user['photo']; ?>" alt="Foto Profil" class="rounded-corners mb-3" width="60%">
                    <h4 class="card-title"> <?= $user['name']; ?> </h4>
                    <p class="text-muted"> <?= $user['email']; ?> </p>
                </div>
            </div>
        </div>
    </div>

<hr>

<div class="row">
    <div class="col-xl-6 col-md-6">
            <div class="card text-black mb-4" style="background-color:khaki">
                <div class="card-body">
                    <?php
                    echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM categories"));
                    ?>
                    Category</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-black stretched-link" href="?page=categories">View Details</a>
                    <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6">
            <div class="card text-black mb-4" style="background-color:khaki">
                <div class="card-body">
                    <?php
                    echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM tasks"));
                    ?>
                    Tasks</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-black stretched-link" href="?page=tasks">View Details</a>
                    <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

