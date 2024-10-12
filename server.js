const express = require('express');
const path = require('path');
const app = express();
const port = 3000;

app.use(express.static(path.join(__dirname, 'csv-table-display')));

app.get('/', (req, res) => {
  res.sendFile(path.join(__dirname, 'csv-table-display', 'demo.html'));
});

app.listen(port, () => {
  console.log(`Demo server running at http://localhost:${port}`);
});