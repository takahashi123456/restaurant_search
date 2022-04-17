<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ホットペッパーAPI</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="{{ asset('js/paginathing.min.js') }}"></script>

</head>
<body>
<div id="shoplist">
@for ($i = 0; $i < $count; $i++)
<div class="max-h-96 bg-white py-6 sm:py-8 lg:py-12">
  <div class="w-2/3  max-w-screen-2xl px-4 md:px-8 mx-auto">
    <div class="md:h-80 flex flex-col sm:flex-row bg-gray-200 rounded-lg overflow-hidden">
      <!-- image - start -->
      <div class="w-full sm:w-1/2 lg:w-2/5 h-48 sm:h-auto order-first sm:order-none bg-gray-300">
        <img src="{{ $restaurants[$i]['photo']['pc']['l'] }}" loading="lazy" alt="Photo by Andras Vas" class="w-full h-full object-cover object-center" />
      </div>
      <!-- image - end -->

      <!-- content - start -->
      <div class="w-full sm:w-1/2 lg:w-3/5 flex flex-col p-4 sm:p-8">
        <h2 class="text-gray-800 text-xl md:text-2xl lg:text-4xl font-bold mb-4"> 店名：{{ $restaurants[$i]["name"]}}</h2>

        <p class="max-w-md text-gray-600 mb-8">住所：{{ $restaurants[$i]["address"]}}</p>

        <div class="mt-auto">
        <a href="{{ route('detail', ['id'=>$restaurants[$i]['id']]) }}" class="inline-block bg-white hover:bg-gray-100 active:bg-gray-200 focus-visible:ring ring-indigo-300 text-gray-800 text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">Contact support</a>
        </div>
      </div>
      <!-- content - end -->
    </div>
  </div>
</div>
@endfor
</div>

<script type="text/javascript">
$(function() {
	$('#shoplist').paginathing({//親要素のclassを記述
		perPage: 10,//1ページあたりの表示件数
		prevText:'前へ',//1つ前のページへ移動するボタンのテキスト
		nextText:'次へ',//1つ次のページへ移動するボタンのテキスト
		activeClass: 'navi-active',//現在のページ番号に任意のclassを付与できます
	})
});
</script>


</body>
