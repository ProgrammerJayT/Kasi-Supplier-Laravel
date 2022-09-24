/**
 * 
 * 
 */
import http from 'http';
import ip from 'ip';
import app from './app.js';

const PORT = process.env.PORT || 5500;
const server = http.createServer(app);

server.listen(PORT, () => {
	console.log(`Server started on ${ip.address()}:${PORT}`);
});
