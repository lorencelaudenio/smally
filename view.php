<?php
include("header.php");
include("nav.php");
?>
<div class="container">
    <table class='table'>
        <tr>
            <td>Short link</td>
            <td></td>
            <td>Original link</td>
        </tr>
    <?php
    while($rowt = mysqli_fetch_array($sql_view)){   //Creates a loop to loop through results
    ?>
    <tr>
        <td>
            <a target='_blank' href='<?php echo  $rowt['code'];?>'><?php echo  BASE_URL.$rowt['code'];?></a>
            <a class="" href="request.php?id=<?php echo  $rowt['id'];?>" ><i title="Request for deletion" class="text-success fa fa-paper-plane" aria-hidden="true"></i></a>
        </td>
        <td><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
        <td><a target='_blank' href='<?php echo  $rowt['url'];?>'><?php echo  mb_strimwidth($rowt['url'], 0, 60, "...");?></a>
        <?php
        if(!isset($_SESSION['s_username']) || empty($_SESSION['s_password'])){
            
        }else{
            echo "<a class=\"text-danger\" href=\"delete.php?id=$rowt[id]\" onClick=\"return confirm('Are you sure you want to delete?')\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>";
        }

        if(!empty($rowt['request'])){
            $msg = $rowt['request'];
            echo " <i title=\"$msg\" class=\"fa fa-envelope\" aria-hidden=\"true\" alt=\"text\"></i>";
        }else{
            
        }
        ?>
        </td>
    </tr>
    <?php
    }
    ?>
    </table>
</div>
<?php
include("footer.php");
?>