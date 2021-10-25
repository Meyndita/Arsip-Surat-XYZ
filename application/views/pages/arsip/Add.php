    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambah Arsip Surat</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <span class="card-title">Unggah Arsip Surat Baru</span>
                            </div>
                            <?= form_open_multipart('menu/add') ?>
                            <form enctype="multipart/form-data" method="post" class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nomor Surat</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Masukkan nomor surat"
                                                name="nomor_surat">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Kategori</label>

                                        <div class="col-sm-10">
                                            <select name="kategori" class="form-control">
                                                <option value="Undangan">Undangan</option>
                                                <option value="Pengumuman">Pengumuman</option>
                                                <option value="Nota Dinas">Nota Dinas</option>
                                                <option value="Pemberitahuan">Pemberitahuan</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Judul</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Masukkan judul surat"
                                                name="judul" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">File Surat (PDF)</label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="file_surat">
                                                    <label class="custom-file-label" for="exampleInputFile"
                                                        required>Pilih
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="<?= base_url("menu/index") ?>" class="btn btn-primary">
                                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                        <span>Kembali</span>
                                    </a>
                                    <button type="submit" class="btn btn-primary"> <i class="fa fa-save"
                                            aria-hidden="true"></i>&nbsp;Simpan</button>
                                </div>
                            </form>
                            <?= form_close() ?>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>