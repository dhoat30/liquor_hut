import '../style.css';
let $ = jQuery; 

$('button').on('click', (e)=>{
    e.preventDefault();
    console.log('working');
   let val = $('select').find(':selected').text();
    console.log(val)

    if(val === 'Mount Maunganui'){
        window.location.href = "https://liquorhut.co.nz/mount/";
    }
})

