var formObjectTemp = {
  heading: "Add New Student",
  multiColumn: true,
  data: [{
    name: "select_center",
    label: "Select Center",
    type: "select",
    options: [{
      value: "",
      label: "Select Center"
    }, {
      value: "RGYCSM - KUMRA HOSPITAL MATH",
      label: "RGYCSM - KUMRA HOSPITAL MATH"
    }]
  }, {
    name: "student_name",
    label: "Enter Student Name",
    type: "text"
  }, {
    name: "gender",
    label: "Select Gender",
    type: "radio",
    options: [{
      value: "male",
      label: "Male"
    }, {
      value: "female",
      label: "Female"
    }]
  }, {
    name: "marital_status",
    label: "Marital Status",
    type: "radio",
    options: [{
      value: "married",
      label: "Married"
    }, {
      value: "Single",
      label: "Single"
    }]
  }, {
    name: "fathers_name",
    label: "Enter Father's Name",
    type: "text"
  }, {
    name: "date",
    label: "Date of birth (dd/mm/yyyy)",
    type: "date"
  }, {
    name: "profile_image",
    label: "Upload Profile Image",
    type: "file",
    required: true,
    subtext: "100kb to 250kb"
  }]
};
(function ($) {
  function createFormFields(formObject, elTag) {
    var parentElement = $(elTag);
    var heading = $("<h1>");
    heading.addClass("h3 mb-4 text-gray-800")
    heading.html(formObject.heading)
    heading.appendTo(parentElement);


    // Creating form
    var form = $("<form>");
    var row = $("<div>");
    row.addClass("row");
    var mean = formObject.data.length;
    var numberOfColumn = 1;
    if (formObject.multiColumn) {
      numberOfColumn = 2;
      mean = Math.ceil(formObject.data.length / 2)
    }

    for (var i = 0; i < numberOfColumn; i++) {
      // console.log(mean, formObject.data.length)
      var col = $("<div>");
      col.addClass("col-5");

      if (i === 0) {
        for (var j = 0; j < mean; j++) {
          createFormGroup(col, formObject.data[j])
        }
      } else {
        for (var j = mean; j < formObject.data.length; j++) {
          createFormGroup(col, formObject.data[j])
        }
      }

      col.appendTo(row)
    }


    row.appendTo(form);
    form.appendTo(parentElement);
    // console.log(parentElement)
  }

  function createFormGroup(col, elData) {
    var formGroup = $("<div>");
    formGroup.addClass("form-group");

    var label = $("<label>");
    label.html(elData.label);
    label.attr("for", elData.name);
    label.attr("name", elData.name);
    label.appendTo(formGroup);

    switch (elData.type) {
      case "select" : {
        var select = $("<select>");
        select.addClass("custom-select mr-sm-2")
        select.attr("id", elData.name);
        for (var i = 0; i < elData.options.length; i++) {
          var options = $("<option>");
          options.attr("value", elData.options[i].value);
          options.html(elData.options[i].label);
          options.appendTo(select);
        }
        select.appendTo(formGroup);
        break
      }

      case "text": {
        var input = $("<input>");
        input.addClass("form-control");
        input.attr("id", elData.name);
        input.attr("type", "text");
        input.attr("placeholder", elData.placeholder);
        input.appendTo(formGroup);
        break
      }
      case "radio": {
        elData.options.forEach(function (obj, index) {
          var customControl = $("<div>");
          customControl.addClass("custom-control custom-radio custom-control-inline");
          $("<input>").attr("type", "radio").attr("name", elData.name).attr("id", elData.name + index).addClass("custom-control-input").appendTo(customControl)
          $("<label>").attr("for", elData.name + index).addClass("custom-control-label").html(obj.label).appendTo(customControl)
          customControl.appendTo(formGroup)
        })
        break;
      }
      case "file": {
        var input = $("<input>");
        input.addClass("form-control-file");
        input.attr("id", elData.name);
        input.attr("type", "file");
        input.attr("placeholder", elData.placeholder);
        input.appendTo(formGroup);
        break;
      }
      case "date": {
        var input = $("<input>");
        input.addClass("form-control");
        input.attr("id", elData.name);
        input.attr("type", "date");
        input.appendTo(formGroup);
        break;
      }
    }

    formGroup.appendTo(col);
    // console.log(col, elData);
  }

  createFormFields(formObjectTemp, "#addNewStudent")
})(jQuery); // End of use strict
