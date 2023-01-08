"use strict";

var chats = [
    {
        text: "Hi, dude!",
        position: "left",
    },
    {
        text: "Wat?",
        position: "right",
    },
    {
        text: "You wanna know?",
        position: "left",
    },
    {
        text: "Wat?!",
        position: "right",
    },
    {
        typing: true,
        position: "left",
    },
];

fetch("/qna", {
    method: "GET",
    headers: {
        Accept: "application/json",
        "Content-Type": "application/json",
    },
})
    .then(function (response) {
        return response.json();
    })
    .then(function (questions) {
        // let m = data.data_kategori;
        // let q = data.data_toko;

        // for (const element in q) {
        //     quantities.push(q[element].produk_count);
        //     produkLabels.push(q[element].nama);
        // }

        // for (const element in m) {
        //     kategoriLabels.push(m[element].nama);
        //     kategoriLengths.push(m[element].produk_count);
        // }

        console.log(questions);
        for (var i = 0; i < chats.length; i++) {
            var type = "text";
            if (chats[i].typing != undefined) type = "typing";
            $.chatCtrl("#mychatbox", {
                text: chats[i].text != undefined ? chats[i].text : "",
                picture:
                    chats[i].position == "left"
                        ? "/img/avatar/avatar-1.png"
                        : "/img/avatar/avatar-2.png",
                position: "chat-" + chats[i].position,
                type: type,
            });
        }

        $("#chat-form").submit(function () {
            var me = $(this);

            if (me.find("input").val().trim().length > 0) {
                $.chatCtrl("#mychatbox", {
                    text: me.find("input").val(),
                    picture: "/img/avatar/avatar-2.png",
                });
                me.find("input").val("");
            }
            return false;
        });
    })
    .catch(function (err) {
        console.log(err);
    });
