 <?php
     header('Content-Type:text/html; charset=gb2312');//使用gb2312编码，使中文不会变成乱码    
   	 $grade=getRand();
   	 //echo $grade;
   	 //first
   	 if ($grade==1||$grade==2) {
   	 	# code...
   	 	getGrade("1","一等奖");
   	 }
   	 //second
   	else  if ($grade>1&&$grade<=22) {
   	 	# code...
   	 	getGrade("2","二等奖");
   	 }
   	 //third
   	 else if ($grade>22&&$grade<=62) {
   	 	# code...
   	 	getGrade("3","三等奖");
   	 }
   	 //four
   	else if ($grade>62&&$grade<=262) {
   	 	# code...
   	 	getGrade("4","四等奖");
   	 }
   	 //five
   	 else if ($grade>262&&$grade<=18000) {
   	 	# code...
   	 	getGrade("5","五等奖");
   	 }
   	 //no
   	 else 
   	 {
   	 	getGrade("6","未等奖");
   	 }
    function getGrade($v,$level)
    {
    	//index=1 || index=7 first
	     if($v=="1")
	     {
			$a=array("1"=>"Dog","7"=>"Cat");
		    $backValue=array();
		    $backValue['index']=array_rand($a,1);
		    $backValue['grade']=$level;
		     echo json_encode($backValue);
	 	}
	 	//index=2 || index=8 second
	 	 if($v=="2")
	     {
			$a=array("2"=>"Dog","8"=>"Cat");
		    $backValue=array();
		    $backValue['index']=array_rand($a,1);
		    $backValue['grade']=$level;
		     echo json_encode($backValue);
	 	}
	 	//index=3 || index=9 third
	 	if($v=="3")
	     {
			$a=array("3"=>"Dog","9"=>"Cat");
		    $backValue=array();
		    $backValue['index']=array_rand($a,1);
		    $backValue['grade']=$level;
		     echo json_encode($backValue);
	 	}
	 	//index=4 || index=10 
	 	if($v=="4")
	     {
			$a=array("4"=>"Dog","10"=>"Cat");
		    $backValue=array();
		    $backValue['index']=array_rand($a,1);
		    $backValue['grade']=$level;
		     echo json_encode($backValue);
	 	}
	 	//index=5 || index=11
	 	if($v=="5")
	     {
			$a=array("5"=>"Dog","11"=>"Cat");
		    $backValue=array();
		    $backValue['index']=array_rand($a,1);
		    $backValue['grade']=$level;
		     echo json_encode($backValue);
	 	}
	 	//index=6 || index=0
	 	if($v=="6")
	     {
			$a=array("6"=>"Dog","0"=>"Cat");
		    $backValue=array();
		    $backValue['index']=array_rand($a,1);
		    $backValue['grade']=$level;
		     echo json_encode($backValue);
	 	}

 	}
 	function getRand()
 	{
 		return rand(1,20000);
 	}
 ?>
