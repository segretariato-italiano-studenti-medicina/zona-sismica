(function($) {
				var max = 2;
				$('.post-text :not(.wp-caption) a img, .post-text .wp-caption').each(function(){
					var degrees = Math.floor(Math.random() * (2 * max + 1)) - max;
					degrees += 'deg';
					$(this).transform({rotate: degrees})
					$('.post-text a img, .post-text .wp-caption').animate({opacity: 1});
				});
})(jQuery)
