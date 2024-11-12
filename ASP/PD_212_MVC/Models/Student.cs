using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;

namespace PD_212_MVC.Models
{
	public class Student
	{
		[Key]
		public int stud_id { get; set; }
		[Required]
		public required string last_name { get; set; }
		[Required]
		public required string first_name { get; set; }
		public string? middle_name { get; set; }
		[Required]
		[DataType(DataType.Date)]
		public required DateOnly birth_date { get; set; }

		[Required]
		[ForeignKey("Group")]
		public required int group { get; set; }
		public required Group Group { get; set; }
	}
}
