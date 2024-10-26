-- create the database first
CREATE DATABASE `health-center`;

-- then the tables in the database for the project to work perfectly in the browser and also in the production environment too
CREATE TABLE Student (
  Student_ID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  Fullname VARCHAR(250) NOT NULL,
  Email VARCHAR(255) NOT NULL,
  Phonenumber VARCHAR(30) NOT NULL,  -- Phone number with max 11 characters
  MatricNumber VARCHAR(20) NOT NULL,
  Gender VARCHAR(30) NOT NULL,
  Level VARCHAR(30) NOT NULL,
  Course VARCHAR(255) NOT NULL,
  Password VARCHAR(255) NOT NULL,
  regDate timestamp NULL DEFAULT current_timestamp(),
  profile_photo VARCHAR(255) NOT NULL DEFAULT 'th-2674479128.jpeg',
  updationDate timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Contact Lines for the admins
CREATE TABLE ContactLines (
    id INT AUTO_INCREMENT PRIMARY KEY,
    contact_type VARCHAR(50) NOT NULL,
    contact_number VARCHAR(15) NOT NULL
);
-- Some random inserted figures here are:

INSERT INTO ContactLines (contact_type, contact_number) VALUES
('General Inquiry', '08012345678'),
('Emergency Contact', '07098765432'),
('Health Center Office', '08123456789'),
('Patient Support', '09012345678'),
('Administrative Office', '08098765432');


-- Table for the appointments
CREATE TABLE `appointments`
(
    `appointment_id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `ticket_id` VARCHAR(20) UNIQUE NOT NULL,  -- For custom ticket ID like AU21AC3778-5ADE87
    `full_name` VARCHAR(255) DEFAULT NULL,
    `matric_number` VARCHAR(20) DEFAULT NULL,
    `mobile_number` VARCHAR(15) DEFAULT NULL,
    `email` VARCHAR(255) DEFAULT NULL,
    `gender` ENUM('Male', 'Female', 'Other') DEFAULT NULL,
    `level` VARCHAR(10) DEFAULT NULL,
    `course` VARCHAR(255) DEFAULT NULL,
    `symptoms` TEXT DEFAULT NULL,
    `symptoms_relating` TEXT DEFAULT NULL,
    `hall_of_residence` VARCHAR(255) DEFAULT NULL,
    `transport` ENUM('Yes', 'No') DEFAULT NULL,
    `registered` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
   `status` ENUM('Attended to', 'Unattended to') DEFAULT 'Unattended to',
) ENGINE=INNODB DEFAULT CHARSET=latin1;


-- ALTER TABLE `appointments`
-- ADD `status` ENUM('Attended to', 'Unattended to') DEFAULT 'Unattended to' AFTER `registered`;


-- Complaints table
CREATE TABLE Complaints (
    complaint_id INT AUTO_INCREMENT PRIMARY KEY,
    matric_number VARCHAR(20) NOT NULL,
    complaint_text TEXT NOT NULL,
    complaint_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



-- Table for the Counseling requests

CREATE TABLE `counseling_requests` (
    `request_id` INT NOT NULL AUTO_INCREMENT,
    `student_id` INT(10) UNSIGNED NOT NULL,
    `fullname` VARCHAR(250) NOT NULL,
    `matric_number` VARCHAR(255) NOT NULL,
    `course` VARCHAR(255) NOT NULL,
    `request_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `request_reason` TEXT NOT NULL,
    `counseling_status` ENUM('Pending', 'Approved', 'Rejected') DEFAULT 'Pending',
    `counselor_comments` TEXT DEFAULT NULL,
    PRIMARY KEY (request_id),
    FOREIGN KEY (student_id) REFERENCES Student(Student_ID) ON DELETE CASCADE
);





-- ALTER TABLE `users` CHANGE `ID` `ID` INT(11) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`ID`);

