let pressedKeys = {};

document.addEventListener('keydown', function(event) {
    pressedKeys[event.key] = true;

    if (pressedKeys['n'] && pressedKeys['h']) {
        window.location.href = basePath;
    }
    else if (pressedKeys['n'] && pressedKeys['p']) {
        window.location.href = basePath + "/projects";
    }
    else if (pressedKeys['n'] && pressedKeys['b']) {
        window.location.href = basePath + "/blog";
    }
    else if (pressedKeys['n'] && pressedKeys['c']) {
        window.location.href = basePath + "/contact";
    }
    else if (pressedKeys['q'] && pressedKeys['e']) {
        window.location.href = "mailto:hey@neosubhamoy.dev";
    }
    else if (pressedKeys['q'] && pressedKeys['m']) {
        window.location.href = "#";
    }
    else if (pressedKeys['q'] && pressedKeys['s']) {
        window.location.href = "#";
    }
});

document.addEventListener('keyup', function(event) {
    pressedKeys[event.key] = false;
});