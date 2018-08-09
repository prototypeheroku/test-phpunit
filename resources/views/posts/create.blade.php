<!DOCTYPE html>
<!-- saved from url=(0046)file:///C:/Users/nabe/Desktop/html/Entry1.html -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>災害登録1/2</title>
<link
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
	rel="stylesheet">
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid text-center">
		<table class="table table-condensed bg-info">
			<tbody>
				<tr style="cursor: pointer">
					<th class="col-xs-2 text-center">広域災害進捗支援システム</th>
					<th class="col-xs-2 text-center bg-primary" onclick="location.href='./DisasterList.html'">災害一覧</th>
					<th class="col-xs-2 text-center" onclick="location.href='./Entry3.html'">災害本部管理</th>
					<th class="col-xs-2 text-center">フロー管理</th>
					<th class="col-xs-2 text-center">管理者管理</th>
					<th class="col-xs-2 text-center">個別管理</th>
				</tr>
			</tbody>
		</table>
		<p class="text-left" style="font-size: 15pt; font-weight: bold; padding-left: 20px; border-left: 6px solid #337ab7; margin-top:30px">災害追加画面（1/2）</p>
		<form class="form-horizontal">
			<div class="form-group">
				<div class="row">
					<div class="col-xs-2"></div>
					<div class="col-xs-2 text-left">
						<label for="disastername" class="control-label">災害名（必須）</label>
					</div>
					<div class="col-xs-4">
						<input type="text" name="title" value="{{ $post->title }}" class="form-control" required autofocus>
					</div>
					<div class="col-xs-4"></div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-xs-2"></div>
					<div class="col-xs-2 text-left">
						<label for="disasterheadname" class="control-label">災害本部名（必須）</label>
					</div>
					<div class="col-xs-4">
						<input type="text" name="comment" value="{{ $post->comment }}" class="form-control" required autofocus>ue="003">△△本部</option>
					</div>
					<div class="col-xs-1">
						<button class="btn btn-primary">追加</button>
					</div>
					<div class="col-xs-3"></div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-xs-2"></div>
					<div class="col-xs-2 text-left">
						<label for="template" class="control-label">フローテンプレート選択</label>
					</div>
					<div class="col-xs-4">
						<select id="template" class="form-control">
							<option>選択してください</option>
							<option value="001">地震・水災</option>
							<option value="002">○○災害</option>
							<option value="003">☓☓災害</option>
						</select>
					</div>
					<div class="col-xs-4"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-3"></div>
				<input type="submit" class="btn btn-primary btn-lg col-xs-2" style="margin-right: 10px; margin-left: 10px" type="button" value="登録" onclick="location.href='./DisasterList.html'">
			</div>
			<div class="col-xs-3"></div>
		</form>
	</div>
</body>
</html>
