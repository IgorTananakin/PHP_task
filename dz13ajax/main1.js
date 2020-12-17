var serverResponse = document.querySelector('#response');
	document.forms.ourForm.onsubmit =function(e){
		// e.preventDefault();//отменяю действия события по умолчанию
		var userInput = document.form.ourForm.ourForm__inp.value;
		 userInput= 'userInput='+encodeURIComponent(userInput);//кодирую чтобы избежать некоретные запросы к серверу
		
		var xhr = new XMLHttpRequest();
		// xhr.open('GET','index.html?'+'codes='+userInput);
		xhr.open('POST','form.php',true);
		var formData = new FormData(document.forms.ourForm);
		xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		// xhr.onreadystatechange =function(){
		// 	if(xhr.readyState === 4 && xhr.status === 200){
		// 		servResponse.textContent = xhr.responseText;
		// 	}
		// }
		// xhr.send('ourForm__inp='+userInput);
		xhr.send(formData);
	};



  //подписаться на событие click по кнопке и назначить обработчик, который будет выполнять действия, указанные в безымянной функции
  mybutton.addEventListener("click", function(){
    //1. Сбор данных, необходимых для выполнения запроса на сервере
    var name = document.getElementById('name').value;
    //Подготовка данных для отправки на сервер
    //т.е. кодирование с помощью метода encodeURIComponent
    name = 'nameUser=' + encodeURIComponent(name);
    // 2. Создание переменной request
    var request = new XMLHttpRequest();
    // 3. Настройка запроса
    request.open('POST','processing.php',true);
    // 4. Подписка на событие onreadystatechange и обработка его с помощью анонимной функции
    request.addEventListener('readystatechange', function() {
      //если запрос пришёл и статус запроса 200 (OK)
      if ((request.readyState==4) && (request.status==200)) {
        // например, выведем объект XHR в консоль браузера
        console.log(request);
        // и ответ (текст), пришедший с сервера в окне alert
        console.log(request.responseText);
        // получить элемент c id = welcome
        var welcome = document.getElementById('welcome');
        // заменить содержимое элемента ответом, пришедшим с сервера
        welcome.innerHTML = request.responseText;
      }
    });
    // Устанавливаем заголовок Content-Type(обязательно для метода POST). Он предназначен для указания кодировки, с помощью которой зашифрован запрос. Это необходимо для того, чтобы сервер знал как его раскодировать.
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    // 5. Отправка запроса на сервер. В качестве параметра указываем данные, которые необходимо передать (необходимо для POST)
    request.send(name);
  });
});