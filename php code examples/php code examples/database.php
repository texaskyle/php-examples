
CREATE TABLE posts (
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    subject VARCHAR(250) NOT NULL,
    content VARCHAR(1000) NOT NULL,
    date DATETIME NOT NULL
    );

    INSERT INTO posts (subject,content,date) VALUES ('Biology', 'The nine major organ systems in the human body are 
    the integumentary system, the musculoskeletal system, the respiratory system, the circulatory system, the digestive 
    system, the excretory system, the nervous system, the endocrine system, and the reproductive system.', '2022-09-23');


    UPDATE posts
SET subject='physcis' ,content ='this is a science class'
WHERE id='1';