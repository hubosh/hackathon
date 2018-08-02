<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>الشاشة الرئيسية</title>
    <style media="screen">
      .div1{
        background-color: brown;
        width: 400px;
        display: block;
        height: 200px;
        color: #FFFFFF;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 50px;
        padding-left: auto;
        padding-right: auto;
      }
      .div1 a{
        color: #FFFFFF;
        text-decoration: none;
      }
    </style>
  </head>
  <body>

    <div class="div1">
      <center>
        <a href=""><h2>أين أنا</h2></a>
      </center>
    </div>

    <div class="div1">
      <center>
        <a href="<?=base_url();?>/index.php/admin/lost_user"><h2>أنا تائه</h2></a>
      </center>
    </div>

    <div class="div1">
      <center>
        <a href="<?=base_url()?>index.php/admin/register_users"><h2> سجل مجموعتك حتى لا تضيع!</h2></a>
      </center>
    </div>

    <div class="div1">
      <center>
        <a href="<?=base_url()?>index.php/admin/edit_users"><h2> تفاصيل مجموعتك </h2></a>
      </center>
    </div>

    <div class="div1">
      <center>
        <a href=""><h2>أين أجد مطاعم</h2></a>
      </center>
    </div>

    <div class="div1">
      <center>
        <a href=""><h2>أحتاج مساعدة طبية</h2></a>
      </center>
    </div>
    

  </body>
</html>
