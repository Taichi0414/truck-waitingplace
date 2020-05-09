<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="ja">
 <head>
 <title></title>
 <!-- CSS と JavaScript -->
 
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
 
 </head>
 <body>
 <div class="container">
 <nav class="navbar navbar-default">
 <!-- ナビバーの内容 -->
 </nav>
 </div>
 @yield('content')
 </body>
</html>