-- The table for the staffs
CREATE TABLE
  `staff` (
    `ID` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `FullName` varchar(255) DEFAULT NULL,
    `MatricNumber` varchar(255) DEFAULT NULL,
    `MobileNumber` varchar(255) DEFAULT NULL,
    `Email` varchar(255) DEFAULT NULL,
    `Gender` varchar(255) DEFAULT NULL,
    `password` varchar(255) DEFAULT NULL,
    `regDate` timestamp NULL DEFAULT current_timestamp(),
    `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
  ) ENGINE = InnoDB DEFAULT CHARSET = latin1;
  
-- Table for the suggestion box
-- Will work on that later though


-- Table for the admin or admin level staffs for their own storage and usage too1!!!



CREATE TABLE
`medical-information` (
   `Student_ID` VARCHAR(500) NOT NULL,
    `Fullname` varchar(255) DEFAULT NULL,
    `HealthCentreNo` varchar(255)  DEFAULT NULL,
     `DateOfBirth` DATE NOT NULL,
     `Blood Type` varchar(500) NOT NULL,
     `Blood Group` varchar(255) NOT NULL,
     `Genotype` varchar(255) NOT NULL,
     `Weight` varchar(255) NOT NULL
    `Time` TIME NOT NULL,
    `Additional Information` VARCHAR(10000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;,
     `regDate` timestamp NULL DEFAULT current_timestamp()
 )


-- MEDICAL HISTORY FOR THE STUDENT PAGE EXISTS HERE BELOW AND CAN BE SENT OFF TO THE SERVER TOO BY THE DEVELOPER OR DATABASE ADMINISTRATOR
CREATE TABLE
`medicalhistory` (
    `ID` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   `matric_number` VARCHAR(255) NOT NULL,
   `Student_ID` VARCHAR(255) NOT NULL,
    `Fullname` varchar(255) DEFAULT NULL,
    `HealthCentreNo` varchar(255)  DEFAULT NULL,
    `BloodPressure` varchar(255) DEFAULT NULL,
    `BloodSugar` varchar(255) DEFAULT NULL,
    `BloodType` varchar(255) DEFAULT NULL,
      `BloodGroup` varchar(255) DEFAULT NULL,
      `Genotype` varchar(255) DEFAULT NULL,
      `Weight` varchar(255) DEFAULT NULL,
      `Height` varchar(255)  DEFAULT NULL,
      `Allergies` text DEFAULT NULL,
     `dateCreated` timestamp NULL DEFAULT current_timestamp()
 )


--  Create the medical History Page::



-- 
-- Table for the Admin at the health center for managing the student data/*    */

CREATE TABLE `Admin` (
  `ID` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `Fullname` varchar(200) NOT NULL,
  `StaffID` varchar(200) NOT NULL UNIQUE,
  `StaffEmail` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Status` varchar(20) DEFAULT 'Active',
  `Role` VARCHAR(255) DEFAULT  'ADMINISTRATOR',
  `JobTitle` VARCHAR(255) NOT NULL,
  `Department` VARCHAR(200) NOT NULL,
  `RegDate` timestamp DEFAULT current_timestamp(),
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
)  ENGINE=InnoDB COLLATE utf8mb4_unicode_ci;


INSERT INTO `Admin` (Fullname, StaffID, StaffEmail, Contact,Gender, Password, Status, Role, JobTitle, Department) 
VALUES('HEALTH CENTER ADMIN 1','AU21AC3778','olateju202@gmail.com','+2348086976247','Male', '$2y$10$ia0Zh.rtw3bJ6CWfw5r6u.EVGcaKd5JXkfeuahYOZ5FF2kXsfx3ou','Active','ADMIN','ADMINISTRATOR','HEALTH CENTER');


CREATE TABLE Patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(255) NOT NULL,
    patientID VARCHAR(50) NOT NULL UNIQUE,
    MatricNumber VARCHAR(50), -- For student patients, NULL if not a student
    gender ENUM('Male', 'Female', 'Other') NOT NULL,
    department VARCHAR(100), -- Department for student patients, NULL otherwise
    mobile VARCHAR(15),
    address TEXT,
    date_of_birth DATE,
    date_registered TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    patient_type ENUM('Student', 'Non-Student') DEFAULT 'Non-Student', -- Identifies student patients
    diagnosis TEXT, -- Stores patient's diagnosis information
    prescription TEXT, -- Stores prescribed medication or treatment
    doctor_comments TEXT, -- Comments from doctor related to the patient
    doctor_name VARCHAR(255) -- Doctor responsible for this patient
);

