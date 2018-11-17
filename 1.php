<?php
	$itemID = 12341822;
	$itemName = "FGX Flannel Shirt";
	$price = 195000;
	$availableColodAndSize = [
		"Color" => [
			"blue-black" => [
				"size" => ["M","L","XL"]
			],
			"black-white" => [
				"size" => ["L"]
			]
		]
	];
	$freeShiping = false;

	function tampil($itemID,$itemName,$price,$availableColodAndSize,$freeShiping){
		return json_encode(
			array(
				'itemID' => $itemID,
				'itemName' => $itemName,
				'price' => $price,
				'availableColodAndSize' => $availableColodAndSize,
				'freeShiping' => $freeShiping
			),JSON_PRETTY_PRINT
		);
	}

	echo tampil($itemID,$itemName,$price,$availableColodAndSize,$freeShiping)
?>