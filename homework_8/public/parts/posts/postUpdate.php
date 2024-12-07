<form>
<input name='id' type="hidden" value="<?= $data['id'] ?>">

    <table>
        <tr>
            <td>
                name
            </td>
            <td>
                <input name='name' placeholder="text" value="<?= $data['name'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                categoryName
            </td>
            <td>
                <input name='categoryName' placeholder="text" value="<?= $data['category'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                categoryId
            </td>
            <td>
                <input name='categoryId' placeholder="int" value="<?= $data['postCategoryId'] ?>">
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