<form>
<input name='id' type="hidden" value="<?= $data['id'] ?>">

    <table>
        <tr>
            <td>
                First name
            </td>
            <td>
                <input name='firstName' placeholder="text" value="<?= $data['firstName'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                Last Name
            </td>
            <td>
                <input name='lastName' placeholder="text" value="<?= $data['lastName'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                Image
            </td>
            <td>
                <input name='image' placeholder="text" value="<?= $data['image'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                Age
            </td>
            <td>
                <input name='age' placeholder="int" value="<?= $data['age'] ?>">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit">
                    Save
                </button>
            </td>
        </tr>
    </table>
</form>