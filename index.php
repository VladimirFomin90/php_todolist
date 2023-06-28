<?php

require_once("addTodo.php"); ?>

<!doctype html>
<html lang="en">

<head>
	<title>PHP Todo List</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS v5.2.1 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
		  integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<style>
		.ready {
			text-decoration: line-through;
		}
	</style>
</head>

<body>
<header>
	<!-- place navbar here -->
</header>

<main class="container">
	<br/>

	<div class="card">
		<div class="card-header">
			Todo List
		</div>
		<div class="card-body">

			<div class="mb-3">
				<form action="" method="post">
					<label for="todo" class="form-label">Todo</label>
					<input type="text" class="form-control" name="todo" id="todo" aria-describedby="helpId"
						   placeholder="Enter Todo">
					<br/>

					<input name="add_todo"
						   id="add_todo"
						   class="btn btn-primary"
						   type="submit"
						   value="add todo"
					>
				</form>
			</div>

			<ul class="list-group list-group">

				<?php
				foreach ($resultToConnect as $result) { ?>

					<li class="list-group-item">

						<form action="" method="post">
							<input type="hidden" name="id" value="<?php
							echo $result['id']; ?>">
							<input
								class="form-check-input float-start"
								type="checkbox"
								name="todo_checked"
								value="<?php
								echo $result['completed']; ?>"
								onChange="this.form.submit()"
								<?php
								echo ($result['completed'] == 1) ? 'checked' : ''; ?>
							>
						</form>

						&nbsp;
						<span class="float-start <?php
						echo ($result['completed'] == 1) ? 'ready' : ''; ?> ">
						&nbsp;
							<?php
							echo $result['title']; ?>
						</span>
						<h6 class="float-start">
							&nbsp;
							<a href="?id=<?php
							echo $result['id']; ?>">
							<span class="badge bg-danger">x
							</span>
							</a>
						</h6>
					</li>

					<?php
				} ?>

			</ul>

		</div>
		<!-- <div class="card-footer text-muted">
</div> -->
	</div>

</main>

<footer>
	<!-- place footer here -->
</footer>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
		integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
		integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
</body>

</html>
