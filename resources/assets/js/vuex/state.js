export default {
    company: {},
    employers: [],
    autos: [],
    organizations: [],
    waybills: [],
    waybill: {},
    types: {
        autos: [],
        organizations: [],
        positions: []
    },
    prints: {
        1: [ // легковой автомобиль
            { type: '3', label: 'Обычный' } // №3
        ],
        2: [ // грузовой автомобиль
            { type: '4s', label: 'Сдельный' }, // №4-с
            { type: '4p', label: 'Повременной' } // №4-п
        ],
        3: [ // автобус
            { type: '6s', label: 'Необщий' } // №6 спец
        ],
        4: [ // спецтехника
            { type: 'spec', label: 'Спецтехника' }
        ]
    }
}
