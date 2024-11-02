using System.ComponentModel.DataAnnotations;

namespace ContosoUniversity.Models
{
	public class CourseViewModel
	{
		[Display(Name = "Number")]
		public int CourseID { get; set; }
		public string Title { get; set; }
		public int Credits { get; set; }
		public string DepartmentName { get; set; }
	}
}
