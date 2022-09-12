<?php include_once("header.php"); ?>

<link rel="stylesheet" href="lib/plyr/dist/plyr.css">




<section>



    <div id="call-to-action">

        <div class="container">

            <div class="row text-center mb-4">
                <h2>Vídeos</h2>
                <hr>
            </div>

            <div class="row">
                <div class="player">
                    <video src="mp4/highlights.mp4" controls poster="img/highlights.jpg"></video>
                    <track kind="captions" label="Português (BR)" src="vtt/legendas.vtt" srclang="pt-br" default>
                </div>
                <input type="range" min="0" max="1" step="0.01" id="volume" value="1">

                <button type="button" id="btn-play-pause" class="btn btn-success">PLAY</button>

            </div>

        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <h2>Latest News</h2>
            <hr>
        </div>

        <div class="row thumbnails owl-carousel owl-theme">
            <div class="items" data-video="highlights">
                <div class="item-inner">
                    <img src="img/highlights.jpg" alt="Noticia">
                    <h3>highlights</h3>
                </div>
            </div>
            <div class="items" data-video="Orlando_City_Foundation_2015">
                <div class="item-inner">
                    <img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
                    <h3>Oralndo City Foundation 2015</h3>
                </div>
            </div>
            <div class="items" data-video="highlights">
                <div class="item-inner">
                    <img src="img/highlights.jpg" alt="Noticia">
                    <h3>highlights</h3>
                </div>
            </div>
            <div class="items" data-video="Orlando_City_Foundation_2015">
                <div class="item-inner">
                    <img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
                    <h3>Oralndo City Foundation 2015</h3>
                </div>
            </div>
            <div class="items" data-video="highlights">
                <div class="item-inner">
                    <img src="img/highlights.jpg" alt="Noticia">
                    <h3>highlights</h3>
                </div>
            </div>
            <div class="items" data-video="Orlando_City_Foundation_2015">
                <div class="item-inner">
                    <img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
                    <h3>Oralndo City Foundation 2015</h3>
                </div>
            </div>
            <div class="items" data-video="highlights">
                <div class="item-inner">
                    <img src="img/highlights.jpg" alt="Noticia">
                    <h3>highlights</h3>
                </div>
            </div>
            <div class="items" data-video="Orlando_City_Foundation_2015">
                <div class="item-inner">
                    <img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
                    <h3>Oralndo City Foundation 2015</h3>
                </div>
            </div>

        </div>

    </div>

</section>

<?php include_once("footer.php"); ?>


<script src="lib/plyr/dist/plyr.js"></script>
<script>
    (function(d, p) {
        var a = new XMLHttpRequest(),
            b = d.body;
        a.open("GET", p, true);
        a.send();
        a.onload = function() {
            var c = d.createElement("div");
            c.style.display = "none";
            c.innerHTML = a.responseText;
            b.insertBefore(c, b.childNodes[0]);
        }
    })(document, "lib/plyr/dist/sprite.svg");
</script>
<script>
    $(function() {
        $(".thumbnails .items").on("click", function() {
            $("video").attr({
                "src": "mp4/" + $(this).data('video') + ".mp4",
                "poster": "img/" + $(this).data('video') + ".jpg",
            })
        })
        $("#volume").on("mousemove", function() {
            $("video")[0].volume = parseFloat($(this).val())
        })
        $("#btn-play-pause").on("click", function() {
            var video = $("video")[0];

            if ($(this).hasClass("btn-success")) {
                $(this).text(" STOP");
                video.play();

            } else {
                $(this).text("PLAY");
                video.pause();
            }

            $(this).toggleClass("btn-success btn-danger");
        })
        plyr.setup(); // Disparando player PLYR
    })
</script>