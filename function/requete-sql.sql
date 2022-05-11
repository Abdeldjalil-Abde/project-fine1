
CREATE DATABASE school_project;

USE school_project;

create table class(
    id int(1)  primary key not null,
    id_name char(20) not null
);
create table student(
    first_name char(30) not null,
    last_name char(30) not null,
    gender char(5) not null,
    location char(30) not null,
    dat char(12) not null,
    tel char(12) not null,
    mail char(50) primary key not null,
    pwd char(50) not null,
    hizb int(3) not null,
    id_class int(1) not null,
    status int(1) not null,
    FOREIGN KEY (id_class) REFERENCES class(id)
);
create table active(
    first_name char(30) not null,
    last_name char(30) not null,
    gender char(5) not null,
    location char(30) not null,
    dat char(12) not null,
    tel char(12) not null,
    mail char(50) primary key not null,
    pwd char(50) not null,
    hizb int(3) not null,
    id_class int(1) not null,
    FOREIGN KEY (id_class) REFERENCES class(id)
);

create table teacher(
    first_name char(30) not null,
    last_name char(30) not null,
    gender char(5) not null,
    location char(30) not null,
    dat char(15) not null,
    tel char(12) not null,
    mail char(50)  not null,
    pwd char(60)  not null,
    status int(1) not null,
    id_class int(5) primary key AUTO_INCREMENT not null,
    FOREIGN KEY (id_class) REFERENCES class(id)
);

-- insert the class in the school 

INSERT INTO class (id, id_name) VALUES (1, 'القسم الأول');
INSERT INTO class (id, id_name) VALUES (2, 'القسم الثاني');
INSERT INTO class (id, id_name) VALUES (3, 'القسم الثالث');
INSERT INTO class (id, id_name) VALUES (4, 'القسم الرابع');
INSERT INTO class (id, id_name) VALUES (5, 'none');

-- insert the teachers  in the school

INSERT INTO teacher (first_name, last_name, gender, location, dat, tel, mail, pwd,status, id_class) VALUES ('استاذ', 'اول ', 'ذكر', 'ولاية', 'xxxx/xx/xx', '06', 'techer1@gmail.com','1', 1, 1);
INSERT INTO teacher (first_name, last_name, gender, location, dat, tel, mail, pwd,status, id_class) VALUES ('استاذ', 'ثاني', 'انثى', 'ولاية', 'xxxx/xx/xx', '05', 'techer2@gmail.com', '2' , 1 , 2);
INSERT INTO teacher (first_name, last_name, gender, location, dat, tel, mail, pwd,status, id_class) VALUES ('استاذ', 'ثالث', 'ذكر', 'ولاية', 'xxxx/xx/xx', '05', 'techer3@gmail.com', '3' , 1 , 3);
INSERT INTO teacher (first_name, last_name, gender, location, dat, tel, mail, pwd,status, id_class) VALUES ('استاذ', 'رابع', 'انثى', 'ولاية', 'xxxx/xx/xx', '05', 'techer4@gmail.com', '4', 1 , 4);

-- insert the admin  in the school

INSERT INTO teacher (first_name, last_name, gender, location, dat, tel, mail, pwd,status, id_class) VALUES ('مدير', 'مدير', 'انثى', 'ولاية', 'xxxx/xx/xx', '05', 'admin@gmail.com', '4', 2 , 5);
