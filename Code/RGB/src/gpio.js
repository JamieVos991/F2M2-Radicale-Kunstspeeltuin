
// Pigpio is een library voor de Raspberry dat controle toelaat voor de Genral Purpose Input Outputs (GPIO)

// sudo apt-get update
// sudo apt-get install pigpio python-pigpio python3-pigpio


'use strict'
const Gpio = require('pigpio').Gpio
// creates an object that intracts with the RGB LED Strip
function Pio (int) {
  const led = String(Object.keys(int))
  const pin = {}
  let cmd = ''
  Object.keys(int[led]).forEach(function (item) {
    pin[item] = new Gpio(int[led][item], { mode: Gpio.OUTPUT })
    pin[item].digitalWrite(0)
    cmd += 'this.io.' + item + '.pwmWrite(' + item + ');'
  })
  this.type = led
  this.io = pin
  this.set = new Function(String(Object.keys(int[led])), cmd)
}

module.exports = Pio
