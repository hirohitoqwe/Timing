<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Расписание</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container content">
<form class="form-horizontal" method="post" action="handler.php">
	
    <select class="form-control" name="filename">
        <option value="ТРП-1-21">ТРП-1-21</option>
        <option value="ТРП-2-21">ТРП-2-21</option>
        <option value="ТРП-3-21">ТРП-3-21</option>
        <option value="ТРП-1-20">ТРП-1-20</option>
        <option value="ТРП-2-20">ТРП-2-20</option>
    </select>
	<div class="col-sm-offset-2 col-sm-6">
			<button type="submit" id="submit" class="btn btn-primary">Отправить</button>
	</div>
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>