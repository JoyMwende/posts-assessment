<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts Assessment</title>
    <?php wp_head(); ?>
</head>

<?php
    if(is_home()):
        $custom_class = ['poststheme-class', 'class-posts'];
    else:
        $custom_class = ['other-poststheme-class', 'poststheme-other-class'];
    endif;
?>
<body>
    <?php wp_nav_menu(['theme_location'=>'primary']); ?>
