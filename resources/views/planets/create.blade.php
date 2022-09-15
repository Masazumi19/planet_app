<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <h1>惑星情報登録</h1>

    <form action="/planets" method="post">
        @csrf
        <p><label for="name1">名前</label>
            <input type="text" name="namae" id="name1" value="{{ old('name1') }}">
        </p>
        <p>
            <label for="name2">名前(英語)</label>
            <input type="text" name="namae2" id="name2" value="{{ old('name2') }}">
        </p>
        
        <p>
            <label for="hankei">半径</label>
            <input type="text" name="hanekei" id="hankei"value="{{ old('hankei') }}">
        </p>
        
        <p>
            <label for="juryou">重量</label>
            <input type="text" name="juryou" id="juryou"value="{{ old('juryou') }}">
        </p>
        
        <input type="submit" value="登録">
    </form>
</body>
