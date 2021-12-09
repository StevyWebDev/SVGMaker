<h1>Accueil</h1>
<form action="index.php?controller=home&task=createSvg" method="post">

    <label for="shapeName">Forme</label>
    <select name="shapeName" id="shapeId">
        <option value="rect">rectangle</option>
    </select>

    <label for="x">Position X</label>
    <input type="number" name="x" id="x">
    <label for="y">Position Y</label>
    <input type="number" name="y" id="y">

    <label for="shapeWidth">Largeur</label>
    <input type="number" name="shapeWidth" id="shapeWidth">

    <label for="shapeHeight">Hauteur</label>
    <input type="number" name="shapeHeight" id="shapeHeight">

    <label for="fill">Couleur interieur</label>
    <select name="fill" id="fill">
        <option value="red">rouge</option>
        <option value="green">vert</option>
        <option value="blue">bleu</option>
        <option value="violet">violet</option>
    </select>

    <label for="stroke">Couleur bordure</label>
    <select name="stroke" id="stroke">
        <option value="red">rouge</option>
        <option value="green">vert</option>
        <option value="blue">bleu</option>
        <option value="violet">violet</option>
    </select>

    <label for="strokeWidth">Taille bordure</label>
    <input type="number" name="strokeWidth" id="strokeWidth">

    <button type="submit">Envoyer</button>
</form>