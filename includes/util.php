<?php

//require('../Solarium/Autoloader.php');
	//Solarium_Autoloader::register();
	
class Utility {
	

public static function hl_code($str){
    
    //print "Input ".$str."<br>";
    
    //$str = str_replace("<start:spec>", "<font color='blue'>", $str);
    //$str = str_replace("spec", "ssssssssssssssssssssssssss", $str);
    
    return $str;
}
	
	
public static function create_list($name, $array, $type = "checkbox") {
	$retval = "";	
	$id = $name."_";
	if ($type == "checkbox") 
		$name .= "[]";
		
	foreach ($array as $key => $value) {
		$id .= $value;
		$retval .= '<li>';	
		$retval .= '<input type="'.$type.'" name="'.$name.'" id="'.$id.'" value="'.$value.'">';
		$retval .= '<label for="'.$id.'">'.$value.'</label>';
		$retval .= '</li>';		
	}
    return $retval;
}

public static function create_selection($array, $name, $option, $selected = null) {

	$retval = '<select name="'.$name.'" '.$option.= '>';
	foreach ($array as $key => $value) {
		$retval .= '<option';
		if ($value == $selected) $retval .= ' selected="selected"';
		$retval .= ' value="'.$value.'">'.$key.'</option>';
	}
	$retval .= '</select>';  
    return $retval;
}
public static function create_selection_list($array, $name, $option, $selected = null){
	$retval = '<select name="'.$name.'" '.$option.= '">';
	foreach ($array as $key => $value) {
		$retval .= '<option';
		if ($value == $selected) $retval .= ' selected="selected"';
		$retval .= ' value="'.$value.'">'.$key.'</option>';
		$old_value = $key;
	}
	$retval .= '</select>';  
    return $retval;
}
public static function create_selection2($array, $name, $option, $selected = null) {
	$retval = '<select name="'.$name.'" '.$option.= '" style="width:45%;margin-right:10px;">';
	$old_value = "";
	foreach ($array as $key => $value) {
		$sub_key = substr($key,0,strrpos($key, ":"));
		//$retval .= '<option>'.$key.'</option>';
		$count = 0;
		$strpo = 0;
		if($sub_key != $old_value) {
			foreach($array as $key2 => $value2) {
				if($sub_key == substr($key2,0,strrpos($key2,":"))) {
					foreach($value2 as $key3 => $value3){
						//$resval .= $value3.",";
						$count++;
					}
					if(strrpos($sub_key,"_") != ""){
						$strr = substr($sub_key,strrpos($sub_key,"_")+1,strrpos($sub_key,":")-1);
						$resval = $strr;
					}
					else{
						$strr = substr($sub_key,0,strrpos($sub_key,":")-1);
						$resval = $strr;
					}
				}
			}
			//$resval = substr($resval,0,strlen($resval)-1);
			$retval .= '<option';
			if ($value == $selected) $retval .= ' selected="selected"';
			$retval .= ' value="'.$resval.'">'.$resval.'('.$count.')'.'</option>';
		}
		$strpo = 0;
		$resval = "";
		$old_value = $sub_key;
	}
	$retval .= '</select>';
    return $retval;
}

// Create select gene? ?? ?? ?
public static function create_selection_gene($species, $option){

	include_once("genegroup.inc"); 
	$retval = '<select '.$option.' style="width:45%;">';

	if($species == null) return "";
	if(strrpos($species,",") != ""){
		$spcs = explode(",", $species);
		foreach($spcs as $spec){
			foreach ($genes as $key => $value) {
				if(strrpos($key,"_") == ""){
					$exp = explode(" : ",$key);
					$sub_key = $exp[0];
				}
				else {
					$exp = explode(" : ",$key);
					$res = explode("_",$exp[0]);
					$sub_key = $res[1];
				}
				//return $species;
				if($spec == $sub_key){
					foreach($value as $key2){
						$retval .= '<option';
						$retval .= ' value="'.$key2.'">'.$key2.'</option>';
					}
				}
			}
		}
	}
	else{
		foreach ($genes as $key => $value) {
			if(strrpos($key,"_") == ""){
				$exp = explode(" : ",$key);
				$sub_key = $exp[0];
			}
			else {
				$exp = explode(" : ",$key);
				$res = explode("_",$exp[0]);
				$sub_key = $res[1];
			}
			//return $species;
			if($species == $sub_key){
				foreach($value as $key2){
					$retval .= '<option';
					$retval .= ' value="'.$key2.'">'.$key2.'</option>';
				}
			}
		}
	}
	//$retval = '<select '.$option.'>';
	
	$retval .= '</select>';
    return $retval;
}

public static function create_year_dropdown($name = "year", $range = 10, $check = FALSE) {
    // Generate the select
	$current_year = date('Y');
	$retval = '<select name="'.$name.'">';
	for ($i = $range; $i >= 0; $i -= 1) {
		$retval .= '<option value="-'.$i.'"';
		if ($i == $check) $retval .= ' selected="selected"';
		$retval .= '>'.($current_year-$i).'</option>';
	}
	$retval .= '</select>';  
	
    return $retval;
}

// Function to generate pagination array - that is a list of links for pages navigation
// http://harishankar.org/blog/entry.php/function-to-generate-a-pagination-link-list-in-php
public static function paginate ($base_url, $total_records, $start, $rows_limit, $paginate_limit) {
	$total_pages = ceil($total_records/$rows_limit);
	$current_page =  floor($start/$rows_limit) + 1;
    
	$dotshow = true; // Show dots flag - where to show dots?
    $page_array = array (); // Array to store page link list
        
    // walk through the list of pages
	if ($current_page != 1) {
		$page_array[0]['url'] = $base_url.'?limit='.$rows_limit.'&start='.($start-$rows_limit);
		$page_array[0]['text'] = 'Prev';
	}
    for ( $i = 1; $i <= $total_pages; $i ++ )
    {
		// If first or last page or the page number falls 
		// within the pagination limit, generate the links for these pages
		if ($i == 1 || $i == $total_pages || 
			($i >= $current_page - $paginate_limit && 
			$i <= $current_page + $paginate_limit) )
		{
			// reset the show dots flag
			$dotshow = true;
			// If it's the current page, leave out the link
			// otherwise set a URL field also
			if ($i != $current_page) {
				$page_array[$i]['url'] = $base_url.'?limit='.$rows_limit.'&start='.($i-1)*$rows_limit;
			}
			$page_array[$i]['text'] = strval ($i);
		}
		// If ellipses dots are to be displayed (page navigation skipped)
		else if ($dotshow == true)
		{
			// set it to false, so that more than one 
			// set of ellipses is not displayed
			$dotshow = false;
			$page_array[$i]['text'] = "...";
		}
    }
	if ($current_page != $total_pages) {
		$page_array[$total_pages+1]['url'] = $base_url.'?limit='.$rows_limit.'&start='.($start+$rows_limit);
		$page_array[$total_pages+1]['text'] = 'Next';
	}
    // return the navigation array
    return $page_array;
}
public static function paginate_frame ($base_url, $total_records, $start, $rows_limit, $paginate_limit, $query, $sort_type) {


	$total_pages = ceil($total_records/$rows_limit);
	$current_page =  floor($start/$rows_limit) + 1;
    
	$dotshow = true; // Show dots flag - where to show dots?
    $page_array = array (); // Array to store page link list
        
    // walk through the list of pages
	if ($current_page != 1) {
		$page_array[0]['url'] = $base_url.'?summaryfilter='.$query.'&limit='.$rows_limit.'&start='.($start-$rows_limit).'&by='.$sort_type;
		$page_array[0]['text'] = 'Prev';
	}
    for ( $i = 1; $i <= $total_pages; $i ++ )
    {
		// If first or last page or the page number falls 
		// within the pagination limit, generate the links for these pages
		if ($i == 1 || $i == $total_pages || 
			($i >= $current_page - $paginate_limit && 
			$i <= $current_page + $paginate_limit) )
		{
			// reset the show dots flag
			$dotshow = true;
			// If it's the current page, leave out the link
			// otherwise set a URL field also
			if ($i != $current_page) {
				$page_array[$i]['url'] = $base_url.'?summaryfilter='.$query.'&limit='.$rows_limit.'&start='.($i-1)*$rows_limit.'&by='.$sort_type;
			}
			$page_array[$i]['text'] = strval ($i);
		}
		// If ellipses dots are to be displayed (page navigation skipped)
		else if ($dotshow == true)
		{
			// set it to false, so that more than one 
			// set of ellipses is not displayed
			$dotshow = false;
			$page_array[$i]['text'] = "...";
		}
    }
	if ($current_page != $total_pages) {
		$page_array[$total_pages+1]['url'] = $base_url.'?summaryfilter='.$query.'&limit='.$rows_limit.'&start='.($start+$rows_limit).'&by='.$sort_type;
		$page_array[$total_pages+1]['text'] = 'Next';
	}
    // return the navigation array
    return $page_array;
}
public static function print_page($pages) {
	$page_txt = '<div class="listNav"><div class="ln-letters">';
	foreach ($pages as $page) {
		if (isset ($page['url'])) { 
			$page_txt .= '<a href="javascript:void(0)" onclick="window.location=\''.$page['url'].'\'">'.$page['text'].'</a> ';
		} else {
			if ($page['text'] == '...') {
				$page_txt .= '<a class="ln-disabled">'.$page['text'].'</a> ';
			} else {
				$page_txt .= '<a class="ln-selected">'.$page['text'].'</a> ';
			}
		}
	} 
	$page_txt .= '</div></div>';
	return $page_txt;
}
public static function print_pageframe($pages) {
	$page_txt = '<div class="listNav"><div class="ln-letters">';
	foreach ($pages as $page) {
		if (isset ($page['url'])) { 
			//$page_txt .= '<a href="javascript:void(0)" onclick=\'changeFramePage("'.$page['url'].'");\'>'.$page['text'].'</a> ';
			$page_txt .= '<a href="#" onclick="parent.location=\"'.$page['url'].'\">'.$page['text'].'</a> ';
		} else {
			if ($page['text'] == '...') {
				$page_txt .= '<a class="ln-disabled">'.$page['text'].'</a> ';
			} else {
				$page_txt .= '<a class="ln-selected">'.$page['text'].'</a> ';
			}
		}
	} 
	$page_txt .= '</div></div>';
	return $page_txt;
}

}
?>
