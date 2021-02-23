namespace ProjetoFinal2.TCC.View
{
    partial class frmMenu
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frmMenu));
            this.pictureBox1 = new System.Windows.Forms.PictureBox();
            this.label2 = new System.Windows.Forms.Label();
            this.label1 = new System.Windows.Forms.Label();
            this.menuStrip1 = new System.Windows.Forms.MenuStrip();
            this.jogadoresToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.buscarToolStripMenuItem3 = new System.Windows.Forms.ToolStripMenuItem();
            this.deletarToolStripMenuItem3 = new System.Windows.Forms.ToolStripMenuItem();
            this.bloquearToolStripMenuItem1 = new System.Windows.Forms.ToolStripMenuItem();
            this.timesToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.buscarToolStripMenuItem2 = new System.Windows.Forms.ToolStripMenuItem();
            this.deletarToolStripMenuItem2 = new System.Windows.Forms.ToolStripMenuItem();
            this.bloquearToolStripMenuItem2 = new System.Windows.Forms.ToolStripMenuItem();
            this.postsToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.buscarToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.bloquearToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.deletarToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.administradoresToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.novoAdministradorToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.buscarToolStripMenuItem1 = new System.Windows.Forms.ToolStripMenuItem();
            this.deletarToolStripMenuItem1 = new System.Windows.Forms.ToolStripMenuItem();
            this.opçõesToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.trocarDeUsuárioToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.sairToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.mandarCódigosToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).BeginInit();
            this.menuStrip1.SuspendLayout();
            this.SuspendLayout();
            // 
            // pictureBox1
            // 
            this.pictureBox1.Image = ((System.Drawing.Image)(resources.GetObject("pictureBox1.Image")));
            this.pictureBox1.Location = new System.Drawing.Point(289, 65);
            this.pictureBox1.Name = "pictureBox1";
            this.pictureBox1.Size = new System.Drawing.Size(186, 174);
            this.pictureBox1.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.pictureBox1.TabIndex = 8;
            this.pictureBox1.TabStop = false;
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 21.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.ForeColor = System.Drawing.SystemColors.ControlLightLight;
            this.label2.Location = new System.Drawing.Point(29, 127);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(209, 33);
            this.label2.TabIndex = 7;
            this.label2.Text = "Administrador";
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 21.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.ForeColor = System.Drawing.SystemColors.ControlLight;
            this.label1.Location = new System.Drawing.Point(29, 94);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(166, 33);
            this.label1.TabIndex = 6;
            this.label1.Text = "Bem Vindo";
            // 
            // menuStrip1
            // 
            this.menuStrip1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(43)))), ((int)(((byte)(110)))), ((int)(((byte)(225)))));
            this.menuStrip1.Items.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.jogadoresToolStripMenuItem,
            this.timesToolStripMenuItem,
            this.postsToolStripMenuItem,
            this.administradoresToolStripMenuItem,
            this.opçõesToolStripMenuItem});
            this.menuStrip1.Location = new System.Drawing.Point(0, 0);
            this.menuStrip1.Name = "menuStrip1";
            this.menuStrip1.Size = new System.Drawing.Size(503, 24);
            this.menuStrip1.TabIndex = 5;
            this.menuStrip1.Text = "menuStrip1";
            this.menuStrip1.ItemClicked += new System.Windows.Forms.ToolStripItemClickedEventHandler(this.menuStrip1_ItemClicked);
            // 
            // jogadoresToolStripMenuItem
            // 
            this.jogadoresToolStripMenuItem.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(43)))), ((int)(((byte)(110)))), ((int)(((byte)(225)))));
            this.jogadoresToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.buscarToolStripMenuItem3,
            this.deletarToolStripMenuItem3,
            this.bloquearToolStripMenuItem1});
            this.jogadoresToolStripMenuItem.ForeColor = System.Drawing.Color.Black;
            this.jogadoresToolStripMenuItem.Image = ((System.Drawing.Image)(resources.GetObject("jogadoresToolStripMenuItem.Image")));
            this.jogadoresToolStripMenuItem.Name = "jogadoresToolStripMenuItem";
            this.jogadoresToolStripMenuItem.Size = new System.Drawing.Size(100, 20);
            this.jogadoresToolStripMenuItem.Text = "    Jogadores";
            // 
            // buscarToolStripMenuItem3
            // 
            this.buscarToolStripMenuItem3.Image = global::ProjetoFinal2.TCC.Properties.Resources.buscarimg;
            this.buscarToolStripMenuItem3.Name = "buscarToolStripMenuItem3";
            this.buscarToolStripMenuItem3.Size = new System.Drawing.Size(121, 22);
            this.buscarToolStripMenuItem3.Text = "Buscar";
            this.buscarToolStripMenuItem3.Click += new System.EventHandler(this.buscarToolStripMenuItem3_Click);
            this.buscarToolStripMenuItem3.MouseLeave += new System.EventHandler(this.buscarToolStripMenuItem3_MouseLeave);
            this.buscarToolStripMenuItem3.MouseHover += new System.EventHandler(this.buscarToolStripMenuItem3_MouseHover);
            // 
            // deletarToolStripMenuItem3
            // 
            this.deletarToolStripMenuItem3.Image = global::ProjetoFinal2.TCC.Properties.Resources.lixoimg;
            this.deletarToolStripMenuItem3.Name = "deletarToolStripMenuItem3";
            this.deletarToolStripMenuItem3.Size = new System.Drawing.Size(121, 22);
            this.deletarToolStripMenuItem3.Text = "Deletar";
            this.deletarToolStripMenuItem3.Click += new System.EventHandler(this.deletarToolStripMenuItem3_Click);
            // 
            // bloquearToolStripMenuItem1
            // 
            this.bloquearToolStripMenuItem1.Image = global::ProjetoFinal2.TCC.Properties.Resources.bloq;
            this.bloquearToolStripMenuItem1.Name = "bloquearToolStripMenuItem1";
            this.bloquearToolStripMenuItem1.Size = new System.Drawing.Size(121, 22);
            this.bloquearToolStripMenuItem1.Text = "Bloquear";
            this.bloquearToolStripMenuItem1.Click += new System.EventHandler(this.bloquearToolStripMenuItem1_Click);
            // 
            // timesToolStripMenuItem
            // 
            this.timesToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.buscarToolStripMenuItem2,
            this.deletarToolStripMenuItem2,
            this.bloquearToolStripMenuItem2});
            this.timesToolStripMenuItem.Image = ((System.Drawing.Image)(resources.GetObject("timesToolStripMenuItem.Image")));
            this.timesToolStripMenuItem.Name = "timesToolStripMenuItem";
            this.timesToolStripMenuItem.Size = new System.Drawing.Size(79, 20);
            this.timesToolStripMenuItem.Text = "    Times";
            // 
            // buscarToolStripMenuItem2
            // 
            this.buscarToolStripMenuItem2.Image = global::ProjetoFinal2.TCC.Properties.Resources.buscarimg;
            this.buscarToolStripMenuItem2.Name = "buscarToolStripMenuItem2";
            this.buscarToolStripMenuItem2.Size = new System.Drawing.Size(121, 22);
            this.buscarToolStripMenuItem2.Text = "Buscar";
            this.buscarToolStripMenuItem2.Click += new System.EventHandler(this.buscarToolStripMenuItem2_Click);
            // 
            // deletarToolStripMenuItem2
            // 
            this.deletarToolStripMenuItem2.Image = global::ProjetoFinal2.TCC.Properties.Resources.lixoimg;
            this.deletarToolStripMenuItem2.Name = "deletarToolStripMenuItem2";
            this.deletarToolStripMenuItem2.Size = new System.Drawing.Size(121, 22);
            this.deletarToolStripMenuItem2.Text = "Deletar";
            this.deletarToolStripMenuItem2.Click += new System.EventHandler(this.deletarToolStripMenuItem2_Click);
            // 
            // bloquearToolStripMenuItem2
            // 
            this.bloquearToolStripMenuItem2.Image = global::ProjetoFinal2.TCC.Properties.Resources.bloq;
            this.bloquearToolStripMenuItem2.Name = "bloquearToolStripMenuItem2";
            this.bloquearToolStripMenuItem2.Size = new System.Drawing.Size(121, 22);
            this.bloquearToolStripMenuItem2.Text = "Bloquear";
            this.bloquearToolStripMenuItem2.Click += new System.EventHandler(this.bloquearToolStripMenuItem2_Click);
            // 
            // postsToolStripMenuItem
            // 
            this.postsToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.buscarToolStripMenuItem,
            this.bloquearToolStripMenuItem,
            this.deletarToolStripMenuItem});
            this.postsToolStripMenuItem.Image = ((System.Drawing.Image)(resources.GetObject("postsToolStripMenuItem.Image")));
            this.postsToolStripMenuItem.Name = "postsToolStripMenuItem";
            this.postsToolStripMenuItem.Size = new System.Drawing.Size(75, 20);
            this.postsToolStripMenuItem.Text = "    Posts";
            // 
            // buscarToolStripMenuItem
            // 
            this.buscarToolStripMenuItem.Image = global::ProjetoFinal2.TCC.Properties.Resources.buscarimg;
            this.buscarToolStripMenuItem.Name = "buscarToolStripMenuItem";
            this.buscarToolStripMenuItem.Size = new System.Drawing.Size(180, 22);
            this.buscarToolStripMenuItem.Text = "Buscar";
            this.buscarToolStripMenuItem.Click += new System.EventHandler(this.buscarToolStripMenuItem_Click);
            // 
            // bloquearToolStripMenuItem
            // 
            this.bloquearToolStripMenuItem.Image = global::ProjetoFinal2.TCC.Properties.Resources.bloq;
            this.bloquearToolStripMenuItem.Name = "bloquearToolStripMenuItem";
            this.bloquearToolStripMenuItem.Size = new System.Drawing.Size(180, 22);
            this.bloquearToolStripMenuItem.Text = "Bloquear";
            this.bloquearToolStripMenuItem.Click += new System.EventHandler(this.bloquearToolStripMenuItem_Click);
            // 
            // deletarToolStripMenuItem
            // 
            this.deletarToolStripMenuItem.Image = global::ProjetoFinal2.TCC.Properties.Resources.lixoimg;
            this.deletarToolStripMenuItem.Name = "deletarToolStripMenuItem";
            this.deletarToolStripMenuItem.Size = new System.Drawing.Size(180, 22);
            this.deletarToolStripMenuItem.Text = "Deletar";
            this.deletarToolStripMenuItem.Click += new System.EventHandler(this.deletarToolStripMenuItem_Click);
            // 
            // administradoresToolStripMenuItem
            // 
            this.administradoresToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.novoAdministradorToolStripMenuItem,
            this.buscarToolStripMenuItem1,
            this.deletarToolStripMenuItem1,
            this.mandarCódigosToolStripMenuItem});
            this.administradoresToolStripMenuItem.Image = ((System.Drawing.Image)(resources.GetObject("administradoresToolStripMenuItem.Image")));
            this.administradoresToolStripMenuItem.Name = "administradoresToolStripMenuItem";
            this.administradoresToolStripMenuItem.Size = new System.Drawing.Size(137, 20);
            this.administradoresToolStripMenuItem.Text = "     Administradores";
            // 
            // novoAdministradorToolStripMenuItem
            // 
            this.novoAdministradorToolStripMenuItem.Image = ((System.Drawing.Image)(resources.GetObject("novoAdministradorToolStripMenuItem.Image")));
            this.novoAdministradorToolStripMenuItem.Name = "novoAdministradorToolStripMenuItem";
            this.novoAdministradorToolStripMenuItem.Size = new System.Drawing.Size(182, 22);
            this.novoAdministradorToolStripMenuItem.Text = "Novo Administrador";
            this.novoAdministradorToolStripMenuItem.Click += new System.EventHandler(this.novoAdministradorToolStripMenuItem_Click);
            // 
            // buscarToolStripMenuItem1
            // 
            this.buscarToolStripMenuItem1.Image = ((System.Drawing.Image)(resources.GetObject("buscarToolStripMenuItem1.Image")));
            this.buscarToolStripMenuItem1.Name = "buscarToolStripMenuItem1";
            this.buscarToolStripMenuItem1.Size = new System.Drawing.Size(182, 22);
            this.buscarToolStripMenuItem1.Text = "Buscar";
            this.buscarToolStripMenuItem1.Click += new System.EventHandler(this.buscarToolStripMenuItem1_Click);
            // 
            // deletarToolStripMenuItem1
            // 
            this.deletarToolStripMenuItem1.Image = ((System.Drawing.Image)(resources.GetObject("deletarToolStripMenuItem1.Image")));
            this.deletarToolStripMenuItem1.Name = "deletarToolStripMenuItem1";
            this.deletarToolStripMenuItem1.Size = new System.Drawing.Size(182, 22);
            this.deletarToolStripMenuItem1.Text = "Deletar";
            this.deletarToolStripMenuItem1.Click += new System.EventHandler(this.deletarToolStripMenuItem1_Click);
            // 
            // opçõesToolStripMenuItem
            // 
            this.opçõesToolStripMenuItem.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.trocarDeUsuárioToolStripMenuItem,
            this.sairToolStripMenuItem});
            this.opçõesToolStripMenuItem.Image = ((System.Drawing.Image)(resources.GetObject("opçõesToolStripMenuItem.Image")));
            this.opçõesToolStripMenuItem.Name = "opçõesToolStripMenuItem";
            this.opçõesToolStripMenuItem.Size = new System.Drawing.Size(93, 20);
            this.opçõesToolStripMenuItem.Text = "      Opções";
            this.opçõesToolStripMenuItem.Click += new System.EventHandler(this.opçõesToolStripMenuItem_Click);
            // 
            // trocarDeUsuárioToolStripMenuItem
            // 
            this.trocarDeUsuárioToolStripMenuItem.Image = ((System.Drawing.Image)(resources.GetObject("trocarDeUsuárioToolStripMenuItem.Image")));
            this.trocarDeUsuárioToolStripMenuItem.ImageTransparentColor = System.Drawing.Color.White;
            this.trocarDeUsuárioToolStripMenuItem.Name = "trocarDeUsuárioToolStripMenuItem";
            this.trocarDeUsuárioToolStripMenuItem.Size = new System.Drawing.Size(166, 22);
            this.trocarDeUsuárioToolStripMenuItem.Text = "Trocar de Usuário";
            this.trocarDeUsuárioToolStripMenuItem.Click += new System.EventHandler(this.trocarDeUsuárioToolStripMenuItem_Click);
            // 
            // sairToolStripMenuItem
            // 
            this.sairToolStripMenuItem.ForeColor = System.Drawing.SystemColors.ControlText;
            this.sairToolStripMenuItem.Image = ((System.Drawing.Image)(resources.GetObject("sairToolStripMenuItem.Image")));
            this.sairToolStripMenuItem.Name = "sairToolStripMenuItem";
            this.sairToolStripMenuItem.Size = new System.Drawing.Size(166, 22);
            this.sairToolStripMenuItem.Text = "Sair";
            this.sairToolStripMenuItem.Click += new System.EventHandler(this.sairToolStripMenuItem_Click);
            // 
            // mandarCódigosToolStripMenuItem
            // 
            this.mandarCódigosToolStripMenuItem.Image = ((System.Drawing.Image)(resources.GetObject("mandarCódigosToolStripMenuItem.Image")));
            this.mandarCódigosToolStripMenuItem.Name = "mandarCódigosToolStripMenuItem";
            this.mandarCódigosToolStripMenuItem.Size = new System.Drawing.Size(182, 22);
            this.mandarCódigosToolStripMenuItem.Text = "Mandar Códigos";
            this.mandarCódigosToolStripMenuItem.Click += new System.EventHandler(this.mandarCódigosToolStripMenuItem_Click);
            // 
            // frmMenu
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(26)))), ((int)(((byte)(26)))), ((int)(((byte)(26)))));
            this.ClientSize = new System.Drawing.Size(503, 280);
            this.Controls.Add(this.pictureBox1);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.menuStrip1);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedDialog;
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.MaximizeBox = false;
            this.Name = "frmMenu";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Menu";
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).EndInit();
            this.menuStrip1.ResumeLayout(false);
            this.menuStrip1.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.PictureBox pictureBox1;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.MenuStrip menuStrip1;
        private System.Windows.Forms.ToolStripMenuItem jogadoresToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem buscarToolStripMenuItem3;
        private System.Windows.Forms.ToolStripMenuItem deletarToolStripMenuItem3;
        private System.Windows.Forms.ToolStripMenuItem timesToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem buscarToolStripMenuItem2;
        private System.Windows.Forms.ToolStripMenuItem deletarToolStripMenuItem2;
        private System.Windows.Forms.ToolStripMenuItem postsToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem buscarToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem bloquearToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem deletarToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem novoAdministradorToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem buscarToolStripMenuItem1;
        private System.Windows.Forms.ToolStripMenuItem deletarToolStripMenuItem1;
        private System.Windows.Forms.ToolStripMenuItem opçõesToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem trocarDeUsuárioToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem sairToolStripMenuItem;
        public System.Windows.Forms.ToolStripMenuItem administradoresToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem bloquearToolStripMenuItem1;
        private System.Windows.Forms.ToolStripMenuItem bloquearToolStripMenuItem2;
        private System.Windows.Forms.ToolStripMenuItem mandarCódigosToolStripMenuItem;
    }
}