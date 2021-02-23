using ProjetoFinal2.TCC.Controller;
using ProjetoFinal2.TCC.Model;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace ProjetoFinal2.TCC.View.Times
{
    public partial class frmBloquearTime : Form
    {
        TimesController tc = new TimesController();
        DataTable dttimes = new DataTable();
        Timess t = new Timess();
        public string txtnometime= "";
        public string bloquear = "";
        public int a = 0;

        public frmBloquearTime()
        {
            InitializeComponent();
        }

        private void btnConfrmar_Click(object sender, EventArgs e)
        {
            if (txtCodigo.Text != "")
            {



                bloquear = "1";




                int regAfetados;


                a = Convert.ToInt32(txtCodigo.Text);
                t.codigot = a;
                t.bloqtime =bloquear;

                regAfetados = tc.BloquearTime(t);

                if (regAfetados > 0)
                {

                    MessageBox.Show("Time Bloqueado com Sucesso",
                        "",
                        MessageBoxButtons.OK, MessageBoxIcon.Information);

                    txtbusca.Text = "";
                    txtCodigo.Text = "";


                }
            }
            else
            {


                MessageBox.Show("Digite o Código do Time");

            }
        }

        private void txtbusca_TextChanged(object sender, EventArgs e)
        {
            txtnometime = txtbusca.Text;
            dttimes = tc.buscarpornometime(txtnometime);
            dgvBuscartimes.DataSource = dttimes;

        }

        private void btnMenu_Click(object sender, EventArgs e)
        {
            frmMenu frmm = new frmMenu();
            this.Hide();
            frmm.Show();
        }
    }
    
}
