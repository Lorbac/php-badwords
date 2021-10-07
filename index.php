<?php 

    $paragraph = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident beatae deserunt commodi optio quisquam consectetur officia? Repudiandae dolorem, neque sit natus nemo alias fuga laudantium veritatis cum tempora animi amet.";
    $badword = $_GET["badword"];
    $censured = "***";
    $newParagraph = str_ireplace($badword, $censured, $paragraph);

?>

<h2>Testo non censurato</h2>
<h3>Parola da censurare: <?php echo $badword ?></h3>
<p><?php echo $paragraph ?></p>
<hr>

<h2>Testo censurato</h2>
<p><?php echo $newParagraph ?></p>
