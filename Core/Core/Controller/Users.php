<?php

namespace Core\Controller;

use Core\Base\Controller;
use Core\Helpers\Helper;
use Core\Helpers\Tests;
use Core\Model\User;

class Users extends Controller
{
        use Tests;
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
         * Gets all users
         *
         * @return array
         */
        public function index()
        {
                $this->permissions(['user:read']);
                $this->view = 'users.index';
                $user = new User; // new model user.
                $this->data['users'] = $user->get_all();
                $this->data['users_count'] = count($user->get_all());
        }

        public function single()
        {
                self::check_if_exists(isset($_GET['id']), "Please make sure the id is exists");
                $this->permissions(['user:read']);
                $this->view = 'users.single';
                $user = new User();
                $this->data['user'] = $user->get_by_id($_GET['id']);
        }

        /**
         * Display the HTML form for user creation
         *
         * @return void
         */
        public function create()
        {
                $this->permissions(['user:create']);
                $this->view = 'users.create';
                
        }

        /**
         * Creates new user
         *
         * @return void
         */
        public function store()
        {
                $this->permissions(['user:create']);
                $user = new User();
                $_POST['password'] = \password_hash($_POST['password'], \PASSWORD_DEFAULT);
                if (!empty($_POST['username'])) {
                        $user->create($_POST);
                        unset($_POST);
                        Helper::redirect('/users');
                }
        }

        /**
         * Display the HTML form for user update
         *
         * @return void
         */
        public function edit()
        {
                $this->permissions(['user:read', 'user:update']);
                $this->view = 'users.edit';
                $user = new User();
                $this->data['user'] = $user->get_by_id($_GET['id']);
        }

        /**
         * Updates the user
         *
         * @return void
         */
        public function update()
        {
                $this->permissions(['user:read', 'user:update']);
                $user = new User();
                $permissions = null;
                switch ($_POST['role']) {
                        case 'admin':
                                $permissions = User::ADMIN;
                                break;

                        case 'sellar':
                                $permissions = User::Sellar;
                                break;
                        case 'accountant':
                                $permissions = User::Accountant;
                                break;
                        case 'procurement':
                                $permissions = User::Procurement;
                                break;        

                }
                unset($_POST['role']);
                $_POST['permissions'] = \serialize($permissions);
                $_POST['password'] = \password_hash($_POST['password'], \PASSWORD_DEFAULT);
                $user->update($_POST);
                Helper::redirect('/user?id=' . $_POST['id']);
        }

        /**
         * Delete the User
         *
         * @return void
         */
        public function delete()
        {
                $this->permissions(['user:read', 'user:delete']);
                $user = new User();
                $user->delete($_GET['id']);
                Helper::redirect('/users');
        }
        public function profile()
        {
                $this->view = 'users.user_profile';
                $user = new User();
                $selected_user = $user->get_by_id($_SESSION['user']['user_id']);
                $this->data['user'] = $selected_user;
                $date_create = new \DateTime($selected_user->created_at);
                $date_update = new \DateTime($selected_user->updated_at);
                $selected_user->created_at = $date_create->format('d/m/Y');
                $selected_user->updated_at = $date_update->format('d/m/Y');
        }
        public function edit_profile()
        {
                $this->view = 'users.edit_profile';
                $user = new User();
                $this->data['user'] = $user->get_by_id($_GET['id']);
        }
        public function update_profile()
        {
                $user = new User();
                $user_info = $user->get_by_id($_POST['id']);
                $_POST['display_name'] =  \htmlspecialchars($_POST['display_name']);
                $_POST['username'] =  \htmlspecialchars($_POST['username']);
                $_POST['email'] =  \htmlspecialchars($_POST['email']);
                $password_new = empty($_POST['new-password']) ? NULL : \password_hash($_POST['new-password'], \PASSWORD_DEFAULT);
                $_POST['password'] = empty($_POST['new-password']) ? $user_info->password : $password_new;
                unset($_POST['new-password']);
                $user->update($_POST);
                Helper::redirect('/user/profile?id=' . $_POST['id']);
        }

      

}
