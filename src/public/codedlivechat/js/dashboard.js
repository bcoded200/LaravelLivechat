$((function() {
    var o = [
        [0, 53.08330533680049],
        [1, 50.33339517545416],
        [2, 49.4029746664779],
        [3, 47.791939081203566],
        [4, 49.09471219192674],
        [5, 50.66529743518582],
        [6, 48.749718825997206],
        [7, 48.84333276982059],
        [8, 53.51394720398375],
        [9, 52.93467940905747],
        [10, 49.083909652316756],
        [11, 50.27480737843102],
        [12, 48.37957308101624],
        [13, 44.84022012471776],
        [14, 40.71830916489318],
        [15, 41.24962375997834],
        [16, 45.63889630450356],
        [17, 44.66117259629492],
        [18, 41.393918522372914],
        [19, 38.20495807999945],
        [20, 39.68970488580452],
        [21, 41.02366924388095],
        [22, 39.41137193753915],
        [23, 35.66049049363585],
        [24, 38.5316402746093],
        [25, 38.536952802123125],
        [26, 40.69853423533536],
        [27, 38.79970643855877],
        [28, 42.98845795943349],
        [29, 46.360136088412915],
        [30, 43.5528691841886],
        [31, 40.65605934650181],
        [32, 36.5040222131244],
        [33, 31.79517009935011],
        [34, 28.913911507798105],
        [35, 29.681580006957674],
        [36, 29.57017024157237],
        [37, 33.13695968240512],
        [38, 37.084637076369454],
        [39, 35.86922272605444],
        [40, 37.60007436604805],
        [41, 39.6599902960551],
        [42, 39.01855935146662],
        [43, 34.101066517369006],
        [44, 37.486228204869676],
        [45, 39.29733687111992],
        [46, 38.46411897069526],
        [47, 37.71927995665536],
        [48, 40.15208911247334],
        [49, 35.897096450476575],
        [50, 31.505997358944384],
        [51, 31.816999110802946],
        [52, 30.50460962834996],
        [53, 25.741310049337464],
        [54, 28.23602445151448],
        [55, 28.48317685385772],
        [56, 30.001070495921475],
        [57, 32.164958534602505],
        [58, 32.99295659942683],
        [59, 37.68193430054417],
        [60, 35.24212764591677],
        [61, 39.18772362995824],
        [62, 41.376347845481895],
        [63, 41.45950716612605],
        [64, 43.78985456358012],
        [65, 39.416694565047884],
        [66, 39.32972776309515],
        [67, 43.80480524720717],
        [68, 42.434410137245514],
        [69, 43.67300580223356],
        [70, 38.79887604059381],
        [71, 43.570128406921526],
        [72, 41.81988828932836],
        [73, 44.829528785933896],
        [74, 46.19223595854988],
        [75, 47.69550173883899],
        [76, 49.010522215031536],
        [77, 46.40480781018069],
        [78, 51.28051836395483],
        [79, 50.158430192052556],
        [80, 53.60466613842059],
        [81, 56.08734803007076],
        [82, 52.72459300615355],
        [83, 56.601951946760394],
        [84, 60.26245067204903],
        [85, 58.36945168202019],
        [86, 56.59491823723127],
        [87, 55.755294545253776],
        [88, 54.74810139653445],
        [89, 54.27203682664068],
        [90, 58.659985887413185],
        [91, 57.00658547275452],
        [92, 60.52029839853601],
        [93, 57.6015284629649],
        [94, 56.48890586246457],
        [95, 55.10455188969404],
        [96, 54.357265081931686],
        [97, 52.394359471010326],
        [98, 54.52899302331695],
        [99, 54.16762513026156],
        [100, 51.95657669321307],
        [101, 51.19677107897459],
        [102, 46.35100350085707],
        [103, 48.33623433000422],
        [104, 45.84986413510889],
        [105, 48.22054173701362],
        [106, 43.30402458869659],
        [107, 45.823705773087944],
        [108, 43.48498341409474],
        [109, 41.32116785138174],
        [110, 40.99342590634263],
        [111, 38.496913606221845],
        [112, 40.10010461807938],
        [113, 44.861885054292394],
        [114, 44.03401133327108],
        [115, 41.41251651321317],
        [116, 37.800397369625514],
        [117, 39.295001424962734],
        [118, 35.24310363081255],
        [119, 32.125154958611844],
        [120, 35.68772234352005],
        [121, 38.00169527592055],
        [122, 37.960866448524754],
        [123, 38.702527394097245],
        [124, 37.457771477588224],
        [125, 37.51129389195443],
        [126, 33.108727543689724],
        [127, 35.09710598798716],
        [128, 33.11742126933996],
        [129, 31.873922447406848],
        [130, 29.18642792871095],
        [131, 31.91579925678714],
        [132, 34.370661166914054],
        [133, 32.91433174216821],
        [134, 33.17197835246117],
        [135, 37.16446574836367],
        [136, 32.60291809386715],
        [137, 36.94627368938524],
        [138, 35.9869296328639],
        [139, 38.12898104938889],
        [140, 42.55368007736426],
        [141, 41.57493569939069],
        [142, 45.54394197350075],
        [143, 46.30674824728742],
        [144, 45.73213644396193],
        [145, 45.42768540578047],
        [146, 42.52964420434585],
        [147, 44.44398524408891],
        [148, 39.74894644038498],
        [149, 44.71669577260144]
    ];
    $.plot("#flotChart3", [{
        data: [
            [0, 48.11708650372481],
            [1, 44.83834104995953],
            [2, 45.727409628208974],
            [3, 44.69213146554142],
            [4, 44.92113232835135],
            [5, 44.200874587557415],
            [6, 41.750527715312444],
            [7, 44.84511185791557],
            [8, 46.04672992189592],
            [9, 45.9480092098883],
            [10, 46.9249480823427],
            [11, 43.600609487921346],
            [12, 40.29988975207692],
            [13, 42.03310106988357],
            [14, 39.457750445961125],
            [15, 40.540159797957294],
            [16, 37.277912393740806],
            [17, 41.43887402339309],
            [18, 39.47430428214318],
            [19, 36.91189415889479],
            [20, 36.42847097453014],
            [21, 36.96844325047937],
            [22, 35.54647151074562],
            [23, 32.998974290143025],
            [24, 30.43526314490385],
            [25, 31.14797888879888],
            [26, 27.20589032036549],
            [27, 25.777592542626508],
            [28, 30.052675048145275],
            [29, 30.92837408600937],
            [30, 34.190241658736014],
            [31, 37.57718922878679],
            [32, 41.18083316913268],
            [33, 41.27110666976231],
            [34, 36.33819281943194],
            [35, 37.39239238651191],
            [36, 37.046485292242615],
            [37, 34.594801853250495],
            [38, 31.488044618299227],
            [39, 34.69970813498227],
            [40, 39.66083111892072],
            [41, 40.203292838001616],
            [42, 36.089709320758985],
            [43, 40.31141091738469],
            [44, 44.170004784953846],
            [45, 48.84998014705778],
            [46, 43.93624560052546],
            [47, 40.62473022491363],
            [48, 39.154068738786684],
            [49, 42.803089612673666],
            [50, 40.6511024461858],
            [51, 38.34516630158569],
            [52, 39.546885205159555],
            [53, 42.50715860274628],
            [54, 38.1455129028495],
            [55, 33.87761157196474],
            [56, 37.30125615378047],
            [57, 38.799409423316405],
            [58, 39.185431079286275],
            [59, 43.32737024276462],
            [60, 41.52185070435002],
            [61, 41.613587244137946],
            [62, 44.23763577861365],
            [63, 44.91439321362589],
            [64, 42.18546432611939],
            [65, 41.0624926886062],
            [66, 44.24453261527582],
            [67, 47.34794952778721],
            [68, 48.10833243543891],
            [69, 43.640893412371504],
            [70, 40.614056030997666],
            [71, 42.9374730102888],
            [72, 46.1355421298619],
            [73, 48.995759760197956],
            [74, 52.19926195857424],
            [75, 49.2778849176981],
            [76, 52.46274689069702],
            [77, 56.74969793098863],
            [78, 60.92623317241021],
            [79, 57.70969775380601],
            [80, 57.35168105637668],
            [81, 59.39818648636745],
            [82, 58.87944453401413],
            [83, 63.104976246068674],
            [84, 60.16160410107729],
            [85, 60.3461385910513],
            [86, 63.41836851069141],
            [87, 58.881150853965565],
            [88, 54.25129328569841],
            [89, 49.66170902762076],
            [90, 45.671308451937406],
            [91, 43.42038067966773],
            [92, 46.505793156464286],
            [93, 46.06001872195206],
            [94, 50.91335602988896],
            [95, 46.84735026131701],
            [96, 47.41734754711108],
            [97, 44.36126529495156],
            [98, 41.99470503666513],
            [99, 43.632976322955784],
            [100, 46.36805334166653],
            [101, 48.16660610657209],
            [102, 50.56661518795267],
            [103, 47.20511080729683],
            [104, 51.57928093061832],
            [105, 46.82629992437289],
            [106, 43.71656947498538],
            [107, 46.11727847268647],
            [108, 46.239411607006936],
            [109, 41.99170406788848],
            [110, 44.59078988734815],
            [111, 39.99864995462555],
            [112, 39.59607991752385],
            [113, 40.86135028690851],
            [114, 39.81036719656035],
            [115, 40.328012974674394],
            [116, 41.65325716849331],
            [117, 45.00093543523572],
            [118, 46.04624698953661],
            [119, 48.003663497054745],
            [120, 50.17606274884235],
            [121, 55.05679484483894],
            [122, 55.96838640846091],
            [123, 55.544955954661],
            [124, 54.84832728252716],
            [125, 52.55313725959578],
            [126, 49.91965607013097],
            [127, 54.037850934955415],
            [128, 57.10789770988697],
            [129, 58.48651605604872],
            [130, 60.7485271818432],
            [131, 65.34376786732726],
            [132, 67.43791704755618],
            [133, 62.787033615491154],
            [134, 65.01110323823873],
            [135, 66.76229363100968],
            [136, 68.37430484004857],
            [137, 71.70168521356638],
            [138, 68.57137402747702],
            [139, 67.39836039140941],
            [140, 70.31406498879772],
            [141, 70.32681376237582],
            [142, 69.44430239433778],
            [143, 68.41358873180461],
            [144, 72.61057980411566],
            [145, 70.04463291270768],
            [146, 70.28596044322113],
            [147, 65.6023891614268],
            [148, 67.46401070074405],
            [149, 62.80776411813089]
        ],
        color: "#5965f9",
        fillColor: "rgb(0, 123, 255,0.5)"
    }], {
        series: {
            shadowSize: 0,
            lines: {
                show: !0,
                lineWidth: 2,
                fill: !0,
                fillColor: {
                    colors: [{
                        opacity: 0
                    }, {
                        opacity: .4
                    }]
                }
            }
        },
        grid: {
            borderWidth: 0,
            labelMargin: 0
        },
        yaxis: {
            show: !1,
            min: 0,
            max: 110,
            color: "#e2eaf9"
        },
        xaxis: {
            show: !1,
            color: "#e2eaf9"
        }
    }), $.plot("#flotChart5", [{
        data: [
            [0, 49.331065063219285],
            [1, 48.79814898366035],
            [2, 50.61793547911337],
            [3, 53.31696317779434],
            [4, 54.78560952831719],
            [5, 53.84293992505776],
            [6, 54.682958355082874],
            [7, 56.742547193381654],
            [8, 56.99677491680908],
            [9, 56.144488388681445],
            [10, 56.567122269843885],
            [11, 60.355022877262684],
            [12, 58.7457726121753],
            [13, 61.445407102315514],
            [14, 61.112870581452086],
            [15, 58.57202276349258],
            [16, 54.72497594269612],
            [17, 52.070341498681124],
            [18, 51.09867716530438],
            [19, 47.48185519192089],
            [20, 48.57861168097493],
            [21, 48.99789250679436],
            [22, 53.582491800119456],
            [23, 50.28407438696142],
            [24, 46.24606628705599],
            [25, 48.614330310543856],
            [26, 51.75313497797672],
            [27, 51.34463925296746],
            [28, 50.217320673443936],
            [29, 54.657281647073304],
            [30, 52.445057217757245],
            [31, 53.063914668561345],
            [32, 57.07494250387825],
            [33, 52.970403392565515],
            [34, 48.723854145068756],
            [35, 52.69064629353968],
            [36, 53.590890118378205],
            [37, 58.52332126105745],
            [38, 55.1037709679581],
            [39, 58.05347017020425],
            [40, 61.350810521199946],
            [41, 57.746188675088575],
            [42, 60.276910973029786],
            [43, 61.00841651851749],
            [44, 57.786733623457636],
            [45, 56.805721677811356],
            [46, 58.90301959619822],
            [47, 62.45091969566289],
            [48, 58.75007922945926],
            [49, 58.405842466185355],
            [50, 56.746633122658444],
            [51, 52.76631598845634],
            [52, 52.3020769891715],
            [53, 50.56370473325533],
            [54, 55.407205992344544],
            [55, 50.49825590435839],
            [56, 52.4975614755482],
            [57, 48.79614749316488],
            [58, 47.46776704767111],
            [59, 43.317880548036456],
            [60, 38.96296121124144],
            [61, 34.73218432559628],
            [62, 31.033700732272116],
            [63, 32.637987000382296],
            [64, 36.89513637594264],
            [65, 35.89701755609185],
            [66, 32.742284578187544],
            [67, 33.20516407297906],
            [68, 30.82094321791933],
            [69, 28.64770271525896],
            [70, 28.44679026902145],
            [71, 27.737654438195236],
            [72, 27.755190738237744],
            [73, 25.96228929938593],
            [74, 24.38197394166947],
            [75, 21.95038772723346],
            [76, 22.08944448751686],
            [77, 23.54611335622507],
            [78, 27.309610481106425],
            [79, 30.276849322378055],
            [80, 27.25409223418214],
            [81, 29.920374921780102],
            [82, 25.143447932376702],
            [83, 23.09444253479626],
            [84, 23.79459089729409],
            [85, 23.46775072519832],
            [86, 27.9908486073969],
            [87, 23.218855925354447],
            [88, 23.9163141686872],
            [89, 19.217667423877607],
            [90, 15.135179958932145],
            [91, 15.08666008920407],
            [92, 11.006269617032526],
            [93, 9.201671310476282],
            [94, 7.475865090236113],
            [95, 11.645754524211824],
            [96, 15.76161040821357],
            [97, 13.995208323029495],
            [98, 12.59338056489445],
            [99, 13.536707176236195],
            [100, 15.01308268888571],
            [101, 13.957161242832626],
            [102, 13.237091619700053],
            [103, 18.10178875669874],
            [104, 20.634765519499563],
            [105, 21.064946755449817],
            [106, 25.370593801826132],
            [107, 25.321453557866203],
            [108, 20.947464543531186],
            [109, 18.750516645477425],
            [110, 15.382042945356737],
            [111, 14.569147793065632],
            [112, 17.949159188821604],
            [113, 15.965876707018058],
            [114, 16.359355082317443],
            [115, 14.163139419453657],
            [116, 12.106761506858124],
            [117, 14.843319717588216],
            [118, 17.24291158460492],
            [119, 17.799018581487058],
            [120, 14.038359368301329],
            [121, 18.658227817264983],
            [122, 18.463689935573676],
            [123, 22.687619584142652],
            [124, 25.088957744790036],
            [125, 28.184893996099582],
            [126, 28.03276492115397],
            [127, 24.11167758305713],
            [128, 24.28007484247854],
            [129, 28.23487421795626],
            [130, 26.246971673504287],
            [131, 29.330939820784877],
            [132, 26.07749855928238],
            [133, 23.921786397788168],
            [134, 28.825012181053275],
            [135, 25.140449169947626],
            [136, 21.79048000172746],
            [137, 23.05414699421924],
            [138, 20.712904460250886],
            [139, 19.727388210287337],
            [140, 15.219713454550508],
            [141, 16.567062865467058],
            [142, 21.46105146001275],
            [143, 24.699736621958863],
            [144, 20.05510726036824],
            [145, 16.200669070105356],
            [146, 16.938945414022744],
            [147, 15.50411643355061],
            [148, 14.788500646665874],
            [149, 16.97330575970296]
        ],
        color: "#ff5959",
        fillColor: "rgba(255, 89, 89,0.5)"
    }], {
        series: {
            shadowSize: 0,
            lines: {
                show: !0,
                lineWidth: 2,
                fill: !0,
                fillColor: {
                    colors: [{
                        opacity: 0
                    }, {
                        opacity: .4
                    }]
                }
            }
        },
        grid: {
            borderWidth: 0,
            labelMargin: 0
        },
        yaxis: {
            show: !1,
            min: 0,
            max: 130,
            color: "#e2eaf9"
        },
        xaxis: {
            show: !1,
            color: "#e2eaf9"
        }
    }), $.plot("#flotChart1", [{
        data: o,
        color: "#0acf97",
        fillColor: "rgb(15, 189, 102,0.1)"
    }], {
        series: {
            shadowSize: 0,
            lines: {
                show: !0,
                lineWidth: 2,
                fill: !0,
                fillColor: {
                    colors: [{
                        opacity: 0
                    }, {
                        opacity: .4
                    }]
                }
            }
        },
        grid: {
            borderWidth: 0,
            labelMargin: 0
        },
        yaxis: {
            show: !1,
            min: 0,
            max: 110,
            color: "#e2eaf9"
        },
        xaxis: {
            show: !1,
            color: "#e2eaf9"
        }
    }), $.plot($("#flotChart12"), [{
        data: o,
        label: "Balance",
        color: "#5965f9"
    }], {
        series: {
            lines: {
                show: !0,
                lineWidth: 2,
                fill: !0,
                fillColor: {
                    colors: [{
                        opacity: 0
                    }, {
                        opacity: .7
                    }]
                }
            },
            shadowSize: 1
        },
        points: {
            show: !1
        },
        legend: {
            noColumns: 1
        },
        grid: {
            hoverable: !0,
            clickable: !0,
            borderWidth: 0,
            labelMargin: 5
        },
        yaxis: {
            ticks: [
                [0, ""],
                [15, "$6320"],
                [30, "$6340"],
                [45, "$6360"],
                [60, "$6380"],
                [75, "$6400"]
            ],
            min: 0,
            max: 65,
            color: "rgba(0,0,0,.070)",
            font: {
                size: 10,
                color: "#777777"
            }
        },
        xaxis: {
            ticks: [
                [0, "06:00"],
                [20, "09:00"],
                [40, "12:00"],
                [60, "13:00"],
                [80, "16:00"],
                [100, "19:00"],
                [120, "21:00"],
                [140, "23:00"]
            ],
            color: "rgba(0,0,0,.070)",
            font: {
                size: 10,
                color: "#777777"
            }
        }
    }), new PerfectScrollbar(".transcation-scroll", {
        useBothWheelAxes: !0,
        suppressScrollX: !0
    }), $(".resp-tabs-list .dashboard-xino").addClass("resp-tab-active"), $(".second-sidemenu .dashboard-xino").addClass("resp-tab-content-active")
}));