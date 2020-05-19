using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Assignment
{
    public partial class VSQS : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void Button1_Click1(object sender, EventArgs e)
        {
            ViewState["no1"] = TextBox1.Text;
            ViewState["no2"] = TextBox2.Text;
        }

        protected void Button2_Click(object sender, EventArgs e)
        {
            TextBox3.Text = ViewState["no1"].ToString();
            TextBox4.Text = ViewState["no2"].ToString();
        }
    }
}
