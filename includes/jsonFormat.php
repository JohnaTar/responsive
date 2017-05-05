<?php 
	
	$data = isset($_REQUEST['data']) ? $_REQUEST['data'] : null;
	$field = isset($_REQUEST['field']) ? $_REQUEST['field'] : null;
	
	function lastIndexOf($string,$item){
		$index=strpos(strrev($string),strrev($item));
		if ($index){
			$index=strlen($string)-strlen($item)-$index;
			return $index;
		}
			else
			return -1;
	}
	//echo $data;
	
	$rowJson = '{"name":"root","children": [';
	$spt = explode(":-", $data);
	//echo count($spt);
	$i = 0;
	for($i=0;$i<count($spt);$i++){
		$txtTag = "-";
		$txtFound = "0";
		$txtVal = $spt[$i];
		if(substr($txtVal, -1) == ')'){
			$txtTag = substr($txtVal, 0, lastIndexOf($txtVal,'('));
			$txtFound = substr($txtVal, lastIndexOf($txtVal,'(')+1, lastIndexOf($txtVal,')'));
		}
		
		if($txtFound != '0'){
			if($field != null){
				//if( intval($txtFound) > 1 ){
					if($i != 0) $rowJson .= ',';
					$rowJson .= '{"name":"' .$txtTag. '","size":' .$txtFound. '}';
				//}
			}
			else {
				if($i != 0) $rowJson .= ',';
				$rowJson .= '{"name":"' .$txtTag. '","size":' .$txtFound. '}';
			}
		}
	}
	$rowJson .= "]}";
	//echo $i;
	echo $rowJson;
?>