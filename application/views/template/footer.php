<button value="" id="tombolScrollTop" onclick="scrolltotop()" class="btn btn-info pull-right"><i class='fa fa-arrow-up'></i></button>
<script>
$(document).ready(function(){
	$(window).scroll(function(){
		if ($(window).scrollTop() > 100) {
			$('#tombolScrollTop').fadeIn();
		} else {
			$('#tombolScrollTop').fadeOut();
		}
	});
});

function scrolltotop()
{
	$('html, body').animate({scrollTop : 0},500);
}
</script>

</section><!-- /.content -->

<?php 
$this->load->view('template/js');
?>

<!--tambahkan custom js disini-->
<?php
$this->load->view('template/foot');
?>