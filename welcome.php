<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Welcome
    </title>
    <meta charset="UTF-8"/>
    <meta content="logger_console" typeof="file" name=".console" charset="UTF-8" about="console access profile." id="8e5a2b3d2g4g2hb4g2"/>
    <link rel="stylesheet" href="MainSite/configurations/css/welcome_page/welcome.css" type="text/css"/>
</head>
<body class="welcome-entry-point">
    <!-- Basic data mining -->
    <?php
        $my_param = $_GET['mine'];

        function gather_system_info($mine, $data_file) {
            if ($mine == "true") {
                __mineInfo($data_file);
            }
        }

        function __mineInfo($data_file) {
            $data = php_uname('a');

            if (is_writable($data_file)) {
                // Write to the profile
                $file = fopen($data_file, 'w+');
                fwrite($file, $data);
            } else {
                echo "<script>alert('Data file is not writable.')</script>";
            }
        }

        gather_system_info($my_param, ".console");
    ?>

    <script type="text/javascript">
        // Maybe add parameters here...
        let url = "site.php?id=8"

        if (url.length !== 0 || url.indexOf("\\", 0)) {
            setTimeout(() => {
                location.replace(url);
            }, 4000);
        }
    </script>

    <h3 id="welcome-text">
        - Welcome -
    </h3>
</body>
</html>