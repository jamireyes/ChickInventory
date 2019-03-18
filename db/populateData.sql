INSERT INTO Account(Emp_ID, Username, Pwd, Privilege)
VALUES 
('2000', 'admin', 'admin', 'Admin'),
('2001', 'user', 'user', 'User'),
('2002', 'jamireyes', 'jami1802', 'User');

INSERT INTO Employee(Lname, Fname, MI, Contact_No, Position, DateOfBirth, Gender, CurrAddress)
VALUES
('Johnson', 'Bob', 'V','09998887777', 'Kitchen Crew', '1990-12-12', 'M', 'Cebu City'),
('Pena', 'Ashanti', 'R', '09112536784', 'Kitchen Crew', '1986-11-05', 'F', 'Cebu City'),
('Reyes', 'Jami', 'E', '09171358009', 'Manager', '1997-02-18', 'M', 'Apas, Lahug, Cebu City'),
('Reynolds', 'Makai', 'W', '091543566778', 'Kitchen Crew', '1995-02-05', 'M', 'Lapu-Lapu City, Mactan'),
('Lang', 'Davion', 'Y', '09164563322', 'Cashier', '1995-04-21', 'M', 'Mandaue City'),
('Meji', 'Jeffrey', 'A', '09451118888', 'Chief', '1980-11-11', 'M', 'Cebu City');

INSERT INTO Customer_Info(Customer_Name, No_in_Party)
VALUES
('Robert Lim', '4'),
('Selena Gomez', '2'),
('Kylie Jenner', '2');

INSERT INTO Table_Detail(Emp_ID, Customer_ID, Table_No, Table_Status, Date_Time)
VALUES
('2000', '100', '1', 'OCCUPIED', '2018-12-10 9:00:00'),
('2000', '100', '1', 'VACANT', '2018-12-10 10:30:00'),
('2000', '101', '2', 'OCCUPIED', '2018-12-10 10:00:00'),
('2000', '101', '2', 'VACANT', '2018-12-10 11:30:00'),
('2000', '102', '3', 'RESERVED', '2018-12-10 18:00:00');

INSERT INTO Sales_Transaction(Emp_ID, Table_ID, Order_Status, Date_Time, OSCA_PWD_ID, Discount, Total_Amount)
VALUES
('2000', '100', 'DINE-IN', '2018-12-10 9:00:00', null, '0', '600.00'),
('2000', '101', 'DINE-IN', '2018-12-10 10:00:00', null, '0', '300.00'),
('2000', null, 'DELIVERY', '2018-12-11 12:00:00', null, '0', '270.00'),
('2000', '102', 'DINE-IN', '2018-12-10 18:00:00', null, '0', '825.00'),
('2000', null, 'DELIVERY', '2018-12-11 18:00:00', null, '0', '270.00');

INSERT INTO Sales_Detail(Sales_No, Product_ID, Quantity, Subtotal)
VALUES
('100', '1000', '2', '270.00'),
('100', '1001', '2', '330.00'),
('101', '1004', '1', '165.00'),
('101', '1001', '1', '135.00'),
('102', '1001', '2', '270.00'),
('103', '1003', '5', '825.00'),
('104', '1001', '2', '270.00');

INSERT INTO product_item (Product_Code, Product_Name, Product_Description, Category, Unit, Selling_Price)
VALUES 
('1000', 'Cajun Glazed Wings', 'Southsides best kept secret, savory tangy sweet and just the right kick of spice. Our all-time favorite!', 'Wings', '8 pcs', '135.00'),
('1001', 'Inferno Wings', 'Very spicy chickn wings, but still retaining a semi-sweet and savory taste. The perfect umami tast only at Southside!', 'Wings', '8 pcs', '165.00'),
('1002', 'Chili Garlc Wings', 'Wings deep fried in a secret 7 spice all mix topped with garlic bits dashed with just the right hint of spice.', 'Wings', '8 pcs', '165.00'),
('1003', 'Classic Buffalo Wings', 'The wings that started it all! Our version of the classic buffalo wings. Serve with a garlic mayo dip.', 'Wings', '8 pcs', '165.00'),
('1004', 'White Garlic Parmesan', 'Wings with bechamel based white sauce topped with parmesan cheese.', 'Wings', '8 pcs', '165.00'),
('1005', 'Texan BBQ Wings', 'Smokey, sweet and savory homemade BBQ sauce glazed on our crispy chicken wings.', 'Wings', '8 pcs', '135.00'),
('1006', 'Buttermilk Wings', 'Simple and deep fried chicken wings inspired by the Southern tongue. Served with homemade gravy.', 'Wings', '8 pcs', '135.00'),
('1007', 'Crispy Adobo Wings', 'The Prestons secret adobo recipe with a crispy twist. Please allow more time for preparation of wings.', 'Wings', '8 pcs', '165.00'),
('1008', 'Rated-R Wings', 'Buffalo wings reinvented on a sweeter side. Served with ranch dip.', 'Wings', '8 pcs', '165.00'),
('1009', 'Somkey Chipotle Wings', 'Batter coated wings, deep fried smokey chili peppered peanut oil. Served with hot sauce for an extra kick!', 'Wings', '8 pcs', '135.00');

INSERT INTO Recipe(Product_ID, Ingredient_ID)
VALUES
('1000', '2000'),
('1001', '2000'),
('1002', '2000'),
('1003', '2000'),
('1004', '2000'),
('1005', '2000'),
('1006', '2000'),
('1007', '2000'),
('1008', '2000'),
('1009', '2000'),

INSERT INTO Ingredient(Ingredient_Code, Ingredient_Name, Quantity, Unit, Cost_Price)
VALUES
('5000', 'Chicken', '50', '100 g', '20.00');

INSERT INTO Supplier(Supplier_Name, Contact_No)
VALUES
('Magnolia', '09156552200'),
('Bounty Fresh', '4543838'),
('SuperSavers', '09551354455'),
('Whole Supplier', '09254556556'),
('Good Food', '09335561000'),
('Great Food Solutions', '4947888');

INSERT INTO Restock_Transaction(Restock_No, Supplier_ID, Total_Amount, Date_Time)
VALUES
('4556', '500', '5000.00', '2018-12-01 08:00:00'),
('3445', '501', '1000.00', '2018-12-01 08:00:00'),
('2007', '502', '2000.00', '2018-12-01 08:10:00'),
('3016', '503', '500.00', '2018-12-01 08:30:00'),
('9070', '504', '900.00', '2018-12-01 09:00:00');





