DROP TABLE IF EXISTS triva;
DROP TABLE IF EXISTS movie;
DROP TABLE IF EXISTS profile;

--enitity profile--

CREATE TABLE profile (
		profileId INT AUTO_INCREMENT NOT NULL,
		profileEmail VARCHAR (128) NOT NULL ,
		username VARCHAR (32) NOT NULL ,
		UNIQUE(profileEmail),
		INDEX (profileId),
		PRIMARY KEY(profileId)
);

--enitity movie--

CREATE TABLE movie (

)
