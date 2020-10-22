<!DOCTYPE>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><b>The Ultimate Resturant:Amber Pradhan</b></title>
    </head>
    <body>
        <form action="Order_me.php" method="post">
            <p style="background-color: gray;"><strong>Carry Out : Please wear your mask and keep 6-feet distance in the queue</strong></p>
            <p style="background-color: cyan; color:red;"><b>Place your order for the restaurant listed</b></p>
            <table border="0">
                <tr bgcolor="coral">
                    <td width="150">Item</td>
                    <td width="15">Quantity</td>
                    <td width="50">Price</td>
                </tr>
                <tr>
                    <td>Bones</td>
                    <td align="center">
                        <input type="text" name="order1" size="3" maxlength="3">
                    </td>
                    <td>$2,100</td>
                </tr>
                <tr>
                    <td>STK</td>
                    <td align="center">
                        <input type="text" name="order2" size="3" maxlength="3">
                    </td>
                    <td>$199</td>
                </tr>
                <tr>
                    <td>Chops Lobster Bar</td>
                    <td align="center">
                        <input type="text" name="order3" size="3" maxlength="3">
                    </td>
                    <td>$899</td>
                </tr>
                <tr>
                    <td>How did you find Henry's Fav menu?</td>
                    <td>
                        <select name="choose">
                            <option value = "Google">Google</option>
                            <option value = "Web ad">TV ad</option>
                            <option value = "TV ad">Web ad</option>
                            <option value = "Word of mouth">Word of mouth</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="Submit Order" name="submitOrder" style="background-color:cadetblue;">
                    </td>
                </tr>
            </table>
            <p>Sorry, but we have to add 10% tax in your order</p>
            <br /> Click here to reset:<input type="reset" style="background-color: cadetblue;">
        </form>
    </body>
</html>