<h1>Upload Page</h1>
<?php 
    if(!isset($_POST['uppbtn'])){
?>

<form action="index.php?page=2" method="POST" enctype="multipart/form-data">
        <div class="custom-file mt-4">
            <input type="file" class="custom-file-input" id="customFile" name="myfile" accept="image/*">
            <label for="customFile" class="custom-file-label">Выберите файл</label>
        </div>
        <button type="submit" class="btn btn-primary mt-3" name="uppbtn">Загрузить</button>
</form>

<?php
    }else{
        if ($_FILES['myfile']['error'] != 0) {
            echo "<h3 style='color:red;'>Ошибка при загрузке! Код ошибки ".$_FILES['myfile']['erorr']."</h3>";
            exit();

        }
        if (is_uploaded_file($_FILES['myfile']['tmp_name'])){
            move_uploaded_file($_FILES['myfile']['tmp_name'],"./images/".$_FILES['myfile']['name']);
            echo "<h3 style='color:green;'>Файл успешно загружен!</h3>";
        }
    }
    ?>