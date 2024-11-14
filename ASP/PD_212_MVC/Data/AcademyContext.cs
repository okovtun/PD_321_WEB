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
        public DbSet<PD_212_MVC.Models.Direction> Directions { get; set; } = default!;
        public DbSet<PD_212_MVC.Models.Group> Groups { get; set; } = default!;
        public DbSet<PD_212_MVC.Models.Student> Students { get; set; } = default!;
        public DbSet<PD_212_MVC.Models.Discipline> Disciplines { get; set; } = default!;
        public DbSet<PD_212_MVC.Models.TeachersDisciplinesRelation> TeachersDisciplinesRelation { get; set; } = default!;
    }
}