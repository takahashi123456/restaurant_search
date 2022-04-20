<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>レストラン検索</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
    <!-- {{ var_dump($detail_restaurant[0]) }} -->
    <div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="max-w-screen-xl px-4 md:px-8 mx-auto">
    <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
      <div>
        <div class="h-64 md:h-auto bg-gray-100 overflow-hidden rounded-lg shadow-lg">
            <img src="{{ $detail_restaurant[0]['photo']['pc']['l'] }}" loading="lazy" alt="{{ $detail_restaurant[0]['name'] }}の画像" class="w-full h-full object-cover object-center" />
        </div>
      </div>

      <div class="md:pt-8">
        <p class="text-indigo-500 font-bold text-center md:text-left">{{ $detail_restaurant[0]['genre']['name'] }}</p>

        <h1 class="text-gray-800 text-2xl sm:text-3xl font-bold text-center md:text-left mb-4 md:mb-6">{{ $detail_restaurant[0]['name'] }}</h1>

        <p class="text-gray-500 sm:text-lg mb-6 md:mb-8">
        キャッチフレーズ： {{ $detail_restaurant[0]['genre']['catch'] }} <br /><br />

        住所： {{ $detail_restaurant[0]['address'] }}<br /><br />

        営業時間： {{ $detail_restaurant[0]['open'] }}<br /><br />
        </p>

        <h2 class="text-gray-800 text-xl sm:text-2xl font-semibold text-center md:text-left mb-2 md:mb-4">詳細情報</h2>
        <ul>
        <li class="w-auto px-5 py-2.5 font-medium bg-blue-50 m-2 hover:bg-blue-100 hover:text-blue-600 text-blue-500 rounded-lg text-sm">平均予算 : {{ $detail_restaurant[0]['budget']['average'] }} </li>
        <li class="w-auto px-5 py-2.5 font-medium bg-blue-50 m-2 hover:bg-blue-100 hover:text-blue-600 text-blue-500 rounded-lg text-sm">定休日 : {{ $detail_restaurant[0]['close'] }} 曜日</li>
        <li class="w-auto px-5 py-2.5 font-medium bg-blue-50 m-2 hover:bg-blue-100 hover:text-blue-600 text-blue-500 rounded-lg text-sm">総席数 : {{ $detail_restaurant[0]['capacity'] }} 席</li>
        <li class="w-auto px-5 py-2.5 font-medium bg-blue-50 m-2 hover:bg-blue-100 hover:text-blue-600 text-blue-500 rounded-lg text-sm">最寄駅からのアクセス : <br> {{ $detail_restaurant[0]['access'] }}</li>
        </ul>
      </div>
    </div>
  </div>
</div>
</body>