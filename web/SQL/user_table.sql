CREATE TABLE user_table (
   user_id      int     PRIMARY KEY AUTO_INCREMENT,
   username     varchar(255) NOT NULL UNIQUE,
   password     varchar(255) NOT NULL
);


