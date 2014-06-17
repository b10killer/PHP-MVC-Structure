<div class="hire"></div>	

<footer>
<div class="backfooter"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<p><a>Privacy</a> | <a>Terms</a> | <a>Help</a></p>
				<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fportfolio.wwlgaming.com%2Fhome%2Findex;outline=1;No200=1;verbose=1" target="_blank"><img width="50" alt="" src="<?php echo URL; ?>public/img/html5valid.png"></a>
			</div>
			<div class="col-md-4">
				<p>Copyright &copy; 2014 Hassam Judoo.</p>
			</div>
			<div class="col-md-4">
				<p><a><img class="linkedin" alt="" width="30" data-other-src="<?php echo URL; ?>public/img/linkedin.png" src="<?php echo URL; ?>public/img/linkedinbw.png"></a>
				
				</p>
			</div>
		</div>
	</div>
</footer>

<script>
//social img change 
if($(window).width() >= 1140){
	$(".linkedin").hover(function(){ $(this).src = "../public/img/linkedin.png";});
	$(".linkedin").bind('mouseenter mouseleave', function() {
		$(this).attr({
			src: $(this).attr('data-other-src') 
			, 'data-other-src': $(this).attr('src') 
		})
	});
	//hover project set focus(css change)
	$( ".project" ).mouseover(function() {
		$(this).stop().animate({'opacity':'1'}, 300).siblings().stop().animate({'opacity':'0.4'}, 500);
	});

	$( ".project" ).mouseout(function() {
		$(".project").each(function( index ) { 
				$(this).stop().animate({'opacity':'1'}, 500);
		});
	});
}


</script>