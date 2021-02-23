using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace ProjetoFinal2.TCC.Controller
{
    class Conexao
    {
        private string strCon;

        public Conexao()
        {
            strCon = "data source=HENRIQUE;" +
                "initial catalog=BancoTCC;" +
                "integrated security=True;";
        }




        public SqlConnection abrirConexao()
        {
            SqlConnection con = new SqlConnection(strCon);
            try
            {
                con.Open();
            }
            catch (Exception ex)
            {
                MessageBox.Show("Erro ao conectar o banco de dados" +
                    "\nDescrição do erro:\n" +
                    ex.Message, "Erro", MessageBoxButtons.OK,
                    MessageBoxIcon.Error);
            }
            return con;
        }
    }
}
