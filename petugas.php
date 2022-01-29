<div class="container">
<div class="col">

    <center><h1 class="mt-4 mb-3"style ="color:white;">Data petugas</h1></center>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Tambah Data
</button>
<div class="row">
    <table class="table table-striped table-hover">
        <tr class="text-center">
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Username</th>
            <th>Password</td>
            <th>--Action--<th>
        
        </tr>
        <?php
        //QUERY JOIN
      //  $querybaru = mysqli_query($konek,"SELECT anggota.nis, anggota.nama, anggota.jk, 
       // anggota.tempat_lahir, anggota.tanggal_lahir, anggota.id_kelas, anggota.id_jurusan,
       // anggota.nomor_telpon, anggota.alamat, kelas.nama_kelas, jurusan.nama_jurusan
       // FROM anggota
       // JOIN kelas ON anggota.id_kelas = kelas.id_kelas
      //  JOIN jurusan ON  anggota.id_jurusan = jurusan.id_jurusan")
        //END

            $query = mysqli_query($koneksi,"SELECT * FROM petugas");
            $no = 1;
            foreach ($query as $row) {
        ?>
        <tr>
            <td class="table-info" align="center" valign="middle"><?php echo $no; ?></td>
            <td class="table-info" valign="middle"><?php echo $row['nama']; ?></td>
            <td class="table-info" valign="middle"><?php echo $row['jabatan']; ?></td>
            <td class="table-info" valign="middle"><?php echo $row['nomor_telepon']; ?></td>
            <td class="table-info" valign="middle"><?php echo $row['alamat']; ?></td>
            <td class="table-info" valign="middle"><?php echo $row['username']; ?></td>
            <td class="table-info" valign="middle"><?php echo $row['password']; ?></td>

                  
            <td class="table-info"valign="middle">
                <a href="?page=petugas-delete&delete=&id=<?php echo $row['id_petugas'];?>">
                    <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                </a>
                <a href="?page=petugas-edit&edit=&id=<?php echo $row['id_petugas'];?>">
                    <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                </a>
            </td>
        </tr>
        <?php
        $no++;
        }
        ?>
    </table>
    </div>
    </div>
    </div>
    <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="tambahpetugasLabel">Form Tambah petugas</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
             <form action="?page=petugas-insert" method="post">
                 <div class="form-group mt-2">
                    <input class="form-control" type="text" name="nama" placeholder="Nama" required>
                </div>
                 <div class="form-group mt-2">
                     <input class="form-control" type="text" name="jabatan" placeholder="Jabatan">
                </div>
                 <div class="form-group mt-2">
                    <input class="form-control" type="text" name="no_telepon" placeholder="no_telepon">
                </div>
                <div class="form-group mt-2">
             <textarea class="form-control" name="alamat" placeholder=" Alamat" require></textarea> 
           </div>
                 <div class="form-group mt-2">
                     <input class="form-control" type="text" name="username" placeholder="Username">
                 </div>
                <div class="form-group mt-2">
                    <input class="form-control" type="text" name="password" placeholder="Password">
                 </div>  
        </div>
            <center>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="save" class="btn btn-primary">Save changes</button>
    </center>   
            </form>
            </div>
            </div>
        </div>
    </div>