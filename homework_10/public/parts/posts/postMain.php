<?php if (strpos($_SERVER['REQUEST_URI'], 'admin') !== false): ?>
    <a href="posts/create">Create</a>
<?php endif; ?>
<table>
    <tr>
        <th>
            id
        </th>
        <th>
            title
        </th>
        <th>
            body
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
                <?= $post['title'] ?>
            </td>
            <td>
                <?= $post['categoryId'] ?>
            </td>
            <td>
                <?= $post['body'] ?>
            </td>
            <?php if (strpos($_SERVER['REQUEST_URI'], 'admin') !== false): ?>
                <td>
                    <!-- Передача данных методом GET -->
                    <a href="posts/update?id=<?= $post['id'] ?>">Update</a>
                </td>
                <td>
                    <a href="posts/delete?id=<?= $post['id'] ?>">Delete</a>
                </td>
            <?php endif; ?>
        </tr>
    <?php endforeach; ?>
</table>