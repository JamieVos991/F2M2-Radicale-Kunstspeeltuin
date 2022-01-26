'use strict'
const chprocess = require('child_process')
function StartPCycle () {
  console.log('Initializing RGB')
  const workerProcess = chprocess.spawn('node', ['app.js'])
  workerProcess.stdout.on('data', function (data) {
    console.log(data.toString())
  })
  workerProcess.stderr.on('data', function (data) {
    console.log(data.toString())
  })
  workerProcess.on('close', function (code) {
    console.log('RGB process exited with code ' + code)
    if (code === 0) {
      setTimeout(() => {
        StartPCycle()
      }, 100)
    } else {
      process.exit()
    }
  })
}

StartPCycle()
