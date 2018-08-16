<!DOCTYPE html>
<html>
  <head>
    <title>K-brum Modas System</title>
    <?php include('head.php'); ?>
		<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('#listar-usuario').DataTable({
				"processing": true,
				"serverSide": true,
				"ajax": {
					"url": "models/listar_clientes.php",
					"type": "POST"
				}
			});
		} );
		</script>
  </head>
  <body>

    <?php include('views/menu.php'); ?>
    <?php include('views/listar_clientes.php'); ?>



    <footer>

      </footer>

  </body>
</html>
