<?php
$counter_name = "about_visitors.txt";
if (!file_exists($counter_name)) {
  $f = fopen($counter_name, "w");
  fwrite($f,"0");
  fclose($f);
}
$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);
$counterVal++;
$f = fopen($counter_name, "w");
fwrite($f, $counterVal);
fclose($f);
$numVisitors = $counterVal;
?>
<!DOCTYPE html>
<html>
  <head>
    <title>cat README.md</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="main">
      <span id="prompt_name">juli@meowcity</span>:<span id="path">~/about_me$</span> cat README.md<br>
      <br>  
      Hi! <br> 
      I am Juli a Finnish furry from '09(thats 14 years old). I go by Juli or Julimiro, my preferred pronouns are he/him but any are fine tbh.<br>
      <br>
      &lt;<a target="_blank" href="https://julimiro.eu">https://julimiro.eu</a>&gt;<br>
      &lt;<a target="_blank" href="https://eepykitty.lol/@juli">https://eepykitty.lol/@juli</a>&gt;<br>
      &lt;<a target="_blank" href="https://www.last.fm/user/Julimiro">https://www.last.fm/user/Julimiro</a>&gt;<br>
      &lt;<a target="_blank" href="https://www.youtube.com/@JuliTheFurry">https://www.youtube.com/@JuliTheFurry</a>&gt;<br>
      <br>
      <?php echo $numVisitors;?> visitors!<br>
      <br>
      <br> 
      Meow

    </div>
  </body> 
</html>
