--Write a query to select all records in customer table
SELECT * FROM customer;

--Write a query to select record with id 251
SELECT * FROM customer WHERE customer_id=251;

--Write a query to select records with id 251,252,256
SELECT * FROM customer WHERE customer_id IN (251,252,256);

--Write a query to select customers with ids between 100 and 200
SELECT * FROM customer WHERE customer_id BETWEEN 100 AND 200;

--Write a query to add record for user John Doe with email "john@customer.com"
INSERT INTO customer VALUES(600, "JOHN", "DOE", 'john@customer.com', 1, '2006-02-14 22:04:37', '2006-02-15 04:57:20');

--Update created record for John Doe with email "john_doe@sakila.com"
UPDATE customer SET email='john_doe@sakila.com' WHERE customer_id = 600;

--Write a query to delete customer John Doe.
DELETE FROM customer WHERE customer_id = 600;