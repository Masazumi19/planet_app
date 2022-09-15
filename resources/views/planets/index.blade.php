<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>惑星一覧</h1>

    <table border="1">
        <tr>
            <th>名前</th>
            <th>名前(英語)</th>
            <th>半径</th>
            <th>重量</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <th>水星</th>
            <th>MERCURY</th>
            <th>2439</th>
            <th>3310</th>
            <th>詳細</th>
            <th>編集</th>
            <th><input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};"></th>
        </tr>
        <tr>
            <th>金星</th>
            <th>VENUS</th>
            <th>6052</th>
            <th>48700</th>
            <th>詳細</th>
            <th>編集</th>
            <th><input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};"></th>
        </tr>
    </table>
    <p><a href="">新規登録</a></p>
