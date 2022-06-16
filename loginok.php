<?php
    include("./dbcon.php");

    $id = $_POST["aid"]; //관리자 ID
    $pwd = $_POST["apwd"]; //관리자 PWD

    $sql = "select * from admin where aid='$id' and apwd='$pwd' ";

    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    //관리자가 맞을경우
    ?>
    <script>
    location.href = "./list.php";
    </script>
<?php
}else{
    //관리자 정보가 안맞을경우
?>
<script>
        alert("관리자 정보가 일치하지 않습니다");
        history.back();
    </script>

<?php
}
?>