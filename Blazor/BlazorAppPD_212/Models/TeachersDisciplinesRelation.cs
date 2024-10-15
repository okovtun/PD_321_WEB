using System.ComponentModel.DataAnnotations;

namespace BlazorAppPD_212.Models
{
	public class TeachersDisciplinesRelation
	{
		[Key]public int teacher { get; set; }
		[Key]public short discipline { get; set; }
	}
}
