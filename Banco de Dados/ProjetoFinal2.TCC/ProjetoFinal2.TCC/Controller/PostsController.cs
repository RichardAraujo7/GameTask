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
    class PostsController
    {
        SqlCommand comando;
        SqlConnection conexaoBanco = new SqlConnection();
        Conexao con = new Conexao();

        public DataTable buscarPost(string post)
        {

            DataTable dtpost = new DataTable();
            SqlDataAdapter dapost =
                new SqlDataAdapter("buscarPost", conexaoBanco);
            //DEFINIR O TIPO DE COMANDO (STORED PROCEDURE)
            dapost.SelectCommand.CommandType =
                CommandType.StoredProcedure;

            dapost.SelectCommand.Parameters.
                AddWithValue("@txtPost", post);

            conexaoBanco = con.abrirConexao();
            dapost.SelectCommand.Connection = conexaoBanco;
            dapost.Fill(dtpost);
            conexaoBanco.Close();
            return dtpost;


        }

        public int BloquearPost(Posts p)
        {

            int linhasAfetadas = 0;
            comando = new SqlCommand();
            //defineir o tipo de comando
            comando.CommandType = CommandType.StoredProcedure;
            //indicar o nome da sp
            comando.CommandText = "bloqPost";
            comando.Parameters.AddWithValue("@bloqPost", p.bloqpost);
            comando.Parameters.AddWithValue("@codPost", p.codpost);


            conexaoBanco = con.abrirConexao();
            comando.Connection = conexaoBanco;
            try
            {

                linhasAfetadas = comando.ExecuteNonQuery();
            }
            catch (Exception ex)
            {

                MessageBox.Show("Vc Alterou os Dados do post \n" + ex.Message);

            }
            finally
            {

                conexaoBanco.Close();

            }
            return linhasAfetadas;
        }


        public int deletaradm(Posts p)
        {

            int linhasAfetadas = 0;
            comando = new SqlCommand();
            //defineir o tipo de comando
            comando.CommandType = CommandType.StoredProcedure;
            //indicar o nome da sp
            comando.CommandText = "deletarPost";
            comando.Parameters.AddWithValue("@codPost", p.codpost);



            conexaoBanco = con.abrirConexao();
            comando.Connection = conexaoBanco;
            try
            {

                linhasAfetadas = comando.ExecuteNonQuery();
            }
            catch (Exception ex)
            {

                MessageBox.Show("Vc Deletou o Post Selecionado \n" + ex.Message);

            }
            finally
            {

                conexaoBanco.Close();

            }
            return linhasAfetadas;

        }

    }


    
}
