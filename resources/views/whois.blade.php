<html>
<head>

<title>whois</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<!-- fromとtoで、範囲指定する選択ボタンを用意-->

<form action="" method="post">
{!! csrf_field() !!}
<p>検索キーワード
<input type="text" name="domain_name"></p>
<!-- whoisのオプションをどうすればいいかわからんのでいったん停止
<p>検索タイプ
<select name="domain_name">
	<option value="a">ネットワークアドレス</option>
	<option value="any">すべての情報</option>
	<option value="mx">メールエクスチェンジの情報</option>
	<option value="ns">ネーム・サーバー</option>
	<option value="soa">SOAコード</option>
	<option value="hinfo"></option>
	<option value="axfr"></option>
	<option value="txt"></option>
	<option value=""></option>
</select>
</p>
-->
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="submit" value="whoisコマンド実行">
</form>
@if(isset($result))

<pre>

	<?php echo "{$result}"; ?>




</pre>

@endif
</body>
</html>