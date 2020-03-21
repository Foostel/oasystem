<!DOCTYPE html>
    <head>
        <title>Foostel</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="actions.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
        </script>
        <script type="text/javascript" src="state-city/cities.js"></script>
        <script type="text/javascript" src="geo-loc.js"></script>
        <script type="text/javascript">
            $(function(){
                $('#side-panel').load("side-panel.php");
            });
            $(function(){
                $('#header').load("user-header.php");
            });

            $(function(){
                $('#pop-up').load("geo-map.php");
            });
        </script>
        <?php 
        session_start();
        if(!isset($_SESSION['id']))
        {   echo"Access denied";
            header("location:page.php");
        }
        else{
        }

         ?>
        
    </head>

    <body>
        <div class="header" id="header">
        </div>

        <div class="section" >
            <img src="oas-logo.svg" style="height: 400px; position: absolute; top:200px; left: 900px;">
            <form style="position: fixed; top:150px; left: 50px;">
                <table cellspacing="" >
                    <tr>
                        <td><input style="text-align: center;" type="" class="inputs" name="" placeholder="Business name"></td> 
                        <td><input style="text-align: center;" type="" class="inputs" name="" placeholder="Building/House no"></td>  
                        <td><div id="states"></div></td>
                    </tr>
                    <tr>
                        <td>
                            <script src="cities.js"></script>
                            <select style="height: 50px; width: 260px;text-align: center;" class="inputs" onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" class="form-control" required></select>
                        </td>
                        <td>
                            <script language="javascript">print_state("sts");</script>
                            <select style="height: 50px;width: 260px; text-align: center;" class="inputs" id ="state" class="form-control" required></select>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input style="text-align: center;" type="" class="inputs" name="" placeholder="Landmark">
                        </td>
                        <td>
                            <input style="text-align: center;" type="" class="inputs" name="" placeholder="Area/Coloney/Street">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input style="text-align: center;" type="" class="inputs" name="" placeholder="Village/Town">
                        </td>
                        <td>
                            <input style="text-align: center;" type="" class="inputs" name="" placeholder="Pincode">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input onclick="toggle('pop-up');" style="text-align: center; width: 260px;" type="button" class="inputs" name="" value="Add geo-location">
                        </td>

                        <td>
                            <input style="text-align: center; width: 260px;" type="button" class="inputs" name="" value="Add photos">
                        </td>
                    </tr>

                    <tr>
                        <td><button class="btn">Next <i class="fa fa-angle-right" aria-hidden="true"></i></button></td>
                    </tr>

                </table>
            </form>
            
        </div>
        <div class="side-panel" id="side-panel" style="text-align: center;">
                
        </div>
        <div class="pop-up" id="pop-up">
            
        </div>
        
    </body>
</html>