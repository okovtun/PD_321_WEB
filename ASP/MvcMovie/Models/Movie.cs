using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;

namespace MvcMovie.Models;

public class Movie
{
	public int Id { get; set; }
	[StringLength(60, MinimumLength = 3)]
	[Required]
	public required string Title { get; set; }
	[Display(Name = "Release date")]
	[DataType(DataType.Date)]
	public DateTime? ReleaseDate { get; set; }  //Nullable fields
	[RegularExpression(@"^[A-Z]+[a-zA-Z\s]*$")]
	public string? Genre {  get; set; }
	[Required]
	[Range(1,100)]
	public decimal Price { get; set; }
	[RegularExpression(@"^[A-Z]+[a-zA-Z\s]*$")]
	public string? Rating { get; set; }
}
