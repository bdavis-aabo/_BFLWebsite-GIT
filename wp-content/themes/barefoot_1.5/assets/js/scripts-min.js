$(document).ready(function(){function o(){i.css({width:n+"%"}),(n+=.5)>100&&(n=0,c.carousel("next"))}var r=$(window).width(),e=$(".scrollToTop").width()+26,t=(r-e)/2+"px";$(".scrollToTop").css("right",t),$(window).scroll(function(){$(this).scrollTop()>100?$(".scrollToTop").fadeIn():$(".scrollToTop").fadeOut()}),$(".scrollToTop").click(function(){return $("html, body").animate({scrollTop:0},800),$(".navbar-nav li").removeClass("active"),!1}),$("body").scrollspy({offset:60}),jQuery('input[name="builder[]"]').change(function(){var o=[],r=[],e=[],t;jQuery.each(jQuery('input[name="builder[]"]:checked'),function(){"Barefoot Lakes - Harvest Portfolio"!==jQuery(this).val()&&"Barefoot Lakes - Avenue Portfolio"!==jQuery(this).val()||(t=jQuery(this).val().replace("Barefoot Lakes - ",""),t=t.replace(" ","-").toLowerCase()),e.push(t),o.push(jQuery(this).attr("data-mailto")),r.push(jQuery(this).val())}),jQuery("#mailto").val(o.join(", ")),jQuery("#builder").val(r.join(", ")),jQuery("#portfolio").val(e.join(", "))}),jQuery('a[data-toggle="tab"]').on("shown.bs.tab",function(o){var r=this.href.split("#");jQuery(".nav a").filter('a[href="#'+r[1]+'"]').tab("show")});var l=$(window).height(),r=$(window).width(),a=$(".scrollBtn").width(),s=(r-a)/2;$(".scrollBtn").css("left",s+"px"),l<=1200&&($(".scrollBtn").show(),$(window).scroll(function(){$(this).scrollTop()>80?$(".scrollBtn").fadeOut(250):$(".scrollBtn").fadeIn(250)}));var n=0,i=$(".transition-timer-carousel-progress-bar"),c=$("#builder-carousel");c.carousel({interval:!1,pause:!0}).on("slid.bs.carousel",function(){});var u=setInterval(o,30);c.hover(function(){clearInterval(u)},function(){u=setInterval(o,30)})});