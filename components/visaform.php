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

<div class="container-visa" id="form-section">
                    <h1 class="visa-btn">Visa Booking Form</h1>
                    <form action="visa.php" method="post" class="form" id="form2" >
                     
                   
                        <div class="name field" id="name">
                            <label for="name">Name</label>
                            <input type="text" name="name" placeholder="Enter Name" required>
                        </div>
                        <!-- <div class="from-to">x -->
                         <div class="from field">
                            <label for="from">From</label>
                            <!-- <input type="date" placeholder="from" name="from"> -->
                            <select name="from" id="">
                                <option value="Choose">Choose</option>
                                <option value="dubai">Dubai</option>
                                <option value="indonesia">Indonesia</option>
                                <option value="maldive">Maldive</option>
                                <option value="malaysia">Malaysia</option>
                                <option value="india">India</option>
                                <option value="china">China</option>
                                <option value="Singapore">Singapore</option>
                                <!-- <option value="dubai">dubai</option> -->
                            </select>
                            
                        </div>
                        <div class="to field">
                            <label for="to">To</label>
                            <!-- <input type="date" placeholder="to" name="to"> -->
                            <select name="to" id="">
                                <option value="Choose">Choose</option>
                                <option value="dubai">Dubai</option>
                                <option value="indonesia">Indonesia</option>
                                <option value="maldive">Maldive</option>
                                <option value="malaysia">Malaysia</option>
                                <option value="india">India</option>
                                <option value="china">China</option>
                                <option value="Singapore">Singapore</option>
                                <!-- <option value="dubai">dubai</option> -->
                             </select>
                         </div>
                         <div class="select  field">
                            <label for="fav_language">Trip Way</label>
                            <div class="radio">
                            <input type="radio" id="single-trip"name="trip_type" value="single-trip" required>
                            <label for="single-trip">Single Trip</label>
                            <input type="radio" id="round-trip" name="trip_type" value="round-trip" required>
                            <label for="round-trip">Round Trip</label>
                            </div>
                            </div>
                         <div class="travel-date field">
                            <label for="travel-date">Travel Date</label>
                            <div class="date-picker">
    <input type="text" id="dateInput" class="label dateInput" placeholder="Travel Date" name="travel-date"  required style="width:100%">
    <div class="calendar" id="calendar"></div>
  </div>
                            <!-- <input type="text" class="label" id="datepicker" autocomplete="off" name="travel-date" 
                            placeholder="Travel Date"  required> -->
                            <!-- <input class="" type="text" name="s" autocomplete="off" readonly="readonly" placeholder="Date" id="dp1706076037774"> -->
                         </div>
                         <div class="round-date field" >
                            <label for="round-date">Round Date</label>
                            <div class="date-picker">
    <input type="text" id="round1" class="label dateInput" placeholder="Round Date" name="round-date"  style="width:100%">
    <div class="calendar" id="calendar"></div>
  </div>
                            <!-- <input type="text" class="label" id="round1" autocomplete="off" name="round-date" 
                            placeholder="Round Date" required> -->
                         </div>
                         <div class="no-adults field">
                               <label for="no-adults">No Adults</label>
                               <input type="number" placeholder="No Adults" name="no-adults" required>
                            </div>
                         <div class="no-kids field">
                               <label for="no-kids">No Kids</label>
                               <input type="number" placeholder="No Kids" name="no-kids" required>
                            </div>
                            <div class="no-infants field">
                                <label for="no-infants">No Infants</label>
                                <input type="number" placeholder="No Infants" name="no-infants" required>
                             </div>
                        <div class="visa-type field">
                            <label for="visa-type">Visa Type</label>
                            <select name="visatype" id="" >
                            <option value="Choose">Choose</option>
                               <option value="Employee">Employee</option>
                               <option value="Student">Student</option>
                               <option value="Tourist">Tourist</option>
                            </select>
                        </div>
                         <!-- <button  type="submit" placeholder="submit" name="submit"  class="btn-submit" id="click1">Submit</button> -->
                         <input type="submit" name="submit" value="submit" class="center btn-submit" id='submit-btn' >
                    </form>
                </div>
<script>
$(document).ready(function(){
    $('#form2').submit(function(e){
        e.preventDefault();
        const formData = new FormData(this);
        const formObject = Object.fromEntries(formData.entries());
        console.log(formObject);
        
        let validate = true; // Initialize the validation flag
        
        // Regular expression to match numeric values
        let numreg = /^(0|[1-9]\d*)$/;
        
        // Validate name length
        if(formObject.from=="Choose"||formObject.to==="Choose"){
            validate = false;
            console.log('4');
            alert("Select a valid Country ");
        }
        else if(formObject.from==formObject.to) { 
            validate = false;
            console.log('5');
            alert("Countries should be different in to or from");
        }
        else if(formObject.visatype=="Choose"){
            validate = false;
            console.log('4');
            alert("Select a valid visa type ");
        }
       else if(formObject.name.length < 5) {
            validate = false;
            console.log('4');
            alert("Name must be greater than 5 characters");
        }
        
        // If all validations pass, proceed with form submission
        if(validate) {
          let subBtn = document.getElementById('submit-btn');
                            subBtn.value = 'sending....'
            axios.post('https://mtn-wldj.onrender.com/mtnsendEmail', formObject)
            .then(function (response) {
                if(response.data.data == 'success') {
                  subBtn.value = 'sending...'
                    alert('Message sent successfully');
                    let a = document.getElementById("form2");
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