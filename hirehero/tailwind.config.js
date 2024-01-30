/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/views/**/**/*.blade.php',
  ],
  theme: {
    screens: {
      sm:'480px',
        md:'768px',
        lg:'976px',
        xl:'1440px'
    },
    extend: {
      fontFamily: {
        'epilogue': ['Epilogue', 'sans-serif']  
      },
      fontWeight: {
        'bolder' : '700'

      },
      colors: {
        darkBlue: "#97CAF9",
        lightBlue:"#C4E4F7",
        purple: "#9080FC",
        orange: "#FFDAB9",
        green: "#18DAC3",
        red: "#FA8072",
        black: "#111111",
        white: "#F3EFEF"
      },
    },
  },
  plugins: [],
}

