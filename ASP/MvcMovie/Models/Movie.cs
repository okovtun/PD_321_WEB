using System.ComponentModel.DataAnnotations;

namespace MvcMovie.Models;

public class Movie
{
	public int Id { get; set; }
	public required string Title { get; set; }
	[DataType(DataType.Date)]
	public DateTime? ReleaseDate { get; set; }	//Nullable fields
	public string? Genre {  get; set; }
	[Required]
	public decimal Price { get; set; }
}
