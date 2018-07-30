<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>災害一覧</title>
<link
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
	rel="stylesheet">
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid text-center">
		<table class="table table-condensed bg-info"
			style="margin-bottom: 10px">
				<tr style="cursor: pointer">
					<th class="col-xs-2 text-center">広域災害進捗支援システム</th>
					<th class="col-xs-2 text-center bg-primary" onclick="location.href='./DisasterList.html'">災害一覧</th>
					<th class="col-xs-2 text-center" onclick="location.href='./Entry3.html'">災害本部管理</th>
					<th class="col-xs-2 text-center">フロー管理</th>
					<th class="col-xs-2 text-center">管理者管理</th>
					<th class="col-xs-2 text-center">個別管理</th>
				</tr>
		</table>
		<p class="text-left" style="font-size: 15pt; font-weight: bold; padding-left: 20px; border-left: 6px solid #337ab7; margin-top:30px">災害一覧画面</p>
		<div style="border: 1px solid #bfbfbf; padding: 10px">
			<form class="form-horizontal">
				<table class="table text-left" style="border-collapse: collapse">
					<tr style="border-top-style: hidden; border-bottom-style: hidden">
						<td style="padding: 0px; height: 50px">
							<div class="form-group" style="padding: 0px; margin: 0px">
								<div class="col-xs-4">
									<label for="disastername" class="control-label">災害名</label>
								</div>
								<div class="col-xs-8">
									<select id="disastername" class="form-control">
										<option>選択してください</option>
										<option value="001">○○災害</option>
										<option value="002">☓☓災害</option>
										<option value="003">△△災害</option>
									</select>
								</div>
							</div>
						</td>
						<td style="padding: 0px; height: 50px">
							<div class="form-group" style="padding: 0px; margin: 0px">
								<div class="col-xs-4">
									<label for="disasterdate" class="control-label">災害発生日</label>
								</div>
								<div class="col-xs-8">
									<input type="text" id="disasterdate" class="form-control">
								</div>
							</div>
						</td>
					</tr>
					<tr style="border-top-style: hidden; border-bottom-style: hidden">
						<td style="padding: 0px; height: 50px">
							<div class="form-group" style="padding: 0px; margin: 0px">
								<div class="col-xs-4">
									<label for="disasterheadname" class="control-label">災害本部名</label>
								</div>
								<div class="col-xs-8">
									<select id="disasterheadname" class="form-control">
										<option>選択してください</option>
										<option value="001">○○本部</option>
										<option value="002">☓☓本部</option>
										<option value="003">△△本部</option>
									</select>
								</div>
							</div>
						</td>
						<td style="padding: 0px; height: 50px">
							<div class="form-group" style="padding: 0px; margin: 0px">
								<div class="col-xs-4">
									<label for="disastercreatedate" class="control-label">災害登録日</label>
								</div>
								<div class="col-xs-8">
									<input type="text" id="disastercreatedate" class="form-control">
								</div>
							</div>
						</td>
					</tr>
					<tr style="border-top-style: hidden; border-bottom-style: hidden">
						<td style="padding: 0px; height: 50px">
							<div class="form-group" style="padding: 0px; margin: 0px">
								<div class="col-xs-4">
									<label for="address" class="control-label">災害本部住所</label><br>（都道府県）
								</div>
								<div class="col-xs-8">
									<select id="address" class="form-control">
										<option>選択してください</option>
										<option value="001">北海道</option>
										<option value="002">青森</option>
										<option value="003">岩手</option>
									</select>
								</div>
							</div>
						</td>
						<td style="padding: 0px; height: 50px">
							<div class="form-group" style="padding: 0px; margin: 0px">
								<div class="col-xs-4">
									<label for="disastertype" class="control-label">災害の種類</label>
								</div>
								<div class="col-xs-8">
									<input type="text" id="disastertype" class="form-control">
								</div>
							</div>
						</td>
					</tr>
					<tr style="border-top-style: hidden; border-bottom-style: hidden">
						<td style="padding: 0px; height: 50px">
							<div class="form-group" style="padding: 0px; margin: 0px">
								<div class="col-xs-4">
									<label for="responsibleperson" class="control-label">責任者</label>
								</div>
								<div class="col-xs-8">
									<select id="responsibleperson" class="form-control">
										<option>選択してください</option>
										<option value="001">○○ ○○</option>
										<option value="002">☓☓ ☓☓</option>
										<option value="003">△△ △△</option>
									</select>
								</div>
							</div>
						</td>
						<td></td>
					</tr>
				</table>
				<div class="row">
					<div class="col-xs-4"></div>
					<div class="col-xs-4">
						<input class="btn btn-primary btn-lg btn-block" type="button"
							value="検索">
					</div>
					<div class="col-xs-4"></div>
				</div>
			</form>
		</div>
		<div
			style="margin-top: 10px; padding: 10px; border: 1px solid #bfbfbf;">
			<div class="row">
				<div class="col-xs-4">
					<button class="btn btn-primary btn-lg col-xs-10" onclick="location.href='./Entry1.html'">災害追加</button>
				</div>
				<div class="col-xs-4"></div>
				<div class="col-xs-4 text-right">
					<button class="btn btn-primary">◀</button>
					<button class="btn btn-primary">1</button>
					<button class="btn btn-primary">2</button>
					<button class="btn btn-primary">3</button>
					<button class="btn btn-primary">▶</button>
				</div>
			</div>
			<table class="table table-bordered"
				style="margin-top: 10px; margin-bottom: 10px;">
				<tr class="bg-info">
					<th class="col-xs-2 text-center">災害名</th>
					<th class="col-xs-2 text-center">災害本部名</th>
					<th class="col-xs-2 text-center">災害本部住所</th>
					<th class="col-xs-2 text-center">災害の種類</th>
					<th class="col-xs-2 text-center">災害発生日</th>
					<th class="col-xs-2 text-center"></th>
				</tr>
				<tr>
					<td>○○水害</td>
					<td>○○本部</td>
					<td>○○県</td>
					<td>水害</td>
					<td>2017/08/01</td>
					<td><a href="#" style="text-decoration: underline" onclick="location.href='./CaseFlow1.html'">詳細</a><br>
						<a href="#" style="text-decoration: underline">編集</a></td>
				</tr>
				<tr>
					<td>☓☓地震</td>
					<td>☓☓本部</td>
					<td>☓☓県</td>
					<td>地震</td>
					<td>2017/08/03</td>
					<td><a href="#" style="text-decoration: underline" onclick="location.href='./CaseFlow1.html'">詳細</a><br>
						<a href="#" style="text-decoration: underline">編集</a></td>
				</tr>
				<tr>
					<td>△△水害</td>
					<td>△△本部</td>
					<td>△△県</td>
					<td>水害</td>
					<td>2017/08/12</td>
					<td><a href="#" style="text-decoration: underline" onclick="location.href='./CaseFlow1.html'">詳細</a><br>
						<a href="#" style="text-decoration: underline">編集</a></td>
				</tr>
				<tr>
					<td>□□地震</td>
					<td>□□本部</td>
					<td>□□県</td>
					<td>地震</td>
					<td>2017/08/24</td>
					<td><a href="#" style="text-decoration: underline" onclick="location.href='./CaseFlow1.html'">詳細</a><br>
						<a href="#" style="text-decoration: underline">編集</a></td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>
