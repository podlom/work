<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Site.com</title>
    <!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>

    <div class="container">

      <div class="header">
        <header>
          <div class="row equal">
            <div class="col-sm-6 col-xs-6 col-lg-6 col-md-10">

              <div class="nav">
                <ul class="nav nav-pills header">
                    <li role="presentation"><a href="/">Главная</a></li>
                    <li role="presentation"><a href="#">Политэмигация</a></li>
                    <li role="presentation"><a href="#">Военная эмиграция</a></li>
                    <li role="presentation"><a href="#">Наши друзья</a></li>
                    <li role="presentation"><a href="#">Документы</a></li>
                    <li role="presentation"><a href="#">События</a></li>
                </ul>
            </div>

            </div>
            <div class="col-sm-6 col-xs-6 col-lg-6 col-md-2">
              <h6 style="color: white"><b>UA Legion</b></h6>
            </div>
          </div>
        </header>
      </div>

      <div id="search-auth-panel">
        <div class="row">
          <div class="col-md-5 col-sm-3">
            <button type="submit" class="btn btn-link" name="mail-button" value="get-mail">Mail</button>
            <button type="submit" class="btn btn-link" name="facebook-button" value="facebook">Facebook</button>
            <button type="submit" class="btn btn-link" name="youtube-button" value="youtube">YouTube</button>
            <button type="submit" class="btn btn-link" name="message-button" value="get-message">Отзыв</button>
          </div>
          <div class="col-md-3 col-sm-3">
            <button type="submit" class="btn btn-link" value="auth">Войти/Зарегистрироваться</button>
          </div>
          <div class="col-md-4 col-sm-3">

            <form class="form-search">
              <input type="text" class="input-medium search-query">
              <button type="submit" class="btn btn-link">Поиск</button>
            </form>

          </div>
        </div>
      </div>

      <hr>

@yield('content')

<hr>

      <div id="footer">
        <div class="row">
          <div class="col-md-2" style="border: solid 1px black">
            <button type="submit" class="btn btn-link" name="mail-button" value="get-mail">Mail</button>
          </div>
          <div class="col-md-7" style="border: solid 1px black">
            <small>Данный сайт является визитной карточкой военно-политической эмиграции в Украине, где мы (военно-политические эмигранты) документируем сами себя, самими собой.Общим, документальным описанием текущей ситуации. Будет полезен прежде всего самим эмигрантам, а так же общественным организациям, юристам, депутатам, журналистам и всем, кого интересует данная тематика.</small>
          </div>
          <div class="col-md-3" style="border: solid 1px black">
            <p>сайт ualegion.ho.ua &copy; 2017</p>
          </div>
        </div>
      </div>

    </div>
  </body>
</html>
