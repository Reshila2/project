<?php
 $msg="";
$msg_class ="";

$conn =mysqli_connect('localhost','root','','lab8');
if(isset($_POST['save-user'])){

  // echo "<pre>",print_r($_FILES['profileImage']['name']),"</pre>";
  $email=$_POST['email'];
  $bio = stripslashes($_POST['bio']);
  
  $profileImageName=time().'_'.$_FILES['profileImage']['name'];
  $target= 'images/'.$profileImageName;

  if(move_uploaded_file($_FILES['profileImage']['tmp_name'],$target)){
    $sql="INSERT INTO users (profile_image,email,bio) values('$profileImageName','$email','$bio')";
    if(mysqli_query($conn,$sql)){
      $msg="uploaded";
      $css_class="alert-success";
    }
    else{
    $msg="failed";
    $css_class="aler-dangerous";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EduCenter</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
</head>
<body>
  <div class="scroll-up-btn">
    <i class="fas fa-angle-up"></i>
</div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">140<span>Edu</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#unt" class="menu-btn">UNT</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#news" class="menu-btn">News</a></li>
                <li><a href="#teams" class="menu-btn">Teams</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
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
                <div class="text-1">Выиграй грант вместе с нами</div>
                <div class="text-2">Образование и не только</div>
                <a href="#">Подробнее</a>
            </div>
        </div>  
    </section>
    <section class="unt" id="unt">
      <div class="w3-row">

        <div class="w3-col w3-container m6 l5">
           <h2 class="text1 lang"  key="text11" style="text-align: center;">Высшое образование</h2>
                <p class="text2 lang" key="unt" style="text-align: center;"><i>E H T</i></p>
                <p class="text3 lang"  key="text22">Единое национальное тестирование (каз. Ұлттық бірыңғай тестілеу; сокр. ЕНТ каз. ҰБТ) — система оценки знаний выпускников, применяемая в Республике Казахстан. Результаты ЕНТ признаются вузами в качестве результатов вступительных экзаменов. Баллы ЕНТ также имеют значение при присуждении Президентской стипендии «Болашак».Граждане Казахстана имеют право на присуждение на конкурсной основе международной стипендии «Болашак» для обучения за рубежом[14]. По окончании ВУЗа выпускник получает степень бакалавра (4 года), специалиста (5 лет) или магистра (6 лет). Второе высшее образование[15] в Казахстане получают только на платной основе с ускоренным сроком обучения (2-3 года).
                </p>
        </div>
        
        <div class="w3-col w3-container m5 l6 w1-white">  
         <iframe class="evideo"  style="margin-left:10px;height:40vw;width:55vw"   src="https://www.youtube.com/embed/tgbNymZ7vqY?controls=0" > </iframe>
        </div>
      </div>
  </section>
     <!-- services section start -->
     <section class="services" id="services"> <a href="" class="what we provide"></a>
      <div class="max-width">
          <h2 class="title">Our Services</h2>
          <div class="serv-content">
              <div class="card">
                  <div class="box">
                      <i class="fas fa-paint-brush"></i>
                      <div class="text">Web Design</div>
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                  </div>
              </div>
              <div class="card">
                  <div class="box">
                      <i class="fas fa-chart-line"></i>
                      <div class="text">Advertising</div>
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                  </div>
              </div>
              <div class="card">
                  <div class="box">
                      <i class="fas fa-code"></i>
                      <div class="text">Apps Design</div>
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                  </div>
              </div>
             </div>
          </div>
      </div>
  </section>
  <section class="news">
  <div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div id="news-slider" class="owl-carousel">
						<!-- 1 -->
						<div class="news-grid">
							<div class="news-grid-image"><img src="images/1.jpg" alt="">
								<div class="news-grid-box">
									<h1>19</h1>
									<p>Sep</p>
								</div></div>
								<div class="news-grid-txt">
									<span>Finacne</span>
									<h2>Heading Will Be Here</h2>
									<ul>
										<li><i class="fa fa-calendar" aria-hidden="true"></i> Sep 19, 2020</li>
										<li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
									</ul>
									<p>Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur aspernatur reprehenderit velit est voluptatum, voluptas amet quasi dicta consectetur.</p>
									<a href="#">Read More...</a>
								</div>
							</div>
							<!-- 2 -->
							<div class="news-grid">
								<div class="news-grid-image"><img src="images/2.jpg" alt="">
									<div class="news-grid-box">
										<h1>20</h1>
										<p>Sep</p>
									</div></div>
									<div class="news-grid-txt">
										<span>Finacne</span>
										<h2>Heading Will Be Here</h2>
										<ul>
											<li><i class="fa fa-calendar" aria-hidden="true"></i> Sep 19, 2020</li>
											<li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
										</ul>
										<p>Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur aspernatur reprehenderit velit est voluptatum, voluptas amet quasi dicta consectetur.</p>
										<a href="#">Read More...</a>
									</div>
								</div>
								<!-- 3 -->
								<div class="news-grid">
									<div class="news-grid-image"><img src="images/3.jpg" alt="">
										<div class="news-grid-box">
											<h1>21</h1>
											<p>Sep</p>
										</div></div>
										<div class="news-grid-txt">
											<span>Finacne</span>
											<h2>Heading Will Be Here</h2>
											<ul>
												<li><i class="fa fa-calendar" aria-hidden="true"></i> Sep 19, 2020</li>
												<li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
											</ul>
											<p>Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur aspernatur reprehenderit velit est voluptatum, voluptas amet quasi dicta consectetur.</p>
											<a href="#">Read More...</a>
										</div>
									</div>
									<!-- 4 -->
									<div class="news-grid">
										<div class="news-grid-image"><img src="images/4.jpg" alt="">
											<div class="news-grid-box">
												<h1>22</h1>
												<p>Sep</p>
											</div></div>
											<div class="news-grid-txt">
												<span>Finacne</span>
												<h2>Heading Will Be Here</h2>
												<ul>
													<li><i class="fa fa-calendar" aria-hidden="true"></i> Sep 19, 2020</li>
													<li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
												</ul>
												<p>Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur aspernatur reprehenderit velit est voluptatum, voluptas amet quasi dicta consectetur.</p>
												<a href="#">Read More...</a>
											</div>
										</div>
										<!-- 5 -->
                    <!-- 6 -->
                    <div class="news-grid">
                      <div class="news-grid-image"><img src="images/10.jpg" alt="">
                        <div class="news-grid-box">
                          <h1>28</h1>
                          <p>Sep</p>
                        </div></div>
                        <div class="news-grid-txt">
                          <span>Finacne</span>
                          <h2>Heading Will Be Here</h2>
                          <ul>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i> Sep 19, 2020</li>
                            <li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
                          </ul>
                          <p>Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur aspernatur reprehenderit velit est voluptatum, voluptas amet quasi dicta consectetur.</p>
                          <a href="#">Read More...</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  </section>
  <section class="teams" id="teams">
    <div class="max-width">
        <h2 class="title">Team</h2>
        <div class="carousel owl-carousel">
            <div class="card">
                <div class="box">
                  <img src="teachers/1.jpg" alt="" class="profile-img">
                  <h4>Абай Нусипбеков</h4>
                  <p class="job-title">PHD,Faculty of Engineering</p></br>
                    <hr>
                  <a href="#" class="btn">Contact</a>
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
                  <img src="teachers/3.jpg" alt="" class="profile-img">
                  <h4>Фарух Машуров</h4>
                  <p class="job-title">Senior Lecturer,Faculty of Engineering</p></br>
                    <hr>
                  <a href="#" class="btn">Contact</a>
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
                  <img src="teachers/4.jpg" alt="" class="profile-img">
                  <h4>Азамат Жаманов</h4>
                  <p class="job-title">PHD, Chairman of Science</p>
                  <hr>
                  <a href="#" class="btn">Contact</a>
                  <ul class="social-media">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
      
                  </ul>
                </div>
            </div>
                 <div class="card">
              <div class="box">
                <img src="teachers/5.jpg" alt="" class="profile-img">
                <h4>Джемиль Туран</h4>
                <p class="job-title">PHD,Faculty of Engineering</p></br>
                  <hr>
                <a href="#" class="btn">Contact</a>
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
                  <img src="teachers/2.jpg" alt="" class="profile-img">
                  <h4>Амина Гасанова</h4>
                  <p class="job-title">PHD, Faculty of Engineering</p>
                  <hr>
                  <a href="#" class="btn">Contact</a>
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
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum corporis fuga corrupti. Doloribus quis soluta nesciunt veritatis vitae nobis?</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Prakash Shahi</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Surkhet, Nepal</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">abc@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
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
                            <button class="send-msg" type="submit" name="send">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
          <div class="main-content">
            <div class="left box">
              <h2 style="color: rgb(230, 230, 230);" >About us</h2>
              <div class="content">
                <p style="color: rgb(230, 230, 230);">CodinNepal is a YouTube channel where you can learn web designing, web development, ui/ux designing, html css tutorial, hover animation and effects, javascript and jquery tutorial and related so on.</p>
                <div class="social">
                  <a href=""><span class="fab fa-facebook-f" style="  color: #3b5999;"></span></a>
                  <a href="#"><span class="fab fa-twitter" style=" color: #55acee;"></span></a>
                  <a href=""><span class="fab fa-instagram" style=" color: #e6683e;"></span></a>
                  <a href=""><span class="fab fa-youtube" style="  color: #dd4b39;"></span></a>
                </div>
              </div>
            </div>
    
            <div class="center box">
              <h2 style="color: rgb(230, 230, 230);text-align:center;">Links</h2>
              <ul class="pages" style="text-align:center;color:grey; list-style-type:none;margin-top:1.5vw">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">UNT</a></li>
                        <li><a href="#">Advantages</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">UNT</a></li>
                        <li><a href="#">Advantages</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
            
            </div>
  
            <div class="right box">
              <h2 style="color: rgb(230, 230, 230);"> Contact us</h2>
              <div class="content">
              <form action="Home.php" method="post" enctype="multipart/form-data"> 
                  <div class="email">
                    <div class="text">Email *</div>
                    <input type="email"  id="email" placeholder="example@email.com" name="email" required>
                  </div>
                  <div class="msg">
                    <div class="text">Message *</div>
                <textarea name="bio" style="width: 30vw;" class="text-input " placeholder="Your message..." id="" ></textarea>
            <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" style="background-color:#ffffff;" class="form-control">
                   
                    <!-- <changeit rows="2" cols="25" required></changeit> -->
                  </div>
                  <div class="btn">
                    <button type="submit" name="save-user">Send</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="bottom">
            <center>
              <span class="credit">Created By <a href="https://www.codingnepalweb.com">CodingNepal</a> | </span>
              <span class="far fa-copyright"></span><span> 2020 All rights reserved.</span>
            </center>
          </div>
        </footer>
       
           
  <script src="script.js"></script>
 
</body>
</html>
