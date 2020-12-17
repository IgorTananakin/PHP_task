<!DOCTYPE html>
<html>
<head>
    <title>Gallery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <?php
        include_once('pages/functions.php');
    ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=1">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=2">Upload</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=3">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=4">Registration</a>
                    </li>
                </ul> 
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <?php
                    if(isset($_GET['page'])) {
                        switch($_GET['page']) {
                            case 2:
                                include_once('pages/upload.php');
                                break;
                            case 3:
                                include_once('pages/gallery.php');
                                break;
                            case 4:
                                include_once('pages/registration.php');
                                break;
                            default:
                                include_once('pages/home.php');
                        }
                    } else {
                        include_once('pages/home.php');
                    }
                ?>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>