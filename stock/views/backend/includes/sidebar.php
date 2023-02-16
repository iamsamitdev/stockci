<?php
    $fullname = "";
    $email = "";

    if ($this->session->userdata('logged_in')) {
        $user = $this->session->userdata('logged_in');
        $fullname = $user['fullname'];
        $email = $user['email'];
    }
?>

<div class="sidebar-menu">
    <div class="main-menu">
        <div class="menu-inner">
			<div class="sidebar-header">
				<div class="logo">
					<a href="<?= base_url("backend/dashboard") ?>"><img src="<?= base_url("assets/backend/images") ?>/icon/logo.png" class="img-logo" alt="logo"></a>
				</div>
				<div class="logo">
					<img src="<?= base_url("assets/backend/images") ?>/profile/john_doe.jpg" class="img-profile img-rounded" alt="logo">
				</div>
				<div class="profile">
					<div class="profile-name text-center"><?php echo $fullname;?></div>
					<div class="profile-title text-center"><?php echo $email;?></div>
					<div class="profile-line"></div>
				</div>
			</div>
            <nav>
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="<?= base_url("backend/dashboard") ?>">
                            <i class="ti-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url("backend/products") ?>">
                            <i class="ti-layout-sidebar-left"></i> <span>Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-pie-chart"></i><span>Charts</span></a>
                        <ul class="collapse">
                            <li><a href="#">Bar Chart</a></li>
                            <li><a href="#">Line Chart</a></li>
                            <li><a href="#">Pie chart</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= base_url("backend/logout") ?>">
                            <i class="ti-layout-sidebar-left"></i> <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>