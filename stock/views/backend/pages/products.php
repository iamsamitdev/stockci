<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-12">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Products</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?=site_url("backend/dashboard")?>">Dashboard</a></li>
                    <li><span>Products</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="single-table">
            <div class="table-responsive">
                <table class="table text-left">
                    <thead class="text-uppercase bg-primary">
                        <tr class="text-white">
                            <th>Image</th>
                            <th scope="col">CatID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Unit</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                        foreach($products as $row){
                            echo "<tr>";
                            echo "<td><img src='".$row->ProductPicture."' width='50px'></td>";
                            echo "<td>".$row->CategoryID."</td>";
                            echo "<td>".$row->ProductName."</td>";
                            echo "<td>".$row->UnitPrice."</td>";
                            echo "<td>".$row->UnitInStock."</td>";
                            echo "<td>".date("d/m/Y H:i:s",strtotime($row->CreatedDate)+543*365*24*60*60)."</td>";
                            echo "<td><i class='ti-trash'></i></td>";
                            echo "</tr>";
                            
                        }
                    ?>     
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
