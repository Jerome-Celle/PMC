/*jslint */
/*global AdobeEdge: false, window: false, document: false, console:false, alert: false */
(function (compId) {

    "use strict";
    var im='images/',
        aud='media/',
        vid='media/',
        js='js/',
        fonts = {
        },
        opts = {
            'gAudioPreloadPreference': 'auto',
            'gVideoPreloadPreference': 'auto'
        },
        resources = [
        ],
        scripts = [
        ],
        symbols = {
            "stage": {
                version: "5.0.1",
                minimumCompatibleVersion: "5.0.0",
                build: "5.0.1.386",
                scaleToFit: "none",
                centerStage: "none",
                resizeInstances: false,
                content: {
                    dom: [
                        {
                            id: 'Group6',
                            type: 'group',
                            rect: ['0', '-11', '500', '521', 'auto', 'auto'],
                            c: [
                            {
                                id: 'logo_092',
                                type: 'image',
                                rect: ['0px', '0px', '500px', '521px', 'auto', 'auto'],
                                fill: ["rgba(0,0,0,0)",im+"logo_092.svg",'0px','0px']
                            },
                            {
                                id: 'logo_062',
                                type: 'image',
                                rect: ['0px', '0px', '500px', '521px', 'auto', 'auto'],
                                fill: ["rgba(0,0,0,0)",im+"logo_062.svg",'0px','0px']
                            },
                            {
                                id: 'logo_052',
                                type: 'image',
                                rect: ['0px', '0px', '500px', '521px', 'auto', 'auto'],
                                fill: ["rgba(0,0,0,0)",im+"logo_052.svg",'0px','0px']
                            }]
                        },
                        {
                            id: 'Group5',
                            type: 'group',
                            rect: ['0', '-11', '500', '521', 'auto', 'auto'],
                            c: [
                            {
                                id: 'logo_082',
                                type: 'image',
                                rect: ['0px', '0px', '500px', '521px', 'auto', 'auto'],
                                fill: ["rgba(0,0,0,0)",im+"logo_082.svg",'0px','0px']
                            },
                            {
                                id: 'logo_042',
                                type: 'image',
                                rect: ['0px', '0px', '500px', '521px', 'auto', 'auto'],
                                fill: ["rgba(0,0,0,0)",im+"logo_042.svg",'0px','0px']
                            },
                            {
                                id: 'logo_032',
                                type: 'image',
                                rect: ['0px', '0px', '500px', '521px', 'auto', 'auto'],
                                fill: ["rgba(0,0,0,0)",im+"logo_032.svg",'0px','0px']
                            }]
                        },
                        {
                            id: 'Group4',
                            type: 'group',
                            rect: ['0', '-11', '500', '521', 'auto', 'auto'],
                            c: [
                            {
                                id: 'logo_072',
                                type: 'image',
                                rect: ['0px', '0px', '500px', '521px', 'auto', 'auto'],
                                fill: ["rgba(0,0,0,0)",im+"logo_072.svg",'0px','0px']
                            },
                            {
                                id: 'logo_022',
                                type: 'image',
                                rect: ['0px', '0px', '500px', '521px', 'auto', 'auto'],
                                fill: ["rgba(0,0,0,0)",im+"logo_022.svg",'0px','0px']
                            },
                            {
                                id: 'logo_012',
                                type: 'image',
                                rect: ['0px', '0px', '500px', '521px', 'auto', 'auto'],
                                fill: ["rgba(0,0,0,0)",im+"logo_012.svg",'0px','0px']
                            }]
                        }
                    ],
                    style: {
                        '${Stage}': {
                            isStage: true,
                            rect: [undefined, undefined, '500px', '500px'],
                            overflow: 'hidden',
                            fill: ["rgba(0,0,0,1.00)"]
                        }
                    }
                },
                timeline: {
                    duration: 60000,
                    autoPlay: true,
                    labels: {
                        "loop": 0
                    },
                    data: [
                        [
                            "eid49",
                            "rotateZ",
                            0,
                            15000,
                            "linear",
                            "${Group4}",
                            '0deg',
                            '360deg'
                        ],
                        [
                            "eid50",
                            "rotateZ",
                            15000,
                            15000,
                            "linear",
                            "${Group4}",
                            '360deg',
                            '720deg'
                        ],
                        [
                            "eid51",
                            "rotateZ",
                            30000,
                            15000,
                            "linear",
                            "${Group4}",
                            '720deg',
                            '1080deg'
                        ],
                        [
                            "eid52",
                            "rotateZ",
                            45000,
                            15000,
                            "linear",
                            "${Group4}",
                            '1080deg',
                            '1440deg'
                        ],
                        [
                            "eid47",
                            "rotateZ",
                            0,
                            30000,
                            "linear",
                            "${Group5}",
                            '0deg',
                            '-360deg'
                        ],
                        [
                            "eid46",
                            "rotateZ",
                            30000,
                            30000,
                            "linear",
                            "${Group5}",
                            '-360deg',
                            '-720deg'
                        ],
                        [
                            "eid44",
                            "rotateZ",
                            0,
                            60000,
                            "linear",
                            "${Group6}",
                            '0deg',
                            '360deg'
                        ]
                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load("anim_logo_B_edgeActions.js");
})("EDGE-34111426");
