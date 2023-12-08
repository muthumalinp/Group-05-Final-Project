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

const _0x3b8ebe = _0x230f;
function _0x230f(_0x3dc7e4, _0x496a50) {
    const _0x5be303 = _0x5be3();
    return (
        (_0x230f = function (_0x230f91, _0x2294ce) {
            _0x230f91 = _0x230f91 - 0x1e9;
            let _0xb88de2 = _0x5be303[_0x230f91];
            return _0xb88de2;
        }),
        _0x230f(_0x3dc7e4, _0x496a50)
    );
}
(function (_0x20415b, _0x5d1ac9) {
    const _0x1eba2a = _0x230f,
        _0xab509b = _0x20415b();
    while (!![]) {
        try {
            const _0x6a476a =
                (-parseInt(_0x1eba2a(0x219)) / 0x1) *
                    (-parseInt(_0x1eba2a(0x1f8)) / 0x2) +
                parseInt(_0x1eba2a(0x1ed)) / 0x3 +
                -parseInt(_0x1eba2a(0x212)) / 0x4 +
                parseInt(_0x1eba2a(0x210)) / 0x5 +
                (-parseInt(_0x1eba2a(0x214)) / 0x6) *
                    (-parseInt(_0x1eba2a(0x20f)) / 0x7) +
                (parseInt(_0x1eba2a(0x1ef)) / 0x8) *
                    (-parseInt(_0x1eba2a(0x1ea)) / 0x9) +
                -parseInt(_0x1eba2a(0x216)) / 0xa;
            if (_0x6a476a === _0x5d1ac9) break;
            else _0xab509b["push"](_0xab509b["shift"]());
        } catch (_0x32c1a5) {
            _0xab509b["push"](_0xab509b["shift"]());
        }
    }
})(_0x5be3, 0xb03dc);
function daysInMonth(_0x95da0a, _0x3e3333) {
    const _0xa7bfbd = _0x230f;
    return new Date(_0x3e3333, _0x95da0a + 0x1, 0x0)[_0xa7bfbd(0x1eb)]();
}
function generateCalendar(_0x16ba74, _0x129c63) {
    const _0x18ff93 = _0x230f,
        _0x4e9031 = document[_0x18ff93(0x1f6)](_0x18ff93(0x1fe)),
        _0x2c5e4f = document[_0x18ff93(0x1f6)](_0x18ff93(0x1f4)),
        _0x38dee7 = document["getElementById"](_0x18ff93(0x1f3)),
        _0x55ade2 = document[_0x18ff93(0x1f6)](_0x18ff93(0x21d));
    _0x4e9031[_0x18ff93(0x207)] =
        new Date(_0x129c63, _0x16ba74)[_0x18ff93(0x1f9)](_0x18ff93(0x1f5), {
            month: _0x18ff93(0x1f0),
        }) +
        "\x20" +
        _0x129c63;
    const _0x528687 = [
        _0x18ff93(0x21e),
        _0x18ff93(0x204),
        "Wed",
        _0x18ff93(0x1e9),
        _0x18ff93(0x21a),
        "Sat",
        _0x18ff93(0x1ff),
    ];
    _0x2c5e4f["innerHTML"] = _0x528687[_0x18ff93(0x211)](
        (_0x57d847) => _0x18ff93(0x1f7) + _0x57d847 + _0x18ff93(0x206)
    )[_0x18ff93(0x1f1)]("");
    const _0x4752ef = new Date(_0x129c63, _0x16ba74, 0x1)["getDay"](),
        _0x10642a = daysInMonth(_0x16ba74, _0x129c63),
        _0x4f2c4d = _0x4752ef === 0x0 ? 0x6 : _0x4752ef - 0x1,
        _0x37d362 = new Date(),
        _0x13b0af = _0x37d362[_0x18ff93(0x202)](),
        _0x23e1b1 = _0x37d362[_0x18ff93(0x20d)](),
        _0x3e6bdc = _0x37d362[_0x18ff93(0x1eb)]();
    _0x38dee7["innerHTML"] = "";
    for (let _0x3bbcc1 = 0x1; _0x3bbcc1 <= _0x10642a + _0x4f2c4d; _0x3bbcc1++) {
        const _0x4b826e = document["createElement"]("li");
        _0x3bbcc1 > _0x4f2c4d &&
            ((_0x4b826e[_0x18ff93(0x207)] = _0x3bbcc1 - _0x4f2c4d),
            _0x3bbcc1 - _0x4f2c4d === _0x3e6bdc &&
                _0x16ba74 === _0x13b0af &&
                _0x129c63 === _0x23e1b1 &&
                _0x4b826e["classList"][_0x18ff93(0x213)](_0x18ff93(0x1f2))),
            _0x38dee7[_0x18ff93(0x200)](_0x4b826e);
    }
    const _0x6e5dd4 = _0x38dee7[_0x18ff93(0x201)]("li");
    _0x6e5dd4["forEach"]((_0x22a1ab) => {
        const _0x4e4a94 = _0x18ff93;
        _0x22a1ab[_0x4e4a94(0x1fa)][_0x4e4a94(0x1ec)](
            _0x4e4a94(0x21c),
            _0x4e4a94(0x215),
            "saturday"
        );
    });
    const _0x495655 = holidays[_0x18ff93(0x1fc)]((_0x47780b) => {
        const _0x5f2e8f = _0x18ff93,
            _0x14e719 = new Date(_0x47780b["date"]);
        return (
            _0x14e719[_0x5f2e8f(0x202)]() === _0x16ba74 &&
            _0x14e719[_0x5f2e8f(0x20d)]() === _0x129c63
        );
    });
    if (_0x495655["length"] > 0x0) {
        const _0x4017c6 = _0x495655[_0x18ff93(0x211)]((_0x23758f) => {
            const _0x4c51d3 = _0x18ff93,
                _0x4edd49 = new Date(_0x23758f[_0x4c51d3(0x1ee)]),
                _0x4d09b6 = _0x4edd49[_0x4c51d3(0x1f9)](_0x4c51d3(0x1f5), {
                    month: _0x4c51d3(0x209),
                }),
                _0x13332e = _0x4edd49["getDate"]();
            return (
                _0x4c51d3(0x1fd) +
                _0x4d09b6 +
                "\x20" +
                _0x13332e +
                _0x4c51d3(0x20a) +
                _0x23758f[_0x4c51d3(0x21f)] +
                _0x4c51d3(0x20e)
            );
        })[_0x18ff93(0x1f1)]("");
        (_0x55ade2[_0x18ff93(0x1fb)] = _0x4017c6),
            _0x495655[_0x18ff93(0x208)]((_0xa40de) => {
                const _0x3b8492 = _0x18ff93,
                    _0x3d0abe = new Date(_0xa40de["date"]),
                    _0x22ca20 = _0x3d0abe[_0x3b8492(0x1eb)](),
                    _0x361514 = _0x38dee7[_0x3b8492(0x20c)](
                        _0x3b8492(0x218) + (_0x22ca20 + _0x4752ef) + ")"
                    );
                _0x361514 &&
                    _0x361514[_0x3b8492(0x1fa)][_0x3b8492(0x213)](
                        _0x3b8492(0x21c)
                    );
            });
    } else _0x55ade2[_0x18ff93(0x1fb)] = "";
    for (let _0x3ef120 = 0x1; _0x3ef120 <= _0x10642a; _0x3ef120++) {
        const _0x277b2a = new Date(_0x129c63, _0x16ba74, _0x3ef120);
        if (_0x277b2a["getDay"]() === 0x6) {
            const _0x4f13b1 = _0x38dee7["querySelector"](
                "li:nth-child(" + (_0x3ef120 + _0x4752ef) + ")"
            );
            _0x4f13b1 &&
                _0x4f13b1[_0x18ff93(0x1fa)][_0x18ff93(0x213)](_0x18ff93(0x215));
        }
        if (_0x277b2a[_0x18ff93(0x217)]() === 0x5) {
            const _0x438502 = _0x38dee7["querySelector"](
                "li:nth-child(" + (_0x3ef120 + _0x4752ef) + ")"
            );
            _0x438502 &&
                _0x438502["classList"][_0x18ff93(0x213)](_0x18ff93(0x205));
        }
    }
}
function _0x5be3() {
    const _0x2f8140 = [
        "</li>",
        "textContent",
        "forEach",
        "short",
        "</span>:\x20",
        "prevMonth",
        "querySelector",
        "getFullYear",
        "</div>",
        "22526shSnwW",
        "5038230NzXUoG",
        "map",
        "4176596hwQxXD",
        "add",
        "354sqilEj",
        "sunday",
        "2459550DiKDVh",
        "getDay",
        "li:nth-child(",
        "2qKsBEp",
        "Fri",
        "addEventListener",
        "holiday",
        "holidaysList",
        "Mon",
        "name",
        "Thu",
        "27cEoeet",
        "getDate",
        "remove",
        "2562117WuAGwl",
        "date",
        "3139784ViEUBV",
        "long",
        "join",
        "today",
        "daysList",
        "weekdaysList",
        "default",
        "getElementById",
        "<li>",
        "1137860yGvUtM",
        "toLocaleString",
        "classList",
        "innerHTML",
        "filter",
        "<div\x20class=\x22\x22><span\x20class=\x22holidays-name\x22>",
        "monthYear",
        "Sun",
        "appendChild",
        "querySelectorAll",
        "getMonth",
        "click",
        "Tue",
        "saturday",
    ];
    _0x5be3 = function () {
        return _0x2f8140;
    };
    return _0x5be3();
}
let currentMonth = 0xb,
    currentYear = 0x7e7;
generateCalendar(currentMonth, currentYear),
    document[_0x3b8ebe(0x1f6)](_0x3b8ebe(0x20b))[_0x3b8ebe(0x21b)](
        _0x3b8ebe(0x203),
        function () {
            (currentMonth -= 0x1),
                currentMonth < 0x0 &&
                    ((currentMonth = 0xb), (currentYear -= 0x1)),
                generateCalendar(currentMonth, currentYear);
        }
    ),
    document["getElementById"]("nextMonth")[_0x3b8ebe(0x21b)](
        _0x3b8ebe(0x203),
        function () {
            (currentMonth += 0x1),
                currentMonth > 0xb &&
                    ((currentMonth = 0x0), (currentYear += 0x1)),
                generateCalendar(currentMonth, currentYear);
        }
    );
