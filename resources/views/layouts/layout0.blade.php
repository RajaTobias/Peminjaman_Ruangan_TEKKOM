<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
@include ('layouts.css')
    
    <title>Peminjaman Ruangan Teknik Komputer</title> 
</head>
<body>
 
@include ('layouts.sidebar0')

@include ('layouts.navbar')

   @yield('content')

 @include ('layouts.script')

 
</body>
</html>