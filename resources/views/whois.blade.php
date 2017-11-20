<html>
<head>

<title>whois</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
	<p>
		※現在動作確認出来ているOSは、Windows, OS X, Linuxです。ページ上に別のOSが表示される場合は、結果が表示されない可能性があります。
	</p>
	<p>
		また、Windows環境の場合、whoisコマンドの代わりにnslookupコマンドが実行されます。
	</p>
	<p name="platform">
		実行環境：
		<?php echo "{$platform}"; ?>
	</p>

	<!-- fromとtoで、範囲指定する選択ボタンを用意-->

	<form action="" method="post">
	{!! csrf_field() !!}
		<p>検索キーワード
		<input type="text" name="domain_name"></p>
		
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