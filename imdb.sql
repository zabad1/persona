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
		quotes VARCHAR(1000)  NOT NULL,
		awards VARCHAR(1000)  NOT NULL,
		userReviewDate DATETIME NOT NULL,
		userReview VARCHAR(10000) NOT NULL,
		synopsis VARCHAR(140) NOT NULL,
		title VARCHAR(140) NOT NULL,
		castCrew VARCHAR(10000) NOT NULL,
		INDEX(movieId),
		FOREIGN KEY(authorProfileId) REFERENCES profile(profileId),
		PRIMARY KEY(movieId

);

--enitity triva--

CREATE TABLE triva (

)
