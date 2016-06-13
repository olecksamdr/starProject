<?php
session_start();
include ("bd.php");
if (!empty($_SESSION['login']) and !empty($_SESSION['id'])){
  $id = $_SESSION['id'];
  $q = mysql_query("SELECT * FROM users WHERE id='$id'",$db); 
  $user = mysql_fetch_array($q);
}
?>
<html >
<head>
<meta charset="UTF-8">
<title>FAQ для користувача</title>
<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../sys/css/normalize.css">
<link rel="stylesheet" href="../sys/css/style.css">
</head>
<body>
<?php
if (!empty($user['id']))
include("../sys/template/user_menu.php");
?>
<?php
include("../sys/template/left_menu.php");
?>
<?php
if (!empty($_SESSION['msg'])) {
    $msg = $_SESSION['msg']; ?>
    <div class="msg"><?php echo "$msg";?></div>
<?php
} ?>
    <div class="wrapper">
  <div class="tabs">
    <div class="tab">
      <input type="radio" name="css-tabs" id="tab-1" checked class="tab-switch">
      <label for="tab-1" class="tab-label">Правила користування</label>
      <div class="tab-content">
        <h3>
          ЗАГАЛЬНІ ПОЛОЖЕННЯ
        </h3>
          <ul>
            <li>
              Правила встановлюють порядок та умови користування сайтом.
            </li>
            <li>
              Правила користування є невід'ємною складовою частиною, що встановлюються та змінюються Адміністратором в односторонньому порядку, а також є обов'язковими для обєктивного оцінювання.
            </li>
          </ul>
          <h3>
            РЕЄСТРАЦІЯ ТА ПОЧАТОК КОРИСТУВАННЯ САЙТОМ
          </h3>
          <ul>
            <li>
             Користування сайтом дозволяється на підставі реєстрації. 
            </li>
            <li>
             Реєстрація набуває чинності після підтвердження поштової скриньки (Для соц-мереж не потрібно), або узгодження аккаунта з викладачем.
            </li>

            <h4>
              Для реєстрації Клієнт надає такі документи та відомості:
            </h4>
            <ul>
              <li>
                відомості про своє місце проживання (поштову адресу);
              </li>
              <li>
                відомості про своє місце навчання (факультет, группа);
              </li>
              <li>
                номер мобільного телефона;
              </li>
              <li>
               згоду на збір та обробку своїх персональних даних.
              </li>
            </ul>
          </ul>
          <h3>
            ПРАВА КОРИСТУВАЧА
          </h3>
          <ul>
          <h4>
              Користувач має право:
            </h4>
            <li>
              Після реєстрації користуватися сайтом відповідно до правил користування, а також вимагати від Адміністрації сайту виконання зафіксованих в Правилах користування зобов’язань.
            </li>
            <li>
              Проглядати, порівнювати, коментувати свої досягнення, та досягнення інших користувачів.
            </li>
            <li>
              Оскаржувати свій результат
            </li>
            <li>
              Не користуватись сайтом після реєстрації (В разі цього, протягом 6 місяців, адміністрація залишає за собою право на видалення акаунту).
            </li>
            <h4>
              Отримувати інформацію:
            </h4>
            <ul>
              <li>
                про свої досягнення;
              </li>
              <li>
               про свій рейтинг серед інших користувачів і порівнювати його; 
              </li>
            </ul>
          </ul>
          <h3>
               ОБОВ’ЯЗКИ КОРИСТУВАЧА
          </h3>
          <ul>
            <h4>
              Користувач зобов’язаний:
            </h4>
            <li>
             Виконувати ці Правила користування. 
            </li>
            <li>
              Своєчасно проходити завдання.
            </li>
           <h4>
                При можливості письмово інформувати Адміністратора про такі обставини:
              </h4> 
            <ul>
              <li>
               Виявленні незручності чи несправності сайта 
              </li>
              <li>
                Своєчасно та належним чином повідомляти Адміністратора, або викладача про зміну поштової адреси або будь-які інші зміни, пов’язані з реєстрацією.
              </li>
            </ul>
          </ul>
          <h3>
            ПРАВА АДМІНІСТРАТОРА
          </h3>
           <ul>
            <h4>
              Адміністратор має право:
            </h4>
            <li>
               Вимагати від Користувача виконання всіх зобов’язань, визначених у Правилах користування;
            </li>
            <li>
              Встановлювати та змінювати Правила користування;
            </li>
            <li>
              Скоротити перелік послуг або припинити їх надання;
            </li>
            <li>
              Видаляти, банити акаунт користувача, без пояснень причин.
            </li>
          </ul>
          <h3>
             ОБОВ’ЯЗКИ АДМІНІСТРАТОРА
          </h3>
          <ul>
            <h4>
              Адміністратор зобов’язаний:
            </h4>
            <li>
              Виконувати умови надання Послуги згідно з Правилами користуванняж
            </li>
            <li>
              Надавати Абоненту інформацію про його рейтинг;
            </li>
            <li>
               Інформувати Абонента про зміну, впровадження нових послуг та Правил користування у любий зрйчний спосіб передбачений законодавством та згодою користувача.
            </li>

          </ul>
      </div>
    </div>
    <div class="tab">
      <input type="radio" name="css-tabs" id="tab-2" class="tab-switch">
      <label for="tab-2" class="tab-label">Інструкція</label>
      <div class="tab-content">
      <h3>
        ВСТУП
      </h3>
      Завдяки мінімалізму і інтуітивному інтерфейсу, ми змогли добитись максимальної комфортності від користування сайтом. Сайт знаходиться в публічному BETA тесті. Рекомендуємо використовувати для перегляду браузер Google Chrome та Mozilla Firefox останьої версії.
      <h3>
        ХІД РОБОТИ
      </h3>
      <ul>
        <li>
          Вимкнути стороні звуки, які вам можуть заважати під час проведення лабораторної роботи, не відволікатись.
        </li>
        <li>
          Виконувати роботу рекомендується в спокійному стані.
        </li>
        <li>
          Відкрити сайт в повноекраному режимі, щоб звести до мінімому інформаційний шум.
        </li>
        <li>
          Виставити настройки зірки, відповідно як вам скаже викладач.
        </li>
        <li>
          Натиснути START і сдідувати інструкціям.
        </li>
        <li>
          Експеремент забороняється переривати.
        </li>
        <li>
          По закінченню записати результат в практикум.
        </li>
      </ul>
       </div>
    </div>
    <div class="tab">
      <input type="radio" name="css-tabs" id="tab-3" class="tab-switch">
      <label for="tab-3" class="tab-label">Контакти</label>
      <div class="tab-content">Сторінка знаходиться на стадії допрацювання</div>
    </div>
  </div>
</div>
    
    
    
    
    
  </body>
</html>