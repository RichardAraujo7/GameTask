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

namespace ProjetoFinal2.TCC.View.Post
{
    public partial class frmDeletarPost : Form
    {
        PostsController pc = new PostsController();
        Posts p = new Posts();

        public frmDeletarPost()
        {
            InitializeComponent();
        }

        private void btndeladm_Click(object sender, EventArgs e)
        {
            AdmController adm = new AdmController();
            DataTable dtAdm = new DataTable();

            dtAdm = adm.efetuarLogin(txtnome.Text, txtsenha.Text);


            if (dtAdm.Rows.Count > 0)
            {

                if (MessageBox.Show("Deseja excluir este Post?",
             "Atenção", MessageBoxButtons.YesNo,
             MessageBoxIcon.Question) == DialogResult.Yes)
                {

                    int codpost;
                    int regAfetados;

                    if (txtcodigo.Text != "")
                    {
                        codpost = Convert.ToInt32(txtcodigo.Text);
                        p.codpost = codpost;

                    }
                    else
                    {
                        MessageBox.Show("Digite o Codigo do Post ");
                        txtcodigo.Focus();

                    }
                    regAfetados = pc.deletaradm(p);

                    if (regAfetados > 0)
                    {

                        MessageBox.Show("Post Deletado com Sucesso",
                            "",
                            MessageBoxButtons.OK, MessageBoxIcon.Information);
                        txtcodigo.Text = "";
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
            frmMenu frmm = new frmMenu();
            this.Hide();
            frmm.ShowDialog();
        }
    }
    
}
