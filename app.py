from flask import Flask, render_template, request
import pandas as pd
import os
from openpyxl import Workbook

app = Flask(__name__)
wb = Workbook()
ws = wb.active

df = pd.read_excel("Project.xlsx", sheet_name='Sales File')
global bill

headers = ["Sr. No.", "Quotation Ref.", "Quotation Date- mm/dd/yy", "Customer Id", "Customer Name"]
for i in range(1, 7):
    headers += [f"SKU Code{i}", f"SKU Name{i}", f"Qty in Ltr/KG{i}", f"Quoted rate{i}"]

bill = []

@app.route("/")
def home():
    return render_template("tri.php")


@app.route("/get-customer")
def get_customer():
    customer_id = request.args.get("customer_id")
    customer = df.loc[df["Customer Id"] == int(customer_id), "Customer Name"].iloc[0]
    return {"customer_name": customer}


@app.route("/get-product")
def get_product():
    product_id = request.args.get("product_id")
    product = df.loc[df["SKU Code"] == int(product_id), "SKU Name"].iloc[0]
    return {"product_name": product}

@app.route("/add_item")
def add_item():
    global bill
    product_id = request.args.get("product_id")
    rate = float(request.args.get("rate"))
    product = get_product()["product_name"]
    if not bill:
        customer_id = request.args.get("customer_id")
        customer = df.loc[df["Customer Id"] == int(customer_id), "Customer Name"].iloc[0]
        bill.append([1, "", "", customer_id, customer])
    item = [len(bill[0])+1, "", "", "", "", product_id, product, "", rate]
    bill[0] += item
    return render_template("tri.php", bill=bill)

# @app.route("/remove_item")
# def remove_item():
#     global bill
#     item_num = int(request.args.get("item_num"))
#     if len(bill[0]) <= item_num:
#         return "Item not found"
#     bill[0].pop(item_num)
#     for i, item in enumerate(bill[0][1:], start=1):
#         item[0] = i
#     return render_template("tri.php", bill=bill)
  

@app.route("/exportToExcel")
def exportToExcel():
    global bill
    headers = ["Sr. No.", "Date", "Customer ID", "Customer Name", "Product ID", "Product Name", "Quantity", "Rate", "Amount"]
    rows = [headers] + bill
    exportToExcel(rows, "report")
    wb.save("bill.xlsx")
    message = "Bill exported successfully!"
    return render_template("tri.php", message=message)

if __name__ == "__main__":
    app.run(debug=True)