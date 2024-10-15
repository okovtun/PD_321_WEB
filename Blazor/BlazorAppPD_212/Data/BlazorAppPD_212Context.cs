using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using BlazorAppPD_212.Models;

namespace BlazorAppPD_212.Data
{
    public class BlazorAppPD_212Context : DbContext
    {
        public BlazorAppPD_212Context (DbContextOptions<BlazorAppPD_212Context> options)
            : base(options)
        {
        }

        public DbSet<BlazorAppPD_212.Models.Teacher> Teachers { get; set; } = default!;
        public DbSet<BlazorAppPD_212.Models.Discipline> Disciplines { get; set; } = default!;
    }
}
