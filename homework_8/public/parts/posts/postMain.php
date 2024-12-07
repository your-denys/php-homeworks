<?php if (strpos($_SERVER['REQUEST_URI'], 'admin') !== false): ?>
    <a href="post/create">Create</a>
<?php endif; ?>
<table>
    <tr>
        <th>
            id
        </th>
        <th>
            name
        </th>
        <th>
            category name
        </th>
        <th>
            category Id
        </th>
        <?php if (strpos($_SERVER['REQUEST_URI'], 'admin') !== false): ?>
            <th>
                Update
            </th>
            <th>
                Delete
            </th>
        <?php endif; ?>
    </tr>
    <?php foreach ($data as $post): ?>
        <tr>
            <td>
                <?= $post['id'] ?>
            </td>
            <td>
                <?= $post['name'] ?>
            </td>
            <td>
                <?= $post['category'] ?>
            </td>
            <td>
                <?= $post['postCategoryId'] ?>
            </td>
            <?php if (strpos($_SERVER['REQUEST_URI'], 'admin') !== false): ?>
                <td>
                    <!-- Передача данных методом GET -->
                    <a href="post/update?id=<?= $post['id'] ?>">Update</a>
                </td>
                <td>
                    <a href="post/delete?id=<?= $post['id'] ?>">Delete</a>
                </td>
            <?php endif; ?>
        </tr>
    <?php endforeach; ?>
</table>