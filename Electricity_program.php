<html>
    <head>
        <title> program to calculate Electricity bill </title>
    </head>
    <body>
        <?php 
        $amount='';
        $kwh_usage='';

        if(isset($_POST['submit']))
        {
            $units=$_POST['kwh'];
            if(!empty($units))
            {
                $kwh_usage=calculate_electricity_bill(units);
                $amount='<h1> total amount of '.$units.'units</h1>'.$kwh_uasge;
            }
        }
        function calculate_electricty_bill($units)
        {
            $first_unit_cost=8;
            $second_unit_cost=12;
            $third_unit_cost=16;
            $fourth_unit_cost=20;
            if($units<=100)
            {
                $bill=$units*$first_unit_cost;
            }
            else if($units>100 && $units<=200)
            {
                $temp=100*$first_unit_cost;
                $remaining_units=$units-100;
                $bill=$temp+($remaining_units * $second_unit_cost);
            }
            else if($units>200 && $units<=300)
            {
                $temp=(100*$first_unit_cost)+(100*$second_unit_cost);
                $remaining_units=$units-200;
                $bill=$temp+($remaining_units * $third_unit_cost);
            }
            else 
            {
                $temp=(100 * $first_unit_cost)+(100 * $second_unit_cost)+(100 * $third_unit_cost);
                $remaining_units=$units-300;
                $bill=$temp+($remaining_units * $fourth_unit_cost);
            }
            return number_format((float)$bill,2,'.','.');
        }
        ?>
        <div>
            <h1>
                calculate electricity bill in PHP </h1>
                <div>
                    <form method="post" action="">
                        <input type="number" name="kwh" placeholder="please enter number of units">
                        input type = "submit" name = "submit" value="submit" value="submit" > 
                </div>
    </div>
    </form>       
    <div>
        <?php echo $amount: 
        ?>
        </div>
    </body>
    </html>