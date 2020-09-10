    var Ziggy = {
        namedRoutes: {"home":{"uri":"\/","methods":["GET","HEAD"],"domain":null},"show":{"uri":"{id}","methods":["GET","HEAD"],"domain":null},"apply":{"uri":"apply","methods":["POST"],"domain":null}},
        baseUrl: 'http://localhost:9090/',
        baseProtocol: 'http',
        baseDomain: 'localhost',
        basePort: 9090,
        defaultParameters: []
    };

    if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
        for (var name in window.Ziggy.namedRoutes) {
            Ziggy.namedRoutes[name] = window.Ziggy.namedRoutes[name];
        }
    }

    export {
        Ziggy
    }
