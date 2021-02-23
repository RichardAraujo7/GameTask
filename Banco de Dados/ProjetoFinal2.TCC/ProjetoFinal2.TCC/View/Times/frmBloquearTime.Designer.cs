namespace ProjetoFinal2.TCC.View.Times
{
    partial class frmBloquearTime
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frmBloquearTime));
            this.label2 = new System.Windows.Forms.Label();
            this.label1 = new System.Windows.Forms.Label();
            this.dgvBuscartimes = new System.Windows.Forms.DataGridView();
            this.txtCodigo = new System.Windows.Forms.TextBox();
            this.txtbusca = new System.Windows.Forms.TextBox();
            this.btnMenu = new System.Windows.Forms.Button();
            this.btnConfrmar = new System.Windows.Forms.Button();
            ((System.ComponentModel.ISupportInitialize)(this.dgvBuscartimes)).BeginInit();
            this.SuspendLayout();
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.ForeColor = System.Drawing.Color.White;
            this.label2.Location = new System.Drawing.Point(10, 75);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(123, 13);
            this.label2.TabIndex = 13;
            this.label2.Text = "Digite o Código do Time:";
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.ForeColor = System.Drawing.Color.White;
            this.label1.Location = new System.Drawing.Point(10, 35);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(134, 13);
            this.label1.TabIndex = 12;
            this.label1.Text = "Digite o Nome para Busca:";
            // 
            // dgvBuscartimes
            // 
            this.dgvBuscartimes.BackgroundColor = System.Drawing.Color.FromArgb(((int)(((byte)(53)))), ((int)(((byte)(53)))), ((int)(((byte)(53)))));
            this.dgvBuscartimes.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dgvBuscartimes.Location = new System.Drawing.Point(10, 113);
            this.dgvBuscartimes.Name = "dgvBuscartimes";
            this.dgvBuscartimes.Size = new System.Drawing.Size(406, 150);
            this.dgvBuscartimes.TabIndex = 11;
            // 
            // txtCodigo
            // 
            this.txtCodigo.Location = new System.Drawing.Point(149, 72);
            this.txtCodigo.Name = "txtCodigo";
            this.txtCodigo.Size = new System.Drawing.Size(155, 20);
            this.txtCodigo.TabIndex = 10;
            // 
            // txtbusca
            // 
            this.txtbusca.Location = new System.Drawing.Point(149, 32);
            this.txtbusca.Name = "txtbusca";
            this.txtbusca.Size = new System.Drawing.Size(292, 20);
            this.txtbusca.TabIndex = 9;
            this.txtbusca.TextChanged += new System.EventHandler(this.txtbusca_TextChanged);
            // 
            // btnMenu
            // 
            this.btnMenu.FlatAppearance.BorderSize = 0;
            this.btnMenu.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btnMenu.ForeColor = System.Drawing.Color.White;
            this.btnMenu.Location = new System.Drawing.Point(422, 211);
            this.btnMenu.Name = "btnMenu";
            this.btnMenu.Size = new System.Drawing.Size(75, 23);
            this.btnMenu.TabIndex = 8;
            this.btnMenu.Text = "Menu";
            this.btnMenu.UseVisualStyleBackColor = true;
            this.btnMenu.Click += new System.EventHandler(this.btnMenu_Click);
            // 
            // btnConfrmar
            // 
            this.btnConfrmar.FlatAppearance.BorderSize = 0;
            this.btnConfrmar.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btnConfrmar.ForeColor = System.Drawing.Color.White;
            this.btnConfrmar.Location = new System.Drawing.Point(422, 240);
            this.btnConfrmar.Name = "btnConfrmar";
            this.btnConfrmar.Size = new System.Drawing.Size(75, 23);
            this.btnConfrmar.TabIndex = 7;
            this.btnConfrmar.Text = "Confirmar";
            this.btnConfrmar.UseVisualStyleBackColor = true;
            this.btnConfrmar.Click += new System.EventHandler(this.btnConfrmar_Click);
            // 
            // frmBloquearTime
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(26)))), ((int)(((byte)(26)))), ((int)(((byte)(26)))));
            this.ClientSize = new System.Drawing.Size(506, 295);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.dgvBuscartimes);
            this.Controls.Add(this.txtCodigo);
            this.Controls.Add(this.txtbusca);
            this.Controls.Add(this.btnMenu);
            this.Controls.Add(this.btnConfrmar);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedDialog;
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.MaximizeBox = false;
            this.Name = "frmBloquearTime";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Bloquear Time";
            ((System.ComponentModel.ISupportInitialize)(this.dgvBuscartimes)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.DataGridView dgvBuscartimes;
        private System.Windows.Forms.TextBox txtCodigo;
        private System.Windows.Forms.TextBox txtbusca;
        private System.Windows.Forms.Button btnMenu;
        private System.Windows.Forms.Button btnConfrmar;
    }
}