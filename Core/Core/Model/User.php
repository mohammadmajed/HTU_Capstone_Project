<?php

namespace Core\Model;

use Core\Base\Model;

class User extends Model
{

    const ADMIN = array(
        "item:read", "item:create", "item:update", "item:delete",
        "user:read", "user:create", "user:update", "user:delete",
        "transaction:read", "transaction:create", "transaction:update", "transaction:delete",
    );

    const Sellar = array(
        "transaction:read", "transaction:create", "transaction:update", "transaction:delete",
    );


    const Accountant = array(
        "transaction:read",);


        const Procurement = array(
            "item:read", "item:create", "item:update", "item:delete",);


    public function check_username(string $username)
    {
        $result = $this->connection->query("SELECT * FROM $this->table WHERE username='$username'");
        if ($result) {
            if ($result->num_rows > 0) {
                return $result->fetch_object();
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function get_permissions(): array
    {
        $permissions = array();
        $user = $this->get_by_id($_SESSION['user']['user_id']);
        if ($user) {
            $permissions = \unserialize($user->permissions);
        }
        return $permissions;
    }
}
