<?php

    require '../../config/database.php';
    $dbCon = new dbController();
    $users = array();

    $sqlSelect = 'SELECT id, firstname, lastname, email, language FROM users';

        $sqlSelect .= ' WHERE role = "client"';

        if($_POST['last_name'] != '') {
            $sqlSelect .= ' AND lastname LIKE "%' . $_POST['last_name'] . '%"';
        }

        if($_POST['first_name'] != '') {
            $sqlSelect .= ' AND firstname LIKE "%' . $_POST['first_name'] . '%"';
        }

    $sqlSelect .= ' ORDER BY lastname ASC, firstname ASC';

    $users = $dbCon->executeSelect($sqlSelect);

    $ret_val = '';

    foreach($users as $user) {
        $ret_val .= '<tr><td>' . $user['firstname'] . '</td><td>' . $user['lastname'] . '</td><td><a href=\"users.php?id="' . $user['id'] . '\>' . $user['email'] . '</a></td><td>' . $user['language'] . '</td>';
    }

    echo $ret_val;

?>
