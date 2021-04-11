<?php
$con=mysqli_connect('localhost','root','','Home');
$sql="select * from like_dislike";
$res=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Home.css">
    <title>@lang('main.edu_site')</title>
    <link rel="stylesheet" href="127.0.0.1/laravel12/Home.css">
</head>
<style>
body{
  font-family: montserrat;
  margin: 0px;
  padding: 0px;
}
/* navbar */
nav{
  background: #0082e6;
  height: 80px;
  width: 100%;
}
label.logo{
  color: white;
  font-size: 35px;
  line-height: 80px;
  padding: 0 100px;
  font-weight: bold;
}
nav ul{
  float: right;
  margin-right: 20px;
}
nav ul li{
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
}
nav ul li a{
  color: white;
  font-size: 17px;
  padding: 7px 13px;
  border-radius: 3px;
  text-transform: uppercase;
}
a.active,a:hover{
  background: #1b9bff;
  transition: .5s;
}
.checkbtn{
  font-size: 30px;
  color: white;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}
#check{
  display: none;
}
#backImg{
  margin-top: 0px;
  width: 100%;
  background: url(https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/book-quotes-1531945007.jpg?crop=1.00xw:0.753xh;0,0.247xh&resize=1200:*) no-repeat;
  background-size: cover;
}
.text-block {
  position: absolute;
  top: 40%;
  left: 55%;
  transform: translate(-50%, -50%);
  font-size: 100%;
}
.firstPage {
  position: relative;
  text-align: center;
  color: black;
}
#moreI{
  position: absolute;
  top: 60%;
  left: 55%;
  transform: translate(-50%, -50%);
}
/* MoreInformation */

.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 1;
  position: absolute;
  top: 55%;
  left: 47%;
  font-size: 2vw;
  width: 18vw;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: absolute;
  bottom: 10%;
  width: 40%;
  right: 25%;
  border: 1vw;
  background-color: white;
  z-index: 1000;
}


/* Add styles to the form container */
.form-container {
  width: 100%;
  height: 50%;
  padding: 10%;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}


/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
.container {
  color: #333;
  margin: 0 auto;
  text-align: center;
}

/* video */
.evideo{
  width: 55vw;
  height: 30vw;
}
.text2{
  text-align: center;
}
.text1{
  margin-left: 8vw;
}

/* cards */
.cards {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
}

.cards_item {
  display: flex;
  padding: 1rem;
}

@media (min-width: 40rem) {
  .cards_item {
    width: 50%;
  }
}

@media (min-width: 56rem) {
  .cards_item {
    width: 33.3333%;
  }
}

.card {
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
}
.card-image{
  width: 1vw;
  height: 1vw;
}

