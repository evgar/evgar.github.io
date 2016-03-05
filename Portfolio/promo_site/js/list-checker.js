    var icons = document.getElementById("check-block");
    var checkedItems = icons.getElementsByTagName("li");
    for (var i = 0; i < checkedItems.length; i++) {
        checkedItems[i].onclick = checkIt;
    };

    function checkIt(checkObj) {
        var icon = checkObj.target;
        var name = icon.id;
        var iconClass = icon.className;
        document.getElementById(name).className = name + "-checked";
        if (iconClass === name + "-checked") {
            document.getElementById(name).className = name;
        };
    };
