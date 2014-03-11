<?php
session_start();
include 'TaskManagerDAO.php';
?>
<!DOCTYPE html>
<html>
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title>Task Manager</title>
        <link href="bootstrap-3.0.0/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <script src="js/jquery-2.0.3.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../../themes/base/jquery.ui.all.css">
        <script src ="jquery-ui-1.10.3.custom/development-bundle/ui/ui.datepicker.jquery.json"></script>
        <script src ="jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>
        <script src="../../ui/jquery.ui.datepicker.js"></script>
        <script>
            $(document).ready(function() {
                $("#date").datepicker();
            });

            $('#type').change(function() {
                if ($(this).val() === 'TalkeTo:' || $(this).val() === 'WaitingFor:') {
                    $('#theText').show();
                    alert('NOTICE');
                } else {
                    $('#theText').hide();
                }
            });
        </script>
        <form method="post" action='index.php'>
            Description: <input type="text" name="desc"></input> <br><br>
            Date: <input type="text" id ="date" name="duedate"></input> <br><br>
            <input type="submit" name="add" value="add"></input>
            <input type="submit" name="delete" value="delete"></input>
            <br><br>

            Type:		
            <select name='type' id ="type">
                <option>(none)</option>
                <?php
                $types = Array("Future", "Location:", "NextAction", "Someday/Maybe", "TalkTo:", "WaitingFor:");
                foreach ($types as $type) {
                    echo "<option>$type</option>";
                }
                ?>
            </select>
            <input type="text" id="theText" style="display:none;" />
            <br><br>
<?php
$dao = new TaskManagerDAO();
$tasks = $dao->getTaskList();

echo "<table id = 'Tasks Table' border = '5'>";
echo "<th>";
echo "<td> Task </td>";
echo "<td> Type </td>";
echo "<td> Due Date </td>";
echo "</th>";
$i = 0;
foreach ($tasks as $task) {


    echo "<tr>";
    echo "<td><input type = 'checkbox' name = 'check[]' value = '" . $i . "'</td>";
    echo "<td> $task->description </td>";
    echo "<td> $task->type </td>";
    echo "<td> $task->duedate </td>";
    echo "</tr>";
    $i++;
}
?>

        </form>
    </body>
</html>
