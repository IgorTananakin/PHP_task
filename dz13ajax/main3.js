//после загрузки DOM-дерева страницы
document.addEventListener("DOMContentLoaded",function() {
    //получить кнопку
    var mybutton = document.getElementById('send');
    //подписаться на событие click по кнопке и назначить обработчик, который будет выполнять действия, указанные в безымянной функции
    mybutton.addEventListener("click", function(){
      //1. Сбор данных, необходимых для выполнения запроса на сервере
      var codes = document.getElementById('codes').value;
      var colors = document.getElementById('colors').value;
      var types = document.getElementById('types').value;
      //Подготовка данных для отправки на сервер
      //т.е. кодирование с помощью метода encodeURIComponent
      codes = 'CodesUser=' + encodeURIComponent(codes) ;
      colors = ' ColorsUser=' + encodeURIComponent(colors);
      types = ' TypesUser=' + encodeURIComponent(types);
      // result="CodesUser=" + codes + "&ColorsUser=" + colors;
       result=  codes +  colors + types;
      // 2. Создание переменной request
      var request = new XMLHttpRequest();
      // 3. Настройка запроса
      request.open('POST','form3.php',true);
      // 4. Подписка на событие onreadystatechange и обработка его с помощью анонимной функции
      request.addEventListener('readystatechange', function() {
        //если запрос пришёл и статус запроса 200 (OK)
        if ((request.readyState==4) && (request.status==200)) {
          // например, выведем объект XHR в консоль браузера
          console.log(request);
          // и ответ (текст), пришедший с сервера в окне alert
          console.log(request.responseText);
          // получить элемент c id = welcome
          var response = document.getElementById('response');
          // заменить содержимое элемента ответом, пришедшим с сервера
          response.innerHTML = request.responseText;
        }
      });
      // Устанавливаем заголовок Content-Type(обязательно для метода POST). Он предназначен для указания кодировки, с помощью которой зашифрован запрос. Это необходимо для того, чтобы сервер знал как его раскодировать.
      request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
      // 5. Отправка запроса на сервер. В качестве параметра указываем данные, которые необходимо передать (необходимо для POST)
      
      request.send(result);
    });
  });