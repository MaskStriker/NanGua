<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>南瓜小屋</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<style type="text/css">
	#biteMe label{
		margin: 0;
		padding: 0;
	}
	#biteMe .form-group div{
		padding: 0;
		margin-right: 50px;
	}
</style>
</head>
<body>

<div class="container" style="margin-top: 10px;border: 1px #ccc solid;border-radius: 4px;padding: 50px;">
	<h2 style="margin-bottom: 30px;display:inline-block">请填入以下信息：</h2>
	<a href="/UploadImg/" class="btn btn-warning" style="float:right">返回列表</a> 
<?php echo validation_errors(); ?>

<?php
    $attributes = array('class' => 'form-horizontal', 'id' => 'biteMe');
    echo form_open_multipart('UploadImg/create',$attributes);
?>
   <div class="form-group"> 
		    <label for="text" class="col-lg-1">标题：</label>
		    <div class="col-lg-3">
		    	<input type="text" class="form-control" name="title">
		    </div>
	    </div>
	    
	    <div class="form-group"> 
			<label for="text" class="col-lg-1">中介公司：</label>
			<div class="col-lg-3">
				<input type="text" class="form-control" name="agency">
			</div>
		    <label for="text" class="col-lg-1">微信号：</label>
		    <div class="col-lg-3">
		    	<input type="text" class="form-control" name="wechat_num">
		    </div>
	    </div>

	    <div class="form-group"> 
			<label for="text" class="col-lg-1">小区名称：</label>
			<div class="col-lg-3">
				<input type="text" class="form-control" name="village">
			</div>
		    <label for="text" class="col-lg-1">行政区域：</label>
		    <div class="col-lg-3">
		    	<input type="text" class="form-control" name="canton">
		    </div>
	    </div>
	 	
	    <div class="form-group"> 
			<label for="text" class="col-lg-1">附近地标：</label>
			<div class="col-lg-3">
				<input type="text" class="form-control" name="landmark">
			</div>
		    <label for="text" class="col-lg-1">附近地铁：</label>
		    <div class="col-lg-3">
		    	<input type="text" class="form-control" name="nearline">
		    </div>
	    </div>	  
	    <div class="form-group"> 
		    <label for="text" class="col-lg-1">地址：</label>
		    <div class="col-lg-7">
		    	<input type="text" class="form-control" name="addr">
		    </div>
	    </div>  
	    <div class="form-group"> 
			<label for="text" class="col-lg-1">面积(㎡)：</label>
			<div class="col-lg-1">
				<input type="text" class="form-control" name="square">
			</div>
		    <label for="text" class="col-lg-1">楼层：</label>
		    <div class="col-lg-1">
		    	<input type="text" class="form-control" name="floor">
		    </div>
		    <label for="text" class="col-lg-1">总楼层：</label>
		    <div class="col-lg-1">
		    	<input type="text" class="form-control" name="total_floor">
		    </div>
	    </div>
	    <div class="form-group"> 
			<label for="text" class="col-lg-1">月租金(元)：</label>
			<div class="col-lg-1">
				<input type="text" class="form-control" name="rent">
			</div>
		    <label for="text" class="col-lg-1">装修：</label>
		    <div class="col-lg-1">
		    	<input type="text" class="form-control" name="degree">
		    </div>
		    <label for="text" class="col-lg-1">入住时间：</label>
		    <div class="col-lg-1">
		    	<input type="text" class="form-control" name="check_time">
		    </div>
	    </div>
	    
	    <!--<div class="form-group"> -->
		   <!-- <label for="text" class="col-lg-1">文件数：</label>-->
		   <!-- <div class="col-lg-3">-->
		   <!-- 	<input type="text" class="form-control" name="filenum">-->
		   <!-- </div>-->
	    <!--</div>-->
    <div class="form-group"> 
		    <label for="text" class="col-lg-1">上传图像文件：</label>
		    <div class="col-lg-3"><input type="file" class="form-control" name="userfile1"></div>
		    <div class="col-lg-3"><input type="file" class="form-control" name="userfile2"></div>
		    <div class="col-lg-3"><input type="file" class="form-control" name="userfile3"></div>
		    <div class="col-lg-3"><input type="file" class="form-control" name="userfile4"></div>
		    <div class="col-lg-3"><input type="file" class="form-control" name="userfile5"></div>
		    <div class="col-lg-3"><input type="file" class="form-control" name="userfile6"></div>
		    <label for="text" class="col-lg-1"></label>
		    <div class="col-lg-3"><input type="file" class="form-control" name="userfile7"></div>
		    <div class="col-lg-3"><input type="file" class="form-control" name="userfile8"></div>
		    <div class="col-lg-3"><input type="file" class="form-control" name="userfile9"></div>
		    <label for="text" class="col-lg-1"></label>
		    <div class="col-lg-3"><input type="file" class="form-control" name="userfile10"></div>
		    <div class="col-lg-3"><input type="file" class="form-control" name="userfile11"></div>
		    <div class="col-lg-3"><input type="file" class="form-control" name="userfile12"></div>
		    
	    </div>
    <input type="submit" class="btn btn-success"  name="submit" value="创建房屋信息"  style="float:right;margin-top: 30px;" />
</form>


</div>
</body>
</html>