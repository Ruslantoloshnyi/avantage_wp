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

function getDayofYear(date) {
    let now = new Date(date);
    const start = new Date(now.getFullYear(), 0, 0);
    const diff = (now - start) + ((start.getTimezoneOffset() - now.getTimezoneOffset()) * 60 * 1000);
    const oneDay = 1000 * 60 * 60 * 24;
    const day = Math.floor(diff / oneDay);
    return day;
};

function firstSegment(arrEmpty) {
    const firstDate = new Date(2023, 5, 1);
    const firstDay = getDayofYear(firstDate);

    for (let i = 0; i < 14; i++) {
        arrEmpty.push(firstDay + i);
    }
    return arrEmpty;
};

function secondSegment(arrEmpty) {
    const firstDate = new Date(2023, 5, 1);
    const firstDay = getDayofYear(firstDate) + 14;

    for (let i = 0; i < 11; i++) {
        arrEmpty.push(firstDay + i);
    }
    return arrEmpty;
};

function thirdSegment(arrEmpty) {
    const firstDate = new Date(2023, 5, 1);
    const firstDay = getDayofYear(firstDate) + 25;

    for (let i = 0; i < 67; i++) {
        arrEmpty.push(firstDay + i);
    }
    return arrEmpty;
};

function fourthSegment(arrEmpty) {
    const firstDate = new Date(2023, 5, 1);
    const firstDay = getDayofYear(firstDate) + 92;

    for (let i = 0; i < 30; i++) {
        arrEmpty.push(firstDay + i);
    }
    return arrEmpty;
};

let arrLuxTwoFirst = [];
let arrLuxTwoSecond = [];
let arrLuxTwoThird = [];
let arrLuxTwoFourth = [];

let arrComfortTwoFirst = [];
let arrComfortTwoSecond = [];
let arrComfortTwoThird = [];
let arrComfortTwoFourth = [];

let arrComfortThreeFirst = [];
let arrComfortThreeSecond = [];
let arrComfortThreeThird = [];
let arrComfortThreeFourth = [];

let arrLuxThreeFirst = [];
let arrLuxThreeSecond = [];
let arrLuxThreeThird = [];
let arrLuxThreeFourth = [];

let arrLuxFourFirst = [];
let arrLuxFourSecond = [];
let arrLuxFourThird = [];
let arrLuxFourFourth = [];

let arrLuxFourTwoFirst = [];
let arrLuxFourTwoSecond = [];
let arrLuxFourTwoThird = [];
let arrLuxFourTwoFourth = [];

firstSegment(arrLuxTwoFirst);
secondSegment(arrLuxTwoSecond);
thirdSegment(arrLuxTwoThird);
fourthSegment(arrLuxTwoFourth);

firstSegment(arrComfortTwoFirst);
secondSegment(arrComfortTwoSecond);
thirdSegment(arrComfortTwoThird);
fourthSegment(arrComfortTwoFourth);

firstSegment(arrComfortThreeFirst);
secondSegment(arrComfortThreeSecond);
thirdSegment(arrComfortThreeThird);
fourthSegment(arrComfortThreeFourth);

firstSegment(arrLuxThreeFirst);
secondSegment(arrLuxThreeSecond);
thirdSegment(arrLuxThreeThird);
fourthSegment(arrLuxThreeFourth);

firstSegment(arrLuxFourFirst);
secondSegment(arrLuxFourSecond);
thirdSegment(arrLuxFourThird);
fourthSegment(arrLuxFourFourth);

firstSegment(arrLuxFourTwoFirst);
secondSegment(arrLuxFourTwoSecond);
thirdSegment(arrLuxFourTwoThird);
fourthSegment(arrLuxFourTwoFourth);

let objLuxTwoFirst = {};
let objLuxTwoSecond = {};
let objLuxTwoThird = {};
let objLuxTwoFourth = {};

let objComfortTwoFirst = {};
let objComfortTwoSecond = {};
let objComfortTwoThird = {};
let objComfortTwoFourth = {};

let objComfortThreeFirst = {};
let objComfortThreeSecond = {};
let objComfortThreeThird = {};
let objComfortThreeFourth = {};

let objLuxThreeFirst = {};
let objLuxThreeSecond = {};
let objLuxThreeThird = {};
let objLuxThreeFourth = {};

let objLuxFourFirst = {};
let objLuxFourSecond = {};
let objLuxFourThird = {};
let objLuxFourFourth = {};

let objLuxFourTwoFirst = {};
let objLuxFourTwoSecond = {};
let objLuxFourTwoThird = {};
let objLuxFourTwoFourth = {};

