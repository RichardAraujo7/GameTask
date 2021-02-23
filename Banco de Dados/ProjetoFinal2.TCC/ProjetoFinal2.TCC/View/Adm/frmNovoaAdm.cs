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
    public partial class frmNovoaAdm : Form
    {
        Administrador ad = new Administrador();
        AdmController ac = new AdmController();

        public frmNovoaAdm()
        {
            InitializeComponent();
        }

        private void btnLimpar_Click(object sender, EventArgs e)
        {
            txtconfsenha.Text = "";
            txtnomeusu.Text = "";
            txtsenha.Text = "";
        }

        private void btnConfirmar_Click(object sender, EventArgs e)
        {
            int regAfetados;



            if (txtsenha.Text != txtconfsenha.Text)
            {


                MessageBox.Show("Digite a Mesma Senha!!!",
                    "",
                    MessageBoxButtons.OK, MessageBoxIcon.Information);




            }

            else if (txtconfsenha.Text == txtconfsenha.Text && txtnomeusu.Text != "")
            {

                

                ad.nomeAdm = txtnomeusu.Text;
                ad.senhaAdm = txtsenha.Text;
               
                
             

                regAfetados = ac.inserirAdm(ad);

                if (regAfetados > 0)
                {

                    MessageBox.Show("Admistrador Cadrastrado com sucesso",
                        "Inserir novo ",
                        MessageBoxButtons.OK, MessageBoxIcon.Information);



                }


            }
            else {


               

                    MessageBox.Show("Digite um Nome!!!",
                   "",
                   MessageBoxButtons.OK, MessageBoxIcon.Information);


               

            }
        }

        private void btnMenu_Click(object sender, EventArgs e)
        {
            frmMenu frmp = new frmMenu();
            this.Hide();
            frmp.Show();
        }

        private void frmNovoaAdm_Load(object sender, EventArgs e)
        {

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void label3_Click(object sender, EventArgs e)
        {

        }
    }
}

