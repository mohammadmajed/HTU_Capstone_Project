<?php

namespace Core\Model;

use Core\Base\Model;

class Item extends Model
{
    public function get_top_5(): array
    {
        $data = array();
        $result = $this->connection->query("SELECT * FROM items ORDER BY selling_price DESC LIMIT 5");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_object()) {
                $data[] = $row;
            }
        }
        return $data;
    }
}
