<?php
require_once "./config/Connection.php";
require_once "./module/Global.php";

require_once "./module/data/User.php";


$db = new Connection();
$pdo = $db->connect();

$user = new User($pdo);

if (isset($_REQUEST['request'])) {
    $req = explode('/', rtrim($_REQUEST['request'], '/'));
} else {
    http_response_code(404);
}

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('HTTP/1.1 200 OK');
    exit();
}

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        switch ($req[0]) {
            case 'lists':
                echo json_encode($user->Read_List());
                break;

            default:
                http_response_code(403);
                break;
        }
        break;

    case 'POST':
        $data = json_decode(file_get_contents("php://input"));
        // $data = decrypt(file_get_contents("php://input"));
        switch ($req[0]) {
            case 'create':
                echo json_encode($user->Create_List($data));
                break;
            case 'update':
                echo json_encode($user->Update_List($data));
                break;

            default:
                http_response_code(403);
                break;
        }

        break;
    case 'DELETE':
        switch ($req[0]) {
            case 'list':
                echo json_encode($user->Delete_List($req[1]));
                break;

            default:
                # code...
                break;
        }
        break;

    default:
        http_response_code(403);
        break;
}
