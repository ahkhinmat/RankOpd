
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<meta name="description" content="Dynamic tables and grids using jqGrid plugin" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/free-jqgrid/4.13.5/css/ui.jqgrid.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

	<script src="https://cdnjs.cloudflare.com/ajax/libs/free-jqgrid/4.13.5/js/jquery.jqgrid.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
	<style style="text/css">
		.ui-jqgrid .ui-jqgrid-view {
			z-index: auto;
		}
		.ui-jqgrid .ui-jqgrid-view, .ui-jqgrid .ui-paging-info, .ui-jqgrid .ui-pg-selbox, .ui-jqgrid .ui-pg-table {
			font-size: 13px;
		}
		.ui-jqgrid .ui-jqgrid-title {
			float: left;
			margin: 8px;
			color: #fff;
		}
		.ui-jqgrid .ui-jqgrid-title-rtl {
			float: right;
			margin: 8px;
		}
		.ui-jqgrid-view>.ui-jqgrid-titlebar {
			height: 40px;
			line-height: 24px;
			color: #FFF;
			background: #307ECC;
			padding: 0;
			font-size: 15px;
		}
		.ui-jqgrid tr.jqgrow.ui-row-rtl td:last-child {
			border-right: none;
			border-left: 1px solid #E1E1E1;
		}
		.ui-jqgrid .ui-jqgrid-hdiv {
			background-color: #EFF3F8;
			border: 1px solid #D3D3D3;
			border-width: 1px 0 0 1px;
			line-height: 15px;
			font-weight: 700;
			color: #777;
			text-shadow: none;
		}
		.ui-jqgrid .ui-jqgrid-htable thead {
			background-color: #EFF3F8;
		}
		.ui-jqgrid .ui-jqgrid-htable th span.ui-jqgrid-resize {
			height: 45px!important;
		}
		.ui-jqgrid .ui-jqgrid-htable th div {
			padding-top: 12px;
			padding-bottom: 12px;
			overflow: visible;
		}
		.ui-jqgrid-hdiv .ui-jqgrid-htable {
			border-top: 1px solid #E1E1E1;
		}
		.ui-jqgrid-titlebar {
			position: relative;
			top: 1px;
			z-index: 1;
		}
		.ui-jqgrid tr.jqgrow, .ui-jqgrid tr.ui-row-ltr, .ui-jqgrid tr.ui-row-rtl {
			border: none;
					height:auto;
					overflow:hidden;
					padding-right:4px;
					padding-top:2px;
					position:relative;
					vertical-align:text-top;
					white-space:normal !important;
		}
		.ui-jqgrid tr.ui-row-ltr td, .ui-jqgrid tr.ui-row-rtl td {
			border-bottom: 1px solid #E1E1E1;
			padding: 6px 4px;
			border-color: #E1E1E1 !important;
					white-space: normal !important;
					height:auto;
					vertical-align:text-top; 
					padding-top:2px;
		}
		.ui-jqgrid tr.ui-state-highlight.ui-row-ltr td {
			border-right-color: #C7D3A9;
		}
		.ui-jqgrid tr.ui-state-highlight.ui-row-rtl td {
			border-left-color: #C7D3A9;
		}
		.ui-jqgrid-btable .ui-widget-content.ui-priority-secondary {
			background-image: none;
			background-color: #F9F9F9;
			opacity: 1;
		}
		.ui-jqgrid-btable .ui-widget-content.ui-state-hover {
			background-image: none;
			background-color: #EFF4F7;
			opacity: 1;
		}
		.ui-jqgrid-btable .ui-widget-content.ui-state-highlight {
			background-color: #E4EFC9;
		}
		.ui-jqgrid .ui-jqgrid-pager {
			line-height: 15px;
			height: 55px;
			padding-top: 10px!important;
			padding-bottom: 10px!important;
			background-color: #EFF3F8!important;
			border-bottom: 1px solid #E1E1E1!important;
			border-top: 1px solid #E1E1E1!important;
		}
		.ui-jqgrid .ui-pg-input {
			font-size: inherit;
			width: 24px;
			height: 20px;
			line-height: 16px;
			-webkit-box-sizing: content-box;
			-moz-box-sizing: content-box;
			box-sizing: content-box;
			text-align: center;
			padding-top: 1px;
			padding-bottom: 1px;
		}
		.ui-jqgrid .ui-pg-selbox {
			display: block;
			height: 24px;
			width: 60px;
			margin: 0;
			padding: 1px;
			line-height: normal;
		}
		.ui-jqgrid .ui-pager-control {
			height: 50px;
			position: relative;
			padding-left: 9px;
			padding-right: 9px;
		}
		.ui-jqgrid .ui-jqgrid-toppager {
			height: auto!important;
			background-color: #EFF3F8;
			border-bottom: 1px solid #E1E1E1!important;
		}
		.ui-pg-table .navtable .ui-corner-all {
			border-radius: 0;
		}
		.ui-jqgrid .ui-pg-button .ui-separator {
			margin-left: 4px;
			margin-right: 4px;
			border-color: #C9D4DB;
		}
		.ui-jqgrid .ui-jqgrid-btable {
			border-left: 1px solid #E1E1E1;
		}
		.ui-jqgrid .ui-jqgrid-bdiv {
			border-top: 1px solid #E1E1E1;
			overflow-x: hidden;
		}
		.ui-jqgrid .loading {
			position: absolute;
			top: 45%;
			left: 45%;
			width: auto;
			height: auto;
			z-index: 111;
			padding: 6px;
			margin: 5px;
			text-align: center;
			font-weight: 700;
			font-size: 12px;
			background-color: #FFF;
			border: 2px solid #8EB8D1;
			color: #E2B018;
		}
		 
		.ui-jqgrid .ui-jqgrid-labels {
			border-bottom: none;
			background: repeat-x #F2F2F2;
			background-image: -webkit-linear-gradient(top, #F8F8F8 0, #ECECEC 100%);
			background-image: -o-linear-gradient(top, #F8F8F8 0, #ECECEC 100%);
			background-image: linear-gradient(to bottom, #F8F8F8 0, #ECECEC 100%);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff8f8f8',  endColorstr='#ffececec',  GradientType=0);
			padding: 0!important;
			border-left: 1px solid #E1E1E1!important;
		}
		.ui-jqgrid .ui-jqgrid-labels th {
			border-right: 1px solid #E1E1E1!important;
			text-align: left!important;
		}
		.ui-jqgrid-labels th[id*="_cb"]:first-child>div {
			padding-top: 0;
			text-align: center!important;
		}
		.ui-jqgrid-sortable {
			padding-left: 4px;
			font-size: 14px;
			color: #777;
			font-weight: 700;
			/*color: red;*/
			text-align: center!important;
		}
		.ui-jqgrid-sortable:hover {
			color: #547EA8;
			
		}
		th[aria-selected=true] {
			background-image: -webkit-linear-gradient(top, #EFF3F8 0, #E3E7ED 100%);
			background-image: -o-linear-gradient(top, #EFF3F8 0, #E3E7ED 100%);
			background-image: linear-gradient(to bottom, #EFF3F8 0, #E3E7ED 100%);
			background-repeat: repeat-x;
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffeff3f8',  endColorstr='#ffe3e7ed',  GradientType=0);
		}
		th[aria-selected=true] .ui-jqgrid-sortable {
			color: #307ECC;
		}
		.ui-jqgrid .ui-icon {
			text-indent: 0;
			color: #307ECC;
			float: none;
			right: 2px;
		}
		.rtl .ui-jqgrid .ui-icon {
			right: auto;
			left: 2px;
		}
		.ui-jqgrid .ui-icon.ui-state-disabled {
			color: #BBB;
		}
		.ui-jqgrid .ui-icon.ui-state-disabled:hover {
			padding: 0;
		}
		.ui-grid-ico-sort:before {
			display: inline;
			font-size: 12px;
		}
		.ui-icon-asc:before {
			content: "\f0d8"}
		.ui-pg-table>tbody>tr>.ui-pg-button>.ui-icon {
			display: inline-block;
			padding: 0;
			width: 24px;
			height: 24px;
			line-height: 22px;
			text-align: center;
			position: static;
			float: none;
			margin: 0 2px!important;
			color: grey;
			border: 1px solid #CCC;
			background-color: #FFF;
			border-radius: 100%}
		.ui-pg-table>tbody>tr>.ui-pg-button>.ui-icon:hover {
			color: #699AB5;
			border-color: #699AB5;
		}
		.ui-pg-table>tbody>tr>.ui-pg-button>.ui-icon:before {
			width: 20px;
			text-align: center;
			display: inline-block;
		}
		.ui-pg-table>tbody>tr>.ui-pg-button.ui-state-disabled .ui-icon {
			color: #B0B0B0;
			background-color: #F7F7F7;
			border-color: #DDD;
			-moz-transform: scale(.9);
			-webkit-transform: scale(.9);
			-o-transform: scale(.9);
			-ms-transform: scale(.9);
			transform: scale(.9);
		}
		.ui-jqgrid-btable input, .ui-jqgrid-btable select, .ui-jqgrid-btable textarea {
			padding: 2px;
			width: auto;
			max-width: 100%;
			margin-bottom: 0;
		}
		.ui-jqgrid-btable select {
			padding: 1px;
			height: 25px;
			line-height: 25px;
		}
		 
		.ui-pg-div .ui-icon {
			display: inline-block;
			width: 18px;
			float: none;
			position: static;
			text-align: center;
			opacity: .85;
			-webkit-transition: all .12s;
			-o-transition: all .12s;
			transition: all .12s;
			margin: 0 1px;
			vertical-align: middle;
			cursor: pointer;
			font-size: 17px;
		}
		.ui-pg-div .ui-icon:hover {
			-moz-transform: scale(1.2);
			-webkit-transform: scale(1.2);
			-o-transform: scale(1.2);
			-ms-transform: scale(1.2);
			transform: scale(1.2);
			opacity: 1;
			position: static;
			margin: 0 1px;
		}
		.ui-pg-div .ui-icon:before {
			font-family: FontAwesome;
			display: inline;
		}
		 
		 
		.ui-jqgrid .ui-pg-button:hover, .ui-jqgrid .ui-state-disabled:hover {
			padding: 0 1px;
					border-style: none !important;
		}
		.ui-jqgrid .ui-pg-table .ui-pg-button.ui-state-disabled:hover>.ui-pg-div>.ui-icon, .ui-jqgrid .ui-pg-table .ui-pg-button.ui-state-disabled:hover>.ui-separator {
			margin-left: 4px;
			margin-right: 4px;
		}
		@media only screen and (max-width:767px) {
			.ui-jqgrid .ui-jqgrid-pager {
			height: 90px;
		}
		.ui-jqgrid .ui-jqgrid-pager>.ui-pager-control {
			height: 85px;
			padding-top: 10px!important;
		}
		.ui-jqgrid .ui-jqgrid-pager>.ui-pager-control>.ui-pg-table>tbody>tr>td {
			vertical-align: top;
		}
		.ui-jqgrid .ui-jqgrid-pager>.ui-pager-control>.ui-pg-table>tbody>tr>td#grid-pager_center {
			width: 0!important;
			position: static;
		}
		.ui-jqgrid .ui-jqgrid-pager>.ui-pager-control>.ui-pg-table>tbody>tr>td#grid-pager_center>.ui-pg-table {
			margin: 36px auto 0;
			position: absolute;
			right: 0;
			left: 0;
			text-align: center;
		}
		.ui-jqgrid .ui-jqgrid-pager .navtable {
			height: auto;
		}
		}
		.ui-jqgrid .ui-widget-header {
		   /* background-color: orange;cái này tô màu header
		    background-image: none*/
		    /*color: #ccc;*/
		}
 
    </style>
</head>
<body>
	<div  class="container col-md-12 none-pad-mar" style="padding:10px;">
		<div id="header" class="col-md-12">
			<label style="padding-left: 20px">Phòng:&nbsp;</label>
			<select class="selectpicker" data-live-search="true">
			   <?php
				$data= new SQLServer;
				$store_name="{call HIS_DM_PhongGetAll()}";
				$params =array();
				$get=$data->query( $store_name, $params);
				$excute= new SQLServerResult($get);
				$ds= $excute->get_as_array();

				foreach ($ds as $val) {
					echo '<option id="'.$val["idPhong"].'" data-tokens="'.$val["idPhong"].'">'.$val["TenPhong"].'</option>';
				}
				?>
			</select>
			<input style="display: none;" type="text" id="idselectbox_phong_hide" name="">
			 <input type="checkbox" name="goinho" id="goinho"> <label for="goinho"> DS gọi nhỡ</label> 
		</div>
		<div class="col-md-12 none-pad-mar" >
			<div class="col-md-12">
				<div  class="col-sm-12" style="margin-top: 10px">
					<table id="grid-table" style="width:100%; padding:0px!important;"></table>
					<div id="grid-pager" ></div>
				</div>
			</div>
			<!-- <div class="col-md-2" style="border: 1px solid #ccc; ">  123</div> -->
		</div>
		<div id="footer" class="col-md-12"></div>
    </div>
</body>                                
                       
<script type="text/javascript" >
    $('select.selectpicker').on('change', function(){
      var id = $(this).children(":selected").attr("id");
       $("#idselectbox_phong_hide").val(id);
    });
	jQuery(function($) {
		
		var grid_selector = "#grid-table";
		var pager_selector = "#grid-pager";              

		jQuery(grid_selector).jqGrid({
			url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach&idphong=1&goinho=0',
			datatype: "json",
			height: 380,
			width:1300,//880
			colNames:['idXepHang','STT', 'Số phiếu','Trạng thái','Gọi','Bắt đầu','Xong','Đẩy','Gọi nhỡ'],
			colModel:[
			{name:'idXepHang',index:'idXepHang', width:100, hidden: true},
			{name:'STT',index:'STT', width:100, hidden: true},
			{name:'SoXepHang',index:'SoXepHang', width:100},
			{name:'TenTrangThai',index:'TenTrangThai', width:260},
			{name:'Goi',index:'Goi', width:90,formatter:btn_goi},
			{name:'BatDau',index:'BatDau', width:90, formatter:btn_batdau},
			{name:'Xong',index:'Xong', width:90,formatter:btn_xong},
			{name:'Day',index:'Day', width:90,formatter:btn_day},
			{name:'GoiNho',index:'GoiNho', width:90,formatter:btn_goinho},
			],
			loadonce: true,
			rowNum:1000,
			rowList:[10,20,30],
			pager : pager_selector,
			altRows: true,                                                 
			multiselect: false,
			multiboxonly: false,
			caption: "Lưới gọi loa",
			loadComplete : function() {
					reloaddata();
					var table = this;
					setTimeout(function(){
								updatePagerIcons(table);
					}, 0);
			}
		});
		//replace icons with FontAwesome icons like above
		function btn_goi(cellvalue, options, rowObject){
			return '<center><button onclick="UpdateRow('+cellvalue+',2)" type="button" class="btn btn-primary" >Gọi</button></center>';
		}
		function btn_batdau(cellvalue, options, rowObject){
			return '<center><button onclick="UpdateRow('+cellvalue+',3)"  type="button" class="btn btn btn-success">Bắt đầu</button></center>';
		}
		function btn_xong(cellvalue, options, rowObject){
			return '<center><button onclick="UpdateRow('+cellvalue+',4)"  type="button" class="btn btn-info">Xong</button></center>';
		}
		function btn_day(cellvalue, options, rowObject){
			return '<center><button onclick="UpdateRow('+cellvalue+',5)"  type="button" class="btn btn-warning">Đẩy</button></center>';
		}
		function btn_goinho(cellvalue, options, rowObject){
			return '<center><button onclick="UpdateRow('+cellvalue+',6)"  type="button" class="btn btn-warning">Gọi nhở</button></center>';
		}

		function updatePagerIcons(table) {
			var replacement =
			{
				'ui-icon-seek-first' : 'ace-icon fa fa-angle-double-left bigger-140',
				'ui-icon-seek-prev' : 'ace-icon fa fa-angle-left bigger-140',
				'ui-icon-seek-next' : 'ace-icon fa fa-angle-right bigger-140',
				'ui-icon-seek-end' : 'ace-icon fa fa-angle-double-right bigger-140'
			};
			$('.ui-pg-table:not(.navtable) > tbody > tr > .ui-pg-button > .ui-icon').each(function(){
				var icon = $(this);
				var $class = $.trim(icon.attr('class').replace('ui-icon', ''));
			   
				if($class in replacement) icon.attr('class', 'ui-icon '+replacement[$class]);
			})
		}
		// jQuery("#grid-table").jqGrid('filterToolbar', { stringResult: true, searchOnEnter: false, defaultSearch: "cn" });
	});
	
	$( document ).ready(function() {
	    
	});
	
	function reloaddata(){
		//$("#grid-table").jqGrid("GridUnload");
		//$("#grid-table").trigger("reloadGrid", { fromServer: true, page: 1 });
		idphong=1;
		if($('#goinho').is(":checked")){
			goinho=1;
		}else{
			goinho=0;
		}
	  $("#grid-table").setGridParam({url:'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=data_danhsach&idphong='+idphong+'&goinho='+goinho,datatype:'json'}).trigger('reloadGrid');
	}	
	function UpdateRow(id,loai){
		$.ajax({
            type: 'POST',
            async : false,
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller&oper=update',
            data:{
              id:id,
              loai:loai
            },
            success: function(data, status, xhr) {
              tooltip_message("Đã lưu");
			  reloaddata()
            }
          });
	}
</script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
</html>
 