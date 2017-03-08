export function fullName(e) {
    return [e.last_name, e.first_name, e.middle_name].join(' ');
}
export function shortName(e) {
    let middle = e.middle_name ? e.middle_name[0] + '.' : ''
    return  e.last_name + ' ' +
            e.first_name[0] + '.' +
            middle
}
