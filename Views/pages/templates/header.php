<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <title><?php echo self::titulo; ?></title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL ?>css/style.css" type="text/css">
</head>
<body>
  <header>
    <div class="center">
        <div class="logo">
            <h2>MVC</h2>
        </div>
        <nav class="menu">
            <?php
                foreach($this->menuItems as $key => $value){
                    echo '<a href="'.strtolower($value).'">'.$value.' </a>';    
                }
            ?>
        </nav>
        <div class="clear"></div>
    </div>
  </header>
