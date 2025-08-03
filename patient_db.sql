CREATE TABLE Patients (
    PatientID INT PRIMARY KEY AUTO_INCREMENT,
    LastName VARCHAR(50) NOT NULL,
    FirstName VARCHAR(50) NOT NULL,
    MiddleName VARCHAR(50),
    Suffix VARCHAR(10),
    DateOfBirth DATE,
    Address VARCHAR(255)
);

CREATE TABLE Admissions (
    AdmissionID INT PRIMARY KEY AUTO_INCREMENT,
    PatientID INT,
    FOREIGN KEY (PatientID) REFERENCES Patients(PatientID),
    Ward VARCHAR(50),
    DateTimeAdmission DATETIME,
    DateTimeDischarge DATETIME
);

CREATE TABLE Users (
    UserID INT PRIMARY KEY AUTO_INCREMENT,
    userName VARCHAR(50) UNIQUE NOT NULL,
    passWord VARCHAR(255) NOT NULL
);