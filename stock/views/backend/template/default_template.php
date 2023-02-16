<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> | Smart Stock</title>
    <?php 
		$this->load->view('backend/includes/style');
	?>
</head>
<body>
    <!-- <div id="preloader">
        <div class="loader"></div>
    </div> -->

    <div class="page-container">
        <?php 
            $this->load->view('backend/includes/sidebar');
        ?>
        <div class="main-content">
            <?php 
		        $this->load->view('backend/includes/navbar');
                $this->load->view($main_content);
	        ?>
        </div>
        <?php 
		    $this->load->view('backend/includes/footer');
	    ?>
    </div>
    <?php 
		$this->load->view('backend/includes/script');
	?>
</body>
</html>