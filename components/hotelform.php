<style>
    /* Styles for the date picker */
    .prev,.next{
      cursor: pointer;
      font-size:25px;
    }
    .date-picker {
      position: relative;
      display: inline-block;
    }

    .date-picker input[type="text"] {
      padding: 0px 12px;
      border: 1px solid #d9d9d9;
      font-size: 14px;
      outline: 0;
      height:48px;
    }

    .date-picker .calendar {
      position: absolute;
      top: 100%;
      left: 0;
      z-index: 1;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      display: none;
    }

    .date-picker .calendar.show {
      display: block;
    }

    .date-picker .calendar .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 8px 12px;
      border-bottom: 1px solid #ccc;
    }

    .date-picker .calendar .days {
      padding: 8px;
    }

    .date-picker .calendar .days .week {
      display: flex;
      justify-content: space-between;
    }

    .date-picker .calendar .days .week span {
      flex: 1;
      text-align: center;
      padding: 4px;
      cursor: pointer;
    }

    .date-picker .calendar .days .week span.disabled {
      color: #ccc;
      cursor: not-allowed;
    }
</style>
<div class="hotel-container">
                    <div class="hotel-form-section" >
       

                        <form  class="hotel-form" id="hotelform">
                            <h1 class="hotel-form-head rale">Hotel Booking </h1>
                            <!-- name -->
                            <div class="label name">
                                <label for="name">Name</label>
                                <input type="text" name="name" placeholder="Enter Your name" required>
                                <!-- <p style="margin: 0%;">type letter</p> -->
                            </div>
                            <!-- number -->
                            <div class="label number">
                                <label for="number">No. of customer</label>
                                <input type="number" name="number" placeholder="Enter Your count" required>
                            </div>
                            <!-- email id -->
                            <div class="label email">
                                <label for="email">Email</label>
                                <input type="email" placeholder="Email" name="email" required>
                            </div>
                            <!-- from loaction -->
                            <div class="label location">
                                <label for="location">Location</label>
                                <input type="text" placeholder="Enter Your Location" name="location" required>
                            </div>
                            <!-- to location -->
                            <div class="label plan">
                                <label for="plan">Plan To</label>
                                <input type="text" placeholder="To" name="plan" required>
                            </div>
                            <!-- check in date-->
                            <div class="label in">
                                <label for="check-in">Check In</label>
                                <!-- <input type="text" name="check-in" placeholder="In" required> -->
                                <!-- <input type="text" class="input-date-picker" id="datepicker" autocomplete="off" name="check-in" 
                                placeholder="Travel Date"  required> -->
                                <div class="date-picker">
    <input type="text" id="dateInput" class="label dateInput" placeholder="Travel Date" name="check-in"  required>
    <div class="calendar" id="calendar"></div>
  </div>
                            </div>
                            <!-- check out date-->
                            <div class="label out">
                                <label for="check-out">Check Out</label>
                                <!-- <input type="text" name="check-out" placeholder="Out" required> -->
                                <!-- <input type="text" class="input-date-picker" id="datepicker1" autocomplete="off" name="check-out" 
                                placeholder="Travel Date"  required> -->
                                <div class="date-picker">
    <input type="text" id="dateInput" class="label dateInput" placeholder="Travel Date" name="check-out"  required>
    <div class="calendar" id="calendar"></div>
  </div>
                            </div>
                            <div class="label adults">
                                <label for="adults">Adults</label>
                                <input type="text" placeholder="No of Adults" name="adult" required>
                            </div>
                            <div class="label child">
                                <label for="child">Child</label>
                                <input type="text" placeholder="No of Child" name="child" required>
                            </div>
                            <div class="label budget">
                                <label for="budget">Budget</label>
                                <input type="text" placeholder="Enter Your Budget" name="budget" required>
                            </div>
                        
                            <input type="submit" placeholder="submit" name="submit" class="submit" id='submit-btn' style="background-color: #F56960;color: #ffffff;">
                           
            
                        </form>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function(e) {
                        let  form = document.getElementById('hotelform')
                        let   to = document.getElementById('flightform');
                        if(form){
                            // flight button click event handler
                            form.addEventListener('submit',(e)=>{
                                e.preventDefault();
                              const formData = new FormData(e.target);
                            const formObject = Object.fromEntries(formData.entries());
                            console.log(formObject);
                            let numreg = /^(0|[1-9]\d*)$/
                            if(formObject.name.length<5){
                                validate  = false
                                console.log('1');
                                alert ("Enter valid name that must greater than 5 letter ")
                            }
                            else if(!numreg.test(formObject.number)){
                                validate = false;
                                console.log('1');
                                alert ("Enter valid number of customer ")
                            }
                            else if(!numreg.test(formObject.adult)){
                                validate  = false
                                console.log('1');
                                alert ("Enter Adults  in number")
                            }
                            else if(!numreg.test(formObject.child)){
                                validate  = false
                                console.log('2');
                                alert ("Enter Child in  number")
                            }
                            else if(!numreg.test(formObject.budget)){
                                validate  = false
                                console.log('4');
                                alert ("Enter Budget in  number")
                            }
                            else if(formObject.name.length<5){
                                console.log('3');
                                validate  = false
                                alert ("name must be greater that 5 alphabet")
                            }
                            else{
                                validate = true
                            }
                              // Get form data
                            //   var formData = $(this).serialize();

                            //   // Send form data using Axios to submit.php
                            if(validate){
                              let subBtn = document.getElementById('submit-btn');
                            subBtn.value = 'sending....'
                            axios.post('https://mtn-wldj.onrender.com/mtnsendEmail', formObject)

                                 .then(function (response) {
                                    if(response.data.data == 'success'){
                                      subBtn.value = 'sended'
                                          alert('Message sent successfully');
                                          let  a = document.getElementById("hotelform")
                                          a.reset();
                                          setTimeout(() => {
                                            subBtn.value = 'Book Now'
                                          }, 3000);
                                 
                                    } else {
                                          alert('Error: Unable to send message');
                                    }
                                 })
                                 .catch(function (error) {
                                    alert('Error: ' + error);
                                 });
                                }
                            })
                        }
                    })
                    //  $(document).ready(function(){
                    //     $('#hotelform').submit(function(e){
                    //           e.preventDefault();
                    //           const formData = new FormData(this);
                    //         const formObject = Object.fromEntries(formData.entries());

                    //         console.log(formObject);
                    //         let numreg = /^(0|[1-9]\d*)$/
                    //         if(!numreg.test(formObject.adult)){
                    //             validate  = false
                    //             console.log('1');
                    //             alert ("Enter Adults  in number ")
                    //         }
                    //         else if(!numreg.test(formObject.child)){
                    //             validate  = false
                    //             console.log('2');
                    //             alert ("Enter Child in  number")
                    //         }
                    //         else if(!numreg.test(formObject.budget)){
                    //             validate  = false
                    //             console.log('4');
                    //             alert ("Enter Budget in  number")
                    //         }
                    //         else if(formObject.name.length<5){
                    //             console.log('3');
                    //             validate  = false
                    //             alert ("name must be greater that 5 alphabet")
                    //         }
                    //         else{
                    //             validate = true
                    //         }
                    //           // Get form data
                    //         //   var formData = $(this).serialize();

                    //         //   // Send form data using Axios to submit.php
                    //         if(validate){

                    //         axios.post('https://mtn-wldj.onrender.com/mtnsendEmail', formObject)

                    //              .then(function (response) {
                    //                 if(response.data.data == 'success'){
                    //                       alert('Message sent successfully');
                    //                       let  a = document.getElementById("hotelform")
                    //                       a.reset();
                                 
                    //                 } else {
                    //                       alert('Error: Unable to send message');
                    //                 }
                    //              })
                    //              .catch(function (error) {
                    //                 alert('Error: ' + error);
                    //              });
                    //             }
                    //     });
                    //  });
                  </script>
