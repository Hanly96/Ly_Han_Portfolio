<?php
// var_dump($_POST);
$fields = array(
    'Name'=>array(
        'type'=>'text',
        'label'=>'Name'
    ),
    'Email'=>array(
       'type'=>'email',
       'label'=>'Email'
    ),
    'Phone'=>array(
       'type'=>'phone',
       'label'=>'Phone'
    ),
    'Message'=>array(
       'type'=>'textarea',
       'label'=>'Message'
    )
);

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/foundation.css">
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/hivideo.css" rel="stylesheet" type="text/css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" type="text/css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.js"></script>
<title>Han Ly</title>
</head>

<body>
    <!--Navigation goes here-->  
    <header></header>
        <input type="checkbox" id="openSideMenu" class="openSideMenu">
        <label for="openSideMenu" class="menuIconToggle">
          <div class="hamb-line dia p-1"></div>
          <div class="hamb-line hor"></div>
          <div class="hamb-line dia p-2"></div>
        </label>
        <nav>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="index.html#about">About</a></li>
            <li><a href="index.html#project">Projects</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </nav>   
    
    <div>
            <section>
                <img class="small-12 medium-horizontal large-12" src="images/banner.gif">
            </section>
    </div>

    <!--#Contact goes here-->
    <div id="contact">

        <section class=" wow bounceInUp">
            <object class="columns large-12 small-12" type="image/svg+xml" id="heading-contact" data="images/heading-contact.svg" width="720"
            height="65"></object>
        </section>

      <div class="row"> 
          <div class="columns large-12 medium-12 small-12"> 
        <form id="contactForm" action="/includes/sendEmail.php" method="POST">
            <h2 class="hidden">User Form</h2>
        <?php foreach($fields as $field_name => $field_config):?>
            <?php if($field_config['type'] === 'textarea'):?>
                <label class="title" for="<?php echo $field_name;?>"><?php echo $field_config['label'];?></label>
                <textarea id="<?php echo $field_name;?>" placeholder="<?php echo $field_name;?>" name="<?php echo $field_name;?>"></textarea><br>
            <?php else:?>
                <label class="title" for="<?php echo $field_name;?>"><?php echo $field_config['label'];?></label>
                <input id="<?php echo $field_name;?>" placeholder="<?php echo $field_name;?>" type="<?php echo $field_config['type'];?>" name="<?php echo $field_name;?>"><br>
            <?php endif;?>
        <?php endforeach;?>
            <input type="submit" value="send" id="buttonContact">
        </form> 
          </div>  
    </div>
    </div><!--end of Contact-->      

    <footer id="mainFooter">     
        <img class="large-12 medium-12 small-12" src="images/footer.jpg">
    </footer>


        <script src="js/wow.min.js"></script>
        <script>
        new WOW().init();
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.js"></script>
        <script src="js/main.js"></script>
        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.js"></script>
        <script type="text/javascript" src="js/hivideo.js"></script>
        <script src="js/video.js"></script>
</body>
</html>    
