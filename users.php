<?php
error_reporting(0);
ini_set('display_errors', 0);
if(isset($_GET['names'])){
$name = $_GET['names'];
}
include 'conn.php';
$sqlnew = "SELECT sora, names, num, dat FROM soras";
$resultnew = $link->query($sqlnew);
$sora = array();
$num = array();
$dat = array();
$i = 0;
$count = 0;
$temp = 0;
while($row = $resultnew->fetch_assoc()){
  if($name === $row['names']){
    $sora[$i] = $row['sora'];
    $num[$i] = $row['num'];
    $dat[$i] = $row['dat'];
    $count++;
    $i++;
  }
}if($_GET['sort'] === "sortbynumd" || !isset($_GET['sort'])){
for($i=0;$i<$count;$i++)
{		
  for($j=$i+1;$j<$count;$j++)
  {
    if($num[$i] > $num[$j])
    {
      $temp  =$num[$i];
      $num[$i]=$num[$j];
      $num[$j]=$temp;

      $temp  =$sora[$i];
      $sora[$i]=$sora[$j];
      $sora[$j]=$temp;

      $temp  =$dat[$i];
      $dat[$i]=$dat[$j];
      $dat[$j]=$temp;
    }
  }
}
}
if($_GET['sort'] === "sortbynumind"){
  for($i=0;$i<$count;$i++)
  {		
    for($j=$i+1;$j<$count;$j++)
    {
      if($num[$i] < $num[$j])
      {
        $temp  =$num[$i];
        $num[$i]=$num[$j];
        $num[$j]=$temp;
  
        $temp  =$sora[$i];
        $sora[$i]=$sora[$j];
        $sora[$j]=$temp;
  
        $temp  =$dat[$i];
        $dat[$i]=$dat[$j];
        $dat[$j]=$temp;
      }
    }
  }
  }
  if($_GET['sort'] === "sortbydate"){
    for($i=0;$i<$count;$i++)
    {		
      for($j=$i+1;$j<$count;$j++)
      {
        if($dat[$i] > $dat[$j])
        {
          $temp  =$num[$i];
          $num[$i]=$num[$j];
          $num[$j]=$temp;
    
          $temp  =$sora[$i];
          $sora[$i]=$sora[$j];
          $sora[$j]=$temp;
    
          $temp  =$dat[$i];
          $dat[$i]=$dat[$j];
          $dat[$j]=$temp;
        }
      }
    }
    }

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
<style> body{ font-family: Tajawal;} </style>
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
            <a class="nav-link text-dark hover mb-4" aria-current="page" href="index.php#">المستخدمين</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark hover mb-4" aria-current="page" href="enter.php">إضافة مستخدم</a>
          </li>
        </ul>
  </nav>
</header>

<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat');


.center {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 50px;
}
.center p {
  font-size: 3rem;
  padding: 0.5rem;
  font-weight: bold;
  letter-spacing: 0.1rem;
  text-align: center;
  overflow: hidden;
}
.center p span.typed-text {
  font-weight: normal;
  color: #dd7732;
}
.center p span.cursor {
  display: inline-block;
  background-color: #ccc;
  margin-left: 0.1rem;
  width: 3px;
  animation: blink 1s infinite;
}
.center p span.cursor.typing {
  animation: none;
}
@keyframes blink {
  0%  { background-color: #ccc; }
  49% { background-color: #ccc; }
  50% { background-color: transparent; }
  99% { background-color: transparent; }
  100%  { background-color: #ccc; }
}
.usres{
  border: dashed 3px black;
  border-radius: 25px;
}
.hide{
  display: none;
}
.table-blue{
  background-color: cyan;
}
</style>

<div dir="rtl" class="">


<div class="center mb-5">
    <p><span class="typed-text"><?php echo $_GET['names']; ?></span><span class="cursor">&nbsp;</span></p>
  </div>
<div>

<form class="row gy-2 gx-3 align-items-center m-3" method="GET">

  <div class="col-auto">
    <button type="submit" class="btn"><i class="bi bi-sort-down m-2"></i></button>
  </div>

  <div class="col-auto">
      <select class="form-control rounded-pill" id="autoSizingInputGroup" name="sort" aria-label="Default select example">
        <option <?php if($_GET['sort'] === "sortbynumd"){echo " selected ";} ?> value="sortbynumd"> ترتيب حسب عدد التكرارات تصاعدياً</option>
        <option <?php if($_GET['sort'] === "sortbynumind"){echo " selected ";} ?> value="sortbynumind"> ترتيب حسب عدد التكرارات تنازلياً</option>
        <option <?php if($_GET['sort'] === "sortbydate"){echo " selected ";} ?> value="sortbydate">ترتيب حسب التاريخ</option>
        <option <?php if($_GET['sort'] === "sortbysora"){echo " selected ";} ?> value="sortbysora">ترتيب حسب السورة</option>
      </select>
  </div>

  <div class="col-auto hide">
    <input type="text" name="names" value="<?php echo $name; ?>">
  </div>

  <div class="col-auto">
    <h5 class="m-2">|</h5>
  </div>

  <div class="col-auto">
    <button type="submit" class="btn"><i class="bi m-2 bi-pencil-square"></i> تعديل السور</button>
  </div>

  <div class="col-auto">
    <h5 class="m-2">|</h5>
  </div>

  <div class="col-auto">
    <button type="submit" class="btn"> <i class="bi bi-trash3"></i> حذف المستخدم</button>
  </div>

</form>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">اسم السورة</th>
      <th scope="col">عدد تكرارات السورة</th>
      <th scope="col">تاريخ آخر إضافة</th>
    </tr>
  </thead>
  <?php for($i = 0;$i < $count;$i++): ?>

      <tbody>
        <tr class="<?php if($num[$i] < 5){ echo "table-dark";}elseif($num[$i] < 10){ echo "table-danger";}elseif($num[$i] < 15){ echo "table-info";}elseif($num[$i] >= 15){ echo "table-blue";} ?>">
          <td><?php echo $sora[$i]; ?></td>
          <td><?php echo $num[$i]; ?></td>
          <td><?php echo $dat[$i]; ?></td>
        </tr>
      </tbody>
      
  <?php endfor; ?>

</table>



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