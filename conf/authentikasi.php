<?php
session_start();
include('config.php');

$username = $_POST['useremail'];
$password = $_POST['password'];

// $query = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
// if (mysqli_num_rows($query) == 1) {
//     header('Location:../app');
//     $user = mysqli_fetch_array($query);
//     $_SESSION['nama'] = $user['nama'];
//     $_SESSION['level'] = $user['level'];
// } else if ($username == '' || $password == '') {
//     header('Location:../index.php?error=2');
// } else {
//     header('Location:../index.php?error=1');
// }
if ($username == '' || $password == '') {
    header('Location:../index.php?error=2');
} else {

    $post_data = [
        'user_email'        => $username,
        'user_password'     => $password
    ];

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/x-www-form-urlencoded'
        ),
    ));

    curl_setopt($curl, CURLOPT_URL, 'https://bk.augipt.com/danatogel/dashboard/account/api-login/local');
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($curl, CURLOPT_POST, TRUE);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post_data));

    $login = curl_exec($curl);

    // curl_close($curl);


    $login = json_decode($login);

    if ($login->status === true) {
        $authorization_string = (isset($login->data->authorization) ? $login->data->authorization : '');
        if (!empty($authorization_string)) {

            curl_setopt($curl, CURLOPT_URL, 'https://git.augipt.com/account/account/account');
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
            curl_setopt($curl, CURLOPT_POST, FALSE);
            curl_setopt($curl, CURLOPT_HTTPHEADER, [
                'Content-Type: application/x-www-form-urlencoded',
                "Authorization: {$authorization_string}",
                "Accept: application/json"
            ]);
            $site_data = curl_exec($curl);
            $site_data = json_decode($site_data);



            $email = $site_data->data->userdata->email;
            $sites = $site_data->data->site_data;


            // foreach ($sites as $site) {
            //     echo $site->site_code;
            //     echo "\r\n";
            //     echo '<a href="' . $site->site_address . '">' . $site->site_title . '</a>';
            //     echo "\r\n";
            // }

            // echo "Login dengan {$email}";
            $_SESSION['user'] = $email;

            header('Location:../app');
        }
    } else {
        header('Location: ../index.php');
    }
    curl_close($curl);
}
