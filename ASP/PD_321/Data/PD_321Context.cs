using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using PD_321.Models;

namespace PD_321.Data
{
    public class PD_321Context : DbContext
    {
        public PD_321Context (DbContextOptions<PD_321Context> options)
            : base(options)
        {
        }

        public DbSet<PD_321.Models.Direction> Directions { get; set; } = default!;
        public DbSet<PD_321.Models.Group> Groups { get; set; } = default!;
        public DbSet<PD_321.Models.Student> Students { get; set; } = default!;
    }
}
