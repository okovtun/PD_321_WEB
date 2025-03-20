USE PD_212;
GO

--SELECT group_id,group_name,direction_name,COUNT(stud_id) AS students_count
--FROM Students,Groups,Directions 
--WHERE group_id=7 
--AND direction=direction_id
--AND [group]=group_id
--GROUP BY group_id,group_name,direction_name;

SELECT group_id,group_name,direction_name,COUNT(stud_id) AS students_count
FROM Students
RIGHT JOIN Groups			ON ([group]		=	group_id)
JOIN Directions		ON (direction	=	direction_id)
WHERE group_id=1
GROUP BY group_id,group_name,direction_name;

