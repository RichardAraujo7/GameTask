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

namespace ProjetoFinal2.TCC.View
{
    public partial class frmBuscarTimes : Form
    {
        TimesController tc = new TimesController();
        DataTable dtTime = new DataTable();
        public frmBuscarTimes()
        {
            InitializeComponent();
        }

        private void btnMenubt_Click(object sender, EventArgs e)
        {
            frmMenu frmp = new frmMenu();
            this.Hide();
            frmp.Show();
        }

        private void txtPest_TextChanged(object sender, EventArgs e)
        {
            


            string nometime = txtPest.Text;
            dtTime = tc.buscarpornometime(nometime);
            dgvtime.DataSource = dtTime;
            


        }

        private void dgvtime_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }
    }
}