.card_content {
  padding: 1rem;
  background: linear-gradient(to bottom left, #312d2d 40%, #2e2622 100%);
}

.card_title {
  color: #ffffff;
  font-size: 1.1rem;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: capitalize;
  margin: 0px;
}

.card_text {
  color: #ffffff;
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 1.25rem;    
  font-weight: 400;
}
.moretext{
  display: none;
  font-size: 0.8vw;
}
#myBtn{
  text-align: center  ;
}
.main{
  background-color: #ecf9ff;
}
</style>
<body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">@lang('main.edu_site')   </label>
      <ul>
        <li><a class="active" href="#">@lang('main.mainP')</a></li>
        <li><a href="#">@lang('main.unt')</a></li>
        <li><a href="#">@lang('main.posSide')</a></li>
        <li><a href="#">@lang('main.about_us')</a></li>
        <li><a href="#">@lang('main.contacts')</a></li> 
        <li><a href="{{route('locale','ru')}}">Переключить язык</a></li>
      </ul>
    </nav>
  <section class="firstPage" >
    <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/book-quotes-1531945007.jpg?crop=1.00xw:0.753xh;0,0.247xh&resize=1200:*" class="img-responsive" id="backImg" alt="">
    <div class="text-block">
      <p style="font-size:3vw;">@lang('main.text1')</p>
      <p style="font-size:2.5vw;">@lang('main.text2')</p>
    </div>
    <button class="open-button" onclick="openForm()">@lang('main.more')</button>
    <div class="form-popup" id="myForm">
      <button type="button" style="float: right;" class="btn cancel" onclick="closeForm()">Х</button>
      <form action="/action_page.php" class="form-container">
        <h1 style="font-size:1.6vw;margin-top: -0.3vw;float: left;">Ответим на все вопросы
        </h1>
        <hr>
        <label for="name"><b>Имя</b></label>
        <input type="text" placeholder="Ваше имя" name="name" required>
        
        <label for="phone"><b>Телефон</b></label>
        <input type="text" placeholder="+7" name="phone" required>
        <button type="button" class="btn btn-info">Отправить</button>
      </form>
    </div>
  </section>

  <section class="main" >
    <hr >
    <div class="w3-row">
      <div class="w3-col w3-container m7 l5 ">
        <div class=text>
        
              <h2 class="text1">@lang('main.text11')</h2>
              <p class="text2"><i>@lang('main.unt')</i></p>
              <p class="text3">@lang('main.text22')
              </p>
            </div>
          </div>
          
          <div class="w3-col w3-container m5  l5">  
            <iframe class="evideo"     src="https://www.youtube.com/embed/tgbNymZ7vqY?controls=0">
            </iframe>
          </div>
        </div>
      </div>
    <hr>
    <div class="main">
      <h1 style="text-align: center;">@lang('main.last_news')</h1>
      <ul class="cards">
      <?php while($row=mysqli_fetch_assoc($res)){
        ?>
        <li class="cards_item">
          <div class="card">
            <div class="card_content">
              <h2 class="card_title"><?php echo $row['post']?>
                 @lang('main.post1')
                
              <hr>
                <p class="card_text">    @lang('main.post2')</p>
                <p class="moretext">
                  - тестируемый может выбрать место, день и время тестирования;<br>
                  - возможность корректировки своего заявления на участие (изменение языка, предметов сдачи); <br>
                  - исправление ошибочных ответов (что в случае с закрашиванием бумажного листа невозможно); <br>
                  - доступность калькулятора и вспомогательных таблиц (Менделеева и растворимости солей);<br>
                  - выдача результатов сразу после завершения тестирования;<br>
                  - возможность подать на апелляцию сразу же после завершения тестирования. <a href="https://www.inform.kz/ru/ent-2021-startovalo-v-kazahstane_a3743098">inform.kz </a> <br>
                </p>
              <button onclick="myFunction()" class="btn btn-info" id="myBtn" style="margin-left: 8vw;">@lang('main.read')</button>
              
              <div class="like_dislike " style="margin-top: 1.5vw;margin-left: 1vw;;">
                 
                 <a href="javascript:void(0)" class="btn btn-info btn-medium">
                   <span class="glyphicon glyphicon-thumbs-up" onclick="like_update('<?php echo $row['id']?>')">@lang('main.like')
                    (<span id="like_loop_<?php echo $row['id']?>">
                   <?php echo $row['like_count']?></span>)</span>  
                 </a>
                 <a href="javascript:void(0)" class="btn btn-info btn-medium" style="margin-left: 1.5vw;">
                  <span class="glyphicon glyphicon-thumbs-down" onclick="dislike_update('<?php echo $row['id']?>')">@lang('main.dislike')  (<span id="dislike_loop_<?php echo $row['id']?>">
                  <?php echo $row['dislike_count']?></span>)</span> 
                </a>
                  
                </div>
            </div>
          </div>
        </li>
      <?php } ?>
        <li class="cards_item">
          <div class="card">
          <?php while($row=mysqli_fetch_assoc($res)){
        ?>
            <div class="card_content">
              <h2 class="card_title" ><?php echo $row['post']?>150 ученых стали победителя конкурса «Лучший преподаватель вуза - 2020»
               <hr>
                < <p class="card_text">Тестирование пройдет по принципу «один тестируемый – один компьютер – одна камера». Электронный формат тестирования имеет ряд преимуществ:</p>
                <p class="moretext">
                  - тестируемый может выбрать место, день и время тестирования;<br>
                  - возможность корректировки своего заявления на участие (изменение языка, предметов сдачи); <br>
                  - исправление ошибочных ответов (что в случае с закрашиванием бумажного листа невозможно); <br>
                  - доступность калькулятора и вспомогательных таблиц (Менделеева и растворимости солей);<br>
                  - выдача результатов сразу после завершения тестирования;<br>
                  - возможность подать на апелляцию сразу же после завершения тестирования. <a href="https://www.inform.kz/ru/ent-2021-startovalo-v-kazahstane_a3743098">inform.kz </a> <br>
                </p>
              <button onclick="myFunction()" class="btn btn-info" id="myBtn3" style="margin-left:8vw">Читать</button>
              <div class="like_dislike " style="margin-top: 1.5vw;margin-left: 1vw;;">
                 
                 <a href="javascript:void(0)" class="btn btn-info btn-medium">
                   <span class="glyphicon glyphicon-thumbs-up" onclick="like_update('<?php echo $row['id']?>')">Нравиться
                    (<span id="like_loop_<?php echo $row['id']?>">
                   <?php echo $row['like_count']?></span>)</span>  
                 </a>
                 <a href="javascript:void(0)" class="btn btn-info btn-medium" style="margin-left: 1.5vw;">
                  <span class="glyphicon glyphicon-thumbs-down" onclick="dislike_update('<?php echo $row['id']?>')">Не нравиться  (<span id="dislike_loop_<?php echo $row['id']?>">
                  <?php echo $row['dislike_count']?></span>)</span> 
                </a>
                  
                </div>
            </div>
          </div>
        </li>
        <?php } ?>
        <li class="cards_item">
          <div class="card">
          <?php while($row=mysqli_fetch_assoc($res)){
        ?>
            <div class="card_content">
              <h2 class="card_title"><?php echo $row['post']?>ЕНТ-2021 стартовало в Казахстане
                <hr>
                <p class="card_text">Тестирование пройдет по принципу «один тестируемый – один компьютер – одна камера». Электронный формат тестирования имеет ряд преимуществ:</p>
                <p class="moretext">
                  - тестируемый может выбрать место, день и время тестирования;<br>
                  - возможность корректировки своего заявления на участие (изменение языка, предметов сдачи); <br>
                  - исправление ошибочных ответов (что в случае с закрашиванием бумажного листа невозможно); <br>
                  - доступность калькулятора и вспомогательных таблиц (Менделеева и растворимости солей);<br>
                  - выдача результатов сразу после завершения тестирования;<br>
                  - возможность подать на апелляцию сразу же после завершения тестирования. <a href="https://www.inform.kz/ru/ent-2021-startovalo-v-kazahstane_a3743098">inform.kz </a> <br>
                </p>  
              <button onclick="myFunction()" class="btn btn-info" id="myBtn2" style="margin-left:8vw">Читать</button>
              <div class="like_dislike " style="margin-top: 1.5vw;margin-left: 1vw;;">
                 
                 <a href="javascript:void(0)" class="btn btn-info btn-medium">
                   <span class="glyphicon glyphicon-thumbs-up" onclick="like_update('<?php echo $row['id']?>')">Нравиться
                    (<span id="like_loop_<?php echo $row['id']?>">
                   <?php echo $row['like_count']?></span>)</span>  
                 </a>
                 <a href="javascript:void(0)" class="btn btn-info " style="margin-left: 1.0vw;">
                  <span class="glyphicon glyphicon-thumbs-down" onclick="dislike_update('<?php echo $row['id']?>')">Не нравиться  (<span id="dislike_loop_<?php echo $row['id']?>">
                  <?php echo $row['dislike_count']?></span>)</span> 
                </a>
                  
                </div>
            </div>
          </div>
        </li>
        <?php } ?>
      </ul>


    </div>
    </section> 

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>    
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script>
 function like_update(id){
			jQuery.ajax({
				url:'update_count.php',
				type:'post',
				data:'type=like&id='+id,
				success:function(result){
					var cur_count=jQuery('#like_loop_'+id).html();
					cur_count++;
					jQuery('#like_loop_'+id).html(cur_count);
			
				}
			});
		}	
		
		function dislike_update(id){
			jQuery.ajax({
				url:'update_count.php',
				type:'post',
				data:'type=dislike&id='+id,
				success:function(result){
					var cur_count=jQuery('#dislike_loop_'+id).html();
					cur_count++;
					jQuery('#dislike_loop_'+id).html(cur_count);
			
				}
			});
		}	
    var arrLang={
      'en':{
        'edu_site':'EduCenter',
        'mainP':'Home',
        'unt':'UNT',
        'posSide':'Advantages',
        'about_us':'About us',
        'contacts':'Contacts',
        'text1':'Win a grant to the dream university!',
        'text2':'More than education',
        'more':'More about',
        'text11':'Higher education',
        'text22':'Unified national testing is a system for assessing the knowledge of graduates used in the Republic of Kazakhstan. UNT results are recognized by universities as results of entrance exams. UNT points are also important when awarding the Bolashak Presidential Scholarship. Citizens of Kazakhstan have the right to be awarded on a competitive basis the Bolashak International Scholarship for studying abroad [14]. Upon graduation from the university, the graduate receives a bachelor s degree (4 years), a specialist (5 years) or a master s degree (6 years). The second higher education [15] in Kazakhstan is received only on a paid basis with an accelerated period of study (2-3 years).',
        'last_news':'Last News',
        'post1':'For the first time in history, the Unified National Testing (UNT) will be conducted in electronic format from March 10 to April 10, 2021.',
        'post2':'Testing will be held on the principle "one tested - one computer - one camera". The electronic testing format has several advantages:',
        'read':'Read more',
        'like':'Like',
        'dislike':'Dislike',
      }
      'ru':{
        'edu_site':'EduCenter',
        'mainP':'Главная',
        'unt':'ЕНТ',
        'posSide':'Наши Фишки',
        'about_us':'О нас',
        'contacts':'Контакты',
        // 'text1':'Win a grant to the dream university!',
        // 'text2':'More than education',
        // 'more':'More about',
        // 'text11':'Higher education',
        // 'text22':'Unified national testing is a system for assessing the knowledge of graduates used in the Republic of Kazakhstan. UNT results are recognized by universities as results of entrance exams. UNT points are also important when awarding the Bolashak Presidential Scholarship. Citizens of Kazakhstan have the right to be awarded on a competitive basis the Bolashak International Scholarship for studying abroad [14]. Upon graduation from the university, the graduate receives a bachelor s degree (4 years), a specialist (5 years) or a master s degree (6 years). The second higher education [15] in Kazakhstan is received only on a paid basis with an accelerated period of study (2-3 years).',
        // 'last_news':'Last News',
        // 'post1':'For the first time in history, the Unified National Testing (UNT) will be conducted in electronic format from March 10 to April 10, 2021.',
        // 'post2':'Testing will be held on the principle "one tested - one computer - one camera". The electronic testing format has several advantages:',
        // 'read':'Read more',
        // 'like':'Like',
        // 'dislike':'Dislike',
      }
    }
    $(function(){
      $('.translate').click(function(){
        var lang=$(this).attr('id');
        $('.lang').each(function(index,item){
          $(this).text(arrLang[lang][$(this).attr('key')]);
        });
      });
    };
  </script>
  
</body>
</html>