<!-- <script>
    // Define selectDate globally
    function formatDate(date) {
  const day = date.getDate().toString().padStart(2, '0');
  const month = (date.getMonth() + 1).toString().padStart(2, '0');
  const year = date.getFullYear();
  return `${day}/${month}/${year}`;
 }
    function selectDate(date, index) {
      const currentDate = new Date();
      const selectedDateObj = new Date(currentDate.getFullYear(), currentDate.getMonth(), date);
      if (selectedDateObj >= new Date()) {
        const dateInput = document.querySelectorAll('.dateInput')[index];
        const calendar = dateInput.nextElementSibling;
        const month = currentDate.getMonth();
        const year = currentDate.getFullYear();
        // dateInput.value = selectedDateObj.toLocaleDateString();
        dateInput.value = formatDate(selectedDateObj);
        renderCalendar(calendar, month, year, index);
        calendar.classList.remove('show')
      }
    }

    // Initialize all date pickers
    document.querySelectorAll('.date-picker').forEach((picker, index) => {
      const dateInput = picker.querySelector('.dateInput');

      dateInput.addEventListener('click', (event) => {
        event.stopPropagation();
        const calendar = dateInput.nextElementSibling;
        calendar.classList.toggle('show');
        const currentDate = new Date();
        const month = currentDate.getMonth();
        const year = currentDate.getFullYear();
        renderCalendar(calendar, month, year, index);
      });
    });

    function renderCalendar(calendar, month, year, index) {
      const firstDay = new Date(year, month, 1).getDay();
      const lastDay = new Date(year, month + 1, 0).getDate();

      let calendarHTML = `
        <div class="header">
          <span class="prev" onclick="prevMonth(${index})">&#8249;</span>
          <span class="month-year">${new Date(year, month).toLocaleString('default', { month: 'long', year: 'numeric' })}</span>
          <span class="next" onclick="nextMonth(${index})">&#8250;</span>
        </div>
        <div class="days">
      `;

      // Add weekday names
      calendarHTML += '<div class="week">';
      const weekdayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
      for (let i = 0; i < 7; i++) {
        calendarHTML += `<span>${weekdayNames[i]}</span>`;
      }
      calendarHTML += '</div>';

      // Add date cells
      let date = 1;
      for (let i = 0; i < 6; i++) {
        calendarHTML += '<div class="week">';
        for (let j = 0; j < 7; j++) {
          if (i === 0 && j < firstDay) {
            calendarHTML += '<span></span>';
          } else if (date > lastDay) {
            calendarHTML += '<span></span>';
          } else {
            const cellDate = new Date(year, month, date);
            const isDisabled = cellDate < new Date();
            const isSelected = cellDate.toDateString() === new Date().toDateString();
            calendarHTML += `<span class="${isDisabled ? 'disabled' : ''} ${isSelected ? 'selected' : ''}" onclick="${isDisabled ? '' : `selectDate(${date}, ${index})`}">${date}</span>`;
            date++;
          }
        }
        calendarHTML += '</div>';
      }

      calendarHTML += '</div>';
      calendar.innerHTML = calendarHTML;
    }

    function prevMonth(index) {
      const currentDate = new Date();
      currentDate.setMonth(currentDate.getMonth() - 1);
      const month = currentDate.getMonth();
      const year = currentDate.getFullYear();
      const calendar = document.querySelectorAll('.calendar')[index];
      renderCalendar(calendar, month, year, index);
    }

    function nextMonth(index) {
      const currentDate = new Date();
      currentDate.setMonth(currentDate.getMonth() + 1);
      const month = currentDate.getMonth();
      const year = currentDate.getFullYear();
      const calendar = document.querySelectorAll('.calendar')[index];
      renderCalendar(calendar, month, year, index);
    }
