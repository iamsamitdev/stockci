<?php
    $current = $this->uri->segment(2);

    $header_dashboard = ($current == "dashboard" || $current == "dashboard2" || $current == "dashboard3") ? 'class="active"' : '';

    $header_charts = ($current == "barchart" || $current == "linechart" || $current == "piechart") ? 'class="active"' : '';

    $header_ui_features = ($current == "accordion" || $current == "alert" || $current == "badge" || $current == "button" || $current == "button_group" || $current == "cards" || $current == "dropdown" || $current == "list_group" || $current == "media_object" || $current == "modal" || $current == "pagination" || $current == "popovers" || $current == "progressbar" || $current == "tab" || $current == "typography" || $current == "form" || $current == "grid") ? 'class="active"' : '';

    $header_icons = ($current == "fontawesome" || $current == "themify") ? 'class="active"' : '';

    $header_tables = ($current == "table_basic" || $current == "table_layout" || $current == "datatable") ? 'class="active"' : '';

    $header_pages = ($current == "pricing") ? 'class="active"' : '';

    $dashboard = ($current == "dashboard") ? 'class="active"' : '';
    $dashboard2 = ($current == "dashboard2") ? 'class="active"' : '';
    $dashboard3 = ($current == "dashboard3") ? 'class="active"' : '';
    $dashboard3_horizontalmenu = ($current == "dashboard3_horizontalmenu") ? 'class="active"' : '';

    $barchart = ($current == "barchart") ? 'class="active"' : '';
    $linechart = ($current == "linechart") ? 'class="active"' : '';
    $piechart = ($current == "piechart") ? 'class="active"' : '';

    $accordion = ($current == "accordion") ? 'class="active"' : '';
    $alert = ($current == "alert") ? 'class="active"' : '';
    $badge = ($current == "badge") ? 'class="active"' : '';
    $button = ($current == "button") ? 'class="active"' : '';
    $button_group = ($current == "button_group") ? 'class="active"' : '';
    $cards = ($current == "cards") ? 'class="active"' : '';
    $dropdown = ($current == "dropdown") ? 'class="active"' : '';
    $list_group = ($current == "list_group") ? 'class="active"' : '';
    $media_object = ($current == "media_object") ? 'class="active"' : '';
    $modal = ($current == "modal") ? 'class="active"' : '';
    $pagination = ($current == "pagination") ? 'class="active"' : '';
    $popovers = ($current == "popovers") ? 'class="active"' : '';
    $progressbar = ($current == "progressbar") ? 'class="active"' : '';
    $tab = ($current == "tab") ? 'class="active"' : '';
    $typography = ($current == "typography") ? 'class="active"' : '';
    $form = ($current == "form") ? 'class="active"' : '';
    $grid = ($current == "grid") ? 'class="active"' : '';

    $fontawesome = ($current == "fontawesome") ? 'class="active"' : '';
    $themify = ($current == "themify") ? 'class="active"' : '';

    $table_basic = ($current == "table_basic") ? 'class="active"' : '';
    $table_layout = ($current == "table_layout") ? 'class="active"' : '';
    $datatable = ($current == "datatable") ? 'class="active"' : '';

    $pricing = ($current == "pricing") ? 'class="active"' : '';
    $maps = ($current == "maps") ? 'class="active"' : '';
    $invoice = ($current == "invoice") ? 'class="active"' : '';
?>

