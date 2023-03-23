<!DOCTYPE html>
        <html>

        <head>
            <style>

*{
            margin:0px ;
            padding: 0;
        }

        .Titlebar{
            height: 55px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            margin bottom: 100px;
        
            background-color: #1f0b67;
            border-bottom-width: 1px;
            border-bottom-style: solid;
            
        }
     
        .left-section {
            background-color: #1f0b67;
            display: flex;
            flex-direction: row;
            align-items: center;
            width: 400px;
            height: 55px;
            z-index: 100;
        }
        
        .right-section{
            background-color: #1f0b67;
            margin-top: 0px;
            display: flex;
            flex-direction: row;
            align-items: center;
            height: 55px;
        
        }
        
        .hamburger-menu{
            height: 24px;
            width: 100%;
            margin-left: 90px;
            margin-right: 2px;
        }
        
        
        .Titlebar li {
            float: left;
            font-size: 18px;
            background-color: #1f0b67;

        
        }
        
        .Titlebar li:hover {
            background-color: #90858588;
        }
        
        .Titlebar a {
            display: block;
            padding: 100px 15px;
            color: #e80000;
            text-decoration: none;
         
        }
        
        .Titlebar ul ul {
            display: none;
            position: absolute; 
            top: 50px;
            width: max-content;
        }
        
        .Titlebar ul ul ul {
            top: 100px; 
            left: 100%;
        }
        
        .Titlebar li:hover > ul {
            display:inherit;
        }
        
        .Titlebar ul ul li {
            width: 200px;
            float: none;
            display: list-item;
            position: relative;
        }
        
        .Titlebar ul ul ul ul li {
            position: relative;
        }
        
        
          
        .Titlebar ul {
            list-style: none;
            margin: 0px;
            padding: 0;
            overflow: hidden;
            background-color: #ffffff;
          }
          
          .Titlebar li {
            float: left ;
          }
          
          .Titlebar li a {
            display: block;
            color: rgb(255, 255, 255);
            text-align: center;
            padding: 0px 16px;
            text-decoration: none;
          }
          
          
          .Titlebar .Home a, .Titlebar .Product-list a {
            display: block;
            color: rgb(255, 255, 255);
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
          }
          
          .Titlebar .Home ul, .Titlebar .Product-list ul {
            display: none;
            position: absolute;
            background-color: #333;
          }
          
          .Titlebar li ul.dropdown li {
            clear: both;
            width: 100%;
          }
          
          .Titlebar li:hover .dropdown {
            display: block;
          }
        
        .Titlebar li ul.dropdown {
            display: none;
            position: absolute;
            background-color: #333;
            width: 204px; /* Add this line */
            height: 140px; /* Add this line */
        }
        
        .Home, .Product-list {
            display: inline-block;
            width: 200px;
            justify-content: center; /* Add this line */
            align-items: center; /* Add this line */
            height: 55px;
            font-size: x-large;
            background-color: #1f0b67;
        }
        
        .pr {
            display: inline-block;
            width: 200px;
            justify-content: center; /* Add this line */
            align-items: center; /* Add this line */
            height: 40px;
            font-size: x-large;
            background-color: #1f0b67;
            margin: auto;
        }


                /* Table styles */
table {
  border-collapse: collapse;
  margin-top: 20px;
  width: 100%;
}

th, td {
  border: 1px solid black;
  padding: 10px;
  text-align: center;
}

thead {
  background-color: #f2f2f2;
}

/* Form styles */
form {
  margin-top: 100px;
}

label {
  display: inline-block;
  width: 100px;
  text-align: center;
  margin-right: 10px;
}

input[type=text] {
  width: 200px;
  padding: 5px;
  font-size: 16px;
  border: 1px solid #ccc;
}

button[type=button] {
  padding: 5px 10px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type=button]:hover {
  background-color: #45a049;
}

