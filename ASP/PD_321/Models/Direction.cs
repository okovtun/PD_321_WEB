using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Text.RegularExpressions;

namespace PD_321.Models
{
	public class Direction
	{
		[Key]
		public byte direction_id { get; set; }
		[Required]
		public required string direction_name { get; set; }

		public ICollection<Group>? Groups { get; set; }
		//public ICollection<Student>? Students { get; set; }
	}
}