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
using ProjetoFinal2.TCC.View;

namespace ProjetoFinal2.TCC.View
{
    public partial class frmDeletarJogador : Form
    {


       Joogador j = new Joogador();
        JogadorController jc = new JogadorController();

        public frmDeletarJogador()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {


            AdmController adm = new AdmController();
            DataTable dtAdm = new DataTable();

            dtAdm = adm.efetuarLogin(txtnome.Text, txtsenha.Text);


            if (dtAdm.Rows.Count > 0)
            {

                if (MessageBox.Show("Deseja excluir este Jogador?",
                "Atenção", MessageBoxButtons.YesNo,
                MessageBoxIcon.Question) == DialogResult.Yes)
                {


                   
                    int regAfetados;


                    if (txtpesquisar.Text != "")
                    {
                        j.nickJogador = txtpesquisar.Text;

                    }
                    else
                    {
                        MessageBox.Show("Digite o Codigo do Jogador ");
                        txtpesquisar.Focus();
                    

                    }




                    regAfetados = jc.deletarJogador(j);

                    if (regAfetados > 0)
                    {

                        MessageBox.Show("Jogador Deletado com Sucesso",
                            "",
                            MessageBoxButtons.OK, MessageBoxIcon.Information);
                        txtpesquisar.Text = "";
                        txtnome.Text = "";
                        txtsenha.Text = "";

                    }
                }


            }else
            {
                MessageBox.Show("Nome de usuário ou senha inválidos");
            }







        }
        

        private void button2_MouseHover(object sender, EventArgs e)
        {
           
        }

        private void button2_MouseLeave(object sender, EventArgs e)
        {
   
        }

        private void btndeletarj_MouseHover(object sender, EventArgs e)
        {
       
        }

        private void btndeletarj_MouseLeave(object sender, EventArgs e)
        {
          
        }

        private void button2_Click(object sender, EventArgs e)
        {
            frmMenu frmp = new frmMenu();
            this.Hide();
            frmp.Show();
        }

        private void txtcodigo_TextChanged(object sender, EventArgs e)
        {
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }
    }
}
