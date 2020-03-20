<?php
if(isset($_POST['submit'])){
  require_once 'db.php';
  $empno = $_POST['empno'];
  $ename = $_POST['ename'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql ="INSERT INTO emp (EMPNO,ENAME,USERNAME,PASSWORD) 
  VALUES(?,?,?,?)";
  $statement =$connection->prepare($sql);
  if($statement->execute([$empno,$ename,$username,$password])){
  echo 'ลงทะเบียนเสร็จเรียบร้อย';
  }
}
?>
<?php require 'header.php';?>
<div class="container">
  <div class="card mt-5">
    
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
        <?= $message; ?>
        </div>
        <?php endif; ?>
<form name="register" action="" method="post">

<center><div class="alert alert-primary" role="alert"><h1>ลงทะเบียนบัญชีใหม่</h1></div></center>
<center><label for="username" > ง่ายและรวดเร็ว </label> </center>
<form name="register" action="" method="post">
<br>
<br>
<div>
<input type="text"class="form-control"  name ="empno" placeholder ="รหัสพนักงาน" required>
</div>
<br>
<div>
<input type="text" class="form-control" name ="ename" placeholder ="ชื่อ" required>
</div>
<br>
<div>
<input type="text" class="form-control" name ="username" placeholder ="อีเมล" required>
</div>
<br>
<div>
<input type="text" class="form-control" name ="password" placeholder ="รหัสผ่าน" required>
</div>
<br>
<center>
<button type="submit" class="btn btn-outline-primary" class="box" name = "submit" value="สมัครใช้งาน">สมัครใช้งาน</button>
</center>
</form>
<?php require 'footer.php'; ?>
