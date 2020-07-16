//action navigasi
$(window).on('scroll', function(){
	if($(window).scrollTop()){
		$('.nav-bar').addClass('black');
		$('.list-menu').addClass('white');
		$('.logo img').addClass('hilang');
		$('li a').addClass('bawah');
	}else{
		$('.nav-bar').removeClass('black');
		$('.list-menu').removeClass('white');
		$('.logo img').removeClass('hilang');
		$('li a').removeClass('bawah');
	}
});

//animasi muncul huruf
$(window).scroll(function(){
	var wScroll = $(this).scrollTop();
	
	if ( wScroll > $('.aside_kiri_1 img').offset().top - 300){
		$('.aside_kanan_1 p').addClass('muncul');
	}
	
	if ( wScroll > $('.aside_kiri_2 p').offset().top - 600){
		$('.aside_kiri_2 p').addClass('muncul1');
	}
	
	if ( wScroll > $('.aside_kiri_3 img').offset().top - 200){
		$('.aside_kanan_3 p').addClass('muncul2');
	}
	
});

//animasi klik scroll
$('.menu_about').click(function(){
	$('html, body').animate({scrollTop:$('main').offset().top - 89}, 2000);
	return false;
});

$('.menu_contact').click(function(){
	$('html, body').animate({scrollTop:$('footer').offset().top - 89}, 2000);
	return false;
});

$('.menu_home').click(function() {
    $('html, body').animate({scrollTop:0}, 2000);
    return false;
});