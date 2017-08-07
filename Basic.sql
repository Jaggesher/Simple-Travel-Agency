
CREATE TABLE packages(
ID int PRIMARY KEY,
Name varchar(55) NOT NULL UNIQUE,
Duration  varchar(55) NOT NULL,
Hotel varchar(1005) NOT NULL,
Transport varchar(1005) NOT NULL,
Amount varchar(18) NOT NULL,
Mobile varchar(18) NOT NULL,
Img  varchar(50) NOT NULL);
-- INSERT INTO packages (ID,Name,Duration,Hotel,Transport,Amount,Mobile,Img) VALUES(1,"CoxBazar-Tour","3 days","2Night/3Days(three Star)","Road(By BUS(AC))","10000tk","01915-*****4","imh.jpg");