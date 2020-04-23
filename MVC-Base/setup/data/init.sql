use final;
CREATE TABLE bloggers (
    email VARCHAR(128) PRIMARY KEY ,
    password_hash VARCHAR(255) NOT NULL , 
    first_name VARCHAR(128) NOT NULL ,
    last_name VARCHAR(255) NOT NULL ,
    bio TEXT NOT NULL ,
    publish_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    online_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    blog_title VARCHAR(255) NOT NULL
);
    Insert into bloggers(email, password_hash,first_name, last_name, bio,blog_title) values ("maninderghuman.com", "$2y$10$xIjSS..XLdoi7koICdnzd.nw6UHdOOWII70lzJnulSLC0mT.fVxEy","mani" , "ghuman", "student", "tips and tricks");
 
 CREATE TABLE posts (
    slug VARCHAR(128) NOT NULL  PRIMARY KEY ,
    title  VARCHAR(255) NOT NULL , 
    content TEXT,
    blogger VARCHAR(255) NOT NULL ,
    post_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    INDEX(blogger),
    FOREIGN KEY(blogger)
    REFERENCES bloggers(email)
);
Insert into posts(slug, title,content,blogger) values ("blog-a", "Post A", "<article><h2>Post a </h2><section><p>this is basic test atricle></p></section></article>", "maninderghuman.com");