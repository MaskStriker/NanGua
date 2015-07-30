<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome</title>
	<style type="text/css">
		.wrap{
			width: 1024px;
			/*overflow: hidden;*/
			margin: 50px auto;
		}

		#editor{
			width:1024px; 
			height: 600px;
			margin: 10px auto;
			float: left;
			clear: right;
		}
		#submit{
			float: right;
			margin-right: 20px;
		}
	</style>
	<script type="text/javascript" charset="utf-8" src="../static/ueditor/ueditor.config.js"></script>
	<script type="text/javascript" src="../static/ueditor/ueditor.all.min.js"></script>
	<script type="text/javascript" charset="utf-8" src="../static/ueditor/lang/zh-cn/zh-cn.js"></script>
	<link href="../static/ueditor/themes/default/css/ueditor.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="wrap">
		<a href="" class="btn btn-primary" id="submit">提交</a>
		<div class="editorArea">
			<div id="editor"></div>
		</div>
		
	</div>
<script type="text/javascript">
	var ue = UE.getEditor('editor');
	var w = {
		init:function() {
			this.eventBind();
		},
		getContent: function () {
	        return ue.getContent();
    	},
		submit:function(data) {
			$.ajax({
				url:"../welcome/save",
				type:"post",
				data:data,
				success:function(result) {
					if (result==="false") {
						alert("抱歉，保存失败")
					}else if (result==="true") {
						location.href = "../welcome/success";
					}else{
						alert(result)
					}
				}
			})
		},
		eventBind:function() {
			$("#submit").on("click",function(e) {
				e.preventDefault();
				var data ={"content":ue.getContent()} ;
				w.submit(data);
			})
		}
	}
	w.init();
</script>
</body>
</html>