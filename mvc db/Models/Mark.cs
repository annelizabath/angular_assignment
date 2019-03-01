using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace mvcdatabae.Models
{
    public class Mark
    {

        public int MarkId { get; set; }

        public int CustomerId { get; set; }
        public virtual Customer customer { get; set; }

        public string salary { get; set; }
    }
}