-- drop database pursuit_frameworks;
-- create database pursuit_frameworks;

create table user (
  id integer NOT NULL AUTO_INCREMENT,
  fname varchar(30) NOT NULL,
  lname varchar(30) NOT NULL,
  email varchar(30) NOT NULL,
  password char(64) NOT NULL,
  access integer NOT NULL, --0 is highest level, 4 is user level
  primary key(id)
);

create table me (
  id integer NOT NULL AUTO_INCREMENT,
  user_id integer NOT NULL,

  title1 varchar(50),
  description1 varchar(250),
  meaningfulness_you1 varchar(250),
  meaningfulness_other1 varchar(250),
  impact_you1 varchar(250),
  impact_other1 varchar(250),
  title2 varchar(50),
  description2 varchar(250),
  meaningfulness_you2 varchar(250),
  meaningfulness_other2 varchar(250),
  impact_you2 varchar(250),
  impact_other2 varchar(250),
  title3 varchar(50),
  description3 varchar(250),
  meaningfulness_you3 varchar(250),
  meaningfulness_other3 varchar(250),
  impact_you3 varchar(250),
  impact_other3 varchar(250),
  fundamental varchar(750),

  primary key(id),
  foreign key(user_id) references user(id) ON DELETE CASCADE
);

create table purpose (
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
  foreign key(user_id) references user(id) ON DELETE CASCADE
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
  position_neg varchar(100),
  position_pos varchar(100),
  thoughts  varchar(500),

  primary key(id),
  foreign key(user_id) references user(id) ON DELETE CASCADE
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
  foreign key(user_id) references user(id) ON DELETE CASCADE
);

create table authentic_role (
  id integer NOT NULL AUTO_INCREMENT,
  user_id integer NOT NULL,

  judgement_other varchar(250),
  judgement_self varchar(250),
  judgement_work varchar(250),
  judgement_life varchar(250),
  expectations varchar(250),
  assumed_pursue varchar(250),
  assumed_strategies varchar(250),
  seeking_recognition varchar(250),
  seeking_acceptance varchar(250),
  belief varchar(250),
  true_create varchar(250),
  true_strategies varchar(250),
  being_other varchar(250),
  being_self varchar(250),
  being_work varchar(250),
  being_life varchar(250),
  giving_recognition varchar(250),
  giving_acknowledgment varchar(250),
  giving_acceptance varchar(250),

  primary key(id),
  foreign key(user_id) references user(id)
);

create table natural_approach (
  id integer NOT NULL AUTO_INCREMENT,
  user_id integer NOT NULL,

  phase1_label varchar(100),
  phase1_comm_me varchar(250),
  phase1_comm_others varchar(250),
  phase1_actions varchar(300),
  phase1_completions varchar(300),
  phase2_label varchar(100),
  phase2_comm_me varchar(250),
  phase2_comm_others varchar(250),
  phase2_actions varchar(300),
  phase2_completions varchar(300),
  phase3_label varchar(100),
  phase3_comm_me varchar(250),
  phase3_comm_others varchar(250),
  phase3_actions varchar(300),
  phase3_completions varchar(300),
  phase4_label varchar(100),
  phase4_comm_me varchar(250),
  phase4_comm_others varchar(250),
  phase4_actions varchar(300),
  phase4_completions varchar(300),
  phase5_label varchar(100),
  phase5_comm_me varchar(250),
  phase5_comm_others varchar(250),
  phase5_actions varchar(300),
  phase5_completions varchar(300),
  finished varchar(400),
  lives varchar(400),

  primary key(id),
  foreign key(user_id) references user(id)
);

create table authority (
  id integer NOT NULL AUTO_INCREMENT,
  user_id integer NOT NULL,

  describe_her varchar(400),
  see_her varchar(400),
  loved_her varchar(400),
  impact_her varchar(400),
  tension varchar(400),
  assumed_role varchar(400),
  true_role varchar(400),
  describe_him varchar(400),
  see_him varchar(400),
  loved_him varchar(400),
  impact_him varchar(400),

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
