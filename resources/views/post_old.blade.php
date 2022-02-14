<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/app.css">
<script src="/app.js"></script>
</head>
<body>
  <h1>{{$post->title}}</h1>
  <div>
      {!! $post->body; !!}
  </div>
  by <a href="/author/{{$post->author->username}}">{{$post->author->name}}</a> <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
</body>
</html>