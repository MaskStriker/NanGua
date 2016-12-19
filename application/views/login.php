<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<style>
		#container{
			width: 500px;
			margin: 0 auto;
			margin-top: 10%;
			border-radius: 4px;
		}
	</style>
</head>
<body>

<div id="container">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Login</h3>
	  </div>
	  <div class="panel-body">
		<form class="form-horizontal" method="post" action="login/loginHandler">
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
		    <div class="col-sm-9">
		      <input type="" class="form-control" id="username" name="username" placeholder="用户名">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
		    <div class="col-sm-9">
		      <input type="password" class="form-control" id="password" name="password" placeholder="密码">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <div class="checkbox">
		        <label>
		          <input type="checkbox"> 记住账号
		        </label>
		        <label id="errorTips" style="display:none;cursor:default;color:red">账户或密码错误，请重新输入!</label>
		      </div>
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-12">
		      <button type="submit" id="submit" class="btn btn-default"><strong>登&nbsp&nbsp录</strong></button>
		      <button id="register" class="btn btn-default"><strong>注&nbsp&nbsp册</strong></button>
		    </div>
		  </div>
		</form>
	  </div>
	</div>

</div>
<script>
	var login = {
		init:function() {
			this.eventBind();
		},
		submit:function(data) {
			$.ajax({
				url:"login/loginHandler",
				type:"post",
				data:data,
				success:function(result) {
					if (result==="false") {
						$("#errorTips").show();
					}else if (result==="true") {
						location.href = "upload";
					};
				}
			})
		},
		eventBind:function() {
			$("#submit").on("click",function(e) {
				e.preventDefault();
				var data={};
				data.username = $("#username").val();
				data.password = $("#password").val();
				login.submit(data);
			})
		}
	}
	$(function() {
		login.init();
	})

</script>
</body>
</html>