for (let i = 0; i < arrLuxTwoFirst.length; i++) {
    objLuxTwoFirst[arrLuxTwoFirst[i]] = arrPrice[2];
};
for (let i = 0; i < arrComfortTwoFirst.length; i++) {
    objComfortTwoFirst[arrComfortTwoFirst[i]] = arrPrice[0];
};
for (let i = 0; i < arrComfortThreeFirst.length; i++) {
    objComfortThreeFirst[arrComfortThreeFirst[i]] = arrPrice[1];
};
for (let i = 0; i < arrLuxThreeFirst.length; i++) {
    objLuxThreeFirst[arrLuxThreeFirst[i]] = arrPrice[3];
};
for (let i = 0; i < arrLuxFourFirst.length; i++) {
    objLuxFourFirst[arrLuxFourFirst[i]] = arrPrice[4];
};
for (let i = 0; i < arrLuxFourTwoFirst.length; i++) {
    objLuxFourTwoFirst[arrLuxFourTwoFirst[i]] = arrPrice[5];
};

for (let i = 0; i < arrLuxTwoSecond.length; i++) {
    objLuxTwoSecond[arrLuxTwoSecond[i]] = arrPrice[8];
};
for (let i = 0; i < arrComfortTwoSecond.length; i++) {
    objComfortTwoSecond[arrComfortTwoSecond[i]] = arrPrice[6];
};
for (let i = 0; i < arrComfortThreeSecond.length; i++) {
    objComfortThreeSecond[arrComfortThreeSecond[i]] = arrPrice[7];
};
for (let i = 0; i < arrLuxThreeSecond.length; i++) {
    objLuxThreeSecond[arrLuxThreeSecond[i]] = arrPrice[9];
};
for (let i = 0; i < arrLuxFourSecond.length; i++) {
    objLuxFourSecond[arrLuxFourSecond[i]] = arrPrice[10];
};
for (let i = 0; i < arrLuxFourTwoSecond.length; i++) {
    objLuxFourTwoSecond[arrLuxFourTwoSecond[i]] = arrPrice[11];
};

for (let i = 0; i < arrLuxTwoThird.length; i++) {
    objLuxTwoThird[arrLuxTwoThird[i]] = arrPrice[14];
};
for (let i = 0; i < arrComfortTwoThird.length; i++) {
    objComfortTwoThird[arrComfortTwoThird[i]] = arrPrice[12];
};
for (let i = 0; i < arrComfortThreeThird.length; i++) {
    objComfortThreeThird[arrComfortThreeThird[i]] = arrPrice[13];
};
for (let i = 0; i < arrLuxThreeThird.length; i++) {
    objLuxThreeThird[arrLuxThreeThird[i]] = arrPrice[15];
};
for (let i = 0; i < arrLuxFourThird.length; i++) {
    objLuxFourThird[arrLuxFourThird[i]] = arrPrice[16];
};
for (let i = 0; i < arrLuxFourTwoThird.length; i++) {
    objLuxFourTwoThird[arrLuxFourTwoThird[i]] = arrPrice[17];
};

for (let i = 0; i < arrLuxTwoFourth.length; i++) {
    objLuxTwoFourth[arrLuxTwoFourth[i]] = arrPrice[20];
};
for (let i = 0; i < arrComfortTwoFourth.length; i++) {
    objComfortTwoFourth[arrComfortTwoFourth[i]] = arrPrice[18];
};
for (let i = 0; i < arrComfortThreeFourth.length; i++) {
    objComfortThreeFourth[arrComfortThreeFourth[i]] = arrPrice[19];
};
for (let i = 0; i < arrLuxThreeFourth.length; i++) {
    objLuxThreeFourth[arrLuxThreeFourth[i]] = arrPrice[21];
};
for (let i = 0; i < arrLuxFourFourth.length; i++) {
    objLuxFourFourth[arrLuxFourFourth[i]] = arrPrice[22];
};
for (let i = 0; i < arrLuxFourTwoFourth.length; i++) {
    objLuxFourTwoFourth[arrLuxFourTwoFourth[i]] = arrPrice[23];
};

const luxTwo = Object.assign(objLuxTwoFirst, objLuxTwoSecond, objLuxTwoThird, objLuxTwoFourth);
const comfortTwo = Object.assign(objComfortTwoFirst, objComfortTwoSecond, objComfortTwoThird, objComfortTwoFourth);
const comfortThree = Object.assign(objComfortThreeFirst, objComfortThreeSecond, objComfortThreeThird, objComfortThreeFourth);
const luxThree = Object.assign(objLuxThreeFirst, objLuxThreeSecond, objLuxThreeThird, objLuxThreeFourth);
const luxFour = Object.assign(objLuxFourFirst, objLuxFourSecond, objLuxFourThird, objLuxFourFourth);
const luxFourTwo = Object.assign(objLuxFourTwoFirst, objLuxFourTwoSecond, objLuxFourTwoThird, objLuxFourTwoFourth);

let checkIn = document.querySelector('#check-in');
let checkOut = document.querySelector('#check-out');
let price = document.querySelector('#price');
let nigts = document.querySelector('#nights');
let carouselItems = document.querySelectorAll('.carousel-item');

const keys = Object.keys(luxTwo);

