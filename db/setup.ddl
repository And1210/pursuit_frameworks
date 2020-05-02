-- drop database pursuit_frameworks;
-- create database pursuit_frameworks;

create table user (
  id integer NOT NULL AUTO_INCREMENT,
  fname varchar(30) NOT NULL,
  lname varchar(30) NOT NULL,
  email varchar(30) NOT NULL,
  password char(64) NOT NULL,
  access integer NOT NULL,
  primary key(id)
);

create table me (
  id integer NOT NULL AUTO_INCREMENT,
  user_id integer NOT NULL,

  title1 varchar(50),
  meaningfulness_you1 varchar(250),
  meaningfulness_other1 varchar(250),
  impact_you1 varchar(250),
  impact_other1 varchar(250),
  title2 varchar(50),
  meaningfulness_you2 varchar(250),
  meaningfulness_other2 varchar(250),
  impact_you2 varchar(250),
  impact_other2 varchar(250),
  title3 varchar(50),
  meaningfulness_you3 varchar(250),
  meaningfulness_other3 varchar(250),
  impact_you3 varchar(250),
  impact_other3 varchar(250),
  fundamental varchar(750),

  primary key(id),
  foreign key(user_id) references user(id)
);

create table form (
  id integer NOT NULL AUTO_INCREMENT,
  user_id integer NOT NULL,

  hope varchar(250),
  doings varchar(250),
  creations varchar(250),
  intentions varchar(250),
  exist_to varchar(250),
  results_in varchar(250),
  myself_others varchar(250),
  purpose_statement varchar(600),
  handle varchar(100),

  primary key(id),
  foreign key(user_id) references user(id)
);

create table world_view (
  id integer NOT NULL AUTO_INCREMENT,
  user_id integer NOT NULL,

  feel_neg varchar(250),
  big_world_neg varchar(250),
  big_world_pos varchar(250),
  world_communities_neg varchar(250),
  world_communities_pos varchar(250),
  feel_pos varchar(250),
  react_neg varchar(250),
  work_world_neg varchar(250),
  work_world_pos varchar(250),
  respond_pos varchar(250),
  impact_neg varchar(250),
  personal_world_neg varchar(250),
  personal_world_pos varchar(250),
  impact_pos varchar(250),
  position_pos varchar(100),
  position_pos varchar(100),
  thoughts  varchar(500),

  primary key(id),
  foreign key(user_id) references user(id)
);

create table lighthouse (
  id integer NOT NULL AUTO_INCREMENT,
  user_id integer NOT NULL,

  impact_others varchar(500),
  effect_me varchar(500),
  potential varchar(250),
  space varchar(150),
  show_up varchar(150),
  contribution varchar(150),
  meaningful_me varchar(150),
  meaningful_experience varchar(150),
  handle varchar(100),
  my_choice varchar(100),
  truly_want varchar(100),

  primary key(id),
  foreign key(user_id) references user(id)
);

-- create table form (
--   id integer NOT NULL AUTO_INCREMENT,
--   user_id integer NOT NULL,
--
--   primary key(id),
--   foreign key(user_id) references user(id)
-- );
