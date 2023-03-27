<?php
//ketika inputan telah berisi 
if (isset($_POST['domain'])) {
  $dm = $_POST['domain'];
  $input_domain = explode("\n", $dm);


  //proses curl mengirim dan mendapatkan data dari Trustpositif kominfo
  $curl = curl_init();
  $input_domain = implode("\n", $input_domain);
  $post_data = [
    'name' => $input_domain
  ];
  curl_setopt_array(
    $curl,
    array(
      CURLOPT_URL => 'https://trustpositif.kominfo.go.id/Rest_server/getrecordsname_home',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 1,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_POSTFIELDS => '',
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded'
      ),
    )
  );
  curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
  curl_setopt($curl, CURLOPT_POST, TRUE);
  curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post_data));
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);

  $response = curl_exec($curl);
  curl_close($curl);
  // akhir dari proses curl (data sudah didapat)

  //membuat query ke database dari hasil curl
  $json_array = json_decode($response);

  foreach ($json_array->values as $key => $value) {
    // asdfasdf
    $query = "INSERT INTO tb_domains (
                    domain_name,
                    domain_is_blocked,
                    domain_add_dt )
                     VALUES (
                    '$value->Domain',
                    '$value->Status',
                    NOW())";

    mysqli_query($koneksi, $query);
  }
}

?>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Daftar Domain yang tidak Terblokir Kominfo</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr class="text-center">
                  <th>No</th>
                  <th>Domain Name</th>
                  <th>Status Domain</th>
                  <th>SSL Certificate</th>
                  <th>Aksi</th>

                </tr>
              </thead>
              <tbody>
                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM tb_domains WHERE domain_is_blocked='Tidak Ada' ORDER BY seq DESC");
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
                        echo "<span style='color:green;'>Situs Aman</span>";
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
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Domain Name</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="" method="post">
              <div class="form-floating h-100">
                <textarea name="domain" class="form-control" placeholder="Masukkan Domain disini!" id="floatingTextarea2" style="height: 200px" required></textarea><br>
                <button type="submit" class="btn btn-primary">Check Domain</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Daftar Semua Domain</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr class="text-center">
                  <th>No</th>
                  <th>Domain Name</th>
                  <th>Status Domain</th>
                  <th>SSL Certificate</th>
                  <th>Aksi</th>

                </tr>
              </thead>
              <tbody>
                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM tb_domains ORDER BY seq DESC");
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
                        echo "<span style='color:green;'>Situs Aman</span>";
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