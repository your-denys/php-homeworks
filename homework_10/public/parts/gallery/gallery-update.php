<form>
<input name='id' type="hidden" value="<?= $data['id'] ?>">

    <table>
        <tr>
            <td>
                title
            </td>
            <td>
                <input name='title' placeholder="text" value="<?= $data['title'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                image
            </td>
            <td>
                <input name='image' placeholder="text" value="<?= $data['image'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                category Name
            </td>
            <td>
                <input name='category_name' placeholder="text" value="<?= $data['category_name'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                category Id
            </td>
            <td>
                <input name='category_id' placeholder="int" value="<?= $data['category_id'] ?>">
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