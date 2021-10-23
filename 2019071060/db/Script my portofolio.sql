CREATE TABLE db_my_portofolio.tblm_test (
	id INT auto_increment NOT NULL,
	name VARCHAR(30) NOT NULL,
	age TINYINT NOT NULL
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci;


CREATE TABLE db_my_portofolio.tblm_skill (
	id TINYINT auto_increment NOT NULL PRIMARY key,
	skill_name varchar(100) NOT NULL,
	is_active BIT NULL,
	created_by varchar(30) NULL,
	created_on DATETIME NULL,
	updated_by varchar(30) NULL,
	updated_on DATETIME NULL
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci;


CREATE TABLE db_my_portofolio.tblm_education (
	id TINYINT auto_increment NOT NULL PRIMARY key,
	year_graduated varchar(100) NOT NULL,
	name varchar(100) NOT NULL,
	is_active BIT NULL,
	created_by varchar(30) NULL,
	created_on DATETIME NULL,
	updated_by varchar(30) NULL,
	updated_on DATETIME NULL
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci;

CREATE TABLE db_my_portofolio.tblm_project (
	id TINYINT auto_increment NOT NULL PRIMARY key,
	title_project varchar(100) NOT NULL,
	desc_project varchar(400) NOT NULL,
	client_project varchar(50) NOT NULL,
	date_project date NOT NULL,
	service_project varchar(50) NOT NULL,
	is_active BIT NULL,
	created_by varchar(30) NULL,
	created_on DATETIME NULL,
	updated_by varchar(30) NULL,
	updated_on DATETIME NULL
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci;


# Halaman Home => ambil data skill
select now(), skill_name from db_my_portofolio.tblm_skill where is_active = 1

# Halaman Portfolio => ambil data project
select * from db_my_portofolio.tblm_project tp where is_active = 1