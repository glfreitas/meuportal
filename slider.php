					<!-- BEGIN SLIDER -->
					<div id="slider">
						<img class="alignnone" title="Planejamento e Desenvolvimento de Novos Projetos" src="Tema/images/planejamento.jpg" alt="" width="970" height="300" />
						<img title="Trabalho em Equipe" src="Tema/images/tabalhoemequipe.jpg" alt="" width="970" height="300" />
						<img class="alignnone" title="Desenvolvimento Web: Sistemas, Web Sites e Portais" src="Tema/images/3.jpg" alt="" width="970" height="300" />
						<img class="alignnone" title="Soluções em Automação Comercial" src="Tema/images/comercial.jpg" alt="" width="970" height="300" />
						<img title="Acompanhamento das Inovações Tecnológicas e do Mercado de Informática" src="Tema/images/atualizado.jpg" alt="" width="970" height="300" />
					</div>
					<div style="width:960px; margin:0 auto; background:url(Tema/images/bk_shadow_slider.png) 0 0 no-repeat; height:50px;"></div>
					<!-- SLIDER SETTINGS -->
					<script type="text/javascript">
						$(window).load(function() {
							$('#slider').nivoSlider({
								effect:'random', //Specify sets like: 'fold,fade,sliceDown'
								slices:15,
								animSpeed:500,
								pauseTime:6000,
								startSlide:0, //Set starting Slide (0 index)
								directionNav:true, //Next & Prev
								directionNavHide:true, //Only show on hover
								controlNav:true, //1,2,3...
								controlNavThumbs:false, //Use thumbnails for Control Nav
								controlNavThumbsFromRel:false, //Use image rel for thumbs
								controlNavThumbsSearch: '.jpg', //Replace this with...
								controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
								keyboardNav:true, //Use left & right arrows
								pauseOnHover:true, //Stop animation while hovering
								manualAdvance:false, //Force manual transitions
								captionOpacity:0.8, //Universal caption opacity
								beforeChange: function(){},
								afterChange: function(){},
								slideshowEnd: function(){} //Triggers after all slides have been shown
							});
						});
					</script>
					<!-- END SLIDER -->