<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>南瓜小屋</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<style type="text/css">
    table td{
        text-align: center;
    }
</style>
</head>
<div class="container" style="margin-top: 10px;border: 1px #ccc solid;border-radius: 4px;padding: 50px;">
<a class="btn btn-success" style="float:right" href="/UploadImg/create">新增房屋信息</a>
<h2>发布的房屋信息列表</h2>
<table class="table table-striped table-hover" style="margin-top: 40px;">
    <tr>
        <th>ID</th>
        <th>姓名</th>
        <th>标题</th>
        <th>地址</th>
        <th>面积</th>
        <th>中介公司</th>
        <th>微信号</th>
        <th>小区名称</th>
        <th>行政区域</th>
        <th>地标</th>
        <th>附近地铁</th>
        <th>月租金</th>
        <th>所在楼层</th>
        <th>总楼层</th>
        <th>装修进度</th>
        <th>交房时间</th>
        <th>操作</th>
    </tr>
    <?php foreach ($img_records as $item): ?>
    <tr>
    <td><?php echo $item['id']; ?></td>
    <td><?php echo $item['username']; ?></td>
    <td><?php echo $item['title']; ?></td>
    <td><?php echo $item['addr']; ?></td>
    <td><?php echo $item['square']; ?></td>
    <td><?php echo $item['agency']; ?></td>
    <td><?php echo $item['wechat_num']; ?></td>
    <td><?php echo $item['village']; ?></td>
    <td><?php echo $item['canton']; ?></td>
    <td><?php echo $item['landmark']; ?></td>
    <td><?php echo $item['nearline']; ?></td>
    <td><?php echo $item['rent']; ?></td>
    <td><?php echo $item['floor']; ?></td>
    <td><?php echo $item['total_floor']; ?></td>
    <td><?php echo $item['degree']; ?></td>
    <td><?php echo $item['check_time']; ?></td>
    <!--<td><?php echo $item['filenum']; ?></td>-->
    <!--<td><?php echo $item['create_time']; ?></td> -->
    <!--<td><?php echo $item['update_time']; ?></td>-->
    <td><a href= <?php echo site_url("/UploadImg/show/".$item['id']);?> >查看</a>   
        <a href= <?php echo site_url("/UploadImg/delete/".$item['id']);?> >删除</a>
    <!--<a href="<?php echo site_url("/UploadImg/download/".$item['id']);?>">下载</a></td>-->
    </tr>
    <?php endforeach; ?>
</table>
	
    </div>
</body>
</html>