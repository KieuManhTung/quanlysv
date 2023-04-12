<?php

    error_reporting(0);
    session_start();
    session_destroy();

    if($_SESSION['specialized']){

        $specialized=$_SESSION['specialized'];
        echo "<script type='text/javascript'>
        alert('$specialized');
            </script>";
    }

    $host="localhost";
    $user="root";
    $password="";
    $db="school project";

    $data=mysqli_connect($host,$user,$password,$db);

    $sql="SELECT * FROM teacher";

    $result=mysqli_query($data,$sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf - 8">
        <title>Student Management System</title>
        <link rel="stylesheet" type="text/css" href="style.css">

        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </head>
    <body>

        <nav>
            <label class="logo">Phenikaa-University</label>

            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Admission</a></li>
                <li><a href="login.php" class="btn btn-success">Login</a></li>
            </ul>
        </nav>
        <div class="section1">

            <label class="img_text">ĐẠI HỌC TRẢI NGHIỆM - ĐỔI MỚI SÁNG TẠO</label>
            <img class="main_img" src="phenikaa01.jpg">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="welcome_img" src="lap.jpg">
                </div>
                <div class="col-md-8">
                    <h1>Welcome to Phenikaa-University</h1>
                    <p>Trường đại học phenikaa được thành lập vào ngày 10 tháng 10 năm 2007.
                        Kể từ đó trường trở thành thành viên chính thức của tập đoàn Phenikaa đi đầu
                        trong các lĩnh vực như: công nghệ, công nghiệp, giáo dục đào tạo và nghiên cứu
                        khoa học. Tên ban đầu là đại học Thành Tây, tuy nhiên vào ngày 21/11/2018 trường
                        đã chính thức đổi tên thành trường Đại học Phenikaa. Trường đại học Phenikaa sở
                        hữu gần 300 cán bộ bao gồm: 91 giảng viên giỏi có trình độ Tiến sĩ và 32 giảng viên
                        có trình độ Giáo sư, Phó giáo sư. Trường đại học Phenikaa hướng đến việc xây dựng
                        một môi trường chất lượng cao, nhằm đem đến cho sinh viên nhiều trải nghiệm thú vị,
                        mơí mẻ. Bên cạnh đó nhằm đào tạo ra nhiều nguồn nhân lực tài giỏi và đẩy mạnh hợp 
                        tác với quốc tế.
                    </p>
                </div>
            </div>
        </div>

        <center>
            <h1>Outstanding Lecturer</h1>
        </center>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="teacher" src="teacher01.jpg">

                    <p>TS.Mai Xuân Tráng, một giảng viên của Datapot, hiện đang công
                        tác giảng dạy tại Đại học Phenikaa chuyên về các môn học:
                        Introduction to Computer Science, Introduction to Data Science and AI,
                        Software Engineering, Cloud Computing. Trước đó , TS. Mai Xuân Tráng
                        tốt nghiệp Tiến sĩ Công nghệ thông tin tại Đại học Kyoto
                    </p>
                </div>

                <div class="col-md-4">
                    <img class="teacher" src="teacher2.jpg">
                    <p>Tiến sĩ Lương Văn Thiện - Trưởng nhóm nghiên cứu AioT, giảng viên
                        khoa Công nghệ thông tin, trường ĐH Phenikaa vinh dự trở thành một
                        trong 10 gương mặt tài năng trẻ được trao giải thưởng quả cầu vàng
                        2022, lĩnh vực công nghệ thông tin, chuyển đổi số và tự động hóa
                    </p>
                </div>

                <div class="col-md-4">
                    <img class="teacher" src="teacher3.jpg">
                    <p>Giảng viên Đoàn Trung Sơn tốt nghiệp cử nhân Công nghệ thông tin tại
                        Học viện An ninh nhân dân năm 2022, tốt nghiệp Thạc sĩ Công nghệ thông
                        tin tại Trường Đại học Bách Khoa Hà Nội năm 2007, và nhận bằng Tiến sĩ 
                        nghành khoa học máy tính tại Đại học Hagen, Germany năm 2017.
                    </p>
                </div>
            </div>
        </div>

        <center class="ha">
            <h1>ĐĂNG KÍ TƯ VẤN TUYỂN SINH 
                    HỆ ĐẠI HỌC CHÍNH QUY
            </h1>
        </center>

        <div align="center" class="admission_form">
            <form action="data_check.php" method="POST">
                <div class="adm_int">
                   <label class="label_text">Name</label>
                    <input class="input_deg" type="text" name="name">
                </div>

                <div class="adm_int">
                    <label class="label_text">Email</label>
                    <input class="input_deg" type="text" name="email">
                </div>

                <div class="adm_int">
                    <label class="label_text">Phone</label>
                    <input class="input_deg" type="text" name="phone">
                </div>

                <div class="adm_int">
                    <label class="label_text1">Chuyên nghành quan tâm</label>
                    <textarea class="input_text" name="specialized"></textarea>
                </div>

                <div class="adm_int">
                    <input class="btn btn-primary" id="submit" type="submit" value="Đăng kí tư vấn ngay" name="apply">
                </div>
            </form>
        </div>
    </body>
</html>