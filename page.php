				<?php
					include("header.php");
				?>
				<!-- BEGIN CONTENT -->
				<div id="content">
					<br />
					<br />
					<?php
						$page = $_GET['pagina'];
						if (file_exists($page.".php")) {
							include($page.".php");
						} else {
					?>
							<br />
							<h2>Pagina n&atilde;o encontrada!</h2>
							<!--<p>Erro 404</p>-->
							<p>Disculpe mas esta p&aacute;gina n&atilde;o foi encontrada ou ainda n&atilde;o foi concluida.</p>
					<?php
						}
					?>
				</div>
				<!-- END CONTENT -->
			</div>
			<!-- END WRAPPER -->
			<?php include"footer.php"; ?>
		</div>
		<!-- END MAINWRAPPER -->
	</body>
</html>
