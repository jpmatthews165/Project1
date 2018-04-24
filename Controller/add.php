<?php
session_start();
require '../View/header.php';
?>
<html>
<head>
    <title>Todos - Add a Task</title>
</head>
<body>

  <div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <h1 style="color:black">Add Task</h1>
      </div>
    </div>
  </div>

  <div class="container" style="color:black"> 
    <form method="post" action="../Model/addtask.php" >
      <div class="form-group">
        <hr class="colorgraph">
        <label>Task:</label>
        <input type="text" name="task" class="form-control" id="task" placeholder="Enter Task">
      </div>
      <div class="form-group">
        <label>Due Date:</label>
        <input type="datetime-local" name="duedate" class="form-control" value="<?php echo date(); ?>" id="duedate">
        <hr class="colorgraph">
      </div>
      <div class="form-group">
        <input type="submit" value="Add New Task" class="btn btn-success">
      </div>
    </form>
  </div>

</body>
</html>