create datebase hosna;

use hosna;

create table teacher1(
    first_name char(30) not null,
    last_name char(30) not null,
    gender char(5) not null,
    adress char(30) not null,
    dat date not null,
    tel char(12) not null,
    mail char(50) primary key not null,
    pwd char(60) not null
);
create table teacher2(
    first_name char(30) not null,
    last_name char(30) not null,
    gender char(5) not null,
    adress char(30) not null,
    dat date not null,
    tel char(12) not null,
    mail char(50) primary key not null,
    pwd char(60) not null
);
create table teacher3(
    first_name char(30) not null,
    last_name char(30) not null,
    gender char(5) not null,
    adress char(30) not null,
    dat date not null,
    tel char(12) not null,
    mail char(50) primary key not null,
    pwd char(60) not null
);
create table teacher4(
    first_name char(30) not null,
    last_name char(30) not null,
    gender char(5) not null,
    adress char(30) not null,
    dat date not null,
    tel char(12) not null,
    mail char(50) primary key not null,
    pwd char(60) not null
);

create table teacher(
    id int(5) primary key AUTO_INCREMENT not null
    first_name char(30) not null,
    last_name char(30) not null,
    gender char(5) not null,
    adress char(30) not null,
    dat char(15) not null,
    tel char(12) not null,
    mail char(50)  not null,
    pwd char(60)  not null,
    
);

INSERT INTO teacher1(first_name, last_name, gender, adress, dat, tel, , mail, pwd) VALUES ("abdeldjalil", "abde", "mal", "orgla", 2001/12/45,"07", "abde@gmail.com", "abde");

INSERT INTO teacher2(first_name, last_name, gender, adress, dat, tel, , mail, pwd) VALUES ("عبد الجليل", "تجيني", "ذكر", "ورقلة", "2001/12/45","07" ,"mmmh17@gmail.com", "abde");

INSERT INTO teacher3(first_name, last_name, gender, adress, dat, tel, , mail, pwd) VALUES ("حليمة", "السعدية", "انثى", "جلفة", 2001/12/45,"07", "hh17@gmail.com", "css");

INSERT INTO teacher4(first_name, last_name, gender, adress, dat, tel, , mail, pwd) VALUES ("احلام", "بن طرشي", "انثى", "اغواط", 2001/12/45,"06", "bb@gmail.com", "king");

INSERT INTO teacher (first_name, last_name, gender, adress, dat, tel, mail, pwd, id) VALUES ('احمد', 'محسن', 'ذكر', 'جلفة', '2001/8/12', '06', 'ahmed@gmail.com', 'ahmed', NULL);

INSERT INTO teacher (first_name, last_name, gender, adress, dat, tel, mail, pwd, id) VALUES ('احلام', 'بن مسعود', 'انثى', 'جلفة', '2000/7/24', '05', 'ahlam@gmail.com', 'ahlam', NULL);

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `mail`, `pwd`) VALUES ('4444', 'حسنى', 'احلام', 'hosnaAhlam@gmail.com', 'hosnaAhlam');