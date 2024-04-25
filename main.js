
  

  var bar = new ProgressBar.Circle(po1, {
    color: '#aaa',
    
    strokeWidth: 4,
    trailWidth: 1,
    easing: 'easeInOut',
    duration: 2200,
    text: {
      autoStyleContainer: false
    },
    from: { color: '#EB5E5E', width: 30 },
    to: { color: '#5BF634', width: 30 },
    // Set default step function for all animate calls
    step: function(state, circle) {
      circle.path.setAttribute('stroke', state.color);
      circle.path.setAttribute('stroke-width', state.width);
  
      var value = Math.round(circle.value() * 100);
      if (value === 0) {
        circle.setText('');
      } else {
        circle.setText(value);
      }
  
    }
  });
  bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
  bar.text.style.fontSize = '30px';
  
  bar.animate(.50); 

  var bar = new ProgressBar.Circle(po2, {
    color: '#aaa',
    
    strokeWidth: 4,
    trailWidth: 1,
    easing: 'easeInOut',
    duration: 2200,
    text: {
      autoStyleContainer: false
    },
    from: { color: '#EB5E5E', width: 30 },
    to: { color: '#5BF634', width: 30 },
    // Set default step function for all animate calls
    step: function(state, circle) {
      circle.path.setAttribute('stroke', state.color);
      circle.path.setAttribute('stroke-width', state.width);
  
      var value = Math.round(circle.value() * 100);
      if (value === 0) {
        circle.setText('');
      } else {
        circle.setText(value);
      }
  
    }
  });
  bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
  bar.text.style.fontSize = '30px';
  
  bar.animate(.70); 
 

 var bar = new ProgressBar.Circle(po3, {
  color: '#aaa',
  
  strokeWidth: 4,
  trailWidth: 1,
  easing: 'easeInOut',
  duration: 2200,
  text: {
    autoStyleContainer: false
  },
  from: { color: '#EB5E5E', width: 30 },
  to: { color: '#5BF634', width: 30 },
  // Set default step function for all animate calls
  step: function(state, circle) {
    circle.path.setAttribute('stroke', state.color);
    circle.path.setAttribute('stroke-width', state.width);

    var value = Math.round(circle.value() * 100);
    if (value === 0) {
      circle.setText('');
    } else {
      circle.setText(value);
    }

  }
});
bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
bar.text.style.fontSize = '30px';

bar.animate(.80); 

var bar = new ProgressBar.Circle(po4, {
  color: '#aaa',
  
  strokeWidth: 4,
  trailWidth: 1,
  easing: 'easeInOut',
  duration: 2200,
  text: {
    autoStyleContainer: false
  },
  from: { color: '#EB5E5E', width: 30 },
  to: { color: '#5BF634', width: 30 },
  // Set default step function for all animate calls
  step: function(state, circle) {
    circle.path.setAttribute('stroke', state.color);
    circle.path.setAttribute('stroke-width', state.width);

    var value = Math.round(circle.value() * 100);
    if (value === 0) {
      circle.setText('');
    } else {
      circle.setText(value);
    }

  }
});
bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
bar.text.style.fontSize = '30px';

bar.animate(.90); 

var bar = new ProgressBar.Circle(po5, {
  color: '#aaa',
  
  strokeWidth: 4,
  trailWidth: 1,
  easing: 'easeInOut',
  duration: 2200,
  text: {
    autoStyleContainer: false
  },
  from: { color: '#EB5E5E', width: 30 },
  to: { color: '#5BF634', width: 30 },
  // Set default step function for all animate calls
  step: function(state, circle) {
    circle.path.setAttribute('stroke', state.color);
    circle.path.setAttribute('stroke-width', state.width);

    var value = Math.round(circle.value() * 100);
    if (value === 0) {
      circle.setText('');
    } else {
      circle.setText(value);
    }

  }
});
bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
bar.text.style.fontSize = '30px';

bar.animate(.69); 

var bar = new ProgressBar.Circle(po6, {
  color: '#aaa',
  
  strokeWidth: 4,
  trailWidth: 1,
  easing: 'easeInOut',
  duration: 2200,
  text: {
    autoStyleContainer: false
  },
  from: { color: '#EB5E5E', width: 30 },
  to: { color: '#5BF634', width: 30 },
  // Set default step function for all animate calls
  step: function(state, circle) {
    circle.path.setAttribute('stroke', state.color);
    circle.path.setAttribute('stroke-width', state.width);

    var value = Math.round(circle.value() * 100);
    if (value === 0) {
      circle.setText('');
    } else {
      circle.setText(value);
    }

  }
});
bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
bar.text.style.fontSize = '30px';

bar.animate(.80); 

var bar = new ProgressBar.Circle(po7, {
  color: '#aaa',
  
  strokeWidth: 4,
  trailWidth: 1,
  easing: 'easeInOut',
  duration: 2200,
  text: {
    autoStyleContainer: false
  },
  from: { color: '#EB5E5E', width: 30 },
  to: { color: '#5BF634', width: 30 },
  // Set default step function for all animate calls
  step: function(state, circle) {
    circle.path.setAttribute('stroke', state.color);
    circle.path.setAttribute('stroke-width', state.width);

    var value = Math.round(circle.value() * 100);
    if (value === 0) {
      circle.setText('');
    } else {
      circle.setText(value);
    }

  }
});
bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
bar.text.style.fontSize = '30px';

