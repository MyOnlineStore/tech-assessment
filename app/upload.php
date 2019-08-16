<?php
declare(strict_types=1);

if(!empty($_FILES['uploaded_file'])) {
    \move_uploaded_file($_FILES['uploaded_file']['tmp_name'], '/app/uploads/image.jpg');
}

header('Location: /');
