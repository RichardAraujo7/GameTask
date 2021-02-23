namespace ProjetoFinal2.TCC.View.Post
{
    partial class frmbloquearpost
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frmbloquearpost));
            this.btnConfrmar = new System.Windows.Forms.Button();
            this.btnMenu = new System.Windows.Forms.Button();
            this.txtBusca = new System.Windows.Forms.TextBox();
            this.txtCodigo = new System.Windows.Forms.TextBox();
            this.dgvBuscarPost = new System.Windows.Forms.DataGridView();
            this.label1 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            ((System.ComponentModel.ISupportInitialize)(this.dgvBuscarPost)).BeginInit();
            this.SuspendLayout();
            // 
            // btnConfrmar
            // 
            this.btnConfrmar.FlatAppearance.BorderSize = 0;
            this.btnConfrmar.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btnConfrmar.ForeColor = System.Drawing.Color.White;
            this.btnConfrmar.Location = new System.Drawing.Point(424, 246);
            this.btnConfrmar.Name = "btnConfrmar";
            this.btnConfrmar.Size = new System.Drawing.Size(75, 23);
            this.btnConfrmar.TabIndex = 0;
            this.btnConfrmar.Text = "Confirmar";
            this.btnConfrmar.UseVisualStyleBackColor = true;
            this.btnConfrmar.Click += new System.EventHandler(this.btnConfrmar_Click);
            // 
            // btnMenu
            // 
            this.btnMenu.FlatAppearance.BorderSize = 0;
            this.btnMenu.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btnMenu.ForeColor = System.Drawing.Color.White;
            this.btnMenu.Location = new System.Drawing.Point(424, 217);
            this.btnMenu.Name = "btnMenu";
            this.btnMenu.Size = new System.Drawing.Size(75, 23);
            this.btnMenu.TabIndex = 1;
            this.btnMenu.Text = "Menu";
            this.btnMenu.UseVisualStyleBackColor = true;
            this.btnMenu.Click += new System.EventHandler(this.btnMenu_Click);
            // 
            // txtBusca
            // 
            this.txtBusca.Location = new System.Drawing.Point(151, 38);
            this.txtBusca.Name = "txtBusca";
            this.txtBusca.Size = new System.Drawing.Size(292, 20);
            this.txtBusca.TabIndex = 2;
            this.txtBusca.TextChanged += new System.EventHandler(this.txtBusca_TextChanged);
            // 
            // txtCodigo
            // 
            this.txtCodigo.Location = new System.Drawing.Point(151, 78);
            this.txtCodigo.Name = "txtCodigo";
            this.txtCodigo.Size = new System.Drawing.Size(155, 20);
            this.txtCodigo.TabIndex = 3;
            // 
            // dgvBuscarPost
            // 
            this.dgvBuscarPost.BackgroundColor = System.Drawing.Color.FromArgb(((int)(((byte)(53)))), ((int)(((byte)(53)))), ((int)(((byte)(53)))));
            this.dgvBuscarPost.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dgvBuscarPost.Location = new System.Drawing.Point(12, 119);
            this.dgvBuscarPost.Name = "dgvBuscarPost";
            this.dgvBuscarPost.Size = new System.Drawing.Size(406, 150);
            this.dgvBuscarPost.TabIndex = 4;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.ForeColor = System.Drawing.Color.White;
            this.label1.Location = new System.Drawing.Point(12, 41);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(133, 13);
            this.label1.TabIndex = 5;
            this.label1.Text = "Digite o Texto para Busca:";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.ForeColor = System.Drawing.Color.White;
            this.label2.Location = new System.Drawing.Point(12, 81);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(121, 13);
            this.label2.TabIndex = 6;
            this.label2.Text = "Digite o Código do Post:";
            // 
            // frmbloquearpost
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(26)))), ((int)(((byte)(26)))), ((int)(((byte)(26)))));
            this.ClientSize = new System.Drawing.Size(506, 295);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.dgvBuscarPost);
            this.Controls.Add(this.txtCodigo);
            this.Controls.Add(this.txtBusca);
            this.Controls.Add(this.btnMenu);
            this.Controls.Add(this.btnConfrmar);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedDialog;
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.MaximizeBox = false;
            this.Name = "frmbloquearpost";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Bloquear Post";
            this.Load += new System.EventHandler(this.frmBloquearPost_Load);
            ((System.ComponentModel.ISupportInitialize)(this.dgvBuscarPost)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button btnConfrmar;
        private System.Windows.Forms.Button btnMenu;
        private System.Windows.Forms.TextBox txtBusca;
        private System.Windows.Forms.TextBox txtCodigo;
        private System.Windows.Forms.DataGridView dgvBuscarPost;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label2;
    }
}