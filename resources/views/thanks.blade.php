<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title>
    <style>

      * {
        background-color:rgb(204, 203, 203);
      }

      .ttl {
        height:70px;
        width:100%;
        font-size:25px;
        color:blue;
        padding-top:30px;
        padding-left:150px;
        font-weight:bolder;
      }

      .content {
        height:100%;
        width:100%;
        text-align:center;
      }

      .thanks {
        background:white;
        height:150px;
        width:380px;
        margin-left:35%;
        padding-top:80px;
        font-weight:lighter;
        font-size:18px;
        box-shadow:2px 2px 2px gray;
        position:relative;
        border-radius:3px;
      }

      .login {
        position:relative;
        bottom:110px;
        background:rgb(45, 45, 247);
        color:white;
        border-radius:5px;
        font-size:10px;
        height:25px;
        width:80px;
        outline:none;
        border:white;
      }

    </style>
  </head>

  <body>
    <div class="header">
      <p class="ttl">Rese</p>
    </div>
    <div class="content">
      <h2 class="thanks">会員登録ありがとうございます</h2>
      <form action="#">
      @csrf
      <input class="login" type="submit" value="ログインする">
      </form>
    </div>
  </body>
</html>







