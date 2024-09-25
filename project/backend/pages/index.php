
<!doctype html>
<html lang="en">

<?php include "../components/head.php" ?>

<body>
    <?php include "../components/header.php" ?>
    <main class="container my-5">
        <!-- harus php kalo engga ada 1 nya -->
        <?php include "../components/alert.php" ?>
        <div
            class="table-responsive">
            <table
                class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Column 1</th>
                        <th scope="col">Column 2</th>
                        <th scope="col">Column 3</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">R1C1</td>
                        <td>R1C2</td>
                        <td>R1C3</td>
                    </tr>
                    <tr class="">
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>Item</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </main>
    <?php include "../components/footer.php" ?>
    <?php include "../components/script.php" ?>
</body>

</html>