<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title_for_layout; ?></title>
	<style>
	.navbar, #debug-kit-toolbar {
		display:none;
	}

	h1 {
		display:none;
	}

	.container-fluid > .row-fluid > .span3 {
		display:none;
	}

	.container-fluid > .row-fluid > .span9 {
		width:100%;
	}

	.container-fluid > .row-fluid > .span9 > p {
		display:none;
	}

	.pagination {
		display:none;
	}

	.actions {
		display:none;
	}

	table.cuaderno {
		width:100%;
		border-collapse:collapse;
	}

	table.cuaderno td {
		height:40px;
		border:1px solid #ccc;
	}

	table { page-break-after:auto; page-break-inside:auto; }
	tr    { page-break-inside:avoid; page-break-after:auto; }
	td    { page-break-inside:avoid; page-break-after:auto; }
	thead { display:table-header-group }
	tfoot { display:table-footer-group }

	td.sello, td.firma, td.huella {
		width:10%;
	}
	</style>
</head>

<body data-spy="scroll">
	<div class="container-fluid">
		<?php echo $this->fetch('content'); ?>
	</div> <!-- /container -->
</body>
</html>