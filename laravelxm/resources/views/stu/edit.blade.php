<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>学生信息管理系统</title>
</head>
<body>

	@include("stu.menu");
	<form action="/stu/{{ $st->id }}" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="put">
		姓名: <input type="text" name="name" value="{{ $st->name }}"><br><br>
		年龄: <input type="text" name="age" value="{{ $st->age }}"><br><br>
		性别: <input type="radio" name="sex" value="1" {{ ($st->sex==1) ? 'checked' : '' }} >男
		 	  <input type="radio" name="sex" value="0" {{ ($st->sex==0) ? 'checked' : '' }}>女
				<br><br>
		
		 <input type="submit" value="修改">  <input type="reset">


	</form>
	

</body>
</html>