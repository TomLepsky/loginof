<?php

$image = ["id" => 1,
		  "src" => "./image/image1.jpeg"
		];

countImageShow($image['id']);
echo $image['src'];

function countImageShow(int $imageId) : void {
	$db = getDBConnection();

	$query = "UPDATE `image` SET `quantity`=`quantity` + 1 WHERE id=?";
	$result = $db->prepare($query);
	$result->execute(array($imageId));
}

function getDBConnection() : PDO {
	$dsn = "mysql:host=hostdbname=dbname;chartset=utf8";
	$db = new PDO($dsn, "user", "password");
	return $db;
}