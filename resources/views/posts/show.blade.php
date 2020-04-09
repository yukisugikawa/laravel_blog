<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$post->title}}</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <div class="container">
       <h1>{{$post->title}}</h1>
       <p>{!! nl2br($post->body) !!}</p>
    </div>
</body>
</html>