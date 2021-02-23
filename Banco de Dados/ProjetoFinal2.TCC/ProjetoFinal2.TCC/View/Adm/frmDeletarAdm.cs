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

namespace ProjetoFinal2.TCC.View.Adm
{
    public partial class frmDeletarAdm : Form
    {
        Administrador a = new Administrador();
        AdmController ac = new AdmController();

        public frmDeletarAdm()
        {
            InitializeComponent();
        }

        private void btndeletarj_Click(object sender, EventArgs e)
        {

            AdmController adm = new AdmController();
            DataTable dtAdm = new DataTable();

            dtAdm = adm.efetuarLogin(txtnome.Text, txtsenha.Text);


            if (dtAdm.Rows.Count > 0)
            {

                if (MessageBox.Show("Deseja excluir este Administrador?",
             "Atenção", MessageBoxButtons.YesNo,
             MessageBoxIcon.Question) == DialogResult.Yes)
                {


                   
                    int regAfetados;


                    if (txtnomeAdm.Text != "")
                    {
                       
                        a.nomeAdm= txtnomeAdm.Text;


                    }
                    else
                    {
                        MessageBox.Show("Digite o Codigo do Administrador ");
                        txtnomeAdm.Focus();

                    }




                    regAfetados = ac.deletaradm(a);

                    if (regAfetados > 0)
                    {

                        MessageBox.Show("Administrador Deletado com Sucesso",
                            "",
                            MessageBoxButtons.OK, MessageBoxIcon.Information);
                        txtnomeAdm.Text = "";
                        txtnome.Text = "";
                        txtsenha.Text = "";


                    }
                }





            }
            else
            {
                MessageBox.Show("Nome de usuário ou senha inválidos");
            }
        }




          
        

        private void button2_Click(object sender, EventArgs e)
        {
            frmMenu frmp = new frmMenu();
            this.Hide();
            frmp.Show();
        }
    }
}
