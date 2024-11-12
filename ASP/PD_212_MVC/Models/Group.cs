using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;

namespace PD_212_MVC.Models
{
	public class Group
	{
		[Key]
		public required int group_id { get; set; }
		[Required]
		public required string group_name { get; set; }
		[Required]

		[ForeignKey("Direction")]
		public required byte direction {  get; set; }

		public required Direction Direction { get; set; }
		public ICollection<Student>? Students { get; set; }
	}
}
