<?php

App::uses('Helper', 'View');

class CustomHelper extends Helper {

 	function getProcessData($datas,$role_id,$dominion_id,$process_id){
 		
		if(!empty($datas)){
			foreach($datas as $data){
				if($data['Permission']['role_id']==$role_id & $data['Permission']['dominion_id']==$dominion_id & $data['Permission']['process_id']==$process_id){
					
					return true;
				}
			}
			
		}
		return false;
 	}
	
	function authorizeMenuIsCheckedRole($role_id,$rolestr){
		if(!empty($rolestr)){
			$roles = explode('|',$rolestr);
			if(in_array($role_id, $roles)){
				return true;
			}
		}
		return false;
	}
	

}
?>