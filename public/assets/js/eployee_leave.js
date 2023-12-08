const holidays = [
    { date: "2023-01-06", name: "Duruthu Full Moon Poya Day" },
    { date: "2023-01-15", name: "Tamil Thai Pongal Day" },
    { date: "2023-02-04", name: "National Day" },
    { date: "2023-02-05", name: "Navam Full Moon Poya Day" },
    { date: "2023-02-18", name: "Mahasivarathri Day" },
    { date: "2023-03-06", name: "Madin Full Moon Poya Day" },
    { date: "2023-04-05", name: "Bak Full Moon Poya Day" },
    { date: "2023-04-07", name: "Good Friday" },
    { date: "2023-04-13", name: "Day prior to Sinhala & Tamil New Year Day" },
    { date: "2023-04-14", name: "Sinhala & Tamil New Year Day" },
    { date: "2023-04-22", name: "Id Ul-Fitr" },
    { date: "2023-05-01", name: "May Day" },
    { date: "2023-05-05", name: "Vesak Full Moon Poya Day" },
    { date: "2023-05-06", name: "Day following Vesak Full Moon Poya Day" },
    { date: "2023-06-03", name: "Poson Full Moon Poya Day" },
    { date: "2023-06-29", name: "Id Ul-Alha" },
    { date: "2023-07-03", name: "Adhi Esala Full Moon Poya Day" },
    { date: "2023-08-01", name: "Esala Full Moon Poya Day" },
    { date: "2023-08-30", name: "Nikini Full Moon Poya Day" },
    { date: "2023-09-28", name: "Milad un-Nabi" },
    { date: "2023-09-29", name: "Binara Full Moon Poya Day" },
    { date: "2023-10-28", name: "Vap Full Moon Poya Day" },
    { date: "2023-11-12", name: "Deepavali" },
    { date: "2023-11-26", name: "Ill Full Moon Poya Day" },
    { date: "2023-12-25", name: "Christmas Day" },
    { date: "2023-12-26", name: "Unduvap Full Moon Poya Day" },

    { date: "2024-01-15", name: "Tamil Thai Pongal Day" },
    { date: "2024-01-25", name: "Duruthu Full Moon Poya Day" },
    { date: "2024-02-04", name: "National Day" },
    { date: "2024-02-24", name: "Navam Full Moon Poya Day" },
    { date: "2024-03-08", name: "Mahasivarathri Day" },
    { date: "2024-03-24", name: "Madin Full Moon Poya Day" },
    { date: "2024-03-29", name: "Good Friday" },
    { date: "2024-04-10", name: "Id Ul-Fitr" },
    { date: "2024-04-12", name: "Day prior to Sinhala & Tamil New Year Day" },
    { date: "2024-04-13", name: "Sinhala & Tamil New Year Day" },
    { date: "2024-04-23", name: "Bak Full Moon Poya Day" },
    { date: "2024-05-01", name: "May Day" },
    { date: "2024-05-23", name: "Vesak Full Moon Poya Day" },
    { date: "2024-05-24", name: "Day following Vesak Full Moon Poya Day" },
    { date: "2024-06-17", name: "Id Ul-Alha" },
    { date: "2024-06-21", name: "Poson Full Moon Poya Day" },
    { date: "2024-07-20", name: "Esala Full Moon Poya Day" },
    { date: "2024-08-19", name: "Nikini Full Moon Poya Day" },
    { date: "2024-09-16", name: "Milad un-Nabi" },
    { date: "2024-09-17", name: "Binara Full Moon Poya Day" },
    { date: "2024-10-17", name: "Vap Full Moon Poya Day" },
    { date: "2024-10-31", name: "Deepavali" },
    { date: "2024-11-15", name: "Ill Full Moon Poya Day" },
    { date: "2024-12-14", name: "Unduvap Full Moon Poya Day" },
    { date: "2024-12-25", name: "Christmas Day" },
];

const specialDays = [
    { date: "2023-01-15", name: "Special Day 1" },
    { date: "2023-12-25", name: "Special Day 2" },
];

