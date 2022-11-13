import numpy as np
import pandas as pd
import mysql.connector
import requests
conn = mysql.connector.connect(host="localhost", user="root", password="", database="test")
mycursor = conn.cursor()
for i in range(1,31):
    url="https://dummyjson.com/products/"+str(i)
    response = requests.get(url)
    temp_products=pd.DataFrame(response.json())[['id','title','description','price','discountPercentage','brand','category']]
    extracting_products=temp_products.values.tolist()
    products_list=(extracting_products[0][0],extracting_products[0][1],extracting_products[0][2],extracting_products[0][3],extracting_products[0][4],extracting_products[0][5],extracting_products[0][6])
    products_to_sql = "INSERT INTO `products`(`pid`, `title`, `description`, `price`, `discountPercentage`, `brand`, `category`) VALUES (%s,%s,%s,%s,%s,%s,%s)"
    try:
        mycursor.execute(products_to_sql, products_list)
        conn.commit()
        print("Inserted")
    except:
        print("not done")
    
    
    


