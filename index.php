<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
</head>
<body>
    <div class="main-section">
        <div class="add-section">
            <form action="">
                <input  type="text" 
                        name="title" 
                        placeholder="This field is required">
                <button type="submit">Add &nbsp; <span>&#43;</span></button>
            </form>
        </div>
        <div class="show-todo-section">
            <div class="todo-item">
                <input type="checkbox">
                <h2>This is nothing bitch</h2>
                <br>
                <small>created: <?php  echo date('Y-m-d H:i:s');?></small>
            </div>
        </div>
    </div>
</body>
</html>