</script> -->
<script>
    // Define selectDate globally
function formatDate(date) {
  const day = date.getDate().toString().padStart(2, '0');
  const month = (date.getMonth() + 1).toString().padStart(2, '0');
  const year = date.getFullYear();
  return `${day}/${month}/${year}`;
}
function selectDate(date, index,monthx,yearx) {
      // console.log(date);
      // const currentDate = new Date();
      // const selectedDateObj = new Date(currentDate.getFullYear(), currentDate.getMonth(), date);
      // if (selectedDateObj >= new Date()) {
      //   const dateInput = document.querySelectorAll('.dateInput')[index];
      //   const calendar = dateInput.nextElementSibling;
      //   const month = currentDate.getMonth();
      //   const year = currentDate.getFullYear();
      //   // dateInput.value = selectedDateObj.toLocaleDateString();
      //   dateInput.value = formatDate(selectedDateObj);
      //   renderCalendar(calendar, month, year, index);
      //   calendar.classList.remove('show')
      // ======================================================
    //   const selectedDateObj = new Date(); // Get the current date object
    // selectedDateObj.setDate(date); // Set the selected day of the month

    // const dateInput = document.querySelectorAll('.dateInput')[index];
    // const calendar = dateInput.nextElementSibling;

    // const month = selectedDateObj.getMonth(); // Use the selected month
    // const year = selectedDateObj.getFullYear(); // Use the selected year

    // dateInput.value = formatDate(selectedDateObj); // Update the input field with the selected date
    // renderCalendar(calendar, month, year, index); // Render the calendar for the selected month
    // calendar.classList.remove('show'); // Hide the calendar
    // ============================================================
    const dateInput = document.querySelectorAll('.dateInput')[index];
    const calendar = dateInput.nextElementSibling;

    const currentDate = new Date(); // Get the current date object
    const selectedDateObj = new Date(currentDate.getFullYear(), currentDate.getMonth(), date); // Create the selected date object

    const month = selectedDateObj.getMonth(); // Extract the month from the selected date
    const year = selectedDateObj.getFullYear(); // Extract the year from the selected date

    // dateInput.value = formatDate(selectedDateObj); // Update the input field with the selected date
    dateInput.value = (date+'/'+(monthx+1)+'/'+yearx).toString(); // Update the input field with the selected date
    // dateObj = JSON.parse(dateObj)
    // console.log(date+'/'+(monthx+1)+'/'+yearx,);
    renderCalendar(calendar, month, year, index); // Render the calendar for the selected month
    calendar.classList.remove('show'); 
    }

    // Initialize all date pickers
    document.querySelectorAll('.date-picker').forEach((picker, index) => {
      const dateInput = picker.querySelector('.dateInput');

      dateInput.addEventListener('click', (event) => {
        event.stopPropagation();
        const calendar = dateInput.nextElementSibling;
        calendar.classList.toggle('show');
        const currentDate = new Date();
        const month = currentDate.getMonth();
        const year = currentDate.getFullYear();
        renderCalendar(calendar, month, year, index);
      });
  });

