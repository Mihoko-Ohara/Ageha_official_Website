<?php
/**
 *Template Name: top template
 */
?>

<?php get_header(); ?>

<div class="start">
    	<script type="text/javascript">
            jQuery(function($) {
                setTimeout(function(){
                    $('.start p').fadeIn(1600);
                },500); //フェードイン
                setTimeout(function(){
                    $('.start').fadeOut(500);
                },2500); //フェードアウト
                $(".container").css("display", "none");
                $("header").css("display", "none");
                $("footer").css("display", "none");
                $("#nav-toggle").css("display", "none");
                setTimeout(function(){
                    $('.container').css("display", "block");
                },2500);
                setTimeout(function(){
                    $("header").css("display", "block");
                    $("footer").css("display", "block");
                    $("#nav-toggle").css("display", "block");
                },3000);
            });
		</script>

    <p><img src="http://agehakyutech.s1009.xrea.com/wp-content/uploads/2020/03/ageha_logo.png" alt="九工大Musicサークル Ageha"></p>
</div>

<div class="container">
        <div class="main">
            <div class="main-img">

            </div>
            <div class="main-title">
                <h1>Kyutech Music circle Ageha Official Web Site</h1>
            </div>
            <div class="main-menu">
                    <div>
                        <a href="http://agehakyutech.s1009.xrea.com/about/">
                            <p><img src="http://agehakyutech.s1009.xrea.com/wp-content/uploads/2020/03/サックスのフリーアイコン1.png" alt=""></p>
                            <p>about</p>
                        </a>
                    </div>
                    <div>
                        <a href="http://agehakyutech.s1009.xrea.com/blog/">
                            <p><img src="http://agehakyutech.s1009.xrea.com/wp-content/uploads/2020/03/アコースティックギターのイラスト1.png" alt=""></p>
                            <p>blog</p>
                        </a>
                    </div>
                    <div>
                        <a href="http://agehakyutech.s1009.xrea.com/contact/">
                            <p><img src="http://agehakyutech.s1009.xrea.com/wp-content/uploads/2020/03/ドラムのアイコン1.png" alt=""></p>
                            <p>contact</p>
                        </a>
                    </div>
            </div>
        </div>
        <div class="about-box">
			<a href="http://agehakyutech.s1009.xrea.com/about/">
            <div class="title-box"></div>
			<h2>About</h2>
            <img class="img-box" src="http://agehakyutech.s1009.xrea.com/wp-content/uploads/2020/03/about_01.jpg" alt="about">
			</a>
        </div>
        <div class="blog-box">
            <a href="http://agehakyutech.s1009.xrea.com/blog/">
            <img class="img-box" src="http://agehakyutech.s1009.xrea.com/wp-content/uploads/2020/03/blog_01.jpg" alt="blog">
			<h2>Blog</h2>
            <div class="title-box"></div>
            </a>
        </div>
        <div class="contact-box">
			<a href="http://agehakyutech.s1009.xrea.com/contact/">
            <div class="title-box"></div>
            <h2>Contact</h2>
            <img class="img-box" src="http://agehakyutech.s1009.xrea.com/wp-content/uploads/2020/03/contact_01.jpg" alt="contact">
			</a>
        </div>
</div>

<?php get_footer(); ?>

<!-- <div class="start">
    	<script type="text/javascript">
            jQuery(function($) {
                setTimeout(function(){
                    $('.start p').fadeIn(1600);
                },500); //フェードイン
                setTimeout(function(){
                    $('.start').fadeOut(500);
                },2500); //フェードアウト
            });
		</script>

    <p><img src="http://agehakyutech.s1009.xrea.com/wp-content/uploads/2020/03/ageha_logo.png" alt="九工大Musicサークル Ageha"></p>
</div> -->
