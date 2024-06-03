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
<?php
// $success = false; // Initialize success variable

// // Function to validate date format
// function validateDate($date, $format = 'Y-m-d') {
//     $d = DateTime::createFromFormat($format, $date);
//     return $d && $d->format($format) === $date;
// }
// ?>




<div class="cab-card shadow p-3 mb-5 bg-body rounded imgss" >
                  <div class="card " style="max-width: 37rem; margin: auto; ">
                  <form  id="cabform" name="emailContact" class="mx-auto py-5 shadow p-5 ">

                        <h1 class=" text-center   content"  style="font-size: 40px;">BOOK YOUR CAB</h1>
                            <br>
                            <div class="mb-3 ">
                              <input type="email" class="form-control rounded-0" name="email" placeholder="Enter your Email" required>
                          </div>
                          <div class="mb-3 ">
                              <input type="text" class="form-control rounded-0" name="name" placeholder="Enter your Name" required>
                          </div>
                         
                          <div class="row mb-3">
                              <div class="col">
                                  <input type="text" class="form-control rounded-0" id="age" placeholder="Pick up " name="pickup"  required>
                              </div>
                              <div class="col">
                                  <input type="text" class="form-control rounded-0" id="age" placeholder="Drop" name="drop"  required>
                              </div>

                          </div>
                          <div class="row mb-3">
                              <div class="col">
                                  <div class="form-check">
                                  <input class="form-check-input" type="radio" name="strip" id="singletrip" value="singletrip">
                                        <label class="form-check-label text-dark" for="singletrip">Single Trip</label>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="form-check">
                                       <input class="form-check-input" type="radio" name="strip" id="roundtrip" value="RoundTrip" >
                                        <label class="form-check-label text-dark" for="roundtrip">Round Trip</label>
                                  </div>
                              </div>
                          </div>
              
                          
                          <div class="row mb-3">
                              <div class="col">
                                  <!-- <input type="text" class="form-control rounded-0" id="fromDate" name="fromDate" placeholder="Pickup Date"> -->
                                  <div class="date-picker">
    <input type="text" id="" class="form-control rounded-0 label dateInput" style="background:#fff;"
    placeholder="Travel Date" name="check-out" readonly required>
    <div class="calendar" id="calendar"></div>
  </div>
                              </div>
                              
                              <div class="col">
                                  <input type="text" class="time-pickable form-control rounded-0 " placeholder="Pickup Time" >
                              </div> 
                              <div class="col">
                                  <!-- <input type="text" class="form-control rounded-0 input-date-picker" id="toDate" name="toDate" placeholder="Drop Date"> -->
                                  <div class="date-picker">
    <input type="text" id="dateInput" class="form-control rounded-0 dateInput"  style="background:#fff;"
    name="toDate" placeholder="Drop Date" readonly required>
    <div class="calendar" id="calendar"></div>
  </div>
              
                              </div>
                          </div>
                        
                          <div class="row mb-3">
                              <div class="col">
                                  <input type="text" inputmode="numeric" class="form-control rounded-0" id="age" placeholder="Adult " name="adult"  required>
                              </div>
                              <div class="col">
                                  <input type="text" inputmode="numeric" class="form-control rounded-0" id="age" placeholder="Child" name="child"  required>
                              </div>
                          </div>
                          <div class="row mb-3">
                              <div class="col">
                                  <select id="fromLocation" name="Location"  class="form-control rounded-0">
                                      <option value="">Select Cab Booking</option>
                                      <option value="4 Seater">4 Seater
                                      </option>
                                             <option value="7 Seater">7 Seater
                                          </option>
                                             <option value="12 Seater">12 Seater
                                          </option>
                                             <option value="14 Seater">14 Seater
                                          </option>
                                             
                                  </select>
                              </div>
                             
                          </div>
                         
              
                                    <br>
                          <div class="text-center">
                              <button type="submit " class="btn btn-danger rounded-0 sbutton" name="submit" value="Submit" id='submit-btn'>Submit</button>
                              
                          </div>
                      </form>
                      <?php
// Check if the form was successfully submitted
// if ($success) {
//     echo "success";
// }
// ?>
                  </div>
              </div>
              <script>
                     $(document).ready(function(){
                        $('#cabform').submit(function(e){
                            let validate;
                              e.preventDefault();
                              const formData = new FormData(this);
                            const formObject = Object.fromEntries(formData.entries());
                            console.log(formObject);
                            let numreg = /^(0|[1-9]\d*)$/
                            if(!numreg.test(formObject.child)){
                                validate  = false
                                console.log('1');
                                alert ("child in num")
                            }
                            else if(!numreg.test(formObject.adult)){
                                validate  = false
                                console.log('2');
                                alert ("adult in num")
                            }
                            else if(formObject.name.length<8){
                                console.log('3');
                                validate  = false
                                alert ("name must be greater that 7 alphabet")
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
                                          let  a = document.getElementById("cabform")
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
                        });
                     });
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
