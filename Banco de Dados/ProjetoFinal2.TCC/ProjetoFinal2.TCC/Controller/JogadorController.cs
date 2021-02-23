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

    

    class JogadorController
    {
        SqlCommand comando;
        SqlConnection conexaoBanco = new SqlConnection();
        Conexao con = new Conexao();




        public int deletarJogador(Joogador j)
        {

            int linhasAfetadas = 0;
            comando = new SqlCommand();
            //defineir o tipo de comando
            comando.CommandType = CommandType.StoredProcedure;
            //indicar o nome da sp
            comando.CommandText = "deletarJogador";
            comando.Parameters.AddWithValue("@nickJogador", j.nickJogador);



            conexaoBanco = con.abrirConexao();
            comando.Connection = conexaoBanco;
            try
            {

                linhasAfetadas = comando.ExecuteNonQuery();
            }
            catch (Exception ex)
            {

                MessageBox.Show("Vc Deletou os Dados do Jogador \n" + ex.Message);

            }
            finally
            {

                conexaoBanco.Close();

            }
            return linhasAfetadas;

        }
        public DataTable buscarpornomejogador(string nomeJogador)
        {
            DataTable dtjogador = new DataTable();
            SqlDataAdapter dajogador =
                new SqlDataAdapter("buscarjogadorpornome", conexaoBanco);
            //DEFINIR O TIPO DE COMANDO (STORED PROCEDURE)
            dajogador.SelectCommand.CommandType =
                CommandType.StoredProcedure;

            dajogador.SelectCommand.Parameters.
                AddWithValue("@nomeJogador", nomeJogador);

            conexaoBanco = con.abrirConexao();
            dajogador.SelectCommand.Connection = conexaoBanco;
            dajogador.Fill(dtjogador);
            conexaoBanco.Close();
            return dtjogador;
        }

        public int BloquearJogador(Joogador j)
        {

            int linhasAfetadas = 0;
            comando = new SqlCommand();
            //defineir o tipo de comando
            comando.CommandType = CommandType.StoredProcedure;
            //indicar o nome da sp
            comando.CommandText = "bloqJogador";
            comando.Parameters.AddWithValue("@bloqJogador", j.bloqJogador);
            comando.Parameters.AddWithValue("@codJogador", j.codigo);


            conexaoBanco = con.abrirConexao();
            comando.Connection = conexaoBanco;
            try
            {

                linhasAfetadas = comando.ExecuteNonQuery();
            }
            catch (Exception ex)
            {

                MessageBox.Show("Vc Alterou os Dados do Jogador \n" + ex.Message);

            }
            finally
            {

                conexaoBanco.Close();

            }
            return linhasAfetadas;
        }





    }
}
