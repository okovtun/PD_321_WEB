using System.ComponentModel.DataAnnotations;
using System.Runtime.CompilerServices;

namespace BlazorMovieApp.Models;

public class Movie
{ 
	public int Id { get; set; }
	[Required]
	public string? Title { get; set; }
	[DataType(DataType.Date)]
	[Range(typeof(DateTime), "1888-10-14", "2025-12-31")]
	public DateTime? ReleaseDate { get; set; }
	public string? Genre { get; set; }
	[Range(150, 1100)]
	public decimal Price { get; set; }
}