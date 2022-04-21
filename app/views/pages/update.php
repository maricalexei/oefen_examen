<?= $data['title'];?>

<form action="<?=URLROOT;?>/loans/update" method="post">
    <table>
        <tbody>
        <tr>
            <td>
                <input type="text" name="name" id="name" value="<?= $data['row']->name;?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="description" id="description" value="<?= $data['row']->description;?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="number" name="typenr" id="typenr" value="<?= $data['row']->typenr;?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="date" name="rentaldate" id="rentaldate" value="<?= $data['row']->rentaldate;?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="name" id="name" value="<?= $data['row']->name;?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="prijs" id="prijs" value="<?= $data['row']->prijs;?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="number" name="aantal" id="aantal" value="<?= $data['row']->aantal;?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="id" id="id" value="<?= $data['row']->id;?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="submit" ">
            </td>
        </tr>
        </tbody>
    </table>
</form>

