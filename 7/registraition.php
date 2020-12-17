<h3>Форма регистрации</h3>

<?php 
if(!isset($_POST['regbtn'])){

?>

<form action="index.php?page=3" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" class="form-control" name="login" placeholder="Имя пользователя" />
    </div>

    <div class="form-group">
        <input type="password" class="form-control" name="pass1" placeholder="Пароль" />
    </div>

    <div class="form-group">
        <input type="password" class="form-control" name="pass2" placeholder="Подтверждение пароля" />
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="email" placeholder="Email" />
    </div>

    <div class="form-group">
        <label for="imagepath">Выберите картинку: </label>
        <input type="file" class="form-control" name="imagepath">
    </div>

    <button type="submit" class="btn btn-primary" name="regbtn">Зарегестрироваться</button>

</form>
<?php
    }
    else {
        if(is_uploaded_file($_FILES['imagepath']['tmp_name'])) {
            $path = "images/".$_FILES['imagepath']['name'];
            move_uploaded_file($_FILES['imagepath']['tmp_name'], $path);
        }

        if(Tools::register($_POST['login'], $_POST['pass1'], $path)) {
            echo "<h3><span style='color:green;'>Пользователь успешно создан!</span></h3>";
        }
    }
?>