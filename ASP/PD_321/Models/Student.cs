using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Text.RegularExpressions;

namespace PD_321.Models
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
		public required DateTime birth_date { get; set; }
		public string? email { get; set; }
		public string? phone { get; set; }
		public byte[]? photo { get; set; }

		[ForeignKey(nameof(Group))]
		public required int group { get; set; }
		[Required]
		public required Group Group { get; set; }
		//public required Direction Direction { get; set; }
	}
}
