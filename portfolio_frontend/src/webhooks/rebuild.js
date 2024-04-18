import express from 'express';
import { exec } from 'child_process';

const HOSTNAME = '0.0.0.0';
const PORT = 3000;

const SERVER_START_MSG = 'Server running on port 3000';
const REBUILD_MSG = 'rebuild successful';
const ERROR_MSG = 'Error: ';

const app = express();

app.post('/rebuild', (_, res) => {
  exec('pnpm astro build', (err, _, stderr) => {
    const error = err || stderr;

    if (error) {
      console.log(`${ERROR_MSG}${error.message}`);
      return;
    }

    console.log(REBUILD_MSG);
  });

  res.status(200).send();
});

app.listen(PORT, HOSTNAME, () => console.log(SERVER_START_MSG));
