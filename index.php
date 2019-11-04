<?php include __DIR__ . '/src/Core/bootstrap.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Simple Structure </title>
	<?php echo $debugbar_Renderer->renderHead(); ?>
</head>
<body>
	<?php echo $debugbar_Renderer->render(); ?>
</body>
</html>