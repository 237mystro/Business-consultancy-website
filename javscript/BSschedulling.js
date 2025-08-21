let currentmonth = new Date().getMonth();
let currentyear = new Date().getFullYear();
const today = new Date();
let currentday = new Date().getDate();

function renderCalender() {
    const monthyearelement = document.getElementById('month-year');
    monthyearelement.textContent = new Date(currentyear, currentmonth).toLocaleString('default', { month: 'long', year: 'numeric' });
    monthyearelement.style.color='black';

    const calenderdayselement = document.getElementById('calender-days');
    calenderdayselement.textContent = new Date();
    calenderdayselement.innerHTML = '';

    const firstday = new Date(currentyear, currentmonth, 1).getDay();
    const daysinmonth = new Date(currentyear, currentmonth + 1, 0).getDate();

    const modal = document.getElementById('schedule-modal');
    modal.style.marginTop='15px';
    for (let i = 0; i < firstday; i++) {
        const emptyday = document.createElement('div');
        calenderdayselement.appendChild(emptyday);
    }
    let lasthilight=null
    for (let day = 1; day <= daysinmonth; day++) {
        const dayelement = document.createElement('div');
        //dayelement.classList.add('day');
        dayelement.textContent = day;
        dayelement.style.border='1px solid black'
        if (
            currentyear === today.getFullYear() && currentmonth === today.getMonth() && day === today.getDate()
        ) {
            dayelement.style.backgroundColor = 'rgba(0, 123, 224, 0.17)'
        }
        dayelement.addEventListener('click', () => {
            const modal = document.getElementById('schedule-modal');
            //modal.style.marginTop='15px'
            if (lasthilight&&lasthilight!==dayelement){
                lasthilight.style.backgroundColor='#ffffff00';
                lasthilight.style.color='#000000';
            }
            dayelement.style.backgroundColor='#032b44';
            dayelement.style.color='#fff';
            lasthilight=dayelement
            document.getElementById('schedule-confirm').onclick = () => {
                //const classname = prompt('what is the class you wish to scheduled on the' + day + 'th ?');
                const classname = document.getElementById('schedule-input').value;
                if (classname) {
                    document.getElementById('event-details').textContent = `Day ${day}th of ${currentmonth}th month: ${classname}`;
                }
                document.getElementById('schedule-input').value='';
            };
            document.getElementById('schedule-cancel').onclick = () => {
                modal.style.display = 'none';
            }
        });
        calenderdayselement.appendChild(dayelement);

    }
}
document.addEventListener('DOMContentLoaded', () => {

    document.getElementById('prev-month').addEventListener('click', () => {
        currentmonth--;
        if (currentmonth < 0) {
            currentmonth = 11;
            currentyear--;
        }
        renderCalender();
    }
    );

    document.getElementById('next-month').addEventListener('click', () => {
        currentmonth++;
        if (currentmonth > 11) {
            currentmonth = 0;
            currentyear++;
        }
        renderCalender();
    });
    renderCalender();
});