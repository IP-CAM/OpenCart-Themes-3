<?php
class ModelPhpnerSettings extends Model
{
	public function editSetting($code, $data, $store_id = 0)
	{

		if(isset($data['config_logo'])) {
			$this->db->query(
				"UPDATE " . DB_PREFIX . "setting
		 SET store_id = '" . (int)$store_id . "',
		  `code` = '" . $this->db->escape($code) . "',
		  `key` =  'config_logo',
		  `value` = '" . $this->db->escape($data['config_logo']) . "'
		 WHERE  `key` = 'config_logo' ");
		}

		if(isset($data['config_icon'])) {
			$this->db->query(
		"UPDATE " . DB_PREFIX . "setting
		 SET store_id = '" . (int)$store_id . "',
		  `code` = '" . $this->db->escape($code) . "',
		  `key` =  'config_icon',
		  `value` = '" . $this->db->escape($data['config_icon']) . "'
		 WHERE  `key` = 'config_icon' ");
		}

		if(isset($data['text_near_logo'])) {
			$field = $this->db->query("SELECT `code` FROM ".DB_PREFIX."setting WHERE `key` = 'text_near_logo'");
			if($field->num_rows) {
				$sql = "UPDATE " . DB_PREFIX . "setting
				 SET store_id = '" . (int)$store_id . "',
				  `code` = '" . $this->db->escape($code) . "',
				  `key` =  'text_near_logo',
				  `value` = '" . $this->db->escape($data['text_near_logo']) . "'
				 WHERE  `key` = 'text_near_logo' ";

			}else{
				$sql = "INSERT INTO " . DB_PREFIX . "setting (`store_id`,	 `code`, `key`, `value`)
				 VALUES 
				 ('" . (int)$store_id . "','" . $this->db->escape($code) . "','text_near_logo','" . $this->db->escape($data['text_near_logo']) . "')
				 ON DUPLICATE KEY UPDATE 
				 `key`  =  'text_near_logo' ";
			}

			$this->db->query($sql);
		}
	}

	public function getSetting($name)
	{
		$sql = "SELECT * FROM ". DB_PREFIX ."setting WHERE `key` = '". $name ."'";
		$res = $this->db->query($sql);

		return $res->row['value'];

	}
}