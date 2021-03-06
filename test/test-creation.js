/*global describe, beforeEach, it */
'use strict';
var path = require('path');
var helpers = require('yeoman-generator').test;

describe('property generator', function () {
  beforeEach(function (done) {
    helpers.testDirectory(path.join(__dirname, 'temp'), function (err) {
      if (err) {
        return done(err);
      }

      this.app = helpers.createGenerator('property:app', [
        '../../app'
      ]);
      done();
    }.bind(this));
  });

  it('creates kvack', function (done) {
    var expected = [
      // add files you expect to exist here.
      'class-papi-property-kvack.php',
      'bootstrap.php'
    ];

    helpers.mockPrompt(this.app, {
      'propertyName': 'Kvack',
      'description': 'Yet another great tool',
      'author': 'Fredrik'
    });
    this.app.options['skip-install'] = true;
    this.app.run({}, function () {
      helpers.assertFile(expected);
      done();
    });
  });

  it('creates kvack image', function (done) {
    var expected = [
      // add files you expect to exist here.
      'class-papi-property-kvack-image.php',
      'bootstrap.php'
    ];

    helpers.mockPrompt(this.app, {
      'propertyName': 'Kvack Image',
      'description': 'Yet another great tool',
      'author': 'Fredrik'
    });
    this.app.options['skip-install'] = true;
    this.app.run({}, function () {
      helpers.assertFile(expected);
      done();
    });
  });

  it('creates kvack video', function (done) {
    var expected = [
      // add files you expect to exist here.
      'class-papi-property-kvack-video.php',
      'bootstrap.php'
    ];

    helpers.mockPrompt(this.app, {
      'propertyName': 'KvackVideo',
      'description': 'Yet another great tool',
      'author': 'Fredrik'
    });
    this.app.options['skip-install'] = true;
    this.app.run({}, function () {
      helpers.assertFile(expected);
      done();
    });
  });
});
