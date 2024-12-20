<?php if (strpos($_SERVER['REQUEST_URI'], 'admin') !== false): ?>
    <a href="user/create">Create</a>
<?php endif; ?>
<table>
    <tr>
        <th>
            id
        </th>
        <th>
            first name
        </th>
        <th>
            last name
        </th>
        <th>
            image
        </th>
        <th>
            age
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
    <?php foreach ($data as $user): ?>
        <tr>
            <td>
                <?= $user['id'] ?>
            </td>
            <td>
                <?= $user['first_name'] ?>
            </td>
            <td>
                <?= $user['last_name'] ?>
            </td>
            <td>
                <?= $user['image'] ?>
            </td>
            <td>
                <?= $user['age'] ?>
            </td>
            <?php if (strpos($_SERVER['REQUEST_URI'], 'admin') !== false): ?>
                <td>
                    <!-- Передача данных методом GET -->
                    <a href="user/update?id=<?= $user['id'] ?>">Update</a>
                </td>
                <td>
                    <a href="user/delete?id=<?= $user['id'] ?>">Delete</a>
                </td>
            <?php endif; ?>
        </tr>
    <?php endforeach; ?>
</table>