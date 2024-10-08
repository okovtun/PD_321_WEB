using System.Collections.Generic;
using System.IO;
using ContosoCrafts.Models;
using System.Text.Json;
using Microsoft.AspNetCore.Hosting;

namespace ContosoCrafts.Services
{
	public class JsonFileProductService
    {
        public IWebHostEnvironment WebHostEnvironment { get; }
        string JsonFileName
        {
            get => Path.Combine(WebHostEnvironment.WebRootPath, "data", "products.json");
        }
        public JsonFileProductService(IWebHostEnvironment webHostEnvironment)
        {
            WebHostEnvironment = webHostEnvironment;
        }
        public IEnumerable<Product> GetProducts()
        {
            using StreamReader jsonFileReader = File.OpenText(JsonFileName);
            return JsonSerializer.Deserialize<Product[]>
                (
                jsonFileReader.ReadToEnd(),
                new JsonSerializerOptions { PropertyNameCaseInsensitive = true }
                );
        }
    }
}
