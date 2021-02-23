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
    public partial class frmbloquearpost : Form
    {


        PostsController pc = new PostsController();
        DataTable dtpost = new DataTable();
        Posts p = new Posts();
       public string textoPost = "";
       public string bloquear="";
        public int a=0;

        public frmbloquearpost()
        {
            InitializeComponent();
        }

        private void frmBloquearPost_Load(object sender, EventArgs e)
        {

        }

        private void btnConfrmar_Click(object sender, EventArgs e)
        {


            if (txtCodigo.Text != "")
            {



                bloquear = "1";




                int regAfetados;


                a = Convert.ToInt32(txtCodigo.Text);
                p.codpost = a;
                p.bloqpost = bloquear;

                regAfetados = pc.BloquearPost(p);

                if (regAfetados > 0)
                {

                    MessageBox.Show("Post Bloqueado com Sucesso",
                        "",
                        MessageBoxButtons.OK, MessageBoxIcon.Information);

                    txtBusca.Text = "";
                    txtCodigo.Text = "";



                }
            }
            else {


                MessageBox.Show("Digite o Código do Post");

            }
        }

        private void txtBusca_TextChanged(object sender, EventArgs e)
        {
            textoPost = txtBusca.Text;
            dtpost = pc.buscarPost(textoPost);
            dgvBuscarPost.DataSource = dtpost;


        }

        private void btnMenu_Click(object sender, EventArgs e)
        {
            frmMenu frmm = new frmMenu();
            this.Hide();
            frmm.Show();
        }
    }
}
