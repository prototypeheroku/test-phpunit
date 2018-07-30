<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>案件全体フロー</title>
<link
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
	rel="stylesheet">
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
	$(function() {
		$('.open').on('click', function() {
			$('#overlay, #modalWindow').fadeIn();
		});

		$('#close').on('click', function() {
			$('#overlay, #modalWindow').fadeOut();
		});

		locateCenter();
		$(window).resize(locateCenter);

		function locateCenter() {
			let w = $(window).width();
			let h = $(window).height();

			let cw = $('#modalWindow').outerWidth();
			let ch = $('#modalWindow').outerHeight();

			$('#modalWindow').css({
				'left' : ((w - cw) / 2) + 'px',
				'top' : ((h - ch) / 2) + 'px'
			});
		}
	});
</script>
<style>
#overlay {
	width: 100%;
	height: 100%;
	position: fixed;
	top: 0;
	left: 0;
	background: rgba(0, 0, 0, 0.3);
	display: none;
	z-index: 1;
	left: 0;
}

#modalWindow {
	width: 90%;
	height: 90%;
	background: white;
	box-shadow: 0 0 10px gray;
	border-radius: 8px;
	position: fixed;
	display: none;
	z-index: 2;
	position: fixed;
}
</style>
</head>
<body>
	<div class="container-fluid text-center">
		<table class="table table-condensed bg-info"
			style="margin-bottom: 10px">
			<tr style="cursor: pointer">
				<th class="col-xs-2 text-center">広域災害進捗支援システム</th>
				<th class="col-xs-2 text-center"
					onclick="location.href='./DisasterList.html'">災害一覧</th>
				<th class="col-xs-2 text-center"
					onclick="location.href='./Entry3.html'">災害本部管理</th>
				<th class="col-xs-2 text-center bg-primary">フロー管理</th>
				<th class="col-xs-2 text-center">管理者管理</th>
				<th class="col-xs-2 text-center">個別管理</th>
			</tr>
		</table>
		<p class="text-left"
			style="font-size: 15pt; font-weight: bold; padding-left: 20px; border-left: 6px solid #337ab7; margin-top: 30px; margin-bottom: 20px">
			案件全体フロー画面</p>
		<div style="font-size: 15px; font-weight: bold">
			<div class="col-xs-2 bg-primary" style="padding: 5px">災害情報</div>
			<div class="col-xs-10"></div>
		</div>
		<table class="table table-bordered" style="margin: 0 0 0 10">
			<tr>
				<th class="col-xs-1 bg-info">災害名</th>
				<td class="col-xs-2">○○災害</td>
				<th class="col-xs-1 bg-info" rowspan="2">災害本部住所<br>（都道府県）
				</th>
				<td class="col-xs-2" rowspan="2">○○県</td>
				<th class="col-xs-1 bg-info">災害の種類</th>
				<td class="col-xs-2">水害</td>
				<th class="col-xs-1 bg-info">登録件数</th>
				<td class="col-xs-2">1242件</td>
			</tr>
			<tr>
				<th class="col-xs-1 bg-info">災害本部名</th>
				<td class="col-xs-2">○○本部</td>
				<th class="col-xs-1 bg-info">災害登録日</th>
				<td class="col-xs-2">2017/08/01</td>
				<th class="col-xs-1 bg-info">アラート件数</th>
				<td class="col-xs-2">325件</td>
			</tr>
			<tr>
				<th class="col-xs-1 bg-info">責任者名</th>
				<td class="col-xs-2">木村○○</td>
				<th class="col-xs-3 text-right"
					style="padding-top: 0px; padding-bottom: 0px; vertical-align: middle"
					colspan="6">未印刷表紙数：37件 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<button class="btn btn-primary">表紙印刷</button>
				</th>
			</tr>
		</table>
		<div style="position: relative; font-size: 15px; font-weight: bold">
			<div class="col-xs-2 bg-primary" style="padding: 5px">工程別検索</div>
			<div class="col-xs-4"></div>
			<div class="col-xs-2 bg-primary" style="padding: 5px">個別情報検索</div>
			<div class="col-xs-4"></div>
		</div>
		<table class="table table-bordered" style="margin: 0 0 0 10">
			<tr>
				<th class="col-xs-1 bg-info" rowspan="2"><label for="process"
					class="control-label">工程別</label></th>
				<td class="col-xs-5" rowspan="2"><select id="process"
					class="form-control">
						<option>選択してください</option>
						<option value="001">明細取付</option>
						<option value="002">有無責確認</option>
						<option value="003">事故登録</option>
				</select></td>
				<th class="col-xs-1 bg-info"><label for="accidentnumber"
					class="control-label">事故番号</label></th>
				<td class="col-xs-2"><input type="text" id="accidentnumber"
					class="form-control"></td>
				<th class="col-xs-1 bg-info"><label for="Contractor"
					class="control-label">契約者</label></th>
				<td class="col-xs-2"><input type="text" id="Contractor"
					class="form-control"></td>
			</tr>
			<tr>
				<th class="col-xs-1 bg-info"><label for="policynumber"
					class="control-label">証券番号</label></th>
				<td class="col-xs-5" colspan="3"><input type="text"
					id="policynumber" class="form-control"></td>
			</tr>
			<tr>
				<td colspan="6">
					<div class="col-xs-5"></div> <input
					class="btn btn-primary btn-lg col-xs-2" type="button" value="検索"
					onclick="location.href='./CaseFlow2.html'">
					<div class="col-xs-5"></div>
				</td>
			</tr>
		</table>
		<div style="font-size: 15px; font-weight: bold">
			<div class="col-xs-2 bg-primary" style="padding: 5px">検索結果</div>
			<div class="col-xs-10"></div>
		</div>
		<table class="table table-bordered"
			style="margin-top: 10px; margin-bottom: 10px;">
			<tr class="bg-info">
				<th class="col-xs-2 text-center">工程別</th>
				<th class="col-xs-2 text-center">全体</th>
				<th class="col-xs-2 text-center">在中</th>
				<th class="col-xs-2 text-center">取出中</th>
				<th class="col-xs-2 text-center">アラート</th>
			</tr>
			<tr>
				<td>明細取付</td>
				<td><a href="#" style="text-decoration: underline" class="open">524件</a></td>
				<td><a href="#" style="text-decoration: underline" class="open">101件</a></td>
				<td><a href="#" style="text-decoration: underline" class="open">421件</a></td>
				<td><a href="#" style="text-decoration: underline" class="open">23件</a></td>
			</tr>
			<tr>
				<td>有無責確認</td>
				<td><a href="#" style="text-decoration: underline" class="open">27件</a></td>
				<td><a href="#" style="text-decoration: underline" class="open">3件</a></td>
				<td><a href="#" style="text-decoration: underline" class="open">24件</a></td>
				<td><a href="#" style="text-decoration: underline" class="open">3件</a></td>
			</tr>
			<tr>
				<td>事故登録</td>
				<td><a href="#" style="text-decoration: underline" class="open">5件</a></td>
				<td><a href="#" style="text-decoration: underline" class="open">0件</a></td>
				<td><a href="#" style="text-decoration: underline" class="open">5件</a></td>
				<td><a href="#" style="text-decoration: underline" class="open">3件</a></td>
			</tr>
			<tr>
				<td>質権確認</td>
				<td><a href="#" style="text-decoration: underline" class="open">12件</a></td>
				<td><a href="#" style="text-decoration: underline" class="open">5件</a></td>
				<td><a href="#" style="text-decoration: underline" class="open">7件</a></td>
				<td><a href="#" style="text-decoration: underline" class="open">4件</a></td>
			</tr>
			<tr>
				<td>入金確認</td>
				<td><a href="#" style="text-decoration: underline" class="open">16件</a></td>
				<td><a href="#" style="text-decoration: underline" class="open">4件</a></td>
				<td><a href="#" style="text-decoration: underline" class="open">12件</a></td>
				<td><a href="#" style="text-decoration: underline" class="open">8件</a></td>
			</tr>
		</table>
	</div>
	<div id="overlay"></div>
	<div id="modalWindow">
		<div class="container-fluid text-center">
			<p class="text-left"
				style="font-size: 15pt; font-weight: bold; padding-left: 20px; border-left: 6px solid #337ab7; margin-top: 30px; margin-bottom: 20px">
				工程別ポップアップ画面</p>
			<table class="table table-bordered table-hover"
				style="margin-top: 10px; margin-bottom: 10px;">
				<tr class="bg-info">
					<th class="col-xs-2 text-center">事故番号</th>
					<th class="col-xs-2 text-center">証券番号</th>
					<th class="col-xs-2 text-center">契約者名</th>
					<th class="col-xs-2 text-center">最終更新日</th>
				</tr>
				<tr onclick="location.href='./CaseFlow2.html'">
					<td>00-123456789-00-00</td>
					<td>00000000000</td>
					<td>佐藤 ○○様</td>
					<td>2017/08/01<br>16:32
					</td>
				</tr>
				<tr onclick="location.href='./CaseFlow2.html'">
					<td>01-123456789-00-00</td>
					<td>00000000001</td>
					<td>加藤 ○○様</td>
					<td>2017/08/03<br>14:05
					</td>
				</tr>
				<tr onclick="location.href='./CaseFlow2.html'">
					<td>02-123456789-00-00</td>
					<td>00000000002</td>
					<td>小林 ○○様</td>
					<td>2017/06/23<br>11:12
					</td>
				</tr>
				<tr onclick="location.href='./CaseFlow2.html'">
					<td>03-123456789-00-00</td>
					<td>00000000003</td>
					<td>鈴木 ○○様</td>
					<td>2017/07/11<br>09:54
					</td>
				</tr>
				<tr onclick="location.href='./CaseFlow2.html'">
					<td>04-123456789-00-00</td>
					<td>00000000004</td>
					<td>高橋 ○○様</td>
					<td>2017/06/07<br>17:47
					</td>
				</tr>
			</table>
			<button id="close" class="btn btn-lg btn-primary">閉じる</button>
		</div>
	</div>
</body>
</html>
