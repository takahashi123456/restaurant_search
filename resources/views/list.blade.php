<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>レストラン一覧表示</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="{{ asset('js/paginathing.min.js') }}"></script>
    <script src="{{ asset('css/index.css') }}"></script>

</head>
<body>

<div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
    <!-- text - start -->
    <div class="mb-10 md:mb-16">
      <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">周りのお店の検索結果</h2>

      <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">お店の名前をクリックすると、そのお店の詳細が見れます</p>
    </div>
    <!-- text - end -->

    <div id="shoplist" class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-6 xl:gap-8">
      @for ($i = 0; $i < $count; $i++)
      <!-- article - start -->
      <div class="flex flex-col bg-white border rounded-lg overflow-hidden">
        <a href="#" class="group h-48 md:h-64 block bg-gray-100 overflow-hidden relative">
          <img src="{{ $restaurants[$i]['photo']['pc']['l'] }}" loading="lazy" alt="Photo by Minh Pham" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />
        </a>

        <div class="flex flex-col flex-1 p-4 sm:p-6">
          <h2 class="text-gray-800 text-lg font-semibold mb-2">
            <a href="{{ route('detail', ['id'=>$restaurants[$i]['id']]) }}" class="hover:text-indigo-500 active:text-indigo-600 transition duration-100">{{ $restaurants[$i]["name"]}}</a>
          </h2>
          <p class="text-gray-500 mb-8">ジャンル：{{ $restaurants[$i]["genre"]["name"]}}</p>
          <p class="text-gray-500 mb-8">住所：{{ $restaurants[$i]["address"]}}.</p>
        </div>
      </div>
      <!-- article - end -->
      @endfor
    </div>
  </div>
</div>

<script type="text/javascript">
$(function() {
	$('#shoplist').paginathing({//親要素のclassを記述
		perPage: 8,//1ページあたりの表示件数

    liClass: 'page',
		activeClass: 'navi-active',//現在のページ番号に任意のclassを付与できます
	})
});
</script>
<style>
ul.pagination{ width: 40%; margin:1% auto; display: flex; justify-content: space-between; text-align: center;}
li.page, .prev, .next, .first, .last {display: inline; margin:10px;}
</style>
</body>
