<?php

    include ("library/checklogin.php");
    include_once ("lang/main.php");
    $operator = $_SESSION['operator_user'];

?>

		
<?php

    include ("menu-billing.php");

?>
		
		
		<div id="contentnorightbar">
		
		<h2 id="Intro"><a href="#"><? echo $l[Intro][billmain.php]; ?></a></h2>
				
				<p>

				</p>
						</div>
		
		<div id="footer">
		
								<?php
        include 'page-footer.php';
?>

		
		</div>
		
</div>
</div>


</body>
</html>
