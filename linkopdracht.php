<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Webservices</title>
<style>
table {
    width:20%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: black;
    color: white;
}
</style>
</head>
<body>
<center>
    <form method="get" action="">
        Country ID: <input type="number" name="id" id="inputid" /><br/><br/>
        <button type="button" id="btn-submit">Show result</button><br/>
		<h2>Step 1</h2>
        <div>Response: </div><textarea cols="50" rows="5" id="textarea-xml"></textarea>
    </form>
	<h2>Step 2</h2>
    <div id="content"></div>
  <h2>Step 3</h2>
    <div id="table"></div>

<script>

    function getResponse(url) {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", url, false);
        xhr.send();

        return xhr.responseText;
    }

    var numberID;
    var response;
    document.getElementById('btn-submit').addEventListener('click', function() {
        numberID = document.getElementById('inputid').value;
        response = getResponse('webservices/api-countries.php?output=xml&id=' + numberID);
        document.getElementById('textarea-xml').innerHTML = response;

        var parser, xmlDoc;

        parser = new DOMParser();
        xmlDoc = parser.parseFromString(response,"text/xml");

        // Table
        nodeID = xmlDoc.getElementsByTagName("id");
        nodeName = xmlDoc.getElementsByTagName("name");
        contentID = "";
        contentName = "";

        for (i = 0; i< nodeID.length; i++) {
            contentID += + [nodeID[i].childNodes[0].nodeValue] + "|";
            contentName += [nodeName[i].childNodes[0].nodeValue] + "|";
        }

        contentID = contentID.split("|");
        contentName = contentName.split("|");

        var mytable = "<table border='1'>";

        mytable += "<tr>";
            mytable += "<th>" + nodeID[0].nodeName + "</th>";
            mytable += "<th>" + nodeName[0].nodeName + "</th>";
        mytable += "</tr>";

        for (i = 0; i< nodeID.length; i++) {
            mytable += "<tr>";
                mytable += "<td>" + contentID[i] + "</td>";
                mytable += "<td>" + contentName[i] + "</td>";
            mytable += "</tr>";
        }

        mytable += "</table>";

        document.getElementById("content").innerHTML = "Country name(s): " + "<br/>" +  contentName;
        document.getElementById("table").innerHTML = "<br/>" +  mytable;

    });

</script>
</center>
</body>
</html>
