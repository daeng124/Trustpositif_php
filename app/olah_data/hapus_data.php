<?php

use PSpell\Config;

include('../../conf/config.php');

$seq = $_GET['seq'];
$query = mysqli_query($koneksi, "DELETE FROM tb_domains WHERE seq='$seq'");
header('Location: ../index.php?page=data-domain-aktif');
