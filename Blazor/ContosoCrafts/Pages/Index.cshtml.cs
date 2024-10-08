using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using ContosoCrafts.Models;
using ContosoCrafts.Services;

namespace ContosoCrafts.Pages
{
	public class IndexModel : PageModel
	{
		private readonly ILogger<IndexModel> _logger;
		public JsonFileProductService ProductService { get; set; }
		public IEnumerable<Product> Products { get; private set; }
		public IndexModel(ILogger<IndexModel> logger, JsonFileProductService productService)
		{
			_logger = logger;
			ProductService = productService;
		}

		public void OnGet()
		{
			Products = ProductService.GetProducts();
		}
	}
}
