using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using ProjetoFinal2.TCC.Controller;
using System.Data;

namespace ProjetoFinal2.TCC.View
{
    public partial class frmLogin : Form
    {
        public frmLogin()
        {
            InitializeComponent();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            AdmController adm = new AdmController();
            DataTable dtAdm = new DataTable();

            dtAdm = adm.efetuarLogin(textBox1.Text, textBox2.Text);


            if (dtAdm.Rows.Count > 0)
            {
                frmMenu frmm = new frmMenu();

                if (dtAdm.Rows[0]["tipoUser"].ToString()=="ADM")
                {
                    frmm.administradoresToolStripMenuItem.Enabled = true;
                }
                else
                {
                    frmm.administradoresToolStripMenuItem.Enabled = false;
                }
                this.Hide();
                frmm.ShowDialog();
            }
            else
            {
                MessageBox.Show("Nome de usuário ou senha inválidos");
            }
        }

        private void button1_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        private void btnconfirmar_MouseEnter(object sender, EventArgs e)
        {      
        }

        private void btnconfirmar_MouseLeave(object sender, EventArgs e)
        {
        }
    }
}
