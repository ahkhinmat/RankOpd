<!DOCTYPE html>
<html>
<head>
  <title>Boostrap</title>
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
  <style type="text/css">
    fieldset.scheduler-border {
        border: 1px groove #ddd !important;
        padding: 0 1.4em 1.4em 1.4em !important;
        margin: 0 0 1.5em 0 !important;
        -webkit-box-shadow:  0px 0px 0px 0px #000;
              box-shadow:  0px 0px 0px 0px #000;
    }

      legend.scheduler-border {
          font-size: 1.2em !important;
          font-weight: bold !important;
          text-align: left !important;
          width:auto;
          padding:0 10px;
          border-bottom:none;
      }
  </style>
</head>
<body>
  
  <div class="container">
    <div class="col-md-6">
      <fieldset class="scheduler-border">
      <legend class="scheduler-border">Nhận phiếu</legend>
        <form>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Số phiếu</label>
            <div class="col-sm-9">
              <input style="width: 220px" type="email" class="form-control" id="SoPhieu" placeholder="Số phiếu">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-3 col-form-label">Phòng</label>
            <div class="col-sm-9" style="width: 300px">
      				<select class="selectpicker" data-live-search="true">
      				<?php
        				$data= new SQLServer;
        				$store_name="{call HIS_DM_PhongKhamChuyenMonGet()}";
        				$params =array();
        				$get=$data->query( $store_name, $params);
        				$excute= new SQLServerResult($get);
        				$ds= $excute->get_as_array();

        				foreach ($ds as $val) {
        					echo '<option id="'.$val["idPhong"].'" data-tokens="'.$val["idPhong"].'">'.$val["TenPhong"].'</option>';
        				}
      				?>
             </select>
             <input style="display: none;" id="selectbox_phong_hide" type="text" name="">
            </div>
          </div>
          
        </form>
			<div class="form-group row">
            <div class="offset-sm-12 col-sm-10">
              <button id="btn_insert_goiloa" class="btn btn-primary">Lưu</button>
              <button id="btn_update_goiloa" class="btn btn-primary">Cập nhật</button>
            </div>
          </div>
      </fieldset>
    </div>
  </div>


</body>
  <script type="text/javascript">
  $( document ).ready(function() {
    $('.selectpicker').selectpicker();

    $('select.selectpicker').on('change', function(){
      var id = $(this).children(":selected").attr("id");
       $("#selectbox_phong_hide").val(id);
    });

      $("#btn_insert_goiloa").click(function(){
          $.ajax({
            type: 'POST',
            async : false,
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_goiloa&oper=save',
            data:{
              SoXephang:$("#SoPhieu").val(),
              ID_Phong:1,
              ID_NhanVien:1
            },
            success: function(data, status, xhr) {
              tooltip_message("Lưu thành công!");
            }
          });
      });
      $("#btn_update_goiloa").click(function(){
          $.ajax({
            type: 'POST',
            async : false,
            url: 'resource.php?module=<?= $modules ?>&view=<?= $view ?>&action=controller_goiloa&oper=update',
            data:{
              ID_LuotXepHang:1,
              SoXephang:1,
              ID_Phong:1,
              ID_NhanVien:1
            },
            success: function(data, status, xhr) {
              tooltip_message("Chỉnh sửa thành công!");
            }
          });
      });
  });

  </script>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
</html>