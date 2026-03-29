<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuaEnt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/static/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;800&amp;display=swap" rel="stylesheet">
</head>
<body>
<!-- Фон -->
<div class="image-background"></div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg" style="background-color: rgba(255, 255, 255, 0.5);">
  <div class="container-fluid">
  <a  class="navbar-brand" href="index.php"><img src="mat/3.png">
  </a>

    <!-- Кнопка в правом верхнем углу (Pro Button) -->
    <a href="pro.php" class="pro-button">
      <img src="mat/6.png" alt="Pro Button" />
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <button type="button" class="nav-link active">Дом</button>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Связь</font></font></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><font style="vertical-align: inherit; color:white;"><font style="vertical-align: inherit;">
                Падать
              </font></font></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Действие</font></font></a></li>
                <li><a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Другое действие</font></font></a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Здесь есть еще кое-что</font></font></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Подключение Bootstrap для корректной работы меню -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<button id="toggle-music"></button>

<style>
    .navbar-nav{
        color:red;
    }
    /* Лого */
    .navbar-brand img{
        position: absolute;
        width:50px;
        height:50px;
        top:10px;
    }
  /* Эффект при наведении */
  #toggle-music:hover {
    transform: scale(1.1); /* Увеличиваем кнопку при наведении */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Добавляем тень */
  }

  /* Эффект при нажатии */
  #toggle-music:active {
    transform: scale(0.95); /* Немного уменьшить кнопку при нажатии */
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.7); /* Увеличиваем тень при нажатии */
  }

  /* Стиль для фонового изображения */
  .image-background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('mat/2.jpg'); /* Фоновое изображение */
    background-size: cover; /* Покрытие всего экрана */
    background-position: center; /* Центрируем изображение */
    z-index: -1000; /* Фон на заднем плане */
  }

  /* Профиль кнопка */
  .pro-button {
    position: absolute;
    top: 5px;
    right: 30px; /* Отступ от правого края */
    display: block;
    width: 50px;
    height: 50px;
    cursor: pointer;
    background-color: transparent; /* Убирает фон */
    opacity: 1; /* Полная непрозрачность */
    z-index: 1000; /* Поверх других элементов */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Плавные эффекты */
  }

  .pro-button img {
    width: 100%; /* Изображение занимает весь блок */
    height: 100%;
    display: block;
    object-fit: cover; /* Сохраняет пропорции изображения */
  }

  /* Эффект при наведении */
  .pro-button:hover {
    transform: scale(1.1); /* Увеличиваем кнопку при наведении */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Добавляем тень */
  }

  /* Кнопки */
  .navbar-nav .nav-link {
    position: relative;
    transition: all 0.3s ease; /* Плавные переходы */
    background-image: url('mat/1.png'); /* Фоновое изображение */
    background-size: contain; /* Изображение будет содержаться в кнопке */
    background-repeat: no-repeat; /* Изображение не будет повторяться */
    background-position: center; /* Позиционируем изображение по центру */
    padding: 15px 40px; /* Отступы внутри кнопок */
    font-size: 16px; /* Размер шрифта кнопки */
    font-weight: bold; /* Сделать текст жирным */
    margin-right: 45px; /* Отступ между кнопками */
    transform: scale(1.3); /* Увеличиваем размер кнопок */
    width: 140px; /* Ширина кнопок */
    text-align: center; /* Центрируем текст внутри кнопки */
  }

  /* Эффект при наведении на кнопки */
  .navbar-nav .nav-link:hover {
    transform: scale(1.4); /* Увеличение кнопки при наведении */
    color: #ff6347; /* Изменение цвета текста при наведении */
  }
  /* Мобильная версия */
  @media (max-width: 991px) {

  }
</style>

<script>
  // Проверка ширины экрана
  function toggleNavbar() {
    const width = window.innerWidth;
    if (width <= 991) {
      const navbar = document.querySelector('.navbar-collapse');
      navbar.classList.toggle('show');
    }
  }

  // Автоматическая обработка на мобильных устройствах
  window.addEventListener('resize', toggleNavbar);
  toggleNavbar(); // Инициализация
</script>
<script src="index.js"></script>
</body>
</html>
