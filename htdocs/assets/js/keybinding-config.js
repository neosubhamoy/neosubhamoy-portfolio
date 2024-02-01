//---controls basic keyboard shotcuts
//basePath const is defined in floatingbar-config

let pressedKeys = {};

function getJsonDataset(element) {
    return new Promise((resolve, reject) => {
        $.getJSON('assets/dataset.json', function(datasetData) {
            resolve(datasetData[element]);
        }).fail(function(jqxhr, textStatus, error) {
            reject(error);
        });
    });
}

async function redirectToURL(item) {
    try {
        const url = await getJsonDataset(item);
        window.open(url, '_blank');
        location.reload();
    } catch (error) {
        console.error('Error:', error);
    }
}

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
        redirectToURL('email');
    }
    else if (pressedKeys['q'] && pressedKeys['m']) {
        redirectToURL('chat');
    }
    else if (pressedKeys['q'] && pressedKeys['s']) {
        redirectToURL('sources');
    }
});

document.addEventListener('keyup', function(event) {
    pressedKeys[event.key] = false;
});