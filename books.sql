create table books(
	title char(20) not null default " ",
	author char(5) not null default " ",
	isbn int not null default 000,
	price tinyint not null default 10
);

insert into books
	values
	("JavaScript高级","尼古拉斯",123456,50),
	("Java","kaka",54321,30),
	("php and mysql","messi",098765,30),
	("canvas","kpei",098765,10);