<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Imágenes Subidas</h1>
@foreach ($images as $image)
    <div>
        <h2>{{ $image->title }}</h2>
        <img src="data:image/jpeg;base64,{{ $image->image_base64 }}" alt="{{ $image->title }}" style="max-width: 300px;">
    </div>
@endforeach

</body>
</html>