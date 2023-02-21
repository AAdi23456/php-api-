<?php

// Define the data array
$products = array(
    array('id' => '1','title' => 'burger tikka','cost' => '449','image' => 'https://www.cfacdn.com/img/order/menu/Online/Entrees/Jul19_CFASandwich_pdp.png'),
    array('id' => '2','title' => 'chicken burger','cost' => '449','image' => 'https://www.cfacdn.com/img/order/COM/Menu_Refresh/Entree/Entree%20PDP/_0000s_0004_NEWStack6200001CFAPDPDeluxeSandwich1085png.png'),
    array('id' => '3','title' => 'roasted chicken','cost' => '449','image' => 'https://www.cfacdn.com/img/order/menu/Online/Entrees/CFASpicySandwich_1080.png'),
    array('id' => '4','title' => 'beef','cost' => '449','image' => 'https://www.cfacdn.com/img/order/COM/Menu_Refresh/Entree/Entree%20Desktop/_0003s_0012_%5BFeed%5D_0001s_0023_Entrees_Spicy-Deluxe-Sandwich.png'),
    array('id' => '5','title' => 'lassi','cost' => '449','image' => 'https://www.cfacdn.com/img/order/COM/Menu_Refresh/Entree/Entree%20PDP/_0000s_0009_Final__0026_CFA_PDP_Grilled-Deluxe-Sandwich_1085.png'),
    array('id' => '6','title' => 'sandwich','cost' => '449','image' => 'https://www.cfacdn.com/img/order/menu/Online/Entrees/grilledClub_colbyJack_PDP.png'),
    array('id' => '7','title' => 'beef','cost' => '449','image' => 'https://www.cfacdn.com/img/order/menu/Online/Entrees/nuggets_8ct_PDP.png'),
    array('id' => '8','title' => 'drink','cost' => '449','image' => 'https://www.cfacdn.com/img/order/menu/Online/Entrees/grilledNuggets_8ct_PDP.png'),
    array('id' => '9','title' => 'roasted chicken','cost' => '449','image' => 'https://www.cfacdn.com/img/order/menu/Online/Entrees/strips_3ct_PDP.png'),
    array('id' => '10','title' => 'beef chicken','cost' => '449','image' => 'https://www.cfacdn.com/img/order/menu/Online/Entrees/wrap_pdp.png'),
    array('id' => '11','title' => 'chicken burger','cost' => '449','image' => 'https://www.cfacdn.com/img/order/menu/Online/Salads%26wraps/cobbSalad_nug_pdp.png'),
    array('id' => '12','title' => 'big salad','cost' => '449','image' => 'https://www.cfacdn.com/img/order/menu/Online/Salads%26wraps/sswSalad_spicyGrilled_pdp.png'),
    array('id' => '13','title' => 'roasted chicken','cost' => '449','image' => 'https://www.cfacdn.com/img/order/menu/Online/Salads%26wraps/marketSalad_grilled_pdp.png'),
    array('id' => '14','title' => 'chicken fried','cost' => '449','image' => 'https://www.cfacdn.com/img/order/COM/Menu_Refresh/Treats/Treats%20PDP/_0000s_0003_%5BFeed%5D_0005s_0001_Treats_Frosted-Lemonade.png'),
    array('id' => '15','title' => 'carmel drink','cost' => '449','image' => 'https://www.cfacdn.com/img/order/COM/Menu_Refresh/Treats/Treats%20Desktop/_0001s_0004_%5BFeed%5D_0005s_0000_Treats_Frosted-Coffee.png'),
    array('id' => '16','title' => 'choco-drink','cost' => '449','image' => 'https://www.cfacdn.com/img/order/menu/Online/Sides%26treats/PDP_CCCookie.png'),
    array('id' => '17','title' => 'milkshake','cost' => '449','image' => 'https://www.cfacdn.com/img/order/COM/Menu_Refresh/Treats/Treats%20PDP/031717_FudgeChunkBrownie_PDP.png'),
    array('id' => '18','title' => 'chicken-roasted','cost' => '449','image' => 'https://www.cfacdn.com/img/order/menu/Mobile/Desserts/Menu%20Item/16oz_C%26C_Milkshake-1080.png'),
    array('id' => '19','title' => 'banana shake','cost' => '449','image' => 'https://www.cfacdn.com/img/order/menu/Mobile/Desserts/Menu%20Item/16oz_ChocolateMilkshake-1080.png'),
    array('id' => '20','title' => 'choco-cream','cost' => '449','image' => 'https://www.cfacdn.com/img/order/menu/Mobile/Desserts/Menu%20Item/16oz_StrawberryMilkshake-1080.png'),
    array('id' => '21','title' => 'milkshake','cost' => '449','image' => 'https://www.cfacdn.com/img/order/menu/Mobile/Desserts/Menu%20Item/16oz_VanillaMilkshake-1080.png'),
    array('id' => '22','title' => 'banancream','cost' => '449','image' => 'https://www.cfacdn.com/img/order/COM/Menu_Refresh/Drinks/Drinks%20PDP/_0000s_0027_%5BFeed%5D_0006s_0013_Drinks_Ice-Dream.png'),
    array('id' => '23','title' => 'caremal','cost' => '449','image' => 'https://www.cfacdn.com/img/order/menu/Online/Sides%26treats/IceDream_RedCup_1080x1080.png'),
    array('id' => '24','title' => 'dry fruits','cost' => '449','image' => 'https://www.cfacdn.com/img/order/menu/Online/Drinks/tea_pdp.png'),
    array('id' => '25','title' => 'chicken-roasted','cost' => '449','image' => 'https://www.cfacdn.com/img/order/menu/Online/Drinks/lemonade_pdp.png')
  );

// Get the HTTP method and the requested ID (if any)
$method = $_SERVER['REQUEST_METHOD'];
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Handle the CRUD operations based on the HTTP method
switch ($method) {
    case 'GET':
        // Return a single record or all records
        if ($id) {
            foreach ($products as $record) {
                if ($record['id'] == $id) {
                    header('Content-Type: application/json');
                    echo json_encode($record);
                    exit;
                }
            }
            http_response_code(404);
        } else {
            header('Content-Type: application/json');
            echo json_encode($products);
        }
        break;
    case 'POST':
        // Add a new record
        $newRecord = json_decode(file_get_contents('php://input'), true);
        $newRecord['id'] = count($products) + 1;
        $products[] = $newRecord;
        header('Content-Type: application/json');
        echo json_encode($newRecord);
        break;
    case 'PUT':
        // Update an existing record
        $updatedRecord = json_decode(file_get_contents('php://input'), true);
        foreach ($products as &$record) {
            if ($record['id'] == $id) {
                $record = array_merge($record, $updatedRecord);
                header('Content-Type: application/json');
                echo json_encode($record);
                exit;
            }
        }
        http_response_code(404);
        break;
    case 'DELETE':
        // Delete an existing record
        foreach ($products as $key => $record) {
            if ($record['id'] == $id) {
                unset($products[$key]);
                header('Content-Type: application/json');
                echo json_encode(array('message' => 'Record deleted successfully'));
                exit;
            }
        }
        http_response_code(404);
        break;
    default:
        http_response_code(405);
        break;
}
