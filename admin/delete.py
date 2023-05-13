import mysql.connector

# Connect to the database
connection = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="myprojo"
)

# Create a cursor object to execute SQL statements
cursor = connection.cursor()

# Construct the DELETE statement
delete_statement = "DELETE FROM your_table WHERE condition"

# Execute the DELETE statement
cursor.execute(delete_statement)

# Commit the changes to the database
connection.commit()

# Close the cursor and the connection
cursor.close()
connection.close()
