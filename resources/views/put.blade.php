//这是一个模板页面
<html>
<head>
    <title>这是一个put</title>
</head>
<body>
<form action="/update" method="post">
    用户名：<input type="text" name="username"><br>
    密  码：<input type="password" name="password"><br>
    <input type="hidden" name="_method" value="PUT">
    <button>点击提交</button>
    {{csrf_field()}}
</form>
</body>
</html>