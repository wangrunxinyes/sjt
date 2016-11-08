'use strict';

window.onload = function() {
  var svgMorpheus = new SVGMorpheus('#icon'),
    selIcon = document.getElementById('selIcon'),
    selEasing = document.getElementById('selEasing'),
    selDuration = document.getElementById('selDuration'),
    selRotation = document.getElementById('selRotation'),
    icons = {
      'loyalty': 'make a tag',
      'receipt': ' publish ',
      'favorite': 'your love ',
    },
    easings = {
      'elastic-in': 'Elastic In',
    },
    durations = [1500],
    rotations = {
      'clock': 'Clockwise',
      'counterclock': 'Counterclockwise',
      'random': 'Random',
      'none': 'None'
    };

  var key, i, len;

  for (key in icons) {
    selIcon.options[selIcon.options.length] = new Option(icons[key], key);
  }

  for (key in easings) {
    selEasing.options[selEasing.options.length] = new Option(easings[key], key);
  }

  for (i = 0, len = durations.length; i < len; i++) {
    selDuration.options[selDuration.options.length] = new Option(durations[i], durations[i]);
  }

  for (key in rotations) {
    selRotation.options[selRotation.options.length] = new Option(rotations[key], key);
  }


  selIcon.selectedIndex = selIcon.options.length - 1;
  selEasing.selectedIndex = 0;
  selDuration.selectedIndex = 0;
  selRotation.selectedIndex = 0;

  function getSelValue(sel) {
    return sel.options[sel.selectedIndex].value;
  }

  var timeoutInstance, manualChange = false;
  var selectindex = 0;

  function onIconChange() {
    clearTimeout(timeoutInstance);
    var valIcon = getSelValue(selIcon),
      valEasing = getSelValue(selEasing),
      valDuration = getSelValue(selDuration),
      valRotation = getSelValue(selRotation);
    svgMorpheus.to(valIcon, {
      duration: valDuration,
      easing: valEasing,
      rotation: valRotation
    }, !manualChange ? launchTimer : null);
    $(".affection-label").html($("#selIcon option:selected").text());
  }

  function timerTick() {
    var selIndex = selIcon.selectedIndex;
    while (selIndex === selIcon.selectedIndex) {
      // selIndex=Math.round(Math.random()*(selIcon.options.length-1));
      selIndex = selectindex;
      if (selectindex == selIcon.options.length - 1) {
        selectindex = 0;
      } else {
        selectindex++;
      }
    }
    selIcon.selectedIndex = selIndex;
    onIconChange();
  }

  function launchTimer() {
    timeoutInstance = setTimeout(timerTick, 1000);
  }
  selIcon.addEventListener('change', onIconChange);
  selIcon.addEventListener('click', function() {
    clearTimeout(timeoutInstance);
    manualChange = true;
  });

  launchTimer();
};