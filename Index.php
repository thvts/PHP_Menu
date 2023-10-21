<?php
    include 'functions.php';
    include 'crud.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>REYES</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-vf52PI41zFspD6Vd0QOgySwt27F5PO8R95bCC5UTDkqrLLOiZz/Spf4fXGr6A9t5" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand">REYES</a>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link disabled" href="index.php">Manage Menus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="addMenu.php">Create Menu</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
		<table class="table table-bordered table-hover mx-auto p-2" style="width:auto;">
            <thead>
                <tr>
                    <th style="text-align: center;">ID</th>
                    <th style="text-align: center;">Menu Name</th>
                    <th style="text-align: center;">Menu Description</th>
                    <th style="text-align: center;">Action</th>
                </tr>
            </thead>

			<?php
			$rows = view_data();
			foreach ($rows as $row) {
				echo "<tr>";
				echo "<td>" . $row['id'] . "</td>";
				echo "<td>" . $row['menu_name'] . "</td>";
				echo "<td>" . $row['menu_desc'] . "</td>"; ?>
				<td>
					<!-- <form method="post" enctype="multipart/form-data" action="?edit_id=<?php echo $row['id']; ?>" style="display: inline;">
						<input type="hidden" name="edit" value="<?php echo $row['id']; ?>">
						<button type="submit" class="btn btn-primary" >EDIT</button>&nbsp;
					</form> -->

					<form method="post" style="display: inline;">
						<input type="hidden" name="delete" value="<?php echo $row['id']; ?>">
						<button type="submit" class="btn btn-danger" onclick="return confirm('Delete record?')">DELETE</button>
					</form>
				</td>
			<?php echo "</tr>"; } ?>
        </table>
    </div>
</body>
</html>