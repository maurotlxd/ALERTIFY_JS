<?php 

class GetData
{
	
	function __construct()
	{
		echo json_encode($_POST);
	}
}


new GetData;
 ?>