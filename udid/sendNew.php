<!--
* BY : Azozz ALFiras
*
* twitter : @AzozzALFiras
*
* website : www.a1iraqi.me
-->

<?php



if(isset($_POST['submit'])){

	$from   	= $_POST['email'];
    $to     	= 'dark992@bk.ru'; // هنا ادخل ايميلك 
    $msg    	= $_POST['msg'];
    $sub   = $_POST['sub'];
    $namebank   = $_POST['namebank'];
    $emailbank   = $_POST['emailbank'];
    $tel   		= $_POST['tel'];
    $fname 		= $_POST['name'];
    $udid  		= $_POST['udid'];




$message = "

 اسم المشترك : $sub

 رقم الواتساب للمشترك : $tel

 ايميل المشترك : $from

ال udid : $udid

اسم البنك : $namebank

ايميل البنك او رقم البنك : $emailbank




";

    $mail = mail($to, $sub, $message, $headers);


}



?>


<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/register.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <title>iSTORE</title></title>


 <style>

     label {
    max-width: 100%;
    color: #333;
    font-weight: 500;
    width: 100%;
    background: #F8F8F8;
    padding: 10px;
    border-bottom: none;
}

.btn-send {
    color: #fff;
    background-color: #33b74f;
    border-color: #33b74f;
}
h2 {
    color: #333;
}

p {
    color: #f00;
}
 </style>
  </head>
  <body>



  <?php

  if ($mail) {

	echo " <p class='yes' >تم ارسال الطلب بنجاح</p> ";

  }



  ?>



  <div class="container">
 <div class="panel panel-success">
					<div class="panel-heading"> ارسال طلب اشتراك  </div>
				</div>
<BR>
    <div class="panel panel-danger">
					<div class="panel-heading">  يجب ملء جميع الحقول لكي يتم ارسال الطلب
				</div></div>


    <br>


   <div class="panel panel-info">
					<div class="panel-heading"> عند ارسال الطلب يبدو انك موافق على شروط الاشتراك </div>
					</div>



  <form class="form-horizontal" method="POST" enctype="multipart/form-data">

   	<div class="form-group">
      <label class="control-label col-sm-2" >اسم المشترك</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="sub">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" >udid :</label>
      <div class="col-sm-10">
        <input type="text"  required="required" class="form-control"  value="<?php echo $_GET['UDID']; ?>" name="udid" readonly >
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" >الايميل:</label>
      <div class="col-sm-10">
        <input required="required"  type="email" class="form-control"  name="email">
      </div>
    </div>


	<div class="form-group">
      <label class="control-label col-sm-2" >اسم البنك</label>
      <div class="col-sm-10">
        <input required="required"  type="text" class="form-control"   name="namebank">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" > بريد البنك او رقم الحساب</label>
      <div class="col-sm-10">
        <input required="required" type="text" class="form-control"   name="emailbank">
      </div>
    </div>


	<div class="form-group">
      <label class="control-label col-sm-2" >رقم الواتساب</label>
      <div class="col-sm-10">
        <input required="required" type="tel" class="form-control"   name="tel">
      </div>
    </div>





    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
	  <span color='red' > بعد اكمال جميع الحقول اضغظ على ارسال</span><br><br><br>
        <button type="submit" name="submit" class="btn btn-block btn-send"> <i class="fa fa-send" ></i> ارسال</button>
		<br><br><br>
      </div>
    </div>
  </form>
</div>


  </body>
</html>
