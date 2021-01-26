
$(document).ready(function(){
	$("#article_tab1").click(function(){
		$("#article_tab2").css({"background-color": "#D3D3D3", "font-weight": "normal", "text-decoration": "none"});
		$("#article_tab3").css({"background-color": "#DEB887", "font-weight": "normal", "text-decoration": "none"});
		$("#article_div").css({"background-color": "#d7bdb7"});
		$(this).css({"background-color": "#d7bdb7", "font-weight": "bold", "font-size": "22px", "text-decoration": "underline"});
		$("#article_div").load("profile_blogs.php");
	});
});

$(document).ready(function(){
	$("#article_tab2").click(function(){
		$("#article_tab1").css({"background-color": "#d7bdb7", "font-weight": "normal", "text-decoration": "none"});
		$("#article_tab3").css({"background-color": "#DEB887", "font-weight": "normal", "text-decoration": "none"});
		$("#article_div").css({"background-color": "#D3D3D3"});
		$(this).css({"background-color": "#D3D3D3", "font-weight": "bold", "text-decoration": "underline"});
		$("#article_div").load("profile_cases.php");
	});
});

$(document).ready(function(){
	$("#article_tab3").click(function(){
		$("#article_tab1").css({"background-color": "#d7bdb7", "font-weight": "normal", "text-decoration": "none"});
		$("#article_tab2").css({"background-color": "#D3D3D3", "font-weight": "normal", "text-decoration": "none"});
		$("#article_div").css({"background-color": "#DEB887"});
		$(this).css({"background-color": "#DEB887", "font-weight": "bold", "text-decoration": "underline"});
		$("#article_div").load("profile_cases.php");
	});
});