function renderCalendar(calendar, month, year, index) {
      // console.log(index);
      const firstDay = new Date(year, month, 1).getDay();
      const lastDay = new Date(year, month + 1, 0).getDate();

      let calendarHTML = `
        <div class="header">
          <span class="prev" onclick="prevMonth(${index})">&#8249;</span>
          <span class="month-year">${new Date(year, month).toLocaleString('default', { month: 'long', year: 'numeric' })}</span>
          <span class="next" onclick="nextMonth(${index})">&#8250;</span>
        </div>
        <div class="days">
      `;

      // Add weekday names
      calendarHTML += '<div class="week">';
      const weekdayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
      for (let i = 0; i < 7; i++) {
        calendarHTML += `<span>${weekdayNames[i]}</span>`;
      }
      calendarHTML += '</div>';

      // Add date cells
      let date = 1;
      for (let i = 0; i < 6; i++) {
        calendarHTML += '<div class="week">';
        for (let j = 0; j < 7; j++) {
          if (i === 0 && j < firstDay) {
            calendarHTML += '<span></span>';
          } else if (date > lastDay) {
            calendarHTML += '<span></span>';
          } else {
            const cellDate = new Date(year, month, date);
            // console.log(date,month+1,year); 
            const isDisabled = cellDate < new Date();
            const isSelected = cellDate.toDateString() === new Date().toDateString();
            calendarHTML += `<span class="${isDisabled ? 'disabled' : ''} ${isSelected ? 'selected' : ''}" onclick="${isDisabled ? '' : `selectDate(${date}, ${index},${month},${year})`}">${date}</span>`;
            date++;
          }
        }
        calendarHTML += '</div>';
      }

      calendarHTML += '</div>';
      calendar.innerHTML = calendarHTML;
    }

    // function prevMonth(index) {
    //   const currentDate = new Date();
    //   currentDate.setMonth(currentDate.getMonth() - 1);
    //   const month = currentDate.getMonth();
    //   const year = currentDate.getFullYear();
    //   const calendar = document.querySelectorAll('.calendar')[index];
    //   renderCalendar(calendar, month, year, index - 1);
    // }
function prevMonth(index) {
  const calendar = document.querySelectorAll('.calendar')[index];
  const monthYearElement = calendar.querySelector('.month-year');
  let { month, year } = getCalendarMonthYear(monthYearElement.textContent);
  month--;
  if (month < 0) {
    month = 11;
    year--;
  }
  renderCalendar(calendar, month, year, index);
}
function getCalendarMonthYear(monthYearString) {
  const [month, year] = monthYearString.split(' ');
  return { month: new Date(Date.parse(month + ' 1, 2000')).getMonth(), year: parseInt(year) };
}
function nextMonth(index) {
  const calendar = document.querySelectorAll('.calendar')[index];
  const monthYearElement = calendar.querySelector('.month-year');
  let { month, year } = getCalendarMonthYear(monthYearElement.textContent);
  month++;
  if (month > 11) {
    month = 0;
    year++;
  }
  renderCalendar(calendar, month, year, index);
}

    // function nextMonth(index) {
    //   const currentDate = new Date();
    //   currentDate.setMonth(currentDate.getMonth() + 1);
    //   const month = currentDate.getMonth();
    //   const year = currentDate.getFullYear();
    //   const calendar = document.querySelectorAll('.calendar')[index];
    //   renderCalendar(calendar, month, year, index + 1);
    // }
</script>