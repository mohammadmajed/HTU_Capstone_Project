<?php

namespace Core\Controller;

use Core\Base\Controller;
use Core\Base\View;
use Core\Helpers\Helper;
use Core\Model\Item;
use Core\Model\Transaction;

class Transactions extends Controller
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

    /**
     * Gets all transactions
     *
     * @return array
     */
    public function index()
    {
        $this->permissions(['transaction:read']);
        $this->view = 'transactions.index';
        $transaction = new Transaction; // new model post.
        $this->data['transactions'] = $transaction->get_all();
        $this->data['transactions_count'] = count($transaction->get_all());
    }

    public function single()
    {
        $this->permissions(['transaction:read']);
        $this->view = 'transactions.single';
        $transaction = new Transaction ;
        $this->data['transactions'] = $transaction->get_by_id($_GET['id']);
    }

    /**
     * Display the HTML form for transactions creation
     *
     * @return void
     */
    public function create()
    {
        $this->permissions(['transaction:create']);
        $this->view = 'transactions.create';
        $item=new Item();
        $this->data['items'] = $item->get_all();
    }

    /**
     * Creates new transactions
     *
     * @return void
     */
    public function store()
    {
        $this->permissions(['transaction:create']);
        $transactions= new Transaction();
        $transactions->create($_POST);
        $_POST['user_id'] = $_SESSION['user']['user_id'];
        Helper::redirect('/transactions');
    }
   

    /**
     * Display the HTML form for transactions update
     *
     * @return void
     */
    public function edit()
    {
        $this->permissions(['transaction:read','transaction:create']);
        $this->view = 'transactions.edit';
        $transactions = new Transaction ;
        $selected_transaction = $transactions->get_by_id($_GET['id']);
        $this->data['transactions'] = $selected_transaction;
        
        $item = new Item;
        $item_by_id = $item->get_by_id($_GET['id']);
        if (!empty($selected_transaction)) {
            $date = new \DateTime($selected_transaction->updated_at);
            $selected_transaction->updated_at = $date->format('m/d/Y');
            $this->data['transactions'] = $selected_transaction;
        }
    }

    /**
     * Updates the transactions
     *
     * @return void
     */
    public function update()
    {
        $this->permissions(['transaction:read','transaction:update']);
        $transaction = new Transaction();
        $selected_transaction = $transaction->get_by_id($_POST['id']);
        $transaction_id = $_POST['id'];
        $post_quantity = $_POST['quantity'];
        $quantity_transaction = $selected_transaction->quantity;
        $transaction->update($_POST);
        Helper::redirect('/transaction?id=' . $_POST['id']);
    }   

    /**
     * Delete the transactions
     *
     * @return void
     */
    public function delete()
    {
        $this->permissions(['transaction:delete']);
        $transaction = new Transaction();
        $transaction->delete($_GET['id']);
        Helper::redirect('/transactions');
    }
}