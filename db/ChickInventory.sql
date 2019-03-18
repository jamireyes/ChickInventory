CREATE DATABASE chickInventory;

USE chickInventory;

CREATE TABLE Employee
(
	Emp_ID INT NOT NULL AUTO_INCREMENT,
	Lname VARCHAR(25),
	Fname VARCHAR(25),
	MI VARCHAR(2),
	Contact_No BIGINT(11),
	Position VARCHAR(30),
	DateOfBirth DATE,
	Gender SET('M', 'F'),
	CurrAddress VARCHAR(150),
	PRIMARY KEY(Emp_ID)
);

ALTER TABLE Employee AUTO_INCREMENT = 2000;

CREATE TABLE Account
(
	Acc_ID INT NOT NULL AUTO_INCREMENT,
	Emp_ID INT NOT NULL,
	Username VARCHAR(15),
	Pwd LONGTEXT,
	Privilege SET('ADMIN', 'USER'),
	PRIMARY KEY(Acc_ID)
);

CREATE TABLE Reservation
(
	Res_ID INT NOT NULL AUTO_INCREMENT,
	Emp_ID INT NOT NULL,
	Customer_Name VARCHAR(25),
	Table_No TINYINT UNSIGNED,
	No_in_Party TINYINT UNSIGNED,
	Date_Time DATETIME,
	PRIMARY KEY(Res_ID)
);

ALTER TABLE Reservation AUTO_INCREMENT = 100;

CREATE TABLE Sales_Transaction
(
	Sales_No INT NOT NULL AUTO_INCREMENT,
	Emp_ID INT NOT NULL,
	Order_Status SET('DINE-IN', 'TAKE-OUT', 'DELIVERY'),
	Date_Time DATETIME,
	Total_Amount DECIMAL(7, 2),
	PRIMARY KEY(Sales_No)
);

ALTER TABLE Sales_Transaction AUTO_INCREMENT = 100;

CREATE TABLE Sales_Detail
(
	Sales_No INT NOT NULL,
	Product_ID INT NOT NULL,
	Quantity INT,
	PRIMARY KEY(Sales_No, Product_ID)
);

CREATE TABLE Product_Item
(
	Product_ID INT NOT NULL AUTO_INCREMENT,
	Product_Code INT NOT NULL,
	Product_Name VARCHAR(25),
	Product_Description VARCHAR(150),
	Category VARCHAR(25),
	Unit VARCHAR(10),
	Selling_Price DECIMAL(7, 2),
	PRIMARY KEY(Product_ID)
);

ALTER TABLE Product_Item AUTO_INCREMENT = 1000;

CREATE TABLE Recipe
(
	Product_ID INT NOT NULL,
	Ingredient_ID INT NOT NULL,
	PRIMARY KEY(Product_ID, Ingredient_ID)
);

CREATE TABLE Ingredient
(
	Ingredient_ID INT NOT NULL AUTO_INCREMENT,
	Ingredient_Code INT NOT NULL,
	Ingredient_Name VARCHAR(25),
	Quantity INT,
	Unit VARCHAR(10),
	Cost_Price DECIMAL(7, 2),
	PRIMARY KEY(Ingredient_ID)
);

ALTER TABLE Ingredient AUTO_INCREMENT = 2000;

CREATE TABLE Restock_Transaction
(
	Restock_No INT NOT NULL,
	Supplier_Name VARCHAR(100),
	Total_Amount DECIMAL(7, 2),
	Date_Time DATETIME,
	PRIMARY KEY(Restock_No)
);

CREATE TABLE Restock_Detail
(
	Ingredient_ID INT NOT NULL,
	Restock_No INT NOT NULL,
	Quantity INT,
	PRIMARY KEY(Ingredient_ID, Restock_No)
);

ALTER TABLE Account
ADD CONSTRAINT Acc_empID_fk FOREIGN KEY(Emp_ID)
REFERENCES Employee(Emp_ID);

ALTER TABLE Recipe
ADD CONSTRAINT Recipe_PID_fk FOREIGN KEY(Product_ID)
REFERENCES Product_Item(Product_ID);

ALTER TABLE Recipe
ADD CONSTRAINT Recipe_IID_fk FOREIGN KEY(Ingredient_ID)
REFERENCES Ingredient(Ingredient_ID);

