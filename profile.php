<?php
$user = [
    'name' => 'Dinashty',
    'email' => 'dinashty@gmail.com',
    'photo' => 'profile.png',
];
?>

<!DOCTYPE html>`
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
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
</body>

</html>