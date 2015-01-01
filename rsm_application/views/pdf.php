<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

     <title>Resume</title>

     <style type="text/css">
     </style>
</head>

<body>

    <h1><?php if ($_POST["first_name"]) {echo $_POST["first_name"];} ?> <?php if ($_POST["last_name"]) { echo $_POST["last_name"]; } ?></h1>
    <p><?php if ($_POST["phone"]) { echo $_POST["phone"]; } ?> <?php echo $_POST["email"]; ?></p>
    <p><?php if ($_POST["statement"]) { echo $_POST["statement"]; } ?></p>

    <h2>Experience</h2>
    <p><?php if ($_POST["title"]) { echo $_POST["title"]; } ?>, <?php if ($_POST["employer"]) { echo $_POST["employer"]; } ?></p>
    <p><?php if ($_POST["employer_location"]) { echo $_POST["employer_location"]; } ?></p>

    <h2>Education</h2>
    <p><?php if ($_POST["school"]) { echo $_POST["school"]; } ?>, <?php if ($_POST["school_year"]) { echo $_POST["school_year"]; } ?></p>
    <p><?php if ($_POST["degree"]) { echo $_POST["degree"]; } ?>, <?php if ($_POST["area_of_study"]) { echo $_POST["area_of_study"]; } ?></p>

</body>

</html>