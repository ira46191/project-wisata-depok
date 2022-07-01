<?= $this->include('template/header') ?>;
<?= $this->include('template/sidebar') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Jenis Wisata</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Jenis Wisata</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Berikut Jenis Wisata yang ada di Depok</h3>
            </div>

            <div class="card-body">
                <div class="card">
                    <div class="card-body table-responsive">
                        <a href="" class="btn btn-primary mb-3">Tambah</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($jenis_wisata as $row) :
                                ?>
                                    <tr>
                                        <th><?= $no; ?></th>
                                        <td><?= $row->nama; ?></td>
                                        <td>
                                            <a title="Edit" href="<?= base_url("jenis_wisata/edit/$row->id"); ?>" class="btn btn-info">Edit</a>
                                            <a title="Delete" href="<?= base_url("jenis_wisata/delete/$row->id") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                                        </td>
                                    </tr>

                                <?php
                                    $no++;
                                endforeach;

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->include('template/footer') ?>