<form action="test" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    用户名:
    <input type="text" name="username"><br>
    密码:
    <input type="password" name="password"><br>
    <input type="submit" value="提交">
</form>