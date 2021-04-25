<?php
$conn =mysqli_connect('localhost','root','','lab8');
if(isset($_POST['save-user'])){

  // echo "<pre>",print_r($_FILES['profileImage']['name']),"</pre>";
  $email=$_POST['email'];
  $bio = stripslashes($_POST['bio']);
  
  $profileImageName=time().'_'.$_FILES['profileImage']['name'];
  $target= '../../news/'.$profileImageName;

  if(move_uploaded_file($_FILES['profileImage']['tmp_name'],$target)){
    $sql="INSERT INTO users (profile_image,email,bio) values('$profileImageName','$email','$bio')";
   
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EduCenter</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name='viewport' content='width=device-width, initial-scale=1'>

  <script>  document.querySelector('body').innerText = document.querySelector('body').innerText.substr('array(0) { }'.length);</script>
  <link rel="stylesheet" href="../style.css">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
 <script src='https://kit.fontawesome.com/a076d05399.js'crossorigin='anonymous'></script> 
</head>
<body>
  <div class="scroll-up-btn">
    <i class="fas fa-angle-up"></i>
</div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">140<span>Edu</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">{{__('lang.home')}}</a></li>
                <li><a href="#unt" class="menu-btn">{{__('lang.unt')}}</a></li>
                <li><a href="#services" class="menu-btn">{{__('lang.services')}}</a></li>
                <li><a href="#news" class="menu-btn">{{__('lang.news')}}</a></li>
                <li><a href="#team" class="menu-btn">{{__('lang.team')}}</a></li>
                <li><a href="#contact" class="menu-btn">{{__('lang.contact')}}</a></li>
                <li><a class="dropdown-item" href="en"><img src="{{asset('../uk.png')}}" width=20 alt=""></a></li>
                <li><a class="dropdown-item" href="ru"><img src="{{asset('../ru.png')}}" width=20 alt=""></a></li>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar" >
           
                </div>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
       
          <div class="max-width">
            <div class="home-content">
                <div class="text-1">{{__('lang.text1')}}</div>
                <div class="text-2">{{__('lang.text2')}}</div>
                <a href="#contact">{{__('lang.more')}}</a>
            </div>
        </div>  
    </section>
    <section class="unt" id="unt">
      <div class="w3-row">

        <div class="w3-col w3-container m6 l5">
           <h2 class="text1 lang"  key="text11" style="text-align: center;">{{__('lang.text11')}}</h2>
                <p class="text2 lang" key="unt" style="text-align: center;"><i>{{__('lang.unt')}}</i></p>
                <p class="text3 lang"  key="text22">{{__('lang.text22')}}               </p>
        </div>
        
        <div class="w3-col w3-container m5 l6 w1-white">  
         <iframe class="evideo"  style="margin-left:10px;height:40vw;width:55vw"   src="https://www.youtube.com/embed/tgbNymZ7vqY?controls=0" > </iframe>
        </div>
      </div>
  </section>
  
     <!-- services section start -->
     <section class="services" id="services"> <a href="" >  </a>
      <div class="max-width">
          <h2 class="title">{{__('lang.service1')}}</h2>
          <div class="serv-content">
              <div class="card">
                  <div class="box">
                  <i class='fas fa-book-reader'></i>
                      <div class="text">{{__('lang.service2')}}</div>
                      <p>{{__('lang.service3')}}</p>
                  </div>
              </div>
              <div class="card">
                  <div class="box">
                  <i class='fas fa-chart-line'></i>
                      <div class="text">{{__('lang.service4')}}</div>
                      <p>{{__('lang.service5')}}</p>
                  </div>
              </div>
              <div class="card">
                  <div class="box">
                  <i class='fas fa-chart-pie'></i>
                      <div class="text">{{__('lang.service6')}}</div>
                      <p>{{__('lang.service7')}}</p>
                  </div>
              </div>
             </div>
          </div>
      </div>
  </section>
  <section class="news" id="news">
  <div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div id="news-slider" class="owl-carousel">
						<!-- 1 -->
						<div class="news-grid">
							<div class="news-grid-image"><img src="../news/1.jpg" alt="Hello">
								<div class="news-grid-box">
									<h1>25</h1>
									<p>Apr</p>
								</div></div>
								<div class="news-grid-txt">
									<span>Education</span>
									<h2>Более 20 тысяч школьников в Туркестанской области сдадут ЕНТ.</h2>
									<ul>
										<li><i class="fa fa-calendar" aria-hidden="true"></i> Apr 25, 2021</li>
										<li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
									</ul>
									<p>В более 900 школах области,обучаются около 500 тысяч учащихся,в том числе 27 410 выпускников
                  <span id="dots5"></span><span id="more5">Район, город для сдачи ЕНТ учащийся выбирает по своему усмотрению. Тестирование проводится в центрах, оборудованных компьютерами по принципу «один тестируемый – один компьютер – одна камера».  <br>

                </span>
                <p>
                <button onclick="myFunction5()"  class="ReadMore"  style="margin-left: 8vw;margin-top:3vw" id="myBtn5">{{__('lang.readM')}}</button>
								</div>
							</div>
							<!-- 2 -->
							<div class="news-grid">
								<div class="news-grid-image"><img src="../news/2.jpg" alt="">
									<div class="news-grid-box">
										<h1>20</h1>
										<p>Apr</p>
									</div></div>
									<div class="news-grid-txt">
										<span>Education</span>
										<h2>Школьница заняла второе место </h2>
										<ul>
											<li><i class="fa fa-calendar" aria-hidden="true"></i> Apr 25, 2021</li>
											<li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
										</ul>
										<p> На Международной математической олимпиаде для девочек «EGMO-2021» ученица 11 класса специализированной школы №9 «Зерде» 
                    <span id="dots2"></span><span id="more2">
                            города Нур-Султана Дильназ Уалиева заняла второе призовое место.Отметим, что Дильназ Уалиева ранее показала высокие результаты в отборе на европейскую математическую олимпиаду для девушек (EGMO) и стала первой в личном рейтинге среди участниц. <br>
                            </span>
                            <p>
                            <button onclick="myFunction2()"  class="ReadMore"  style="margin-left: 8vw;margin-top:3vw" id="myBtn2">{{__('lang.readM')}}</button>
                      
                          </div>
								</div> 
                <div class="news-grid">
										<div class="news-grid-image"><img src="../news/3..jpg" alt="">
											<div class="news-grid-box">
												<h1>22</h1>
												<p>Apr</p>
											</div></div>
											<div class="news-grid-txt">
												<span>Education</span>
												<h2>ЕНТ в Казахстане стартует 15 апреля</h2>
												<ul>
													<li><i class="fa fa-calendar" aria-hidden="true"></i> Apr 25, 2021</li>
													<li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
												</ul>
                        <p class="card_text lang" key="post26">Тестирование пройдет по принципу «один тестируемый – один компьютер – одна камера». Электронный формат тестирования имеет ряд преимуществ:
                    <span id="dots1"></span><span id="more1">
                      - тестируемый может выбрать место, день и время тестирования;<br>
                      - возможность корректировки своего заявления на участие (изменение языка, предметов сдачи); <br>
                      - исправление ошибочных ответов (что в случае с закрашиванием бумажного листа невозможно); <br>
                      - доступность калькулятора и вспомогательных таблиц (Менделеева и растворимости солей);<br>
                      - выдача результатов сразу после завершения тестирования;<br>
                      - возможность подать на апелляцию сразу же после завершения тестирования.</a> <br>
                    </span>     </p>
                    <button onclick="myFunction1()"  class="ReadMore"  style="margin-left: 8vw;margin-top:3vw" id="myBtn1">{{__('lang.readM')}}</button>
             <hr>
											</div>
										</div>
								<!-- 3 -->
								<div class="news-grid">
									<div class="news-grid-image"><img src="../news/3.jpg" alt="">
										<div class="news-grid-box">
											<h1>21</h1>
											<p>Apr</p>
										</div></div>
										<div class="news-grid-txt">
											<span>Education</span>
											<h2>Xотят полностью обновить вопросы для ЕНТ</h2>
											<ul>
												<li><i class="fa fa-calendar" aria-hidden="true"></i> Apr 25, 2021</li>
												<li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
											</ul>
											<p>Обновление базы тестов - серьезная работа.Вопросы, которые войдут в обновленную тестовую базу ЕНТ, невозможно будет зазубрить и списать пояснил министр
                      <span id="dots6"></span><span id="more6">
                        Hам предстоит решить вопрос по полному обновлению базы тестов по примеру западных SAT и PISA, когда оценивается функциональная грамотность и умение применять знания на практике. И это должны быть вопросы совершенно другого характера, которые невозможно зазубрить, а соответственно и списать
                    </span>     </p>
                    <button onclick="myFunction6()"  class="ReadMore"  style="margin-left: 8vw;margin-top:3vw" id="myBtn6">{{__('lang.readM')}}</button>
             <hr>
										</div>
									</div>
                 
									<!-- 4 -->
									<div class="news-grid">
										<div class="news-grid-image"><img src="../news/4.jpg" alt="">
											<div class="news-grid-box">
												<h1>22</h1>
												<p>Apr</p>
											</div></div>
											<div class="news-grid-txt">
												<span>Education</span>
												<h2>ЕНТ полностью изменят систему наблюдения </h2>
												<ul>
													<li><i class="fa fa-calendar" aria-hidden="true"></i> Apr 25, 2021</li>
													<li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
												</ul>
												<p>Процедура поэтапно перейдет в электронный формат с обеспечением современной системой прокторинга  и видеонаблюдения", - написал Аймагамбетов.
                        <span id="dots3"></span><span id="more3">
                        Глава ведомства подчеркнул, что в век цифровизации недопустимо тратить 1,5 миллиарда тенге (3,5 миллиона долларов) на обеспечение участия в составах комиссий нескольких тысяч человек, тем более что, по мнению Минобразования, это не дает должного эффекта.
                    </span>     </p>
                    <button onclick="myFunction3()"  class="ReadMore"  style="margin-left: 8vw;margin-top:3vw" id="myBtn3">{{__('lang.readM')}}</button>
             <hr>
												
											</div>
										</div>
										<!-- 5 -->
                    <!-- 6 -->
                    <div class="news-grid">
                      <div class="news-grid-image"><img src="../news/1.jpg" alt="">
                        <div class="news-grid-box">
                          <h1>28</h1>
                          <p>Apr</p>
                        </div></div>
                        <div class="news-grid-txt">
                          <span>Education</span>
                          <h2>O коррупции в казахстанских вузах-Дидар Смагулов</h2>
                          <ul>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i> Apr 25, 2021</li>
                            <li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
                          </ul>
                          <p>Помню ректора одного из вузов, который требовал, вот прямо требовал вернуть на экзамен 18 студентов (список даже был), которых мы выгнали за смартфоны.
                          <span id="dots4"></span><span id="more4">
                          Смагулов сообщил, что через Национальный центр тестирования в течение года проходят более 500 тысяч тестируемых из разных отраслей, результаты которых влияют на поступление на бесплатную учебу, трудоустройство, повышение зарплаты и продвижение по службе.
                    </span>     </p>
                    <button onclick="myFunction4()"  class="ReadMore"  style="margin-left: 8vw;margin-top:3vw" id="myBtn4">{{__('lang.readM')}}</button>
             <hr>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  </section>
<section class="teams" id="teams">
    <div class="max-width">
        <h2 class="title">{{__('lang.readM')}}</h2>
        <div class="carousel owl-carousel">
            <div class="card">
                <div class="box">
                  <img src="../teachers/1.jpg" alt="" class="profile-img">
                  <h4>Абай Нусипбеков</h4>
                  <p class="job-title">PHD,Faculty of Engineering</p></br>
                    <hr>
                  <a href="#" class="btn">{{__('lang.contact')}}</a>
                  <ul class="social-media">
                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
                  </ul>
                </div>
            </div>
            <div class="card">
                <div class="box">
                  <img src="../teachers/3.jpg" alt="" class="profile-img">
                  <h4>Фарух Машуров</h4>
                  <p class="job-title">Senior Lecturer,Faculty of Engineering</p></br>
                    <hr>
                  <a href="#" class="btn">{{__('lang.contact')}}</a>
                  <ul class="social-media">
                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
                  </ul>
                </div>
            </div>
            <div class="card">
                <div class="box">
                  <img src="../teachers/4.jpg" alt="" class="profile-img">
                  <h4>Азамат Жаманов</h4>
                  <p class="job-title">PHD, Chairman of Science</p>
                  <hr>
                  <a href="#" class="btn">{{__('lang.contact')}}</a>
                  <ul class="social-media">
                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
      
                  </ul>
                </div>
            </div>
                 <div class="card">
              <div class="box">
                <img src="../teachers/5.jpg" alt="" class="profile-img">
                <h4>Джемиль Туран</h4>
                <p class="job-title">PHD,Faculty of Engineering</p></br>
                  <hr>
                <a href="#" class="btn">{{__('lang.contact')}}</a>
                <ul class="social-media">
                  <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
                </ul>
              </div>
          </div>
            <div class="card">
                <div class="box">
                  <img src="../teachers/2.jpg" alt="" class="profile-img">
                  <h4>Амина Гасанова</h4>
                  <p class="job-title">PHD, Faculty of Engineering</p>
                  <hr>
                  <a href="#" class="btn">{{__('lang.contact')}}</a>
                  <ul class="social-media">
                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
      
                  </ul>
                </div>
            </div>
       
        </div>
    </div>
</section>


<section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">{{__('lang.contact')}}</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">{{__('lang.getintouch1')}}</div>
                    <p>{{__('lang.getintouch')}}</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-phone"></i>
                            <div class="info">
                                <div class="head">{{__('lang.phonee')}}</div>
                                <div class="sub-title">
                                <a href="8-747-561-16-65"> 8-747-561-16-65</a>  
                               </div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">{{__('lang.address')}}</div>
                                <div class="sub-title">{{__('lang.street')}}</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">{{__('lang.mail')}}</div>
                                <div class="sub-title">educenter@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">{{__('lang.messageme')}}</div>
                    <form class="contact-form" action="{{ url('sendemail/send') }}" method="POST">
                    {{ csrf_field() }}
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="name" class="fullname" placeholder="Name">
                            </div>
                            <div class="field email">
                                <input type="text" name="email" class="email-input" placeholder="Email">
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" name="subject" class="subject" placeholder="Subject">
                        </div>
                        <div class="field textarea">
                            <input class="message" name="message" cols="30" rows="10" placeholder="Message.."></input>
                        </div>
                        <div class="button-area">
                            <button class="send-msg" type="submit" name="send">{{__('lang.sent')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
          <div class="main-content">
            <div class="left box">
              <h2 style="color: rgb(230, 230, 230);" >{{__('lang.aboutus')}}</h2>
              <div class="content">
                <p style="color: rgb(230, 230, 230);">{{__('lang.getintouch')}}</p>
                <div class="social">
                  <a href=""><span class="fab fa-facebook-f" style="  color: #3b5999;"></span></a>
                  <a href="#"><span class="fab fa-twitter" style=" color: #55acee;"></span></a>
                  <a href=""><span class="fab fa-instagram" style=" color: #e6683e;"></span></a>
                  <a href=""><span class="fab fa-youtube" style="  color: #dd4b39;"></span></a>
                </div>
              </div>
            </div>
    
            <div class="center box">
              <h2 style="color: rgb(230, 230, 230);text-align:center;">{{__('lang.links')}}</h2>
              <ul class="pages" style="text-align:center;color:grey; list-style-type:none;margin-top:1.5vw">
                        <li><a href="#home">{{__('lang.home')}}</a></li>
                        <li><a href="#unt">{{__('lang.unt')}}</a></li>
                        <li><a href="#services">{{__('lang.services')}}</a></li>
                        <li><a href="#news">{{__('lang.news')}}</a></li>
                        <li><a href="#team">{{__('lang.team')}}</a></li>
                        <li><a href="#contact">{{__('lang.contact')}}</a></li>
                    </ul>
            
            </div>
  
            <div class="right box">
              <h2 style="color: rgb(230, 230, 230);"> {{__('lang.contact')}}</h2>
              <div class="content">
              <form action="Home.php" method="post" enctype="multipart/form-data"> 
                  <div class="email">
                    <div class="text">Email *</div>
                    <input type="email"  id="email" placeholder="example@email.com" name="email" required>
                  </div>
                  <div class="msg">
                    <div class="text">{{__('lang.message')}}</div>
                <textarea name="bio" style="width: 30vw;" class="text-input " placeholder="Your message..." id="" ></textarea>
            <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" style="background-color:#ffffff;" class="form-control">
                   
                    <!-- <changeit rows="2" cols="25" required></changeit> -->
                  </div>
                  <div class="btn">
                    <button type="submit" name="save-user">{{__('lang.sent')}}</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="bottom">
            <center>
              <span class="credit">Created By <a href="Izzatullayev Alisher">Izzatullayev Alisher</a> | </span>
              <span class="far fa-copyright"></span><span> 2021 All rights reserved.</span>
            </center>
          </div>
        </footer>
       
           
  <script src="../script.js"></script>
 
</body>
</html>
