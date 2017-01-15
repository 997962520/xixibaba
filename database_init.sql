#以mysql root用户身份运行
#清理（第一次运行会报错，无影响）

drop database xixibaba;
#创建

create database xixibaba;

use xixibaba;

create table user
(
    id int primary key AUTO_INCREMENT,
    name varchar(50),
    password varchar(50),
    email varchar(50),
    phone varchar(50),
    status int,
    location varchar(50)
);

create table course
(
    id int primary key AUTO_INCREMENT,
    name varchar(50),
    time varchar(50),
    state int,
    directory varchar(50),
    play_count int,
    image varchar(50),
    amount int,
    content varchar(150)
);

create table class
(
    id int primary key AUTO_INCREMENT,
    name varchar(50)
);

create table course_class
(
    course_id int,
    class_id int,
    PRIMARY KEY(course_id,class_id),
    FOREIGN KEY (course_id) REFERENCES course(id),
    FOREIGN KEY (class_id) REFERENCES class(id)
);

create table video
(
    id int,
    name varchar(50)
);

create table class_video
(
    class_id int,
    viedo_id int,
    PRIMARY KEY(class_id,viedo_id),
    FOREIGN KEY (class_id) REFERENCES class(id),
    FOREIGN KEY (viedo_id) REFERENCES video(id),
);

create table comment
(
    user_id int,
    course_id int,
    PRIMARY KEY(user_id,course_id),
    FOREIGN KEY (user_id) REFERENCES user(id),
    FOREIGN KEY (course_id) REFERENCES course(id),
    content varchar(150),
    time varchar(50),
    approve int,
    disapprove int
);

create table collection
(
    course_id int,
    user_id int,
    PRIMARY KEY(course_id,user_id),
    FOREIGN KEY (course_id) REFERENCES course(id),
    FOREIGN KEY (user_id) REFERENCES user(id)
);