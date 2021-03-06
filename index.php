<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=1580">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="robots" content="index,follow">

	<meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="Cache-Control" content="no-cache">

    <meta property="og:title" content="일등폰" />
    <meta property="og:url" content="http://www.ildeung.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="오직 일등폰에서만 가능한 최신폰 최저가 할인 보러가기" />
    <meta property="og:image" content="http://www.ildeung.com/images/header.jpg" />

    <link href="css/style.css?v=<?php echo date("ymdhis"); ?>" rel="stylesheet" / >

	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>

	<title>일등폰</title>

	<script>
		function fnMove(){
            var offset = $("#DB").offset();
            $('html, body').animate({scrollTop : offset.top}, 400);
        }
	</script>
</head>
<body>

	<header>
		<div class="container">
			<div class="header-time">
				<?php
					$now = time();
					$endTime = strtotime(date("Y-m-d", strtotime("+1 day")) ." 00:00:00");
					$remainTime = $endTime - $now;
				?>
				선착순 마감 <span id="timerSpan">00 : 00 : 00</span> 남았습니다.
			</div>
			<div><a href="javascript:;" onclick="fnMove();"><img src="images/header.jpg?v=33" alt=""/></a></div>
		</div>
	</header>

	<main>
		
			<section class="head">
				<div class="container">
					<img src="images/head.jpg?v=<?php echo date("ymdhis"); ?>" alt=""/>
				</div>
			</section>
			<section class="head2">
				<div class="container">
					<img src="images/head2.jpg?v=<?php echo date("ymdhis"); ?>" alt=""/>
				</div>
			</section>
			<section class="sc1">
				<div class="container">
					<div class="btn-group nth1 top">
						<a href="javascript:;" onclick="fnMove();"></a>
						<a href="javascript:;" onclick="fnMove();"></a>
					</div>
					<div class="btn-group nth2 bottom">
						<a href="javascript:;" onclick="fnMove();"></a>
					</div>
					<img src="images/mc01.png?v=<?php echo date("ymdhis"); ?>" alt=""/>
				</div>
			</section>
			<section class="sc2">
				<div class="container">
					</div>
					<div class="btn-group nth3 top">
						<a href="javascript:;" onclick="fnMove();"></a>
						<a href="javascript:;" onclick="fnMove();"></a>	
					</div>
					<div class="btn-group nth3 bottom">
						<a href="javascript:;" onclick="fnMove();"></a> 
					</div>
					<img src="images/mc02.png?v=<?php echo date("ymdhis"); ?>" alt=""/>
				</div>
			</section>

			<section class="sc3">
				<div class="container">
					<div class="btn-group top2">
						<a href="javascript:;" onclick="fnMove();"></a>
					</div>
					<div class="btn-group nth2 bottom">
						<a href="javascript:;" onclick="fnMove();"></a>
						<a href="javascript:;" onclick="fnMove();"></a>
					</div>
					<img src="images/mc03.png?v=<?php echo date("ymdhis"); ?>" alt=""/>
				</div>
			</section>

			<section class="sc4">
				<div class="container">
					<div class="btn-group nth2 top">
						<a href="javascript:;" onclick="fnMove();" class=""></a>
						<a href="javascript:;" onclick="fnMove();"></a>
					</div>
					<div class="btn-group nth2 bottom">
						<a href="javascript:;" onclick="fnMove();" class=""></a>
					</div>
					<img src="images/mc04.png?v=<?php echo date("ymdhis"); ?>" alt=""/>
				</div>
			</section>

			<section class="sc5">
				<div class="container">
					<div class="btn-group nth2 top">
						<a href="javascript:;" onclick="fnMove();" class=""></a>
						<a href="javascript:;" onclick="fnMove();"></a>
					</div>
					<div class="btn-group nth2 bottom">
						<a href="javascript:;" onclick="fnMove();" class=""></a>
					</div>
					<img src="images/mc05.png?v=<?php echo date("ymdhis"); ?>" alt=""/>
				</div>
			</section>

			<section class="sc6">
				<div class="container">
					<div class="btn-group nth2 top">
						<a href="javascript:;" onclick="fnMove();" class=""></a>
						<a href="javascript:;" onclick="fnMove();"></a>
					</div>
					<div class="btn-group nth2 bottom">
						<a href="javascript:;" onclick="fnMove();" class=""></a>
					</div>
					<img src="images/mc06.png?v=<?php echo date("ymdhis"); ?>" alt=""/>
				</div>
			</section>

			<section class="db">
				<div class="container">
					<div class="in-db" id="DB">
						<h2><img src="images/db_top.jpg?v=<?php echo date("ymdhis"); ?>" alt=""/></h2><br/>
						<div class="input-group">
							<input type="text" name="" id="userName" class="input-class" placeholder="이름*" maxlength="20" />
							<input type="tel" name="" id="hp" class="input-class" placeholder="연락처*" maxlength="20"/>
							<select name="" id="telCompany" class="input-class">
								<option value="">통신사 선택*</option>
								<option value="SKT">SKT</option>
								<option value="LG">LG</option>
								<option value="KT">KT</option>
							</select>
							<select name="" id="deviceModel" class="input-class">
								<option value="">희망기종*</option>
								<option value="갤럭시Z플립3">갤럭시Z플립3</option>
								<option value="갤럭시S22">갤럭시S22</option>
								<option value="갤럭시S22+">갤럭시S22+</option>
								<option value="갤럭시S22울트라">갤럭시S22울트라</option>
								<option value="갤럭시S21">갤럭시S21</option>
								<option value="갤럭시S21+">갤럭시S21+</option>
								<option value="갤럭시S21울트라 5G">갤럭시S21울트라 5G</option>
								<option value="갤럭시노트20 5G">갤럭시노트20 5G</option>
								<option value="갤럭시노트20 Ultra 5G">갤럭시노트20 Ultra 5G</option>
								<option value="아이폰13">아이폰13</option>
								<option value="아이폰13Mini">아이폰13Mini</option>
								<option value="아이폰13PRO MAX">아이폰13PRO MAX</option>
								<option value="갤럭시S20 5G">갤럭시S20 5G</option>
								<option value="갤럭시S20+ 5G">갤럭시S20+ 5G</option>
								<option value="갤럭시S20 Ultra 5G">갤럭시S20 Ultra 5G</option>
								<option value="갤럭시노트10 5G">갤럭시노트10 5G</option>
								<option value="갤럭시 노트9">갤럭시노트9</option>
							</select>
							<label>
								<input type="checkbox" id="agree" checked /> <span>개인정보수집 및 이용동의 [+자세히]</span>
							</label>
							<h2><img src="images/btn.png?v=<?php echo date("ymdhis"); ?>" id="submitBtn" alt=""/></h2>
						</div>
						
					</div>
				</div>
			</section>
			<section class="db2">
				<div class="container">
					<div class="list-db">
						<h2><img src="images/db_top2.jpg?v=<?php echo date("ymdhis"); ?>" alt=""/></h2>
						<br/>
						<div class="list-group" id="roll">
							<ul>
								<li>
									<div class="item">
										<span><?php echo date("m/d", time()); ?></span><span>접수완료</span><span>노*수</span><span>iphone12Pro</span>
									</div>
								</li>
								<li>
									<div class="item">
										<span><?php echo date("m/d", time()); ?></span><span>접수완료</span><span>이*용</span><span>갤럭시Z플립3</span>
									</div>
								</li>
								<li>
									<div class="item">
										<span><?php echo date("m/d", time()); ?></span><span>접수완료</span><span>변*성</span><span>갤럭시S21울트라</span>
									</div>
								</li>
								<li>
									<div class="item">
										<span><?php echo date("m/d", time()); ?></span><span>접수완료</span><span>조*훈</span><span>아이폰12Mini</span>
									</div>
								</li>
								<li>
									<div class="item">
										<span><?php echo date("m/d", time()); ?></span><span>접수완료</span><span>박*현</span><span>아이폰12Mini</span>
									</div>
								</li>
								<li>
									<div class="item">
										<span><?php echo date("m/d", time()); ?></span><span>접수완료</span><span>김*현</span><span>iphone12Pro</span>
									</div>
								</li>
								<li>
									<div class="item">
										<span><?php echo date("m/d", time()); ?></span><span>접수완료</span><span>김*오</span><span>갤럭시S20 5G</span>
									</div>
								</li>
								<li>
									<div class="item">
										<span><?php echo date("m/d", time()); ?></span><span>접수완료</span><span>이*건</span><span>갤럭시S21울트라 5G</span>
									</div>
								</li>
								<li>
									<div class="item">
										<span><?php echo date("m/d", time()); ?></span><span>접수완료</span><span>이*민</span><span>갤럭시S21울트라 5G</span>
									</div>
								</li>
								<li>
									<div class="item">
										<span><?php echo date("m/d", time()); ?></span><span>접수완료</span><span>이*하</span><span>갤럭시S21+</span>
									</div>
								</li>
								<li>
									<div class="item">
										<span><?php echo date("m/d", time()); ?></span><span>접수완료</span><span>안*솔</span><span>갤럭시S21+</span>
									</div>
								</li>
								<li>
									<div class="item">
										<span><?php echo date("m/d", time()); ?></span><span>접수완료</span><span>이*정</span><span>iphone12Pro</span>
									</div>
								</li>
								<li>
									<div class="item">
										<span><?php echo date("m/d", time()); ?></span><span>접수완료</span><span>김*희</span><span>아이폰12PRO MAX</span>
									</div>
								</li>
								<li>
									<div class="item">
										<span><?php echo date("m/d", time()); ?></span><span>접수완료</span><span>정*영</span><span>아이폰12PRO MAX</span>
									</div>
								</li>
								<li>
									<div class="item">
										<span><?php echo date("m/d", time()); ?></span><span>접수완료</span><span>김*린</span><span>갤럭시노트20 Ultra 5G</span>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				</section>
			<section class="re">
				<img src="images/re.png?v=<?php echo date("ymdhis"); ?>" id="submitBtn" alt=""/>
			</section>


			</section>
			<section class="end">
				<img src="images/end.png?v=<?php echo date("ymdhis"); ?>" id="submitBtn" alt=""/>
			</section>
	</main>





	<footer>
			<div class="container">
				<div class="btn-group">
					<a href="https://www.ictmarket.or.kr:8443/ajax/ajax3.do?id=PRE0000147505&seq=1&yn=1" target="_blank"></a>
				</div>
				<img src="images/footer.png?v=<?php echo date("ymdhis"); ?>" alt=""/>
			</div>
	</footer>



