<?php
switch ($_GET["oper"]) {
	 case "save":
	  save();
	  break;
	 case "update":
	  update();
	  break;
}

function save(){ 
	$data= new SQLServer;
	$check1='';
	$store_name="{call HIS_LuotXepHang_Insert (?,?,?,?)}";

	$params = array(
		$_POST['SoXephang'],
		$_POST['ID_Phong'],
		$_SESSION["user"]["id_user"],
		$_SERVER['REMOTE_ADDR']
	 );
	$data->query( $store_name, $params);
	// print_r($params);
	echo json_encode(array('status' => 'success'));
}
function update(){ 
	$data= new SQLServer;
	$check1='';
	$store_name="{call HIS_LuotXepHang_Update (?,?,?,?,?)}";

	$params = array(
		2,
		'0008',
		3,
		1,
		$_SERVER['REMOTE_ADDR']
	);
	$data->query( $store_name, $params);
	// print_r($params);
	echo json_encode(array('status' => 'success'));
}
?>