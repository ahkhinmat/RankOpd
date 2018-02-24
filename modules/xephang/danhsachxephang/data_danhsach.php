<?php
$data= new SQLServer;
$store_name="{call HIS_DanhSachXepHangGetByidPhong(?,?)}";
$params = array($_GET['idphong'],$_GET['goinho']);
$get_danh_muc_phong_ban=$data->query( $store_name, $params);
$excute= new SQLServerResult($get_danh_muc_phong_ban);
$tam= $excute->get_as_array();
$responce='';

$i=0;
foreach ($tam as $row) {
  $responce[] = array(
    'idXepHang'         => $row["idXepHang"],   
    'SoXepHang'    	    => $row["SoXepHang"],
    'TenTrangThai' 	    => $row["TenTrangThai"],
	'Goi'         => $row["idXepHang"],   
	'BatDau'         => $row["idXepHang"],   
	'Xong'         => $row["idXepHang"],   
	'Day'         => $row["idXepHang"],   
	'GoiNho'         => $row["idXepHang"],   
    );
  
  $i++; 
}   
echo json_encode($responce);
?>