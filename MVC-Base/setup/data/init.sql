use final;
CREATE TABLE bloggers (
    email VARCHAR(128) NOT NULL  PRIMARY KEY ,
    password_hash VARCHAR NOT NULL , 
    first_name VARCHAR NOT NULL ,
    last_name VARCHAR NOT NULL ,
    bio TEXT NOT NULL ,
    publish_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    online_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    blog_title VARCHAR NOT NULL,
);
    Insert into bloggers(email, password_hash,first_name, last_name, bio,blog_title) values ("maninderghuman.com", "$2y$10$xIjSS..XLdoi7koICdnzd.nw6UHdOOWII70lzJnulSLC0mT.fVxEy","mani" , "ghuman", "student", "tips and tricks");