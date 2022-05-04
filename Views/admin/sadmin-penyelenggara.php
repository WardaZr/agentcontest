<?php include 'master/head.php'; ?>
| Penyelenggara </title><head>
<?php include 'master/sidebar.php'; ?>

<div class="content-wrapper">
     <div class="container">
          <div class="card" style="margin-top: 50px;">
               <div class="card-body">
                    <p style="font-size:30px; color: #5F5F5F;">
                        <i class="fas fa-user-tie"></i>   
                        <b>Data Penyelenggara</b>
                        <hr>
                    </p>

                    <a href="#"type="button" class="btn bg-primary btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#createplg">
                        <i class="fas fa-plus-circle"></i>&nbsp;Input Data Penyelenggara
                    </a> 

                    <table class="table table-bordered align-middle">
                        <tr class="bg-light">
                            <th>No</th>
                            <th>Nama Admin</th>
                            <th>Asal Institusi</th> 
                            <th>Alamat</th>
                            <th>Kontak</th>
                            <th>Kegiatan</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>PanitiaDinamik17</td>
                            <td>Universitas Pendidikan Indonesia</td>
                            <td>Jl. Dr. Setiabudi No.229, Isola, Kec. Sukasari, Kota Bandung, Jawa Barat 40154</td>
                            <td>
                                emailk@gmail.com</br>
                                +6281234567890
                            </td>
                            <td>Dies Natalis Keluarga Besar Ilmu Komputer Ke-17</td>
                            <td>
                                <div class="btn-group">
                                    <a type="button" href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delplg">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                    <a type="button" href="#" class="btn bg-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editplg">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

<!-- MODAL EDIT PENYELENGGARA -->
    <div class="modal fade" id="editplg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <form action="" method="POST">

                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-edit"></i>&nbsp;Edit Data Penyelenggara</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nama Admin</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="lorem" name="admin" placeholder="Masukkan nama admin penyelenggara">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Asal Institusi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="lorem" name="institusi" placeholder="Masukkan asal institusi" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" value="Lorem" name="email" placeholder="Masukkan email penyelenggara" required>                            
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Kontak</label>
                            <div class="col-sm-9">
                                <input type="tel" class="form-control" value="Lorem" name="telp" placeholder="Masukkan no. telepon penyelenggara" required>                            
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" value="Lorem" name="alamat" placeholder="Masukkan Alamat " required></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Judul Kegiatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control item" value="Lorem" name="judul" placeholder="Masukkan judul kegiatan" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Tema Kegiatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control item" value="Lorem" name="tema" placeholder="Masukkan tema kegiatan" required>
                            </div>
                        </div>

                    <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-primary" value="Reset">
                        <input type="submit" class="btn bg-primary" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- END MODAL -->

                    </table>
                </div>
          </div>
     </div>
</div> 

<?php include 'master/footer.php'; ?>

<!-- MODAL DELETE PENYELENGGARA -->
    <div class="modal fade" id="delplg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-trash-alt"></i>&nbsp;Hapus Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Apakah Anda yakin ingin menghapus data ini?</h5>
                    <ul><li>Data Penyelenggara PanitiaDinamik17 (id = 1)</li></ul>
                </div>
                <div class="modal-footer">
                    <a href="" type="button" class="btn btn-primary">Ya, hapus data</a>
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Tidak, jangan dihapus</button>
                </div>
            </div>
        </div>
    </div>
<!-- END MODAL -->

<!-- MODAL CREATE PENYELENGGARA -->
<div class="modal fade" id="createplg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <form action="" method="POST">

                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-edit"></i>&nbsp;Input Data Penyelenggara</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <p class="p-1 bg-secondary">Data Akun</p>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Email Akun</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" placeholder="Masukkan email">
                            </div>
                        </div>
                        <div class="mb-3 pb-3 row border-bottom">
                            <label class="col-sm-3 col-form-label">password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password" placeholder="Masukkan password">
                            </div>
                        </div>

                        <p class="p-1 bg-secondary">Data Penyelenggara</p>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nama Admin</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="admin" placeholder="Masukkan nama admin penyelenggara">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Asal Institusi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="institusi" placeholder="Masukkan asal institusi" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" placeholder="Masukkan email penyelenggara" required>                            
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Kontak</label>
                            <div class="col-sm-9">
                                <input type="tel" class="form-control" name="telp" placeholder="Masukkan no. telepon penyelenggara" required>                            
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat " required></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Judul Kegiatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control item" name="judul" placeholder="Masukkan judul kegiatan" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Tema Kegiatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control item" name="tema" placeholder="Masukkan tema kegiatan" required>
                            </div>
                        </div>

                    <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-primary" value="Reset">
                        <input type="submit" class="btn bg-primary" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- END MODAL -->
