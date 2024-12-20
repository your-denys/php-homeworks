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
                body
            </td>
            <td>
                <input name='body' placeholder="text" value="<?= $data['body'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                categoryId
            </td>
            <td>
                <input name='categoryId' placeholder="int" value="<?= $data['categoryId'] ?>">
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