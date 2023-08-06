"use strict"

$.fn.datepicker.dates['en'] = {
  days: ["Неділя", "Понеділок", "Вівторок", "Середа", "Четвер", "П'ятниця", "Субота"],
  daysShort: ["Нед", "Пон", "Вів", "Сер", "Чет", "П'ят", "Суб"],
  daysMin: ["Нд", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"],
  months: ["Січень", "Лютий", "Березень", "Квітень", "Травень", "Червень", "Липень", "Серпень", "Вересень", "Жовтень", "Листопад", "Грудень"],
  monthsShort: ["Січ", "Лют", "Бер", "Кві", "Тра", "Чер", "Лип", "Сер", "Вер", "Жов", "Лис", "Гру"],
  today: "Сьогодні",
  clear: "Clear",
  format: "mm/dd/yyyy",
  titleFormat: "MM yyyy",
  weekStart: 0
};

$(function () {
  $('#datepicker').datepicker();
});

$(function () {
  $('#datepicker-2').datepicker();
});

console.log(roomPrices);

// Function to get the day of the year from a given date
function getDayofYear(date) {
  const now = new Date(date);
  const start = new Date(now.getFullYear(), 0, 0);
  const diff = (now - start) + ((start.getTimezoneOffset() - now.getTimezoneOffset()) * 60 * 1000);
  const oneDay = 1000 * 60 * 60 * 24;
  return Math.floor(diff / oneDay);
}

// Function to generate an array of consecutive days starting from a given day
function generateSegmentArray(startDay, numDays) {
  const firstDate = new Date(2023, 5, 1);
  const firstDay = getDayofYear(firstDate) + startDay;
  const segmentArray = [];

  for (let i = 0; i < numDays; i++) {
    segmentArray.push(firstDay + i);
  }

  return segmentArray;
}

// Object to store the data for each day in each segment
const dataObjects = {};

// Array representing the number of days in each segment
const segmentConfig = [14, 11, 67, 30];

// Loop through each segment and populate dataObjects with prices for each day
segmentConfig.forEach((numDays, index) => {
  // Calculate the starting day for the current segment
  const startDay = index === 0 ? 0 : segmentConfig.slice(0, index).reduce((acc, val) => acc + val, 0);
  // Generate an array of days for the current segment
  const days = generateSegmentArray(startDay, numDays);
  // Get the prices for the current segment
  const prices = roomPrices[0];

  // Assign prices to each day in the segment
  days.forEach((day) => {
    dataObjects[day] = prices[`price_segment${index + 1}`];
  });
});

let singleCheckIn = document.querySelector('#check-in');
let singleCheckOut = document.querySelector('#check-out');
let singlePrice = document.querySelector('#price');
let singleNigts = document.querySelector('#nights');
    
    if (singleCheckOut.dataset.key == 2) {

      const singleKeys = Object.keys(dataObjects);      

        $('#check-out').change(function () {
            let valueIn = singleCheckIn.value;
            let valueOut = singleCheckOut.value;

            let valueInArr = valueIn.split('/');
            let valueOutArr = valueOut.split('/');

            let date = new Date(valueInArr[2], valueInArr[0] - 1, valueInArr[1]);
            let date2 = new Date(valueOutArr[2], valueOutArr[0] - 1, valueOutArr[1]);

            let dayOfYearIn = getDayofYear(date);
            let dayOfYearOut = getDayofYear(date2);
            let sumOfDays = dayOfYearOut - dayOfYearIn;

            function getSumPrice(arr) {
                let sumPrice = 0;
                for (let i = 0; i < sumOfDays; i++) {
                    let elem = dayOfYearIn + i;
                    sumPrice = sumPrice + Number(arr[elem]);
                };
                return sumPrice;
            };

            const dayOfYearInStr = String(dayOfYearIn);
            const dayOfYearOutStr = String(dayOfYearOut);

            if (singleKeys.includes(dayOfYearInStr) && singleKeys.includes(dayOfYearOutStr)) {  
              singlePrice.classList.remove('fade-in');              
              singlePrice.textContent = getSumPrice(dataObjects);
              void singlePrice.offsetWidth;
              singlePrice.classList.add('fade-in');

              singleNigts.classList.remove('fade-in');
              singleNigts.textContent = '   ' + '(' + sumOfDays + ' ночей)';
              void singleNigts.offsetWidth;
              singleNigts.classList.add('fade-in');
            }
            else {
                singlePrice.classList.remove('fade-in');
                singlePrice.textContent = 'Введіть дату з червня по вересень';
                void singlePrice.offsetWidth;
                singlePrice.classList.add('fade-in');

                singleNigts.classList.remove('fade-in');
                singleNigts.textContent = '';
                void singleNigts.offsetWidth;
                singleNigts.classList.add('fade-in');
            };
        });
    };







  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  