<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Classic Resume</title>

<style type="text/css">

*{
    padding:0px;
    margin:0px; 
}

body{
    font-family:Arial, Helvetica, sans-serif;   
}

p,h1,h2,h3,h4,h5,h6,ul,li{padding:0px;margin:0px;}

ul li{
    list-style-type:none    
}

p{line-height:20px;}

.clearfix{clear:both;}

a {text-decoration:none;}

a img{border:0px;}


.wrap{
    width:100%;
    margin:0 auto;
    padding:50px;   
}

.header{
    padding:16px 0 0 0; 
    text-align:center;
}

.header h1, .header p, .header p a{
    font-family:Arial, Helvetica, sans-serif;
    margin-bottom:5px;
}

.header p a{
    color:#06F;
    font-size:12px; 
}


.flt{display:inline-block;}
.fltr{display:inline-block;}
.left-part{width:22%;}
hr{clear:both;display:block;}
.left-part h2{font-size:16px;color:#000;font-family:Arial, Helvetica, sans-serif;margin-top:0px;margin-bottom:0px;}
.left-part p{font-size:13px;}   
.resume-box{margin:0px;padding-bottom:20px;}
.right-part{width:78%;padding-top:18px;}
.right-part p{font-size:14px;padding-left:4px;}
.mrgn-righti{text-align:right;width:20%;}
.right-part ul li {list-style-type:disc;font-size:14px;line-height:25px;font-family:Arial, Helvetica, sans-serif;}


</style>

</head>
<body>
<div class="wrap">

    <div class="header">
            <h1><?php if ($_POST["first_name"]) {echo $_POST["first_name"];} ?> <?php if ($_POST["last_name"]) { echo $_POST["last_name"]; } ?></h1>
            <p><?php if ($_POST["street"]) {echo $_POST["street"].' <span>&bull;</span>';} ?> <?php if ($_POST["city"]) { echo $_POST["city"]; } ?>, <?php if ($_POST["state"]) { echo $_POST["state"]; } ?> <?php if ($_POST["zip"]) { echo $_POST["zip"]; } ?> <span>&bull;</span> <?php if ($_POST["phone"]) {echo $_POST["phone"];} ?></p>
            <p><?php if ($_POST["email"]) {echo $_POST["email"];} ?></p>
    </div>
<hr /> 
 <div class="bottom-part">   
        
    <div class="resume-box">                
        <div class="left-part flt">
            <h2>Education:</h2>
        </div>
        
    <div class="right-part flt">

      
            <p><strong><?php if ($_POST["school"]) {echo $_POST["school"];} ?></strong></p>
            <p><em><?php if ($_POST["degree"]) {echo $_POST["degree"];} ?><?php if ($_POST["area_of_study"]) {echo ', '.$_POST["area_of_study"];} ?><?php if ($_POST["school_year"]) {echo ', '.$_POST["school_year"];} ?></em></p>
            <br />
    
            <div class="clearfix"></div>
    </div>
    <?php if ($_POST["school"]) {echo '<p class="fltr mrgn-righti">'.$_POST["school-city"].', '.$_POST["school-state"].'</p>';} ?>
   <div class="clearfix"></div> 
    <!--============Resume Box Ends==========-->
 </div>    
<hr />  
 

    <div class="resume-box">                
        <div class="left-part flt">
            <h2>Experience:</h2>
            <p><?php if ($_POST["end_date"]) {echo $_POST["start_date"].' - '.$_POST["end_date"]; } else {$_POST["start_date"];} ?></p>
        </div>
        
    <div class="right-part flt">

            <p><strong><?php if ($_POST["employer"]) {echo $_POST["employer"];} ?></strong></p>
            <p><em><?php if ($_POST["title"]) {echo $_POST["title"];} ?></em></p>
            
            
            <div class="clearfix"></div>
    </div>
    <?php if ($_POST["employer_location"]) {echo '<p class="fltr mrgn-righti">'.$_POST["employer_location"].'</p>';} ?>
   <div class="clearfix"></div> 
    <!--============Resume Box Ends==========-->
 </div>    


        <?php if ($_POST["employer2"]) { ?>
        <div class="resume-box">                
        <div class="left-part flt">
            <h2>Experience:</h2>
            <p><?php if ($_POST["end_date2"]) {echo $_POST["start_date2"].' - '.$_POST["end_date2"]; } else {$_POST["start_date2"];} ?></p>
        </div>
        
    <div class="right-part flt">

            <p><strong><?php if ($_POST["employer2"]) {echo $_POST["employer2"];} ?></strong></p>
            <p><em><?php if ($_POST["title2"]) {echo $_POST["title2"];} ?></em></p>
            
            
            <div class="clearfix"></div>
    </div>
    <?php if ($_POST["employer_location2"]) {echo '<p class="fltr mrgn-righti">'.$_POST["employer_location2"].'</p>';} ?>
   <div class="clearfix"></div> 
    <!--============Resume Box Ends==========-->
 </div>   
 <?php } ?>

    
    <?php if ($_POST["employer3"]) { ?>
    <div class="resume-box">                
        <div class="left-part flt">
            <h2>Experience:</h2>
            <p><?php if ($_POST["end_date3"]) {echo $_POST["start_date3"].' - '.$_POST["end_date3"]; } else {$_POST["start_date3"];} ?></p>
        </div>
        
    <div class="right-part flt">

            <p><strong><?php if ($_POST["employer3"]) {echo $_POST["employer3"];} ?></strong></p>
            <p><em><?php if ($_POST["title3"]) {echo $_POST["title3"];} ?></em></p>
            
            
            <div class="clearfix"></div>
    </div>
    <?php if ($_POST["employer_location3"]) {echo '<p class="fltr mrgn-righti">'.$_POST["employer_location3"].'</p>';} ?>
   <div class="clearfix"></div> 
    <!--============Resume Box Ends==========-->
 </div>   
 <?php } ?>

<?php if ($_POST["awards"]) { ?>
<hr />

    <div class="resume-box">                
        <div class="left-part flt">
            <h2>Awards:</h2>
           
        </div>
        
    <div class="right-part flt">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            
            <div class="clearfix"></div>
    </div>
   <div class="clearfix"></div> 
    <!--============Resume Box Ends==========-->
    </div> 
<?php } ?>  
<?php if ($_POST["interests"]) { ?>
 <hr />

    <div class="resume-box">                
        <div class="left-part flt">
            <h2>Interest:</h2>
        </div>
        
    <div class="right-part flt">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            
            <div class="clearfix"></div>
    </div>
   <div class="clearfix"></div> 
    <!--============Resume Box Ends==========-->
    </div>    
<?php } ?> 

     
<!--=========Bottom Ends===========-->     
 </div>  

<!--=========Wrap Ends===========-->
</div>
</body>
</html>