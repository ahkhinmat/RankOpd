<?php
	$username=$_GET["username"];
	$password=$_GET["password"];
	setcookie("tendangnhap", $_GET["c_tendangnhap"],time() + (10 * 365 * 24 * 60 * 60));
	$data= new SQLServer;
	$store_name="{call [HIS_NhanVienKiemTraDangNhap](?,?)}";
	$params =array($username,$password);
	$get_login=$data->select_store( $store_name, $params);
	$excute= new SQLServerResult($get_login);
	$tam= $excute->get_as_array();
	
	//print_r($tam);
	if(count($tam)==0){
		echo "Thông tin đăng nhập không đúng hoặc tài khoản đã bị khóa!";
		return;
	}else{
	 	foreach ($tam as $v) {//duyet toan bo mang tra ve
	  		$_SESSION["user"]["fullname"]= $v["HoLotNhanVien"]." ".$v["TenNhanVien"];
			$_SESSION["user"]["id_user"]= $v["idNhanVien"];
			//$_SESSION["user"]["id_phongban"]= $v["ID_PhongBan"];
			$_SESSION["user"]["year_work"]= date("Y");//năm làm việc
			$_SESSION["user"]["nickname"]= $v["TenNhanVien"];
			$_SESSION["user"]["username"]= $v["Username"];
			/* $_SESSION["user"]["TenPhongBan"]= $v["TenPhongBan"];
			if($v["NgonNgu"]==''){
				$_SESSION["user"]["language"]= 1;
			}else{
				$_SESSION["user"]["language"]= $v["NgonNgu"];
			}
			if($v["ID_ChucVu"]==''){
				$_SESSION["user"]["chucvu"]=0;
			}else{
				$_SESSION["user"]["chucvu"]= $v["ID_ChucVu"];
			}
			$_SESSION["user"]["IsDoctor"]= $v["IsDoctor"]; */
			$_SESSION["user"]["login"]=true;
			echo "true";
	 	}

	}
	
/* 	$_SESSION["com"]["TenBenhVien"]= get_system_one_config("TenBenhVien");
	$_SESSION["com"]["DiaChi"]= get_system_one_config("DiaChiBenhVien");
	$_SESSION["com"]["SoDT"]= get_system_one_config("SoDTBenhVien");
	$_SESSION["com"]["MST"]= get_system_one_config("MSTBenhVien");
	$_SESSION["com"]["MaBenhVien"]= get_system_one_config("MaBenhVien");
	$_SESSION["com"]["LoaiBenhVien"]= get_system_one_config("LoaiBenhVien");
	$_SESSION["com"]["TenCoQuanTrucThuoc"]= get_system_one_config("TenCoQuanTrucThuoc");
	$_SESSION["com"]["LogoBenhVien"]= get_system_one_config("LogoBenhVien");
	$_SESSION["com"]["LogoBenhVienCSS"]= get_system_one_config("LogoBenhVienCSS");
	$_SESSION["com"]["TenBenhVienCSS"]= get_system_one_config("TenBenhVienCSS");
	$_SESSION["com"]["DiaChiCSS"]= get_system_one_config("DiaChiCSS");
	$_SESSION["com"]["SoDTCSS"]= get_system_one_config("SoDTCSS");
	$_SESSION["com"]["TinhTienThuoc"]= get_system_one_config("TinhTienThuoc");
	$_SESSION["com"]["IPServerNode"]= get_system_one_config("IPServerNode");
	$_SESSION["com"]["MauChuReport"]= get_system_one_config("MauChuReport");
	$_SESSION["com"]["HienThiBarcodeBenhNhan"]= get_system_one_config("HienThiBarcodeBenhNhan");
	$_SESSION["com"]["HienThiChuKy"]= get_system_one_config("HienThiChuKy");
	$_SESSION["com"]["DuongDanPhanMem"]= get_system_one_config("GD2_Default_Url");
	
	$_SESSION["com"]["Email"]= get_system_one_config("Email");
	$_SESSION["com"]["EmailCSS"]= get_system_one_config("EmailCSS"); */
	
	
	/* $store_name2="{call GD2_get_phimtat (?)}";
	$params2 =array($_SESSION["user"]["id_user"]);
	$get_phimtat=$data->query( $store_name2, $params2);
	$excute= new SQLServerResult($get_phimtat);
	$tam2= $excute->get_as_array();
	$i=0;
	foreach ($tam2 as $k) {
		if(trim($k['PhimTat']," ")!=""){
		$_SESSION["phimtat"][$i]= array($k['PhimTat'],$k['ID_Control'],$k['PageOpen'],$k['Caption']);
		}
		$i++;
	} */


	$_SESSION["ThongTinBenhNhan"]["ID"]="";
	$_SESSION["ThongTinBenhNhan"]["ten"]="";
	$_SESSION["ThongTinBenhNhan"]["tuoi"]="";
	$_SESSION["ThongTinBenhNhan"]["dienthoai"]="";
	$_SESSION["ThongTinBenhNhan"]["diachi"]="";
	$_SESSION["ThongTinBenhNhan"]["chieucao"]="";
	$_SESSION["ThongTinBenhNhan"]["cannang"]="";
	$_SESSION["ThongTinBenhNhan"]["danhgia1"]="";
	$_SESSION["ThongTinBenhNhan"]["danhgia2"]="";
	$_SESSION["ThongTinBenhNhan"]["danhgia3"]="";
	$_SESSION["ThongTinBenhNhan"]["ps"]="";
	$_SESSION["ThongTinBenhNhan"]["pd"]="";
	$_SESSION["ThongTinBenhNhan"]["hr"]="";
	$_SESSION["ThongTinBenhNhan"]["temp"]="";


	/* $store_name="{call GD2_getcauhinh(?)}";//tao bien khai bao store
	$params =array($_SERVER['REMOTE_ADDR']);//tao param cho store
	$aaa=$data->query( $store_name, $params);//Goi store
	$excute= new SQLServerResult($aaa);//Ket noi lop xu ly SQL và truyen gia tri tra ve tu lop ket noi SQL
	$cauhinh= $excute->get_as_array();
	if(count($cauhinh)==0){
			$_SESSION["cauhinh"]["ID_Kho"]= "";
			$_SESSION["cauhinh"]["ID_KhoBHYT"]= "";
			$_SESSION["cauhinh"]["ID_Tang"]= "";
			$_SESSION["cauhinh"]["ID_PhongBanVatLy"]= "";
	}else{
		foreach ($cauhinh as $v) {
			$_SESSION["cauhinh"]["ID_Kho"]= $v["ID_Kho"];
			$_SESSION["cauhinh"]["ID_KhoBHYT"]= $v["ID_KhoBHYT"];
			$_SESSION["cauhinh"]["ID_Tang"]= $v["ID_Tang"];
			$_SESSION["cauhinh"]["ID_PhongBanVatLy"]= $v["ID_PhongBanVatLy"];
		}
	}

	$store_name="{call GD2_taocauhinhmayin (?,?,?)}";//tao bien khai bao store
	$params = array( $_SERVER['REMOTE_ADDR'], '', '');
	$get_danh_muc_phong_ban=$data->query( $store_name, $params);

	$store_name5="{call GD2_SysVars_Select_ByVarName (?)}";
	$params5 =array('PhimBarCode');
	$get_phimtat=$data->query( $store_name5, $params5);
	$excute= new SQLServerResult($get_phimtat);
	$tam5= $excute->get_as_array();
	$_SESSION["barcode_key"]=$tam5[0][0]; */
?>