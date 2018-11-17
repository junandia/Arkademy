<?php
	/**
	 * 
	 */
	class Produc extends CI_Model
	{
		function get(){
			$query = $this->db->query("SELECT product_categories.id, product_categories.name, GROUP_CONCAT(products.name) AS products FROM product_categories JOIN products ON product_categories.id = products.category_id GROUP BY product_categories.name ORDER BY product_categories.id ASC")->result();
			return $query;
		}
	}
?>