<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Domain yang Sudah Terblokir Kominfo</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Domain Name</th>
                                    <th>Status</th>
                                    <th>SSL Certificate</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = mysqli_query($koneksi, "SELECT * FROM tb_domains WHERE domain_is_blocked='Ada' ORDER BY seq DESC");
                                $no = 1; ?>
                                <?php while ($domain = mysqli_fetch_array($query)) : ?>
                                    <tr>
                                        <td width="5%" class="text-center"><?= $no++; ?></td>
                                        <td><?= $domain['domain_name']; ?></td>
                                        <td width="10%" class="text-center">
                                            <?php $status = $domain['domain_is_blocked'];
                                            if ($status == 'Ada') {
                                                echo "<span style='color:red;'>Situs Terblokir</span>";
                                            } elseif ($status == 'Tidak Ada') {
                                                echo "Aman";
                                            }
                                            ?>
                                        </td>
                                        <td class="text-center">
                                            <?php
                                            if ($domain['ssl_exp'] == null) {
                                                echo "Belum di Check";
                                            } else {
                                                $tgl_exp = $domain['ssl_exp'];
                                                $tanggal_hari_ini = date('Y-m-d');
                                                //selisih tanggal 
                                                $tgl_exp2 = strtotime($tgl_exp);
                                                $tgl_h = strtotime($tanggal_hari_ini);
                                                $selisih = $tgl_exp2 - $tgl_h;
                                                $hari_exp = ceil($selisih / 60 / 60 / 24);
                                                echo $domain['ssl_exp'] . " ";
                                                echo " ( " . $hari_exp . " Hari lagi )";
                                            }
                                            ?>
                                        </td>
                                        <td><a onclick="hapus_data(<?= $domain['seq']; ?>)" class="btn btn-sm btn-danger">Hapus</a></td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

    <!-- /.row -->
    </div>
</section>
<!-- /.content -->

<script>
    function hapus_data(data_id) {
        // window.location = ("olah_data/hapus_data.php?seq=" + data_id)
        Swal.fire({
            title: 'Anda Yakin ingin Mengahapus?',
            // showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'Hapus',
            // denyButtonText: `Don't save`,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                window.location = ("olah_data/hapus_data.php?seq=" + data_id)
            }
            // else if (result.isDenied) {
            //   Swal.fire('Changes are not saved', '', 'info')
            // }
        })
    }
</script>