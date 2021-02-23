using ProjetoFinal2.TCC.Controller;
using ProjetoFinal2.TCC.Model;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Net.Mail;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace ProjetoFinal2.TCC.View
{
    public partial class FrmEsqueci : Form
    {
        EsqueciController esc = new EsqueciController();
        EsqueciSenha es = new EsqueciSenha();
        Random aleatorio = new Random();
        SmtpClient smtp = new SmtpClient();
        MailMessage mail = new MailMessage();
        DataTable dtpedidos = new DataTable();
        string Menssagem = "Caro Usuário " +
            "Você Solicitou um Código de Confirmação " +
            "Para o Acesso a sua Conta na Game Task " +
            "Seu Código é:";
        string Menssagem2 = "Atenciosamente,Game Task";

        
        

        public FrmEsqueci()
        { 
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            int codigo = aleatorio.Next(10000, 100000);
            

                int regAfetados;

                 es.email = txtemail.Text;
             es.codigo = codigo;

                regAfetados = esc.mandarcod(es);

                if (regAfetados > 0)
                {

                    MessageBox.Show("Enviado com Sucesso",
                        "",
                        MessageBoxButtons.OK, MessageBoxIcon.Information);

                

                }
            
         
            smtp = new SmtpClient();
            mail = new MailMessage();

           
            smtp.Host = "smtp.live.com";
            smtp.Port = 587;
            smtp.EnableSsl = true;
            smtp.UseDefaultCredentials = false;
            
            smtp.Credentials = new System.Net.NetworkCredential("gametask10@hotmail.com", "Tccdosbrodi2");
        
            mail.From = new MailAddress("gametask10@hotmail.com");

            if (!string.IsNullOrWhiteSpace(txtemail.Text))
            {

                mail.To.Add(new MailAddress(txtemail.Text));

            }
            else
            {
                MessageBox.Show("Campo 'Para' Obrigatório", "Erro", MessageBoxButtons.OK, MessageBoxIcon.Error);
                return;
            }

            mail.Subject = "Equipe Game Task";
            mail.Body = Menssagem + " " + codigo + " " + Menssagem2;

            mail.IsBodyHtml = true;
            
            smtp.Send(mail);

            MessageBox.Show("Email Enviado com Sucesso", "Confirmação", MessageBoxButtons.OK, MessageBoxIcon.Information);

        }

        private void FrmEsqueci_Load(object sender, EventArgs e)
        {
            
            dtpedidos = esc.todosospedidos();
            dvgmostrapedidos.DataSource = dtpedidos;
            for (int i = 0; i < dvgmostrapedidos.ColumnCount; i++)
                dvgmostrapedidos.Columns[i].Width += 50;
        }

        private void button2_Click(object sender, EventArgs e)
        {
            frmMenu frmm = new frmMenu();
            this.Hide();
            frmm.ShowDialog();
        }
    }
}
