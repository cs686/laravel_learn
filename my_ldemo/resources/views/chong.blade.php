<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>欢迎使用我的模板</h1>
    @foreach($peoples as $people)
        <li>{{ $people }}</li>
    @endforeach
</body>
</html>