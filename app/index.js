'use strict';
var path = require('path');
var yeoman = require('yeoman-generator');
var yosay = require('yosay');

var PropertyGenerator = yeoman.generators.Base.extend({
  init: function () {
    this.pkg = require('../package.json');
  },

  askFor: function () {
    var done = this.async();

    // Have Yeoman greet the user.
    this.log(yosay('Welcome to the property generator for Papi!'));

    var prompts = [
      {
        name: 'propertyName',
        message: 'What is the name of the property?',
        default: 'Kvack'
      },
      {
        name: 'description',
        message: 'What is the description of the property?',
        default: 'This is the most awesome property plugin'
      },

      {
        name: 'author',
        message: 'What is the author\'s name of the property?',
        default: 'You'
      },
    ];

    this.prompt(prompts, function (props) {
      var parts = props.propertyName.split(/(?=[A-Z])/);

      for(var i = 0, l = parts.length; i < l; i++) {
        parts[i] = parts[i].toLowerCase().replace(/^property$/, '');
        parts[i] = parts[i].charAt(0).toUpperCase() + parts[i].slice(1);
        parts[i] = parts[i].trim();
      }

      this.propertyName = parts.join('_');

      this.description = props.description;
      this.author = props.author;

      this.dirname = 'papi-property-' + this.propertyName.replace('_', '-').toLowerCase();

      done();
    }.bind(this));
  },

  enforceFolderName: function () {
    if (this.dirname !== this._.last(this.destinationRoot().split(path.sep))) {
      this.destinationRoot(this.dirname);
    }
  },

  projectfiles: function () {
    this.copy('editorconfig', '.editorconfig');
    this.template('class-papi-property-name.php', 'class-papi-property-' + this.propertyName.replace('_', '-').toLowerCase() + '.php');
    this.template('bootstrap.php', 'bootstrap.php');
  }
});

module.exports = PropertyGenerator;
