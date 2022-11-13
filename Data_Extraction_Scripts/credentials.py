import numpy as np
import pandas as pd
import mysql.connector
import requests
conn = mysql.connector.connect(host="localhost", user="root", password="", database="test")
mycursor = conn.cursor()
for i in range(1,31):
    url="https://dummyjson.com/users/"+str(i)
    response = requests.get(url)
    credentials=pd.DataFrame(response.json())[['id','username','password']]
    credentials_list=credentials.values.tolist()
    extracted_creds=(credentials_list[0][0],credentials_list[0][1],credentials_list[0][2])
    credentials_to_sql="INSERT INTO `credentials`(`id`, `username`, `password`) VALUES (%s,%s,%s)"
    try:
        mycursor.execute(credentials_to_sql,extracted_creds)
        conn.commit()
        print("Inserted into DB")
    except:
        print("Could not insert into DB")