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
    <button onclick="getPosition();" class="m-auto block bg-gray-800 hover:bg-gray-700 active:bg-gray-600 focus-visible:ring ring-gray-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3 ">位置情報を取得する</button>
    </div>
    <div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
    <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-8">Login</h2>

    <form class="max-w-lg border rounded-lg mx-auto" method="POST" action="/list">
    {{ csrf_field() }}

        <div class="flex flex-col gap-4 p-4 md:p-8">
            <div>
                <label for="latitude" class="inline-block text-gray-800 text-sm sm:text-base mb-2" >緯度</label>
                <input name="latitude" id="latitude"  type="text" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" readonly/>
        </div>

        <div>
            <label for="longitude" class="inline-block text-gray-800 text-sm sm:text-base mb-2" >経度</label>
            <input name="longitude"id="longitude" type="text"  class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" readonly/>
        </div>
        <div>
            <label for="range" class="inline-block text-gray-800 text-sm sm:text-base mb-2">検索距離</label>
            <select name="range" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" >
                <option value="1">300m</option>
                <option value="2">500m</option>
                <option value="3">1000m</option>
                <option value="4">2000m</option>
                <option value="5">3000m</option>
            </select>
        </div>
        <div>
            <label for="keyword" class="inline-block text-gray-800 text-sm sm:text-base mb-2" >フリーワード検索</label>
            <input name="keyword" id="longitude" type="text"  class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"/>
        </div>
        <button class="block bg-gray-800 hover:bg-gray-700 active:bg-gray-600 focus-visible:ring ring-gray-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3" type="submit" value="">送信</button>
      </div>

      <div class="flex justify-center items-center bg-gray-100 p-4">
        <p class="text-gray-500 text-sm text-center">位置情報を取得できませんか？<p class="text-indigo-500 hover:text-indigo-600 active:text-indigo-700 transition duration-100">位置情報を渡すに許可をしてください</p></p>
      </div>
    </form>
  </div>
</div>
    <script src="{{ asset('/js/geolocation.js') }}"></script>

</body>
</html>