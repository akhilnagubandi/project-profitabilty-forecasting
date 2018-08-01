<?php session_start(); ?>
<html>
    <head>
        <title>Support Resources</title>
        <script type = "text/javascript">
            function close_window() {
              
                close();
            }
        </script>
        <style type = "text/css">
            #sheading
            {
                font-variant: small-caps;
                color: #FF0000;
            }
        </style>
        <style>
            #myBtn {
              display: none;
              position: fixed;
              bottom: 20px;
              right: 30px;
              z-index: 99;
              border: none;
              outline: none;
              background-color: red;
              color: white;
              cursor: pointer;
              padding: 15px;
              border-radius: 10px;
            }

            #myBtn:hover {
              background-color: #555;
            }
        </style>
    </head>
    <body>
        <img src = "Logo%20left_01.png" height ="75" align = "left">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <font face = "algerian" color = "#FF0000" size = "50">Project Profitability</font>
        <a href = "http://www.techmahindra.com/"><img src = "Logo.png" height = "65" align = "right"></a>
        <font face = "Arial Narrow" color = "red" size = "3"><marquee behavior= "alternate" scrollamount = "3">Connected World. Connected Technologies.</marquee></font><br /><br />
<!--        <table border="0">-->
<!--            <tr>-->
<!--                <td width = "79.5%" align = "left"><b>Welcome <?php //echo $_SESSION['usname']; $role = $_SESSION['rname']; ?></b></td>-->
                <div align = "right"><img src = "home.png">&thinsp;<a <?php switch($_SESSION['rname'])
                    {
                        case 'PM': ?>href = "dashboardpm.php"<?php
                        case 'PGM': ?>href = "dashboardpgm.php"<?php
                        case 'IBU': ?>href = "dashboardibu.php";<?php
                        case 'IBG': ?>href = "dashboardibg.php"<?php
                        case 'Admin': ?>href = "dashboardadmin.php";<?php
                    }
                    ?>
                    style = "color:#000000; text-decoration:none" onMouseOver = "this.style.color = '#FF0000'" onMouseOut = "this.style.color = '#000000'"
                    >Home</a> | <img src = "question.png"><a href="help.php" style = "color:#000000; text-decoration:none" onMouseOver = "this.style.color = '#FF0000'" onMouseOut = "this.style.color = '#000000'">Help</a> | <img src = "contact.png">&thinsp;<a href="contact.php" style = "color:#000000; text-decoration:none" onMouseOver = "this.style.color = '#FF0000'" onMouseOut = "this.style.color = '#000000'">Contact</a> | <img src = "Logout.png">&thinsp;<a href = "logout.php" style = "color:#000000; text-decoration:none" onMouseOver = "this.style.color = '#FF0000'" onMouseOut = "this.style.color = '#000000'">Logout</a></div>
<!--            </tr>-->
<!--        </table>-->
        <hr><br><br><br>
        <h2 id = "sheading" align = "center">Support Project</h2>
            <form onsubmit="close_window();" method = "post">
            <button class = "btnsubmit" type="submit" name="back">Back</button>
                            <style type = "text/css">
                                .btnSubmit{
                                    color: #FF0000;
                                    background: #D5D5D5;
                                    font-weight: bold;
                                    border: 1px solid #D5D5D5;
                                    border-radius: 8px;
                                    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
                                }
                                .btnSubmit:hover {
                                  color: #FFF;
                                  background: #FF0000;
                                }
                                .btnsubmit:active {
                                  background-color: #FF0000;
                                  box-shadow: 0 5px rgba(0,0,0,0.2);
                                  transform: translateY(4px);
                                }
                            </style>
        </form>
        <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>
        <?php include("Resources12.php"); ?>
    </body>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</html>