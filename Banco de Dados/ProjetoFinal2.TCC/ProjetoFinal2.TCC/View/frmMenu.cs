using ProjetoFinal2.TCC.View.Adm;
using ProjetoFinal2.TCC.View.Jogador;
using ProjetoFinal2.TCC.View.Post;
using ProjetoFinal2.TCC.View.Times;
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
    public partial class frmMenu : Form
    {
        public frmMenu()
        {
            InitializeComponent();
        }

        private void buscarToolStripMenuItem3_Click(object sender, EventArgs e)
        {
            frmBuscarJogador frmbuscj = new frmBuscarJogador();
            this.Hide();
            frmbuscj.Show();
        }

        private void deletarToolStripMenuItem3_Click(object sender, EventArgs e)
        {
            frmDeletarJogador frmdelj = new frmDeletarJogador();
            this.Hide();
            frmdelj.Show();
        }

        private void buscarToolStripMenuItem3_MouseHover(object sender, EventArgs e)
        {
            buscarToolStripMenuItem3.BackColor = Color.RoyalBlue;
        }

        private void buscarToolStripMenuItem3_MouseLeave(object sender, EventArgs e)
        {
            buscarToolStripMenuItem3.BackColor = Color.White;
            
        }

        public class TestColorTable : ProfessionalColorTable
        {
            public override Color MenuBorder
            {
                get { return Color.Green; }
            }
        }

        private void menuStrip1_ItemClicked(object sender, ToolStripItemClickedEventArgs e)
        {
           
        }

        private void buscarToolStripMenuItem2_Click(object sender, EventArgs e)
        {
            frmBuscarTimes frmbust = new frmBuscarTimes();
            this.Hide();
            frmbust.Show();

        }

        private void deletarToolStripMenuItem2_Click(object sender, EventArgs e)
        {
            frmDeletarTimes frmdelt = new frmDeletarTimes();
            this.Hide();
            frmdelt.Show();

        }

        private void novoAdministradorToolStripMenuItem_Click(object sender, EventArgs e)
        {
            frmNovoaAdm frmna = new frmNovoaAdm();
            this.Hide();
            frmna.ShowDialog();
        }

        private void buscarToolStripMenuItem1_Click(object sender, EventArgs e)
        {
            frmBuscarAdm frmab = new frmBuscarAdm();
            this.Hide();
            frmab.ShowDialog();
        }

        private void deletarToolStripMenuItem1_Click(object sender, EventArgs e)
        {
            frmDeletarAdm frmad = new frmDeletarAdm();
            this.Hide();
            frmad.ShowDialog();
        }

        private void opçõesToolStripMenuItem_Click(object sender, EventArgs e)
        {

        }

        private void trocarDeUsuárioToolStripMenuItem_Click(object sender, EventArgs e)
        {
            frmLogin frml = new frmLogin();
            this.Hide();
            frml.Show();

        }

        private void sairToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        private void bloquearToolStripMenuItem_Click(object sender, EventArgs e)
        {
            frmbloquearpost frmbp = new frmbloquearpost();
            this.Hide();
            frmbp.Show();

        }

        private void buscarToolStripMenuItem_Click(object sender, EventArgs e)
        {
            frmBuscarPosts frmbup = new frmBuscarPosts();
            this.Hide();
            frmbup.ShowDialog();
        }

        private void deletarToolStripMenuItem_Click(object sender, EventArgs e)
        {
            frmDeletarPost frmdp = new frmDeletarPost();
            this.Hide();
            frmdp.ShowDialog();

        }

        private void bloquearToolStripMenuItem2_Click(object sender, EventArgs e)
        {
            frmBloquearTime frmbt = new frmBloquearTime();
            this.Hide();
            frmbt.ShowDialog();
        }

        private void bloquearToolStripMenuItem1_Click(object sender, EventArgs e)
        {

            frmBloquearJogador frmbj = new frmBloquearJogador();
            this.Hide();
            frmbj.ShowDialog();

        }

        private void button1_Click(object sender, EventArgs e)
        {
            
        }

        private void mandarCódigosToolStripMenuItem_Click(object sender, EventArgs e)
        {
            FrmEsqueci frme = new FrmEsqueci();
            this.Hide();
            frme.ShowDialog();
        }
    }
}
