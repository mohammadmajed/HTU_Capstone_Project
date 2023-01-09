let price=0;
let quanitiy=0;
let totalSales = 0;
$(function () {
    // sessionStorage.getItem("user_id");
    // console.log( sessionStorage.getItem("user_id"));
    // user_id1= $('#user_id');
    var user_id = $('#user_id');
    var item_id;
    var quantity_item;
    const items = $('#items');
    const quanitiy = $('#quantity');
    const price = $('#price');
    const table = $('tbody');
    const totalSalesElement = $('#total-sales');
    // -----------------------------------------------------------//
    //API Transactions//
    $.ajax({
        type: "get",
        url: "http://htdocs-pos_mid.local/api/transactions",
        success: function (response) {
            i = 1;
            response.body.forEach(element => {
                table.append(`
                <tr id= "${element.id}" >
                    <td>${i++}</td>
                    <td>${element.id}</td>
                    <td>${element.item_id}</td>
                    <td>${element.quantity}</td>
                    <td>$ ${element.total}</td>
                    <td>
                    <a data-id="${element.id}" class="btn btn-danger">Delete<i id="delete"></a>
                    <a href="/transactions/edit?id=${element.id}&item_id=${element.item_id}" class="btn btn-warning">Edit<id="edit"></a>
                    </td>
                    </tr>
                `);
                $(`a[data-id="${element.id}"]`).click(function () {
                    let data = {
                        id: element.id,
                        item_id: element.item_id,
                        quantity: element.quantity,
                        user_id: element.user_id
                    };
                    $.ajax({
                        type: "post",
                        url: "http://htdocs-pos_mid.local/api/transaction/delete",
                        data: JSON.stringify(data),
                        success: function (response) {
                            $(document).ajaxStop(function(){
                                window.location.reload();
                                
                            });
                           alert("Transaction Successfully deleted");
                            $(`tr[id=${element.id}]`).remove();
                          
                        },
                     
                    });
                })
                totalSales = parseInt(totalSales) + parseInt(element.total);
            });


            totalSalesElement.text(totalSales);
        }
    });

});

//-----------------------------------------------------------------------------
    //API Items//
document.getElementById("validationDefault04").onchange = function(){
    let data = {
        id: this.value,
        item_id: this.value,
        quantity: this.value,
        user_id: this.value
    };
    $.ajax({
        type: "post",
        url: "http://htdocs-pos_mid.local/api/item",
        data: JSON.stringify(data),

        success: function (response) {
          console.log(response);
            price=response.body.selling_price;
            console.log(price);

        }
    
    })};

    $("#quantity").change(function(){
        quanitiy=this.value;
        
        document.getElementById("total_price").value = price*quanitiy;
        
      });

      $(".add_item").on('click', function(event){
        event.preventDefault();
        console.log("akshdjn");
        let data = {
            item_id: document.getElementById("validationDefault04").value,
            quantity:  document.getElementById("quantity").value,
            total:document.getElementById("total_price").value ,
            user_id: document.getElementById("user_id"),
        };
      
            $.ajax({
                type: "post",
                url: "http://htdocs-pos_mid.local/api/transaction/create",
                data: JSON.stringify(data),
                success: function (response) {
                    $(document).ajaxStop(function(){
                        window.location.reload();
                       
                        
                    });
                        alert('Transaction Successfully Added')
                    },         
                    
            
            })});

            
      