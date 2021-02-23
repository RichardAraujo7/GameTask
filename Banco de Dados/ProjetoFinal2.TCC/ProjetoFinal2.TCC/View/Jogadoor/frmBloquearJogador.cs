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

namespace ProjetoFinal2.TCC.View.Jogador
{
    public partial class frmBloquearJogador : Form
    {

        JogadorController jc = new JogadorController();
        DataTable dtJogador = new DataTable();
        Joogador j = new Joogador();
        public string nomeJogador = "";
        public string bloquear = "";
        public int a = 0;

        public frmBloquearJogador()
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
                j.codigo= a;
                j.bloqJogador= bloquear;

                regAfetados = jc.BloquearJogador(j);

                if (regAfetados > 0)
                {

                    MessageBox.Show("Jogador Bloqueado com Sucesso",
                        "",
                        MessageBoxButtons.OK, MessageBoxIcon.Information);

                    txtBusca.Text = "";
                    txtCodigo.Text = "";

                }
            }
            else
            {


                MessageBox.Show("Digite o Código do Jogador");

            }

        }

        private void txtBusca_TextChanged(object sender, EventArgs e)
        {
            nomeJogador = txtBusca.Text;
            dtJogador = jc.buscarpornomejogador(nomeJogador);
            dgvBuscarJogador.DataSource = dtJogador;
        }

        private void btnMenu_Click(object sender, EventArgs e)
        {
            frmMenu frmm = new frmMenu();
            this.Hide();
            frmm.ShowDialog();
        }
    }
}
