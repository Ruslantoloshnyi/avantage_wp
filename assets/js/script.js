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

const luxTwo = { '1': '1000', '2': '1000', '3': '1000', '4': '1000', '5': '1000', '6': '1000', '7': '1000', '8': '1000', '9': '1000', '10': '1000' };
const comfortTwo = { '1': '2000', '2': '1000', '3': '1000', '4': '1000', '5': '1000', '6': '1000', '7': '1000', '8': '1000', '9': '1000', '10': '1000' };
const luxThree = { '1': '3000', '2': '1000', '3': '1000', '4': '1000', '5': '1000', '6': '1000', '7': '1000', '8': '1000', '9': '1000', '10': '1000' };
const comfortThree = { '1': '4000', '2': '1000', '3': '1000', '4': '1000', '5': '1000', '6': '1000', '7': '1000', '8': '1000', '9': '1000', '10': '1000' };
const luxFour = { '1': '5000', '2': '1000', '3': '1000', '4': '1000', '5': '1000', '6': '1000', '7': '1000', '8': '1000', '9': '1000', '10': '1000' };
const luxFourTwo = { '1': '6000', '2': '1000', '3': '1000', '4': '1000', '5': '1000', '6': '1000', '7': '1000', '8': '1000', '9': '1000', '10': '1000' };

function getDayofYear(date) {
    let now = new Date(date);
    const start = new Date(now.getFullYear(), 0, 0);
    const diff = (now - start) + ((start.getTimezoneOffset() - now.getTimezoneOffset()) * 60 * 1000);
    const oneDay = 1000 * 60 * 60 * 24;
    const day = Math.floor(diff / oneDay);
    return day;
};

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
                return sumPrice;
            };

            const dayOfYearInStr = String(dayOfYearIn);
            const dayOfYearOutStr = String(dayOfYearOut);

            if (keys.includes(dayOfYearInStr) && keys.includes(dayOfYearOutStr)) {

                for (let elem2 of carouselItems) {
                    if (elem2.classList.contains('active')) {
                        if (elem2.dataset.key == 1) {
                            price.textContent = getSumPrice(luxTwo);
                            nigts.textContent = '   ' + sumOfDays + '(ночей)';
                        }
                        else if (elem2.dataset.key == 2) {
                            price.textContent = getSumPrice(comfortTwo);
                            nigts.textContent = '   ' + sumOfDays + '(ночей)';
                        }
                        else if (elem2.dataset.key == 3) {
                            price.textContent = getSumPrice(luxThree);
                            nigts.textContent = '   ' + sumOfDays + '(ночей)';
                        }
                        else if (elem2.dataset.key == 4) {
                            price.textContent = getSumPrice(comfortThree);
                            nigts.textContent = '   ' + sumOfDays + '(ночей)';
                        }
                        else if (elem2.dataset.key == 5) {
                            price.textContent = getSumPrice(luxFour);
                            nigts.textContent = '   ' + sumOfDays + '(ночей)';
                        }
                        else if (elem2.dataset.key == 6) {
                            price.textContent = getSumPrice(luxFourTwo);
                            nigts.textContent = '   ' + sumOfDays + '(ночей)';
                        }
                    };
                };
            }
            else {
                price.textContent = 'Введіть дату з червня по вересень';
                nigts.textContent = '';
            };
        });
    };

    if (checkOut.dataset.key == 'zoom-room') {
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
                return sumPrice;
            };

            const dayOfYearInStr = String(dayOfYearIn);
            const dayOfYearOutStr = String(dayOfYearOut);

            if (keys.includes(dayOfYearInStr) && keys.includes(dayOfYearOutStr)) {
                price.textContent = getSumPrice(luxFourTwo);
                nigts.textContent = '   ' + sumOfDays + '(ночей)';
            }
            else {
                price.textContent = 'Введіть дату з червня по вересень';
                nigts.textContent = '';
            };
        });
    };
});





