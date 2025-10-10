import { defineConfig } from '@playwright/test';

export default defineConfig({
  testDir: 'tests',
  reporter: [['list'], ['html', { outputFolder: 'tests/.report' }]],
  timeout: 60_000,
  use: {
    baseURL: 'http://localhost:8000',
    viewport: { width: 1440, height: 900 },
    ignoreHTTPSErrors: true,
  },
});
