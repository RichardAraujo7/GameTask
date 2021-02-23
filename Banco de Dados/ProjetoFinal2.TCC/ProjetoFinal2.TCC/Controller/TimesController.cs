using System;
using System.Collections.Generic;
using System.Data;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using ProjetoFinal2.TCC.Model;
namespace ProjetoFinal2.TCC.Controller
{

  

    class TimesController
    {
        SqlCommand comando;
        SqlConnection conexaoBanco = new SqlConnection();
        Conexao con = new Conexao();


        public int deletarTimes(Timess t)
        {

            int linhasAfetadas = 0;
            comando = new SqlCommand();
            //defineir o tipo de comando
            comando.CommandType = CommandType.StoredProcedure;
            //indicar o nome da sp
            comando.CommandText = "deletarTime";
            comando.Parameters.AddWithValue("@nomeTime", t.nometime);



            conexaoBanco = con.abrirConexao();
            comando.Connection = conexaoBanco;
            try
            {

                linhasAfetadas = comando.ExecuteNonQuery();
            }
            catch (Exception ex)
            {

                MessageBox.Show("Você Deletou os Dados do Time!!\n" + ex.Message);

            }
            finally
            {

                conexaoBanco.Close();

            }
            return linhasAfetadas;

        }
        public DataTable buscarpornometime(string nomeTime)
        {

            DataTable dtjTime = new DataTable();
            SqlDataAdapter dajTime =
                new SqlDataAdapter("buscatimespornome", conexaoBanco);
            //DEFINIR O TIPO DE COMANDO (STORED PROCEDURE)
            dajTime.SelectCommand.CommandType =
                CommandType.StoredProcedure;

            dajTime.SelectCommand.Parameters.
                AddWithValue("@nomeTime", nomeTime);

            conexaoBanco = con.abrirConexao();
            dajTime.SelectCommand.Connection = conexaoBanco;
            dajTime.Fill(dtjTime);
            conexaoBanco.Close();
            return dtjTime;
        }



        public DataTable todosTimes()
        {
            DataTable dadostime = new DataTable();
            SqlDataAdapter adptTime;

            con = new Conexao();
            conexaoBanco = new SqlConnection();
            conexaoBanco = con.abrirConexao();

            adptTime = new SqlDataAdapter("Todos os Times Cadastrados", conexaoBanco);
            adptTime.SelectCommand.CommandType = CommandType.StoredProcedure;

            adptTime.Fill(dadostime);

            return dadostime;
        }

        public int BloquearTime(Timess t)
        {

            int linhasAfetadas = 0;
            comando = new SqlCommand();
            //defineir o tipo de comando
            comando.CommandType = CommandType.StoredProcedure;
            //indicar o nome da sp
            comando.CommandText = "bloqtimes";
            comando.Parameters.AddWithValue("@bloqTimes", t.bloqtime);
            comando.Parameters.AddWithValue("@codTime", t.codigot);


            conexaoBanco = con.abrirConexao();
            comando.Connection = conexaoBanco;
            try
            {

                linhasAfetadas = comando.ExecuteNonQuery();
            }
            catch (Exception ex)
            {

                MessageBox.Show("Vc Alterou os Dados do Time \n" + ex.Message);

            }
            finally
            {

                conexaoBanco.Close();

            }
            return linhasAfetadas;
        }


    }
}