$(document).ready(function () {
    $('#dp3').datepicker().on('changeDate', function (ev) {
        $('#check-out').change();
    });
    if (checkOut.dataset.key == 1) {

        $('#check-out').change(function () {

            let valueIn = checkIn.value;
            let valueOut = checkOut.value;

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
                return sumPrice + ' грн';
            };

            const dayOfYearInStr = String(dayOfYearIn);
            const dayOfYearOutStr = String(dayOfYearOut);            

            if (keys.includes(dayOfYearInStr) && keys.includes(dayOfYearOutStr)) {

                for (let elem2 of carouselItems) {
                    if (elem2.classList.contains('active')) {
                        if (elem2.dataset.key == 1) {
                            price.classList.remove('fade-in')
                            price.textContent = getSumPrice(luxTwo);
                            void price.offsetWidth;
                            price.classList.add('fade-in');
                            nigts.classList.remove('fade-in');
                            nigts.textContent = '   ' + '(' + sumOfDays + ' ночей)';
                            void nigts.offsetWidth;
                            nigts.classList.add('fade-in');
                        }
                        else if (elem2.dataset.key == 2) {
                            price.classList.remove('fade-in')
                            price.textContent = getSumPrice(comfortTwo);
                            void price.offsetWidth;
                            price.classList.add('fade-in');
                            nigts.classList.remove('fade-in');
                            nigts.textContent = '   ' + '(' + sumOfDays + ' ночей)';
                            void nigts.offsetWidth;
                            nigts.classList.add('fade-in');                           
                        }
                        else if (elem2.dataset.key == 3) {
                            price.classList.remove('fade-in')
                            price.textContent = getSumPrice(luxThree);
                            void price.offsetWidth;
                            price.classList.add('fade-in');
                            nigts.classList.remove('fade-in');
                            nigts.textContent = '   ' + '(' + sumOfDays + ' ночей)';
                            void nigts.offsetWidth;
                            nigts.classList.add('fade-in');                            
                        }
                        else if (elem2.dataset.key == 4) {
                            price.classList.remove('fade-in')
                            price.textContent = getSumPrice(comfortThree);
                            void price.offsetWidth;
                            price.classList.add('fade-in');
                            nigts.classList.remove('fade-in');
                            nigts.textContent = '   ' + '(' + sumOfDays + ' ночей)';
                            void nigts.offsetWidth;
                            nigts.classList.add('fade-in');                             
                        }
                        else if (elem2.dataset.key == 5) {
                            price.classList.remove('fade-in')
                            price.textContent = getSumPrice(luxFour);
                            void price.offsetWidth;
                            price.classList.add('fade-in');
                            nigts.classList.remove('fade-in');
                            nigts.textContent = '   ' + '(' + sumOfDays + ' ночей)';
                            void nigts.offsetWidth;
                            nigts.classList.add('fade-in');                            
                        }
                        else if (elem2.dataset.key == 6) {
                            price.classList.remove('fade-in');
                            price.textContent = getSumPrice(luxFourTwo);
                            void price.offsetWidth;
                            price.classList.add('fade-in');
                            nigts.classList.remove('fade-in');
                            nigts.textContent = '   ' + '(' + sumOfDays + ' ночей)';
                            void nigts.offsetWidth;
                            nigts.classList.add('fade-in');                           
                        }
                    };
                };
            }
            else {
                price.classList.remove('fade-in');
                price.textContent = 'Введіть дату з червня по вересень';
                void price.offsetWidth;
                price.classList.add('fade-in');
                nigts.classList.remove('fade-in');
                nigts.textContent = '';
                void nigts.offsetWidth;
                nigts.classList.add('fade-in');
            };
        });
    };
    
});

/* avantage weather */
const weatherBlock = document.querySelector('.weather');
const weatherCityName = document.querySelector('#city-name');
const weatherImage = document.querySelector('#weather-icon-img');
const weatherTemperature = document.querySelector('#temperature');
const weatherDiscription = document.querySelector('#weather-description');
const weatherFeelsLike = document.querySelector('#feels-like');
const weatherWind = document.querySelector('#wind');

async function loadWeather(e) {      

    const server = 'https://api.openweathermap.org/data/2.5/weather?lat=46.11&lon=32.28&lang=uk&units=metric&appid=e1d3e19cb41073246379146eba6389da';
    const response = await fetch(server, {
        method: 'GET',
    });
    const responseResult = await response.json();    
    if (response.ok) {
        getWeather(responseResult);
    } else {
        weatherBlock.innerHTML = responseResult.message;
    }
}

function getWeather(data) {
    weatherTemperature.textContent = Math.round(data.main.temp) + '°C'; 
    weatherImage.src = 'https://api.openweathermap.org/img/w/' + data.weather[0].icon;
    weatherDiscription.textContent = data.weather[0].description;
    weatherFeelsLike.textContent = Math.round(data.main.feels_like) + '°C';
    weatherWind.textContent = data.wind.speed + ' м/с'   
}

loadWeather();


