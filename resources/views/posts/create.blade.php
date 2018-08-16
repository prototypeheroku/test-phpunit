<!DOCTYPE html>
<!-- saved from url=(0046)file:///C:/Users/nabe/Desktop/html/Entry1.html -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>災害登録</title>
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
		<p class="text-left" style="font-size: 15pt; font-weight: bold; padding-left: 20px; border-left: 6px solid #337ab7; margin-top:30px">災害追加画面</p>
		<form action="{{ url('posts/add') }}" method="post" class="form-horizontal">
			<div class="form-group">
				<div class="row">
					<div class="col-xs-2"></div>
					<div class="col-xs-2 text-left">
						<label for="disastername" class="control-label">災害名（必須）</label>
					</div>
					<div class="col-xs-4">
						<input type="text" name="disaster_name" value="{{ $post->disaster_name }}" class="form-control" placeholder=""　required autofocus>
					</div>
					<div class="col-xs-4"></div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-xs-2"></div>
					<div class="col-xs-2 text-left">
						<label for="disasterkind" class="control-label">災害種別</label>
					</div>
					<div class="col-xs-4">
						<input type="text" name="disaster_kind" value="{{ $post->disaster_kind }}" class="form-control" placeholder=""　required autofocus>
					</div>
					<div class="col-xs-3"></div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-xs-2"></div>
					<div class="col-xs-2 text-left">
						<label for="disasterarea" class="control-label">災害地域</label>
					</div>
					<div class="col-xs-4">
						<input type="text" name="disaster_area" value="{{ $post->disaster_area }}" class="form-control" placeholder=""　required autofocus>
					</div>
					<div class="col-xs-3"></div>
				</div>
			</div>
			
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			
			<input type="submit" value="登録" class="btn btn-primary" style="margin:20px;>
			<div class="row">
                           <div class="col-sm-12">
                              <a href="/posts" class="btn btn-primary" style="margin:20px;">一覧に戻る</a>
                           </div>
                        </div>
		</form>
	</div>
</body>
</html>
