using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;

namespace PD_212_MVC.Models
{
	public class Discipline
	{
		[Key]
		[DatabaseGenerated(DatabaseGeneratedOption.Identity)]
		public short discipline_id { get; set; }
		[Required]
		public required string discipline_name { get; set; }
		[Required]
		public byte number_of_lessons { get; set; }

		//Navigation properties:
		public ICollection<TeachersDisciplinesRelation>? Teachers { get; set; }
	}
}