<div class="sidebar-menu">
    <div class="main-menu">
        <div class="menu-inner">
			<div class="sidebar-header">
				<div class="logo">
					<a href="<?= site_url("home/dashboard") ?>"><img src="<?= base_url("assets/backend/images") ?>/icon/logo.png" class="img-logo" alt="logo"></a>
				</div>
				<div class="logo">
					<img src="<?= base_url("assets/backend/images") ?>/profile/john_doe.jpg" class="img-profile img-rounded" alt="logo">
				</div>
				<div class="profile">
					<div class="profile-name text-center">John Doe</div>
					<div class="profile-title text-center">Administrator</div>
					<div class="profile-line"></div>
				</div>
			</div>
            <nav>
                <ul class="metismenu" id="menu">
                    <li <?= $header_dashboard ?>>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                        <ul class="collapse">
                            <li <?= $dashboard ?>><a href="<?= site_url("home/dashboard") ?>">Dashboard 1</a></li>
                            <li <?= $dashboard2 ?>><a href="<?= site_url("home/dashboard2") ?>">Dashboard 2</a></li>
                            <li <?= $dashboard3 ?>><a href="<?= site_url("home/dashboard3") ?>">Dashboard 3</a></li>
                        </ul>
                    </li>
                    <li <?= $dashboard3_horizontalmenu ?>><a href="<?= site_url("home/dashboard3_horizontalmenu") ?>"><i class="ti-layout-sidebar-left"></i> <span>Menu Horizontal</span></a></li>
                    <li <?= $header_charts ?>>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-pie-chart"></i><span>Charts</span></a>
                        <ul class="collapse">
                            <li <?= $barchart ?>><a href="<?= site_url("home/barchart") ?>">Bar Chart</a></li>
                            <li <?= $linechart ?>><a href="<?= site_url("home/linechart") ?>">Line Chart</a></li>
                            <li <?= $piechart ?>><a href="<?= site_url("home/piechart") ?>">Pie chart</a></li>
                        </ul>
                    </li>
                    <li <?= $header_ui_features ?>>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i><span>UI Features</span></a>
                        <ul class="collapse">
                            <li <?= $accordion ?>><a href="<?= site_url("home/accordion") ?>">Accordion</a></li>
                            <li <?= $alert ?>><a href="<?= site_url("home/alert") ?>">Alert</a></li>
                            <li <?= $badge ?>><a href="<?= site_url("home/badge") ?>">Badge</a></li>
                            <li <?= $button ?>><a href="<?= site_url("home/button") ?>">Button</a></li>
                            <li <?= $button_group ?>><a href="<?= site_url("home/button_group") ?>">Button Group</a></li>
                            <li <?= $cards ?>><a href="<?= site_url("home/cards") ?>">Cards</a></li>
                            <li <?= $dropdown ?>><a href="<?= site_url("home/dropdown") ?>x">Dropdown</a></li>
                            <li <?= $list_group ?>><a href="<?= site_url("home/list_group") ?>">List Group</a></li>
                            <li <?= $media_object ?>><a href="<?= site_url("home/media_object") ?>">Media Object</a></li>
                            <li <?= $modal ?>><a href="<?= site_url("home/modal") ?>">Modal</a></li>
                            <li <?= $pagination ?>><a href="<?= site_url("home/pagination") ?>">Pagination</a></li>
                            <li <?= $popovers ?>><a href="<?= site_url("home/popovers") ?>">Popover</a></li>
                            <li <?= $progressbar ?>><a href="<?= site_url("home/progressbar") ?>">Progressbar</a></li>
                            <li <?= $tab ?>><a href="<?= site_url("home/tab") ?>">Tab</a></li>
                            <li <?= $typography ?>><a href="<?= site_url("home/typography") ?>">Typography</a></li>
                            <li <?= $form ?>><a href="<?= site_url("home/form") ?>">Form</a></li>
                            <li <?= $grid ?>><a href="<?= site_url("home/grid") ?>">grid system</a></li>
                        </ul>
                    </li>
                    <li <?= $header_icons ?>>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-slice"></i><span>icons</span></a>
                        <ul class="collapse">
                            <li <?= $fontawesome ?>><a href="<?= site_url("home/fontawesome") ?>">fontawesome icons</a></li>
                            <li <?= $themify ?>><a href="<?= site_url("home/themify") ?>">themify icons</a></li>
                        </ul>
                    </li>
                    <li <?= $header_tables ?>>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-table"></i>
                            <span>Tables</span></a>
                        <ul class="collapse">
                            <li <?= $table_basic ?>><a href="<?= site_url("home/table_basic") ?>">basic table</a></li>
                            <li <?= $table_layout ?>><a href="<?= site_url("home/table_layout") ?>">table layout</a></li>
                            <li <?= $datatable ?>><a href="<?= site_url("home/datatable") ?>">datatable</a></li>
                        </ul>
                    </li>
                    <li <?= $maps ?>><a href="<?= site_url("home/maps") ?>"><i class="ti-map-alt"></i> <span>maps</span></a></li>
                    <li <?= $invoice ?>><a href="<?= site_url("home/invoice") ?>"><i class="ti-receipt"></i> <span>Invoice Summary</span></a></li>
                    <li <?= $header_pages ?>>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layers-alt"></i> <span>Pages</span></a>
                        <ul class="collapse">
                            <li><a href="<?= site_url("home/login") ?>">Login</a></li>
                            <li><a href="<?= site_url("home/login2") ?>">Login 2</a></li>
                            <li><a href="<?= site_url("home/login3") ?>">Login 3</a></li>
                            <li><a href="<?= site_url("home/register") ?>">Register</a></li>
                            <li><a href="<?= site_url("home/register2") ?>">Register 2</a></li>
                            <li><a href="<?= site_url("home/register3") ?>">Register 3</a></li>
                            <li><a href="<?= site_url("home/register4") ?>">Register 4</a></li>
                            <li><a href="<?= site_url("home/screenlock") ?>">Lock Screen</a></li>
                            <li><a href="<?= site_url("home/screenlock2") ?>">Lock Screen 2</a></li>
                            <li><a href="<?= site_url("home/reset_pass") ?>">reset password</a></li>
                            <li <?= $pricing ?>><a href="<?= site_url("home/pricing") ?>">Pricing</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-exclamation-triangle"></i>
                            <span>Error</span></a>
                        <ul class="collapse">
                            <li><a href="<?= site_url("home/error404") ?>">Error 404</a></li>
                            <li><a href="<?= site_url("home/error403") ?>">Error 403</a></li>
                            <li><a href="<?= site_url("home/error500") ?>">Error 500</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-align-left"></i> <span>Multi
                                level menu</span></a>
                        <ul class="collapse">
                            <li><a href="#">Item level (1)</a></li>
                            <li><a href="#">Item level (1)</a></li>
                            <li><a href="#" aria-expanded="true">Item level (1)</a>
                                <ul class="collapse">
                                    <li><a href="#">Item level (2)</a></li>
                                    <li><a href="#">Item level (2)</a></li>
                                    <li><a href="#">Item level (2)</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Item level (1)</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>