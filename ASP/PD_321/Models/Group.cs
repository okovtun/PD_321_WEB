using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;

namespace PD_321.Models
{
	public class Group
	{
		[Key]
		public int group_id { get; set; }
		[Required]
		public required string group_name { get; set; }

		[ForeignKey(nameof(Direction))]
		public byte direction { get; set; }
		public Direction Direction { get; set; }
		public ICollection<Student>? Students { get; set; }
	}
}
