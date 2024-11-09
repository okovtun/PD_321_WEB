using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using PD_212_MVC.Models;

namespace PD_212_MVC.Data
{
    public class AcademyContext : DbContext
    {
        public AcademyContext (DbContextOptions<AcademyContext> options)
            : base(options)
        {
        }

        public DbSet<PD_212_MVC.Models.Teacher> Teachers { get; set; } = default!;
    }
}
