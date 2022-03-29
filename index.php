<?php
    
    include 'conn.php';
    $sql = "SELECT names, magmoaa FROM users";
    $result = $conn->query($sql);
    $n = 0;
    if ($result->num_rows > 0) {
      $users = array();
      $mag = array();
      // output data of each row
      for($i = 0; $row = $result->fetch_assoc(); $i++){
        $users[$i] = $row['names'];
        $mag[$i] = $row['magmoaa'];
        $n++;
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>tikrar</title>
</head>
<style> body{ font-family: Tajawal;
    background-image: url(images/background1.png);
    background-position: top;
    background-repeat: no-repeat;
    background-size:contain ;
    } 
    </style>
<body class="bg-light">

<header>
<div class="logo">
    <div class="i"></div>
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

.center {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 50px;
}
.center p {
  color: white;
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
.col-cards{
  display: flex;
  justify-content: center;
  align-items: center;
}
.hide{
  display: none;
}
@media screen and (max-width: 600px) {
  .text--small{
    color: white;
  }
  img{
    width: 100px;
  }
  .center p{
    font-size: 2.1rem;
  }
  .f{
    width: 100px;
  }
  .content{
  margin-left: auto;
  margin-right: auto;
  width: 400px;
  }
  .name{
    width: 123px;
    margin-right: 40px;
  }.content strong{
    color: black;
  }
}
.name-href:hover{
    font-size: 35px; 
    color: darkblue;
    transition: 0.3s;
  }
.h{
  text-decoration: none;
}
.g {
  padding: 5px;
    border-radius: 20px;
    border-top: 5px solid aqua;
    border-bottom:5px solid cyan;
    background-color: 
        linear-gradient(aqua, cyan),
        linear-gradient(aqua, cyan)
    ;
    background-size:5px 100%;
    background-position:0 0, 100% 0;
    background-repeat:no-repeat;
}
.circle{
  background-color: rgb(0, 0, 51) ;
  width: 40px;
  height: 40px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  text-align: center;
  align-items: center;
  padding-top: 8px;
  border-radius: 50px;
  margin-top: 40px;
}
@media screen and (min-width: 600px) {
.content{
  margin-left: auto;
  margin-right: auto;
  width: 600px;
}
.text--small{
  color: white;
}
}


</style>
<div dir="rtl" class="">
<div class="center mb-5">
    <p>قرآني <span class="typed-text"></span><span class="cursor">&nbsp;</span></p>
  </div>

<div class="content">  
<?php for($j = 0 ; $j < 3 ; $j++): ?>
<strong class="mb-5 <?php if($j === 0){ echo "text--small"; }?>"> <?php if($j === 0){ echo "مجموعة الخمس أجزاء:"; } if($j === 1){ echo "مجموعة الثلاث أجزاء:"; } if($j === 2){ echo "مجموعة جزء عم:"; } ?> </strong>
<?php if($n === 0){ echo "<br><br> لايوجد مستخدمين <br><br>"; } ?>
<?php for($i = 0;$i < $n;$i++): ?>
<div class="link">
  <div class="card m-3 g <?php $name = $users[$i]; if($j === 0){ if($mag[$i] !== "five"){ echo "hide"; }} if($j === 1){ if($mag[$i] !== "three"){ echo "hide"; }} if($j === 2){ if($mag[$i] !== "one"){ echo "hide"; }} ?>" style="max-width: 540px;">
    <div class="row g-0">
       <div class="col-3">
         <img class="m-2" width="100" src="images/profile.png" class="img-fluid rounded-start"  alt="profile">
       </div>
      <div class="col-8 f name">
        <div class="card-body">
          <a class="h" href="users.php?names=<?php echo $name;?>"><h2 class="card-title name-href"> <?php echo $name; ?> </h2></a>
          <?php
          $count = 0;
        $sqlnew = "SELECT sora, names FROM soras";
        $resultnew = $link->query($sqlnew);

        while($row = $resultnew->fetch_assoc()): ?>
        <?php if($name === $row['names']){$count++;} ?>


        <h6 class="<?php if($name !== $row['names']){echo "hide";} ?>" style="display:inline; color:gray;"> 
        <?php if($name === $row['names']){if($count < 2){echo $row['sora'] . "،";} if($count == 2){echo $row['sora'];} if($count === 3){echo "...";} if($count > 3){echo "";}} ?>
        </h6>


        <?php endwhile; ?>
        </div>
      </div>
      <div class="col-1 f">
        <div class="circle">
          <?php echo $count; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php endfor; ?>
<?php endfor; ?>


</div>
</div>



<footer class="bg-light text-center text-lg-start">
  <!-- Grid container -->
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
     <p> صُمّم الموقع من قبل <br> <a href="https://www.facebook.com/creativeidtm"> طارق المزيك </a> | كافة الحقوق محفوظة 2022 ©</p>
  </div>
  <!-- Copyright -->
</footer>
<!-- ............. dont touch ............. -->
<script src="bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
<script src="type.js"></script>
</body>
</html>