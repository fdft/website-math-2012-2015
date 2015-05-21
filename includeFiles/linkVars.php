
<?php
/*these vars define the abs. path to the website. 
 *
 *these function resolve nested include problems
 *
 */
	ini_set('display_errors',1);
	error_reporting(E_ALL);

$root = "http://math.ucdavis.edu/~bedutra"; 




// The function returns the absolute path to the file to be included.
// This path can be used as argument to include() and resolves the problem of nested inclusions.
			//parameters: "../../file" , __FILE__
function getFilePath($relative_path,  $currentFilePath)
{
    //relative array is an array in the form (.., .., .., dir, dir, dir, file)
	//abs_array is an array in the form ( D:, program files, apache gropu, htdocs, includeFiles, flyOutScript.php)
    $relative_array = explode("/", $relative_path);
    $abs_array = explode(DIRECTORY_SEPARATOR ,$currentFilePath);
	
	array_pop($abs_array); //remove the file name of the current file
	
    // for each "../" at the beginning of $relative_path
    // removes this 1st item from $relative_path and the last item from $abs_path
    while ($relative_array and ($relative_array[0]=="..")) {
        array_shift($relative_array);
        array_pop($abs_array);
    }
    // and implodes both arrays
    return implode(DIRECTORY_SEPARATOR, $abs_array) . DIRECTORY_SEPARATOR . implode(DIRECTORY_SEPARATOR, $relative_array);  
}//getFilePath



?>



