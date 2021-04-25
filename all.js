// $(document).ready(function(){
//   $(window).scroll(function(){
//       // sticky navbar on scroll script
//       if(this.scrollY > 20){
//           $('.navbar').addClass("sticky");
//       }else{
//           $('.navbar').removeClass("sticky");
//       }
      
//       // scroll-up button show/hide script
//       if(this.scrollY > 500){
//           $('.scroll-up-btn').addClass("show");
//       }else{
//           $('.scroll-up-btn').removeClass("show");
//       }
//   });

//   // slide-up script
//   $('.scroll-up-btn').click(function(){
//       $('html').animate({scrollTop: 0});
//       // removing smooth scroll on slide-up button click
//       $('html').css("scrollBehavior", "auto");
//   });

//   $('.navbar .menu li a').click(function(){
//       // applying again smooth scroll on menu items click
//       $('html').css("scrollBehavior", "smooth");
//   });

//   // toggle menu/navbar script
//   $('.menu-btn').click(function(){
//       $('.navbar .menu').toggleClass("active");
//       $('.menu-btn i').toggleClass("active");
//   });

//   // typing text animation script
//   var typed = new Typed(".typing", {
//       strings: ["YouTuber", "Developer", "Blogger", "Designer", "Freelancer"],
//       typeSpeed: 100,
//       backSpeed: 60,
//       loop: true
//   });

//   var typed = new Typed(".typing-2", {
//       strings: ["YouTuber", "Developer", "Blogger", "Designer", "Freelancer"],
//       typeSpeed: 100,
//       backSpeed: 60,
//       loop: true
//   });

//   // owl carousel script
//   $('.carousel').owlCarousel({
//       margin: 20,
//       loop: true,
//       autoplayTimeOut: 2000,
//       autoplayHoverPause: true,
//       responsive: {
//           0:{
//               items: 1,
//               nav: false
//           },
//           600:{
//               items: 2,
//               nav: false
//           },
//           1000:{
//               items: 3,
//               nav: false
//           }
//       }
//   });
// });
// function triggerClick(){
// document.querySelector('#profileImage').click(); 
// }
// function displayImage(e){
// if(e.files[0]){
// var reader=new FileReader();

// reader.onload=function(e){
// document.querySelector('#profileDisplay').setAttribute('src',e.target.result); 
// } 
// reader.readAsDataURL(e.files[0]);
// }
// }
// function openForm() {
// document.getElementById("myForm").style.display = "block";
// }

// function closeForm() {
// document.getElementById("myForm").style.display = "none";
// }

// $('#recipeCarousel').carousel({
//   interval: 1000
// })

// $('.carousel .carousel-item').each(function(){
//     var minPerSlide = 3;
//     var next = $(this).next();
//     if (!next.length) {
//     next = $(this).siblings(':next');
//     }
//     next.children(':first-child').clone().appendTo($(this));
    
//     for (var i=0;i<minPerSlide;i++) {
//         next=next.next();
//         if (!next.length) {
//             next = $(this).siblings(':first');
//           }
        
//         next.children(':first-child').clone().appendTo($(this));
//       }
// });
// function myFunction1() {
//   var dots = document.getElementById("dots1");
//   var moreText = document.getElementById("more1");
//   var btnText = document.getElementById("myBtn1");

//   if (dots.style.display === "none") {
//   dots.style.display = "inline";
//   btnText.innerHTML = "Read more"; 
//   moreText.style.display = "none";
//   } else {
// dots.style.display = "none";
// btnText.innerHTML = "Read less"; 
// moreText.style.display = "inline";
// }
// }
// function myFunction2() {
// var dots = document.getElementById("dots2");
// var moreText = document.getElementById("more2");
// var btnText = document.getElementById("myBtn2");

// if (dots.style.display === "none") {
// dots.style.display = "inline";
// btnText.innerHTML = "Read more"; 
// moreText.style.display = "none";
// } else {
// dots.style.display = "none";
// btnText.innerHTML = "Read less"; 
// moreText.style.display = "inline";
// }
// }
// $(document).ready(function () {
// $("#myBtn").click(function () {
//   $(this).prev().slideToggle();
//   if ($(this).text() == "Read more") {
//       $(this).text("Read Less");
//   } else {
//       $(this).text("Read More");
//   }
// });
// });
// function myFunction3() {
//   var dots = document.getElementById("dots3");
//   var moreText = document.getElementById("more3");
//   var btnText = document.getElementById("myBtn3");
  
