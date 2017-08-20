DROP DATABASE IF EXISTS Hng_database;

Create database Hng_database;

use Hng_database;

Create table teams 
			(
			`id` int not null auto_increment primary key,
			`name` varchar(10) not null
			);

Create table Hng_interns  
				(
				`Id` int not null auto_increment primary key,
				`name` varchar(30) not null,
				`team_id` int not null,
				 constraint fk_team foreign key (`team_id`) 
				 references teams(`id`) 
			       	 on delete cascade on update cascade
				);

insert into teams (name) values('team1'), ('team2'), ('team3');
insert into Hng_interns (name,team_id) values ('Aderinto Sadiq',1),
					      ('Hogan Jerry',1),
					      ('Emeka prosper',2),
					      ('Michael Okor',2),
					      ('Mark Essien',3);

