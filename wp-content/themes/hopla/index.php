<h1><?php
get_header(); 
?></h1>

<h1><?php
the_title();
?></h1>

<br>
<?php the_content();?>

<?php
echo "<p style='color:white; '>Het is " . date("d-m-Y") . "</p><br>";
echo "<p style='color:white; '>copyright Yafang Shivam</p>";
?>