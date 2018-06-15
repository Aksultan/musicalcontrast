<label for="product_class">Products class:</label>
<select onchange="selectedOption()" id="product_class" name="product_class" required>
    <option>Choose product class</option>
    <?php
    include '../config.php';
    $query="SELECT * FROM main_class";
    $result=$mysqli->query($query);
    while($row=$result->fetch_array()){
        $query2="SELECT * FROM sub_class WHERE main_class_id=".$row['id'];
        $result2=$mysqli->query($query2);
        echo'<optgroup label="'.$row['main_class'].'">';
        while($obj=$result2->fetch_array()){
            echo'<option value="'.$obj['sub_class'].'">'.$obj['sub_class'].'</option>';
        }
        echo'</optgroup>';
    }
    ?>
</select>
<span id="brands"></span>
<script>
    function selectedOption(){
        var product_class=document.getElementById("product_class").value;
            $.ajax(
            "brands.php", {
                data:"product_class="+product_class,
                success: function (data) {
                    document.getElementById('brands').innerHTML=data;
                }
            }
        )
    }
</script>