const _0x58ba1b = _0x5918;
(function (_0xcdf78f, _0x2b8512) {
    const _0x48f5c2 = _0x5918,
        _0x535575 = _0xcdf78f();
    while (!![]) {
        try {
            const _0x5c44c1 =
                parseInt(_0x48f5c2(0x1f2)) / 0x1 +
                (parseInt(_0x48f5c2(0x1f6)) / 0x2) *
                    (parseInt(_0x48f5c2(0x1fa)) / 0x3) +
                parseInt(_0x48f5c2(0x207)) / 0x4 +
                (parseInt(_0x48f5c2(0x20f)) / 0x5) *
                    (parseInt(_0x48f5c2(0x1f7)) / 0x6) +
                (-parseInt(_0x48f5c2(0x21c)) / 0x7) *
                    (parseInt(_0x48f5c2(0x21e)) / 0x8) +
                (parseInt(_0x48f5c2(0x202)) / 0x9) *
                    (-parseInt(_0x48f5c2(0x206)) / 0xa) +
                (-parseInt(_0x48f5c2(0x1fe)) / 0xb) *
                    (-parseInt(_0x48f5c2(0x20b)) / 0xc);
            if (_0x5c44c1 === _0x2b8512) break;
            else _0x535575["push"](_0x535575["shift"]());
        } catch (_0x3114e0) {
            _0x535575["push"](_0x535575["shift"]());
        }
    }
})(_0x2361, 0x68b26);
function daysInMonth(_0x241d1d, _0x4080ed) {
    const _0x483057 = _0x5918;
    return new Date(_0x4080ed, _0x241d1d + 0x1, 0x0)[_0x483057(0x21a)]();
}
function generateCalendar(_0x1ebbc2, _0x43cb78) {
    const _0x390fba = _0x5918,
        _0x245081 = document[_0x390fba(0x21f)](_0x390fba(0x1f3)),
        _0x1f8aac = document["getElementById"](_0x390fba(0x1fb)),
        _0x581303 = document["getElementById"](_0x390fba(0x1f4));
    _0x245081[_0x390fba(0x21d)] =
        new Date(_0x43cb78, _0x1ebbc2)[_0x390fba(0x20a)]("default", {
            month: _0x390fba(0x211),
        }) +
        "\x20" +
        _0x43cb78;
    const _0x410f6b = [
        _0x390fba(0x213),
        "Tue",
        _0x390fba(0x200),
        _0x390fba(0x216),
        _0x390fba(0x201),
        _0x390fba(0x1fd),
        _0x390fba(0x1ff),
    ];
    _0x1f8aac[_0x390fba(0x212)] = _0x410f6b[_0x390fba(0x20d)](
        (_0x13b59a) => _0x390fba(0x209) + _0x13b59a + _0x390fba(0x21b)
    )["join"]("");
    const _0x44a16a = new Date(_0x43cb78, _0x1ebbc2, 0x1)[_0x390fba(0x20c)](),
        _0x127333 = daysInMonth(_0x1ebbc2, _0x43cb78),
        _0x5406d2 = _0x44a16a === 0x0 ? 0x6 : _0x44a16a - 0x1,
        _0x39d23a = new Date(),
        _0x194849 = _0x39d23a[_0x390fba(0x1f8)](),
        _0x5d510a = _0x39d23a[_0x390fba(0x1ef)](),
        _0x3e943a = _0x39d23a[_0x390fba(0x21a)]();
    _0x581303["innerHTML"] = "";
    for (let _0x11be24 = 0x1; _0x11be24 <= _0x127333 + _0x5406d2; _0x11be24++) {
        const _0x5b1824 = document[_0x390fba(0x1fc)]("li");
        _0x11be24 > _0x5406d2 &&
            ((_0x5b1824["textContent"] = _0x11be24 - _0x5406d2),
            _0x11be24 - _0x5406d2 === _0x3e943a &&
                _0x1ebbc2 === _0x194849 &&
                _0x43cb78 === _0x5d510a &&
                _0x5b1824["classList"][_0x390fba(0x218)]("today")),
            _0x581303[_0x390fba(0x1f9)](_0x5b1824);
    }
    const _0x2767ac = _0x581303["querySelectorAll"]("li");
    _0x2767ac[_0x390fba(0x217)]((_0xca369c) => {
        const _0x15cfb1 = _0x390fba;
        _0xca369c[_0x15cfb1(0x210)][_0x15cfb1(0x1f5)](
            _0x15cfb1(0x208),
            _0x15cfb1(0x205),
            "saturday"
        );
    });
    const _0x2fe5d1 = specialDays["filter"]((_0x5b0bca) => {
            const _0x14eced = _0x390fba,
                _0x5c59cc = new Date(_0x5b0bca[_0x14eced(0x1f1)]);
            return (
                _0x5c59cc["getMonth"]() === _0x1ebbc2 &&
                _0x5c59cc[_0x14eced(0x1ef)]() === _0x43cb78
            );
        }),
        _0x15f48c = holidays[_0x390fba(0x204)]((_0x5f45b3) => {
            const _0x485373 = new Date(_0x5f45b3["date"]);
            return (
                _0x485373["getMonth"]() === _0x1ebbc2 &&
                _0x485373["getFullYear"]() === _0x43cb78
            );
        });
    _0x15f48c[_0x390fba(0x217)]((_0x3c1961) => {
        const _0x4b3ed2 = _0x390fba,
            _0x7e9244 = new Date(_0x3c1961[_0x4b3ed2(0x1f1)]),
            _0x4ffa5b = _0x7e9244["getDate"](),
            _0x32dd73 = _0x581303[_0x4b3ed2(0x203)](
                "li:nth-child(" + (_0x4ffa5b + _0x44a16a) + ")"
            );
        _0x32dd73 && _0x32dd73[_0x4b3ed2(0x210)]["add"](_0x4b3ed2(0x208));
    }),
        _0x2fe5d1[_0x390fba(0x217)]((_0x1093f8) => {
            const _0x437149 = _0x390fba,
                _0x89f037 = new Date(_0x1093f8[_0x437149(0x1f1)]),
                _0xbdb48b = _0x89f037[_0x437149(0x21a)](),
                _0x37ed5f = _0x581303[_0x437149(0x203)](
                    _0x437149(0x219) + (_0xbdb48b + _0x44a16a) + ")"
                );
            _0x37ed5f &&
                _0x37ed5f[_0x437149(0x210)][_0x437149(0x218)]("special-day");
        });
    for (let _0x5d3f8b = 0x1; _0x5d3f8b <= _0x127333; _0x5d3f8b++) {
        const _0x1b50d7 = new Date(_0x43cb78, _0x1ebbc2, _0x5d3f8b);
        if (_0x1b50d7[_0x390fba(0x20c)]() === 0x6) {
            const _0x5949d6 = _0x581303["querySelector"](
                "li:nth-child(" + (_0x5d3f8b + _0x44a16a) + ")"
            );
            _0x5949d6 &&
                _0x5949d6["classList"][_0x390fba(0x218)](_0x390fba(0x205));
        }
        if (_0x1b50d7[_0x390fba(0x20c)]() === 0x5) {
            const _0x1e43e3 = _0x581303[_0x390fba(0x203)](
                "li:nth-child(" + (_0x5d3f8b + _0x44a16a) + ")"
            );
            _0x1e43e3 &&
                _0x1e43e3[_0x390fba(0x210)][_0x390fba(0x218)](_0x390fba(0x20e));
        }
    }
}
function _0x2361() {
    const _0x1a5dbc = [
        "2539445xXNMlr",
        "classList",
        "long",
        "innerHTML",
        "Mon",
        "click",
        "prevMonth",
        "Thu",
        "forEach",
        "add",
        "li:nth-child(",
        "getDate",
        "</li>",
        "5789zxFPjx",
        "textContent",
        "7464IthWMY",
        "getElementById",
        "getFullYear",
        "addEventListener",
        "date",
        "207824olSgzA",
        "monthYear",
        "daysList",
        "remove",
        "22294hTfXNb",
        "6ecdWkF",
        "getMonth",
        "appendChild",
        "78KZPpCW",
        "weekdaysList",
        "createElement",
        "Sat",
        "121rVGcuN",
        "Sun",
        "Wed",
        "Fri",
        "486rwWUGF",
        "querySelector",
        "filter",
        "sunday",
        "155370wUVmKz",
        "1998136STsYIU",
        "holiday",
        "<li>",
        "toLocaleString",
        "582936FIdfEb",
        "getDay",
        "map",
        "saturday",
    ];
    _0x2361 = function () {
        return _0x1a5dbc;
    };
    return _0x2361();
}
function _0x5918(_0x4c8c02, _0x440bd7) {
    const _0x2361d7 = _0x2361();
    return (
        (_0x5918 = function (_0x591865, _0x4fb589) {
            _0x591865 = _0x591865 - 0x1ef;
            let _0x409a67 = _0x2361d7[_0x591865];
            return _0x409a67;
        }),
        _0x5918(_0x4c8c02, _0x440bd7)
    );
}
let currentMonth = 0xb,
    currentYear = 0x7e7;
generateCalendar(currentMonth, currentYear),
    document[_0x58ba1b(0x21f)](_0x58ba1b(0x215))["addEventListener"](
        _0x58ba1b(0x214),
        function () {
            (currentMonth -= 0x1),
                currentMonth < 0x0 &&
                    ((currentMonth = 0xb), (currentYear -= 0x1)),
                generateCalendar(currentMonth, currentYear);
        }
    ),
    document["getElementById"]("nextMonth")[_0x58ba1b(0x1f0)](
        _0x58ba1b(0x214),
        function () {
            (currentMonth += 0x1),
                currentMonth > 0xb &&
                    ((currentMonth = 0x0), (currentYear += 0x1)),
                generateCalendar(currentMonth, currentYear);
        }
    );
