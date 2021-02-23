using ProjetoFinal2.TCC.Controller;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace ProjetoFinal2.TCC.View.Adm
{
    public partial class frmBuscarAdm : Form
    {
        AdmController ac = new AdmController();
        DataTable dtAdm = new DataTable();

        public frmBuscarAdm()
        {
            InitializeComponent();
        }

        private void txtPesAdm_TextChanged(object sender, EventArgs e)
        {
            string nomeAdm = txtPesAdm.Text;
            dtAdm = ac.buscarpornomeadm(nomeAdm);
            dvgbuscaAdm.DataSource = dtAdm;
            dvgbuscaAdm.Columns[2].Visible = false;
           
        }

        private void button1_Click(object sender, EventArgs e)
        {
            frmMenu frmp = new frmMenu();
            this.Hide();
            frmp.Show();
        }
    }
}
