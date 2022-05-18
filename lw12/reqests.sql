# Для получения всех студентов в возрасте 19 лет
SELECT * 
FROM student 
WHERE age = 19;
    
# Для получения всех студентов из конкретной группы.
SELECT 
	student.student_id, 
    student.firstname, 
    student.surname,
    student.age,
    student.group_id
FROM student 
INNER JOIN `group` ON student.group_id = `group`.group_id
WHERE `group`.group_name = 'software engineering';

# Для получения всех студентов из конкретного факультета
SELECT 
	student.student_id, 
    student.firstname, 
    student.surname,
    student.age,
    student.group_id
FROM student
INNER JOIN `group` ON student.group_id = `group`.group_id
INNER JOIN faculty ON faculty.faculty_id = `group`.faculty_id
WHERE faculty.faculty_name = 'Faculty of Computer Science and Computer Engineering';

# Для получения факультета и группы конкретного студента
SELECT 
	student.student_id, 
	student.firstname,
    student.surname,
    student.age,
	`group`.group_name,
    faculty.faculty_name
FROM 
	student
INNER JOIN `group` ON student.group_id = `group`.group_id
INNER JOIN faculty ON faculty.faculty_id = `group`.faculty_id
WHERE student.student_id = 2;
