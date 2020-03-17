<h2>Story 11</h2>
<div>
    <h3>Tri du tableau :</h3>
    <form id="formStory11" method="POST" action="">
        <label for="namesArray">Enter names with ',' separator : </label>
        <input type="text" name="namesArray" placeholder="Name 1, Name 2, ...">
        <input type="submit" name="submitStory11" value="Send">
    </form>
    <p>
        <?php
        if (isset($_POST['submitStory11']))
        {
            $algorithmie->mySort($_POST['namesArray']);
        }
        ?>
    </p>
</div>