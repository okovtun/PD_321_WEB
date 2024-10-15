using System.ComponentModel.DataAnnotations;

namespace BlazorAppPD_212.Models
{
    public class Discipline
    {
        [Key]
        public short discipline_id { get; set; }
        [Required]
        public string discipline_name { get; set; }
        [Required]
        public byte number_of_lessons { get; set; }
    }
}
