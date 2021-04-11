<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/nmp/chart.js@2.8.0"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<style>
.box{
  width:600px;
  margin:0 auto;
  border:1px solid #ccc;
}
.has-error{
  border-color:#cc0000;
  background-color:#ffff99;
}

</style>
<body>

    <div class="container-box">
    @if(count($errors)>0)
        <div class="alert alert-danger">
         <button type="button" data-dismiss="alert" class="close">
         </button>
         <ul> 
         @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
         @endforeach
          </ul>
        </div>
    @endif
    <form action="POST" action "{{url('sendemail/send')}}">
        
        {{ csrf_field() }}
        <div class="form-group">
        <label for="">Enter your name</label>
        <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
        <label  class="lang"  key="forma3"><b>Enter Your Email</b></label>
        <input type="text" name ="email" class="lang" key="forma33" placeholder="example@example.com" name="phone" required>
        </div>
        <div class="form-group">
        <label for="">Enter your message</label>
        <textarea name="message" class="form-control" ></textarea>
        </div>
        <div class="form-group">
        <button type="submit" name="send" value="Send" class="btn btn-info lang"  key="forma4">Send</button>
        
        </div>
      </form>
    </div>
<!-- <button class="open-button lang"  key="more" onclick="openForm()">Подробнее</button>
    <div class="form-popup" id="myForm">
      <button type="button" style="float: right;" class="btn cancel" onclick="closeForm()">Х</button>
      <form action="/action_page.php" class="form-container">
        <h1 style="font-size:1.6vw;margin-top: -0.3vw;float: left;" class="lang" key="forma1">Ответим на все вопросы
        </h1>
        <hr>
        <label for="name" class="lang" key="forma2"><b>Имя</b></label>
        <input type="text" class="lang" key="forma22" placeholder="Ваше имя" name="name" required>
        
        <label for="phone" class="lang" key="forma3"><b>Электронная почта</b></label>
        <input type="text" class="lang" key="forma33" placeholder="example@example.com" name="phone" required>
        <button type="button" class="btn btn-info lang"  key="forma4">Отправить</button>
      </form>
    </div> -->
</body>
</html>