<?php 
/**
* 
*/
class Resi extends CI_Model
{
	//======================================
	function tampil_data(){
		// $data= $this->db->get('resi');
		// return $data;
		$sumber = 'http://papaside.com/data.php';
 		$konten = file_get_contents($sumber);
 		return $konten;
	}
	
}
?>