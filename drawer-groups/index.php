
<?php

require_once 'Classes/Drawer.php';
require_once 'Classes/info.php';


$drawer = new Drawer(STUDENTS);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Groups</h1>
    <div style="display: flex; justify-content: center; margin-top: 5%;">
        <form method="post">
            <input type="text" name="groupsMembers" placeholder="number of groups' members" required>
            <input type="submit" name="groupsButton" value="Make groups!">
        </form>
    </div>
    <div style="display: flex; justify-content: center; margin-top: 2%;">
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $groups = $drawer->makeGroups($_POST['groupsMembers']);

                foreach($groups as $key => $group)
                {
                    echo '<br><br><br><br>Group ' . $key ;

                    foreach($group as $key => $member)
                        echo '<br>- ' . $member;
                }
            }
        ?>
    </div>
</body>
</html>

