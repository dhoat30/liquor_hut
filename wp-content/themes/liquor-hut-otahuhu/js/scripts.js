import '../style.css';
let $ = jQuery;

$('button').on('click', (e) => {
    e.preventDefault();
    console.log('working');
    let val = $('select').find(':selected').text();
    console.log(val)

    if (val === 'Mount Maunganui') {
        window.location.href = `${window.location.href}/mount-maunganui`;
    } else if (val === 'Otahuhu') {
        window.location.href = `${window.location.href}otahuhu`;
    } else if (val === 'Rotorua') {
        window.location.href = `${window.location.href}/rotorua`;
    } else if (val === 'Tokoroa') {
        window.location.href = `${window.location.href}/tokoroa`;
    } else if (val === 'Kawerau') {
        window.location.href = `${window.location.href}/kawerau`;
    }
})