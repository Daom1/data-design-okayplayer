DROP TABLE IF EXISTS comment;
DROP TABLE IF EXISTS profile;
DROP TABLE IF EXISTS post;

CREATE TABLE post (
	postId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	postAuthor VARCHAR(32) NOT NULL,
	postTitle VARCHAR (32),
	postDateTime DATETIME NOT NULL,
	postContent VARCHAR(140) NOT NULL,
	UNIQUE (postAuthor),
	PRIMARY KEY(postId)
);
CREATE TABLE profile (
	profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	profileEmail VARCHAR(128) NOT NULL,
	profileName VARCHAR(32) NOT NULL,
	UNIQUE(profileEmail),
	UNIQUE(profileName),
	PRIMARY KEY(profileId)
);
CREATE TABLE comment (
	commentId INT UNSIGNED NOT NULL,
	commentProfileId INT UNSIGNED NOT NULL,
	commentPostId INT UNSIGNED NOT NULL,
	commentContent INT UNSIGNED NOT NULL,
	commentDateTime INT UNSIGNED NOT NULL,
	PRIMARY KEY(commentId, commentProfileId)
# 	FOREIGN KEY (commentProfileId) REFERENCES profile(profileId)
);
