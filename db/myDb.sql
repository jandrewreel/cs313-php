CREATE TABLE athlete (
id SERIAL NOT NULL PRIMARY KEY,
username VARCHAR(15) NOT NULL UNIQUE
);

CREATE TABLE athlete_data (
id SERIAL NOT NULL PRIMARY KEY,
athlete_id SERIAL REFERENCES athlete(id) NOT NULL,
height SMALLINT NOT NULL,
weight SMALLINT NOT NULL
);

CREATE TABLE workout (
id SERIAL NOT NULL PRIMARY KEY,
muscle_group VARCHAR(10) NOT NULL,
workout_name VARCHAR(50) NOT NULL,
sets SMALLINT NOT NULL,
reps SMALLINT NOT NULL
);

INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Chest', 'Bench Press', '6' , '8');
INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Chest', 'Incline Bench Press', '4' , '8');
INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Chest', 'Decline Bench Press', '4' , '8');
INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Chest', 'Incline Dumbell Press', '6' , '10');
INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Chest', 'Chest Flyes', '6' , '8');
INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Chest', 'Incline Cable Flyes', '6' , '8');
INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Chest', 'Decline Cable Flyes', '6' , '8');
INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Chest', 'Dips', '6' , '10');

INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Back', 'Lat Pull Down Wide-grip', '8' , '8');
INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Back', 'Lat Pull Down Closed-grip', '8' , '8');
INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Back', 'Row', '6' , '8');
INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Back', 'Deadlift', '6' , '10');
INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Back', 'T-bar', '6' , '8');
INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Back', 'Back Flyes', '6' , '10');

INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Legs', 'Squat Rack', '6' , '8');
INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Legs', 'Leg Press', '9' , '10');
INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Legs', 'Sled Machine', '4' , '8');
INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Legs', 'Calf Raises', '6' , '8');
INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Legs', 'Leg Raises', '6' , '8');
INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Legs', 'Leg Curls', '6' , '8');
INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Legs', 'Squat Jumps', '6' , '10');

INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Biceps', 'Preacher Curls', '6' , '6');
INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Biceps', 'Hammer Curls', '6' , '8');
INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Biceps', 'Bicep Curls', '6' , '8');
INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Biceps', 'Bar Curls', '6' , '8');

INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Triceps', 'Rope Pull Down', '6' , '8');
INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Triceps', 'Skull Crusher', '6' , '8');
INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Triceps', 'Tricep Extension', '6' , '6');
INSERT INTO workout(muscle_group, workout_name, sets, reps) VALUES ('Triceps', 'Dips', '6' , '8');

