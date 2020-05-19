<?php session_start();

        
if(!isset($_SESSION['login'])){
    header('Location: login.php');
}


?>

<html>
    <head>
        <title>Shared Shelf-Lend your Book</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="lend.css">
    </head>
    <body>
    <script type="text/javascript">
        function ddd1(){
            // return dd1;
            var dd1=document.getElementById("branch");
            
            // document.write("hey there");
            document.getElementById("subject").length=0;
            switch(dd1.value){
                case "IT":
                    var dd2=document.getElementById("year");
                    switch(dd2.value){
                        case "1":
                        document.getElementById("subject").value="eg";
                        document.getElementById("subject").options[0]=new Option("EG","eg");
                        document.getElementById("subject").value="eme";
                        document.getElementById("subject").options[1]=new Option("EME","eme");
                        break;

                        case "2":
                        document.getElementById("subject").value="c++";
                        document.getElementById("subject").options[0]=new Option("C++","c++");
                        document.getElementById("subject").value="dbms";
                        document.getElementById("subject").options[1]=new Option("DBMS","dbms");
                        break;

                        case "3":
                        document.getElementById("subject").value="os";
                        document.getElementById("subject").options[0]=new Option("OS","os");
                        document.getElementById("subject").value="coa";
                        document.getElementById("subject").options[1]=new Option("COA","coa");
                        break;

                        case "4":
                        document.getElementById("subject").value="ai";
                        document.getElementById("subject").options[0]=new Option("AI","ai");
                        document.getElementById("subject").value="python";
                        document.getElementById("subject").options[1]=new Option("PYTHON","python");
                        break;

                    }
                break;

                case "CE":
                var dd2=document.getElementById("year");
                    switch(dd2.value){
                        case "1":
                        document.getElementById("subject").value="egce";
                        document.getElementById("subject").options[0]=new Option("EGCE","egce");
                        document.getElementById("subject").value="emece";
                        document.getElementById("subject").options[1]=new Option("EMECE","emece");
                        break;

                        case "2":
                        document.getElementById("subject").value="c++ce";
                        document.getElementById("subject").options[0]=new Option("C++CE","c++ce");
                        document.getElementById("subject").value="dbmsce";
                        document.getElementById("subject").options[1]=new Option("DBMSCE","dbmsce");
                        break;

                        case "3":
                        document.getElementById("subject").value="osce";
                        document.getElementById("subject").options[0]=new Option("OSCE","osce");
                        document.getElementById("subject").value="coace";
                        document.getElementById("subject").options[1]=new Option("COACE","coace");
                        break;

                        case "4":
                        document.getElementById("subject").value="aice";
                        document.getElementById("subject").options[0]=new Option("AICE","aice");
                        document.getElementById("subject").value="pythonce";
                        document.getElementById("subject").options[1]=new Option("PYTHONCE","pythonce");
                        break;

                    }
                break;
                
                case "EC":
                var dd2=document.getElementById("year");
                    switch(dd2.value){
                        case "1":
                        document.getElementById("subject").value="egec";
                        document.getElementById("subject").options[0]=new Option("EGEC","egec");
                        document.getElementById("subject").value="emeec";
                        document.getElementById("subject").options[1]=new Option("EME","emeec");
                        break;

                        case "2":
                        document.getElementById("subject").value="c++ec";
                        document.getElementById("subject").options[0]=new Option("C++EC","c++ec");
                        document.getElementById("subject").value="dbmsec";
                        document.getElementById("subject").options[1]=new Option("DBMSEC","dbmsec");
                        break;

                        case "3":
                        document.getElementById("subject").value="osec";
                        document.getElementById("subject").options[0]=new Option("OSEC","osec");
                        document.getElementById("subject").value="coaec";
                        document.getElementById("subject").options[1]=new Option("COAEC","coaec");
                        break;

                        case "4":
                        document.getElementById("subject").value="aiec";
                        document.getElementById("subject").options[0]=new Option("AIEC","aiec");
                        document.getElementById("subject").value="pythonec";
                        document.getElementById("subject").options[1]=new Option("PYTHONEC","pythonec");
                        break;

                    }
                break;
                
            }
            return true;
        }
    </script>
        
        
        <div class="container">
            <div class="jumbotron">
                <img src="logo.png" alt="" class="logo">
                <h1 class="head">Shared Shelf</h1>
                <h2>Someone's throwaway is someone's treasure...</h2>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form method="post" action="lends.php" enctype="multipart/form-data">
            
                            <label for="branch" style="margin-top: 40px; width: 125px;">Branch</label>
                            <select name="branch" id="branch" onchange="ddd1();">
                            <option disabled selected value>---Select---</option>
                                <option value="IT">Information Technology</option>
                                <option value="CE">Computer</option>
                                <option value="EC">Electronics and Communication</option>
                                <!-- <option value="IC">Instrumentation and Control</option>
                                <option value="meta">Metallurgy</option>
                                <option value="BM">Bio-Medical</option> -->
                            </select>
                            
                
                            <br>
                            
                            <label for="year" style="margin-top: 40px; width: 125px;">Year</label>
                            <select name="year" id="year" onchange="ddd1();">
                            <option disabled selected value>---Select---</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                            <br>
                            
<!-- //subject dd acc to selected year and branch -->



        <select name="subject" id="subject">
        <option value="">---plz select branch---</option>
        </select>


                            <!-- <label for="subject" style="margin-top: 40px;">Subject</label>
                            <input type="text" name="subject">
                         -->
                            <br>
                         
                            <td><label for="publication">Publication</label>
                            <td class="answer"><input type="text" name="publication">
                        
                            <br>
                        
                            <label for="author">Author</label>
                            <input type="text" name="author">
                        
                            <br>
                            
                            <label for="subject-code">Subject-Code</label>
                            <input type="text" name="scode">
                        
                            <br>
                        
                            <label for="image">Images:</label>
                        
                            <br>
                            <!-- <button class="image"> Choose Image</button> -->
                            <input type="file" name="image" id="">
                            <br>
                            <input type="submit" name="submit" style="margin-left: 45%; margin-top: 2%; padding: 5px;">SUBMIT</button>
                            
                            
                        </form>
                
                    </div>
            </div>
        </div>
    </body>
</html>