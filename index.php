<?php    
    include_once("includeFiles/linkVars.php");
    include_once("includeFiles/linksMenu.php");
    include_once("includeFiles/footnote.php"); 
    include_once("includeFiles/headnote.php");  
    
    /* *********************** the above links mustbe relative **********************  */
  ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
  <title> Brandon's Homepage </title>
  <meta name="description" content="Brandon's homepage" />
  <meta name="keywords" content="brandon, math" />
  <meta name="author" content="bedutra" />
  <meta name="robots" content="index,follow" />
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
  <meta http-equiv="content-language" content="en" />

  <!-- ********* css file for every page ******************** -->
  <link rel="stylesheet" type="text/css" href="includeFiles/masterCSS.css" />
</head>
<body>

<!-- ***************************************************** -->
<!-- ******* start of master table, id="thetable" ******** -->  
<!-- ***************************************************** --> 
  
<table width="100%" border="0" cellspacing="0" cellpadding="0" id="thetable">

     <?php
       printMasterHeadNote(); //from headnote.php
     ?>
  
<tr>
  <td class="nav">

  <!-- ********************************************* -->
  <!-- ************ code for left links ************ -->
  <!-- ********************************************* -->

  <?php
   printLeftLinks(); //from linkMenu.php
  ?>
  
 
  <!-- **************************************************** -->
  <!-- ************ end of code for left links ************ -->
  <!-- **************************************************** -->


</td><td class="workspace">



<p style="text-align:center; font-size:larger;">A picture is worth a thousand words</p>
<img class="centerimg" src="images/EuclidPythagoreanTheorem.gif" alt="Euclid's Pythagorean Theorem proof"/>

</td>
</tr>
<tr>
  <td colspan="2" class="workspace2">
    <!-- ******************************************* -->
    <!-- ************ start of footnote ************ -->
    <!-- ******************************************* -->

    <?php
      printFootnote(1);
    ?>  

    <!-- ******************************************* -->
    <!-- ************ end of footnote ************ -->
    <!-- ******************************************* -->
  </td>
</tr>
</table>

<!-- ***************************************************** -->
<!-- ******* end of master table, id="thetable" ******** --> 
<!-- ***************************************************** -->

</body>
</html>



