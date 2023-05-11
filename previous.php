<?php
require('vendor/autoload.php');
session_start();
error_reporting(0);
include('link/config.php');
if(strlen($_SESSION['alogin'])=="")
{
header("Location: user_login.php");
}
else{
$username=$_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User Result</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="js/modernizr/modernizr.min.js"></script>
        <script  src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js"></script>
        <script  src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js"></script>
        <style>
        
        body{
        background-color:white;
        width:auto;
        height:auto;
        
        }
        .intro-page{
        margin-left: 203px;
        margin-right: 203px;
        
        }
        .intro-page h2{
        font-size: 20px;
        font-weight: 900;
        color: black;
        }
        .intro-page p
        {
        color: black;
        font-size: 18px;
        font-weight: 800;
        /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#87e0fd+41,53cbf1+57,05abe0+78 */
        
        }
        .flex-p {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        }
        
        .flex-p .image-p{
        flex-basis: 30%;
        max-width: 30%;
        padding: 10px;
        }
        .flex-p .content-p {
        flex-basis: 100%;
        max-width: 100%;
        padding: 21px;
        
        }
        .flex-p .content-p li{
        
        }
        .intro-page a{
        color: white;
        }
        
        .intro-page button{
        /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#499bea+33,207ce5+67 */
        background: #499bea; /* Old browsers */
        background: -moz-linear-gradient(top,  #499bea 33%, #207ce5 67%); /* FF3.6-15 */
        background: -webkit-linear-gradient(top,  #499bea 33%,#207ce5 67%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom,  #499bea 33%,#207ce5 67%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#499bea', endColorstr='#207ce5',GradientType=0 ); /* IE6-9 */
        
        float: right;
        border-radius: 25px;
        transition:0.5s;
        color:white;
        }
        .intro-page button:hover{
        /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#29b8e5+50,bce0ee+90 */
        background: #29b8e5; /* Old browsers */
        background: -moz-linear-gradient(top,  #29b8e5 50%, #bce0ee 90%); /* FF3.6-15 */
        background: -webkit-linear-gradient(top,  #29b8e5 50%,#bce0ee 90%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom,  #29b8e5 50%,#bce0ee 90%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#29b8e5', endColorstr='#bce0ee',GradientType=0 ); /* IE6-9 */
        color:white;
        border-radius: 25px;
        }
        .flex-p-inside{
        display:flex;
        flex-wrap:wrap;
        align-items:center;
        position:relative;
        }
        .flex-p-1{
        flex-basis: 29%;
        max-width: 29%;
        position: absolute;
        top: -20px;
        
        }
        .flex-p-2{
        flex-basis: 100%;
        max-width: 100%;
        }
        li{
        list-style-type:none;
        display:block;
        }
        .result-color
        {
        /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#a90329+40,8f0222+53,6d0019+84 */
        background: #a90329; /* Old browsers */
        background: -moz-linear-gradient(top,  #a90329 40%, #8f0222 53%, #6d0019 84%); /* FF3.6-15 */
        background: -webkit-linear-gradient(top,  #a90329 40%,#8f0222 53%,#6d0019 84%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom,  #a90329 40%,#8f0222 53%,#6d0019 84%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
        border-radius:20px;
        font-weight:900;
        color:white;
        }
        .result-color1{
        /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#eeeeee+43,cccccc+72 */
        background: #eeeeee; /* Old browsers */
        background: -moz-linear-gradient(top,  #eeeeee 43%, #cccccc 72%); /* FF3.6-15 */
        background: -webkit-linear-gradient(top,  #eeeeee 43%,#cccccc 72%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom,  #eeeeee 43%,#cccccc 72%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eeeeee', endColorstr='#cccccc',GradientType=0 ); /* IE6-9 */
        border-radius:20px;
        font-weight:900;
        color:black;
        }
        .flex-p-1 i{
        color:white;
        }
        </style>
    </head>
    <body id="printTable" onload="print();">
        
        <!-- ========== TOP NAVBAR ========== -->
       
    </div>
    <div class="intro-page" id="content" >
        
        
        <div class="flex-p">
            <div class="content-p">
                <table id="example"  cellspacing="0" width="100%">
                    
                    <tbody>
                        <?php $sql = "SELECT *from user where user_name='$username'";
                        $query = $dbh->prepare($sql);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        $cnt=1;
                        if($query->rowCount() > 0)
                        {
                        foreach($results as $result)
                        {   ?>
                        <tr>
                            <!-- <td><?php echo htmlentities($cnt);?></td> -->
                            
                            <?php           $resultname=$result->result ;
                            ?>
                            
                        </tr>
                        <?php $cnt=$cnt+1;}} ?>
                        
                    </tbody>
                </table>
                <?php
                if($resultname==NULL)
                {
                ?>
                <form class="form-horizontal" method="post">
                    
                    <table id="example"  >
                        
                        <tbody>
                            <tr>
                                
                                <h3 class="result-color">&nbsp &nbspYou Didn't Check Yet.Maybe you are new user.To see your Result you have to check first</h3><br>
                                
                                
                            </tr>
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
        <?php }
        else
        {
        ?>
        <form class="form-horizontal" method="post">
            
            <table id="example"  >
                
                <h1>Previous Result</h1>
                <p class="form-horizontal">&nbsp&nbspThis result is based on your symptoms.If you want to know better check again.</p>
                 <div style="border:2px solid black; padding:1px; margin-bottom:15px;">
        
                    <h1 style="text-decoration:underline 2px solid black;text-align:center;margin-top:0px;">Patient Details</h1>
                    <!-- </div> -->
                   <h3 style="text-align: left;margin-top:10px">Name:<b> <?php echo htmlentities($_SESSION['username']);?></b></h3>
                    <h3 style="margin-top:-36px;text-align:right;">Gender: <b><?php echo htmlentities($_SESSION['gender']);?></b></h3>
                    <h3 style="margin-top:0px;text-align:left;">Age:<b><?php echo htmlentities($result->age);?></b></h3>
                     <h3 style="margin-top:-36px;text-align:right;">DOB:<b> <?php echo htmlentities($result->dob);?></b></h3>
                
     
                </div>
                <tbody>
                    <?php $sql = "SELECT  *from disease_tb where id=$resultname";
                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                    $cnt=1;
                    if($query->rowCount() > 0)
                    {
                    foreach($results as $result)
                    {   ?>
                    <tr>
                        <!-- <?php echo htmlentities($cnt);?> -->
                        <h1>Previously Checked Result </h1>
                        <h2><?php echo htmlentities($result->disease_name);?></h2><br>
                        <h1><b>Disease Cause </b></h1>
                        <h2><?php echo htmlentities($result->cause);?><h2>
                        
                        
                        
                    </tr>
                    <?php $cnt=$cnt+1;}} ?>
                    
                    
                </tbody>
            </table>
           
               <h1> Disclaimer :</h1>
                <p>
                Please note that the information provided by this tool is provided solely for educational purposes
                and is not a &nbspqualified medical opinion. This information should not be considered advice or an opinion
                of a doctor or other health &nbspprofessional about your actual medical state, and you should see a doctor
                for any symptoms you may have. If you are &nbspexperiencing a health emergency, you should call your local
            &nbspemergency number immediately to request emergency medical &nbspassistance.</p>
            <div class="flex-p-inside">
                <div class="flex-p-2">
                </div>
                </div><!-- <a href="Forgot_Password.php" download>Download</a>
            </form> -->
            
            <?php } ?>
            <div class="flex-p-inside">
               
        </div>
        </div>
        <!-- /.main-wrapper -->
        <script src="js/jquery-2.2.4.min.js"></script>
        <script src="js/main.js"></script>
        <script>
        $(function($) {
        $(".js-states").select2();
        $(".js-states-limit").select2({
        maximumSelectionLength: 2
        });
        $(".js-states-hide").select2({
        minimumResultsForSearch: Infinity
        });
        });
        </script>
        <!--  <script>
        var doc = new jsPDF();
        var specialElementHandlers = {
        '#editor': function (element, renderer) {
        return true;
        }
        };
        $('#submit').click(function () {
        doc.fromHTML($('#content').html(), 15, 15, {
        'width': 190,
        'elementHandlers': specialElementHandlers
        });
        doc.download('sample-page.pdf');
        });
        </script> -->
        
        
    </body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
window.jsPDF = window.jspdf.jsPDF;
var docPDF = new jsPDF();
function print(){
var elementHTML = document.querySelector("#printTable");
docPDF.html(elementHTML, {
callback: function(docPDF) {
docPDF.save('Invoice.pdf');
location.replace('user_interface.php');
},
x: 15,
y: 15,
width: 170,
windowWidth: 1200
});
}
</script>
<?php
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='media/'.time().'.pdf';
$mpdf->output($file,'I');
}  ?>