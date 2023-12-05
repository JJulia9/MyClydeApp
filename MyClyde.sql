CREATE TABLE `Student` (
  `student_num` Int(11) PRIMARY KEY,
  `firstname` varchar(32),
  `surname` varchar(64),
  `email` varchar(32),
  `address` varchar(255),
  `postcode` varchar(11),
  `dob` date,
  `psw` varchar(255),
  `active` tinyint(1),
  `fk_course` int(11)
);

CREATE TABLE `Course` (
  `course_id` Int(11) PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(32),
  `award` varchar(16),
  `year` varchar(5)
);

CREATE TABLE `Unit` (
  `unit_id` Int(11) PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(11),
  `description` varchar(255)
);

CREATE TABLE `Student_Enrolment` (
  `enrol_id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `date` date,
  `fk_unit` int(11),
  `fk_student` int(11)
);

CREATE TABLE `News` (
  `news_id` Int(11) PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(32),
  `description` text(500),
  `added_on` datetime,
  `added_by` int(11)
);

CREATE TABLE `Event` (
  `events_id` Int(11) PRIMARY KEY AUTO_INCREMENT,
  `added_by` Int(11),
  `date` datetime,
  `description` text(500),
  `added_on` datetime,
  `updated_by` int(11)
);

CREATE TABLE `Admin` (
  `admin_id` Int(11) PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(16),
  `password` varchar(255)
);

CREATE TABLE `Student_Comment` (
  `nc_id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `fk_news_id` int(11),
  `student_email` int(11)
);

ALTER TABLE `Student` ADD FOREIGN KEY (`fk_course`) REFERENCES `Course` (`course_id`);

ALTER TABLE `Student_Enrolment` ADD FOREIGN KEY (`fk_unit`) REFERENCES `Unit` (`unit_id`);

ALTER TABLE `Student_Enrolment` ADD FOREIGN KEY (`fk_student`) REFERENCES `Student` (`student_num`);

ALTER TABLE `Student_Comment` ADD FOREIGN KEY (`fk_news_id`) REFERENCES `News` (`news_id`);

ALTER TABLE `Student_Comment` ADD FOREIGN KEY (`student_email`) REFERENCES `Student` (`email`);
