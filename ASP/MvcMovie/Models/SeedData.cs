using Microsoft.EntityFrameworkCore;
using Microsoft.Extensions.DependencyInjection;
using MvcMovie.Data;
using System;
using System.Linq;

namespace MvcMovie.Models;

public class SeedData
{
	public static void Initialize(IServiceProvider serviceProvider)
	{
		using 
			(
			MvcMovieContext context =
			new MvcMovieContext(serviceProvider.GetRequiredService<DbContextOptions<MvcMovieContext>>())
			)
		{
			//Проверяем, если ли что-либо в таблице:
			if (context.Movie.Any())
			{ 
				return;
			}
			context.Movie.AddRange
				(
					new Movie
					{ 
						Title = "The Terminator",
						ReleaseDate = DateTime.Parse("1984-10-26"),
						Genre = "Action",
						Price = 11M	//M - decimal
					},
					new Movie
					{
						Title = "The Transporter",
						ReleaseDate = DateTime.Parse("2002-10-02"),
						Genre = "Action",
						Price = 14M
					},
					new Movie
					{
						Title = "Greyhound",
						ReleaseDate = DateTime.Parse("2020-07-10"),
						Genre = "Dramma",
						Price = 20M
					}
				);
			context.SaveChanges();
		}
	}
}
