using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ProjetoFinal2.TCC.Model
{
    class Administrador
    {
        public int codigoAdm { get; set; }
        public string nomeAdm { get; set; }
        public string senhaAdm { get; set; }
        public string tipoUser { get; set; }


        public Administrador()
        {

            codigoAdm = 0;
            nomeAdm = "";
            senhaAdm = "";
            tipoUser = "ADM";


        }
    }
}
