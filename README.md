# HTU_Capstone_Project

GET /Endpoints/items
- Fetches all Items list items from the DB.
- Request arguments: none
- 404 - No item was found

POST /transactions/create

- Create new transaction 
- Request arguments: {"quantity": bigint ,"item_id": integer,"selling_price": integer}

PUT /tranactions/update

- Edit the quantity.
- Request arguments: {"id": Integer}
- 422 - if id param was not provided

DELETE /transactions/delete

- delete a transactions
- Request arguments: {"id": Integer,"quantity": bigint}
- 422 - if id param was not provided

