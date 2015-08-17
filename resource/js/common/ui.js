/*
	组件.ui-checkbox相关js代码
*/
	$(document).on('click','.ui-checkbox',function(){
		console.log($(this).parent().hasClass('radio'));
		if($(this).parent().hasClass('radio')){
			if($(this).hasClass('checked')){
				$(this).removeClass('checked');
				console.log(2);
			}
			else{
				$(this).addClass('checked').siblings('.ui-checkbox').removeClass('checked');
			}
		}
		else{
			$(this).toggleClass('checked');
		}
	})
/*
	.ui-checkbox相关js代码结束
*/

		//给所有contline中的展开、关闭icon绑定函数
		$(document).on("click",".contline",function(e){
			e.stopPropagation();
			$(this).toggleClass('open').addClass('set').siblings('.contline').removeClass('set');
			if($(this).hasClass('hasload')||!$(this).attr("data-classid")){}
			else{
				$(this).loadSubMenu();
			}
		});
		$.fn.loadSubMenu = function(){
			var $this = $(this);
			var id = $this.attr("data-classid");
			$.post("../usermanage/data.json",{id:id},function(data){
				switch(data.state){
					case "0": 
						$this.addClass("hasload");
						if(data.medicinecount-0){
							$.each(data.medicine,function(){
								var submedicineHTML =   '<div class="contline" data-medicineid="'+this.medicine_medicineclass_medicineid+'">\
															<span>'+this.medicine_productname+'</span>\
													    </div>';
								$(submedicineHTML).appendTo($this);
							})
						}
						if(data.classcount-0){
							$.each(data.class,function(){
								var subclassHTML =   '<div class="contline" data-classid="'+this.medicineclass_id+'">\
															<a class="td1">\
																<i class="flaticon-maths62"></i>\
																<i class="flaticon-minussign6"></i>\
															</a>\
															<span>'+this.medicineclass_classname+'</span>\
													    </div>';
								$(subclassHTML).appendTo($this);
							})
						}
					break;
					case "1": alert("fail");break;
				}
			})
		}

		// 文件按钮
		$(".file").on('click',function(){
			$(this).children("input[type='file']").click();
		})
		$(".file input[type='file']").on('click',function(e){
			e.stopPropagation();
		})
		$(".file input[type='file']").on('change',function(e){
			var path = $(this).val();
			// var reader = new FileReader();
			var f = this.files[0];
			if(!/image\/\w+/.test(f.type)&&$(this).hasClass('imgfile')){
				alert("请上传图片");
				return false;
			}
			else{
			// if(reader){
				var size;
				size = Math.round(f.size*100/1024)/100;
				if($(this).attr("data-maxsize")){
					var maxsize = $(this).attr("data-maxsize");
					if(size > maxsize){
						alert("大小不能超过"+maxsize+"KB");
						return false;
					}
				}
				if(size > 1024){
					size = Math.round(size*100/1024)/100 + "MB";
				}
				else{
					size += "KB";
				}
	    		$(this).parent().attr("data-path","文件名："+f.name+" 文件大小："+size);
			// }
			// else{
			// 	$(this).parent().attr("data-path",path);
			// }
			}
		})
		//屏蔽迅雷插件给页面带来的影响
		$("[id^='xunlei']").remove();