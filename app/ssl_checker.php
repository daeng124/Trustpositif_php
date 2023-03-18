<!-- Main content -->

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Sertificate SSL domain</h3>
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
                                $query = mysqli_query($koneksi, "SELECT * FROM tb_domains ORDER BY seq DESC");
                                $no = 1; ?>
                                <?php while ($domain = mysqli_fetch_array($query)) : ?>

                                    <tr>
                                        <td width="5%" class="text-center"><?= $no++; ?></td>
                                        <td><?= $domain['domain_name']; ?></td>
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
                                        <td width="10%">
                                            <a href="cekssl.php?seq=<?= $domain['seq']; ?>">Cek SSL</a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>


                                </tr>
                            </tbody>
                            <tr>
                                <th colspan="4">

                                    <?php
                                    if (array_key_exists('button1', $_POST)) {
                                        button1();
                                    }
                                    function button1()
                                    {
                                        global $koneksi;
                                        $query = mysqli_query($koneksi, "SELECT * FROM tb_domains ORDER BY seq DESC");
                                        while ($domain = mysqli_fetch_array($query)) {
                                            $curl = curl_init();

                                            $input_domain =  $domain['domain_name'];
                                            $post_data = ['host' => $input_domain];

                                            curl_setopt_array($curl, array(
                                                CURLOPT_URL => 'https://www.digicert.com/api/check-host.php',
                                                CURLOPT_RETURNTRANSFER => true,
                                                CURLOPT_ENCODING => '',
                                                CURLOPT_MAXREDIRS => 10,
                                                CURLOPT_TIMEOUT => 0,
                                                CURLOPT_FOLLOWLOCATION => true,
                                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                                CURLOPT_CUSTOMREQUEST => 'POST',
                                                CURLOPT_POSTFIELDS => '',
                                                CURLOPT_HTTPHEADER => array(
                                                    'Content-Type: application/x-www-form-urlencoded',
                                                    'Cookie: incap_ses_1038_1323850=OeKhTYmewiAh7OIFTbhnDj+CDGQAAAAAXTO7qYwfW+cqQ3U8/gdrKg==; visid_incap_1323850=WNd7h1n2QH2sc8SqEnSepGEgC2QAAAAAQUIPAAAAAAAfLYY3Hb5plKavld2j45cG'
                                                ),
                                            ));
                                            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
                                            curl_setopt($curl, CURLOPT_POST, TRUE);
                                            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post_data));
                                            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
                                            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);

                                            $response = curl_exec($curl);

                                            curl_close($curl);
                                            //mengubah respon html ke string
                                            $response_html = htmlentities($response);
                                            $tidak_ketemu = htmlentities('<h2 class="error">Unable to connect</h2>');

                                            if ($response_html == $tidak_ketemu) {
                                                echo '';
                                            } else {
                                                $re = '/expires\s.*[(]/m'; // patern untuk mencari kata di regex online 101 
                                                preg_match_all($re, $response_html, $matches, PREG_SET_ORDER, 0);
                                                $hasil = str_replace('expires', '', $matches[0][0]);
                                                $hasil = str_replace('(', '', $hasil);
                                                $hasil = trim($hasil);
                                                $hasil = strtotime($hasil);
                                                $tanggal_expired = date('Y-m-d', $hasil);
                                                // echo $tanggal_expired . "<br>";

                                                $query2 = "UPDATE `domain_trustpositif`.`tb_domains` SET `ssl_exp`='$tanggal_expired' WHERE  `seq`= $domain[seq]";
                                                mysqli_query($koneksi, $query2);
                                                // $tanggal_hari_ini = date('Y-m-d');
                                                // echo $tanggal_hari_ini . "<br>";
                                                // // mencari selisih dari tanggal exp ke hari ini
                                                // $tgl_exp = strtotime($tanggal_expired);
                                                // $tgl_h = strtotime($tanggal_hari_ini);
                                                // $selisih = $tgl_exp - $tgl_h;
                                                // echo $selisih . "<br>";
                                                // // hasil Akhir berapa hari ssl akan expired
                                                // $hari_exp = ceil($selisih / 60 / 60 / 24);
                                                // echo $hari_exp;
                                                error_reporting(0);
                                            }
                                        }
                                    }

                                    ?>

                                    <form method="post">
                                        <input type="submit" name="button1" class="btn btn-block btn-secondary btn-sm" value="Klik disini untuk Mengecek Seluruh SSL Certificate" onclick="button1()" />
                                    </form>




                                    </form>
                                </th>
                            </tr>
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