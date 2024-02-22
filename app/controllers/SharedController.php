<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * disposisi_id_surat_option_list Model Action
     * @return array
     */
	function disposisi_id_surat_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id_surat AS value,Nomor_Surat AS label FROM surat_masuk";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * disposisi_Sifat_Surat_option_list Model Action
     * @return array
     */
	function disposisi_Sifat_Surat_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,Sifat_Surat AS label FROM sifat_surat";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * disposisi_id_user_option_list Model Action
     * @return array
     */
	function disposisi_id_user_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT DISTINCT id_user AS value , username AS label FROM user ORDER BY label ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * user_user_role_id_option_list Model Action
     * @return array
     */
	function user_user_role_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT role_id AS value, role_name AS label FROM roles";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * user_username_value_exist Model Action
     * @return array
     */
	function user_username_value_exist($val){
		$db = $this->GetModel();
		$db->where("username", $val);
		$exist = $db->has("user");
		return $exist;
	}

	/**
     * user_Email_value_exist Model Action
     * @return array
     */
	function user_Email_value_exist($val){
		$db = $this->GetModel();
		$db->where("Email", $val);
		$exist = $db->has("user");
		return $exist;
	}

	/**
	* barchart_suratmasuk Model Action
	* @return array
	*/
	function barchart_suratmasuk(){
		
		$db = $this->GetModel();
		$chart_data = array(
			"labels"=> array(),
			"datasets"=> array(),
		);
		
		//set query result for dataset 1
		$sqltext = "SELECT  sm.id_surat, sm.Nomor_Surat, sm.Tanggal_Surat, sm.Perihal_Surat, COUNT(sm.Tanggal_Terima) AS count_of_Tanggal_Terima, sm.File_Surat, sm.Diterima_oleh, sm.Asal_Surat FROM surat_masuk AS sm GROUP BY sm.Asal_Surat";
		$queryparams = null;
		$dataset1 = $db->rawQuery($sqltext, $queryparams);
		$dataset_data =  array_column($dataset1, 'id_surat');
		$dataset_labels =  array_column($dataset1, 'Nomor_Surat');
		$chart_data["labels"] = array_unique(array_merge($chart_data["labels"], $dataset_labels));
		$chart_data["datasets"][] = $dataset_data;

		return $chart_data;
	}

}
