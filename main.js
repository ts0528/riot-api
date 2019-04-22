(function() {
  'use strict';

  var ths = document.getElementsByTagName('th');
  var sortOrder = 1; // 1: 昇順、-1: 降順

  function rebuildTbody(rows) {
    var tbody = document.querySelector('tbody');
    var i;
    while (tbody.firstChild) {
      tbody.removeChild(tbody.firstChild);
    }
    for (i = 0; i < rows.length; i++) {
      tbody.appendChild(rows[i]);
    }
  }

  function updateClassName(th) {
    var k;
    for (k = 0; k < ths.length; k++) {
      ths[k].className = '';
    }
    th.className = sortOrder === 1 ? 'asc' : 'desc';
  }

  function compare(a, b, col, type) {
    var _a = a.children[col].textContent;
    var _b = b.children[col].textContent;
    if (type === "number") {
      _a = _a.replace( /\,/g , "" ) ;
      _a = _a * 1;
      _b = _b.replace( /\,/g , "" ) ;
      _b = _b * 1;
    } else if (type === "string") {
      _a = _a.toLowerCase();
      _b = _b.toLowerCase();
    }else if (type === "game") {
    	//window.alert("勝敗率"+_a);

    	//_a = _a.substr(-4,3);
    	_a = _a.split("　");
    	//window.alert("勝敗率"+_a[1]);
    	//_a = _a.replace(/\s+/g, "");
        _a = _a[1].replace( /%/g , "" ) ;
        _a = _a * 1;
    	//window.alert("勝敗率"+_a);

    	_b = _b.split("　");

        //_b = _b.substr(-4,2);
        //_b = _b.replace(/\s+/g, "");
        _b = _b[1].replace( /%/g , "" ) ;
        _b = _b * 1;
      }else if (type === "KDA") {
    	  
      	_a = _a.split(" ");
      	_a = _a[1];
      	
      	_a = _a.split(":");
      	_a = _a[0];
      	
      	if(_a=="perfect"){
      		_a=100;
      	}
      	
        _a = _a * 1;
      	
      	_b = _b.split(" ");
      	_b = _b[1];
      	
      	_b = _b.split(":");
      	_b = _b[0];
      	
      	if(_b=="perfect"){
      		_b=100;
      	}
      	
        _b = _b * 1;
      }
    if (_a < _b) {
      return -1;
    }
    if (_a > _b) {
      return 1;
    }
    return 0;
  }

  function sortRows(th) {
    var rows = Array.prototype.slice.call(document.querySelectorAll('tbody > tr'));
    var col = th.cellIndex;
    var type = th.dataset.type; // string, number
    rows.sort(function(a, b) { // tr, tr
      return compare(a, b, col, type) * sortOrder;
    });
    return rows;
  }

  function setup() {
    var i;
    for (i = 0; i < ths.length; i++) {
      ths[i].addEventListener('click', function() {
        var rows;
        rows = sortRows(this);
        rebuildTbody(rows);
        updateClassName(this);
        sortOrder *= -1;
      });
    }
  }

  setup();

})();
