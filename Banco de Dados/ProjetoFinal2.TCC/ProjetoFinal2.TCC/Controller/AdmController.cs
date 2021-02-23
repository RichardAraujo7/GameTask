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
    class AdmController
    {


        SqlCommand comando;
        SqlConnection conexaoBanco = new SqlConnection();
        Conexao con = new Conexao();


        public int inserirAdm(Administrador a)
        {

            int linhasAfetadas = 0;
            comando = new SqlCommand();
            //defineir o tipo de comando
            comando.CommandType = CommandType.StoredProcedure;
            //indicar o nome da sp
            comando.CommandText = "inserirAdm";

            comando.Parameters.AddWithValue("@nomeAdm", a.nomeAdm);
            comando.Parameters.AddWithValue("@senhaAdm", a.senhaAdm);
            comando.Parameters.AddWithValue("@tipoUser", a.tipoUser);

            conexaoBanco = con.abrirConexao();
            comando.Connection = conexaoBanco;
            try
            {

                linhasAfetadas = comando.ExecuteNonQuery();
            }
            catch (Exception ex)
            {

                MessageBox.Show("Falha ao Inserir Novo Administrador\n" + ex.Message);

            }
            finally
            {

                conexaoBanco.Close();

            }
            return linhasAfetadas;
        }
        public DataTable buscarpornomeadm(string nomeAdm)
        {
            
            DataTable dtadm = new DataTable();
            SqlDataAdapter daadm =
                new SqlDataAdapter("buscaradm", conexaoBanco);
            //DEFINIR O TIPO DE COMANDO (STORED PROCEDURE)
            daadm.SelectCommand.CommandType =
                CommandType.StoredProcedure;

            daadm.SelectCommand.Parameters.
                AddWithValue("@nomeAdm", nomeAdm);

            conexaoBanco = con.abrirConexao();
            daadm.SelectCommand.Connection = conexaoBanco;
            daadm.Fill(dtadm);
            conexaoBanco.Close();
            return dtadm;
        }

        public int deletaradm(Administrador a)
        {

            int linhasAfetadas = 0;
            comando = new SqlCommand();
            //defineir o tipo de comando
            comando.CommandType = CommandType.StoredProcedure;
            //indicar o nome da sp
            comando.CommandText = "deletarAdm";
            comando.Parameters.AddWithValue("@nomeAdm",a.nomeAdm);



            conexaoBanco = con.abrirConexao();
            comando.Connection = conexaoBanco;
            try
            {

                linhasAfetadas = comando.ExecuteNonQuery();
            }
            catch (Exception ex)
            {

                MessageBox.Show("Vc Deletou os Dados do Administrador\n" + ex.Message);

            }
            finally
            {

                conexaoBanco.Close();

            }
            return linhasAfetadas;

        }

        public DataTable efetuarLogin(string nomeAdm, string senhaAdm)
        {

            DataTable dtadm = new DataTable();
            SqlDataAdapter daadm =
                new SqlDataAdapter("spLogin", conexaoBanco);
            //DEFINIR O TIPO DE COMANDO (STORED PROCEDURE)
            daadm.SelectCommand.CommandType =
                CommandType.StoredProcedure;

            daadm.SelectCommand.Parameters.
                AddWithValue("@nomeAdm", nomeAdm);
            daadm.SelectCommand.Parameters.
                AddWithValue("@senhaAdm", senhaAdm);

            conexaoBanco = con.abrirConexao();
            daadm.SelectCommand.Connection = conexaoBanco;
            daadm.Fill(dtadm);
            conexaoBanco.Close();
            return dtadm;
        }


    }
}
