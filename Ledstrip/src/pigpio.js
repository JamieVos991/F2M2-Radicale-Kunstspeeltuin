
// Pigpio Library

'use strict'
const logger = require('./logger.js')
const Pio = require('./gpio.js')
const Device = require('./devices.js').Light
// load config file
const fs = require('fs')
const configfile = fs.readFileSync('config.json')
const config = JSON.parse(configfile)

const devices = require('./loader.js')

class Rpi extends Device {
  fadeTimer (colors) {
    let i = 1
    const steps = this.getfade(colors)
    this.playFade(steps[0])
    this.cycle.timer = setInterval(() => {
      if (this.cycle.ison === false) {
        clearInterval(this.cycle.timer)
        return
      }

      this.playFade(steps[i])

      i++

      if (i === Object.keys(steps).length) {
        logger.debug('finished a circle!!')
        i = 1
      }
    }, this.cycle.speed)
  }

  playFade (colors) {
    for (let i = 0; i < colors.length; i++) {
      (i => {
        setTimeout(() => {
          if (this.cycle.ison === false) {
            clearInterval(this.cycle.timer)
            return
          }
          this.color = colors[i]
        }, 10 * i)
      })(i)
    }
  }

  fade (colors) {
    let i = 0
    clearInterval(this.fadeonetimer)
    this.fadeonetimer = setInterval(() => {
      if ((i === colors.length) || (i > colors.length)) {
        clearInterval(this.fadeonetimer)
        return
      }
      this.color = colors[i]
      i++
    }, 1)
  }
}
// creates light device from config file
function createpinsfromconfig () {
  let i = 0
  config.gpio.forEach(int => {
    devices.add(
      new Rpi(
        String(Object.keys(int)),
        'local-' + i,
        'RPi',
        new Pio(int),
        'black',
        'white'
      )
    )
    i++
  })
}

createpinsfromconfig()
