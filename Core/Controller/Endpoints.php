<?php

namespace Core\Controller;

use Exception;
use Core\Model\Item;
use Core\Helpers\Tests;
use Core\Base\Controller;
use Core\Model\Transaction;
use Core\Controller\Transactions;
use Core\Helpers\Helper;

class Endpoints extends Controller
{
    use Tests;
    protected $request_body;
    protected $http_code = 200;

    protected $response_schema = array(
        "success" => true, // to provide the response status.
        "message_code" => "", // to provide message code for the front-end developer for a better error handling
        "body" => []
    );

    function __construct()
    {
        $this->auth();
        $this->admin_view(true);
        $this->request_body = (array) json_decode(file_get_contents("php://input"));
    }

 function render()
    {

        header("Content-Type: application/json"); // changes the header information
        http_response_code($this->http_code); // set the HTTP Code for the response
        echo json_encode($this->response_schema); // convert the data to json format
    }

    function items()
    {
        try {
            $item = new Item;
            $items = $item->get_all();
            if (empty($items)) {
                throw new \Exception('No items were found!');
            }
            $this->response_schema['body'] = $items;
            $this->response_schema['message_code'] = "items_collected_successfuly";
        } catch (\Exception $error) {
            $this->response_schema['success'] = false;
            $this->response_schema['message_code'] = $error->getMessage();
            $this->http_code = 404;
        }
    }

    function items_by_id()
    {
        try {
            self::check_if_empty($this->request_body);
            $item = new Item;
            $item = $item->get_by_id($this->request_body['id']);
            if (empty($item)) {
                throw new \Exception('No items were found!');
            }
            $this->response_schema['body'] = $item;
            $this->response_schema['message_code'] = "item_collected_successfuly";
        } catch (\Exception $error) {
            $this->response_schema['success'] = false;
            $this->response_schema['message_code'] = $error->getMessage();
            $this->http_code = 404;
        }
    }

    
    function transactions()
    {

            try {
          
                    $Transaction = new Transaction;
                    $Transactions = $Transaction->get_all();
                    if (empty($Transactions)) {
                            throw new \Exception('No Transactions were found!');
                    }
                    $this->response_schema['body'] = $Transaction->get_all();
                    $this->response_schema['message_code'] = "Transactions_collected_successfuly";
            } catch (\Exception $error) {
                    $this->response_schema['success'] = false;
                    $this->response_schema['message_code'] = $error->getMessage();
                    $this->http_code = 404;
            }
    }



    function transaction_create()
    {
        $this->permissions(['transactions:create']);
        self::check_if_empty($this->request_body['total']);


        $transaction_array = [
            'user_id'=>$this->request_body['user_id'],
            'item_id' => $this->request_body['item_id'],
            'quantity' => $this->request_body['quantity'],
            'total' => $this->request_body['total']
         ];

        try {
            $quantity_order = $this->request_body['quantity'];
            $items = new Item();
            $item_result = $items->get_by_id($this->request_body['item_id']);
            {
                $transactions = new Transaction;
                $transactions->create($transaction_array);
                $transactions = $transactions->get_by_id($transactions->connection->insert_id);
                $user_id = $_SESSION['user']['id'];         
                $transactions->connection->query("INSERT INTO transactions  VALUES ('$transaction_array')");
            }
        } catch (\Exception $error) {
            $this->response_schema['message_code'] = $error->getMessage();
            $this->http_code = 422;
        }
    }


 function transaction_delete()
    {
        $this->permissions(['transactions:delete']);

        $item = new Item();
        $item_select = $item->get_by_id($this->request_body['item_id']);
        $item_id = $this->request_body['item_id'];
        $this->request_body['quantity'];
        $transactions = new Transaction();
        $transactions->delete($this->request_body['id']);
    }
}


