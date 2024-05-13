// @ts-ignore
import express from 'express';
// @ts-ignore
import { exec } from 'child_process';
import { type ErrorRegister } from '../types/error_register';
import lang from "../i18n/languageService";
import { saveError } from '../utils/save_error';

const HOSTNAME = '0.0.0.0';
const PORT = 3000;
const app = express();


// Endpoint to rebuild the project when database changes
app.post('/rebuild', (_, res) => {

  exec('pnpm astro build', (err, _, stderr) => {
    const error = err || stderr;

    // If an error occurs, save it
    if (error) {
      const error_msg: ErrorRegister = {
        title: lang.error.rebuild,
        message: error instanceof Error ? error.message : error,
        date: new Date()
      }

      saveError(error_msg);

      return;
    }
  });

  res.status(200).send();
});

app.listen(PORT, HOSTNAME);
