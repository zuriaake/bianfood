$(document).ready(function(){ 
	
	var Core = {
		init: function(){
			var _self = this;
			_self.init_header();
		},
		init_header : function(){
			$('#nav .menu li:has(ul)').hover(function(){
				var bgColor = $(this).css('backgroundColor');
				$(this).find('.sub-nav li').css('background',  bgColor);
				$(this).find('.sub-nav li').hover(function(){
					$(this).css('background', '#333');	
				}, function(){
					$(this).css('background', bgColor);	
				});
				$(this).find('.sub-nav').slideDown('fast');
			}, function(){
				$(this).find('.sub-nav').slideUp('fast');
					
			});
		}
	};

	Core.init();
	
})
