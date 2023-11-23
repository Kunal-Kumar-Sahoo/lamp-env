<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello JSP</title>
</head>
<body>
    <h1>Hello World from JSP!</h1>
    <%
        String username = "Kunal Kumar Sahoo";
    %>
    <p>Welcome, <%= username %>!</p>
</body>
</html>