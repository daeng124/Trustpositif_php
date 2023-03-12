<?php
include('../conf/config.php');
function cekSSL()
{

    $curl = curl_init();
    $input_domain = 'dingdongtogel176.net';
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
    $re = '/expires\s.*[(]/m'; // patern untuk mencari kata di regex online 101 
    preg_match_all($re, $response_html, $matches, PREG_SET_ORDER, 0);
    $hasil = str_replace('expires', '', $matches[0][0]);
    $hasil = str_replace('(', '', $hasil);
    $hasil = trim($hasil);
    $hasil = strtotime($hasil);
    $tanggal_expired = date('Y-m-d', $hasil);
    // echo $tanggal_expired . "<br>";

    $tanggal_hari_ini = date('Y-m-d');
    // echo $tanggal_hari_ini . "<br>";
    // mencari selisih dari tanggal exp ke hari ini
    $tgl_exp = strtotime($tanggal_expired);
    $tgl_h = strtotime($tanggal_hari_ini);
    $selisih = $tgl_exp - $tgl_h;
    // echo $selisih . "<br>";
    // hasil Akhir berapa hari ssl akan expired
    $hari_exp = ceil($selisih / 60 / 60 / 24);
    echo $hari_exp . " Hari lagi Expired";
}


function abc()
{
    $query = mysqli_query($koneksi, "SELECT * FROM tb_domains ORDER BY seq DESC");
    $no = 1;
    foreach ($dom as $do) {
        echo $do['domain_name'];
        echo "<br>";
    }
}
