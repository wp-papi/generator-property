'use strict';
var path = require('path');
var yeoman = require('yeoman-generator');
var yosay = require('yosay');

var PropertyTypeGenerator = yeoman.generators.Base.extend({
  init: function () {
    this.pkg = require('../package.json');

    this.on('end', function () {
      if (!this.options['skip-install']) {
        this.installDependencies();
      }
    });
  },

  askFor: function () {
    var done = this.async();

    // Have Yeoman greet the user.
    this.log(yosay('Welcome to the Property type generator for Page Type Builder for WordPress!'));

    var prompts = [
      {
        name: 'propertyName',
        message: 'What is the name of the property type?',
        default: 'Kvack'
      },
      {
        name: 'description',
        message: 'What is the description of the property type?',
        default: 'This is the most awesome property plugin'
      },

      {
        name: 'author',
        message: 'What is the author\'s name of the property type?',
        default: 'You'
      },
    ];

    this.prompt(prompts, function (props) {
      this.propertyName = props.propertyName.toLowerCase().replace(/^property$/, '');
      this.propertyName = this.propertyName.replace(/^(.)|\s(.)/g, function (letter) {
        return letter.toUpperCase();
      });

      this.description = props.description;
      this.author = props.author;

      this.dirname = 'ptb-property-' + this.propertyName.toLowerCase();

      done();
    }.bind(this));
  },

  enforceFolderName: function () {
    if (this.dirname !== this._.last(this.destinationRoot().split(path.sep))) {
      this.destinationRoot(this.dirname);
    }
  },

  app: function () {},

  projectfiles: function () {
    this.copy('editorconfig', '.editorconfig');
    this.template('class-property-name.php', 'class-property-' + this.propertyName.toLowerCase() + '.php');
    this.template('bootstrap.php', 'bootstrap.php');
  }
});

module.exports = PropertyTypeGenerator;
