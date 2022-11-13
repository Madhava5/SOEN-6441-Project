import numpy as np
import pandas as pd
import mysql.connector
import requests
conn = mysql.connector.connect(host="localhost", user="root", password="", database="test")
mycursor = conn.cursor()
for i in range(1,31):
    url="https://dummyjson.com/users/"+str(i)
    response = requests.get(url)
    extracting_values=pd.DataFrame(response.json())[['id','firstName','lastName','maidenName','gender','email','phone']]
    values_to_list=extracting_values.values.tolist()
    adress_1=pd.DataFrame(response.json())['address']['address']
    adress_2=pd.DataFrame(response.json())['address']['city']
    adress_3=pd.DataFrame(response.json())['address']['postalCode']
    adress_4=pd.DataFrame(response.json())['address']['state']
    address=adress_1+" "+adress_2+" "+adress_3+" "+adress_4
    name=values_to_list[0][1]+" "+values_to_list[0][2]+" "+values_to_list[0][3]
    values=(values_to_list[0][0],name,values_to_list[0][4],values_to_list[0][5],values_to_list[0][6],address)
    sql="INSERT INTO `user`(`userid`, `name`, `gender`, `email`, `phone`, `address`) VALUES (%s,%s,%s,%s,%s,%s)"
    # print(sql,values)
    # mycursor.execute(sql, values)
    try:
        mycursor.execute(sql, values)
        conn.commit()
        print("Inserted")
    except:
        print("Could not insert")



    



    