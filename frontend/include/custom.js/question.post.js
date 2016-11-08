var handle_save_question = {

  createNew: function() {

    var item = {};

    item.createJson = function() {
      var data = {};
      var question = new Array();
      data['security_key'] = $(".fudan_securty").attr("security");
      data['type'] = $(".fudan_securty").attr("type");
      data['identify'] = $(".fudan_securty").attr("identify");
      i = 1;
      while ($("#q" + i).length > 0) {
        question[i] = $("#q" + i).val();
        i++;
      }
      data['data'] = question;
      data = JSON.stringify(data);
      return data;
    }

    item.sending = function() {

      var url = $(".fudan_securty").attr("target");

      params = "json=" + item.createJson();

      var post = false;

      $.ajax({

        type: "POST",

        data: params,

        url: url,

        cache: false,

        async: false,

        beforeSend: function() {},

        success: function(data) {
          if (data == "success") {
            post = true;
          } else {
            console.log(data);
          }
        },

        complete: function(XMLHttpRequest, textStatus) {

        },

        error: function() {

        }

      });

      return post;
    }
    return item;
  }
}