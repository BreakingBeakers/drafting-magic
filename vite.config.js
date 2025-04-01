import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react'

// https://vite.dev/config/
export default defineConfig({
  base: '/drafting-magic/',
  plugins: [react()],
  server: {
    host: '192.168.1.109',
  }
})
