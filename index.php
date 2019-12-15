<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>asfdsfs</title>
<link rel="stylesheet" href="css/uikit.min.css" />
</head>
<body>
<br>
<div  class="uk-background-default">
    <div align="center">
    <div class="uk-margin">
    <br>
        <!--<a uk-icon="icon: plus" uk-tooltip="title: Добавить поле для получения данных" onclick="check_input(this)"></a>-->
        <input class="uk-input uk-form-width-medium " type="text" placeholder="Введите ссылку" id="txt">
        <input class="uk-input uk-form-width-medium " type="text" placeholder="Введите домен" uk-tooltip="title: При необходимости введите домен, куда отправлять данные ;pos: bottom" id="domein">
        <a class="uk-icon-link"  uk-icon="icon: arrow-right; ratio: 1.5" id="cross" onclick="cross()" uk-tooltip="title: Преобразовать; delay: 500"  ></a>
        <input class="uk-input uk-form-width-medium " type="text" placeholder="Получите ссылку" disabled id="small_link">
        <a uk-icon="copy" style="margin-left: 5px;" id="copy"  uk-tooltip="title: Копировать; delay: 500"onclick="copyTextToClipboard(document.getElementById('small_link').value)" ></a>
        <br>
    </div>
    <hr class="uk-margin-large-left uk-margin-large-right">
    </div>
    <div align="center">
    <div  class="uk-inline" >
            <a class="uk-form-icon uk-form-icon-flip" uk-icon="icon: search" id="find" uk-tooltip="title: Анализ ссылки; delay: 500" onclick="search_info()"></a>
            <input class="uk-input" type="text" placeholder="Введите короткую ссылку" id="search">
        </div>
        <div class="uk-margin-large-top" id="info">
        











        </div>
    </div>




        
</div>
</body>
<script src="./js/uikit/uikit.js"></script>
    <script src="./js/uikit/uikit-icons.min.js"></script>
    <script src="./js/app.js" async defer></script>
</html>
