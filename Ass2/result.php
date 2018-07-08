<!DOCTYPE html>
<html>
    <head>
        <title>Result</title>
        <style>
            body{
                background-color: azure;
                font-family: Arial, Helvetica, sans-serif
                margin-top: 5%;
                margin-right: 5%;
                margin-left: 5%;
            }
            table{
                border-collapse: collapse;
				width: 100%;
                font-family: Arial, Helvetica, sans-serif

                
            }
			td,th{
				border:2px solid gray;
                font-family: Arial, Helvetica, sans-serif
				text-align: left;
				padding:10px;

			}
			tr:nth-child(odd){
				background-color:  rgb(192, 189, 189);

			}
            .button1{
                background-color: rgb(32, 32, 211); 
                font-family: Arial, Helvetica, sans-serif

                border: none;
                border-radius: 4px;
                color: white;
                padding: 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                ont-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
}

            }
            h3 {
                font-family: Arial, Helvetica, sans-serif;
                font-
            }
    
           
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Character</th>
                <th>Count</th>
			</tr>
			
            




        <hr>
        <h3>Character Frequency Counter</h3>
        <hr>


        <?php
        $str="";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
            $str = $_POST["textbox"];
            $strArray = count_chars($str,1);
            foreach ($strArray as $key=>$value)
             {
                echo "<tr>";
                    echo "<td>";
                        echo chr($key);
                    echo "</td>";
                    echo "<td>";
                        echo $value;
                    echo "</td>";
                echo "</tr>"; 
             }
            ;
          }
		
        ?>
        </table>
        <br>
        <form action="index.html" method="POST">

            <input class="button1" type="submit" value="Input Another String" >

        </form>
        <br>

        <table>
            <tr>
                <th>Word</th>
                <th>Count</th>
			</tr>
			
            




        <hr>
        <h3>Word Frequency Counter</h3>
        <hr>


       <?php

        $str="";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $str = $_POST["textbox"];
            $wordc = array_count_values(str_word_count($str,1));
            arsort($wordc);
            foreach ($wordc as $word=>$value)
            {
                echo "<tr>";
                    echo "<td>";
                       echo $word;
                    echo "</td>";
                    echo "<td>";
                        echo $value;
                    echo "</td>";
                echo "</tr>"; 
            }
            ;
        }
		
        ?>
        </table>
        <br>
        <form action="index.html" method="POST">

            <input class="button1" type="submit" value="Input Another String" >

        </form>


    </body>

</html>
