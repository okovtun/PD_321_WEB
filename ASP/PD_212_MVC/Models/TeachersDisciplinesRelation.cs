using Microsoft.EntityFrameworkCore;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;

namespace PD_212_MVC.Models
{
	//PJT - Pure Join Table
	[PrimaryKey(nameof(teacher), nameof(discipline))]
	public class TeachersDisciplinesRelation//:IComparable
	{
		[ForeignKey("Teacher")]
		public int teacher { get; set; }
		[ForeignKey("Discipline")]
		public short discipline { get; set; }

		//Navigation properties:
		public Teacher Teacher { get; set; }
		public Discipline Discipline { get; set; }

		//public int CompareTo(object other)
		//{ 
		//	return 
		//		teacher.CompareTo((other as TeachersDisciplinesRelation).teacher) + 
		//		discipline.CompareTo((other as TeachersDisciplinesRelation).discipline);
		//}
		public static bool operator ==(TeachersDisciplinesRelation left, TeachersDisciplinesRelation right)
		{ 
			return left.teacher == right.teacher && left.discipline == right.discipline;
		}
		public static bool operator !=(TeachersDisciplinesRelation left, TeachersDisciplinesRelation right)
		{ 
			return left.teacher != right.teacher && left.discipline != right.discipline;
		}
		public override bool Equals(object? obj)
		{
			return 
				this.teacher == (obj as TeachersDisciplinesRelation).teacher && 
				this.discipline == (obj as TeachersDisciplinesRelation).discipline;
		}
	}
}
