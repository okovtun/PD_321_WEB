using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.Rendering;
using Microsoft.EntityFrameworkCore;
using NuGet.DependencyResolver;
using PD_212_MVC.Data;
using PD_212_MVC.Models;

namespace PD_212_MVC.Views.Teachers
{
	public class TeachersController : Controller
	{
		private readonly AcademyContext _context;

		public TeachersController(AcademyContext context)
		{
			_context = context;
		}
		public Teacher Teacher { get; set; } = default!;

		// GET: Teachers
		public async Task<IActionResult> Index(string sortOrder, string searchString)
		{
			ViewData["LastNameSortParam"] = String.IsNullOrEmpty(sortOrder) ? "last_name_desc" : "";
			ViewData["FirstNameSortParam"] = sortOrder == "FirstName" ? "first_name_desc" : "FirstName";
			ViewData["MiddleNameSortParam"] = sortOrder == "MiddleName" ? "middle_name_desc" : "MiddleName";
			ViewData["BirthDateSortParam"] = sortOrder == "BirthDate" ? "birth_date_desc" : "BirthDate";
			ViewData["WorkDateSortParam"] = sortOrder == "WorkDate" ? "work_date_desc" : "WorkDate";
			IQueryable<Teacher> teachers = from t in _context.Teachers select t;

			ViewData["CurrentFilter"] = searchString;
			if (!String.IsNullOrEmpty(searchString))
				teachers = teachers.Where(
					t => t.last_name.Contains(searchString) ||
					t.first_name.Contains(searchString) ||
					t.middle_name!.Contains(searchString)
					);

			switch (sortOrder)
			{
				default: teachers = teachers.OrderBy(t => t.last_name); break;
				case "last_name_desc": teachers = teachers.OrderByDescending(t => t.last_name); break;
				case "FirstName": teachers = teachers.OrderBy(t => t.first_name); break;
				case "first_name_desc": teachers = teachers.OrderByDescending(t => t.first_name); break;
				case "MiddleName": teachers = teachers.OrderBy(t => t.middle_name); break;
				case "middle_name_desc": teachers = teachers.OrderByDescending(t => t.middle_name); break;
				case "WorkDate": teachers = teachers.OrderBy(t => t.work_since); break;
				case "work_date_desc": teachers = teachers.OrderByDescending(t => t.work_since); break;
				case "BirthDate": teachers = teachers.OrderBy(t => t.birth_date); break;
				case "birth_date_desc": teachers = teachers.OrderByDescending(t => t.birth_date); break;
			}

			return View(await teachers.AsNoTracking().ToListAsync());
			//return View(await _context.Teachers.ToListAsync());
		}

		// GET: Teachers/Details/5
		public async Task<IActionResult> Details(int? id)
		{
			if (id == null)
			{
				return NotFound();
			}

			var teacher = await _context.Teachers
				.Include(t => t.Disciplines!)
				.ThenInclude(d => d.Discipline)
				.FirstOrDefaultAsync(m => m.teacher_id == id);
			if (teacher == null)
			{
				return NotFound();
			}

			return View(teacher);
		}

		// GET: Teachers/Create
		public IActionResult Create()
		{
			return View();
		}

		// POST: Teachers/Create
		// To protect from overposting attacks, enable the specific properties you want to bind to.
		// For more details, see http://go.microsoft.com/fwlink/?LinkId=317598.
		[HttpPost]
		[ValidateAntiForgeryToken]
		public async Task<IActionResult> Create([Bind("teacher_id,last_name,first_name,middle_name,birth_date,work_since")] Teacher teacher)
		{
			if (ModelState.IsValid)
			{
				_context.Add(teacher);
				await _context.SaveChangesAsync();
				return RedirectToAction(nameof(Index));
			}
			return View(teacher);
		}

		// GET: Teachers/Edit/5
		public async Task<IActionResult> Edit(int? id)
		{
			if (id == null)
			{
				return NotFound();
			}

			//var teacher = await _context.Teachers.FindAsync(id);
			var teacher = await _context.Teachers
				.Include(t => t.Disciplines!)
				.ThenInclude(d => d.Discipline)
				.FirstOrDefaultAsync(m => m.teacher_id == id);

			List<Discipline> disciplines = await _context.Disciplines.ToListAsync();
			ViewData["Disciplines"] = new SelectList(disciplines, "discipline_id", "discipline_name");

			if (teacher == null)
			{
				return NotFound();
			}
			return View(teacher);
		}

