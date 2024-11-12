using System.ComponentModel.DataAnnotations;

namespace PD_212_MVC.Models
{
	public class Direction
	{
		[Key]
		public byte direction_id { get; set; }
		[Required]
		public required string direction_name { get; set; }

		public ICollection<Group>? Groups { get; set; }
	}
}