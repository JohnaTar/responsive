<?php 

   DEFINE ('DB_USER', 'nvi');
   DEFINE ('DB_PASSWORD', '1a2s3d4f5g');
   DEFINE ('DB_HOST', '127.0.0.1');
   DEFINE ('DB_NAME', 'nvi');
   $connection = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
    mysql_select_db(DB_NAME);
    mysql_query("SET NAMES UTF8");

   function after ($this, $inthat)
    {
        if (!is_bool(strpos($inthat, $this)))
        return substr($inthat, strpos($inthat,$this)+strlen($this));
    };


    $query = "SELECT id, subject, content, filepath as dpath, created_date, start_date, end_date, DATEDIFF(end_date, start_date) as numday FROM news ORDER BY created_date  ";
    $result = mysql_query($query);
	$str = array();
    	while($row = mysql_fetch_array($result)) {
//	echo $row['content'];
		array_push($str,$row['created_date']);
			$tlink=after ('http', $row['content']);
            		$tlink="http".$tlink;
		
		$content="<a href='".$tlink."' target='_blank'>".$row['content']."</a>";
		 array_push($str,$content);
		 //array_push($str,$row['content']);
        }


        echo json_encode($str);

?>
