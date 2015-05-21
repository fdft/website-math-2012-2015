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
  <title> The Challenge </title>
  <meta name="description" content="list of things to improve on" />
  <meta name="keywords" content="things to learn, improve, math, computer science" />
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


<h1 class="topheadline">The Challenge</h1>
<!-- <div class="subheadline">???</div> -->


<p>I hereby challenge you to do two things:</p>

<ol>
	<li>Learn something new by talking to me about something I know and like.</li>
	<li>Teach me something new by talking to me or lending me a good book etc.</li>
</ol>

<h1 class="topheadline">List of Topics</h1>
  
<ul>
	<li>Linear Algebra
		<ul>
			<li><span class="b">Integer Linear Algebra:</span> Solving Ax=b over the integers via Hermite normal form or LLL.</li>
			<li><span class="b">(Integer) Linear Programming:</span> The (integer) feasibility problem, linear optimization.</li>	
		</ul> 
	</li>
	<li>Game Theory: I am interested in the k player non-zero sum games, and game theory that uses optimization-based tools</li>
	<li> Computer Programming:
		<ul>
			<li><span class="b">Multiprocessor Programming</span>: I know about <a href="http://openmp.org/wp/" class="outlink">OpenMP</a>, but have not had the time to look at it closely.</li>
			<li><span class="b">Distributed Programming</span>: I know about <a href="http://www.cs.wisc.edu/condor/mw/" class="outlink">MW condor</a>, but I have not looked at it closely.</li>
			<li><span class="b">Databases</span>: I have used MySQL from a shell,  PHP, and from phpMyAdmin. I have used SQLite from a shell and C++ setting. Both databases have their strong points. I would like to work with a more "professional" database manager like Microsoft Access and OpenOffice Base. Also, I would like to work with an XML-base database.</li>
			<li><span class="b">GUI Programming</span>: I have worked with Java's AWT but not much in SWING. I have also done a few things in QT, but I have room for improvement.</li>
			<li><span class="b">General Programming</span>: I can talk about C++, Java, Maple and would not minding learning a new trick over a few slices of pizza :)</li>
			<li><span class="b">IDE's</span>: If you have strong feelings about one, let me know.</li>
		</ul>
	</li>
	<li> Web Programming
		<ul>
			<li><span class="b">Network Programming</span>: I want to send messages from a C++ or Java program from one PC to another over the internet behind a NAT. A preferred solution would not require changing settings on my router.</li>
			<li><span class="b">Fancy PHP Stuff</span>: I want to work with more plugins for things like database acess, image creation, latex, saving state, etc.</li>
			<li><span class="b">JavaScript</span>: I want to know more. Especially how to communicate between client-server without reloading the entire page.</li>
		</ul>
	</li>
	<li><span class="b">Web Security</span>: With the 2011 hacking events by LulzSec, understanding website security is important. <a href="http://google-gruyere.appspot.com/" class="outlink">Gruyere</a> is a website that teaches online security issues by asking you to hack a dummy website!</li>
	<li><span class="b">Games</span>: <a href="http://en.wikipedia.org/wiki/Antichess" class="outlink">Suicide chess</a> anyone?</li>
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



