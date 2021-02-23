using ProjetoFinal2.TCC.Model;
using System;
using System.Collections.Generic;
using System.Data;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace ProjetoFinal2.TCC.Controller
{
    class EsqueciController
    {
        SqlCommand comando;
        SqlConnection conexaoBanco = new SqlConnection();
        Conexao con = new Conexao();

        public DataTable todosospedidos()
        {
            DataTable dadospedidos = new DataTable();
            SqlDataAdapter adptpedidos;

            con = new Conexao();
            conexaoBanco = new SqlConnection();
            conexaoBanco = con.abrirConexao();

            adptpedidos = new SqlDataAdapter("esquecisenha", conexaoBanco);
            adptpedidos.SelectCommand.CommandType = CommandType.StoredProcedure;

            adptpedidos.Fill(dadospedidos);

            return dadospedidos;
        }


        public int mandarcod(EsqueciSenha e)
        {

            int linhasAfetadas = 0;
            comando = new SqlCommand();
            //defineir o tipo de comando
            comando.CommandType = CommandType.StoredProcedure;
            //indicar o nome da sp
            comando.CommandText = "mandarcod";
            comando.Parameters.AddWithValue("@email", e.email);
            comando.Parameters.AddWithValue("@codigo", e.codigo);


            conexaoBanco = con.abrirConexao();
            comando.Connection = conexaoBanco;
            try
            {

                linhasAfetadas = comando.ExecuteNonQuery();
            }
            catch (Exception ex)
            {

              

            }
            finally
            {

                conexaoBanco.Close();

            }
            return linhasAfetadas;
        }



    }
}
