<script>
    function get(id){
        return document.getElementById(id);
    }

    function loadDoc(){
        var xhr= new XMLHttpRequest();
        xhr.open("GET","profile.php",true);
        xhr.onreadystatechange=function(){
            if(this.readyState==4 && this.status==200){
                get("demo").innerHTML=this.responseText;
            }
        };
        xhr.send();
    }
</script>
<html>
    <head>

    </head>
    <body>
        <fieldset>
        <table align="center">
            <tr>
                <td>
                <button onclick="loadDoc()">Click Here</button>
                <div id="demo"></div>
                </td>
            </tr>
            </table>
        </fieldset>
    </body>
</html>
