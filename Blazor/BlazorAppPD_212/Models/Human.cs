using System.ComponentModel.DataAnnotations;

namespace BlazorAppPD_212.Models
{
    public class Human
    {
        [Key]
        public int teacher_id { get; set; }
        public string last_name { get; set; }
        public string first_name { get; set; }
        public string middle_name { get; set; }
        public DateTime birth_date { get; set; }
        public static int GetAge(DateTime birth_date) => DateTime.Today.Subtract(birth_date).Days/365;
    }
}
