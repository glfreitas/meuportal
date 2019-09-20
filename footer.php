<!-- BEGIN FOOTER -->
			<div id="footer">
				<div style="width:960px; margin: 0 auto; position:relative;">
					<a href="#" id="showHide" >Show/Hide Footer Actions</a>
				</div>

				<div id="footerActions" >
					<div id="footerActionsInner">
						<div id="twitter">
							<a href="http://twitter.com/glfreitas3" class="action">Siga-me!</a>
							<div id="latest">
								<div id="tweet">
									<div id="twitter_update_list">
										<a class="twitter-timeline" href="https://twitter.com/glfreitas3" data-widget-id="478589275785547776" data-tweet-limit="2" data-chrome="nofooter noheader transparent" height="200" >Tweets de @glfreitas3</a>
										<script>
											!function(d,s,id){
												var js,
												fjs=d.getElementsByTagName(s)[0],
												p=/^http:/.test(d.location)?'http':'https';

												if(!d.getElementById(id)){
													js=d.createElement(s);
													js.id=id;
													js.src=p+"://platform.twitter.com/widgets.js";
													fjs.parentNode.insertBefore(js,fjs);
												}
											}
											(document,"script","twitter-wjs");
										</script>
									</div>
								</div>
								<div id="tweetBottom"></div>
							</div>
						</div>

						<div id="contador">
							<?php
								include"contador.php";
							?>
						</div>

						<div id="quickContact">
							<p id="success" class="successmsg" style="display:none;">Seu e-mail foi enviado! Obrigado!</p>
							<p id="bademail" class="errormsg" style="display:none;">Digite o seu nome, uma mensagem e um endereço de e-mail válido.</p>
							<p id="badserver" class="errormsg" style="display:none;">Seu e-mail falhou. Tente novamente mais tarde.</p>
							<form action="email.php" method="post" id="quickContactForm">
								<div class="leftSide">
									<input type="text" value="Seu nome" id="quickName" name="name" />
									<input type="text" value="Seu email" id="quickEmail" name="email" />
									<input type="submit" name="submit" id="submitinput" value="Enviar"/>
								</div>
								<div class="rightSide">
									<textarea id="quickComment" name="comment">Sua Mensagem</textarea>
								</div>
								<input type="hidden" id="quickReceiver" name="receiver" value="636f6e7461746f40636c6563696f6f6c6976656972612e636f6d"/>
							</form>
						</div>
					</div>
				</div>
				<div id="footerWidgets">
					<div id="footerWidgetsInner">
						<!-- BEGIN FOOTER WIDGET -->
						<!-- END FOOTER WIDGETS -->
						<!-- BEGIN COPYRIGHT -->
						<div id="copyright">
							© Copyright 2014 Guilherme Leandro - © Todos os direitos reservados
						</div>
						<!-- END COPYRIGHT -->
					</div>
				</div>
			</div>
			<!-- END FOOTER -->