$(document).ready(function() {

  var toDoList = ['Thing'];

  function clearList() {
    $('.list').html('');
  }

  function loadList(list) {
    clearList();
    if (list.length > 0) {
      console.log('the list is populated');
      for (i = 0; i < toDoList.length; i++) {
        var item = '<input type="checkbox" name="checkListItem" value="' + toDoList[i] + '">' + toDoList[i] + '<br>';
        $('.list').append(item);
      }
    }
  }

  function addListItem() {
    var thingToAdd = $('#thingToDo').val();
    toDoList.push(thingToAdd);
    $('#thingToDo').val('');
  }

  function completeListItems() {
    var items = [];
    $('input:checked').each(function() {
      items.push($(this).val());
    });
    console.log(items);
    for (i=0; i < items.length; i++) {
      toDoList.splice(toDoList.indexOf(items[i]), 1);
    };
  }

  $('form').submit(function(e) {
    e.preventDefault();
    if ($('#thingToDo').val()) {
      addListItem();
    }
    if ($('input:checked').val()) {
      completeListItems();
    }
    loadList(toDoList);
  });

  loadList(toDoList);

});