test
<?
    include_once $_SERVER["DOCUMENT_ROOT"]."/inc/config.php";

    $user = $_GET['u'];
    $pass = $_GET['p'];

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME);

    $result = mysqli_query($conn, "select * from tb_user where userId = '$user' and userPwd = '$pass'");

    if ($result->num_rows > 0)
        echo "로그인 성공";
    else
        echo "로그인 실패";

    mysqli_close($conn);
?>
