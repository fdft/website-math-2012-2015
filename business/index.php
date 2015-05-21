<?php
   
    include_once("../includeFiles/linkVars.php");
    include_once("../includeFiles/linksMenu.php");
    include_once("../includeFiles/footnote.php"); 
    include_once("../includeFiles/headnote.php");  
    
    /* *********************** the above links mustbe relative **********************  */
  ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
  <title> Teaching, papers, talks </title>
  <meta name="description" content="Papers authored" />
  <meta name="keywords" content="teaching, papers" />
  <meta name="author" content="Brandon Emmanuel Dutra"/>
  <meta name="robots" content="index,follow" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta http-equiv="content-language" content="en" />

  <!-- ********* css file for every page ******************** -->
  <link rel="stylesheet" type="text/css" href="../includeFiles/masterCSS.css" />
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

 


<!--
<h1 class="topheadline">Classes</h1>
<div class="subheadline">Math 390</div>
<p>Website Homework: Here is a 
<a href="latexExamples.tex">latex file <img src="texIcon.png" style="background-color:transparent; border:0; width:16px; height:16px;"></a>, 
<a href="latexExamples.pdf" class="pdflink">its pdf file</a>, and the <a href="latex2htmlExample">latex2html result<a></p>
-->


<h1 class="topheadline">Papers</h1>
  
<ol>
	<li>Software for Exact Integration of Polynomials over Polyhedra. 
	Jesus De Loera, Brandon Dutra, Matthias Koeppe, Stanislav Moreinis, Gregory Pinto, Jianqiu Wu. 
	Comput. Geom. 46 , no. 3 (2013): 232-252.
 	<a href="http://arxiv.org/abs/1108.0117" class="outlink">arxiv 1108.0117</a></li>
	

	<li>Coefficients of Sylvester's Denumerant.
Velleda Baldoni, Nicole Berline, Jesus De Loera, Brandon Dutra, Matthias Koeppe, Michele Vergne.
<a href="http://arxiv.org/abs/1312.7147 class="outlink">arxiv.1312.7147</a></li>
	
</ol>  
  
  
  
<h1 class="topheadline">Talks and Conferences</h1>
  
<p>	J. A. De Loera, B. Dutra, M. K&#246;ppe, S. Moreinis, G. Pinto, J. Wu. Software for exact integration of polynomials over polyhedra.
ISSAC 2011 36th International Symposium on Symbolic and Albegraic Computation, San Jose, CA, June 8-11, 2011</p>


<h1 class="topheadline">Seminars</h1>
  
<p>I am co-organizing with <a href="http://www.math.ucdavis.edu/~scrimsha">Travis Scrimshaw</a> the <a href="http://sites.google.com/site/ucdmathprogramming/">Student Run Mathematical Programming Seminar.</a></p>  
  


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



