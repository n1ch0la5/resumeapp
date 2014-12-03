<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

     <title>Resume</title>

     <style type="text/css">
     </style>
</head>

<body>

    <h1><?php echo $_POST["first_name"]; ?> <?php echo $_POST["last_name"]; ?></h1>
    <p><?php echo $_POST["phone"]; ?> <?php echo $_POST["email"]; ?></p>
    <p><?php echo $_POST["statement"]; ?></p>

    <h2>Experience</h2>
    <p><?php echo $_POST["title"]; ?>, <?php echo $_POST["employer"]; ?></p>
    <p><?php echo $_POST["employer_location"]; ?></p>

    <h2>Education</h2>
    <p><?php echo $_POST["school"]; ?>, <?php echo $_POST["school_year"]; ?></p>
    <p><?php echo $_POST["degree"]; ?>, <?php echo $_POST["area_of_study"]; ?></p>

</body>

</html>