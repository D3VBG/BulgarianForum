<?php
include_once("../include/header.php");
?>
<table>
    <tr>
        <td>
            <form method="POST">
                <h1>Вход</h1>
                <label for="username">Потребителско име</label>
                <br />
                <input name="username" id="username" type="text" placeholder="Потребителско име" />
                <br />
                <label for="password">Парола</label>
                <br />
                <input name="password" id="password" type="password" placeholder="Парола" />
                <br />
                <div class="text-center">
                    <button type="submit">Вход</button>
                    <p>Отиди към (<a href="<?php echo $url; ?>">Начална страница</a>).</p>
                </div>
            </form>
        </td>
    </tr>
</table>
<?php
include_once("../include/footer.php");
?>