//   if (dots.style.display === "none") {
//   dots.style.display = "inline";
//   btnText.innerHTML = "Read more"; 
//   moreText.style.display = "none";
//   } else {
//   dots.style.display = "none";
//   btnText.innerHTML = "Read less"; 
//   moreText.style.display = "inline";
//   }
//   }
//   $(document).ready(function () {
//   $("#myBtn").click(function () {
//     $(this).prev().slideToggle();
//     if ($(this).text() == "Read more") {
//         $(this).text("Read Less");
//     } else {
//         $(this).text("Read More");
//     }
//   });
//   });
//   function myFunction4() {
//       var dots = document.getElementById("dots4");
//       var moreText = document.getElementById("more4");
//       var btnText = document.getElementById("myBtn4");
      
//       if (dots.style.display === "none") {
//       dots.style.display = "inline";
//       btnText.innerHTML = "Read more"; 
//       moreText.style.display = "none";
//       } else {
//       dots.style.display = "none";
//       btnText.innerHTML = "Read less"; 
//       moreText.style.display = "inline";
//       }
//       }
//       $(document).ready(function () {
//       $("#myBtn").click(function () {
//         $(this).prev().slideToggle();
//         if ($(this).text() == "Read more") {
//             $(this).text("Read Less");
//         } else {
//             $(this).text("Read More");
//         }
//       });
//       });
//      function myFunction5() {
//           var dots = document.getElementById("dots5");
//           var moreText = document.getElementById("more5");
//           var btnText = document.getElementById("myBtn5");
          
//           if (dots.style.display === "none") {
//           dots.style.display = "inline";
//           btnText.innerHTML = "Read more"; 
//           moreText.style.display = "none";
//           } else {
//           dots.style.display = "none";
//           btnText.innerHTML = "Read less"; 
//           moreText.style.display = "inline";
//           }
//           }
//           $(document).ready(function () {
//           $("#myBtn").click(function () {
//               $(this).prev().slideToggle();
//               if ($(this).text() == "Read more") {
//                   $(this).text("Read Less");
//               } else {
//                   $(this).text("Read More");
//               }
//           });
//           });
          
//           function myFunction6() {
//           var dots = document.getElementById("dots6");
//           var moreText = document.getElementById("more6");
//           var btnText = document.getElementById("myBtn6");
          
//           if (dots.style.display === "none") {
//           dots.style.display = "inline";
//           btnText.innerHTML = "Read more"; 
//           moreText.style.display = "none";
//           } else {
//           dots.style.display = "none";
//           btnText.innerHTML = "Read less"; 
//           moreText.style.display = "inline";
//           }
//           }
//           $(document).ready(function () {
//           $("#myBtn").click(function () {
//               $(this).prev().slideToggle();
//               if ($(this).text() == "Read more") {
//                   $(this).text("Read Less");
//               } else {
//                   $(this).text("Read More");
//               }
//           });
//           });
          
// function like_update(id){
//   jQuery.ajax({
//     url:'update_count.php',
//     type:'post',
//     data:'type=like&id='+id,
//     success:function(result){
//       var cur_count=jQuery('#like_loop_'+id).html();
//       cur_count++;
//       jQuery('#like_loop_'+id).html(cur_count);
  
//     }
//   });
// }	

// function dislike_update(id){
//   jQuery.ajax({
//     url:'update_count.php',
//     type:'post',
//     data:'type=dislike&id='+id,
//     success:function(result){
//       var cur_count=jQuery('#dislike_loop_'+id).html();
//       cur_count++;
//       jQuery('#dislike_loop_'+id).html(cur_count);
  
//     }
//   });
// }	
// //localization

