<?php include 'master/head.php'; ?>
| Peserta </title><head>
<?php include 'master/sidebar.php'; ?>

<div class="content-wrapper">
     <div class="container">
          <div class="card" style="margin-top: 50px;">
               <div class="card-body">
                    <p style="font-size:30px; color: #5F5F5F;">
                        <i class="fas fa-users"></i>    
                         <b>Data Peserta</b>
                         <hr>
                    </p>

                    <a href="#"type="button" class="btn bg-primary btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#createpst">
                        <i class="fas fa-plus-circle"></i>&nbsp;Input Data Peserta
                    </a>

                    <table class="table table-bordered align-middle">
                        <tr class="bg-light">
                            <th>No</th>
                            <th>Nama Ketua</th>
                            <th>NIM/NIS</th>
                            <th>Email</th>
                            <th>Nama Tim</th>
                            <th>Anggota</th>
                            <th>Asal Institusi</th> 
                            <th>Tingkat</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Putri Mushfani Inayah</td>
                            <td>1902810</td>
                            <td>putrimi@gmail.com</td>
                            <td>RPL Bageur</td>
                            <td>
                                Zukhruf Dinata</br>
                                Ainul Urwah</br>
                                Siti Seni</br>
                                Jennie Azzahra</br>
                            </td>
                            <td>Universitas Pendidikan Indonesia</td>
                            <td>Universitas</td>
                            <td>
                                <div class="btn-group">
                                    <a type="button" href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delpst">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                    <a type="button" href="#" class="btn bg-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editpst">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

<!-- MODAL EDIT PESERTA -->
    <div class="modal fade" id="editpst" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <form action="" method="POST">

                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-edit"></i>&nbsp;Edit Data Peserta</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nama Tim</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="lorem" name="tim" placeholder="Masukkan nama tim">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Asal Institusi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="lorem" name="institusi" placeholder="Masukkan asal institusi" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Jenjang</label>
                            <div class="col-sm-9 form-check">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenjang" value="SMA/SMK">
                                    <label class="form-check-label">SMA/SMK</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenjang" value="Universitas">
                                    <label class="form-check-label">Universitas</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nama Ketua Tim</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="Lorem" name="ketua" placeholder="Masukkan nama ketua tim" required>                            
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">NIM/NIS</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="Lorem" name="nis" placeholder="Masukkan NIM/NIS ketua tim" required>                            
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Anggota Kelompok 1</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control item" value="Lorem" name="anggota1" placeholder="Masukkan nama anggota 1" >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nim/Nisn Anggota 1</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control item" value="111111" name="nisang1" placeholder="Masukkan NIM/NIS anggota 1" >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Anggota Kelompok 2</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control item" value="Lorem" name="anggota2" placeholder="Masukkan nama anggota 2" >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nim/Nisn Anggota 2</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control item" value="111111" name="nisang2" placeholder="Masukkan NIM/NIS anggota 2" >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Anggota Kelompok 3</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control item" value="Lorem" name="anggota3" placeholder="Masukkan nama anggota 3" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nim/Nisn Anggota 3</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control item" value="111111" name="nisang1" placeholder="Masukkan NIM/NIS anggota 3" >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Anggota Kelompok 4</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control item" value="Lorem" name="anggota4" placeholder="Masukkan nama anggota 4">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nim/Nisn Anggota 4</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control item" value="111111" name="nisang4" placeholder="Masukkan NIM/NIS anggota 4" >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Bukti Pembayaran</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control item" value="Lorem" name="pembayaran" placeholder="Masukkan bukti pembayaran" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Karya</label>
                            <div class="col-sm-9">
                                <input type="url" class="form-control item" value="http://Lorem" name="karya" placeholder="Masukkan link karya" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Cabang Lomba</label>
                            <div class="col-sm-9">
                                <select class="form-select" aria-label="Default select example" name="lomba">
                                    <option>--pilih cabang lomba--</option>
                                    <option value="1" Selected>Web Design</option>
                                    <option value="2">Animation</option>
                                    <option value="3">KTI</option>
                                </select>
                            </div>
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

<!-- MODAL DELETE PESERTA -->
    <div class="modal fade" id="delpst" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-trash-alt"></i>&nbsp;Hapus Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Apakah Anda yakin ingin menghapus data ini?</h5>
                    <ul><li>Data Peserta Putri Mushfani Inayah (id = 1)</li></ul>
                </div>
                <div class="modal-footer">
                    <a href="" type="button" class="btn bg-primary">Ya, hapus data</a>
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Tidak, jangan dihapus</button>
                </div>
            </div>
        </div>
    </div>
<!-- END MODAL -->

<!-- MODAL CREATE PESERTA -->
<div class="modal fade" id="createpst" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <form action="" method="POST">

                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-edit"></i>&nbsp;Edit Data Peserta</h5>
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

                        <p class="p-1 bg-secondary">Data Peserta</p>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nama Tim</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="tim" placeholder="Masukkan nama tim">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Asal Institusi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="institusi" placeholder="Masukkan asal institusi" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Jenjang</label>
                            <div class="col-sm-9 form-check">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenjang" value="SMA/SMK">
                                    <label class="form-check-label">SMA/SMK</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenjang" value="Universitas">
                                    <label class="form-check-label">Universitas</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nama Ketua Tim</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="ketua" placeholder="Masukkan nama ketua tim" required>                            
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">NIM/NIS</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nis" placeholder="Masukkan NIM/NIS ketua tim" required>                            
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Anggota Kelompok 1</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control item" name="anggota1" placeholder="Masukkan nama anggota 1" >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nim/Nisn Anggota 1</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control item" name="nisang1" placeholder="Masukkan NIM/NIS anggota 1" >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Anggota Kelompok 2</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control item" name="anggota2" placeholder="Masukkan nama anggota 2" >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nim/Nisn Anggota 2</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control item" name="nisang2" placeholder="Masukkan NIM/NIS anggota 2" >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Anggota Kelompok 3</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control item" name="anggota3" placeholder="Masukkan nama anggota 3" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nim/Nisn Anggota 3</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control item" name="nisang1" placeholder="Masukkan NIM/NIS anggota 3" >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Anggota Kelompok 4</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control item" name="anggota4" placeholder="Masukkan nama anggota 4">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nim/Nisn Anggota 4</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control item" name="nisang4" placeholder="Masukkan NIM/NIS anggota 4" >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Bukti Pembayaran</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control item" name="pembayaran" placeholder="Masukkan bukti pembayaran" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Karya</label>
                            <div class="col-sm-9">
                                <input type="url" class="form-control item" name="karya" placeholder="Masukkan link karya" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Cabang Lomba</label>
                            <div class="col-sm-9">
                                <select class="form-select" name="lomba">
                                    <option>--pilih cabang lomba--</option>
                                    <option value="1">Web Design</option>
                                    <option value="2">Animation</option>
                                    <option value="3">KTI</option>
                                </select>
                            </div>
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
