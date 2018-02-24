<?php
switch ($_GET["oper"]) {
	 case "update":
	  update();
	  break;
}

function update(){ 
	$data= new SQLServer;
	$store_name="{call HIS_XepHang_Update (?,?,?,?)}";
	$params = array(
		$_POST['id'],
		$_POST['loai'],
		1,
		$_SERVER['REMOTE_ADDR']
	 );
	$data->query( $store_name, $params);

	echo json_encode(array('status' => 'success'));
}
?>