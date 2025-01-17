<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'Запись на посещение произошла успешно!';
   }else{
      $message[] = 'Не удалось записаться!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>DentalAcademy</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo">dental<span>Academy.</span></a>

         <nav class="nav">
            <a href="#home">Главная</a>
            <a href="#about">О нас</a>
            <a href="#services">Услуги</a>
            <a href="#reviews">Отзывы</a>
            <a href="#contact">Контакты</a>
         </nav>

         <a href="#contact" class="link-btn">Записаться на прием</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>


<!-- home -->

<section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>Улыбка, которая запоминается!</h3>
            <p>Мы верим, что каждая улыбка уникальна и заслуживает особого внимания. Наша команда профессионалов готова предложить вам индивидуальный подход и качественные услуги, чтобы ваша улыбка сияла так, как никогда раньше.</p>
            <a href="#contact" class="link-btn">Записаться на прием</a>
         </div>
      </div>

   </div>

</section>

<!-- about -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="images/dent.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <span>О нас</span>
            <h3>Искренняя забота о здоровье вашей семьи</h3>
            <p> Мы — команда преданных профессионалов с более чем 15-летним опытом в стоматологии, готовая предложить вам качественное и заботливое обслуживание. Наша основная цель — обеспечить здоровье и красоту вашей улыбки, ведь мы понимаем, насколько важен этот аспект в жизни каждого человека.</p>
            <a href="#contact" class="link-btn">Записаться на прием</a>
         </div>

      </div>

   </div>

</section>

<!-- services -->

<section class="services" id="services">

   <h1 class="heading">Услуги</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/terapia.png" alt="">
         <h3>Терапия</h3>
         <p>Основа стоматологической помощи, направленная на диагностику, лечение и профилактику заболеваний зубов и десен</p>
      </div>

      <div class="box">
         <img src="images/protezir.png" alt="">
         <h3>Протезирование зубов</h3>
         <p>Способ восстановления утраченных зубов с помощью протезов, который может улучшить как функциональность, так и эстетику вашей улыбки.</p>
      </div>

      <div class="box">
         <img src="images/delite.png" alt="">
         <h3>Удаление</h3>
         <p>Безопасное и безболезненное удаление зубов с использованием передовых анестетиков и технологий</p>
      </div>

      <div class="box">
         <img src="images/otbel.png" alt="">
         <h3>Отбеливание зубов</h3>
         <p>Популярная процедура, которая позволяет восстановить яркость и белизну вашей улыбки.</p>
      </div>

      <div class="box">
         <img src="images/vinir.png" alt="">
         <h3>Виниры и люминиры</h3>
         <p>Процедуры позволяют добиться естественной и эстетически привлекательной улыбки</p>
      </div>

      <div class="box">
         <img src="images/profgig.png" alt="">
         <h3>Профессиональная гигиена</h3>
         <p>Важный этап в профилактике стоматологических заболеваний.</p>
      </div>

   </div>

</section>

<!-- process -->

<section class="process">

   <h1 class="heading">Наши процедуры</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/Oralcare1.png" alt="">
         <h3>Консультации специалистов</h3>
         <p>Консультации по всем аспектам стоматологического здоровья</p>
         
      </div>

      <div class="box">
         <img src="images/Pediatr.png" alt="">
         <h3>Стоматологические услуги для детей</h3>
         <p>Дружелюбную и безопасную атмосферу для ребенка</p>
      </div>

      <div class="box">
         <img src="images/Oralcare2.png" alt="">
         <h3>Хирургическая стоматология</h3>
         <p>Лечение сложных заболеваний полости рта и восстановление зубочелюстной функции</p>
      </div>

   </div>

</section>

<!-- reviews  -->

<section class="reviews" id="reviews">

   <h1 class="heading"> Отзывы клиентов </h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/pict1.jpg" alt="">
         <p>Понравилось обслуживание и современные технологии. Чистка зубов была безболезненной. Вернусь снова!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Данила Иванов</h3>
         <span>Довольный клиент</span>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Лучшие впечатления! Доктор объяснил всё доступно и сделали все быстро. Теперь мои зубы в идеальном состоянии!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Дарья Астахова</h3>
         <span>Довольный клиент</span>
      </div>

      <div class="box">
         <img src="images/pic5.jpg" alt="">
         <p>Отличная клиника! Вежливый персонал и внимательный врач. Лечение прошло быстро и безболезненно. Рекомендую!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Иван Андеев</h3>
         <span>Довольный клиент</span>
      </div>

   </div>

</section>

<!-- contact -->

<section class="contact" id="contact">

   <h1 class="heading">Записаться на прием</h1>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      <span>Ваше имя :</span>
      <input type="text" name="name" placeholder="Введите Ваше имя и фамилию" class="box" required>
      <span>Ваша почта :</span>
      <input type="email" name="email" placeholder="Введите Вашу почту" class="box" required>
      <span>Телефон :</span>
      <input type="number" name="number" placeholder="Введите Ваш номер" class="box" required>
      <span>Дата записи :</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="Отправить" name="submit" class="link-btn">
   </form>

   

</section>

<!-- footer -->

<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>Контактные телефоны</h3>
         <p>8 495 555 55 55</p>
         <p>8 495 383 44 55</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>Мы находимся</h3>
         <p>г. Москва, ул. Маяковского, д. 1</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>Часы работы</h3>
         <p>09:00 - 21:00 / Ежедневно</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>Почтовый адрес</h3>
         <p>dentalAcademy@gmail.com</p>
         <p>mysmile@gmail.com</p>
      </div>

   </div>

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>mr. web designer</span>  </div>


   
</section>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>