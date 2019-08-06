<?php session_start();?>
<!DOCTYPE html>
<!--[if IE 8]><html lang="en" id="ie8" class="lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]><html lang="en" id="ie9" class="gt-ie8 lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en"> <!--<![endif]-->
<head>
	<?php require("../common/config.php"); ?>    
    <?php require("../common/DB_Connection.php"); ?>
    <?php require("../common/functions.php"); ?>
    <?php require("../common/header.php"); ?>
    <?php require("../common/dataLog.php"); ?>
    <?php UA_isAdmin();?>
    <?php 
    	$pageType = "14";
    	UA_isPermission( $pageType );
    ?>
    <link rel="stylesheet" type="text/css" href="http://www.datatables.net/media/blog/bootstrap_2/DT_bootstrap.css">
    <script src="/js/jquery.dataTables.js"></script>
    <script src="/js/DT_bootstrap.js"></script>
    
    <script src="/js/admin/eyeList.js"></script>
</head>
<body>
   <div id="container" >
   	<?php require_once("top.php"); ?>
	<?php require_once("leftMenu.php"); ?>
		<div id="content" class="floatleft">
			<h3 class="pageHeader"><?php echo _lang("Eye Management");?></h3>
			<div id="divContent">
				<div id="divActionButton" style="float:right;margin-bottom:20px;">
				    <a href = "eyeDetail.php" class="btn btn-primary"><?php echo _lang("Add");?></a>
					<a class="btn btn-danger" onclick="onDeleteEye()"><?php echo _lang("Delete");?></a>
				</div>
				<div class="clearboth"></div>
				<table class="table table-striped table-bordered table-hover" id="example">
					<thead>
						<tr>
							<th></th>
							<th><?php echo _lang("No");?></th>
							<th><?php echo _lang("Title");?></th>
							<th><?php echo _lang("Eye Category");?></th>		
							<th><?php echo _lang("Photo");?></th>				
							<th><?php echo _lang("Created Time");?></th>
						</tr>				
					</thead>
					<tbody>
						<?php
						$sql = "select t1.ua_title, t2.* from ua_eye_category t1, ua_location t2 
								 where t1.ua_eye_category = t2.ua_eye_category
								   and t2.ua_location_type = 5";
						$result = $db->queryArray( $sql );
						for( $i = 0; $i < count($result); $i ++ ){
							echo "<tr>";
							echo "   <td><input type='checkbox' value='".$result[$i]['ua_location']."'/></td>";
							echo "   <td><a href='eyeDetail.php?id=".$result[$i]['ua_location']."'>".($i + 1)."</a></td>";
							echo "   <td><a href='eyeDetail.php?id=".$result[$i]['ua_location']."'>".$result[$i]['ua_location_title']."</a></td>";
							echo "   <td>".$result[$i]['ua_title']."</td>";	
							echo "   <td><img src='".$result[$i]['ua_location_photo']."' style='width:100px;height:60px;'/></td>";	
							echo "   <td>".$result[$i]['ua_created_time']."</td>";
							echo "</tr>";
						}				 
						?>
					</tbody>
				 </table>		
			 </div>
		 </div>
		 <div class="clearboth"></div>
		 <?php require_once("footer.php"); ?>
	 </div>
</body>
</html>