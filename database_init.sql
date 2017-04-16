#以mysql root用户身份运行
#清理（第一次运行会报错，无影响）

drop database xixibaba;
#创建

create database xixibaba character set utf8;

use xixibaba;

create table user
(
    id int primary key AUTO_INCREMENT,
    name varchar(50),
    password varchar(50),
    email varchar(50),
    phone varchar(50),
    status int,
    location varchar(50),
    introduction varchar(150)
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
    content varchar(150),
    approve int,
    disapprove int,
    type int
);

create table video
(
    id int primary key AUTO_INCREMENT,
    name varchar(50)
);

create table pdf
(
    id int primary key AUTO_INCREMENT,
    name varchar(50)
);

create table course_video
(
    course_id int,
    viedo_id int,
    PRIMARY KEY(course_id,viedo_id),
    FOREIGN KEY (course_id) REFERENCES course(id),
    FOREIGN KEY (viedo_id) REFERENCES video(id)
);

create table course_pdf
(
    course_id int,
    pdf_id int,
    PRIMARY KEY(course_id,pdf_id),
    FOREIGN KEY (course_id) REFERENCES course(id),
    FOREIGN KEY (pdf_id) REFERENCES pdf(id)
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

create table history
(
    course_id int,
    user_id int,
    time varchar(50),
    PRIMARY KEY(course_id,user_id),
    FOREIGN KEY (course_id) REFERENCES course(id),
    FOREIGN KEY (user_id) REFERENCES user(id)
);

create table schedule
(
    id int primary key AUTO_INCREMENT,
    day1_1_course_id int,
    day1_2_course_id int,
    day1_3_course_id int,
    day2_1_course_id int,
    day2_2_course_id int,
    day2_3_course_id int,
    day3_1_course_id int,
    day3_2_course_id int,
    day3_3_course_id int,
    day4_1_course_id int,
    day4_2_course_id int,
    day4_3_course_id int,
    day5_1_course_id int,
    day5_2_course_id int,
    day5_3_course_id int,
    day6_1_course_id int,
    day6_2_course_id int,
    day6_3_course_id int,
    day7_1_course_id int,
    day7_2_course_id int,
    day7_3_course_id int
);

create table user_schedule
(
    schedule_id int,
    user_id int,
    PRIMARY KEY(schedule_id,user_id),
    FOREIGN KEY (schedule_id) REFERENCES schedule(id),
    FOREIGN KEY (user_id) REFERENCES user(id)
);