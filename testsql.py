import mysql.connector

mydb = mysql.connector.connect(
host="dno6xji1n8fm828n.cbetxkdyhwsb.us-east-1.rds.amazonaws.com",
user="ioax91eaxfvkxffz", 
passwd="aegm1e6vrtij4gtl",
database="nqlbwot8kpwvvb06"
)

mycursor = mydb.cursor()

sql = "INSERT INTO wh (id, name, subname) VALUES (%s, %s, %s)"
val = ("", "John", "Highway 21")
mycursor.execute(sql, val)

mydb.commit()

print(mycursor.rowcount, "record inserted.")
