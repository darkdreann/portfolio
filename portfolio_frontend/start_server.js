import express from 'express';
import { handler as ssrHandler } from './dist/server/entry.mjs';

const HOSTNAME = "0.0.0.0";
const PORT = 8080;
const app = express();

const base = '/';
app.use(base, express.static('dist/client/'));
app.use(ssrHandler);

app.listen(PORT, HOSTNAME);