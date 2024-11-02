using System.ComponentModel.DataAnnotations;
using System.Runtime.CompilerServices;

namespace ContosoUniversity.Models
{
	public class Student
	{
		public int ID { get; set; }
		[Required]	//Обязательное поле (NOT NULL)
		[StringLength(50, ErrorMessage ="Too many symbols for LastName")]
		[RegularExpression(@"^[A-ZА-Я]+[a-zа-я]*$")]
		[Display(Name = "Фамилия")]
		public string LastName { get; set; }
		[Required]
		[StringLength(50, ErrorMessage = "Too many symbols for FirstName")]
		[RegularExpression(@"^[A-ZА-Я]+[a-zа-я]*$")]
		//[Column("first_name")]	//Этот атрибут позволяет сопоставить свойство определенному полю в таблице БД.
		[Display(Name = "Имя")]
		public string FirstName { get; set; }
		[DataType(DataType.Date)]
		[DisplayFormat(DataFormatString = "{0:yyyy-MM-dd}", ApplyFormatInEditMode = true)]
		[Display(Name = "Дата поступления")]
		public DateTime EnrollmentDate { get; set; }
		[Display(Name = "Полное имя")]
		public string FullName	//Calculated property
		{
			get => $"{LastName} {FirstName}";
		}

		//Navigation property:
		public ICollection<Enrollment> Enrollments { get; set; }
	}
}
