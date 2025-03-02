<!DOCTYPE html>
<html lang="id">

<head>
    <?php $this->load->view("admin/components/header.php") ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <?php if ($this->session->flashdata('edit')){ ?>
    <script>
    swal({
        title: "Berhasil!",
        text: "Data Berhasil Diedit!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_edit')){ ?>
    <script>
    swal({
        title: "Gagal!",
        text: "Data Gagal Diedit!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('hapus')){ ?>
    <script>
    swal({
        title: "Berhasil!",
        text: "Data Berhasil Dihapus!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_hapus')){ ?>
    <script>
    swal({
        title: "Gagal!",
        text: "Data Gagal Dihapus!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('input')){ ?>
    <script>
    swal({
        title: "Berhasil!",
        text: "Status Cuti Berhasil Diubah!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_input')){ ?>
    <script>
    swal({
        title: "Gagal!",
        text: "Status Cuti Gagal Diubah!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url();?>assets/admin_lte/dist/img/Loading.png"
                alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php $this->load->view("admin/components/navbar.php") ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view("admin/components/sidebar.php") ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Cuti</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                <li class="breadcrumb-item active">Cuti</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Data Cuti Pegawai</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>

                                            <tr>
                                                <th>No</th>
                                                <th>Nama Lengkap</th>
                                                <th>Jenis Cuti</th>
                                                <th>Tanggal Diajukan</th>
                                                <th>Mulai</th>
                                                <th>Berakhir</th>
                                                <th>Alasan</th>
                                                <th>Status Cuti</th>
                                                <th>Cetak Surat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                        $no = 0;
                                        foreach($cuti as $i)
                                        :
                                        $no++;
                                        $id_cuti = $i['id_cuti'];
                                        $id_user = $i['id_user'];
                                        $nama_lengkap = $i['nama_lengkap'];
                                        $alasan = $i['alasan'];
                                        $tgl_diajukan = $i['tgl_diajukan'];
                                        $mulai = $i['mulai'];
                                        $berakhir = $i['berakhir'];
                                        $id_status_cuti = $i['id_status_cuti'];
                                        $perihal_cuti = $i['perihal_cuti'];

                                        ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= $nama_lengkap ?></td>
                                                <td><?= $alasan ?></td>
                                                <td><?= $tgl_diajukan ?></td>
                                                <td><?= $mulai ?></td>
                                                <td><?= $berakhir ?></td>
                                                <td><?=$perihal_cuti?></td>
                                                <td><?php if($id_status_cuti == 1){ ?>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-info" data-toggle="modal"
                                                                data-target="#edit_data_pegawai">
                                                                Menunggu Konfirmasi
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php }elseif($id_status_cuti == 2) {?>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-success" data-toggle="modal"
                                                                data-target="#edit_data_pegawai">
                                                                Izin Cuti Diterima
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php }elseif($id_status_cuti == 3) {?>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-danger" data-toggle="modal"
                                                                data-target="#edit_data_pegawai">
                                                                Izin Cuti Ditolak
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                </td>

                                                <td><?php if($id_status_cuti == 2) { ?>
                                                    <a href="<?= base_url();?>Cetak/surat_cuti_pdf/<?=$id_cuti?>"
                                                        class="btn btn-info" target="_blank"> 
                                                        Cetak Surat
                                                    </a>
                                                    <?php } else {?>
                                                    <a href="#" class="btn btn-danger">
                                                        Belum Dapat Mencetak
                                                    </a>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-success" data-toggle="modal"
                                                                data-target="#approve<?= $id_cuti
                                                        ?>">
                                                        <i class="fas fa-check"></i> Setuju
                                                        </a>
                                                        </div>
                                                        </div>
                                                        <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                        <a href="" data-toggle="modal"
                                                        data-target="#reject<?= $id_cuti ?>"
                                                        class="btn btn-danger"><i class="fas fa-times"></i> Tolak
                                                        </a>
                                                        </div>
                                                        </div>
                                                        </td>
                                                        </tr>

                                                        <!-- Modal Setuju Cuti -->
                                                        <div class="modal fade" id="approve<?= $id_cuti ?>" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Setuju Cuti
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>

                                                        <div class="modal-body">
                                                        <form action="<?=base_url();?>Cuti/approve_cuti_admin"
                                                        method="POST">
                                                        <input type="hidden" value="<?=$id_cuti?>" name="id_cuti">
                                                        <p>Apakah Anda yakin ingin menyetujui cuti ini?</p>
                                                        <button type="submit"
                                                            class="btn btn-success">Setuju</button>
                                                        </form>
                                                        </div>
                                                        </div>
                                                        </div>
                                                        </div>

                                                        <!-- Modal Tolak Cuti -->
                                                        <div class="modal fade" id="reject<?= $id_cuti ?>" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Tolak Cuti
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form action="<?=base_url();?>Cuti/reject_cuti_admin"
                                                        method="post" enctype="multipart/form-data">
                                                        <input type="hidden" name="id_cuti"
                                                            value="<?= $id_cuti ?>" />
                                                        <p>Apakah Anda yakin ingin menolak cuti ini?</p>
                                                        <button type="submit"
                                                            class="btn btn-danger">Tolak</button>
                                                        </form>
                                                        </div>
                                                        </div>
                                                        </div>
                                                        </div>
                                                        <?php endforeach;?>
                                                        </tbody>
                                                        </table>
                                                        </div>
                                                        <!-- /.card-body -->
                                                        </div>
                                                        <!-- /.card -->
                                                        </div>
                                                        <!-- /.col -->
                                                        </div>

                                                        </div><!-- /.container-fluid -->
                                                        </section>
                                                        <!-- /.content -->
                                                        </div>
                                                        <!-- /.content-wrapper -->

                                                        <!-- Control Sidebar -->
                                                        <aside class="control-sidebar control-sidebar-dark">
                                                        <!-- Control sidebar content goes here -->
                                                        </aside>
                                                        <!-- /.control-sidebar -->
                                                        </div>
                                                        <!-- ./wrapper -->

                                                        <?php $this->load->view("admin/components/js.php") ?>
                                                        </body>

                                                        </html>
