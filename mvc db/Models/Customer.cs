using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations;

namespace mvcdatabae.Models
{
    public class Customer
    {
        public int CustomerId { get; set; } 

        [Required(ErrorMessage="can't empty")]
        public string name { get; set; }
        [Required(ErrorMessage = "can't empty")]
        [DataType(DataType.MultilineText)]
        public string address { get; set; }
        [Required(ErrorMessage = "please provide valid email id")]
        [DataType(DataType.EmailAddress)]
        public string email { get; set; }
        [Required(ErrorMessage = "can't empty")]
        public string username { get; set; }
        [Required(ErrorMessage = "can't empty")]
        [DataType(DataType.Password)]
        public string password { get; set; }
    }
}