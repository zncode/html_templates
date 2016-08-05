$(document).ready(function(){
	//引用头部
	// $('#header').load('http://localhost/discuz32/template/default/portal/mode/header.html',function(){
	// 	//search
	// 	$(".searchbuton").click(function(){
	// 		$(".searchinput").css("opacity","1").fadeToggle();
	// 	})
	// 	//用户名展开
	// 	$(".yhm_name").click(function(){
	// 		$(".yhmUL").css("opacity","1").fadeToggle();
	// 	})
	// });
		$(".searchbuton").click(function(){
			$(".searchinput").css("opacity","1").fadeToggle();
		})
		//用户名展开
		$(".yhm_name").click(function(){
			$(".yhmUL").css("opacity","1").fadeToggle();
		})
	//引用底部
//	$('#footer').load('http://localhost/discuz32/template/default/portal/mode/footer.html');
	
//首页商城推荐
		var scrollPic_02 = new ScrollPic();
		scrollPic_02.scrollContId   = "ISL_Cont_1"; //内容容器ID
		scrollPic_02.arrLeftId      = "LeftArr";//左箭头ID
		scrollPic_02.arrRightId     = "RightArr"; //右箭头ID

		scrollPic_02.frameWidth     = 1160;//显示框宽度
		scrollPic_02.pageWidth      = 232; //翻页宽度

		scrollPic_02.speed          = 10; //移动速度(单位毫秒，越小越快)
		scrollPic_02.space          = 10; //每次移动像素(单位px，越大越快)
		scrollPic_02.autoPlay       = false; //自动播放
		scrollPic_02.autoPlayTime   = 3; //自动播放间隔时间(秒)

		scrollPic_02.initialize(); //初始化
							
})