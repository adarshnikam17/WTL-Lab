<?php
// Sample data (in a real-world scenario, you'd use a database)
$data = [
    ['id' => 1, 'name' => 'Adarsh Nikam', 'age' => 22],
    ['id' => 2, 'name' => 'John Doe', 'age' => 25],
];

// Handle different request methods
$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
    case 'GET':
        // Retrieve all data or a single record
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $result = array_filter($data, fn($item) => $item['id'] == $id);
            echo json_encode(array_values($result));
        } else {
            echo json_encode($data);
        }
        break;
    case 'POST':
        // Add new data
        $newData = json_decode(file_get_contents('php://input'), true);
        $data[] = $newData;
        echo json_encode($data);
        break;
    case 'PUT':
        // Update data
        $id = $_GET['id'];
        $updatedData = json_decode(file_get_contents('php://input'), true);
        foreach ($data as &$item) {
            if ($item['id'] == $id) {
                $item = array_merge($item, $updatedData);
            }
        }
        echo json_encode($data);
        break;
    case 'DELETE':
        // Delete data
        $id = $_GET['id'];
        $data = array_filter($data, fn($item) => $item['id'] != $id);
        echo json_encode(array_values($data));
        break;
    default:
        echo "Invalid request method.";
        break;
}
?>
