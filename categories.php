<div class="container-fluid px-4">
    <h1 class="mt-4">Category</h1>     
        <a href="?page=categories_tambah" class="btn btn-primary">+ tambah Data</a>
               <table class="table table-bordered">
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Aksi</th>
                </tr>

                <?php
                    $query = mysqli_query($koneksi, "SELECT*FROM categories");
                    while($data = mysqli_fetch_array($query)){

                        ?>
                        <tr>
                            <td><?php echo $data['category']; ?></td>
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['user_id']; ?></td>
                            <td>
                                <a href="?page=categories_ubah&&id=<?php echo $data['user_id']; ?>" class="btn btn-primary">Ubah</a>
                                <a href="?page=categories_hapus&&id=<?php echo $data['user_id']; ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php
                    }
                    
                ?>

               </table>
  </div>