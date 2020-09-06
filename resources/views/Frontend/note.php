//main functions

-Item Management
   -Brand / Category / Subcategory

-Sell / Shopping

-Order Management
 	-items / customer
 	-orders / order_detaild
-Customer Manage
    -Reports
    
-orders
	-voucherid,userid.orderdate,status,

-order_details
	-voucherid,product_id,qty

-brands
-> 1 | b1 |photo
-> 2 | b2 |photo

-categories
-> 1 | fashion | photo
-> 2 | electronic | photo
 
-subcategories
-> 1 | baby wear| 1

Model Relationship
------------------
-one-to-ont
	-hasone(p)
	-belongs(c)

-one-to-many
	-hasMany(p)
	-belongto(c)

-many-to-many
	-belongsToMany
	-pivot table

Item (CRUD)
----------------
create-show form,store data
retrieve-display data(all , row)
update-show form with old value, update data
delete-delete data

