<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lesson</title>

    </head>
    <body class="">

        <div>
            <p>Test Task</p>
        </div>

        <button id="button" type="submit" class="">Событие JS</button>

        <p>Напишите на почту <a class="mail" href="mailto:mail@test.com">mail@test.com</a>, чтобы связаться с нами</p>


        <script>
            (function(w, d, s, h, id) {
                w.roistatProjectId = id; w.roistatHost = h;
                var p = d.location.protocol == "https:" ? "https://" : "http://";
                var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init?referrer="+encodeURIComponent(d.location.href);
                var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);


            })(window, document, 'script', 'cloud.roistat.com', 'f28b872e9db440f81b0b1706ccec03a2');

            document.getElementById("button").onclick = function() {
                window.roistat.event.send("1", {"value": "4804"});
            };
        </script>
    </body>
</html>
