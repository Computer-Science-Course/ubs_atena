<?php

include_once("../Controllers/DatabaseController.php");

$db = new DatabaseController();

// $db->create(
//     "user",
//     "name, username, password, cpf, phone, email, user_type",
//     "?, ?, ?, ?, ?, ?, ?",
//     "sssssss",
//     ["Batatas fritas", "bats", "123456", "78478d3593", "1234567gdfdf", "joffs23@gmail.com", "administrador"]
// );

// print_r($db->getAll("user"));
// print_r($db->getAllWhere("user", "name", "Batatas Fritas"));
// $db->deleteAllWhere("user", "name", "José Aldo");
// $db->updateWhere(
//     "user",
//     ["name", "username", "password", "cpf", "phone", "email", "user_type"],
//     ["Batatas Murchas", "marisdfsas123", "1234234456", "98723465432112", "12323445678901", "bat44at@gmail.com", "medico"],
//     "name",
//     "Batatas Fritas",
// );