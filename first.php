<html>
<head>
</head>

<body>
<div class="container">
    <div class="row-fluid">
        <div class="span12">
<br />
<br />
            <div class="row-fluid">
                <div class="span6">
                    <div class="span6">
                        <form method="POST" action="search.php" class="navbar-search pull-left">
                            <input type="text" name="search" class="search-query" placeholder="Search">
                        </form>
                    </div>
<br />
<br />
<br />
                    <table class="table table-bordered  table-hover table-striped" style="width:800px;"> 
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Category</th>
                                <th>Year Publication</th>
                                <th>Place Publication</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query=mysql_query("select * from book")or die(mysql_error());
                                while($row=mysql_fetch_array($query)){
                                ?>
 
                                <tr>
                                    <td><?php echo $row['title']; ?></td>
                                    <td><?php echo $row['author']; ?></td>
                                    <td><?php echo $row['category']; ?></td>
                                    <td><?php echo $row['year_publication']; ?></td>
                                    <td><?php echo $row['place_publication']; ?></td>
                                </tr>
                                <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
