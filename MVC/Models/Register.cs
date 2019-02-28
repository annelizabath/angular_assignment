using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations;

namespace mvcapplication.Models
{
    public class Register
    {   [Required(ErrorMessage="name should be less than 50 character")]
        [Display(Name="First name")]
        public string Name { get; set; }
        [Required]
        [DataType(DataType.MultilineText)]
        public string Address { get; set; }
        public string Gender { get; set; }
        [Required]
        [Display(Name = "Your Course")]
        public Course courseList { get; set; }
        [Required(ErrorMessage="please enter valid email address")]
        [Display(Name = "Your Email")]
        [DataType(DataType.EmailAddress)]
        public string Email { get; set; }
        [Required]
        [Display(Name = "Your Image")]
        public string Photo { get; set; }

        [Required]
        [Display(Name = "User Name")]
        public string Username { get; set; }
        [Required(ErrorMessage="Must contain alphabetic , numeric and special character")]
        [Display(Name = "Your Password")]
        public string Password { get; set; }
        [Required(ErrorMessage="Dosen't match")]
        [Display(Name = "Confirm Password")]
        public string Conpwd  { get; set; }

    }
    public enum Course
    {
        MCA,
        MTECH,
    BTECH
    }
}