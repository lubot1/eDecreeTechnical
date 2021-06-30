# Technical Portion
## Group A PHP-based calculator to find the mean, median, or mode for a series of numbers.


## Group B: Explain different types of SQL joins using a database of your choice.
Using promising places db from last semester
### Inner Join
Returns rows from both tables using matching value in query
Example: SELECT propertyaddress, cityname FROM `properties` INNER JOIN `cities` ON properties.cityid=cities.cityid

### Inclusive Left Join
Returns all rows from left table and rows from right table *if* the required value matches

Example: SELECT propertyaddress, CONCAT(landlordfname,' ', landlordlname) AS "Landlord" FROM `landlords` LEFT JOIN `leases` ON landlords.landlordid=leases.landlordid LEFT JOIN `properties` ON leases.propertyid=properties.propertyid

Shows all the properties owned by landlords, with use of a bridging table. Selects all landlords (even ones with no property).

### Exclusive Left Join
Returns all rows from right table with *no* match to the left table

Example: SELECT propertyaddress, CONCAT(landlordfname,' ', landlordlname) AS "Landlord" FROM `landlords` LEFT JOIN `leases` ON landlords.landlordid=leases.landlordid LEFT JOIN `properties` ON leases.propertyid=properties.propertyid WHERE leases.leaseid IS NULL

This query displays all landlords that do not own ANY property

### Inclusive Right Join
Returns all rows from right table and rows from left table *if* the required value matches

Example: SELECT propertyaddress, CONCAT(landlordfname,' ', landlordlname) AS "Landlord" FROM `landlords` RIGHT JOIN `leases` ON landlords.landlordid=leases.landlordid RIGHT JOIN `properties` ON leases.propertyid=properties.propertyid

This query returns all properties, including ones with no landlord. As you can tell this excludes landlords with no properties but still shares the same results as the inclusive left join for properties with owners.

### Exclusive Right Join
Returns all rows from right table with *no* match to the left table

Example: SELECT propertyaddress, CONCAT(landlordfname,' ', landlordlname) AS "Landlord" FROM `landlords` RIGHT JOIN `leases` ON landlords.landlordid=leases.landlordid RIGHT JOIN `properties` ON leases.propertyid=properties.propertyid WHERE leases.leaseid is NULL

This query displays all properties that do not have ANY owners
