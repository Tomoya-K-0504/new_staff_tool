<html>
<head>

<title>domain_search/dig</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<p>※現在動作確認出来ているOSは、Windows, OS X, Linuxです。ページ上に別のOSが表示される場合は、結果が表示されません。</p>
<p name="platform">あなたのOS：
@if(isset($platform))
<?php echo "{$platform}"; ?>
@endif
</p>
<!-- fromとtoで、範囲指定する選択ボタンを用意-->

<form action="" method="post">
{!! csrf_field() !!}
<p>ドメイン名:
<input type="text" name="search_word">
</p>
<p>取得レコードタイプ
<select name="record_name" required="required">
	<option value="a">ネットワークアドレス</option>
	<option value="any">すべての情報</option>
	<option value="mx">メールエクスチェンジの情報</option>
	<option value="ns">ネーム・サーバー</option>
	<option value="soa">SOAコード</option>
</select>
</p>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="submit" value="digコマンド実行">
</form>

@if(isset($result))

<pre>
	<?php echo "{$result}"; ?>
</pre>

@endif
</body>
</html>