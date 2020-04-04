use project;
CREATE TABLE bloggers (
    email VARCHAR(128) NOT NULL  PRIMARY KEY ,
    id INT NOT NULL,
    name VARCHAR NOT NULL ,
    last_name VARCHAR NOT NULL ,
    password_hash VARCHAR NOT NULL , 
    description TEXT NOT NULL ,
    publish_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    online_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    blog_title VARCHAR NOT NULL ,
);
    Insert into bloggers(email, name, last_name, password_hash, description,blog_title) values ("maninderghuman.com", "mani" , "ghuman","98765", "student", "tips and tricks");