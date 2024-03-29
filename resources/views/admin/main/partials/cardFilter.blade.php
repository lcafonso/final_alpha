<div id="tools-buttons" class="card">
    <h3>Filtros</h3>
    <div class="card-block">
    <!--Controls for CSS filters via range input-->
    <div class="sliders">
        <form id="imageEditor">
            <p>
                <label for="gs">Grayscale</label>
                <input id="gs" name="gs" type="range" min=0 max=100 value=0>
            </p>

            <p>
                <label for="blur">Blur</label>
                <input id="blur" name="blur" type="range" min=0 max=10 value=0>
            </p>

            <p>
                <label for="br">Brightness</label>
                <input id="br" name="br" type="range" min=0 max=200 value=100>
            </p>

            <p>
                <label for="ct">Contrast</label>
                <input id="ct" name="ct" type="range" min=0 max=200 value=100>
            </p>

            <p>
                <label for="huer">Hue Rotate</label>
                <input id="huer" name="huer" type="range" min=0 max=360 value=0>
            </p>

            <p>
                <label for="opacity">Opacity</label>
                <input id="opacity" name="opacity" type="range" min=0 max=100 value=100>
            </p>

            <p>
                <label for="invert">Invert</label>
                <input id="invert" name="invert" type="range" min=0 max=100 value=0>
            </p>

            <p>
                <label for="saturate">Saturate</label>
                <input id="saturate" name="saturate" type="range" min=0 max=500 value=100>
            </p>

            <p>
                <label for="sepia">Sepia</label>
                <input id="sepia" name="sepia" type="range" min=0 max=100 value=0>
            </p>

            <input type="reset" form="imageEditor" id="reset" value="Reset" />

        </form>
    </div>

    </div>
</div>




