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
                                        <td></td>
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