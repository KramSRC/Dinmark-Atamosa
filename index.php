<?php
$name = "Dinmark Atamosa";
$course = "BSIT Student";
$description = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus labore dolores esse. Odit similique doloribus tenetur doloremque, sunt commodi in ipsa repudiandae debitis deleniti blanditiis quibusdam quaerat neque asperiores ea.";
$image = "cat.jpg";
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Landing Page</title>
</head>
<body>
    <section class="page">
        <div class="page-img">
            <img src="<?php echo $image; ?>" alt="cat">
        </div>
        <div class="page-content">
            <h1>Hi, I'm <span><?php echo $name; ?></span></h1>
            <h3>I'm a <span><?php echo $course; ?></span></h3>
            <p><?php echo $description; ?></p>
            <a href="" class="btn">Contact Me</a>
        </div>
    </section>
</body>
</html>
