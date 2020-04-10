use final;
CREATE TABLE bloggers (
    email VARCHAR(128) NOT NULL  PRIMARY KEY ,
    first_name VARCHAR NOT NULL ,
    last_name VARCHAR NOT NULL ,
    password_hash VARCHAR NOT NULL , 
    bio TEXT NOT NULL ,
    publish_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    online_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    blog_title VARCHAR NOT NULL ,
);
    Insert into bloggers(email, first_name, last_name, password_hash, bio,blog_title) values ("maninderghuman.com","mani" , "ghuman","98765", "student", "tips and tricks");