

<html>
    <head>

    </head>
    <body>
        <form action="{{ action('DashController@update', 1) }}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            @csrf
            <button type="submit" name="update_action" value="bugfixes" style="margin:200px 45%; width:120px; border-radius:7px; border: 1px solid #da0036; padding:10px 20px; color:#da0036">Run Fixes</button>
        </form>
    </body>
</html>