bar.animate(.20); 

var bar = new ProgressBar.Circle(po8, {
  color: '#aaa',
  
  strokeWidth: 4,
  trailWidth: 1,
  easing: 'easeInOut',
  duration: 2200,
  text: {
    autoStyleContainer: false
  },
  from: { color: '#EB5E5E', width: 30 },
  to: { color: '#5BF634', width: 30 },
  // Set default step function for all animate calls
  step: function(state, circle) {
    circle.path.setAttribute('stroke', state.color);
    circle.path.setAttribute('stroke-width', state.width);

    var value = Math.round(circle.value() * 100);
    if (value === 0) {
      circle.setText('');
    } else {
      circle.setText(value);
    }

  }
});
bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
bar.text.style.fontSize = '30px';

bar.animate(.70); 

var bar = new ProgressBar.Circle(po9, {
  color: '#aaa',
  
  strokeWidth: 4,
  trailWidth: 1,
  easing: 'easeInOut',
  duration: 2200,
  text: {
    autoStyleContainer: false
  },
  from: { color: '#EB5E5E', width: 30 },
  to: { color: '#5BF634', width: 30 },
  // Set default step function for all animate calls
  step: function(state, circle) {
    circle.path.setAttribute('stroke', state.color);
    circle.path.setAttribute('stroke-width', state.width);

    var value = Math.round(circle.value() * 100);
    if (value === 0) {
      circle.setText('');
    } else {
      circle.setText(value);
    }

  }
});
bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
bar.text.style.fontSize = '30px';

bar.animate(.10); 

var bar = new ProgressBar.Circle(po10, {
  color: '#aaa',
  
  strokeWidth: 4,
  trailWidth: 1,
  easing: 'easeInOut',
  duration: 2200,
  text: {
    autoStyleContainer: false
  },
  from: { color: '#EB5E5E', width: 30 },
  to: { color: '#5BF634', width: 30 },
  // Set default step function for all animate calls
  step: function(state, circle) {
    circle.path.setAttribute('stroke', state.color);
    circle.path.setAttribute('stroke-width', state.width);

    var value = Math.round(circle.value() * 100);
    if (value === 0) {
      circle.setText('');
    } else {
      circle.setText(value);
    }

  }
});
bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
bar.text.style.fontSize = '30px';

bar.animate(.350); 

var bar = new ProgressBar.Circle(po11, {
  color: '#aaa',
  
  strokeWidth: 4,
  trailWidth: 1,
  easing: 'easeInOut',
  duration: 2200,
  text: {
    autoStyleContainer: false
  },
  from: { color: '#EB5E5E', width: 30 },
  to: { color: '#5BF634', width: 30 },
  // Set default step function for all animate calls
  step: function(state, circle) {
    circle.path.setAttribute('stroke', state.color);
    circle.path.setAttribute('stroke-width', state.width);

    var value = Math.round(circle.value() * 100);
    if (value === 0) {
      circle.setText('');
    } else {
      circle.setText(value);
    }

  }
});
bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
bar.text.style.fontSize = '30px';

bar.animate(.69); 

var bar = new ProgressBar.Circle(po12, {
  color: '#aaa',
  
  strokeWidth: 4,
  trailWidth: 1,
  easing: 'easeInOut',
  duration: 2200,
  text: {
    autoStyleContainer: false
  },
  from: { color: '#EB5E5E', width: 30 },
  to: { color: '#5BF634', width: 30 },
  // Set default step function for all animate calls
  step: function(state, circle) {
    circle.path.setAttribute('stroke', state.color);
    circle.path.setAttribute('stroke-width', state.width);

    var value = Math.round(circle.value() * 100);
    if (value === 0) {
      circle.setText('');
    } else {
      circle.setText(value);
    }

  }
});
bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
bar.text.style.fontSize = '30px';

bar.animate(.99); 

var bar = new ProgressBar.Circle(po13, {
  color: '#aaa',
  
  strokeWidth: 4,
  trailWidth: 1,
  easing: 'easeInOut',
  duration: 2200,
  text: {
    autoStyleContainer: false
  },
  from: { color: '#EB5E5E', width: 30 },
  to: { color: '#5BF634', width: 30 },
  // Set default step function for all animate calls
  step: function(state, circle) {
    circle.path.setAttribute('stroke', state.color);
    circle.path.setAttribute('stroke-width', state.width);

    var value = Math.round(circle.value() * 100);
    if (value === 0) {
      circle.setText('');
    } else {
      circle.setText(value);
    }

  }
});
bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
bar.text.style.fontSize = '30px';

bar.animate(.70); 

var bar = new ProgressBar.Circle(GrandAverage, {
  color: '#aaa',
  
  strokeWidth: 4,
  trailWidth: 1,
  easing: 'easeInOut',
  duration: 2200,
  text: {
    autoStyleContainer: false
  },
  from: { color: '#EB5E5E', width: 30 },
  to: { color: '#5BF634', width: 30 },
  // Set default step function for all animate calls
  step: function(state, circle) {
    circle.path.setAttribute('stroke', state.color);
    circle.path.setAttribute('stroke-width', state.width);

    var value = Math.round(circle.value() * 100);
    if (value === 0) {
      circle.setText('');
    } else {
      circle.setText(value);
    }

  }
});
bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
bar.text.style.fontSize = '30px';

bar.animate(.70); 