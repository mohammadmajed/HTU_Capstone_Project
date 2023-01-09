<?php

namespace Core\Controller;

use Core\Model\User;
use Core\Helpers\Helper;
use Core\Base\Controller;
use Core\Model\Item;
use Core\Model\Transaction;

class Admin extends Controller
{
    public function render()
    {
        if (!empty($this->view))
            $this->view();
    }

    function __construct()
    {
        $this->auth();
        $this->admin_view(true);
    }

    public function index()
    {
        $this->view = 'dashboard';
        $user = new User;
        $item = new Item; 
        $total = 0;
        $transaction = new Transaction();
        $get_all_sales = $transaction->get_all();
        foreach ($get_all_sales as $sales) {
            $total = $total + $sales->total;
        }
        $this->data['user_info'] = $user->get_by_id($_SESSION['user']['user_id']);
            $this->data['users_count'] = count($user->get_all());
            $this->data['items_count'] = count($item->get_all());
            $this->data['transaction_count'] = count($transaction->get_all());
            
            $this->data['total_sales'] = $total;

         }
    }