// var arrLang = {
// 'en': {
// 'mainP':'Home',
//   'unt':'UNT',
//   'posSide':'Advantages',
//   'about_us':'About us',
//   'contacts':'Contacts',
//   'text1':'Win a grant to the dream university!',
//   'text2':'More than education',
//   'forma1':'We will answer all questions',
//   'forma2':' Name',
//   'forma3':'Email',
//   'forma4':'Submit',
//   'forma22':'Your name',
//   'forma33':'example@example.com',
//   'more':'More about',
//   'text11':'Higher education',
//   'text22':'Unified national testing is a system for assessing the knowledge of graduates used in the Republic of Kazakhstan. UNT results are recognized by universities as results of entrance exams. UNT points are also important when awarding the Bolashak Presidential Scholarship. Citizens of Kazakhstan have the right to be awarded on a competitive basis the Bolashak International Scholarship for studying abroad [14]. Upon graduation from the university, the graduate receives a bachelor s degree (4 years), a specialist (5 years) or a master s degree (6 years). The second higher education [15] in Kazakhstan is received only on a paid basis with an accelerated period of study (2-3 years).',
//   'last_news':'Last News',
//   'post1':'For the first time in history, the Unified National Testing (UNT) will be conducted in electronic format from March 10 to April 10, 2021.',
//   'post26':'Testing will be held on the principle "one tested - one computer - one camera". The electronic testing format has several advantages:',
//   'more_card1':' the test taker can choose the place, day and time of testing the possibility of adjusting his application for participation (changing the language, change items) .Correction of erroneous answers (which is impossible in the case of painting a sheet of paper) .The availability of the calculator and auxiliary tables (Mendeleev `s and the solubility of salts).The issuance of results immediately after the completion of testing.The ability to appeal immediately after the completion of testing.',
//   'read':'Read more',
//   'like':'Like',
//   'dislike':'Dislike',
  
// },
// 'ru': {
// 'mainP':'Главная',
//   'unt':'ЕНТ',
//   'posSide':'НАШИ ФИШКИ',
//   'about_us':'О НАС',
//   'contacts':'КОНТАКТЫ',
//   'text1':'Выиграй грант в университет мечты!',
//   'text2':'Образование и не только.',
//   'more':'Подробнее',
//   'forma1':'Ответим на все вопросы',
//   'forma2':' Имя',
//   'forma3':'Электронная почта',
//   'forma4':'Отправить',
//   'forma22':'Ваше имя',
//   'forma33':'example@example.com',
//   'text11':'Высшое образование',
//   'text22':' Единое национальное тестирование— система оценки знаний выпускников, применяемая в Республике Казахстан. Результаты ЕНТ признаются вузами в качестве результатов вступительных экзаменов. Баллы ЕНТ также имеют значение при присуждении Президентской стипендии «Болашак».Граждане Казахстана имеют право на присуждение на конкурсной основе международной стипендии «Болашак» для обучения за рубежом[14]. По окончании ВУЗа выпускник получает степень бакалавра (4 года), специалиста (5 лет) или магистра (6 лет). Второе высшее образование[15] в Казахстане получают только на платной основе с ускоренным сроком обучения (2-3 года).',
//   'last_news':'Последние новости',
//   'post1':'Единое Национальное Тестирование (ЕНТ) Впервые В Истории Будет Проводиться В Электронном Формате С 10 Марта По 10 Апреля 2021 Года.',
//   'post26':'Тестирование Пройдет По Принципу «Один Тестируемый – Один Компьютер – Одна Камера». Электронный Формат Тестирования Имеет Ряд Преимуществ:',
//   'read':'Читать',
//   'more_card1':'- тестируемый может выбрать место, день и время тестирования  .Bозможность корректировки своего заявления на участие (изменение языка, предметов сдачи).Исправление ошибочных ответов (что в случае с закрашиванием бумажного листа невозможно).Доступность калькулятора и вспомогательных таблиц (Менделеева и растворимости солей).Выдача результатов сразу после завершения тестирования.Возможность подать на апелляцию сразу же после завершения тестирования.',
//   'like':'Нравиться',
//   'dislike':'Не нравиться',
// }
// }


// $(function() {
// $('.translate').click(function() {
// var lang = $(this).attr('id');

// $('.lang').each(function(index, item) {
//   $(this).text(arrLang[lang][$(this).attr('key')]);
// });
// });
// });