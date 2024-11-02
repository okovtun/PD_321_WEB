using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;

namespace ContosoUniversity.Models
{
	public class Course
	{
		[DatabaseGenerated(DatabaseGeneratedOption.None)]
		[Display(Name = "Number")]
		public int CourseId { get; set; }
		[StringLength(50, MinimumLength = 3)]
		public string Title {  get; set; }
		[Range(0,5)]
		public int Credits { get; set; }
		public int DepartmentID { get; set; }

		//Navigation properties:
		public Department Department { get; set; }	//Кафедра
		public ICollection<Enrollment> Enrollments { get; set; }
		public ICollection<Instructor> Instructors { get; set; }
	}
}
