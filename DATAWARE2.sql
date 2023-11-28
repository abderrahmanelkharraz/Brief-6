CREATE TABLE users(
    userID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(25),
    email VARCHAR(50),
    password VARCHAR(50),
    Role VARCHAR(25),
    Statut VARCHAR(25)
);
 

CREATE TABLE projet(
    projetID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    projet VARCHAR (50),
    nom VARCHAR(25),
    description VARCHAR(50),
    date_creation date,
    statut VARCHAR(25),
    userID INT,
FOREIGN KEY (userID) REFERENCES users(userID) 
);

CREATE TABLE equipe(
    equipe_ID int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom varchar(25),
    date_creation date,
    userID INT,
    projetID INT,
FOREIGN KEY (userID) REFERENCES users(userID),
FOREIGN KEY (projetID) REFERENCES projet(projetID) 
);

INSERT INTO users (nom, email, password, role, status) 
VALUES ('Saad', 'saad@gmail.com', 'saad111', 'Directeur', 'Actif'),
       ('Alae', 'alae@gmail.com', 'alae222', 'Full stack developpeur','Actif'),
       ('Ayoube', 'ayoub@gmail.com', 'ayoube333', 'manager', 'Inactif'),
       ('Mohammed', 'mohammed@gmail.com', 'mohammed444', 'Expert comptable', 'Actif'),
       ('Chouaib', 'chouaib@gmail.com', 'chouaib555', 'Sociale media manager', 'Inactif'),
       ('ahmed', 'ahmed@gmail.com', 'ahmed666', 'designer', 'Actif');


UPDATE users
SET email Role = 'Admin'
WHERE userID = 1;

DELETE FROM users
WHERE userID = 1;

DROP TABLE equipe;

