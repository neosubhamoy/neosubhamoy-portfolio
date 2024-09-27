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
        if (!/Firefox/.test(navigator.userAgent)) {
            location.reload();
        }
    } catch (error) {
        console.error('Error:', error);
    }
}

document.addEventListener('keydown', function(event) {
    pressedKeys[event.key] = true;

    if ((pressedKeys['n'] && pressedKeys['h']) || (pressedKeys['N'] && pressedKeys['H'])) {
        window.location.href = basePath;
    }
    else if ((pressedKeys['n'] && pressedKeys['p']) || (pressedKeys['N'] && pressedKeys['P'])) {
        window.location.href = basePath + "/projects";
    }
    else if ((pressedKeys['n'] && pressedKeys['b']) || (pressedKeys['N'] && pressedKeys['B']))  {
        window.location.href = basePath + "/blog";
    }
    else if ((pressedKeys['n'] && pressedKeys['c']) || (pressedKeys['N'] && pressedKeys['C'])) {
        window.location.href = basePath + "/contact";
    }
    else if ((pressedKeys['q'] && pressedKeys['e']) || (pressedKeys['Q'] && pressedKeys['E'])) {
        redirectToURL('email');
    }
    else if ((pressedKeys['q'] && pressedKeys['m']) || (pressedKeys['Q'] && pressedKeys['M'])) {
        redirectToURL('chat');
    }
    else if ((pressedKeys['q'] && pressedKeys['s']) || (pressedKeys['Q'] && pressedKeys['S'])) {
        redirectToURL('sources');
    }
});

document.addEventListener('keyup', function(event) {
    pressedKeys[event.key] = false;
});