h1 {
  text-align: center;
}

    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>

            <title>Quotation creation</title>
        </head>
        <body>
            
        <nav>
            
            <div class="Titlebar">
                 <div class="left-section">
                     <ul>
                         <li>
                         <div class="Home"> <a href="#">Home</a></div>
                             <ul class="dropdown">
                                 <li><a href="#">Quotation Report </a></li>
                                 <li><a href="#">Quotation Analysis </a></li>
                                 <li><a href="#">Visual Analysis </a></li>
                             </ul>
                         </li>
                         <li>
                         <div class="Product-list"><a href="#">Product list</a></div>
                             <ul class="dropdown">
                                 <li><a href="#">Item list with price </a></li>
                                 <li><a href="#">Salesmen File </a></li>
                                 <li><a href="#">Customer list</a></li>
                             </ul>
                         </li>
                     </ul>  
                 </div>  
                 
                 <div class="right-section">
                     <ul>
                         <li>
                         <div class="pr"><a href="#">Profiles</a></div>
                             <ul class="dropdown">
                             <li><a herf="#">My Profile</a></li>
                             <li><a herf="#">Log out</a></li>
                         </ul>
                     </li>    
                 </div>
             </div>
         </nav>

            <form>
                <label for="customer_id">Customer ID:</label>
                <input type="text" id="customer_id" name="customer_id">
                <button type="button" onclick="getCustomer()">Get Customer</button>
                <br><br>
                <label for="product_id">Product ID:</label>
                <input type="text" id="product_id" name="product_id">
                <button type="button" onclick="getProduct()">Get Product</button>
                <br><br>
                <label for="rate">Rate:</label>
                <input type="text" id="rate" name="rate">
                <button type="button" onclick="addItem()">Add Item</button>
                <br><br>
                <!-- <label for="remove_item">Remove Item:</label>
                <input type="text" id="remove_item" name="remove_item">
                <button type="button" onclick="remove_item()">Remove Item</button> -->
            </form>
            <br><br>
            <table>
  <thead>
    <tr>
      <th rowspan="2">Sr. No.</th>
      <th rowspan="2">Quotation Ref.</th>
      <th rowspan="2">Quotation Date - mm/dd/yy</th>
      <th rowspan="2">Customer Id</th>
      <th rowspan="2">Customer Name</th>
      <th colspan="4">Item 1</th>
      <th colspan="4">Item 2</th>
      <th colspan="4">Item 3</th>
      <th colspan="4">Item 4</th>
      <th colspan="4">Item 5</th>
      <th colspan="4">Item 6</th>
    </tr>
    <tr>
      <th>SKU Code</th>
      <th>SKU Name</th>
      <th>Qty in Ltr/KG</th>
      <th>Quoted rate</th>
      <th>SKU Code</th>
      <th>SKU Name</th>
      <th>Qty in Ltr/KG</th>
      <th>Quoted rate</th>
      <th>SKU Code</th>
      <th>SKU Name</th>
      <th>Qty in Ltr/KG</th>
      <th>Quoted rate</th>
      <th>SKU Code</th>
      <th>SKU Name</th>
      <th>Qty in Ltr/KG</th>
      <th>Quoted rate</th>
      <th>SKU Code</th>
      <th>SKU Name</th>
      <th>Qty in Ltr/KG</th>
      <th>Quoted rate</th>
      <th>SKU Code</th>
      <th>SKU Name</th>
      <th>Qty in Ltr/KG</th>
      <th>Quoted rate</th>
    </tr>
  </thead>
  <tbody>
    <!-- table body goes here -->
  

                <tbody id="bill_table">
                </tbody>
            </table>
            <br><br>
            <button type="button" onclick="exportBill()">Export Bill</button>
            <p id="message"></p>
            <script>
                let customer_name = "";
                let product_name = "";
                let bill = [];
                let sr_no = 1;

                function getCustomer() {
                    let customer_id = document.getElementById("customer_id").value;
                    fetch(`/get-customer?customer_id=${customer_id}`)
                        .then(response => response.json())
                        .then(data => {
                            customer_name = data.customer_name;
                            alert(`Customer name: ${customer_name}`);
                        })
                        .catch(error => console.error(error));
                }

                function getProduct() {
                    let product_id = document.getElementById("product_id").value;
                    fetch(`/get-product?product_id=${product_id}`)
                        .then(response => response.json())
                        .then(data => {
                        product_name = data.product_name;
                        document.getElementById("rate").value = data.rate;
                        alert(`Product name: ${product_name}`);
                    })
                    .catch(error => console.error(error));
            }

            function addItem() {
            let customer_id = document.getElementById("customer_id").value;
            let product_id = document.getElementById("product_id").value;
            let quantity = prompt("Enter quantity:");
            let rate = document.getElementById("rate").value;
            let amount = quantity * rate;

            // Check if there is an existing row for the current customer
            let row = document.querySelector(`#bill_table tr[data-customer-id="${customer_id}"]`);

            if (!row) {
                // If there is no existing row, create a new row
                row = document.createElement("tr");
                row.setAttribute("data-customer-id", customer_id);
                row.innerHTML = `
                    <td>${sr_no++}</td>
                    <td><input type="text"></td>
                    <td><input type="date"></td>
                    <td><input type="text" value="${customer_id}" disabled></td>
                    <td><input type="text" value="${customer_name}" disabled></td>
                    <td><input type="text" value="${product_id}" disabled></td>
                    <td><input type="text" value="${product_name}" disabled></td>
                    <td><input type="text" value="${quantity}" disabled></td>
                    <td><input type="text" value="${rate}" disabled></td>
                    
                `;
                document.getElementById("bill_table").appendChild(row);
            } else {
                // If there is an existing row, add the new product to that row
                let cell = document.createElement("td");
                cell.innerHTML = `
                    <input type="text" value="${product_id}" disabled>
                `;
                row.appendChild(cell);
                
                cell = document.createElement("td");
                cell.innerHTML = `
                    <input type="text" value="${product_name}" disabled>
                `;
                row.appendChild(cell);
                
                cell = document.createElement("td");
                cell.innerHTML = `
                    <input type="text" value="${quantity}" disabled>
                `;
                row.appendChild(cell);
                
                cell = document.createElement("td");
                cell.innerHTML = `
                    <input type="text" value="${rate}" disabled>
                `;
                row.appendChild(cell);
            }

            document.getElementById("message").innerHTML = `${product_name} added to the bill.`;
        }
      
