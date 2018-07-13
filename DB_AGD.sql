drop database P1;
create database P1;
use P1;	

CREATE TABLE Department 
(
    idDepartment INT auto_increment,
    nameDepartment varchar (25) not null,
    PRIMARY KEY (idDepartment)
) ;

CREATE TABLE City 
(
    idCity INT primary key auto_increment,
    department_id INT,
    INDEX dep_ind (department_id),
    FOREIGN KEY (department_id)
        REFERENCES Department(idDepartment)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

create table StorageWay
(
	idStorageWay int auto_increment,
    nameSW varchar (25) not null,
	primary key (idStorageWay)
);

create table typePerson
(
	idTypePerson int auto_increment,
    nameTypePerson varchar (25) not null,
    primary key (idTypePerson)
);

create table Clients
(
	idClient int auto_increment,
    consecutiveClient varchar (50) not null,
    nameClient varchar (50) not null,
    primary key (idClient)
);

create table Folder
(
	idFolder int auto_increment,
    nameFolder varchar (25) not null,
    client_id int not null,
    PRIMARY KEY (idFolder),
     FOREIGN KEY (client_id)
        REFERENCES Clients (idClient)
        ON update CASCADE
        ON DELETE CASCADE
);

create table Dependency
(
	idDependency int auto_increment,
    nameDependency varchar (50) not null,
    primary key (idDependency)
);

create table Permission
(
	idPermission int auto_increment,
    namePermission varchar (250) not null,
    primary key (idPermission)
);

create table Role
(
	idRole int auto_increment,
	nameRole varchar (25) not null,
	primary key (idRole)
);

create table permission_roles
(
 nPR int auto_increment,
 role_id int not null,
 permission_id int not null,
 primary key (nPR),
 
 FOREIGN KEY (permission_id)
        REFERENCES Permission (idPermission)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
 FOREIGN KEY (role_id)
        REFERENCES Role(idRole)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

create table Users
(
	idUser int auto_increment,
    codPerson int,
    namePerson varchar (50) not null,
    lastnamePerson varchar (50) not null,
    emailPerson varchar (45) unique not null,
    passwordPerson char (15) not null,
	remember_token varchar (255) not null,
    typePerson_id int not null,
    dependency_id int not null,
    primary key (idUser),
    INDEX per_typ (typePerson_id),
    FOREIGN KEY (typePerson_id)
        REFERENCES TypePerson (idTypePerson)
        ON DELETE CASCADE
        ON update CASCADE,
	INDEX per_dep (dependency_id),
    FOREIGN KEY (dependency_id)
        REFERENCES Dependency (idDependency)
        ON DELETE CASCADE
        ON update CASCADE
);

create table Mail
(
	idMail int auto_increment,
    idMail2 char (3) not null,
    codEnterprise char (2) not null,
    affair varchar (200) not null,
	creationDate date,
    internalEstablishmentDate date,
	receivedDate date,
    observations varchar (125) null,
    deliveredToArchive boolean not null,
    shippingWay varchar (30) not null,
    nameMsessenger varchar (50) not null,
    typeMail boolean,
    dependency_id int not null,
    storagew_id int not null,
    city_id int not null,
    primary key (idMail),
	FOREIGN KEY (city_id)
        REFERENCES City (idCity)
        ON DELETE CASCADE
        ON update CASCADE,
	FOREIGN KEY (storagew_id)
        REFERENCES StorageWay (idStorageWay)
        ON DELETE CASCADE
        ON update CASCADE
);

create table EDoc
(
	idEDoc int auto_increment,
    nameEDoc varchar (50) unique not null,
    mail_id int not null,
    folder_id int not null,
    primary key (idEDoc),
	INDEX edoc_mail (mail_id),
    index edoc_folder (folder_id),
    FOREIGN KEY (folder_id)
        REFERENCES Folder (idFolder)
        ON DELETE CASCADE
        on update cascade,
    FOREIGN KEY (mail_id)
        REFERENCES Mail (idMail)
        ON DELETE CASCADE
        on update cascade
);

create table Role_User
(
	nRU int auto_increment,
    role_id int not null,
    user_id int not null,
    primary key (nRU),
    foreign key (role_id)
		references Role (idRole)
        on update cascade
        on delete cascade,
	foreign key (user_id)
		references Users (idUser)
        on update cascade
        on delete cascade
);

create table Mail_Dependency
(
	cMD int auto_increment,
	mail_id int not null,
    dependency_id int not null,
    primary key (cMD),
    FOREIGN KEY (mail_id)
        REFERENCES Mail (idMail)
        ON DELETE CASCADE
        on update cascade,
	FOREIGN KEY (dependency_id)
        REFERENCES Dependency (idDependency)
        ON DELETE CASCADE
        on update cascade
);

create table Client_Mail
(
	nMC int auto_increment,
    client_id int not null,
    mail_id int not null,
	foreign key (client_id)
		references Clients (idClient)
        on delete cascade
        on update cascade,
    primary key (nMC),
    foreign key (mail_id)
		references Mail (idMail)
        on delete cascade
        on update cascade
);

create table Folder_User
(
	nUF int auto_increment,
    user_id int not null,
    folder_id int not null,
    primary key (nUF),
	foreign key (folder_id)
		references Folder (idFolder)
        on update cascade
        on delete cascade,
    foreign key (user_id)
		references Users (idUser)
        on update cascade
        on delete cascade
);

create table Mail_Place
(
	nMP int auto_increment,
    mail_id int not null,
    place_id int not null,
    primary key (nMP),
    foreign key (mail_id)
		references Mail (idMail)
        on update cascade
        on delete cascade,
	foreign key (place_id)
		references City (idCity)
        on update cascade
        on delete cascade
);

