using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using BlazorMovieApp.Models;

namespace BlazorMovieApp.Data
{
    public class BlazorMovieAppContext : DbContext
    {
        public BlazorMovieAppContext (DbContextOptions<BlazorMovieAppContext> options)
            : base(options)
        {
        }

        public DbSet<BlazorMovieApp.Models.Movie> Movie { get; set; } = default!;
    }
}
