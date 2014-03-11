<?php include 'SearchResultsRecord.php'; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title>Top 40 Search Results</title>
    </head>
    <body>
        <form method="get" action='index.php'>
            <input type="hidden" name="cmd" value="Results"/>
            <table border="1">
                <tr> <th>No</th> <th>Title</th> <th>Artist</th> </tr>
                <?php
                $songs = $_SESSION['songs'];
                $start = $_SESSION['start'];
                $last = $_SESSION['last'];
                //die($songs[0]->title . " " . $start . " " . $last);
                for ($count = $start; $count <= $last; $count++) {
                    $song = $songs[$count-1];
                    if ($song->numone) {
                        echo "<tr style='color:red'>";
                    } else {
                        echo "<tr>";
                    }
                    echo "<td>$count</td>";
                    echo "<td>$song->title</td>";
                    echo "<td>$song->artist</td>";
                    echo "</tr>";
                }
                ?>
            </table>
            <input type="submit" name="btn" value="Prev"></input>
            <input type="submit" name="btn" value="Next"></input>
        </form>
    </body>
</html>