//         function removeItem(itemNum) {
//   // Get the table row for the item to remove
//   let row = document.querySelector(`#bill_table tr[data-item-num="${itemNum}"]`);
  
//   // If the row doesn't exist, return
//   if (!row) {
//     return;
//   }
  
//   // Remove the row from the table
//   row.remove();
  
//   // Update the item numbers for the remaining rows
//   let rows = document.querySelectorAll("#bill_table tr");
//   for (let i = 1; i < rows.length; i++) {
//     let itemNumCell = rows[i].querySelector("td:first-child");
//     itemNumCell.textContent = i;
//     itemNumCell.parentElement.setAttribute("data-item-num", i);
//   }
  
//   // Update the message
//   document.getElementById("message").innerHTML = `Item ${itemNum} removed from the bill.`;
// }


        
	function exportBill() {
		let quotation_ref = prompt("Enter quotation reference:");
		let quotation_date = prompt("Enter quotation date (mm/dd/yy):");
		let table_rows = document.querySelectorAll("#bill_table tbody tr");
		let table_data = [];

		table_rows.forEach(row => {
			let data = {
				"Quotation Ref.": quotation_ref,
				"Quotation Date - mm/dd/yy": quotation_date,
				"Customer Id": customer_id,
				"Customer Name": customer_name,
				"SKU Code 1": row.cells[5].querySelector("input").value,
				"SKU Name 1": row.cells[6].querySelector("input").value,
				"Qty in Ltr/KG 1": row.cells[7].querySelector("input").value,
				"Quoted rate 1": row.cells[8].querySelector("input").value,
				"SKU Code 2": row.cells[9].querySelector("input").value,
				"SKU Name 2": row.cells[10].querySelector("input").value,
				"Qty in Ltr/KG 2": row.cells[11].querySelector("input").value,
				"Quoted rate 2": row.cells[12].querySelector("input").value,
				"SKU Code 3": row.cells[13].querySelector("input").value,
				"SKU Name 3": row.cells[14].querySelector("input").value,
				"Qty in Ltr/KG 3": row.cells[15].querySelector("input").value,
				"Quoted rate 3": row.cells[16].querySelector("input").value,
				"SKU Code 4": row.cells[17].querySelector("input").value,
				"SKU Name 4": row.cells[18].querySelector("input").value,
				"Qty in Ltr/KG 4": row.cells[19].querySelector("input").value,
				"Quoted rate 4": row.cells[20].querySelector("input").value,
				"SKU Code 5": row.cells[21].querySelector("input").value,
				"SKU Name 5": row.cells[22].querySelector("input").value,
				"Qty in Ltr/KG 5": row.cells[23].querySelector("input").value,
				"Quoted rate 5": row.cells[24].querySelector("input").value,
				"SKU Code 6": row.cells[25].querySelector("input").value,
				"SKU Name 6": row.cells[26].querySelector("input").value,
				"Qty in Ltr/KG 6": row.cells[27].querySelector("input").value,
				"Quoted rate 6": row.cells[28].querySelector("input").value
				};
        table_data.push(data);
    });

    let csv = "data:text/csv;charset=utf-8,";

    table_data.forEach(item => {
        let row = "";
        for (let prop in item) {
            row += `${item[prop]},`;
        }
        row = row.slice(0, -1);
        csv += `${row}\n`;
    });

    let encodedUri = encodeURI(csv);
    let link = document.createElement("a");
    link.setAttribute("href", encodedUri);
    link.setAttribute("download", `quotation_${quotation_ref}.csv`);
    document.body.appendChild(link);
    link.click();
    }
        
    </script>
  </body>
</html>