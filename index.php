<!DOCTYPE html>
<html>
    <head>
        <title>Giải phương trình bậc nhất</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php 
            $result = '';
            if (isset($_POST['calculate']))
{
    
    $a = isset($_POST['a']) ? (float)trim($_POST['a']) : '';
    $b = isset($_POST['b']) ? (float)trim($_POST['b']) : '';

    
    if ($a == 0){
        if($b==0){
        $result = 'phương trình vô số nghiệm';
        }
        else {
        $result = 'phương trình vô nghiệm';
        }
    }
    else {
        $result = -($b) / $a;
    }
}
        ?>
        <h1>Giải phương trình bậc nhất</h1>
        <form method="post" action="">
            <label for="a">Nhập a:</label><br>
            <input type="text" style="width: 20px" name="a" value=""/><br>
            <label for="b">Nhập b:</label><br>
            <input type="text" style="width: 20px" name="b" value=""/> 
            <br><br>
            <input type="submit"  name="calculate" value="Tính"/>
        </form>
        
        <?php echo $result; ?>
    </body>
</html>