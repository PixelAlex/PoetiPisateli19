<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/style.css" rel="stylesheet">
    <script src="scripts/script.js"></script>
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <title>Поэты и Писатели 19 Века</title>
<script>
  window.onload = function () {
    document.body.classList.add('loaded_hiding');
    window.setTimeout(function () {
      document.body.classList.add('loaded');
      document.body.classList.remove('loaded_hiding');
    }, 500);
  }
  </script>
</head>
<body>
<div class="preloader">
  <div class="preloader__row">
    <div class="preloader__item"></div>
    <div class="preloader__item"></div>
  </div>
</div>
    <!-- Создание Header'а -->
    <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body shadow-sm sticky-top">
        <a class="h4 my-0 me-md-auto fw-normal text-center OpenSansBold" href="/">  Поэты и Писатели XIX Века</a>
        <nav class="my-2 my-md-0 me-md-3 navbar-fixed-top ">
          <a class="p-2 text-dark " href="/biography.html">Биографии</a>
          <a class="p-2 text-dark" href="/hrontabl.html">Хронологические таблицы</a>
        </nav>
        <a class="btn btn-primary" href="callback.html">Обратная связь</a>
      </header>
    

      <!-- Начальная секция-лендинг -->
      <section class="intro-section container text-center py-5 ">
          <h1 class="display-4 jumbotron-heading OpenSansLight">Поэты и Писатели XIX Века</h1><br>
          <p class="lead text-muted">На данном сайте, Вы сможете найти краткие 
              биографии и хронологические таблицы <br>писателей и поэтов 19 века, 
              которые жили на нашей планете. </p>
        <p><a class="btn btn-primary js-scroll-trigger btn-lg mt-4" href="#biography">Начать читать</a></p>
      </section>
      
      <!-- Основная секция с биографиями -->
      <section class="biography-section container">
      <h2 class="OpenSansLight">Биографии</h1>
        
        <p><a name="biography" class="js-scroll-trigger"></a></p>

        <div class="album py-5">
          <div class="container">
            <div class="row ">
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                 <img class="img-thumbnail" src="img/tutchev.jpg" />
                  <div class="card-body">
                    <p class="card-text">Тютчев Федор Иванович</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a class="btn btn-sm btn-outline-primary" href="/tutchev.html">Начать читать</a>
                      </div>
                      <small class="text-muted">5 минут</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img class="img-thumbnail" src="img/fet.jpg" />
                   <div class="card-body">
                    <p class="card-text">Фет Афанасий Афанасьевич</p>
                      <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                      <a class="btn btn-sm btn-outline-primary" href="/fet.html">Начать читать</a> </div>
                      <small class="text-muted">3 минуты</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img class="img-thumbnail" src="img/nekrasov.jpg" />
                  <div class="card-body">
                    <p class="card-text">Некрасов Николай Алексеевич</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                      <a class="btn btn-sm btn-outline-primary" href="/nekrasov.html">Начать читать</a>
                      </div>
                      <small class="text-muted">6 минут</small>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img class="img-thumbnail" src="img/bunin.jpg" />
                  <div class="card-body">
                    <p class="card-text">Бунин Иван Алексеевич</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                      <a class="btn btn-sm btn-outline-primary" href="/bunin.html">Начать читать</a>
                      </div>
                      <small class="text-muted">4 минуты</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img class="img-thumbnail" src="img/pushkin.jpg" />
                   <div class="card-body">
                    <p class="card-text">Пушкин Александр Сергеевич</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                      <a class="btn btn-sm btn-outline-primary" href="/pushkin.html">Начать читать</a>
                      </div>
                      <small class="text-muted">5 минут</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img class="img-thumbnail" src="img/chehov.jpg" />
                  <div class="card-body">
                    <p class="card-text">Чехов Антон Павлович</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                      <a class="btn btn-sm btn-outline-primary" href="/chehov.html">Начать читать</a>
                      </div>
                      <small class="text-muted">6 минут</small>
                    </div>
                  </div>
                </div>
              </div>
            
            </div>
            <div class="text-center">
        <a class="btn btn-outline-primary btn-lg mt-3" href="/biography.html">Посмотреть больше биографий</a>
      
        </div>  
     
          </div>
        </div>
   
      </section>
      <section class="biography-section container">
      <h2 class="OpenSansLight">Хронологические таблицы</h1>
        
        <p><a name="biography" class="js-scroll-trigger"></a></p>

        <div class="album py-5">
          <div class="container">
            <div class="row ">
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                 <img class="img-thumbnail" src="img/tutchev.jpg" />
                  <div class="card-body">
                    <p class="card-text">Тютчев Федор Иванович</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                      <a class="btn btn-sm btn-outline-primary" href="/tutchev.html">Начать читать</a> </div>
                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img class="img-thumbnail" src="img/fet.jpg" />
                   <div class="card-body">
                    <p class="card-text">Фет Афанасий Афанасьевич</p>
                      <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                      <a class="btn btn-sm btn-outline-primary" href="/fettabl.html">Начать читать</a> </div>
                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img class="img-thumbnail" src="img/nekrasov.jpg" />
                  <div class="card-body">
                    <p class="card-text">Некрасов Николай Алексеевич</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                      <a class="btn btn-sm btn-outline-primary" href="/nekrasovtabl.html">Начать читать</a></div>
                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img class="img-thumbnail" src="img/bunin.jpg" />
                  <div class="card-body">
                    <p class="card-text">Бунин Иван Алексеевич</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                      <a class="btn btn-sm btn-outline-primary" href="/bunintabl.html">Начать читать</a></div>
                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img class="img-thumbnail" src="img/pushkin.jpg" />
                   <div class="card-body">
                    <p class="card-text">Пушкин Александр Сергеевич</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                      <a class="btn btn-sm btn-outline-primary" href="/pushkintabl.html">Начать читать</a></div>
                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img class="img-thumbnail" src="img/chehov.jpg" />
                  <div class="card-body">
                    <p class="card-text">Чехов Антон Павлович</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                      <a class="btn btn-sm btn-outline-primary" href="/chehovtabl.html">Начать читать</a></div>
                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </div>
            
            </div>
            <div class="text-center">
        <a class="btn btn-outline-primary btn-lg mt-3" href="/hrontabl.html">Посмотреть больше хронологических таблиц</a>
        </div>  
    
          </div>
        </div>
      
      </section>

      <!-- Создание Footer'а -->
      <footer class="pt-4 my-md-5 pt-md-5 border-top container">
        <div class="row">
          <div class="col-12 col-md ">
          <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-journal-bookmark" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 8V1h1v6.117L8.743 6.07a.5.5 0 0 1 .514 0L11 7.117V1h1v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8z"/>
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
</svg>
<small class="d-block mb-3 text-muted mt-3">© 2020-2021</small>
          </div>
          <div class="col-6 col-md nopod">
            <h5>Основные разделы</h5>
            <ul class="list-unstyled text-small">
              <li ><a class="text-muted" href="/biography.html">Биографии</a></li>
              <li><a class="text-muted" href="/hrontabl.html">Хронологические таблицы</a></li>
              <li><a class="text-muted" href="/callback.html">Обратная связь</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Информация</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="/about.html">О нас</a></li>
              <li><a class="text-muted" href="/literature.html">Литература</a></li>
            </ul>
          </div>
        </div>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</body>
</html>