		// POST: Teachers/Edit/5
		// To protect from overposting attacks, enable the specific properties you want to bind to.
		// For more details, see http://go.microsoft.com/fwlink/?LinkId=317598.
		[HttpPost]
		[ValidateAntiForgeryToken]
		public async Task<IActionResult> Edit(int id, [Bind("teacher_id,last_name,first_name,middle_name,birth_date,work_since")] Teacher teacher)
		{
			if (id != teacher.teacher_id)
			{
				return NotFound();
			}

			if (ModelState.IsValid)
			{
				try
				{
					_context.Update(teacher);
					//_context.Update(teacher.Disciplines!);
					await _context.SaveChangesAsync();
				}
				catch (DbUpdateConcurrencyException)
				{
					if (!TeacherExists(teacher.teacher_id))
					{
						return NotFound();
					}
					else
					{
						throw;
					}
				}
				return RedirectToAction(nameof(Edit));
				//return RedirectToAction(nameof(Index));
			}
			return View(teacher);
		}
		public async Task<IActionResult> AddDiscipline(int? teacher_id, short? discipline_id)
		{
			//int? teacher_id = teacher;
			//int? discipline_id = discipline;

			//Teacher teacher = await _context.Teachers
			//	.Include(t => t.Disciplines)
			//	.FirstOrDefaultAsync(m => m.teacher_id == teacher_id);
			Teacher teacher = await _context.Teachers
				.Include(t => t.Disciplines!)
				.ThenInclude(d => d.Discipline)
				.FirstOrDefaultAsync(m => m.teacher_id == teacher_id);
			//List<Discipline> disciplines = _context.Disciplines.ToList();
			if (teacher == null) 
				return NotFound();

			TeachersDisciplinesRelation disciplineToAdd = new TeachersDisciplinesRelation();
			disciplineToAdd.discipline = (short)discipline_id;
			disciplineToAdd.teacher = (int)teacher_id;
			disciplineToAdd.Discipline = await _context.Disciplines
				.FirstOrDefaultAsync(d => d.discipline_id == discipline_id);
			disciplineToAdd.Teacher = teacher;

			teacher.Disciplines.Add(disciplineToAdd);
			//teacher.Disciplines.Add(
			//	new TeachersDisciplinesRelation
			//	{
			//		teacher = teacher.teacher_id,
			//		discipline = (short)discipline_id
			//	}
			//	);

			return View(teacher);
			//return RedirectToPage("./Details", teacher.teacher_id);

			//Teacher update = teacher;
			//Teacher teacher = _context.Teachers.Find(id);
			//if (discipline == null)
			//{ 
			//	//teacher.Disciplines = new List<TeachersDisciplinesRelation>();
			//	return;
			//}
			//teacher.Disciplines.Add
			//	(
			//	new TeachersDisciplinesRelation { teacher = teacher.teacher_id, discipline = discipline.discipline_id }
			//	);
		}

		// GET: Teachers/Delete/5
		public async Task<IActionResult> Delete(int? id)
		{
			if (id == null)
			{
				return NotFound();
			}

			var teacher = await _context.Teachers
				.FirstOrDefaultAsync(m => m.teacher_id == id);
			if (teacher == null)
			{
				return NotFound();
			}

			return View(teacher);
		}

		// POST: Teachers/Delete/5
		[HttpPost, ActionName("Delete")]
		[ValidateAntiForgeryToken]
		public async Task<IActionResult> DeleteConfirmed(int id)
		{
			var teacher = await _context.Teachers.FindAsync(id);
			if (teacher != null)
			{
				_context.Teachers.Remove(teacher);
			}

			await _context.SaveChangesAsync();
			return RedirectToAction(nameof(Index));
		}

		private bool TeacherExists(int id)
		{
			return _context.Teachers.Any(e => e.teacher_id == id);
		}
	}
}
