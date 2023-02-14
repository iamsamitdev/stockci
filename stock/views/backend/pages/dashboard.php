<h1>Product List</h1>
<table class="table table-bordered table-striped">
        <thead> 
            <tr class="bg-primary text-white">
                <th>Category</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($products as $row){
                    echo "<tr>";
                    echo "<td>".$row->CategoryID."</td>";
                    echo "<td>".$row->ProductName."</td>";
                    echo "<td>".$row->UnitPrice."</td>";
                    echo "<td>".$row->UnitInStock."</td>";
                    echo "<td>".date("d/m/Y H:i:s",strtotime($row->CreatedDate)+543*365*24*60*60)."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
</table>