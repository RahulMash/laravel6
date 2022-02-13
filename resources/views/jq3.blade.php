<html>
<head>
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <style>
        input, p {
            font: 16px Calibri;
        }
        .ui-autocomplete { 
            cursor:pointer; 
            height:120px; 
            overflow-y:scroll;
        }    
    </style>
</head>
<body>
    <p>Type some values in the textbox to search!</p>

    <div>
        <input type="text" id="txtBirds" placeholder="Type some value ..." />
    </div>
</body>

<script>
    $(document).ready(function () {
        BindControls();
    });

    function BindControls() {
        const arrBirds =[
            "Bald Eagle",
            "Cooper's Hawk",
            "Mourning Dove",
            "Abert's Towhee",
            "Brewer's Sparrow",
            "Black Vulture",
            "Gila Woodpecker",
            "Gilded Flicker",
            "Cassin's Sparrow",
            "Bell's Sparrow",
            "American Kestrel"
        ];

        $("#txtBirds").autocomplete({
            source: arrBirds,
            minLength: 0,
            scroll: true
        }).data("ui-autocomplete")._renderItem = function( ul, item ) {
            let txt = String(item.value).replace(new RegExp(this.term, "gi"),"<b>$&</b>");
            return $("<li></li>")
                .data("ui-autocomplete-item", item)
                .append("<a>" + txt + "</a>")
                .appendTo(ul);
        };
    }
</script>
</html>