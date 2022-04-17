<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ホットペッパーAPI</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="w-1/2 m-auto flex pt-10">
    <ul class="w-full bg-gray-200">
    <li class="text-center"> <button onclick="getPosition();" class="w-1/3 ">位置情報を取得する</button></li>
    </ul>
    </div>
    <form class="w-1/2 m-auto flex" method="POST" action="/list" >
    {{ csrf_field() }}
    <ul class="w-full bg-gray-200">
        <li class="text-center"><input class="w-2/3 h-12 px-4 mx-auto my-4 text-center text-lg text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" id="latitude" name="latitude" type="text" readonly /></li>
        <li class="text-center"><input class="w-2/3 h-12 px-4 mx-auto my-4 text-center text-lg text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" id="longitude" name="longitude" type="text" readonly></li>
        <li class="text-center"><select class="w-2/3 h-12 px-4 mx-auto my-4 text-center text-lg text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" name="range">
            <option value="1">300m</option>
            <option value="2">500m</option>
            <option value="3">1000m</option>
            <option value="4">2000m</option>
            <option value="5">3000m</option>
        </select></li>
        <li class="text-center"> <input type="submit" value="送信"></li>
        </ul>
    </form>
    <script src="{{ asset('/js/geolocation.js') }}"></script>

</body>
</html>