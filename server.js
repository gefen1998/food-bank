const express = require('express');
const bodyParser = require('body-parser');
const mongoose = require('mongoose');
const app = express();

const recipeApi = require('./routes/recipeApi.js')
const commentApi = require('./routes/commentApi.js')

app.listen(process.env.PORT || '8080');

mongoose.connect(process.env.CONNECTION_STRING|| 'mongodb://localhost/foodMoodDB', function() {
  console.log("DB connection established!!!");
})

app.use(express.static('public'));
app.use(express.static('node_modules'));

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));

app.use('/recipes', recipeApi);
app.use('/comments', commentApi);

app.listen(SERVER_PORT, () => {
  console.log("Server started on port " + SERVER_PORT);
});