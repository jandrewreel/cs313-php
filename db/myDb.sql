CREATE TABLE person (
id SERIAL NOT NULL PRIMARY KEY,
username VARCHAR(15) NOT NULL UNIQUE
);

CREATE TABLE person_data (
id SERIAL NOT NULL PRIMARY KEY,
person_id SERIAL REFERENCES person(id) NOT NULL,
height SMALLINT NOT NULL,
weight SMALLINT NOT NULL
);

CREATE TABLE workout (
id SERIAL NOT NULL PRIMARY KEY,
muscle_group VARCHAR(10) NOT NULL,
workout_name VARCHAR(30) NOT NULL,
sets SMALLINT NOT NULL,
reps SMALLINT NOT NULL
);

INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Chest', 'Bench Press', '8' , '15');