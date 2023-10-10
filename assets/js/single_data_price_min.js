"use strict";function getDayofYear(e){var t,i=new Date(e),n=new Date(i.getFullYear(),0,0);return Math.floor((i-n+(n.getTimezoneOffset()-i.getTimezoneOffset())*6e4)/864e5)}function generateSegmentArray(e,t){for(var i=new Date(2023,5,1),n=getDayofYear(i)+e,s=[],a=0;a<t;a++)s.push(n+a);return s}$.fn.datepicker.dates.en={days:["Неділя","Понеділок","Вівторок","Середа","Четвер","П'ятниця","Субота"],daysShort:["Нед","Пон","Вів","Сер","Чет","П'ят","Суб"],daysMin:["Нд","Пн","Вт","Ср","Чт","Пт","Сб"],months:["Січень","Лютий","Березень","Квітень","Травень","Червень","Липень","Серпень","Вересень","Жовтень","Листопад","Грудень"],monthsShort:["Січ","Лют","Бер","Кві","Тра","Чер","Лип","Сер","Вер","Жов","Лис","Гру"],today:"Сьогодні",clear:"Clear",format:"mm/dd/yyyy",titleFormat:"MM yyyy",weekStart:0},$(function(){$("#datepicker").datepicker()}),$(function(){$("#datepicker-2").datepicker()}),console.log(roomPrices);var dataObjects={},segmentConfig=[14,11,67,30];segmentConfig.forEach(function(e,t){var i=0===t?0:segmentConfig.slice(0,t).reduce(function(e,t){return e+t},0),n=generateSegmentArray(i,e),s=roomPrices[0];n.forEach(function(e){dataObjects[e]=s["price_segment".concat(t+1)]})});var singleCheckIn=document.querySelector("#check-in"),singleCheckOut=document.querySelector("#check-out"),singlePrice=document.querySelector("#price"),singleNigts=document.querySelector("#nights");if(2==singleCheckOut.dataset.key){var e=Object.keys(dataObjects);$("#check-out").change(function(){var t=singleCheckIn.value,i=singleCheckOut.value,n=t.split("/"),s=i.split("/"),a=new Date(n[2],n[0]-1,n[1]),r=new Date(s[2],s[0]-1,s[1]),c=getDayofYear(a),g=getDayofYear(r),o=g-c,l=String(c),f=String(g);e.includes(l)&&e.includes(f)?(singlePrice.classList.remove("fade-in"),singlePrice.textContent=function e(t){for(var i=0,n=0;n<o;n++)i+=Number(t[c+n]);return i}(dataObjects),singlePrice.offsetWidth,singlePrice.classList.add("fade-in"),singleNigts.classList.remove("fade-in"),singleNigts.textContent="   ("+o+" ночей)",singleNigts.offsetWidth,singleNigts.classList.add("fade-in")):(singlePrice.classList.remove("fade-in"),singlePrice.textContent="Введіть дату з червня по вересень",singlePrice.offsetWidth,singlePrice.classList.add("fade-in"),singleNigts.classList.remove("fade-in"),singleNigts.textContent="",singleNigts.offsetWidth,singleNigts.classList.add("fade-in"))})}