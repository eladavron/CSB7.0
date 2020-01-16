<?php
/**
 * Created by PhpStorm.
 * User: starstryder
 * Date: 6/11/19
 * Time: 9:45 PM
 */
?>

<html>
<head>
    <?php loadMeta(); ?>
    <link href='http://fonts.googleapis.com/css?family=Roboto:regular,bold,bolditalic,italic' rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo $THEME_URL; ?>/style.css">
    <script src="<?php echo $THEME_URL; ?>/js/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="<?php echo $THEME_URL; ?>/js/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="<?php echo $THEME_URL; ?>/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
</head>
<body>

<!-----------------------------------------------------------------------
   Text for the Login Box
  ------------------------------------------------------>
<?php
loadLoginBox();
?>

<div id="header" class="container d-flex justify-content-between align-items-center">

    <!-----------------------------------------------------------------------
        Load Logo TODO Make logo uploadable
       ---------------------------------------------------------------------->
    <div id="logo" class="left">
        <a href="<?php echo $BASE_URL; ?>">
            <img src="<?php echo $THEME_URL; ?>/images/header-logo.png">
        </a>
    </div>

    <!-----------------------------------------------------------------------
        Load Title
       ---------------------------------------------------------------------->
    <div id="title">
        <h1> <?php echo $page_title; ?></h1>
    </div>

    <!-----------------------------------------------------------------------
        Load User Area TODO ADD LOGIC TO LOGIN OR LOGOUT AS MAKES SENSE
      ---------------------------------------------------------------------->
    <div id="user">

        <?php loadUser(); ?>

    </div>

</div>

<div class="clear"></div>


