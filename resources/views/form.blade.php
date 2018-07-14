<html>
<head>
    <title>这是一个post</title>
</head>
<body>
    <form action="/insert" method="post">
        用户名：<input type="text" name="username"><br>
        密  码：<input type="password" name="password"><br>
        <button>点击提交</button>
        {{csrf_field()}}
    </form>
</body>
</html>