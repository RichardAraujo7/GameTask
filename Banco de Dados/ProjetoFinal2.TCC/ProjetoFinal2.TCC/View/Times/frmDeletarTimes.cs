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

namespace ProjetoFinal2.TCC.View
{
    public partial class frmDeletarTimes : Form
    {
        Timess t = new Timess();
        TimesController tc = new TimesController ();

        public frmDeletarTimes()
        {
            InitializeComponent();
        }

        private void label6_Click(object sender, EventArgs e)
        {

        }

        private void button2_Click(object sender, EventArgs e)
        {
            frmMenu frmp = new frmMenu();
            this.Hide();
            frmp.Show();
        }

        private void btndeletarj_Click(object sender, EventArgs e)
        {
            if (MessageBox.Show("Deseja excluir este Time?",
                "Atenção", MessageBoxButtons.YesNo,
                MessageBoxIcon.Question) == DialogResult.Yes)
            {


             
                int regAfetados;


                if (txtnometime.Text != "")
                {

                    t.nometime = txtnometime.Text;


                }
                else
                {
                    MessageBox.Show("Digite o Codigo do Time!!");
                    txtnometime.Focus();

                }




                regAfetados = tc.deletarTimes(t);

                if (regAfetados > 0)
                {

                    MessageBox.Show("Time Deletado com Sucesso",
                        "",
                        MessageBoxButtons.OK, MessageBoxIcon.Information);
                    txtnometime.Text = "";
                    txtnome.Text = "";
                    txtsenha.Text = "";

                }
            }
        }

        private void txtcodigo_TextChanged(object sender, EventArgs e)
        {

        }

        private void groupBox2_Enter(object sender, EventArgs e)
        {

        }
    }
}
