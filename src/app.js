if (import.meta.hot) import.meta.hot.accept(() => console.log("HMR Enabled"));
import '@css/reset.css'
import '@css/vars.css'
import.meta.glob([
  '@lib/**/*.css',
  '@lib/**/*.js',
], {
  eager: true
})

document.body.classList.remove('no-js')
document.body.classList.add('js')
console.log('js loaded')
