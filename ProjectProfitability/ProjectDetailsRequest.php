<?php session_start(); include("connection1.php");?>
<html>
    <body>
        <fieldset>
            <center>
                <form name = "projectreq" method = "post">
                    <table>
                        <tr>
                            <td>Project Name</td>
                            <td>
                                <select name = "pname[]">
                                    <option value = "">--Select a project--</option>
                                    <?php
                                    $projectsunderpm = mysql_query("select Name from projectdetails where ProjectManager = '".$_SESSION['user']."';");
                                    if(mysql_num_rows($projectsunderpm))
                                    {
                                        while($projnames = mysql_fetch_assoc($projectsunderpm))
                                        {
                                            echo "<option value = ".$projnames['Name'].">".$projnames['Name']."</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Integrated Business Group Head</td>
                            <td><input type = "text" name = "newibghead" id = "newibghead"></td>
                        </tr>
                        <tr>
                            <td>Integrated Business Unit Head</td>
                            <td><input type = "text" name = "newibuhead" id = "newibuhead"></td>
                        </tr>
                        <tr>
                            <td>Program Manager</td>
                            <td><input type = "text" name = "newpgm" id = "newpgm"></td>
                        </tr>
                        <tr>
                            <td>Project Manager</td>
                            <td><input type = "text" name = "newpm" id = "newpm"></td>
                        </tr>
                        <tr></tr>
                        <tr>
                            <td></td>
                            <td><button class = "btnSubmit" type = "submit" name = "submit">Request for Project Details Change</button>
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
                                </style>
                            </td>
                        </tr>
                    </table>
                </form>
            </center>
        </fieldset>
    </body>
    <?php
    if(isset($_POST["submit"]))
    {
        foreach($_REQUEST['pname'] as $projectname);
        $quer = mysql_query("select ProjectID from projectdetails where Name = '".$projectname."';");
        $querfet = mysql_fetch_assoc($quer);
        $projid = $querfet['ProjectID'];
        $newIBG = $_POST['newibghead'];
        $newIBU = $_POST['newibuhead'];
        $newPGM = $_POST['newpgm'];
        $newPM = $_POST['newpm'];
        
        $prodetreq = mysql_query("insert into projectdetailsrequest(ProjectID,ProjectName,IBGHead,IBUHead,ProgramManager,ProjectManager) values('$projid','$projectname','$newIBG','$newIBU','$newPGM','$newPM');");
        
        ?>
        <script>alert("Request Sent Successfully.");alert("Note: Requested changes take place in 24/48 hours.");location.href = "logout.php";</script>
        <?php
    }
    ?>
</html>