ALTER TABLE Reservation
ADD CONSTRAINT Res_EmpID_fk FOREIGN KEY(Emp_ID)
REFERENCES Employee(Emp_ID);

ALTER TABLE Sales_Transaction
ADD CONSTRAINT ST_empID_fk FOREIGN KEY(Emp_ID)
REFERENCES Employee(Emp_ID);

ALTER TABLE Sales_Detail
ADD CONSTRAINT SD_STNo_fk FOREIGN KEY(Sales_No)
REFERENCES Sales_Transaction(Sales_No);

ALTER Table Sales_Detail
ADD CONSTRAINT SD_ProID_fk FOREIGN KEY(Product_ID)
REFERENCES Product_Item(Product_ID);

ALTER TABLE Restock_Detail
ADD CONSTRAINT RestockD_IngID_fk FOREIGN KEY(Ingredient_ID)
REFERENCES Ingredient(Ingredient_ID);

ALTER TABLE Restock_Detail
ADD CONSTRAINT RestockD_RestockID_fk FOREIGN KEY(Restock_No)
REFERENCES Restock_Transaction(Restock_No);

INSERT INTO Employee(Lname, Fname, MI, Contact_No, Position, DateOfBirth, Gender, CurrAddress)
VALUES
('Johnson', 'Bob', 'V','09998887777', 'Kitchen Crew', '1990-12-12', 'M', 'Cebu City'),
('Pena', 'Ashanti', 'R', '09112536784', 'Kitchen Crew', '1986-11-05', 'F', 'Cebu City'),
('Reyes', 'Jami', 'E', '09171358009', 'Manager', '1997-02-18', 'M', 'Apas, Lahug, Cebu City'),
('Reynolds', 'Makai', 'W', '091543566778', 'Kitchen Crew', '1995-02-05', 'M', 'Lapu-Lapu City, Mactan'),
('Lang', 'Davion', 'Y', '09164563322', 'Cashier', '1995-04-21', 'M', 'Mandaue City'),
('Meji', 'Jeffrey', 'A', '09451118888', 'Chief', '1980-11-11', 'M', 'Cebu City');

INSERT INTO Account(Emp_ID, Username, Pwd, Privilege)
VALUES 
('2000', 'admin', 'admin', 'ADMIN'),
('2001', 'user', 'user', 'USER'),
('2002', 'jamireyes', 'jami1802', 'USER');

INSERT INTO Reservation(Emp_ID, Customer_Name, Table_No, No_in_Party, Date_Time)
VALUES
('2000', 'Robert Lim', '1', '2', '2018-12-10 9:00:00'),
('2000', 'Selena Gomez', '2', '2', '2018-12-10 10:00:00'),
('2000', 'Kylie Jenner', '3', '4', '2018-12-10 18:00:00');

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

INSERT INTO Sales_Transaction(Emp_ID, Order_Status, Date_Time, Total_Amount)
VALUES
('2000', 'DINE-IN', '2018-12-10 9:00:00', '600.00'),
('2000', 'DINE-IN', '2018-12-10 10:00:00', '300.00'),
('2000', 'DELIVERY', '2018-12-11 12:00:00', '270.00'),
('2000', 'DINE-IN', '2018-12-10 18:00:00', '825.00'),
('2000', 'DELIVERY', '2018-12-11 18:00:00', '270.00');

INSERT INTO Sales_Detail(Sales_No, Product_ID, Quantity)
VALUES
('100', '1000', '1'),
('100', '1001', '1'),
('101', '1004', '1'),
('101', '1001', '1'),
('102', '1001', '1'),
('103', '1003', '1'),
('104', '1001', '1');

INSERT INTO Ingredient(Ingredient_Code, Ingredient_Name, Quantity, Unit, Cost_Price)
VALUES
('5000', 'Chicken', '50', '100 g', '20.00');

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
('1009', '2000');

INSERT INTO Restock_Transaction(Restock_No, Supplier_Name, Total_Amount, Date_Time)
VALUES
('4556', 'Magnolia', '5000.00', '2018-12-01 08:00:00'),
('3445', 'Bounty Fresh', '1000.00', '2018-12-01 08:00:00'),
('2007', 'SuperSavers', '2000.00', '2018-12-01 08:10:00'),
('3016', 'Whole Supplier', '500.00', '2018-12-01 08:30:00'),
('9070', 'Great Food Solutions', '900.00', '2018-12-01 09:00:00');





