<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cheap Hosting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">  
    <meta name="description" content="Html Hoster">   
    <style>
body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        .banner {
            text-align: center;
            background-color: #e74c3c; 
            color: white;
            padding: 20px 0;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 24px;
        }
        .banner span {
            display: block;
            font-size: 16px;
            margin-top: 5px;
        }
        .container {
            max-width: 90%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: 1px solid #ddd; 
            position: relative;
        }
        input[type="file"], input[type="submit"] {
            margin-bottom: 15px;
            padding: 12px;
            width: calc(100% - 24px);
            display: block;
            margin-left: auto;
            margin-right: auto;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #e74c3c;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
            border-radius: 4px;
            padding: 12px 20px;
            width: 100%;
            display: block;
        }
        input[type="submit"]:hover {
            background-color: #c0392b; 
        }

  
        .watermark {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 12px;
            color: #ccc;
        }

     
        .hosted-url-box {
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-top: 20px;
            word-wrap: break-word; 
            max-width: 90%; 
            margin-left: auto;
            margin-right: auto;
        }
        .custom-btn {
    background-color: #3498db; 
    color: white;
    border: none;
    cursor: pointer;
    font-size: 10px;
    text-align: center; 
}


@media (max-width: 600px) {
    .custom-btn {

        width: 100%;
        z-index: 9999;
    }
}


        @media (max-width: 600px) {
      
            .container {
                padding: 15px;
            }
            input[type="file"], input[type="submit"] {
                padding: 10px;
            }
            .banner {
                font-size: 18px;
            }
            .banner span {
                font-size: 14px;
            }
            .watermark {
                font-size: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="banner">
        <h1>Cheap Hosting</h1>
        <span>Your solution for affordable hosting</span>
    </div>
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="uploadedFile">
            <input type="submit" value="Upload">
        </form>

    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['uploadedFile'])) {
    $uploadDir = 'uploads/';
    $allowedExtension = 'html';

    $fileExtension = pathinfo($_FILES['uploadedFile']['name'], PATHINFO_EXTENSION);

    if (strtolower($fileExtension) !== $allowedExtension) {
        echo "<div>Error: Only HTML files are allowed.</div>";
    } else {
        if (!file_exists($uploadDir) && !is_dir($uploadDir)) {
            mkdir($uploadDir);
        }

        $uploadedFile = $uploadDir . basename($_FILES['uploadedFile']['name']);

        if (move_uploaded_file($_FILES['uploadedFile']['tmp_name'], $uploadedFile)) {
            $fileName = basename($_FILES['uploadedFile']['name']);
            $hostedURL = "http://{$_SERVER['HTTP_HOST']}/$uploadedFile";
            echo "<div class='hosted-url-box'>File uploaded successfully. Hosted URL: <a href='$hostedURL'>$hostedURL</a></div>";
        } else {
            echo "<div>Error uploading file.</div>";
        }
    }
}
?>

        <div class="watermark">Hosted on: <?php echo $_SERVER['HTTP_HOST']; ?></div>
    </div>
    <center>
        <a href="https://t.me/DEVSNP">
            <button class="btn-11 custom-btn" style="width: 40vw; height: 40px; margin-top: 10px;"><b style="color: white;">Made by Nep Coder</b></button>
        </a>
    </center>
</body>
</html>