<script>
	$(document).ready(function(){
		
		$(".modal-open").click(function(){
			$(".modal-break").fadeIn("fast");
	      	$("#modal-input").fadeIn("fast");
	    });    
			
		function setTimer() { 
			var now = new Date();
			var endDateTime = new Date(now.getFullYear(),now.getMonth(),now.getDate() + 1,0,0,0);

			var nt = now.getTime();
			var et = endDateTime.getTime();

			if (nt < et)
			{
				sec = parseInt(et - nt) / 1000;
				day = parseInt(sec/60/60/24);
				sec = (sec - (day*60*60*24));
				hour = parseInt(sec/60/60);
				sec = (sec - (hour*60*60));
				min = parseInt(sec/60);
				sec = parseInt(sec-(min*60));
				if( min.toString().length == 1 ) { 
					min = "0"+min; 
				}
				if( sec.toString().length == 1 ) { 
					sec = "0"+sec; 
				} 
				$("#timerSpan").html(hour +" : "+ min + " : "+ sec);
			} else {
				$("#timerSpan").html("00 : 00 : 00");
			}
		}

		var x = setInterval(setTimer, 1000);

		$("#submitBtn").click(function(){
			if ($("#userName").val() == "")
			{
				alert("이름을 입력해 주세요.");
				return false;
			}

			if ($("#hp").val() == "")
			{
				alert("연락처를 입력해 주세요.");
				return false;
			}

			if ($("#telCompany").val() == "")
			{
				alert("통신사를 선택해 주세요.");
				return false;
			}

			if ($("#deviceModel").val() == "")
			{
				alert("희망기종을 선택해 주세요.");
				return false;
			}

			if ($("#agree").prop('checked') == false)
			{
				alert("개인정보수집 및 이용동의에 체크해 주세요.");
				return false;
			}
			
			var conf = confirm("신청하시겠습니까?");
			if (conf)
			{
				$.ajax({
					url			: '/dataProc.php',
					type		: 'POST',
					dataType	: 'json',
					contentType	: 'application/x-www-form-urlencoded; charset=utf-8',
					data : {
						action		: 'saveData',
						userName	: $("#userName").val(),
						hp			: $("#hp").val(),
						telCompany	: $("#telCompany").val(),
						deviceModel	: $("#deviceModel").val(),
					},
					success: function (response) {
						if (response.code == 1)
						{
							
//NAVER SCRIPT				
if (!wcs_add) var wcs_add={};
wcs_add["wa"] = "s_133f9decdb49";
var _nasa={};
if (window.wcs ) {
_nasa["cnv"] = wcs.cnv("4","1");
wcs_do(_nasa);
}
//NAVER SCRIPT END	
							
							alert('신청되었습니다');
							location.reload();
						}
					},
					failure: function(msg) {
						alert(msg);
					}
				});
			}
		});

		var rollUl = $('#roll').find('ul');
		var li = $('#roll').find('li');
		var liLeng = li.length;
		var liHeight = li.outerHeight();
		var _index = 0;
		var i = 1;

		setInterval(function() {
		  TweenMax.to(rollUl, 0.5, {
			top: -(liHeight),
			ease: Expo.easeInOut,
			onComplete: topReturn
		  });
		}, 2000)

		function topReturn() {
		  var liFirst = $('#roll').find('li:first');
		  var liLast = $('#roll').find('li:last');
		  rollUl.css({
			'top': 0
		  });
		  liFirst.insertAfter(liLast);
		}

	});
</script>

<!-- NAVER SCRIPT -->
<script type="text/javascript" src="//wcs.naver.net/wcslog.js"></script>
<script type="text/javascript">
if(!wcs_add) var wcs_add = {};
wcs_add["wa"] = "s_133f9decdb49";
if (!_nasa) var _nasa={};
if (window.wcs) {
    wcs.inflow("ildeung.com");
    wcs_do(_nasa);
}
</script>
<!-- NAVER SCRIPT END -->

</body>
</html>