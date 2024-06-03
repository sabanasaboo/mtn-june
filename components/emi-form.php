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
  <div class="widget-bg booking-form-wrap">
                              <h4 class="bg-title">Booking</h4>
<form class="booking-form"  id="emiform1">
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <input name="name_booking" type="text" placeholder="Full Name" required>
            </div>
        </div>
    </div>
    <!-- Gender -->
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-sm-6" style="padding:0 15px;">
            <div class="">
                <input name="gender" type="radio" value="Male" required>
                <label for="gender" style="margin: 0;">Male</label>
            </div>
        </div>
        <div class="col-sm-6" style="padding:0 15px;">
            <div class="">
                <input name="gender" type="radio" value="Female" required>
                <label for="gender" style="margin: 0;">Female</label>
            </div>
        </div>
    </div>
    <!-- Email, Phone, Address -->
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <input name="email_booking" type="text" placeholder="Email" required>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <input name="phone_booking" type="text" placeholder="Mobile Number" required>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <input name="Address" type="text" placeholder="Enter Your Address" required>
            </div>
        </div>
    </div>
    <!-- Date, Age -->
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <!-- <input class="input-date-picker" type="text" name="date" autocomplete="off" readonly="readonly" placeholder="Date" required> -->
                <div class="date-picker" style="width:100%">
    <input type="text" id="dateInput" class="label dateInput" placeholder="Date" name="date"  required>
    <div class="calendar" id="calendar"></div>
  </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input name="age" type="text" placeholder="Enter Your Age" required>
            </div>
        </div>
    </div>
    <!-- Martial Status -->
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-sm-6" style="padding:0 15px;">
            <div class="">
                <input name="martialStatus" type="radio" value="Married" required>
                <label for="martialStatus" style="margin: 0;">Married</label>
            </div>
        </div>
        <div class="col-sm-6" style="padding:0 15px;">
            <div class="">
                <input name="martialStatus" type="radio" value="Unmarried" required>
                <label for="martialStatus" style="margin: 0;">Unmarried</label>
            </div>
        </div>
    </div>
    <!-- EMI Package, EMI Amount, EMI Months -->
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <select id="emi-fromLocation" name="location" class="form-control rounded-0" style="box-shadow: none;" required>
                    <option value="">Select Your EMI Packages</option>
                    <option value="Ooty & Mysore 3 Nights 4 Days">Ooty & Mysore 3 Nights 4 Days</option>
                    <option value="Åland Islands">Vagamon & Thekkady 3 Nights 4 Days</option>
                    <option value="Albania">Munnar, Thekkady, Alleppey 4 Nights 5 Days
                                                </option>
                                                   <option value="Algeria">Delhi & Agra 4 Nights 5 Days
                                                </option>
                                                <option value="Åland Islands"> Shimla & Manali 4 Nights 5 Days
                                                </option>
                                                   <option value="Albania">Sikkim 4 Nights 5 Days
                                                </option>
                                                   <option value="Algeria">Goa 3 Nights 4 Days
                                                </option>
                </select>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <input name="emiAmount" type="text" placeholder="EMI Amount" required>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <input name="emiMonths" type="text" placeholder="Total Months EMI" required>
            </div>
        </div>
    </div>
    <!-- Payment Method -->
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-sm-4" style="padding:0 15px;">
            <div class="">
                <input name="payment" type="radio" value="Cash" required>
                <label for="payment" style="margin: 0;">Cash</label>
            </div>
        </div>
        <div class="col-sm-4" style="padding:0 15px;">
            <div class="">
                <input name="payment" type="radio" value="NetBanking" required>
                <label for="payment" style="margin: 0;">NetBanking</label>
            </div>
        </div>
        <div class="col-sm-4" style="padding:0 0 0 15px;">
            <div class="">
                <input name="payment" type="radio" value="UPI" required>
                <label for="payment" style="margin: 0;">UPI</label>
            </div>
        </div>
    </div>
    <!-- Referral Person Name, Referral Person Phone -->
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <input name="refPersonName" type="text" placeholder="REF.Person Name" >
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input name="refPersonPhone" type="text" placeholder="REF. Person Phone No">
            </div>
        </div>
    </div>
    <!-- Submit Button -->
    <div class="row">
        <div class="col-sm-12">
            <div class="submit-btn">
                <input type="submit" name="submit" value="Book Now" id="submit-btn">
               
                <?php 
                // echo '<p style="color: green;">Message sent successfully</p>';

                ?>
            </div>
        </div>
    </div>
</form>
</div>

                           <script>
                     $(document).ready(function(){
                        $('#emiform1').submit(function(e){
                              e.preventDefault();
                              const formData = new FormData(this);
                            const formObject = Object.fromEntries(formData.entries());

                            console.log(formObject);

                            let numreg = /^(0|[1-9]\d*)$/
                            if(formObject.name_booking.length<5){
                                validate  = false;
                                alert("Please enter a valid name minimum 5 letter");
                            }
                           else if(!numreg.test(formObject.phone_booking)||formObject.phone_booking.length!==10){
                                validate  = false
                                console.log('1')
                                alert('Please fill all valid 10 digit phone number');
                            }
                            else if(!numreg.test(formObject.age)){
                                validate = false;
                                alert('Invalid age entered')
                            }
                            // else if(!numreg.test(formObject.adult)){
                            //     validate  = false
                            //     console.log('2');
                            //     alert ("adult in number")
                            // }
                            // else if(formObject.location)
                            else if(!numreg.test(formObject.emiMonths)){
                                validate  = false
                                console.log('5');
                                alert ("Enter Emi Months in number")
                            }
                            else if(!numreg.test(formObject.emiAmount)){
                                validate  = false
                                console.log('6');
                                alert ("Enter Emi Amount in number")
                            }
                            else if(!numreg.test(formObject.refPersonPhone)){
                                validate  = false
                                console.log('7');
                                alert ("Enter Reference Person  Phone Number in number")
                            }
                            
                            else{
                                validate = true
                            }
                              // Get form data
                            //   var formData = $(this).serialize();

                              // Send form data using Axios to submit.php
                            //   axios.post('phpform/emiform.php', formData)
                            // console.log(formData);
                            if(validate){
                                let subBtn = document.getElementById('submit-btn');
                            subBtn.value = 'sending....'
                            axios.post('https://mtn-wldj.onrender.com/mtnsendEmail', formObject)
                                 .then(function (response) {
                                    console.log(response.data.data);
                                    if(response.data.data== 'success'){
                                        alert('Message sent successfully');
                                        let  a = document.getElementById("emiform1")
                                        subBtn.value = 'sended'
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