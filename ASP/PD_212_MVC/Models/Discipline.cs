using System.ComponentModel.DataAnnotations;

namespace PD_212_MVC.Models
{
	public class Discipline
	{
		[Key]
		public short discipline_id { get; set; }
		[Required]
		public required string discipline_name { get; set; }
		[Required]
		public byte number_of_lessons { get; set; }

		//Navigation properties:

	}
}
