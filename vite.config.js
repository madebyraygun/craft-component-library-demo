import { defineConfig, loadEnv } from 'vite'
import ViteRestart from 'vite-plugin-restart'
import autoprefixer from 'autoprefixer'
import path from 'path'

function resolvePath(str) {
  return path.resolve(__dirname, str)
}

export default defineConfig(({ command, mode }) => {
  const isDev = mode === 'development'
  return {
    base: isDev ? '' : '/dist',
    build: {
      minify: isDev ? false : 'terser',
      copyPublicDir: true,
      emptyOutDir: true,
      manifest: true,
      outDir: './web/dist',
      rollupOptions: {
        input: {
          app: './src/app.js',
        }
      },
      sourcemap: isDev,
    },
    publicDir: 'src/static',
    plugins: [
      ViteRestart({
        reload: [
          'templates/**/*.{twig}',
          'library/**/*.{twig,php,json}',
        ]
      }),
    ],
    css: {
      postcss: {
        plugins: [
          autoprefixer()
        ]
      }
    },
    resolve: {
      alias: {
        '@src': resolvePath('./src'),
        '@css': resolvePath('./src/css'),
        '@assets': resolvePath('./src/assets'),
        '@lib': resolvePath('./library'),
        '@vendor': resolvePath('./node_modules'),
      },
    },
    define: {
      global: 'window',
    },
    server: {
      origin: `${process.env.DDEV_PRIMARY_URL}:8080`,
      port: 8080,
      host: '0.0.0.0',
      strictPort: true,
      watch: {
        usePolling: true,
        ignored: [
          './storage/**',
          './config/**',
          './vendor/**',
          './web/**',
          './.ddev/**',
          './.git/**',
        ]
      }
    }
  }
})
