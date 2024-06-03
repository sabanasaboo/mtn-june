
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
<div class="card " style="max-width: 37rem; margin: auto; ">
                        <form   id="flightForm"  name="emailContact" class="mx-auto py-5 shadow p-5 ">
                          <h2 class=" text-center flight rale"  >Flight Booking Form</h2>
                              <br>

                              <!-- Email <input type="email" name="email" value=""> <br> -->

                              <div class="mb-3 ">
                                <input type="email" class="form-control rounded-0" name="email" placeholder="Enter your Email" required>
                            </div>
                             <div class="mb-3 ">
                                <input type="text" class="form-control rounded-0" name="name" placeholder="Enter your Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control rounded-0" name="phone" placeholder="Enter your Phone Number" required>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <select id="fromLocation" name="fromLocation" class="form-control rounded-0" required>
                                               <option value="">From location</option>
                                               <option value="Dubai">Dubai</option>
                                               <option value="Indonesia">Indonesia</option>
                                               <option value="Maldives">Maldives</option>
                                               <option value="Malaysia">Malaysia</option>
                                               <option value="India">India</option>
                                               <option value="China">China</option>
                                               <option value="Singapore">Singapore</option>
                                               <option value="Bali">Bali</option>
                                               <option value="Vietnam">Vietnam</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select id="toLocation" name="toLocation" class="form-control rounded-0" required>
                                        <option value="">To location</option>
                                        <option value="Dubai">Dubai</option>
                                               <option value="Indonesia">Indonesia</option>
                                               <option value="Maldives">Maldives</option>
                                               <option value="Malaysia">Malaysia</option>
                                               <option value="India">India</option>
                                               <option value="China">China</option>
                                               <option value="Singapore">Singapore</option>
                                               <option value="Bali">Bali</option>
                                               <option value="Vietnam">Vietnam</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="strip" id="singletrip" value="singletrip" required>
                                        <label class="form-check-label text-dark" for="singletrip">Single Trip</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="strip" id="roundtrip" value="RoundTrip"  required>
                                        <label class="form-check-label text-dark" for="roundtrip">Round Trip</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                <div class="date-picker">
    <input type="text" id="dateInput" class="form-control rounded-0 dateInput" placeholder="From date" name="travel-date"  required>
    <div class="calendar" id="calendar"></div>
  </div>
                                    <!-- <input type="text" class="input-date-picker form-control rounded-0" id="fromDate" name="fromDate" placeholder="From date" required > -->
                                </div>
                                <div class="col">
                                <div class="date-picker">
    <input type="text" id="toDate" class="form-control rounded-0 dateInput" placeholder="To date" name="travel-date"  required>
    <div class="calendar" id="calendar"></div>
  </div>
                                    <!-- <input type="text" class=" input-date-picker form-control rounded-0" id="toDate" name="toDate" placeholder="To date" required> -->
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text" class="form-control rounded-0" id="adults" placeholder="Adults" name="adults" required>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control rounded-0" id="child" placeholder="Child" name="child" required>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control rounded-0" id="infant" placeholder="Infant (0-2 yrs)" name="infant" required>
                                </div>
                            </div><br>
                            <div class="text-center">
                                <button type="submit " class="btn btn-danger rounded-0 sbutton" name="send" value="Submit" id='submit-btn'>Submit</button> 
                                
                            </div>
                        </form>
                    </div>


                    <script>
                     $(document).ready(function(){
                        $('#flightForm').submit(function(e){
                              e.preventDefault();

                              const formData = new FormData(this);
                            const formObject = Object.fromEntries(formData.entries());

                            console.log(formObject);
                            let numreg = /^(0|[1-9]\d*)$/

                            if(formObject.name.length<5){
                                console.log('3');
                                validate  = false
                                alert ("Name must be minimum 5 alphabet")
                            }
                            else  if(!numreg.test(formObject.phone)){
                                validate  = false;
                                alert("Phone number is not valid");
                            }
                            else if(formObject.phone.length!==10){
                                validate  = false;
                                alert ("Mobile  number should be of 10 digits");
                            }
                            else if(formObject.fromLocation===formObject.toLocation){
                                validate=false;
                                alert("From and To location can't be the same");
                            }
                            // else if(){}
                            else if(!numreg.test(formObject.child)){
                                validate  = false
                                console.log('1');
                                alert ("child in number")
                            }
                            else if(!numreg.test(formObject.adults)){
                                validate  = false
                                console.log('2');
                                alert ("adults in number")
                            }
                            else if(!numreg.test(formObject.infant)){
                                validate  = false
                                console.log('4');
                                alert ("Infant in Number")
                            }
                            else if(!numreg.test(formObject.phone)){
                                validate  = false
                                console.log('4');
                                alert ("Enter Phone No in Number")
                            }
                            else{
                                validate = true
                            }
                              // Get form data
                            //   var formData = $(this).serialize();

                            //   // Send form data using Axios to submit.php
                            if(validate){
                              let subBtn = document.getElementById('submit-btn');
                            subBtn.innerText = 'sending....'
                            axios.post('https://mtn-wldj.onrender.com/mtnsendEmail', formObject)

                                 .then(function (response) {
                                    if(response.data.data == 'success'){
                                      subBtn.innerText = 'sended'
                                          alert('Message sent successfully');
                                          let  a = document.getElementById("flightForm")
                                          a.reset();
                                          setTimeout(() => {
                                            subBtn.innerText = 'Book Now'
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