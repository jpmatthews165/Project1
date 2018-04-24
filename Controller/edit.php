<?php
session_start();
$item_id = $_POST['item_id'];
$_SESSION['item_id'] = $item_id;
require('../Model/db.php');
require '../View/header.php';
$sql = "select * from todos where id = '$item_id';";
$results = runQuery($sql);
?>

<html>
<head>
<title>Todos - Edit a Task</title>
</head>
<body>
  <div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <h1 style="color:black">Edit Task</h1>
      </div>
    </div>
  </div>

  <div class="container" style="color:black"> 
    <form method="post" action=../Model/edittask.php>
      <div class="form-group">
        <hr class="colorgraph">
        <label>Task:</label>
        <input type="text" name="task" class="form-control" id="task" value= "<?php echo $results[0][message] ?>" />
      </div>
      <div class="form-group">
        <input type="hidden" name="item_id" class="form-control" id="item_id" value="<?php echo $item_id;?>" />
      </div>
      <div class="form-group">
        <label>Due Date:</label>
        <input type="datetime-local" name="duedate" class="form-control" id="duedate" value="<?php echo date('Y-m-d'); ?>"/>
      </div>
      <div class="form-group">
        <input type="hidden" name="action" class="form-control" value="after_edit">
      </div>
      <hr class="colorgraph">
      <div class="form-group">
        <input type="submit" value="Finish Editing" class="btn btn-info" />
      </div>
    </form>
  </div>
  
</body>
</html>