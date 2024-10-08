using System.ComponentModel.DataAnnotations;

namespace BlazorAppPD_212.Models
{
	public class Human
	{
		public int Id { get; set; }
		public string LastName { get; set; }
		public string FirstName { get; set; }
		public string MiddleName { get; set; }
		public DateTime BirthDate { get; set; }
	}
}
