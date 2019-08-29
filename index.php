<?php
include("./create_database.php");

if (isset($_POST)) {
    $nameCompany = $_POST["nameCompany"];
    $folderPath = "WP_PROS/" . $nameCompany;
    mkdir($folderPath);
    create_database($nameCompany);

    $zip = new ZipArchive;
    if ($zip->open('wordpress-5.2.2-vi.zip') === TRUE) {
        $zip->extractTo($folderPath);
        $zip->close();
        echo 'ok';
    } else {
        echo 'failed';
    }

    echo $folderPath;
    // $old = umask(0);
    // mkdir("WP_PROS/hj");
    // touch("WP_PROS/hj/test2.txt", 0700);
    // umask($old);
}
?>



<?php
function console_log($data)
{
    echo '<script>';
    echo 'console.log(' . json_encode($data) . ')';
    echo '</script>';
    die(__FILE__ . __LINE__);
}
?>