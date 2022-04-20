# 簡易仕様書サンプル

### 作者
長谷部 佑宜
### アプリ名
現在地で見つけるレストランアプリ

#### こだわったポイント
飲食店の検索条件を選択できるようにしました。
フリーワード検索を導入し、条件を絞りやすくしました。
見やすいデザインにするようにしました。

### 公開したアプリの URL（Store にリリースしている場合）
http://35.78.176.35/search
AWSを用いて公開したのですが、私の力不足により、SSL化を行うことができていないため、Geolocation APIが使うことができず、位置情報を取得することができません。
そのため、localで環境構築し、検証していただけると幸いです。

### 該当プロジェクトのリポジトリ URL（GitHub,GitLab など Git ホスティングサービスを利用されている場合）
https://github.com/takahashi123456/restaurant_search

## 開発環境
### 開発環境
VisualStudioCode
Docker 

### 開発言語
PHP 8.1.4

## 動作対象端末・OS
### 動作対象OS
Chrome
Safari

## 開発期間
7日間

## アプリケーション機能

### 機能一覧
- レストラン検索：ホットペッパーグルメサーチAPIを使用して、現在地周辺の飲食店を検索する。
- 位置情報取得：Geolocation APIを使用して現在地を取得する。
- レストラン情報取得：ホットペッパーグルメサーチAPIを使用して、飲食店の詳細情報を取得する。


### 画面一覧
- 検索画面 ：フリーワードや現在地を指定してレストランを検索する。
<img src="https://github.com/takahashi123456/prof/blob/master/search.png">
- 一覧画面 ：検索結果の飲食店を一覧表示する。
<img src="https://github.com/takahashi123456/prof/blob/master/list.png">
- 詳細画面 ：一覧表示のリストからクリックした店の詳細ページを表示する
<img src="https://github.com/takahashi123456/prof/blob/master/detail.png">

### 使用しているAPI,SDK,ライブラリなど
- ホットペッパーグルメサーチAPI
- Laravel Framework 9.8.1
- Guzzle 7.4
- Geolocation API
- pagenathing.js
- jquery

### コンセプト
最低限の情報で最大限の効果を得られるサイト

### デザイン面でデザイン面でこだわったポイント
検索ワードや一覧ページ、詳細ページを通してデザインに一貫性を持たせました。また、レストランを選ぶ際、情報を多く載せすぎるとどこに行こうかと迷いやすくなるため、なんのお店なのかやキャッチコピーなどを特に載せるように意識しました。

### アドバイスして欲しいポイント
コントローラーの書き方について気になる点をいただければ幸いです。
また今回、snake_caseで命名を行っているのですが、コーディング規則やチーム開発をする上での注意点などについてアドバイスが欲しいと考えています。

### 自己評価
老若男女誰でも使えるデザインを意識して制作いたしました。デザインや機能をつけすぎるのではなく、レストラン選定で必要と思われるもの(ジャンル、キャッチコピー、定休日など)を載せることでごちゃごちゃしすぎないようにしました。また、必須要件を全て満たせたことや required を使い、空のリクエストを送信させないように工夫できた点もよかったと感じています。
足りなかった点としては、ジャンル検索機能や詳細ページの欄に載せているタグからタグ検索ページなどをつけるとより使いやすいサイトになるかもしれないと感じました。
また、本番環境に移行させる際、経験不足やherokuのgithub連携削除などがあり、新しくAWSの勉強も兼ねて使っていたのですが実力不足で不完全な形で終わってしまい、幅広くクラウドサービスに触れておくことの重要性を学びました。