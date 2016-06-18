<?
$dbhost ='localhost';
$dbname='obpl';
$dbuser='root';
$dbpass='';

$mysqli = new mysqli($dbhos, $dbuser,$dbpass, $dbname);

if ($mysqli->connect_error) {
    die('oshibka podl (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
	
	
//$connection=mysql_connect($dbhost,$dbuser,$dbpass) or die(mysql_error());
//mysql_select_db($dbname,$connection)or die(mysql_error());


/*************************************/
session_start();
if(isset($_SESSION['user']))
{
	$user=$_SESSION['user'];
	$lg=TRUE;
}
else
{
	$lg=FALSE;
	
}

	/********************************************************/
	function dSession()
	{
		$_SESSION=array();
		if(session_id()!=""||isset($_COOKIE[session_name()]))
			setcookie(session_name(),'',time()-2592000,'/');
		session_destroy();
	}
	
	function sanString ($var)
	{
			
		$var=strip_tags($var);
		$var=htmlentities($var);
		$var=stripslashes($var);
		return mysql_real_escape_string($var);
	}

?>