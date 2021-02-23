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
    public partial class frmBuscarPosts : Form
    {

        PostsController pc = new PostsController();
        DataTable dtpost = new DataTable();
        Posts p = new Posts();
        public string textoPost = "";
       

        public frmBuscarPosts()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            frmMenu frmm = new frmMenu();
            this.Hide();
            frmm.ShowDialog();
        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {
            textoPost = txtbuscar.Text;
            dtpost = pc.buscarPost(textoPost);
            dvgBuscar.DataSource = dtpost;
        }

        private void btnMenu_Click(object sender, EventArgs e)
        {
            frmMenu frmp = new frmMenu();
            this.Hide();
            frmp.Show();
        }

        private void dvgBuscar_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }
    }
}
