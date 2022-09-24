/**
 * 
 * 
 */
import bodyParser from 'body-parser';
import cors from 'cors';
import express from 'express';
import dotenv from 'dotenv';
import helmet from 'helmet';

dotenv.config();

const app = express();

app.set('trust proxy', 1);
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));
app.use(helmet());
app.use(cors({
	origin: '',
	credentials: true
}))

export default app;
