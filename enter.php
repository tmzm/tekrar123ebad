<?php
error_reporting(0);
ini_set('display_errors', 0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script
      src="https://kit.fontawesome.com/0a37ebcd2b.js"
      crossorigin="anonymous"
    ></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="users.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700&display=swap" rel="stylesheet">
    <title>tikrar</title>
</head>
<body>
<style> body{ font-family: Tajawal;
    background-image: url(images/b.png);
    background-position: center;
    background-repeat: no-repeat;
    background-size:contain ;
} </style>
<header>
<div class="logo">
    <i></i>
  </div>
  <input type="checkbox" class="toggle" id="nav-toggle">
  <label for="nav-toggle" id="nav-toggle-label">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
  </label>
  <nav>
  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 align-items-center">
        <li class="nav-item">
            <a class="nav-link text-dark hover mb-4" aria-current="page" href="index.php">الصفحة الرئيسية</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark hover mb-4" aria-current="page" href="index.php#">عن الموقع</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark hover mb-4" aria-current="page" href="enter.php">إضافة مستخدم</a>
          </li>
        </ul>
  </nav>
</header>

<style>
    .border-black{
    border: solid 2px gray;
  }
</style>

<div dir="rtl" class="m-5">
<style>
  .width{
    width: 80%;
    margin: auto;
    border: dashed 3px black;
    border-radius: 50px;
    padding: 50px;
    background-color: lightgray;
  }
</style>
<div class="width container" width="50">
<form class="row g-3" method="GET">
  <div class="col-md-8">
    <label for="inputAddress" class="form-label">الاسم</label>
    <input type="text" name="names" class="form-control rounded-pill border-black" id="inputAddress" required>
  </div>
  <div class="col-md-4">
  <label for="inputCity" class="form-label">المجموعة</label>
<select class="form-select mb-3 col-md rounded-pill border-black" name="magmoaa" aria-label="Default select example" required>
  <option selected>ادخل المجموعة</option>
  <option value="five">مجموعة الخمس أجزاء</option>
  <option value="three">مجموعة الثلاث أجزاء</option>
  <option value="one">مجموعة جزء عم</option>
</select>
  </div>
  <br>
  <hr>
  <br>



  <?php
$s = 1;
if (isset($_GET['enters']) && $_GET['enters'] !== ""){
  $s = $_GET['enters'];
}
for ($i = 1; $i <= $s; $i++): ?>
  <div class="col-md-4">
  <label for="inputCity" class="form-label">السورة ( <?php echo $i; ?> ) الداخلة في تكرارك</label>
<select class="form-select mb-3 col-md rounded-pill border-black" name="<?php echo "sora" . $i;?>" aria-label="Default select example" required>
  <option selected>ادخل السورة</option>
  <option value="الفاتحة">الفاتحة</option>
  <option value="البقرة">البقرة</option>
  <option value="ال عمران">ال عمران</option>
  <option value="النساء">النساء</option>
  <option value="المائدة">المائدة</option>
  <option value="الانعام">الانعام</option>
  <option value="الاعراف">الاعراف</option>
  <option value="الانفال">الانفال</option>
  <option value="التوبة">التوبة</option>
  <option value="يونس">يونس</option>
  <option value="هود">هود</option>
  <option value="يوسف">يوسف</option>
  <option value="رعد">رعد</option>
  <option value="ابراهيم">ابراهيم</option>
  <option value="الحجر">الحجر</option>
  <option value="النحل">النحل</option>
  <option value="الاسراء">الاسراء</option>
  <option value="الكهف">الكهف</option>
  <option value="مريم">مريم</option>
  <option value="طه">طه</option>
  <option value="انبياء">انبياء</option>
  <option value="حج">حج</option>
  <option value="المؤمنون">المؤمنون</option>
  <option value="نور">نور</option>
  <option value="فرقان">فرقان</option>
  <option value="شعراء">شعراء</option>
  <option value="نمل">نمل</option>
  <option value="قصص">قصص</option>
  <option value="عنكبوت">عنكبوت</option>
  <option value="روم">روم</option>
  <option value="لقمان">لقمان</option>
  <option value="السجدة">السجدة</option>
  <option value="الأحزاب">الأحزاب</option>
  <option value="سبأ">سبأ</option>
  <option value="فاطر">فاطر</option>
  <option value="يس">يس</option>
  <option value="الصافات">الصافات</option>
  <option value="ص">ص</option>
  <option value="الزمر">الزمر</option>
  <option value="غافر">غافر</option>
  <option value="فصلت">فصلت</option>
  <option value="الشورى">الشورى</option>
  <option value="الزخرف">الزخرف</option>
  <option value="الدخان">الدخان</option>
  <option value="الجاثية">الجاثية</option>
  <option value="الأحقاف">الأحقاف</option>
  <option value="محمد">محمد</option>
  <option value="الفتح">الفتح</option>
  <option value="الحجرات">الحجرات</option>
  <option value="ق">ق</option>
  <option value="الذاريات">الذاريات</option>
  <option value="الطور">الطور</option>
  <option value="النجم">النجم</option>
  <option value="القمر">القمر</option>
  <option value="الرحمن">الرحمن</option>
  <option value="الواقعة">الواقعة</option>
  <option value="الحديد">الحديد</option>
  <option value="المجادلة">المجادلة</option>
  <option value="الحشر">الحشر</option>
  <option value="الممتحنة">الممتحنة</option>
  <option value="الصف">الصف</option>
  <option value="الجمعة">الجمعة</option>
  <option value="المنافقون">المنافقون</option>
  <option value="التغابن">التغابن</option>
  <option value="الطلاق">الطلاق</option>
  <option value="التحريم">التحريم</option>
  <option value="الملك">الملك</option>
  <option value="القلم">القلم</option>
  <option value="الحاقة">الحاقة</option>
  <option value="المعارج">المعارج</option>
  <option value="نوح">نوح</option>
  <option value="الجن">الجن</option>
  <option value="المزمل">المزمل</option>
  <option value="المدثر">المدثر</option>
  <option value="القيامة">القيامة</option>
  <option value="الانسان">الانسان</option>
  <option value="المرسلات">المرسلات</option>
  <option value="النبأ">النبأ</option>
  <option value="النازعات">النازعات</option>
  <option value="عبس">عبس</option>
  <option value="التكوير">التكوير</option>
  <option value="الانفطار">الانفطار</option>
  <option value="المطففين">المطففين</option>
  <option value="الانشقاق">الانشقاق</option>
  <option value="البروج">البروج</option>
  <option value="الطارق">الطارق</option>
  <option value="الأعلى">الأعلى</option>
  <option value="الغاشية">الغاشية</option>
  <option value="الفجر">الفجر</option>
  <option value="البلد">البلد</option>
  <option value="الشمس">الشمس</option>
  <option value="الليل">الليل</option>
  <option value="الضحى">الضحى</option>
  <option value="الشرح">الشرح</option>
  <option value="التين">التين</option>
  <option value="العلق">العلق</option>
  <option value="القدر">القدر</option>
  <option value="البينة">البينة</option>
  <option value="الزلزلة">الزلزلة</option>
  <option value="العاديات">العاديات</option>
  <option value="القارعة">القارعة</option>
  <option value="التكاثر">التكاثر</option>
  <option value="العصر">العصر</option>
  <option value="الهمزة">الهمزة</option>
  <option value="الفيل">الفيل</option>
  <option value="قريش">قريش</option>
  <option value="الماعون">الماعون</option>
  <option value="الكوثر">الكوثر</option>
  <option value="الكافرون">الكافرون</option>
  <option value="النصر"> النصر </option>
  <option value="المسد"> المسد </option>
  <option value="الاخلاص"> الاخلاص </option>
  <option value="الفلق"> الفلق </option>
  <option value="الناس"> الناس </option>
</select>
  </div>

  <div class="col-md-4">
  <label for="inputState" class="form-label">عدد المرات</label>
    <input type="number" name="<?php echo "num" . $i;?>" placeholder="كم مرة كررت هذه السورة؟" class="form-control rounded-pill border-black" required>
  </div>

  <div class="col-md-4">
    <label for="inputZip" class="form-label">التاريخ</label>
    <input type="date" name="<?php echo "dat" . $i;?>" class="form-control rounded-pill border-black" required>
  </div>
  <br>
  <hr>
  <br>
  <?php endfor; ?>

  <div class="col-mb-4 m-l">
  <input  type="submit" name="submit" class="btn btn-primary rounded-pill" value="ادخل المعلومات">
  </div>

</form>  

<form method="GET" class="row g-3 m-r">
  <div class="col-md-3">
    <input type="number" name="enters" min="1" max="112" placeholder="كم سورة تريد إدخالها ؟؟" class="form-control rounded-pill border-black">
  </div>

  <div class="col-md-2">
    <button class="btn btn-outline-dark rounded-pill">إضافة</button>
  </div>
</form>


  <?php

include 'conn.php';
if(isset($_GET['names'])){
  $name = $_GET['names'];
  session_start();
  $_SESSION["name"] = $name;
}
if(isset($_GET['magmoaa'])){
  $magmoaa = $_GET['magmoaa'];
}
$sqln = "SELECT names, magmoaa FROM users";
$resulti = $conn->query($sqln);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $resulti->fetch_assoc()) {
    if($name === $row['names']){
      $breack = 0;
    }
  }
}
$break = 'no';
if(isset($_GET['submit'])){
  $sqlnew = "SELECT names, magmoaa FROM users";
  $resultnew = $link->query($sqlnew);
  while($row = $resultnew->fetch_assoc()){
    if($name === $row['names']){
      $break = 'ok';
    }
  }
  if($break === 'no'){
  $sql = "INSERT INTO users (names, magmoaa)
  VALUES ('$name', '$magmoaa')";
  if ($conn->query($sql) === TRUE) {
    echo "تم الادخال بنجاح <br>";
  } else {
    echo "حدث خطأ في الإدخال";
  }
  }

    if(isset($_GET['sora1']) && isset($_GET['num1'])){
    $sora = $_GET['sora1'];
    $num = $_GET['num1'];
    $dat = $_GET['dat1'];
    }

    $sqln = "INSERT INTO soras (names, sora, dat, num)
    VALUES ('$name', '$sora', '$dat', $num)";
  if ($conn->query($sqln) === TRUE) {
    echo "تم الادخال بنجاح";
  } else {
    echo "حدث خطأ في الإدخال";
  }
}
?>



</div>
</div>


<!-- ............. dont touch ............. -->
<script src="bootstrap.bundle.min.js"></script>
<script src="script.js"></script>

<footer class="bg-light text-center text-lg-start">
  <!-- Grid container -->
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
     <p> صُمّم الموقع من قبل <br> <a href="https://www.facebook.com/creativeidtm"> طارق المزيك </a> | كافة الحقوق محفوظة 2022 ©</p>
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>

