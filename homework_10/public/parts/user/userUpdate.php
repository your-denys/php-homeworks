<form>
<input name='id' type="hidden" value="<?= $data['id'] ?>">

    <table>
        <tr>
            <td>
                First name
            </td>
            <td>
                <input name='first_name' placeholder="text" value="<?= $data['first_name'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                Last Name
            </td>
            <td>
                <input name='last_name' placeholder="text" value="<?= $data['last_name'] ?>">
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