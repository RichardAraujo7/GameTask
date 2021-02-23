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
    public partial class frmBuscarJogador : Form
    {
        JogadorController jc = new JogadorController();
        DataTable dtJogador = new DataTable();
        public frmBuscarJogador()
        {
            InitializeComponent();
        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {
          
           
            
                string nome = txtPesj.Text;
                dtJogador = jc.buscarpornomejogador(nome);
                dgPesqJogador.DataSource = dtJogador;
               
         
           
        }

        private void btnMenu_Click(object sender, EventArgs e)
        {
            frmMenu frmp = new frmMenu();
            this.Hide();
            frmp.Show();
        }
    }
 }

