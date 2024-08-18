CREATE DATABASE aviator;

USE aviator;

CREATE TABLE tb_users(
    usr_id int not null PRIMARY key AUTOINCREMENT,
    usr_name VARCHAR(244) NOT NULL,
    usr_deal varchar(255),
    usr_email varchar(255) not null
    usr_pwd varchar(255) not null,
    usr_privilege int not null,
)

CREATE TABLE tb_admins(
    adm_id int not null PRIMARY KEY AUTOINCREMENT,
    adm_name varchar(255) not null,
    adm_deal varchar(255),
    adm_email varchar(255) not null,
    adm_pwd varchar(255) not null,
    adm_privilege int not null,
)

CREATE TABLE tb_loggins(
    login_id int not null PRIMARY key AUTOINCREMENT,
    login_user int not null,
)

CREATE TABLE tb_logs(
    usr_last_time_seen Date,
    adm_last_time_seen Date,
)

/* If the user pwd is secure and long enough it should appear int the hashes table */
CREATE TABLE hashes(
    hash_user int 
)

CREATE TABLE tb_user_privilegies(
    ups_id int not null PRIMARY key AUTOINCREMENT,
    ups_function varchar() /* functions are like */
)

CREATE TABLE tb_settings(

)

CREATE TABLE tb_game(
    game_id INT NOT NULL AUTOINCREMENT PRIMARY KEY,
    game_name VARCHAR(255) NOT NULL,
    game_description VARCHAR(255) NOT NULL,
    game_secret_key VARCHAR(255) NOT NULL, /* secret key used to access the private games */
    fk_game_range int not null,
    fk_game_range FOREIGN key (fk_game_range) REFERENCES gr_id (tb_game_ranges),
)

CREATE TABLE tb_game_ranges(
    gr_id int not null PRIMARY key AUTOINCREMENT,
)

CREATE TABLE tb_game_settings(

)

CREATE table tb_game_scores(

)

CREATE TABLE tb_game_notes(

)

