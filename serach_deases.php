<?php
include('link/config.php');
if(isset($_POST['submit'])){
	$search = $_POST['search'];
	 $sql = "SELECT * FROM `search_deases` WHERE name = '$search'";
	  $query = $dbh->prepare($sql);
       $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        $cnt=1;
                        if($query->rowCount() > 0)
                        {
                        foreach($results as $result){
                        // {  echo $result->description; ?>
                       
<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User Result</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
        <script  src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js"></script>
        <script  src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js"></script>

<style>
	tr,th{
		text-align:justify;
		border:1px solid black;
		/*text-decoration: underline;*/
	}
	#example{
		border:1px solid, black;
	}

/*line-break: loose;*/
        
        
</style>


</head>

<body>

	

	<h1> Deases information search by you</h1>
	<table style="margin:15px;padding:10px;width:80%;border:1px solid black;">
		<tr>
<!-- 			// <th>Id</th><td><?php echo htmlentities($result->id);?></td></tr>
 -->			<th>Deases Name:</th>	<td class="strict"><?php echo htmlentities($result->name);?></td></tr>
			<th>causes:</th><td  class="strict"><?php echo htmlentities($result->causes);?></td></tr>
			<th>Description:</th><td class="strict"><?php echo htmlentities($result->description);?></td></tr>
			<th>Home care:</th><td class="strict"><?php echo htmlentities($result->home_care);?></td></tr>
		</tr>
		<!--  -->
         <?php }} ?>
          <table border="1">
                         <h3 style="background-color:lightblue;">Hospital suggestions to take your tratment</h3>
                        <tr>
                            <th>Id</th>
                            <th>Hospital name</th>
                            <th>Speciality</th>
                            <th>Hospital Address</th>
                        </tr>
                   
                            <tbody>
                                <?php $sql1 = "SELECT  * from `hospitals`";
                                $query1 = $dbh->prepare($sql1);
                                $query1->execute();
                                $results=$query1->fetchAll(PDO::FETCH_OBJ);
                                $cnt=1;
                                if($query1->rowCount() > 0)
                                {
                                foreach($results as $result)
                                {   ?>
                                <tr>
                                    <!-- <?php echo htmlentities($cnt);?> -->
                                   <td><?php echo htmlentities($result->id);?></td> 
                                   <td>&nbsp &nbsp<?php echo htmlentities($result->hospital_name);?></td>
                                    <td><?php echo htmlentities($result->info);?></td>
                              
                                    <td><?php echo htmlentities($result->hospital_address);?></td>
                                    
                                    
                                    <!-- <input type="hidden" name="var1" value="<?php echo htmlentities($mainresult);?>"/> -->
                                </tr>
                                <?php $cnt=$cnt+1;}} ?>
                                
                                
                            </tbody>
                        </table>
</body>
</html>
                      
<?php }
?>