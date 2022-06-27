<?php 
  if(isset($_GET['page'])){
    switch ($page = $_GET['page']) {
    	case 'home':
    		$menu0 = "active";
    		break;
    	case '1A':
    		$menu1A = "active";
    		break;
    	case '2A':
    		$menu2A = "active";
    		break;
    	case '3A':
    		$menu3A = "active";
    		break;
    	case '4A':
    		$menu4A = "active";
    		break;
    	case '5A':
    		$menu5A = "active";
    		break;
    	case '1B':
    		$menu1B = "active";
    		break;
    	case '2B':
    		$menu2B = "active";
    		break;
    	case '3B':
    		$menu3B = "active";
    		break;
    	case '4B':
    		$menu4B = "active";
    		break;
    	case '5B':
    		$menu5B = "active";
    		break;
    	case '1C':
    		$menu1C = "active";
    		break;
    	case '2C':
    		$menu2C = "active";
    		break;
    	case '3C':
    		$menu3C = "active";
    		break;
    	case '4C':
    		$menu4C = "active";
    		break;
    	case '5C':
    		$menu5C = "active";
    		break;
    	
    	default:
    		# code...
    		break;
    }
  }
?>