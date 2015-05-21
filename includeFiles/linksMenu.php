<?php
/* NOTE: all global var's are defined in linkVars.php. 
 */
function printLeftLinks()
{
  global $root;
  
//echo("<br /><span class=\"navtitle\">R4 Recycling</span>\n");


  echo("<!-- Menu  -->\n");
  echo("<dl>\n");
  echo("        <dt><a href=\"".$root."/\">Home</a></dt> \n");
  echo("        <dt><a href=\"".$root."/business/\">Business</a></dt> \n");
//  echo("		<dt><a href=\"".$root."/challenge/\">The Challenge</a> </dt>\n");
//  echo("        <dt><a href=\"".$root."/software/\">Software</a></dt> \n");  
  echo("        <dt><a href=\"".$root."/tutor/\">Tutoring</a></dt> \n");  
  echo("</dl> \n");
  
}//end printLeftLinks()

?>



   
