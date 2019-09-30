<?PHP
	// --------------------------------------------------------------
	// PRODUCTO : WEBSITE ASFALCO
	// CLIENTE	: ASFALCO S.A.
	// VERSION	: 1.1 
	// FECHA	: ENERO, 2011
	// --------------------------------------------------------------
	// DISEÑO	: LAZCANO P.2011
	// CODIGO	: LAZCANO P.2011
	// --------------------------------------------------------------
	// PROPOSITO: "CONECTOR MYSQL"	
	// --------------------------------------------------------------
	
class __DB__
{  

	# -------------------------------------------
	#  INSTANCIA SINGLETON
	# -------------------------------------------

	private static  $instance;
	public static function makeInstance()
	{
		if (!self::$instance){
		     self::$instance = new __DB__();
		}
		return self::$instance;
	}

	public function __construct()
	{
		if(!isset($this->connection)){  
	   		$this->connection = (mysql_connect("localhost","root","extreban")) or die(mysql_error());  
     		mysql_select_db("ASFALCO_DB",$this->connection) or die(mysql_error());  
     	}	  
    }  
  
	public function query($qry)
	{  
	   	$this->total_qrys++;  
     	$result = mysql_query($qry,$this->connection);  
     	if(!$result){  
     		echo 'MySQL Error: ' . mysql_error();  
     		exit;  
     	}  
     	return $result;   
   	}  
  
  	public function fetch($qry)
	{   
     	return mysql_fetch_array($qry);  
  	}
    
  	public function num_rows($qry)
	{   
    	return mysql_num_rows($qry);  
  	}
    
  	public function getTotalQuerys()
	{  
     	return $this->total_qrys;  
  	}  
  
  	public function lastId()
	{
  		return mysql_insert_id();
  	}

  	public function close()
	{
  		return mysql_close($this->connection);
  	}

}

?>

