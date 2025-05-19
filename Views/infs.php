<?php
    include "header.php";
?>


<?php
define('TEXT','0');
defined('TEXT') or die;
$rows = [
    [   
        '#'=>1,
        'first' => 'Amirhosein',
        'last' => 'Tasharofi',
        'handle' => '@Amir'
    ],
    [ 
        '#'=>2,
        'first' => 'Abbas',  
        'last' => 'Esmaeeli',
        'handle' => '@Abbas'
    ],
    
];

?>

<style>
    section {
  width: 70%;
  margin: 40px auto;
  margin-top: 80px;
  background-color: #fff;
  padding: 25px;
  border-radius: 10px;
  box-shadow: 0 0 12px rgba(0, 0, 0, 0.1);
}

section h1 {
  text-align: center;
  font-size: 28px;
  color: #2c3e50;
  margin-bottom: 25px;
}

table.table {
  width: 100%;
  border-collapse: collapse;
}

table.table thead {
  background-color: #2c3e50;
  color: #fff;
}

table.table th,
table.table td {
  padding: 12px 16px;
  border-bottom: 1px solid #ddd;
  text-align: left;
}

table.table tbody tr:hover {
  background-color: #f9f9f9;
}

</style>


<section style="width:70%;margin-right:auto;margin-left:auto;">
<h1 >Web Programming</h1>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($rows as $value)
            { 
            ?>
            <tr>
                <?php foreach($value as $k=>$v): ?>
                    <td>
                        <?= $v ?>
                    </td>
                <?php endforeach ?>
            </tr>
                
            <?php 
            } 
            ?>
        </tbody>
    </table>
</section>

<?php
    include "footer.php";
?>
    