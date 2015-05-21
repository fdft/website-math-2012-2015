<?php    
    include_once("../includeFiles/linkVars.php");
    include_once("../includeFiles/linksMenu.php");
    include_once("../includeFiles/footnote.php"); 
    include_once("../includeFiles/headnote.php");  
    
    /* *********************** the above links must be relative **********************  */
  ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
  <title> Brandon Dutra: Tutor </title>
  <meta name="description" content="You don't have to feel lost or confused in math, I can help tutor you." />
  <meta name="keywords" content="Davis, Davis, CA, tutor Davis, tutors, tutor, tutoring, find a tutor, math, mathematics, test, test prep, sat, act, programming, computer science, class" />
  <meta name="author" content="bedutra" />
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


<h1 class="topheadline">Get the help you need</h1>

<p>Math is hard. There is no question about it. But I want to work with you so that you not only understand how to do some specific problem, but I want to help you understand the logic behind a math problem so that you can enjoy doing mathematics. Mathematics is full of beautiful and useful ideas, and I want to help reduce any frustrations you have.</p>

<p><span class="b">About Me:</span> I graduated from UC Davis in pure mathematics with a minor in computer science. So I probably took the same class you are in! I am now a PhD student in the applied math program.</p>

<p><span class="b">Experience:</span>  I have worked with students in  elementary school, high school, and college.</p>

<p><span class="b">Hourly rate:</span> $50 </p>

<p><span class="b">Contact me:</span> By email (bedutra .at. ucdavis): put the subject line as "math tutor needed" or something like that. I can meet anywhere in Davis, CA depending on my schedule</p>

<h1 class="topheadline">Tutoring in Mathematics</h1>
<p>I have taken, or can tutor the following classes and subjects</p>
<ul>
	<li>Calculus: 16, 17, or 21 series</li>
	<li>Linear Algebra: 22A, 22AL, 67, 167</li>
	<li>Differential Equations: 22B, 119A</li>
	<li>Analysis: Both real and complex</li>
	<li>Algebra: 150 series</li>
	<li>Numerical Analysis: the 128 series</li>
	<li>Fourier Analysis</li>
	<li>Probability: 135 A and B</li>
	<li>Combinatorics</li>
	<li>Topology: point set</li>
	<li>Discrete Math: 148</li>
	<li>Math and Computers: 165</li>
	<li>Optimization</li>	
</ul>

<h1 class="topheadline">Test Prep</h1>  

<p>I can help you with the following tests:</p>
<ul>
	<li>SAT: the general SAT math, and the subject test in math</li>
	<li>ACT</li>
	<li>California high school exit exam</li>
	<li>GRE: the general math section, and the math subject test</li>
</ul>


<h1 class="topheadline">Tutoring in Computer Science</h1>  

<p>I have taken ECS 30, 40, and 60 with the famous Sean Davis, so I am very comfortable working in C/C++. Sean Davis is known for giving really long homeworks that take 5-20 hours a week to do. So I know how frustrating programming can be, but things can be better if you have someone you can talk about a problem with.</p>

<p>I have taken all of the following classes</p>

<ul>
	<li>C/C++: ECS 30, 40, 60</li>
	<li>Discrete Math for CS: 20</li>
	<li>Assembly: ECS 50</li>
	<li>Programming Languages: 140A</li>
	<li>Computer Networks: 152A</li>
	<li>Software Engineering: 160</li>
	<li>Databases: 165A</li>
	<li>AI: 170</li>
	<li>Computer Graphics: 175</li>
</ul>
	 

<p>In terms of programming, I can help with the following languages:</p>
<ul>
	<li>C/C++</li>
	<li>Java</li>
	<li>Maple and Matlab</li>
	<li>Website development: HTML with CSS. PHP with MySql or Sqlite as the database on the server side. This is one of my favorite hobbies.</li>
</ul>
	


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



