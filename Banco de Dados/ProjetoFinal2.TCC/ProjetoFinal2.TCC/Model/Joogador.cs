using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ProjetoFinal2.TCC.Model
{
    class Joogador
    {
        public int codigo { get; set; }
        public string nomeJogador { get; set; }
        public string nickJogador { get; set; }
        public string emailJogador { get; set; }
        public string senhaJogador { get; set; }
        public string cidadeJogador { get; set; }
        public string estadoJogador { get; set; }
        public int likesJogador { get; set; }
        public string descJogador { get; set; }
        public string bloqJogador { get; set; }
        

        public Joogador()
        {
            codigo = 0;
            nomeJogador = "";
            nickJogador = "";
            emailJogador = "";
            senhaJogador = "";
            cidadeJogador = "";
            estadoJogador = "";
            likesJogador = 0;
            descJogador = "";
            bloqJogador = "";


        }

    }
}
