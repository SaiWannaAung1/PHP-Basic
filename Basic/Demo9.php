<?php

if (isset($_POST["btn_calculate"]))
{
    for ($i=0; $i<=4; $i++)
    {
        $number=$i+1;

        if (empty( $_POST["qty$number"] ) )
{
    $price=$_POST["price$number"];
    $qty= 0;
    $amount[$i] = $price[$i] * $qty[$i];
    $total = array_sum($amount);

}else{
            $price=$_POST["price$number"];
            $qty= $_POST["qty$number"];
            $amount[$i] = $price[$i] * $qty[$i];
            $total = array_sum($amount);
        }

    }
echo "$total";
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
<form action="" method="post" class="form-group p-4">
<table class="table" >
    <thead class="thead-dark">
    <tr>
        <th class="">ID</th>
        <th >Product Name</th>
        <th >Price</th>
        <th >Quantity</th>
        <th >Amount</th>
    </tr>
    </thead>
    <tr>
    <td >1</td>
    <td >Water</td>
    <td >$1<input type="text" class="invisible" name="price1" value="1">  </td>
    <td>
      <input type="number" min="0" class="form-control w-25 p-3"  name="qty1" value="">
    </td>
    <td  >      <input type="text" class="form-control w-25 p-3" placeholder="Amount" name="amount1" value="<?php echo @$amount[0] ?>"></td>

    </tr><tr>


    </tr><tr>
    <td  >2</td>
    <td  >Milk</td>
    <td  >$2<input type="text" class="invisible" name="price2" value="2"></td>
        <td>
            <input type="number" min="0" class="form-control w-25 p-3" name="qty2">
        </td>
        <td  >      <input type="text" class="form-control w-25 p-3" placeholder="Amount" name="amount2" value="<?php echo @$amount[1] ?>"></td>

    </tr><tr>
    <td  >3</td>
    <td  >Ma Ma</td>
    <td  >$1<input type="text" class="invisible" name="price3" value="1"></td>
        <td>
            <input type="number" min="0" class="form-control w-25 p-3"  name="qty3">
        </td>
        <td  >      <input type="text" class="form-control w-25 p-3" placeholder="Amount" name="amount3" value="<?php echo @$amount[2] ?>"></td>

    </tr><tr>
    <td  >4</td>
    <td  >Ve Ve</td>
    <td  >$1<input type="text" class="invisible" name="price4" value="1"></td>
        <td>
            <input type="number" min="0" class="form-control w-25 p-3"  name="qty4">
        </td>
        <td  >      <input type="text" class="form-control w-25 p-" placeholder="Amount" name="amount4" value="<?php echo @$amount[3] ?>"></td>

    </tr>
    <td  >5</td>
    <td  >Pencil</td>
    <td  >$1<input type="text" class="invisible" name="price5" value="1"></td>
    <td>
        <input type="number" min="0" class="form-control w-25 p-3"  name="qty5">
    </td>
    <td  >      <input type="text" class="form-control w-25 p-3" placeholder="Amount" name="amount5" value="<?php echo @$amount[4] ?>"></td>

</table>
    <button class="btn btn-primary  " type="submit" name="btn_calculate">Calculate</button>
    <button class="btn btn-warning text-light" type="reset" >Clear</button>
</form>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>